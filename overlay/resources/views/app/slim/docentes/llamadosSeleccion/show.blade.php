@extends('app.slim.layouts.home')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
</style>
<br/>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="intro-text">
                <p>
                    <span><a href="{{route('index', [])}}">Inicio <i class='fa fa-angle-right'></i></a></span> 
                    <span><a href="{{route('llamadosSeleccion.index',[])}}">Llamados a Selección <i class='fa fa-angle-right'></i></a></span>
                    <span class="b-active">{{$llamadoSeleccion->cargo}} - {{$llamadoSeleccion->asignatura}}</p>
            </div>
        </div>
    </div><!-- /.row -->
    <div class="col-sm-12 text-center">
        <!--<h2>Secretaría Académica - Llamado a selección</h2>-->
        <span style="color: #1b365d !important; font-size: 1.2rem; text-transform: uppercase; font-family: 'Rubik', sans-serif;">
            Llamado a selección de aspirantes para cubrir cargos docentes interinos
        </span><br>
        <div class="mb-5"><span class="line"></span></div>
    </div>     
</div><!-- /.container -->


@php $bgColor = ($vencido ? 'red' : '#26406C') @endphp
<div class="container">
    <div class="row">
        <div class="col-12">
        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);">
            <center class="card-header py-2" style="background-color: <?php echo($bgColor); ?> ;">
            <span class="my-3 text-white" style="font-size: 1.2rem; font-family: 'Rubik', sans-serif;">Información del cargo</span>
            </center>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="margin-top: 4px">
                        <div class="row">
                            <div class="col-md-4">
                                <label for=""><b>Cantidad</b></label>
                            </div>
                            <div class="col-md-8 text-center">
                                {{$llamadoSeleccion->cantidad}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" style="margin-top: 4px">
                        <div class="row">
                            <div class="col-md-4">
                                <label for=""><b>Cargo</b></label>
                            </div>
                            <div class="col-md-8 text-center">
                                {{$llamadoSeleccion->cargo}}
                            </div>
                        </div>
                    </li>
                    <!--
                    <li class="list-group-item" style="margin-top: 4px">
                        <div class="row">
                            <div class="col-md-4">
                                <label for=""><b>Carrera</b></label>
                            </div>
                            <div class="col-md-8 text-center">
                                {{$llamadoSeleccion->carrera}}
                            </div>
                        </div>
                    </li>-->
                    @php
                    function mostrarPlan($plan)
                        {
                            $longitud = strlen($plan);

                            if ($longitud === 4) {
                                echo $plan;
                            } elseif ($longitud === 8) {
                                echo substr($plan, 0, 4) . '-' . substr($plan, 4, 4);
                            } else {
                                echo "Formato no válido";
                            }
                        }
                    @endphp

                    <li class="list-group-item" style="margin-top: 4px">
                        <div class="row">
                            <div class="col-md-4">
                                <label for=""><b>Plan</b></label>
                            </div>
                            <div class="col-md-8 text-center">
                                @php mostrarPlan($llamadoSeleccion->plan); @endphp
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" style="margin-top: 4px">
                        <div class="row">
                            <div class="col-md-4">
                                <label for=""><b>Departamento</b></label>
                            </div>
                            <div class="col-md-8 text-center">
                                {{$llamadoSeleccion->departamento}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" style="margin-top: 4px">
                        <div class="row">
                            <div class="col-md-4">
                                <label for=""><b>Asignatura</b></label>
                            </div>
                            <div class="col-md-8 text-center">
                                {{$llamadoSeleccion->asignatura}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" style="margin-top: 4px">
                        <div class="row">
                            <div class="col-md-4">
                                <label for=""><b>Dedicación</b></label>
                            </div>
                            <div class="col-md-8 text-center">
                                {{$llamadoSeleccion->dedicacion}}
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item py-2" style="margin-top: 4px; background-color: #E0E6E1;" >            
                        <label for="" class="text-danger"><b>Observación</b></label>
                        <div class="col-md-12 py-2">
                        @php print($llamadoSeleccion->observacion) @endphp
                        </div>
                    </li>
                </ul>
            
                <?php 
                    $fechaInicio=new DateTime($llamadoSeleccion->inicio_inscripcion);
                    $inicioStr = $fechaInicio->format("d/m/Y H:i")."hs";

                    $fechaFin=new DateTime($llamadoSeleccion->fin_inscripcion);
                    $finStr = $fechaFin->format("d/m/Y H:i")."hs";
                ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well well-sm text-center"> <p class="text-bold"><b>Inicio inscripción:</b></p> {{$inicioStr}}</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="well well-sm text-center"> <p><b>Fin inscripción:</b></p> {{$finStr}}</div>
                    </div>
                </div>

                <a target="_blank" href="{{$URLResolucion}}" class="btn btn-block w-full" style="margin-top: 4px; background-color: #26406C !important; color: #FFF;"><i class="fas fa-file-pdf" style="color: #FFF !important"></i> Resolución en PDF</a>
                @if (!$vencido)
                <a target="_blank" href="{{$llamadoSeleccion->enlace_inscripcion}}" class="btn btn-block"  style="margin-top: 4px;  background-color: #26406C !important; color: #FFF;"><i class="fa fa-pencil-square-o" style="color: #FFF !important"></i> Formulario de inscripción</a>
                @else
                    @if($llamadoSeleccion->acta_final != null)
                        <a target="_blank" href="{{$URLActa}}" class="btn btn-block w-full" style="margin-top: 4px; background-color: #26406C !important; color: #FFF"><i class="fas fa-file-pdf" style="color: #FFF !important"></i> Acta Inscripciones Registradas<!--Informe de Acta final--></a>
                    @endif
                    <br>
                    <h3 class="text-danger text-center">Inscripción cerrada</h3>
                @endif 
            </div>
        </div>
        </div>
    </div><!-- row -->
</div><!-- container -->
@endsection


<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script> 
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
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