# Merge de humanasAdmin-main sobre la versión Laravel 13

Método: 3 vías (original Laravel 8 = base, `main` = cambios nuevos, versión portada = destino). Los cambios de `main` pasan por las mismas transformaciones del port (prefijo `x-jet.`, URLs de archivos, rutas de `store()`, Alpine 3).

## Resumen
- Archivos modificados en main aplicados: **120**
- Archivos nuevos: **76** (+ **59** assets en `public/`)
- Sin cambios: 311
- Respaldos/copias viejas **no** incorporados: 40

## Código y vistas de la app (no contenido estático)

- `app/Http/Controllers/ModalidadController.php`
- `app/Http/Controllers/LlamadoSeleccionController.php`
- `app/Http/Controllers/Slim/EventoSLIMController.php`
- `app/Http/Controllers/Slim/NoticiasSLIMController.php`
- `app/Http/Controllers/Slim/DocenteSLIMController.php`
- `app/Http/Requests/DocenteStoreRequest.php`
- `app/Http/Requests/EventoUpdateRequest.php`
- `app/Http/Requests/EventoStoreRequest.php`
- `app/Http/Requests/ModalidadUpdateRequest.php`
- `app/Http/Requests/DocenteUpdateRequest.php`
- `resources/views/dashboard.blade.php`
- `resources/views/auth/login.blade.php`
- `resources/views/app/pasantias/form-inputs.blade.php`
- `resources/views/app/users/index.blade.php`
- `resources/views/app/eventos/form-inputs.blade.php`
- `resources/views/app/noticias/index.blade.php`
- `resources/views/app/slim/index.blade.php`
- `resources/views/app/slim/docentes/docentes/index.blade.php`
- `resources/views/app/slim/docentes/docentes/show.blade.php`
- `resources/views/app/slim/docentes/llamadosSeleccion/index.blade.php`
- `resources/views/app/slim/docentes/llamadosSeleccion/show.blade.php`
- `resources/views/app/slim/admin/login.blade.php`
- `resources/views/app/slim/layouts/home.blade.php`
- `resources/views/app/slim/layouts/index.blade.php`
- `resources/views/app/slim/layouts/components/header.blade.php`
- `resources/views/app/slim/layouts/components/footer.blade.php`
- `resources/views/app/slim/eventos/index.blade.php`
- `resources/views/app/slim/eventos/seminarios.blade.php`
- `resources/views/app/slim/eventos/show.blade.php`
- `resources/views/app/slim/noticias/index.blade.php`
- `resources/views/app/slim/noticias/show.blade.php`
- `resources/views/app/slim/programas/show.blade.php`
- `resources/views/app/slim/publicaciones/index.blade.php`
- `resources/views/app/llamadosSeleccion/form-inputs.blade.php`
- `resources/views/app/llamadosSeleccion/index.blade.php`
- `app/Http/Controllers/UserController.php`
- `resources/views/navigation-menu.blade.php`

## Contenido estático

- 83 vistas modificadas, 76 nuevas (carreras, posgrado, ingresantes, docentes, nodocentes, estudiantes, comunidad graduada, chatbot…)
- `routes/contenido_estatico.php` y `routes/contenido_estatico_extendido.php`: rutas nuevas (nodocentes, convocatorias, formularios, pasantías vigentes, departamentos, ingresantes…); se comentó `/distancia` posgrado.

## Cambios funcionales de main
- Usuarios: se agregó `UserController::destroy` (se combinó con la validación de seguridad del port).
- Eventos/Docentes: `enlace_inscripcion` y `CVLink` pasan a opcionales con validación `url` (las columnas ya eran nullable, no hace falta migración).
- Modalidades: `unique` ignora el registro actual al editar.
- Llamados a selección: el acta final se guarda con nombre `Acta_inscripciones_registradas_<random>.<ext>`.
- Sitio público: noticias y eventos ordenados por fecha; docentes 12 por página.
- Estilos de la barra admin (colores institucionales) y favicon `slim/images/humanas.png`.

