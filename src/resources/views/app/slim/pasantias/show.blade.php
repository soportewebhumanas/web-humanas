
@extends('app.slim.layouts.home')


@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="intro-text">
                    <p>
                        <span><a href="{{route('index')}}">Inicio</a> <i class='fa fa-angle-right'></i></span> 
                        <span><a href="{{route('pasantias.index')}}">Pasantias</a>  <i class='fa fa-angle-right'></i></span>
                        <span class="b-active"> Pasantía en {{$pasantia->organismo_solicitante}}</p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
    <section class="become-teachers">
        <div class="container">
            <div class="row" style="margin-bottom: 8px">
                <div class="col-sm-12 text-center become-title" >
                    <h2>Pasantía en {{$pasantia->organismo_solicitante}}</h2>

                    <span class="line"></span>
                </div>
            </div>
            <div class=" text-center">
            <div class="card my-3" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);">
                    <div class="card-header" style="background-color: #26406C;">
                        <h3 class="text-white py-2">Información de la pasantía</h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item" style="margin-top: 4px">
                            <div class="row">
                               <div class="col-md-4 font-weight-bold text-left">
                                    <label for="">Destinatarios</label>
                                </div>
                                <div class="col-md-8">
                                    {{$pasantia->destinatario}}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" >
                            <div class="row">
                               <div class="col-md-4 font-weight-bold text-left">
                                    <label for="">Cantidad de vacantes</label>
                                </div>
                                <div class="col-md-8">
                                    {{$pasantia->cantidad}}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" >
                            <div class="row">
                               <div class="col-md-4 font-weight-bold text-left">
                                    <label for="">Duración en meses</label>
                                </div>
                                <div class="col-md-8">
                                    {{$pasantia->duracion}}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" >
                            <div class="row">
                               <div class="col-md-4 font-weight-bold text-left">
                                    <label for="">Inscripciones </label>
                                </div>
                                <div class="col-md-8">
                                    <?php 
                                        $fechaInicio=new DateTime($pasantia->inicio_inscripcion);
                                        $inicioStr = $fechaInicio->format("d/m/Y H:i")."hs";
                                        $fechaFin=new DateTime($pasantia->fin_inscripcion);
                                        $finStr = $fechaFin->format("d/m/Y H:i")."hs";

                                    ?>
                                    Desde: {{$inicioStr}} | Hasta: {{$finStr}}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" >
                            <div class="row">
                               <div class="col-md-4 font-weight-bold text-left">
                                    <label for="">Requisitos</label>
                                </div>
                                <div class="col-md-8">
                                    <ul class="list-group list-unstyled">
                                        @foreach ($pasantia->requisitos as $key => $requisito)
                                            <li>
                                                {{($key+1).') '.$requisito}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" >
                            <div class="row">
                               <div class="col-md-4 font-weight-bold text-left">
                                    <label for="">Tareas que desarrollará</label>
                                </div>
                                <div class="col-md-8">
                                    <ul class="list-group list-unstyled">
                                        @foreach ($pasantia->tareas as $key => $tarea)
                                            <li>
                                                {{($key+1).') '.$tarea}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" >
                            <div class="row">
                               <div class="col-md-4 font-weight-bold text-left">
                                    <label for="">Documentación obligatoria a presentar</label>
                                </div>
                                <div class="col-md-8">
                                    <ul class="list-group list-unstyled">
                                        @foreach ($pasantia->documentacion_obligatoria as $key => $documentacion)
                                            <li>
                                                <a target="blank" class="btn btn-primary btn-block" href="{{'../storage/'.$documentacion}}">Descargar</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" >
                            <div class="row">
                               <div class="col-md-4 font-weight-bold text-left">
                                    <label for="">Observaciones</label>
                                </div>
                                <div class="col-md-8 text-normal">
                                    <textarea id="editor">
                                        {{ $pasantia->observaciones }}
                                    </textarea>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" >
                            <div class="row">
                               <div class="col-md-4 font-weight-bold text-left">
                                    <label for="">Formulario de inscripción</label>
                                </div>

                                <div class="col-md-8">
                                    @if($pasantia->fin_inscripcion > new \DateTime('now'))
                                        <a target="_blank" href="{{$pasantia->formulario_inscripcion}}" class="btn btn-primary btn-block">Inscribirme</a>
                                    @else
                                        Fecha de inscripcion finalizada
                                    @endif
                                </div>
                            </div>
                        </li>
                    </ul>
            </div>

            
	
        </div>
        </section>
</div>

@endsection


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