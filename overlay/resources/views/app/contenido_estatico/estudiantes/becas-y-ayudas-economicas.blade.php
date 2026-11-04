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
                                <span class="b-active">Becas y Ayudas Económicas</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <!--Inicio Contenido-->
                <div class="container">
                    <div class="row mx-auto my-auto pb-2">
                    <h3 class="text-justify">Becas y Ayudas Económicas</h3>
                    <br>
                    <div class="col-12">
                        <h4>Becas para ingresantes 2025</h4>
                        <p class="text-justify text-dark">
                        La Universidad Nacional de La Pampa cuenta con un Programa de Becas que ofrece diferentes recursos. Las/o ingresantes 2025 podrán solicitar las diferentes becas disponibles del <b>2 al 19 de diciembre de 2024</b> y del <b>17 al 27 de febrero de 2025</b>.
                        Entre las becas destinadas a ingresantes se incluyen:<br>
                        -	Becas de Apoyo Económico<br>
                        -	Becas de Residencia<br>
                        -	Becas de Comedor<br>
                        -	Becas de Préstamo de Bicicleta<br>
                        -	Becas de Tablets<br>
                        -	Becas de Alquiler<br>
                        Es importante que quienes deseen postularse para las Becas de Residencia lo hagan durante el primer período, en diciembre de 2024.<br>
                    </p>
                    
                    <h4>Requisitos para ingresantes:</h4>
                    <p class="text-justify text-dark">
                        Para poder acceder a cualquiera de estas becas, las y los ingresantes deberán haber finalizado el nivel secundario y no adeudar materias al momento de la solicitud.<br>
                        <b>Podés solicitar tu beca con el trámite de Pre-Inscripción realizado</b>.<br>
                        <br>
                        Toda la información relevante y los formularios de inscripción estarán disponibles en:
                        <br>
                        <a target="_blank" href="https://www.unlpam.edu.ar/accion-social/convocatorias-becas-bienestar">https://www.unlpam.edu.ar/accion-social/convocatorias-becas-bienestar</a>.<br> 

                            <!--La Universidad Nacional de La Pampa cuenta con un Programa de Becas que ofrece diferentes recursos como: apoyo económico, comedor, ayuda monetaria para costear gastos de jardín maternal/de infantes, bicicleta, apoyo económico para estudiantes en situación de discapacidad, conectividad, residencia/habitacional.<br><br> 
                            Para conocer sobre las becas y las convocatorias vigentes, puede visitar la página web de la UNLPam:<br> <a href="http://www.unlpam.edu.ar/accion-social/convocatorias-becas-bienestar">Programa de Becas de la UNLPam</a><br>-->                            
                            <!--                            
                            <b>La Secretaría Académica informa que entre las 08:00 del 13 de septiembre y  las 13:00 del 22 de septiembre se encontrará abierta la inscripción a la Beca de Tutor/a para Estudiante con Discapacidad de la Facultad de Ciencias Humanas.</b><br><br>

                            La convocatoria está destinada a estudiantes del Profesorado y la Licenciatura en Ciencias de la Educación que se dicta en la Sede General Pico.
                            <br><br>
                            Dedicación horaria: 10 hs semanales (virtual y presencial)
                            Monto: equivalente a una beca primaria ($20.800.-) compatible con otras becas.<br>
                            <br>
                            Son requisitos para aspirar a la Beca: <br>
                            a) Ser estudiante regular en conformidad con lo dispuesto por el artículo 17 bis del Estatuto de la UNLPam. <br>
                            b) Presentar Certificado analítico o certificación de materias aprobadas. <br>
                            c) Presentar nota de presentación que incluya la fundamentación de su motivación para la postulación a esta beca. <br>
                            d) Disponibilidad y predisposición para acompañar a estudiantes con discapacidad en su trayectoria universitaria.<br>
                            e) Favorecer la integración con sus pares, comunicación articulada con docentes y equipo técnico del equipo técnico del Servicio de Apoyo Psicopedagógico de la Secretaría de Bienestar Universitario.<br>
                            f)Detectar barreras que condicionan la accesibilidad académica, edilicia y comunicacional.<br>
                            <br>
                                La inscripción deberá registrarse en el presente formulario: <a href="https://forms.gle/97iUZbs4JAuyWgyT7" target="_blank">Aquí</a>
                            <br>
                            <br>
                            Para más información relacionada con los requisitos para la tarea dirigirse a <a href="mailto:sapsigp@unlpam.edu.ar" target="_blank">sapsigp@unlpam.edu.ar</a> ó <a href="mailto:luciana.alvarez@unlpam.edu.ar" target="_blank">luciana.alvarez@unlpam.edu.ar</a> <br>-->
                        </p>
                    </div>                                                                
                    </div>
                </div>
                <!--<hr>-->
                <!-- beca -->

                <style>
                    .btn-pasantia{
                        background-color: #417942 !important;
                    }
                    .btn-pasantia:hover {
                        background-color: #417942 !important;
                    }    
                </style>
                <!--
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card px-3 py-3" id="beca-tutor">
                                <p class="text-center font-weight-bold">
                                    Beca para Tutor/a de Estudiante con Discapacidad<br>
                                    La Facultad de Ciencias Humanas, a solicitud de la Secretaría de Bienestar Universitario, convoca a: 
                                </p>
                                <p class="text-justify">
                                        · 1 estudiante de la carrera de Profesorado en Historia<br><br>-->
                                        <!--
                                        <b>CARACTERISTICAS DE LA BECA</b>
                                        <br>
                                        Dedicación horaria: 10 hs semanales (virtual-presencial)<br>
                                        Monto: equivalente a una beca primaria ($11.344,73) compatible con otras becas.<br> 
                                        <br>
                                        <b>REQUISITOS:</b>
                                        <br>
                                        *    Ser Estudiante regular.<br>
                                        · Presentar Certificado analítico o certificación de materias aprobadas.<br>
                                        · Nota donde se exprese motivo de presentación a esta beca.<br>
                                        · Disponibilidad y predisposición para acompañar a estudiantes con discapacidad en su trayectoria universitaria.<br>
                                        · Favorecer la integración con sus pares, comunicación articulada con docentes y equipo técnico del Servicio de apoyo psicopedagógico de la Secretaría de Bienestar Universitario y Asesoría en Discapacidad de Rectorado.<br>
                                        · Detectar barreras que condicionan la accesibilidad académica, edilicia y comunicacional.<br>
                                        <br><br>-->
                                        <!--
                                        <p class="text-center font-weight-bold">INSCRIPCIÓN: desde las 08:00hs del 03 de Mayo de 2023 hasta las 13:00hs del 12 de Mayo de 2023</p>                                        
                                        <em class="text-danger text-center py-2"><b>INSCRIPCIÓN CERRADA</b></em>
                                        -->
                                        <!--<button class="btn float-right col-12 btn-pasantia"><a href="https://forms.gle/d4gcYJtm3cLhQGaTA" target="_blank" class=" text-light">Formulario de Inscripción</a></button>-->
                                        <!--<button class="btn float-right col-12 btn-pasantia"><a href="https://drive.google.com/file/d/1PVuUXeQEPkX0DKAdQHVrXVERm-6YCHMM/view?usp=share_link" target="_blank" class="text-light" style="text-transform: uppercase"><em>Acta de inscripciones registradas</em></a></button>
                                </p>-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- beca -->
                <!--Fin Contenido-->
                </div>
            </section>
        </div>
    </section>


@endsection
