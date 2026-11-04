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
                                <span class="b-active">Adscripciones</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Adscripción a cátedra</h3>
                            <p class="text-justify">
                                La adscripción ad-honorem a cátedra corresponde con exclusividad a las/os estudiantes regulares de las carreras de la Facultad de Ciencias Humanas, exceptuando a aquellas/os que sean graduados/as universitarias/os de cualquier carrera. Podrán acceder a ella todas/os las/os estudiantes que tengan aprobado como mínimo el primer año de su carrera, o en su defecto el número equivalente de actividades curriculares, incluida la asignatura objeto de la adscripción. Quienes hayan cursado o se encuentren cursando actividades curriculares correspondientes al último año de la respectiva carrera, podrán acceder a la adscripción ad-honorem a esas actividades curriculares cuando tengan aprobado el sesenta por ciento (60%) de la carrera.<br><br>
                                Son obligaciones del/la adscripta/o ad-honorem:
                                <ol class="text-justify text-secondary" type="a">
                                    <li>cumplir con el plan de trabajo presentado;</li>
                                    <li>asistir a las clases teóricas y/o prácticas de la asignatura, según disponga la/el docente a cargo de la asignatura;</li>
                                    <li>participar de las reuniones del equipo de cátedra;</li>
                                    <li>elevar un informe anual al Consejo Directivo sobre el cumplimiento del plan de trabajo (<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ptpQ8Lwt_XYFMiW7hkshAOUxC4ieDNPH/view?usp=sharing" target="_blank">Ordenanza 66-2014</a>)</li>
                                </ol>
                            </p>
                            <br>
                            <hr>
                            <br>
                            <!--<h3 class="text-justify">Inscripción Adscripciones. Del 1 al 31 de Marzo - Primer Cuatrimestre</h3>-->
                            <h3 class="text-justify">Inscripción Adscripciones. Del 1 al 31 de Julio - Segundo Cuatrimestre</h3>
                            <p class="text-justify">
                                Durante el mes de julio se encontrará abierta la inscripción de aspirantes adscriptas/os como así también las reinscripciones y entrega de informes de adscripciones, correspondientes a actividades curriculares del 2° cuatrimestre.
                                <br><br>
                                Las presentaciones deberán ser remitidas por las/os estudiantes interesadas/os, por correo electrónico a <a href="mailto:mesaentradas@humanas.unlpam.edu.ar">mesaentradas@humanas.unlpam.edu.ar</a> (sede Santa Rosa) y <a href="mailto:mesaentradasgp@humanas.unlpam.edu.ar">mesaentradasgp@humanas.unlpam.edu.ar</a> (sede General Pico) con nota dirigida a la Secretaría Académica.
                                <br><br>
                                Junto a la citada nota deberán adjuntar la documentación en UN SOLO DOCUMENTO en FORMATO PDF, según corresponda y en el orden que se indica:<br> 
                                Nueva adscripción y Reinscripción a la adscripción: 1. Nota de solicitud del/la estudiante dirigida a la Secretaría Académica; 2. Plan de trabajo de adscripción; 3. Nota aval del/la docente a cargo de la cátedra; 4. Certificado de estudiante regular; y 5. Certificado de actividades curriculares aprobadas en el Plan de Estudio.
                                <br><br>
                                Informe de adscripción: 1. Nota del/la estudiante dirigida a la Secretaria Académica, elevando informe de su adscripción; y 2. Nota del/la docente avalando lo informado por la/el estudiante. 
                                <br><br>
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection