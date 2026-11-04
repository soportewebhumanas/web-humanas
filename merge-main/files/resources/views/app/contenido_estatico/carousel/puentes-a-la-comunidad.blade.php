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
                            La Facultad de Ciencias Humanas lanza la Convocatoria 2026 de AEU Humanas “Puentes con la Comunidad II”
                        </h3>
                        <p class="text-justify text-dark">
                            La Facultad de Ciencias Humanas (FCH) de la Universidad Nacional de La Pampa abrió la Convocatoria de Acciones de Extensión Universitaria (AEU Humanas) “Puentes con la Comunidad II. Convocatoria 2026 de AEU Humanas”, aprobada por <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2026_248.pdf" target="_blank">Resolución del Consejo Directivo N° 248/2026 (Ver Anexo también)</a>. La propuesta da continuidad a las ediciones realizadas desde 2021 y este año pone especial énfasis en la curricularización de la extensión, integrando las prácticas extensionistas a los programas de las asignaturas.
                            <br><br>
                            <b>¿Quiénes pueden participar?</b><br>
                            Pueden coordinar y co-coordinar una AEU Humanas docentes, nodocentes y estudiantes de las carreras de grado de la Facultad y del Colegio de la UNLPam. Las propuestas coordinadas por estudiantes deben contar con el aval de un/a docente.
                            <br><br>
                            Los equipos de trabajo deben ser colectivos e interdisciplinarios (no se admiten propuestas unipersonales) y tienen que incluir de manera obligatoria a estudiantes. También pueden sumarse docentes, graduadas/os y personal nodocente de la FCH, así como integrantes de otras Unidades Académicas de la UNLPam, siempre que estos últimos no superen el 50% del equipo.
                            <br><br>
                            <b>Líneas de presentación</b><br>
                            Línea 1: hasta 3 acciones coordinadas por docentes, nodocentes y/o estudiantes, orientadas a la curricularización de la extensión en las cátedras involucradas.
                            <br><br>
                            Línea 2: hasta 2 acciones coordinadas exclusivamente por estudiantes, con aval de un/a docente.
                            <br><br>
                            Línea 3: hasta 1 acción coordinada exclusivamente por docentes del Colegio de la UNLPam.
                            <br><br>
                            Cada AEU tendrá una duración máxima de 9 meses. Si alguna línea no cubre su cupo, las vacantes se reasignarán a propuestas orientadas a la curricularización de la extensión.
                            <br><br>
                            <b>Financiamiento</b><br>
                            El presupuesto total de la convocatoria es de $2.400.000, destinado a financiar 6 AEU Humanas, a razón de $400.000 por acción. Toda propuesta que supere ese monto quedará descartada sin evaluación previa. Si no se cubre el total del monto asignado, el remanente se distribuirá en partes iguales entre las Acciones aprobadas.
                            <br><br>
                            <b>Fechas claves</b><br>
                            Difusión: julio de 2026.
                            <br><br>
                            Presentación de propuestas: del 1 al 13 de agosto de 2026, hasta las 23:59:59 hs.
                            <br><br>
                            Evaluación de las propuestas: del 18 al 21 de agosto de 2026.
                            <br><br>
                            Inicio de actividades: septiembre de 2026.
                            <br><br>
                            Presentación de informe final: al concluir la AEU o, como máximo, el 30 de junio de 2027.
                            <br><br>
                            <b>Cómo presentarse</b><br>
                            La recepción de propuestas es únicamente en formato digital. Las presentaciones deben enviarse a las siguientes direcciones, según la sede correspondiente:
                            <br><br>
                            Santa Rosa: <a href="mailto:mesaentradas@humanas.unlpam.edu.ar">mesaentradas@humanas.unlpam.edu.ar</a>
                            <br><br>
                            General Pico: <a href="mailto:mesaentradasgp@humanas.unlpam.edu.ar">mesaentradasgp@humanas.unlpam.edu.ar</a>
                            <br>
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