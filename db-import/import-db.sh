#!/usr/bin/env bash
# Importa el dump de producción (MariaDB) en el MySQL del entorno Docker.
# Uso (desde humanas-l13):  ./db-import/import-db.sh /ruta/dbhumanas.sql
set -euo pipefail
HERE="$(cd "$(dirname "$0")" && pwd)"; cd "$HERE/.."
DUMP="${1:?Uso: $0 /ruta/dbhumanas.sql}"
[[ -f "$DUMP" ]] || { echo "No existe $DUMP"; exit 1; }
export HOST_UID="${SUDO_UID:-$(id -u)}" HOST_GID="${SUDO_GID:-$(id -g)}"
DC="docker compose"
MYSQL="$DC exec -T db mysql -uroot -proot_local"

$DC up -d --wait db

echo "==> 1/6 Respaldo de la base actual de pruebas"
mkdir -p db-import/backup
$DC exec -T db mysqldump -uroot -proot_local humanas > "db-import/backup/humanas-antes-$(date +%Y%m%d-%H%M%S).sql" 2>/dev/null || true

echo "==> 2/6 Alineando la migración de Sanctum con la ya registrada en el dump"
# El dump ya trae personal_access_tokens y registra '2019_12_14_000001_create_personal_access_tokens_table'.
# Se renombra la migración publicada para que coincida y no intente crear la tabla de nuevo.
for f in src/database/migrations/*_create_personal_access_tokens_table.php; do
  [[ -e "$f" ]] || continue
  [[ "$(basename "$f")" == 2019_12_14_000001_* ]] || mv "$f" src/database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php
done

echo "==> 3/6 Recreando la base e importando el dump"
$MYSQL -e "DROP DATABASE IF EXISTS humanas; CREATE DATABASE humanas CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
$MYSQL --default-character-set=utf8mb4 humanas < "$DUMP"

echo "==> 4/6 Normalizando rutas de archivos y limpiando sesiones"
$MYSQL --default-character-set=utf8mb4 humanas < db-import/normalizar-rutas.sql

echo "==> 5/6 Migraciones pendientes y cachés"
$DC run --rm --no-deps -T app php artisan migrate --force
$DC run --rm --no-deps -T app php artisan optimize:clear

echo "==> 6/6 Filas por tabla"
$MYSQL -N humanas -e "
SELECT 'users',COUNT(*) FROM users UNION ALL SELECT 'roles',COUNT(*) FROM roles UNION ALL SELECT 'permissions',COUNT(*) FROM permissions
UNION ALL SELECT 'docentes',COUNT(*) FROM docentes UNION ALL SELECT 'eventos',COUNT(*) FROM eventos UNION ALL SELECT 'noticias',COUNT(*) FROM noticias
UNION ALL SELECT 'publicaciones',COUNT(*) FROM publicaciones UNION ALL SELECT 'llamadosSeleccion',COUNT(*) FROM llamadosSeleccion
UNION ALL SELECT 'pasantias',COUNT(*) FROM pasantias UNION ALL SELECT 'programas_institucionales',COUNT(*) FROM programas_institucionales;" | column -t
echo
echo "Falta copiar los archivos subidos (imágenes/PDF) a src/storage/app/public/  -> ver db-import/LEEME.md"
