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
                        </div>                        
                    </div>
                </div>                    
                <!-- Aulas y Horarios-->
                
                <!--Calendario Actividades -->
                <div class="container mb-5">
                    <div class="row">
                        <div style="background-color:#26406C" class="col-12 py-2 font-weight-bold text-white text-center border border-dark">CALENDARIO DE ACTIVIDADES 2026</div>
                        <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Resolución</div>
                        <div class="col-8 py-2 border border-dark border-top-0 py-auto text-left">
                            <i class="fas fa-file-pdf text-danger"></i>
                            <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2025_464.pdf" target="_blank"> Res. 464-CD-2025</a>
                        </div>
                        <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inicio de actividades académicas y administrativas</div>
                        <div class="col-8 py-2 border border-dark border-top-0 py-auto"> 02 de febrero</div>
                        
                        <!-- Inscripciones-->
                            <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">INSCRIPCIONES</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inscripción para Ingresantes</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">02 a 20 de febrero</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inscripción y reinscripción de estudiantes</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">Todo el año</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inscripción en actividades curriculares anuales y del primer cuatrimestre - 1° a 5° años</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">18 de febrero a 13 de marzo</div>
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Inscripción en actividades curriculares del segundo cuatrimestre</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto">06 al 31 de julio</div>                                                                        
                        <!-- Inscripciones-->
                        
                        <!-- Actividades académicas-->
                            <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">ACTIVIDADES ACADÉMICAS</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Test de Diagnóstico (Inglés)</div>
                            <div class="col-8 py-2 border border-dark border-top-0">24 de febrero, 08:00 horas</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Período de ambientación - 1° año</div>
                            <div class="col-8 py-2 border border-dark border-top-0">02 a 13 de marzo <br> 27 de julio al 7 de agosto</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Actividades curriculares anuales - 1° a 5° años</div>
                            <div class="col-8 py-2 border border-dark border-top-0">16 de marzo a 20 de noviembre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Inicio Ciencias de la Educación – modalidad a distancia</div>
                            <div class="col-8 py-2 border border-dark border-top-0">14 de marzo</div>                            
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Primer cuatrimestre – 1° a 5° años</div>
                            <div class="col-8 py-2 border border-dark border-top-0">16 de marzo a 26 de junio</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Segundo cuatrimestre</div>
                            <div class="col-8 py-2 border border-dark border-top-0">03 de agosto a 20 de noviembre</div>
                        <!-- Actividades académicas-->

                        <!-- Exámenes-->
                            <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">EXÁMENES</div>
                            
                            <!-- Resolución mesas examinadoras -->
                            <div class="col-4 bg-light py-2 font-weight-bold border border-dark border-top-0 text-left border-right-0">Mesas Examinadoras 2026</div>
                            <div class="col-8 py-2 border border-dark border-top-0 py-auto text-left">
                                <i class="fas fa-file-pdf text-danger"></i>
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_859.pdf" target="_blank"> Res. 859-2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i>
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_18.pdf" target="_blank"> Res. 18-2026</a>
                                                                
                            </div>
                            <!-- Resolución mesas examinadoras -->

                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Inscripción</div>
                            <div class="col-8 py-2 border border-dark border-top-0">hasta 72 horas hábiles antes de la constitución de la  mesa</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Primer llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">18 a 24 de febrero </div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Segundo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">25 a 31 de marzo</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Tercer llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">24 a 30 de abril</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Cuarto llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">18 a 22 de mayo</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Quinto llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">27 a 31 de julio</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Sexto llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">24 a 28 de agosto</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Séptimo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">28 de septiembre a 02 de octubre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Octavo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">19 a 23 de octubre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Noveno llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">30 de noviembre a 04 de diciembre</div>
                            <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Décimo llamado</div>
                            <div class="col-8 py-2 border border-dark border-top-0">14 a 18 de diciembre</div>
                        <!-- Exámenes-->  
                        
                        <!--RECESOS Y FERIADOS -->
                        <div class="col-12 bg-light py-2 font-weight-bold border border-dark border-top-0 text-center">RECESOS Y FERIADOS</div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Receso académico y administrativo</div>
                        <div class="col-8 py-2 border border-dark border-top-0">02 a 31 de enero</div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Recesos académicos parciales</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            13 a 24 de julio
                            <br>
                            21 a 25 de septiembre<br>
                        </div>
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Feriados</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            01 de enero: Año Nuevo. <br>
                            16 y 17 de febrero: Carnaval. <br>
                            24 de marzo: Día Nacional de la Memoria por la Verdad y la Justicia. <br>
                            02 de abril: Día del Veterano y de los Caídos en la Guerra de Malvinas. <br>
                            03 de abril: Viernes Santo. <br>
                            01 de mayo: Día de las/os Trabajadoras/es. <br>
                            25 de mayo: Día de la Revolución de Mayo. <br>
                            17 de junio: Paso a la Inmortalidad del General Martín Güemes. <br>
                            20 de junio: Paso a la Inmortalidad del General Manuel Belgrano. <br>
                            09 de julio: Día de la Independencia. <br>
                            17 de agosto: Paso a la Inmortalidad del General José de San Martín.<br>
                            12 de octubre: Día del Respeto a la Diversidad Cultural. <br>
                            20 de noviembre: Día de la Soberanía Nacional. <br>
                            08 de diciembre: Inmaculada Concepción de María. <br>
                            25 de diciembre: Navidad.<br>
                        </div>

                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Días no laborables</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            02 de abril: Jueves Santo.<br> 
                            30 de agosto: Día de Santa Rosa de Lima.<br>
                        </div>                        

                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Elecciones Generales en la UNLPam</div>
                        <div class="col-8 py-2 border border-dark border-top-0">22 de abril</div>

                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Feriados en la UNLPam</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            12 de abril: Aniversario de la Nacionalización de la UNLPam.<br> 
                            4 de septiembre: Aniversario de la Creación de la UNLPam.<br>
                        </div>

                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Asuetos académicos</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            15 de mayo: Día de la Docencia Universitaria y Preuniversitaria. <br>
                            21 de septiembre: Día del/la Estudiante. <br>
                        </div>
                        
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Asueto administrativo</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            26 de noviembre: Día de las/os Trabajadoras/es Nodocentes.
                        </div>
                        <!--RECESOS Y FERIADOS -->
                        
                        <!--DÍAS DE INTERÉS INSTITUCIONAL-->
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Días de interés institucional</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            08 de marzo: Día Internacional de las Mujeres y Disidencias.<br> 
                            10 de abril: Día de las/os Investigadoras/es Científicas/os. <br> 
                            15 junio: Aniversario de la Reforma Universitaria. <br> 
                            02 de octubre: Aniversario de la Creación de la Facultad de Ciencias Humanas. <br> 
                            22 de noviembre: Día de la Gratuidad Universitaria.<br> 
                        </div>
                        <!--DÍAS DE INTERÉS INSTITUCIONAL-->

                        <!--SEMANAS/MESES DE INTERÉS INSTITUCIONAL-->
                        <div class="col-4 py-2 border border-dark border-top-0 border-right-0 font-weight-bold bg-light">Días de interés institucional</div>
                        <div class="col-8 py-2 border border-dark border-top-0">
                            Del 24 de marzo hasta el 02 de abril: semana de la Memoria, por la Verdad y la Justicia. <br>
                            Del 01 al 07 de junio: semana del Periodismo.<br>
                            Septiembre: mes de la Educación Pública.<br>
                            Noviembre: mes del Orgullo, por la Memoria y los Derechos del Colectivo LGBTQ+.<br>
                        </div>
                        <!--SEMANAS/MESES DE INTERÉS INSTITUCIONAL-->               

                        <!-- Calendario en Imagen-->
                        <!-- CAMBIAR POR EL NUEVO DISEÑO -->

                        <div class="container my-4">
                            <div class="row">
                                <div style="background-color:#26406C" class="col-12 py-2 font-weight-bold text-white text-center border border-dark">CALENDARIO PARA DESCARGAR</div>
                                <!--<div class="col-4 py-2 border border-dark border-top-0 border-right-0 bg-light text-left font-weight-bold">
                                    Calendario en formato PNG
                                </div>
                                <div class="col-8 py-2 border border-dark border-top-0 text-left">
                                    <i class="fa fa-file-image-o text-success" aria-hidden="true"></i>
                                    <a href="../slim/estudiantes/calendario-2025.png" download="Calendario Académico" target="_blank">Descargar</a>
                                </div>-->
                                <div class="col-4 py-2 border border-dark border-top-0 border-right-0 bg-light text-left font-weight-bold">
                                    Formato para fondo de escritorio
                                </div>
                                <div class="col-8 py-2 border border-dark border-top-0 text-left">
                                    <i class="fa fa-file-image-o text-success" aria-hidden="true"></i>
                                    <a href="../slim/estudiantes/calendario-FCH-2026.png" download="Calendario Académico 2026" target="_blank">Descargar</a>
                                </div>
                                <div class="col-4 py-2 border border-dark border-top-0 border-right-0 bg-light text-left font-weight-bold">
                                    Calendario: Meses, Formato Horizontal y Vertical
                                </div>
                                <div class="col-8 py-2 border border-dark border-top-0 text-left">
                                    <i class="fa fa-folder-open" aria-hidden="true" style="color: #146C94"></i> 
                                    <a href="https://drive.google.com/drive/folders/1coHJA6ZSudY9GDMnA-05KRZQqBpFwiqr?usp=sharing" target="_blank">Carpeta de Google Drive</a>
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
