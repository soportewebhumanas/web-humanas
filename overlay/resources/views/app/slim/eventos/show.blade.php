<!-- css imagen aumenta -->
<style>
        /* Estilo de la imagen original */
        .miniatura {
            width: 300px;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 8px;
        }

        .miniatura:hover { opacity: 0.8; }

        /* El "Modal" (fondo oscuro oculto por defecto) */
        .modal {
            display: none; /* Oculto */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            justify-content: center;
            align-items: center;
        }

        /* La imagen dentro del modal */
        .modal-contenido {
            max-width: 80%;
            max-height: 80%;
            border: 5px solid white;
            border-radius: 5px;
        }

        /* Botón para cerrar */
        .cerrar {
            position: absolute;
            top: 20px;
            right: 35px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
<!-- css imagen aumenta -->

@extends('app.slim.layouts.home')


@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="intro-text">
                    <p class="pt-3">
                        <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> 
                        <span><a href="{{route('eventos.index')}}">Actividades académicas <i class='fa fa-angle-right'></i></a></span>
                        <span class="b-active"></p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
    <section class="become-teachers">
        <div class="container">
            <div class="row">
                <div class="d-none d-lg-flex col-4">
                    <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img style="width: auto; height: 300px;" id="miImg" src="{{'/storage/'.$evento->imagen }}" alt="{{$evento->titulo}}" class="miniatura">
                            <div id="miModal" class="modal">
                                <span class="cerrar" id="btnCerrar">&times;</span>
                                <img class="modal-contenido" id="imgExpandida">
                            </div>
                            <!-- script imagen aumenta -->
                            <script>
                                    const modal = document.getElementById("miModal");
                                    const img = document.getElementById("miImg");
                                    const imgExpandida = document.getElementById("imgExpandida");
                                    const btnCerrar = document.getElementById("btnCerrar");

                                    // Al hacer clic, se abre el modal
                                    img.onclick = function() {
                                        modal.style.display = "flex";
                                        imgExpandida.src = this.src; // Copia la fuente de la imagen
                                    }

                                    // Al hacer clic en la (X), se cierra
                                    btnCerrar.onclick = function() {
                                        modal.style.display = "none";
                                    }

                                    // También se cierra si haces clic fuera de la imagen
                                    modal.onclick = function(event) {
                                        if (event.target == modal) {
                                            modal.style.display = "none";
                                        }
                                    }
                                </script>
                            <!-- script imagen aumenta -->                                    
                            <!--<img style="width: auto; height: 300px;" src="{{'/storage/'.$evento->imagen }}" alt="{{$evento->titulo}}">-->
                        </div><!-- col-12 -->

                        <div class="col-12">
                            <h6 class="py-2"><i class="fa fa-search-plus" aria-hidden="true"></i> Haz clic en la imagen para aumentar</h6>
                        </div><!-- col-12 -->

                    </div><!-- row -->
                    </div>
                </div><!-- col-4 -->
                <div class="col-12 col-lg-8">
                    <!-- Titulo -->
                    <h4 class="text-justify">{{$evento->titulo}}</h4>
                    <!-- Titulo -->
                    
                    <!-- Modalidad -->
                    <hr>
                    <h5 style="text-transform: uppercase">Modalidad</h5>
                        <i class="fa fa-desktop" aria-hidden="true"></i> {{$evento->modalidad->nombre}}
                    <br>
                    <!-- Modalidad -->

                    <!-- Responsables -->
                    <hr>
                    <h5 style="text-transform: uppercase">Responsables / Organizadores</h5>
                    @foreach ($evento->responsables as $responsable)
                        {{$responsable}}<br>
                    @endforeach
                    @isset ($evento->colaboradores)
                    <hr>
                    <h5 style="text-transform: uppercase">Colaboradores</h5>                    
                        @foreach ($evento->colaboradores as $colaborador)
                            {{$colaborador}}<br>
                        @endforeach            
                    @endisset
                    <!-- Responsables -->

                    <!-- Carga horaria -->
                    <hr>
                    <h5 style="text-transform: uppercase">Carga horaria</h5>
                    @if ($evento->carga_horaria)
                        <i class="fa fa-clock-o" aria-hidden="true"></i> {{$evento->carga_horaria}} hs.
                    @else
                        No especificado.
                    @endif
                    <!-- Carga horaria -->
                    
                    <!-- Fechas de inicio y fin -->
                    <?php
                        if(isset($evento->fecha_inicio)){
                            $fechaInicio=new DateTime($evento->fecha_inicio);
                            $inicioStr = $fechaInicio->format("d/m/Y");
                        }
                        if(isset($evento->fecha_fin)){
                            $fechaFin=new DateTime($evento->fecha_fin);
                            $finStr = $fechaFin->format("d/m/Y"); 
                        }
                    ?>
                    <br>
                    <hr>
                    <h5 style="text-transform: uppercase">Inicio</h5>                        
                    @if ($evento->fecha_fin && $evento->fecha_inicio)
                        <i class="fa fa-calendar text-info" aria-hidden="true"></i> {{$inicioStr}} 
                    @else
                        @if ($evento->fecha_inicio)
                            {{$inicioStr}}
                        @else
                            No especificado.
                        @endif
                    @endif
                    <br>
                    <!-- Fechas de inicio y fin -->
                    
                    <!-- Destinatarios -->
                    @isset($evento->destinatarios)
                    <hr>
                        <h5 style="text-transform: uppercase">Destinatarios</h5>                
                        @foreach ($evento->destinatarios as $key => $destinatario)
                            <i class="fa fa-users" aria-hidden="true"></i> {{$destinatario}}<br>
                        @endforeach
                    @endisset
                    <!-- Destinatarios -->

                    <!-- Resolución -->
                    @if($evento->resolucion)                    
                    <hr>
                    <h5 style="text-transform: uppercase">Programa o Resolución de la actividad</h5>
                        <i class="fas fa-file-pdf text-danger"></i> <a target="_blank" href="{{'../storage/'.$evento->resolucion}}" style="color: #1b365d">Descargar</a>
                    @endif
                    <!-- Resolución -->

                    <!-- Enlace de Inscripción -->
                    @if($evento->enlace_inscripcion !== null)
                    <hr>
                    <h5 style="text-transform: uppercase">Formulario de Inscripción o más información:</h5>
                    <i class="fa fa-link text-info" aria-hidden="true"></i><a target="_blank" href="{{$evento->enlace_inscripcion}}" style="color: #1b365d">Aquí</a>
                    @endif
                    <!-- Enlace de Inscripción -->

                    <!-- Observaciones -->
                    @if($evento->observaciones !== null)
                        <hr>
                        <h5 style="text-transform: uppercase" class="text-dark"><i class="fa fa-info" aria-hidden="true"></i> Otra información</h5>
                        <style>
                            p{
                                color: black !important;
                            }
                        </style>
                        <span class="text-justify text-dark">
                        @php 
                            print($evento->observaciones);
                        @endphp
                        </span>
                    @endif
                    <!-- Observaciones -->

                    <br>
                    <br>                    
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
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