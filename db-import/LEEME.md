# Llevar los datos de producción al sitio nuevo

## 1) Importar la base
Desde la carpeta `humanas-l13`:
```bash
unzip db-import.zip
./db-import/import-db.sh /ruta/a/dbhumanas.sql
```
El script respalda la base de pruebas actual (en `db-import/backup/`), la recrea, importa el dump,
pasa las rutas con `\` a `/`, vacía sesiones y tokens de reseteo, y corre `migrate` (no debería haber nada pendiente).

Después de importar, **el usuario `admin@admin.com` de los seeders ya no existe**: se entra con los usuarios reales de producción
(con sus contraseñas actuales; los hash son compatibles).

## 2) Copiar los archivos subidos
La base solo guarda las rutas. Los archivos están en el servidor de producción, en `storage/app/public/`. Copiá estas carpetas a `src/storage/app/public/`:

```
eventos/imagenes   eventos/resoluciones
docentes/imagenes  docentes/CV
noticias/imagenes  publicaciones/imagenes
llamadosSeleccion/resoluciones  llamadosSeleccion/actasFinales
```
Por ejemplo: `rsync -av usuario@servidor:/ruta/al/proyecto/storage/app/public/ src/storage/app/public/`

Sin esos archivos el sitio muestra los textos y listados, pero imágenes y PDF dan 404.
nginx los sirve desde `/storage/public/...` y `/files/public/...` (ver `merge-main/`).

## 3) Qué queda tal cual
- Tablas `cursos` y `tipos_cursos` (con datos): el código actual no las usa; se conservan por si hacen falta.
- Enlaces escritos dentro del contenido que apuntan a `https://www.humanas.unlpam.edu.ar/...` siguen apuntando a producción.
- La base trae datos personales reales (usuarios, correos, docentes): no la subas a repositorios ni la compartas.