## Decisiones y cosas a revisar
- **Respaldos no incorporados** (carpetas `bkp`, `old`, fechas tipo `04082026`, `*.old`…); ninguna está referenciada por rutas o vistas. Lista:

  - `resources/views/app/eventos/04082026/form-inputs.blade.php`
  - `resources/views/app/eventos/contiene_form_inputs/form-inputs.blade.php`
  - `resources/views/app/slim/docentes/docentes/index.blade.old.php`
  - `resources/views/app/slim/docentes/docentes/11082026/show.blade.php.old`
  - `resources/views/app/slim/docentes/docentes/24022025/show.blade.php`
  - `resources/views/app/slim/docentes/llamadosSeleccion/old-23092025/show.blade.php`
  - `resources/views/app/slim/docentes/llamadosSeleccion/old/index.blade.php`
  - `resources/views/app/slim/docentes/llamadosSeleccion/old/index.blade-.php`
  - `resources/views/app/slim/layouts/components/header-21-02-2025/header.blade.php`
  - `resources/views/app/slim/layouts/components/bkp-header-viejo-18-12-2024/header.blade.php`
  - `resources/views/app/slim/layouts/home05082025/home.blade.php`
  - `resources/views/app/slim/eventos/bkp/index.blade.php`
  - `resources/views/app/slim/eventos/bkp/seminarios.blade.php`
  - `resources/views/app/slim/eventos/bkp/show.blade.php`
  - `resources/views/app/slim/eventos/bkp/bkp-seminarios-20092024-con-tabla-sin-filtros/seminarios.blade.php`
  - `resources/views/app/slim/eventos/bkp/bkp24092024index/index.blade.php`
  - `resources/views/app/slim/eventos/bkp/bkp31052024/seminarios.blade.php`
  - `resources/views/app/slim/eventos/bkp/bkp20092024/seminarios.blade.php`
  - `resources/views/app/slim/eventos/bkp/bkp-seminarios-con-datatables/seminarios.blade.php`
  - `resources/views/app/slim/noticias/show-noticias-old/show.blade.php`
  - `resources/views/app/slim/index-old/index.blade.php`
  - `resources/views/app/slim/index-old/10-04-2026/index.blade.php`
  - `resources/views/app/slim/index-old/07032025/index.blade.php`
  - `resources/views/app/slim/index-old/13022026/index.blade.php`
  - `resources/views/app/slim/index-old/21022025/index.blade.php`
  - `resources/views/app/contenido_estatico/investigacion/desactivado11112025/investigacion.blade.php`
  - `resources/views/app/contenido_estatico/servicios/bkp_servicios/servicios_externos.blade.php`
  - `resources/views/app/contenido_estatico/servicios/bkp_servicios/serex/examen_acreditacion.blade.php`
  - `resources/views/app/contenido_estatico/servicios/bkp_servicios/serex/evaluacion_competencias.blade.php`
  - `resources/views/app/contenido_estatico/carreras/posgrado/carreras-posgrado.blade.old.php`
  - `resources/views/app/contenido_estatico/carreras/posgrado/especializacion/esp-old/esp_historia_regional.blade.php`
  - `resources/views/app/contenido_estatico/carreras/posgrado/especializacion/esp-old/esp_ens_lengua_y_literatura.blade - old.php`
  - `resources/views/app/contenido_estatico/carreras/posgrado/especializacion/esp-old/esp_doc_ed_superior.blade.php`
  - `resources/views/app/contenido_estatico/carreras/posgrado/especializacion/28092026/esp_historia_regional.blade.php`
  - `resources/views/app/contenido_estatico/carreras/posgrado/maestria/maestria-old/doc_ed_superior.blade.php`
  - `resources/views/app/contenido_estatico/carreras/posgrado/maestria/maestria-old/doc_ed_superior-a-distancia-.blade.php`
  - `resources/views/app/contenido_estatico/carreras/posgrado/maestria/maestria-old/doc_ed_superior.blade - copia.php`
  - `resources/views/app/contenido_estatico/carreras/posgrado/maestria/maestria-old/estudios_sociales_y_culturales.blade - old.php`
  - `resources/views/app/llamadosSeleccion/index-llamado-seleccion/index.blade.php`
  - `resources/views/app/llamadosSeleccion/index-llamado-seleccion-30052025/index.blade.php`

- **Rutas con vista inexistente en main** (darían error 500 al visitarlas; revisar si faltó subir los archivos):
  - `ingresantes/becas-y-ayudas-economicas`
  - `ingresantes/mi-primer-año-en-la-facultad/centro-de-estudiantes`

- **URLs de archivos**: main usa `'/storage/' . $ruta` (ruta guardada como `public/...`). nginx ahora sirve `/storage/public/` y `/files/public/` desde `storage/app/public`. En producción, el equivalente a `public/storage` debe apuntar a `storage/app` si se mantiene ese esquema.
- **Rutas de assets con `\`** (estilo Windows, ej. `asset('slim\images\...')`) se convirtieron a `/`; en Linux fallaban.
- **Nombres con ñ/tilde** mal decodificados al descomprimir (`a#U00f1o`) se corrigen a `año`.
- Faltan en `public/` tanto en el original como en main: `pin.ico` (favicon del layout slim) y los archivos de `slim/fullcalendar/` (css/js). Es anterior al merge.
- `layouts/app.blade.php`: se aplicó solo el cambio de favicon (se conserva tu versión con CDN/Vite).
- El zip de main no incluye `database/`, `config/` ni `composer.json`: si en esa rama hay migraciones o paquetes nuevos, no se pudieron incorporar.

