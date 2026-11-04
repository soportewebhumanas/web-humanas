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
                        <div style="background-color:#26406C" class="col-12 py-2 font-weight-bold text-white text-center border border-dark">CALENDARIO DE ACTIVIDADES 2024</div>
                        <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Resolución</div>
                        <div class="col-8 py-2 border border-dark border-top-0 py-auto text-left">
                            <i class="fas fa-file-pdf text-danger"></i>
                            <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2023_600_TprxfeA.pdf" target="_blank"> Res. 600-CD-2023</a>
                        </div>
                        <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inicio de actividades académicas y administrativas</div>
                        <div class="col-8 py-2 border border-dark border-top-0 py-auto"> 01 de Febrero</div>
                        
                        <!-- Inscripciones-->
                            <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">INSCRIPCIONES</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Ingresantes</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">05 a 23 de febrero</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inscripción y reinscripción de estudiantes</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">Todo el año</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Actividades curriculares anuales y del  primer cuatrimestre - 1° a 5° años</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">15 de febrero a 14 de marzo</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Actividades curriculares del segundo  cuatrimestre</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">05 a 31 de julio</div>                                                                        
                        <!-- Inscripciones-->
                        
                        <!-- Actividades académicas-->
                            <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">ACTIVIDADES ACADÉMICAS</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Test de Diagnóstico (Inglés)</div>
                            <div class="col-8 py-2 border border-dark border-top-0">26 de febrero, 08:00 horas</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Período de ambientación - 1° año</div>
                            <div class="col-8 py-2 border border-dark border-top-0">04 a 15 de marzo</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Actividades curriculares anuales - 1° a 5° años</div>
                            <div class="col-8 py-2 border border-dark border-top-0">18 de marzo a 22 de noviembre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Primer cuatrimestre – 1° a 5° años</div>
                            <div class="col-8 py-2 border border-dark border-top-0">18 de marzo a 28 de junio</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Segundo cuatrimestre</div>
                            <div class="col-8 py-2 border border-dark border-top-0">05 de agosto a 22 de noviembre</div>
                            <!--<div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Jornadas de Investigación FCH</div>
                            <div class="col-8 py-2 border border-dark border-top-0">12, 13 y 14 de septiembre</div>-->
                        <!-- Actividades académicas-->

                        <!-- Exámenes-->
                            <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">EXÁMENES</div>
                            
                            <!-- Resolución mesas examinadoras -->
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Mesas Examinadoras 2024</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto text-left">
                                <i class="fas fa-file-pdf text-danger"></i>
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2023_986.pdf" target="_blank"> Res. 986-2023</a>
                            </div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Mesas Examinadoras 2024<br>Llamados 5° a 10°</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto text-left">
                                <i class="fas fa-file-pdf text-danger"></i>
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2024_307.pdf" target="_blank"> Res. 307-2024</a>
                            </div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Mesas Examinadoras 2024<br>G. Pico</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto text-left">
                                <i class="fas fa-file-pdf text-danger"></i>
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2024_283.pdf" target="_blank"> Res. 283-2024</a>
                            </div>                             
                            
                            <!-- Resolución mesas examinadoras -->

                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Inscripción</div>
                            <div class="col-8 py-2 border border-dark border-top-0">hasta 72 horas hábiles antes de la constitución de la  mesa</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Primer llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">19 a 23 de febrero </div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Segundo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">08 a 14 de marzo</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Tercer llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">22 a 26 de abril</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Cuarto llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">20 a 24 de mayo</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Quinto llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">24 a 30 de julio</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Sexto llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">19 a 23 de agosto</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Séptimo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">23 a 27 de septiembre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Octavo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">21 a 25 de octubre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Noveno llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">02 a 06 de diciembre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Décimo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">16 a 20 de diciembre</div>
                        <!-- Exámenes-->  
                        
                        <!--RECESOS Y FERIADOS -->
                        <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">RECESOS Y FERIADOS</div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Receso académico y administrativo</div>
                        <div class="col-8 py-2 border border-dark border-top-0">02 a 31 de enero</div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Recesos académicos parciales</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            <!--08 a 19 de julio<br>-->
                            <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2024_308.pdf" target="_blank">Res. 309- FCH 2024</a> 
                            <br>
                            Receso invernal: Del 15 al 19 de Julio (Asueto administrativo 10, 11 y 12 de Julio)
                            <br>
                            <hr> 
                            16 a 20 de septiembre<br>
                        </div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Feriados</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            01 de enero: Año Nuevo<br>
                            12 y 13 de febrero: Carnaval<br>
                            24 de marzo: Día Nacional de la Memoria por la Verdad y la Justicia<br>
                            29 de marzo: Viernes Santo<br>
                            02 de abril: Día del Veterano y de los Caídos en la Guerra de Malvinas<br>
                            01 de mayo: Día del/la Trabajador/a<br>
                            25 de mayo: Día de la Revolución de Mayo<br>
                            17 de junio: Paso a la Inmortalidad del General Martín Miguel de Güemes<br>
                            20 de junio: Paso a la Inmortalidad del General Manuel Belgrano<br>
                            09 de julio: Día de la Independencia<br>
                            17 de agosto: Paso a la Inmortalidad del General José de San Martín<br>
                            12 de octubre: Día del Respeto a la Diversidad Cultural<br>
                            20 de noviembre: Día de la Soberanía Nacional<br>
                            08 de diciembre: Inmaculada Concepción de María<br>
                            25 de diciembre: Navidad<br>
                            o aquellos días a los cuales, en virtud de la respectiva legislación, se trasladen.<br>

                                <!--01 de enero: Año Nuevo<br>
                                20 y 21 de febrero: Carnaval<br>
                                24 de marzo: Día Nacional de la Memoria por la Verdad y la Justicia<br>
                                02 de abril: Día del Veterano y de los Caídos en la Guerra de Malvinas<br>
                                07 de abril: Viernes Santo<br>
                                01 de mayo: Día del/la Trabajador/a<br>
                                25 de mayo: Día de la Revolución de Mayo<br>
                                20 de junio: Paso a la Inmortalidad del General Manuel Belgrano<br>
                                09 de julio: Día de la Independencia<br>
                                20 de noviembre: Día de la Soberanía Nacional<br>
                                08 de diciembre: Inmaculada Concepción de María<br>
                                25 de diciembre: Navidad<br>
                                -->
                        </div>
                        <!--<div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Feriados trasladables</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            17 de junio: Paso a la Inmortalidad del General Don Martín Miguel de Güemes<br>
                            21 de agosto: Paso a la Inmortalidad del General José de San Martín (fecha original 17 de agosto)<br>
                            16 de octubre: Día del Respeto a la Diversidad Cultural (fecha original 12 de octubre)<br><br>

                        </div>-->
                        <!--<div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Feriados con fines turísticos</div>
                        <div class="col-8 py-2 border border-dark border-top-0">26 de mayo, 19 de junio y 13 de octubre	</div>-->
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Feriados en la UNLPam</div>
                        <div class="col-8 py-2 border border-dark border-top-0">12 de abril y 04 de septiembre</div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Día no laborable</div>
                        <div class="col-8 py-2 border border-dark border-top-0">28 de marzo: Jueves Santo</div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Asuetos académicos</div>
                        <div class="col-8 py-2 border border-dark border-top-0">15 de mayo (día del/la Docente Universitario/a) y 21 de septiembre (día del/la Estudiante)</div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Asueto administrativo</div>
                        <div class="col-8 py-2 border border-dark border-top-0">26 de noviembre (día del/la No Docente)</div>
                        <!--RECESOS Y FERIADOS -->

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
                                    <a href="../slim/estudiantes/calendario_2024.png" download="Calendario Académico" target="_blank">Descargar</a>
                                </div>
                                <div class="col-4 py-2 border border-dark border-top-0 border-right-0 bg-light text-left font-weight-bold">
                                    Formato para fondo de escritorio
                                </div>
                                <div class="col-8 py-2 border border-dark border-top-0 text-left">
                                    <i class="fa fa-file-image-o text-success" aria-hidden="true"></i>
                                    <a href="../slim/estudiantes/calendario_escritorio_2024.png" download="Calendario Académico 2024" target="_blank">Descargar</a>
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
