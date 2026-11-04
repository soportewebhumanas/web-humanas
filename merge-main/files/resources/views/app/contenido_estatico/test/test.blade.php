@extends('app.slim.layouts.home')

@section('content')
    <hr>
        <div class="container">
            <div class="row">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="LlamadosSeleccion-tab" data-toggle="pill" href="#LlamadosSeleccion" role="tab" aria-controls="LlamadosSeleccion" aria-selected="true">Llamados a Selección</a>
                        <a class="nav-link" id="ConcursosDocentes-tab" data-toggle="pill" href="#ConcursosDocentes" role="tab" aria-controls="ConcursosDocentes" aria-selected="false">Concursos Docentes</a>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="LlamadosSeleccion" role="tabpanel" aria-labelledby="LlamadosSeleccion-tab">A</div>
                        <div class="tab-pane fade" id="ConcursosDocentes" role="tabpanel" aria-labelledby="ConcursosDocentes-tab">B</div>
                    </div>
            </div>
        </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
<script>
    // Se ejecuta una vez que el DOM está completamente cargado
    $(document).ready(function() {
        // 1. Obtener el hash de la URL (e.g., "#v-pills-profile")
        var hash = window.location.hash;

        // 2. Verificar si hay un hash y buscar el enlace de la pestaña
        if (hash) {
            // Utilizamos el selector para encontrar el <a> que apunta al ID del hash
            var $tabLink = $('a[href="' + hash + '"]');

            // 3. Si se encuentra el enlace, usar el método nativo de Bootstrap para activarlo
            if ($tabLink.length) {
                // 'tab("show")' se encarga de:
                // a) Desactivar la pestaña y contenido previamente activos (ej. 'Home').
                // b) Activar el enlace del nuevo tab (añadir 'active', 'aria-selected').
                // c) Activar el contenido del nuevo tab (añadir 'show active').
                $tabLink.tab('show');
            }
        }
        
        // Opcional: Esto asegura que el hash de la URL se actualice cuando el usuario haga clic en una pestaña
        $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
          window.location.hash = e.target.hash;
        });
    });
</script>
