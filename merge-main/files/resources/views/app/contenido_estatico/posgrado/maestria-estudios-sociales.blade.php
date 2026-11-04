            @extends('app.slim.layouts.home')
                <style>
                    .texto-carreras{
                            color: white; 
                            font-weight: bold; 
                            text-shadow: 0.1em 0.1em 0.2em black;
                            font-size: calc(1em + 0.2vw);
                            float: left;    
                        }

                        .texto-carreras a{
                            color: white; 
                            font-weight: bold; 
                            text-shadow: 0.1em 0.1em 0.2em black;
                            float: left;    
                        }

                        .texto-carreras a:hover{
                            color: white; 
                            font-weight: bold; 
                            text-shadow: 0.1em 0.1em 0.2em black;
                            float: left;    
                        }            

                        .titulo-carrera{
                            color: #F0EFEA; 
                            font-weight: bold; 
                            text-shadow: 0.1em 0.1em 0.2em black;
                            float: left;
                        }
                  
                </style>  
                @section('content')
                <div class="container-fluid">
                    <div class="row h-50">
                        <div class="col-12 mx-0 my-0 px-0 py-0"
                            style="
                                    image-rendering: auto;						
                                    background-position: center center;
                                    background-color: #1b365d;
                                    background-image:url(../slim/images/posgrado/header/header-05.jpg);
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    "
                        >
                            <div class="h-100 d-flex">
                                <span class="carousel-caption text-left texto-carreras">
                                    <a href="{{route('posgrado.home')}}">Investigación y Posgrado</a>&nbsp;
                                    <i class='fa fa-angle-right'></i> Maestría en Estudios Sociales y Culturales
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-3">
                    <div class="col-6 col-lg-2 py-2 text-center">
                        <a href="#" data-toggle="modal" data-target="#duracion">
                            <i class="fa fa-calendar" aria-hidden="true" style="font-size: 3em; color: #1b365d"></i><br>
                            <p class="pt-1" style="font-size: 1.5em; color: #1b365d">Duración</p>
                        </a>
                    </div>
                        <!-- Modal Duración-->
                        <div class="modal fade" id="duracion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Duración</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-justify text-light"
                            style="
                                image-rendering: auto;						
                                background-position: center center;
                                background-image:url(../slim/images/posgrado/maestria-estudios-sociales.png);
                                background-repeat: no-repeat;
                                background-size: cover;
                            ">
                                <p class="text-light p-3 font-weight-bold" style="background-color: rgba(0, 0, 0, 0.3)">
                                    <!-- Va Info -->
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" style="background-color: #1b365d; color:white" data-dismiss="modal">Cerrar</button>
                            </div>
                            </div>
                        </div>
                        </div>                    
                        <!-- Modal Duración-->

                    <div class="col-6 col-lg-2 py-2 text-center">
                        <a href="#" data-toggle="modal" data-target="#sede">
                            <i class="fa fa-home" aria-hidden="true" style="font-size: 3em; color: #1b365d"></i><br>
                            <p class="pt-1" style="font-size: 1.5em; color: #1b365d">Sede</p>
                        </a>
                    </div>
                    <!-- Modal Sede -->
                    <div class="modal fade" id="sede" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
                    >
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sede</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-justify text-light"
                            style="
                                image-rendering: auto;						
                                background-position: center center;
                                background-image:url(../slim/images/posgrado/maestria-estudios-sociales.png);
                                background-repeat: no-repeat;
                                background-size: cover;
                            ">
                                <div class="row px-1 py-2 mx-1" style="background-color: rgba(0, 0, 0, 0.3)">
                                    <div class="col-12 text-justify">
                                        <!--<b><i class="fa-solid fa-location-dot"></i> Calle 7 esq. 110 - General Pico</b>-->
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <!--
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.343955019588!2d-63.77251408515628!3d-35.66853192211793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c37d58b05dda35%3A0x2450136fbe2da2a0!2sFacultad%20de%20Ciencias%20Humanas!5e0!3m2!1ses!2sar!4v1668185319748!5m2!1ses!2sar" width="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        -->
                                    </div>
                                </div>
                                                    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" style="background-color: #1b365d; color:white" data-dismiss="modal">Cerrar</button>
                            </div>
                            </div>
                        </div>
                        </div>                    
                    <!-- Modal Sede -->
                    
                    <div class="col-6 col-lg-2 py-2 text-center">
                        <a href="#" data-toggle="modal" data-target="#modalidad">
                            <i class="fa fa-book" aria-hidden="true" style="font-size: 3em; color: #1b365d"></i><br>
                            <p class="pt-1" style="font-size: 1.5em; color: #1b365d">Modalidad</p>
                        </a>
                    </div>
                        <!-- Modal Modalidad-->
                        <div class="modal fade" id="modalidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modalidad</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-justify text-light"
                            style="
                                image-rendering: auto;						
                                background-position: center center;
                                background-image:url(../slim/images/posgrado/maestria-estudios-sociales.png);
                                background-repeat: no-repeat;
                                background-size: cover;
                            ">
                                <p class="text-light p-3 font-weight-bold" style="background-color: rgba(0, 0, 0, 0.3)">
                                    <!--Modalidad de cursado: Presencial-->
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" style="background-color: #1b365d; color:white" data-dismiss="modal">Cerrar</button>
                            </div>
                            </div>
                        </div>
                        </div>                    
                        <!-- Modal Modalidad-->

                    <div class="col-6 col-lg-2 py-2 text-center">
                        <a href="#" data-toggle="modal" data-target="#consejoAcademico">
                            <i class="fa fa-users" aria-hidden="true" style="font-size: 3em; color: #1b365d"></i><br>
                            <p class="pt-1" style="font-size: 1.5em; color: #1b365d">Consejo Académico</p>
                        </a>
                    </div>
                        <!-- Modal Consejo Académico-->
                        <div class="modal fade" id="consejoAcademico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Consejo Académico</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-justify text-light"
                            style="
                                image-rendering: auto;						
                                background-position: center center;
                                background-image:url(../slim/images/posgrado/maestria-estudios-sociales.png);
                                background-repeat: no-repeat;
                                background-size: cover;
                            ">
                                <p class="text-light p-3 font-weight-bold" style="background-color: rgba(0, 0, 0, 0.3)">
                                    
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" style="background-color: #1b365d; color:white" data-dismiss="modal">Cerrar</button>
                            </div>
                            </div>
                        </div>
                        </div>                    
                        <!-- Modal Consejo Académico-->

                    <div class="col-6 col-lg-2 py-2 text-center">
                        <a href="#" data-toggle="modal" data-target="#aranceles">
                            <i class="fa fa-usd" aria-hidden="true" style="font-size: 3em; color: #1b365d"></i><br>
                            <p class="pt-1" style="font-size: 1.5em; color: #1b365d">Aranceles</p>
                        </a>
                    </div>
                        <!-- Modal Aranceles-->
                        <div class="modal fade" id="aranceles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Aranceles</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-justify"
                            style="
                                image-rendering: auto;						
                                background-position: center center;
                                background-image:url(../slim/images/posgrado/maestria-estudios-sociales.png);
                                background-repeat: no-repeat;
                                background-size: cover;
                            ">
                            <div class="px-1 py-2" style="background-color: rgba(0, 0, 0, 0.3)">
                                    <p class="text-justify text-light font-weight-bold">
                                        <i class="fas fa-file-pdf text-danger" style="text-shadow: #FFF 1px 0 10px;"></i><a class="text-light" href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2022_100.pdf" target="_blank"> Res. 100-CD-2022</a>
                                        <br>
                                        <br>
                                        <span>Carreras de Maestría</span><br>
                                        Seminario: $ 5000,00.<br>
                                        Defensa de tesis: $ 9.800,00.<br>
                                        Curso-taller de idioma: $ 4.5000,00.<br>
                                        Examen de idioma: $ 4.500,00.<br>                                    
                                        <br>
                                        <span>Carreras de Especialización en modalidad presencial</span><br>
                                        Seminario: $4500,00<br>
                                        <br>
                                        <span>Carreras de Especialización en modalidad a distancia</span><br>
                                        Matrícula: $ 11000,00; con posibilidad de pagarla en dos cuotas anuales de $ 5500,00.<br>
                                        Seminario: $ 6000,00<br>
                                        <br>
                                        <span>Estudiantes vocacionales</span><br>
                                        Seminarios de Maestría: $5500,00<br>
                                        Seminarios de Especialización: $ 5000,00<br>
                                        Seminarios de Especialización a distancia: $ 6500,00<br>
                                    </p>                            
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" style="background-color: #1b365d; color:white" data-dismiss="modal">Cerrar</button>
                            </div>
                            </div>
                        </div>
                        </div>                    
                        <!-- Modal Aranceles-->


                    <div class="col-6 col-lg-2 py-2 text-center">
                        <a href="#" data-toggle="modal" data-target="#legales">
                            <i class="fa fa-gavel" aria-hidden="true" style="font-size: 3em; color: #1b365d"></i><br>
                            <p class="pt-1 pr-2" style="font-size: 1.5em; color: #1b365d">Reglamentos, Plan de Estudios</p>
                        </a>
                    </div>
                        <!-- Modal Acreditación, Reglamento, Plan-->
                        <div class="modal fade" id="legales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Reglamentos, Plan de Estudios</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-justify"
                            style="
                                image-rendering: auto;						
                                background-position: center center;
                                background-image:url(../slim/images/posgrado/maestria-estudios-sociales.png);
                                background-repeat: no-repeat;
                                background-size: cover;
                            ">  <div class="px-1 py-2 mx-1" style="background-color: rgba(0, 0, 0, 0.3)">
                                    <!-- Va Info --> 
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn"  style="background-color: #1b365d; color:white" data-dismiss="modal">Cerrar</button>
                            </div>
                            </div>
                        </div>
                        </div>                    
                        <!-- Modal Acreditación, Reglamento, Plan-->                                                                                
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-dark text-justify pl-3">
                                <b style="color: #1b365d">Perfil</b><br>

                                <br>
                                <b style="color: #1b365d">Alcances del Título</b><br>

                            </p>
                        </div>
                    </div>
                </div>
            </div>

@endsection