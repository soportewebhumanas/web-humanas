# humanasAdmin → Laravel 13 (Docker en WSL)

## Cómo probarlo

1. Descomprimí esta carpeta **dentro de WSL** (ej. `~/humanas-l13`), no en `/mnt/c`.
2. Docker Desktop con integración WSL activada para tu distro Ubuntu.
3. Desde esa carpeta:
   ```bash
   ./setup.sh --seed     # sin --seed si vas a importar tu propia base
   ```
   Crea `./src` (Laravel 13 limpio) + aplica `./overlay` (código portado), instala paquetes, migra y compila assets.
4. Abrir:
   - Admin: http://localhost:8080/admin/login  (con `--seed`: `admin@admin.com` / `admin`)
   - Sitio público: http://localhost:8080/
   - Correos de prueba: http://localhost:8025
   - MySQL desde Windows/WSL: `127.0.0.1:3307`, base `humanas`, usuario `humanas` / `humanas_local`

Comandos útiles:
```bash
docker compose run --rm app php artisan test
docker compose run --rm app php artisan migrate:fresh --seed
docker compose --profile dev up node        # Vite en modo desarrollo
```

Importar un dump de producción (en vez de seeders):
```bash
docker compose exec -T db mysql -uroot -proot_local humanas < dump.sql
```
Si el dump ya trae la tabla `migrations` de Laravel 8, no corras `migrate:fresh`.
Los archivos subidos van en `src/storage/app/public/...` (conservando `public/eventos/...`).

## Qué se cambió

| Tema | Antes | Ahora |
|---|---|---|
| Framework | Laravel 8.42, PHP 7.3/8.0 | Laravel 13, PHP 8.3 |
| Esqueleto | `Kernel`, `Handler`, `RouteServiceProvider`, etc. | Estructura slim (`bootstrap/app.php`, `bootstrap/providers.php`) |
| Auth | Jetstream + Livewire + Fortify | Solo Fortify (login y reset de contraseña) + Sanctum |
| Permisos | spatie/laravel-permission 3 | versión vigente; config publicada nueva |
| Frontend | Mix, Tailwind 2, Alpine 2 | Vite, Tailwind 3, Alpine 3 |
| Componentes `x-jet-*` | del paquete Jetstream | `x-jet.*` (copiados a `resources/views/components/jet`) |
| Idiomas | `resources/lang` | `lang/` |
| Archivos subidos | `/humanasAdmin/storage/app/...` (storage expuesto) | `/files/public/...` (nginx sirve solo `storage/app/public`) |

## Arreglos de seguridad incluidos

- **`PUT /admin/updatePassword` y `/admin/updateDatosPersonales`** recibían el `id` del formulario sin ninguna comprobación y las rutas `admin/*` no tenían `auth`: cualquier persona (incluso sin login) podía cambiar la contraseña de cualquier usuario, el super-admin incluido. Ahora todo `admin/*` exige sesión y esas dos acciones solo permiten editar el propio usuario o uno con permiso `update`.
- **Registro público deshabilitado** (estaba activo en Fortify).
- Logout invalida la sesión y regenera el token.
- Se eliminan `.env.save`, `.env.save.1` y `public/.htaccess.save` (traían `APP_KEY` y `MAIL_PASSWORD` reales: rotalos).

## Decisiones / pendientes

- **No pude ejecutar PHP en el entorno donde preparé esto**, así que el código portado no fue probado. `setup.sh` y `php artisan test` (incluye `SmokeTest`) son la primera verificación; si algo falla, mandame el error.
- Se **mantiene la raíz del disco `local` en `storage/app`** (Laravel 11+ usa `storage/app/private`); si no, los archivos ya subidos dejan de encontrarse.
- CKEditor se carga por CDN (27.1.0, la misma versión que ya usaba el sitio público). Subirlo de versión es un trabajo aparte.
- En producción con Apache hay que servir `/files/public/` → `storage/app/public/` (alias) o ajustar las URLs.
- Código muerto del tiempo de Slim Framework (`EventSLIMController`, `view($response, ...)`, `Parametro ADMIN_SITE_URL`) se dejó tal cual.
- `Evento::programa()` apunta a una clase inexistente (`ProgramaInstitucional`); no se usa hoy, pero fallaría si se llama.
- Los tests viejos (`Curso*Test`, los de Jetstream) no se portaron; quedó `tests/Feature/SmokeTest.php`.
