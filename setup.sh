#!/usr/bin/env bash
# Crea el proyecto Laravel 13 en ./src, le aplica el código portado (./overlay)
# y levanta el entorno. Ejecutar DENTRO de WSL (ej: ~/humanas-l13), no en /mnt/c.
#   ./setup.sh           -> instala y migra
#   ./setup.sh --seed    -> además carga los seeders (admin@admin.com / admin)
set -euo pipefail
cd "$(dirname "$0")"

# UID/GID del usuario real (aunque se ejecute con sudo). Nunca root.
if [[ -n "${SUDO_UID:-}" ]]; then HOST_UID="$SUDO_UID"; HOST_GID="$SUDO_GID"
else HOST_UID="$(id -u)"; HOST_GID="$(id -g)"; fi
if [[ "$HOST_UID" == "0" ]]; then HOST_UID=1000; HOST_GID=1000; fi
export HOST_UID HOST_GID
if [[ "$(id -u)" != "0" ]] && ! docker info >/dev/null 2>&1; then
  echo "Docker no responde para tu usuario. Probá: sudo usermod -aG docker \$USER  (y reabrí la terminal de WSL)"; exit 1
fi
DC="docker compose"
ARTISAN="$DC run --rm --no-deps -T app php artisan"

if [[ "$PWD" == /mnt/* ]]; then
  echo "AVISO: estás en /mnt/c (disco de Windows). Muévelo a tu home de WSL (~/) o será muy lento."
fi

echo "==> 1/7 Construyendo imagen PHP 8.3"
$DC build app

if [[ ! -f src/artisan ]]; then
  echo "==> 2/7 Creando esqueleto de Laravel 13"
  $DC run --rm --no-deps -T -w /work -v "$PWD":/work app \
    composer create-project laravel/laravel src "^13.0" --no-interaction --prefer-dist
  # migraciones/archivos del esqueleto que chocan con los del proyecto original
  rm -f src/database/migrations/* src/tests/Feature/ExampleTest.php
else
  echo "==> 2/7 ./src ya existe, se reutiliza"
fi

echo "==> 3/7 Aplicando código portado"
cp -a overlay/. src/
cp .env.docker src/.env

echo "==> 4/7 Instalando paquetes (fortify, sanctum, spatie/laravel-permission)"
$DC run --rm --no-deps -T app composer require laravel/fortify laravel/sanctum spatie/laravel-permission \
  --no-interaction --with-all-dependencies
$ARTISAN vendor:publish --tag=sanctum-migrations --force || true
$ARTISAN vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag=permission-config || true
$ARTISAN key:generate --force

echo "==> 5/7 Levantando base de datos y migrando"
$DC up -d db mailpit
$ARTISAN migrate --force
if [[ "${1:-}" == "--seed" ]]; then $ARTISAN db:seed --force; fi
$ARTISAN storage:link || true

echo "==> 6/7 Compilando assets (Vite)"
$DC run --rm --no-deps -T --user "$HOST_UID:$HOST_GID" -w /var/www/html node sh -c "npm install && npm run build"

echo "==> 7/7 Levantando web"
$DC up -d app web

echo
echo "Listo:  http://localhost:8080/admin/login   (sitio público: http://localhost:8080/)"
echo "Correos de prueba (Mailpit): http://localhost:8025"
echo "Tests: docker compose run --rm app php artisan test"
