<?php

return [
    'common' => [
        'actions' => 'Acciones',
        'create' => 'Crear',
        'edit' => 'Editar',
        'update' => 'Actualizar',
        'search' => 'Buscar...',
        'back' => 'Volver',
        'are_you_sure' => '¿Estas seguro?',
        'no_items_found' => 'Ningun item encontrado',
        'created' => 'Creado exitosamente',
        'saved' => 'Guardado exitosamente',
        'removed' => 'Eliminado exitosamente',
    ],

    'noticias' => [
        'name' => 'Noticias',
        'index_title' => 'Noticias',
        'create_title' => 'Crear Noticias',
        'edit_title' => 'Editar Noticias',
        'show_title' => 'información de la Noticia',
        'inputs' => [
            'titulo' => 'Titulo',
            'content' => 'Contenido',
            'fecha_edicion' => 'Ultima edición',
            'fecha_creacion' => 'Fecha de creación',
            'active' => 'Activo',
        ],
    ],

    'eventos' => [
        'name' => 'Eventos',
        'index_title' => 'Lista de eventos',
        'create_title' => 'Crear Nuevo evento',
        'edit_title' => 'Editar evento',
        'show_title' => 'Información del evento',
        'inputs' => [
            'titulo' => 'Titulo',
            'content' => 'Contenido',
            'fecha_inicio' => 'Fecha de inicio',
            'fecha_fin' => 'Fecha de fin',
            'carga_horaria' => 'Carga Horaria',
            'active' => 'Activo',
            'tarifa' => 'Tarifa',
            'lugar_id' => 'Lugar',
            'modalidad_id' => 'Modalidad',
            'tipo_id' => 'Tipo',
        ],
    ],

    'cursos' => [
        'name' => 'Cursos',
        'index_title' => 'Lista de cursos',
        'create_title' => 'Crear curso',
        'edit_title' => 'Editar curso',
        'show_title' => 'información del curso',
        'inputs' => [
            'titulo' => 'Titulo',
            'programa' => 'Programa',
            'tipo_id' => 'Tipo',
            'active' => 'Activo',
        ],
    ],

    'programas' => [
        'name' => 'Programas Institucionales',
        'index_title' => 'Lista de Programas Institucionales',
        'create_title' => 'Crear Programa Institucional',
        'edit_title' => 'Editar Programa Institucional',
        'show_title' => 'información del Programa Institucional',
        'inputs' => [
            'nombre' => 'Nombre',
            'tipo' => 'Tipo',
            'responsables' => 'Responsables',
            'email' => 'Email',
            'reseña' => 'Reseña',
            'imagen' => 'Imagen',
            'active' => 'Activo'
        ],
    ],

    'pasantias' => [
        'name' => 'Pasantias',
        'index_title' => 'Lista de pasantías',
        'create_title' => 'Crear pasantía',
        'edit_title' => 'Editar pasantía',
        'show_title' => 'información del asantia',
        'periodo' => 'Período de inscripción',
        'inputs' => [
            'organismo_solicitante' => 'Organismo solicitante',
            'cantidad' => 'Vacantes',
            'active' => 'Activo',
            'duracion' => 'Duración (meses)',
            'destinatario' => 'Destinatario',
            'inicio_inscripcion' => 'Inicio de inscripción',
            'fin_inscripcion' => 'Fin de inscripción',
            'requisitos' => 'Requisitos',
            'tareas' => 'Tareas a desarrollar',
            'formulario_inscripcion' => 'Formulario de inscripción' ,
            'documentacion_obligatoria' => 'Documentación obligatoria',
            'observaciones' => 'Observaciones',
        ],
    ],


    'roles' => [
        'name' => 'Roles',
        'index_title' => 'Lista de roles',
        'create_title' => 'Crear Rol',
        'edit_title' => 'Editar Rol',
        'show_title' => 'Información del Rol',
        'inputs' => [
            'name' => 'Nombre',
        ],
    ],

    'permissions' => [
        'name' => 'Permissions',
        'index_title' => 'Permissions List',
        'create_title' => 'Create Permission',
        'edit_title' => 'Edit Permission',
        'show_title' => 'Show Permission',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'users'=>[
        'name'=> 'Usuarios',
        'index_title' => 'Lista de usuarios',
        'create_title' => 'Nuevo usuario',
        'edit_title' => 'Editar usuario',
        'show_title' => 'Usuario',
        'inputs' => [
            'name' => 'Apellido y Nombre',
            'mail' => 'Correo electrónico',
            'password' => 'Contraseña',
            'rol' => 'Rol'
        ],
    ],

];
