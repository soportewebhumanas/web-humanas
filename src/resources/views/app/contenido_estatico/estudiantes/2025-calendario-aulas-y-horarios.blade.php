@extends('app.slim.layouts.home')


@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <p>
                                <span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                <span><a href="{{ route('estudiantes.inicio') }}">Estudiantes <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Calendarios, Aulas y Horarios</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <!-- Aulas y Horarios-->
                <div class="container mb-4">
                    <div class="row">
                        <!-- Aulas y Horarios-->
                        <div style="background-color:#26406C" class="col-12 py-2 font-weight-bold text-white text-center border border-dark">AULAS Y HORARIOS</div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 bg-light text-left font-weight-bold">
                            Sede Santa Rosa
                        </div>
                        <div class="col-8 py-2 border border-dark border-top-0 text-left">
                            <i class="fa fa-file-excel-o text-success" aria-hidden="true"></i> <a href="https://docs.google.com/spreadsheets/d/1kbgPknivee0NdyFykhWbsZtlG14qD9619z7aQSwlTnE/edit#gid=362435019" target="_blank">Ver Horarios</a>
                        </div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 bg-light text-left font-weight-bold">
                            Sede General Pico
                        </div>
                        <div class="col-8 py-2 border border-dark border-top-0 text-left">
                            <i class="fas fa-file-pdf text-danger"></i> 
                            <a href="https://drive.google.com/file/d/1OdIPKuah0qNomEeFzpSFA-ey8FFJr5v7/view?usp=drive_link" target="_blank">Ver Horarios</a>
                            <!--<a href="https://drive.google.com/file/d/12_JH5SeflJOqohnPgR_K2Xa3box2yJM4/view?usp=sharing" target="_blank">Ver Horarios</a>-->
                        </div>                        
                    </div>
                </div>                    
                <!-- Aulas y Horarios-->
                
                <!--Calendario Actividades -->
                <div class="container mb-5">
                    <div class="row">
                        <div style="background-color:#26406C" class="col-12 py-2 font-weight-bold text-white text-center border border-dark">CALENDARIO DE ACTIVIDADES 2025</div>
                        <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Resolución</div>
                        <div class="col-8 py-2 border border-dark border-top-0 py-auto text-left">
                            <i class="fas fa-file-pdf text-danger"></i>
                            <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2024_474.pdf" target="_blank"> Res. 474-CD-2024</a>
                        </div>
                        <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inicio de actividades académicas y administrativas</div>
                        <div class="col-8 py-2 border border-dark border-top-0 py-auto"> 03 de febrero</div>
                        
                        <!-- Inscripciones-->
                            <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">INSCRIPCIONES</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inscripción para Ingresantes</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">05 a 20 de febrero</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inscripción y reinscripción de estudiantes</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">Todo el año</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inscripción en actividades curriculares anuales y del primer cuatrimestre - 1° a 5° años</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">17 de febrero a 13 de marzo</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inscripción en actividades curriculares del segundo cuatrimestre</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">01 al 31 de julio</div>                                                                        
                        <!-- Inscripciones-->
                        
                        <!-- Actividades académicas-->
                            <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">ACTIVIDADES ACADÉMICAS</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Test de Diagnóstico (Inglés)</div>
                            <div class="col-8 py-2 border border-dark border-top-0">25 de febrero, 08:00 horas</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Período de ambientación - 1° año</div>
                            <div class="col-8 py-2 border border-dark border-top-0">05 a 21 de marzo <br> 28 de julio al 8 de agosto</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Actividades curriculares anuales - 1° a 5° años</div>
                            <div class="col-8 py-2 border border-dark border-top-0">17 de marzo a 21 de noviembre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Primer cuatrimestre – 1° a 5° años</div>
                            <div class="col-8 py-2 border border-dark border-top-0">17 de marzo a 27 de junio</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Segundo cuatrimestre</div>
                            <div class="col-8 py-2 border border-dark border-top-0">04 de agosto a 21 de noviembre</div>
                            <!--<div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Jornadas de Investigación FCH</div>
                            <div class="col-8 py-2 border border-dark border-top-0">12, 13 y 14 de septiembre</div>-->
                        <!-- Actividades académicas-->

                        <!-- Exámenes-->
                            <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">EXÁMENES</div>
                            
                            <!-- Resolución mesas examinadoras -->
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Mesas Examinadoras 2025</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto text-left">
                                <!--<i class="fas fa-file-pdf text-danger"></i>
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2024_686.pdf" target="_blank"> Res. 686-2024</a><br>-->
                                <!--<i class="fas fa-file-pdf text-danger"></i>
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_430.pdf" target="_blank"> Res. 430-2025</a>-->
                                <i class="fas fa-file-pdf text-danger"></i>
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_617.pdf" target="_blank"> Res. 617-2025</a>                                
                            </div>
                            <!--
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Mesas Examinadoras 2024<br>Llamados 5° a 10°</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto text-left">
                                <i class="fas fa-file-pdf text-danger"></i>
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2024_307.pdf" target="_blank"> Res. 307-2024</a>
                            </div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Mesas Examinadoras 2024<br>G. Pico</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto text-left">
                                <i class="fas fa-file-pdf text-danger"></i>
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2024_283.pdf" target="_blank"> Res. 283-2024</a>
                            </div>-->                             
                            
                            <!-- Resolución mesas examinadoras -->

                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Inscripción</div>
                            <div class="col-8 py-2 border border-dark border-top-0">hasta 72 horas hábiles antes de la constitución de la  mesa</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Primer llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">17 a 21 de febrero </div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Segundo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">25 a 31 de marzo</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Tercer llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">21 a 25 de abril</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Cuarto llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">19 a 23 de mayo</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Quinto llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">28 de julio a 01 de agosto</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Sexto llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">25 a 29 de agosto</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Séptimo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">22 a 26 de septiembre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Octavo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">20 a 24 de octubre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Noveno llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">01 a 05 de diciembre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Décimo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">15 a 19 de diciembre</div>
                        <!-- Exámenes-->  
                        
                        <!--RECESOS Y FERIADOS -->
                        <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">RECESOS Y FERIADOS</div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Receso académico y administrativo</div>
                        <div class="col-8 py-2 border border-dark border-top-0">02 a 31 de enero</div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Recesos académicos parciales</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            14 a 25 de julio
                            <br>
                            15 a 20 de septiembre<br>
                        </div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Feriados</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            1 de enero: Año Nuevo<br>
                            3 y 4 de marzo: Carnaval<br>
                            24 de marzo: Día Nacional de la Memoria por la Verdad y la Justicia<br>
                            2 de abril: Día del Veterano y de los Caídos en la Guerra de Malvinas<br>
                            18 de abril: Viernes Santo<br>
                            1 de mayo: Día de las/os Trabajadoras/es<br>
                            25 de mayo: Día de la Revolución de Mayo<br>
                            17 de junio: Paso a la Inmortalidad del General Martín Güemes<br>
                            20 de junio: Paso a la Inmortalidad del General Manuel Belgrano<br>
                            9 de julio: Día de la Independencia<br>
                            17 de agosto: Paso a la inmortalidad del General José de San Martín<br>
                            12 de octubre: Día del Respeto a la Diversidad Cultural<br>
                            20 de noviembre: Día de la Soberanía Nacional<br>
                            8 de diciembre: Inmaculada Concepción de María<br>
                            25 de diciembre: Navidad<br>
                        </div>

                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Feriados en la UNLPam</div>
                        <div class="col-8 py-2 border border-dark border-top-0">12 de abril y 04 de septiembre</div>

                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Día no laborable</div>
                        <div class="col-8 py-2 border border-dark border-top-0">17 de abril: Jueves Santo</div>

                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Asuetos académicos</div>
                        <div class="col-8 py-2 border border-dark border-top-0">15 de mayo (día del/la Docente Universitario/a) y 21 de septiembre (día del/la Estudiante)</div>
                        
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Asueto administrativo</div>
                        <div class="col-8 py-2 border border-dark border-top-0">26 de noviembre (día del/la Nodocente)</div>
                        <!--RECESOS Y FERIADOS -->
                        
                        <div class="col-12 py-2 font-weight-bold border border-dark border-top-0 text-center" style="height: 40px"></div>

                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Días de interés institucional</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            8 de marzo: Día Internacional de las Mujeres y Disidencias<br>
                            15 junio: Aniversario de la Reforma Universitaria<br>
                            22 de noviembre: Día de la gratuidad universitaria<br>
                        </div>

                        <div class="col-12 py-2 font-weight-bold border border-dark border-top-0 text-center" style="height: 40px"></div>
                        
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">XXVII Jornadas de Investigación FCH</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            8 y 9 de octubre
                        </div>

                        <div class="col-12 py-2 font-weight-bold border border-dark border-top-0 text-center" style="height: 40px"></div>
                        
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Elecciones Claustro Estudiantes</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            30 de abril
                        </div>                        



                        <!-- Calendario en Imagen-->
                        <!-- CAMBIAR POR EL NUEVO DISEÑO -->
                        <div class="container my-4">
                            <div class="row">
                                <div style="background-color:#26406C" class="col-12 py-2 font-weight-bold text-white text-center border border-dark">CALENDARIO PARA DESCARGAR</div>
                                <div class="col-4 py-2 border border-dark border-top-0 border-right-0 bg-light text-left font-weight-bold">
                                    Calendario en formato PNG
                                </div>
                                <div class="col-8 py-2 border border-dark border-top-0 text-left">
                                    <i class="fa fa-file-image-o text-success" aria-hidden="true"></i>
                                    <a href="../slim/estudiantes/calendario-2025.png" download="Calendario Académico" target="_blank">Descargar</a>
                                </div>
                                <div class="col-4 py-2 border border-dark border-top-0 border-right-0 bg-light text-left font-weight-bold">
                                    Formato para fondo de escritorio
                                </div>
                                <div class="col-8 py-2 border border-dark border-top-0 text-left">
                                    <i class="fa fa-file-image-o text-success" aria-hidden="true"></i>
                                    <a href="../slim/estudiantes/calendario-escritorio-2025.png" download="Calendario Académico 2025" target="_blank">Descargar</a>
                                </div>                                
                            </div>
                        </div>
                        <!-- Calendario en Imagen-->


                    </div>
                    <!--Calendario Actividades -->
                </div>
            </section>
        </div>
    </section>


@endsection
