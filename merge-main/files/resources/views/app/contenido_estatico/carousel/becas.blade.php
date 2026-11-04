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
                                <span class="b-active">
                                    <!-- Título del conetnido a difundir -->
                                    <!--
                                        ...
                                    -->
                                    Convocatoria a las Becas de Estímulo a las Vocaciones Científicas (EVC-CIN) 2026                                          
                                </span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row row-cols-1">
                    <!--Inicio Contenido-->
                    <div class="container mb-4 my-2">
                        <h3>
                            <!-- Título del conetenido a difundir para mostrar en el cuerpo-->
                            <!--
                                ...
                            -->
                            Convocatoria a las Becas de Estímulo a las Vocaciones Científicas (EVC-CIN) 2026                                  
                        </h3>
                        <p class="text-justify">
                            <!-- Desarrollo del contenido -->
                            <!--
                                ...
                            -->
                            La Secretaría de Investigación de la Universidad Nacional de La Pampa (UNLPam) informa que, en el marco del Plan de Fortalecimiento de la Investigación Científica, el Desarrollo Tecnológico y la Innovación, el Consejo Interuniversitario Nacional (CIN) abrió la convocatoria para las Becas EVC-CIN 2026.
                            <br><br>
                            La iniciativa está dirigida a estudiantes de grado de las universidades nacionales que deseen iniciar su formación en investigación. Quienes resulten seleccionados desarrollarán una experiencia de un año de duración en un proyecto de investigación acreditado, bajo la guía de un/a docente-investigador/a. La beca otorga un estipendio mensual durante doce meses, destinado a cumplir con una dedicación de 12 horas semanales.
                            <br><br>
                            El período de inscripción comenzó el 6 de julio de 2026 y se extenderá hasta el 12 de agosto de 2026 a las 13:00 horas inclusive.
                            <br><br>
                            Pasos para la inscripción:<br>
                            Para formalizar la postulación, los aspirantes deben cumplir con el Reglamento EVC 2026 y realizar los siguientes pasos obligatorios:<br>
                            Postulación en línea: Completar los formularios y cargar el plan de trabajo junto a la documentación requerida a través de la plataforma virtual: <a href="https://evc.siu.edu.ar/convocatoria2026" target="_blank">evc.siu.edu.ar/convocatoria2026</a><br>
                            Envío de ficha: Descargar la ficha de inscripción generada por el sistema, firmarla y enviarla por correo electrónico a <a href="mailto:consultas_sigeva@unlpam.edu.ar">consultas_sigeva@unlpam.edu.ar</a><br>
                            Vías de contacto y consultas:<br>
                            Atención: Lis y Delfina<br>
                            (02954) 451612 | <a href="mailto:consultas_sigeva@unlpam.edu.ar">consultas_sigeva@unlpam.edu.ar</a><br>
                            <a href="https://evc.cin.edu.ar/" target="_blank">https://evc.cin.edu.ar/</a><br>
                        </p>
                    </div>
                    <!--Fin Contenido-->
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection


<script src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('body').addClass('become_teachers');
        moment.locale('es');
        $('.fecha').each(function() {
            var fecha = $(this).text();
            var fecha_formateada = moment(fecha).fromNow()
            $(this).text(fecha_formateada);
        });
        
    });
</script>