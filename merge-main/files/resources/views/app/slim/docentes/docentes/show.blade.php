@extends('app.slim.layouts.home')
@section('content')

<!-- Info Docente -->
<div class="container py-4">
    <!-- Migas de pan (Breadcrumb) -->
    <div class="row">
        <div class="col-md-12 mb-3">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <p class="mb-0 text-muted">
                    <span><a href="{{route('index')}}" class="text-decoration-none" style="color: #1b365d;">Inicio <i class='fa fa-angle-right'></i></a></span>
                    <span><a href="{{route('docentes.index',[])}}" class="text-decoration-none" style="color: #1b365d;">Docentes <i class='fa fa-angle-right'></i></a></span> 
                    <span class="b-active text-dark font-weight-bold">{{$docente->apellido}}, {{$docente->nombre}}</span>
                </p>
            </nav>
        </div>
    </div>

    @php 
        $ruta = $docente->imagen; 
        $rutaModificada = Str::replace('public\docentes\imagenes/', 'public/docentes/imagenes/', $ruta); 
    @endphp

    <!-- Tarjeta de Detalle del Docente -->
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9">
            <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                <div class="row g-0">
                    
                    <!-- Columna de la Imagen -->
                    <div class="col-md-5 position-relative"
                        style="
                            min-height: 380px;
                            background-position: top center;
                            background-size: cover;
                            background-color: #1b365d;
                            background-image: url('{{'/storage/'.$rutaModificada}}');
                            background-repeat: no-repeat;
                        "
                    >
                        <!-- Franja institucional decorativa inferior en la imagen -->
                        <div class="position-absolute bottom-0 w-100 d-flex" style="height: 8px;">
                            <div class="w-50" style="background-color: #15a6b9;"></div>
                            <div class="w-30" style="background-color: #757ab9;"></div>
                            <div class="w-20" style="background-color: #b3d2e7;"></div>
                        </div>
                    </div>

                    <!-- Columna de Información -->
                    <div class="col-md-7 bg-white d-flex flex-column justify-content-between p-4 p-md-5">
                        <div>
                            <!-- Cabecera / Nombre y Título -->
                            <div class="border-bottom pb-3 mb-4">
                                <h3 class="font-weight-bold mb-1" style="color: #1b365d;">
                                    {{$docente->apellido}}, {{$docente->nombre}}
                                </h3>
                                <p class="text-muted font-italic mb-0" style="font-size: 1.05rem;">
                                    {{$docente->titulo}}
                                </p>
                            </div>

                            <!-- Especialidades -->
                            <div class="mb-3">
                                <h5 class="text-uppercase text-secondary font-weight-bold" style="font-size: 0.85rem; letter-spacing: 1px;">
                                    <i class="fa fa-graduation-cap mr-2" style="color: #15a6b9;"></i> Especialidades
                                </h5>
                                <ul class="list-unstyled pl-3 mb-0">
                                    @foreach ($docente->especialidad as $key => $esp)
                                        <li class="text-dark mb-1"><i class="fa fa-check text-muted mr-2" style="font-size: 0.8rem;"></i> {{$esp}}</li> 
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Asignaturas -->
                            <div class="mb-3">
                                <h5 class="text-uppercase text-secondary font-weight-bold" style="font-size: 0.85rem; letter-spacing: 1px;">
                                    <i class="fa fa-book mr-2" style="color: #15a6b9;"></i> Asignaturas
                                </h5>
                                <ul class="list-unstyled pl-3 mb-0">
                                    @foreach ($docente->asignaturas as $key => $asignatura)
                                        <li class="text-dark mb-1"><i class="fa fa-angle-right mr-2" style="color: #757ab9;"></i> {{$asignatura}}</li> 
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Sección de Currículum (Enlaces) -->
                        <div class="pt-3 mt-4 border-top bg-light p-3 rounded">
                            <h5 class="text-uppercase text-secondary font-weight-bold mb-2" style="font-size: 0.8rem; letter-spacing: 1px;">
                                Curriculum y Enlaces
                            </h5>
                            <div class="d-flex flex-wrap align-items-center">
                                @if($docente->CVLink !== null) 
                                    <a target="_blank" class="btn btn-sm btn-outline-primary mr-2 mb-2" style="border-color: #1b365d; color: #1b365d;" href="{{$docente->CVLink}}">
                                        <i class="fa fa-link mr-1" aria-hidden="true"></i> Ver Link Online
                                    </a>
                                @endif 

                                @if ($URLCV !== "")
                                    <a target="_blank" class="btn btn-sm btn-danger mb-2" href="{{$URLCV}}">
                                        <i class="fas fa-file-pdf mr-1"></i> Descargar PDF
                                    </a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Info Docente -->

@endsection

<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script> 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
	$('body').addClass('become_teachers');
    ClassicEditor
    .create( document.querySelector( '#editor' ),  {
        language: 'es',
        defaultLanguage: 'es',
        toolbar: [],
        link: {
            addTargetToExternalLinks: true
        }
    } )
    .then( editor => {
        editor.isReadOnly = true;
        console.log(editor)
        $('.ck').addClass('border-0')
    } )
    .catch( error => {
        console.error( error );
    } );
});
</script>