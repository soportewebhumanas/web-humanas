@extends('app.slim.layouts.home')


@section('content')
<!-- ******************************************MODAL************************************************ -->
<!-- Incluir script -->
<!--<style>
	.modal-backdrop {
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 1040;
		background-color: #000;
	}	
	.modal-backdrop {
		opacity: 0 !important;
		filter: alpha(opacity=0) !important;
	}
</style>
<div id="myModal" class="modal fade">
    <div class="modal-dialog float-right">
        <div class="modal-content float-right" style="width: 70%;">
            <div class="modal-header" style="background-color: #26406c">
				<h3 class="text-left text-white"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Test de diagnóstico en inglés</h3>
                <button type="button" class="close text-white" data-dismiss="modal"><i class="fa fa-window-close opacity-100" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <p class="text-justify">
                    El Test de Diagnóstico de carácter <b>obligatorio no eliminatorio</b> para las/os ingresantes de las carreras de Inglés se realizará de manera presencial el día <b>lunes 6 de marzo a las 10:00 horas</b>.
                    <br><br>
                    <b>Modelos de Test</b><br>
                    <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1oaitbuSgSqyhP9MHoiXuyzOzygvI-V51/view?usp=sharing" target="_blank">Test de Diágnostico 2011</a><br>
                    <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1VAOg4zQpfsMKmnizaTwWfUMmAUNFStlN/view?usp=sharing" target="_blank">Test de Diágnostico 2012</a><br>
                    <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1YQpC9IFYTzKJpdX7YcuDTK_8nqloapc8/view?usp=sharing" target="_blank">Test de Diágnostico 2017</a><br>
				</p>
            </div>
        </div>
    </div>
</div>-->
<!-- ******************************************MODAL************************************************ -->
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <p>
                                <span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                <span><a href="{{route('ingresantes.inicio')}}">Ingresantes <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">¿Cómo inscribirse?</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">¿Cómo inscribirse?</h3>
                                <style>
                                        .link-instructivo a{
                                            color: #008080;
                                        }
                                        .link-instructivo a:hover{
                                            color: #008080;
                                            /*text-decoration: none;*/
                                            /*text-underline-offset: 0rem;*/
                                        }

                                    .responsive-iframe {
                                        width: 100%;
                                        aspect-ratio: 16 / 9; /* podés cambiar la proporción */
                                        border: 0;
                                    }
                                </style>
                            <!-- script para mostrar u ocultar las pasantías -->
                            @php
                                use Carbon\Carbon;
                                $fechaInicio = Carbon::create(2026, 05, 18, 0, 0, 0);
                                $fechaFin = Carbon::create(2026, 07, 24, 23, 59, 59);
                                $ahora = now();
                            @endphp

                            @if ($ahora->between($fechaInicio, $fechaFin))                                                                 
                                <!-- Inscripciones junio 2026 -->                                
                                <p class="text-justify text-dark">                                
                                    La Facultad de Ciencias Humanas de la UNLPam comunica que se habilitarán nuevos períodos de inscripción a carreras para el ingreso 2026. Se realizarán en forma virtual <b class="text-danger">del 29 de junio al 24 de julio del corriente año.</b><br>
                                    <br>
                                    
                                    Estarán habilitadas las inscripciones para las siguientes carreras:
                                    <br><br>
                                    
                                    <b>Sede Santa Rosa:<br></b>
                                    Profesorado y Licenciatura en Historia,<br>
                                    Profesorado y Licenciatura en Geografía,<br>
                                    Profesorado y Licenciatura en Letras,<br>
                                    Licenciatura en Comunicación Social<br><!--,
                                    Profesorado y Licenciaturas en Inglés.<br>-->
                                    <br>
                                    
                                    <b>Sede General Pico:<br></b>
                                    Profesorado en Educación Inicial,<br>
                                    Profesorado en Educación Primaria,<br>
                                    Profesorado en Ciencias de la Educación y<br>
                                    Licenciatura en Ciencias de la Educación (presencial y a distancia).
                                    <br>
                                </p>  

                                <p class="link-instructivo">
                                    <a class="d-flex align-content-center" href="https://drive.google.com/file/d/1KDzrCTC9InUB-RfZNWzU0kq23CHNJG6X/view?usp=drive_link" target="_blank" class="text-decoration-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="1.2rem">
                                            <path fill="#008080" d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 125.7-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/>
                                        </svg>
                                        &nbsp Instructivo de inscripción
                                    </a>
                                </p>

                                <p class="text-justify text-dark">
                                    Por consultas, podrán dirigirse a:<br> 
                                    <span class="font-weight-bold">Sede Santa Rosa: </span><br><a href="#" target="_blank">departamentoestudiantes@humanas.unlpam.edu.ar</a><br><br>
                                    <span class="font-weight-bold">Sede General Pico: </span><br><a href="#" target="_blank">inscripcionesgp@humanas.unlpam.edu.ar</a><br>
                                    <br>
                                </p>
                                
                                <hr>
                                
                                <div class="col-12">
                                    <h3>Tutorial Inscripción a Carreras</h3>
                                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/CK8ChQCyopY?si=3D2LgJ0H6eCOCkd9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                                                            
                                </div>                                    
                                
                                <hr>
                            <!-- Inscripciones junio 2026 -->
                            @else
                            <p class="text-justify text-dark">
                                La Facultad de Ciencias Humanas de la UNLPam comunica que las inscripciones a carreras para el período 2027 se habilitarán en el mes de diciembre de este año.
                                <!--La Facultad de Ciencias Humanas de la UNLPam comunica que las inscripciones a carreras cerraron el día 24 de julio del corriente año.-->
                            </p>
						    @endif                            
                        </div>
                    </div>
                    <br><br>
                    <!-- Oculto el día 15-05-2026 -->
                    <!--La Facultad de Ciencias Humanas de la UNLPam comunica que las inscripciones a carreras cerraron el día 24 de julio del corriente año.-->
                    <!-- Oculto el día 15-05-2026 -->

                    <!--<span class="font-weight-bold">Instructivo para poder ingresar por primera vez en SIU Guaraní luego de recibir confirmación de inscripción en la carrera:</span><br>
                        <i class="fas fa-file-pdf text-danger"></i><a href="https://drive.google.com/file/d/1FS0WxLCVXaB8xzuYFggCr-cB77PFChNR/view?usp=sharing" target="_blank"> Primer Ingreso en SIU Autogestión</a><br><br>
                        Las inscripciones a carreras se desarrollan en los meses de Febrero, Junio y Diciembre de cada año.
                    </p>
                    -->                            
                    <!--
                        <br>
                        Para acceder al instructivo de inscripción y conocer la documentación a presentar, remitirse a los siguientes enlaces:<br>
                        <i class="fas fa-file-pdf text-danger"></i><a href="https://drive.google.com/file/d/1QS_13KQuYQpsC-njCJpy11gGEEEXSy0c/view?usp=sharing" target="_blank"> Instructivo de Inscripción Sede Santa Rosa</a><br>
                        <i class="fas fa-file-pdf text-danger"></i><a href="https://drive.google.com/file/d/1C1h37btpxjj_cllaCJwTrLhOL8ZIy9l0/view?usp=sharing" target="_blank"> Instructivo de Inscripción Sede General Pico</a><br><br>
                    -->                    
                </div>
            </section>
        </div>
    </section>

<!--********MODAL*******-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
<!--********MODAL*******-->
@endsection
