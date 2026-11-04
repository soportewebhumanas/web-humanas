@extends('app.slim.layouts.home')
@section('content')
<section class="become-teachers-01">

    <br/>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-text">
                        <p>
                            <span><a href="{{routeByName('home', [])}}">Inicio</a> <i class='fa fa-angle-right'></i></span> 
                            <span><a href="{{routeByName('llamadosSeleccion.index',[])}}">Llamados a Selección</a>  <i class='fa fa-angle-right'></i></span>
                            <span class="b-active">{{$llamadoSeleccion->cargo}} - {{$llamadoSeleccion->asignatura}}</p>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="col-sm-12 text-center">
                <h2>Secretaría Académica - Llamado a selección</h2>
                <h3>Llamado a selección de aspirantes para cubrir cargos docentes interinos</h3>
                <span class="line"></span>
            </div>     
        </div><!-- /.container -->
       
        <div class="container">  
            <div class="row col-md-8 col-md-offset-2">
                <div class="panel panel-{{$vencido ? 'danger' : 'primary'}}" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);">
                    <center class="panel-heading">
                       <h4><i>Información del cargo</i></h4>
                    </center>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item" style="margin-top: 4px">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Cantidad:</label>
                                    </div>
                                    <div class="col-md-8 text-center">
                                        {{$llamadoSeleccion->cantidad}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" style="margin-top: 4px">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Cargo interino:</label>
                                    </div>
                                    <div class="col-md-8 text-center">
                                        {{$llamadoSeleccion->cargo}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" style="margin-top: 4px">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Carrera:</label>
                                    </div>
                                    <div class="col-md-8 text-center">
                                        {{$llamadoSeleccion->carrera}}
                                    </div>
                                </div>
                            </li>
                             <li class="list-group-item" style="margin-top: 4px">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Plan:</label>
                                    </div>
                                    <div class="col-md-8 text-center">
                                        {{$llamadoSeleccion->plan}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" style="margin-top: 4px">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Departamento:</label>
                                    </div>
                                    <div class="col-md-8 text-center">
                                        {{$llamadoSeleccion->departamento}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" style="margin-top: 4px">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Asignatura:</label>
                                    </div>
                                    <div class="col-md-8 text-center">
                                        {{$llamadoSeleccion->asignatura}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" style="margin-top: 4px">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Dedicación:</label>
                                    </div>
                                    <div class="col-md-8 text-center">
                                        {{$llamadoSeleccion->dedicacion}}
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item" style="margin-top: 4px">            
                                <label for="">Observación:</label>
                                <div class="col-md-12" name="editor" id="editor">
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

                        <a target="_blank" href="{{$URL}}" class="btn btn-info btn-block w-full" style="margin-top: 4px;">Resolución en PDF</a>

                        
                        @if (!$vencido)
                        <a target="_blank" href="{{$llamadoSeleccion->enlace_inscripcion}}" class="btn btn-{{$vencido ? 'danger' : 'primary'}} btn-block"  style="margin-top: 4px;">Formulario de inscripción</a>
                        @else
                            <h3 class="text-danger text-center">Inscripción cerrada</h3>
                        @endif 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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