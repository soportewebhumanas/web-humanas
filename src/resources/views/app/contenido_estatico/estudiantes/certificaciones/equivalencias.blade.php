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
                                <span><a href="{{ route('certificaciones-y-formularios.certificaciones_y_formularios') }}">Certificaciones y formularios <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Equivalencias</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Equivalencias</h3>
                            <p class="text-justify">
                                Las equivalencias entre actividades curriculares pueden ser automáticas o puntuales. Las equivalencias automáticas se otorgan, sin que medie solicitud alguna por parte del/la estudiante, entre actividades curriculares y según lo establecido en las tablas de equivalencias de los respectivos diseños curriculares. Las equivalencias puntuales se otorgan a solicitud del/la estudiante en función de estudios superiores previos, completos o incompletos, entre una actividad curricular y/o extracurricular o un grupo de actividades y otra u otras. Las equivalencias pueden ser totales o parciales y son otorgadas por Decanato a través de un acto resolutivo.<br><br>
                                Los/as estudiantes que soliciten equivalencias puntuales deberán presentar, ante Departamento de Estudiantes, la siguiente documentación: a) formulario de solicitud de equivalencias, elevado a Decanato, b) certificación de aprobación de la/s actividad/es curricular/es y/o extracurricular/es, en relación a la equivalencia solicitada y calificación/es obtenida/s en la misma, extendida por autoridad competente. c) programa de la actividad curricular y/o extracurricular aprobada y de la cual solicita equivalencia.<br><br>
                                Los/as estudiantes que provengan de otras universidades, facultades o instituciones superiores no universitarias, además, deberán presentar ante Departamento Estudiantes la siguiente documentación: a) programa/s completo/s de la/s actividad/es curricular/es y/o extracurricular/es, con la que solicita equivalencia, debidamente autenticado por autoridad competente, b) plan de estudio autenticado por autoridad competente, c) baja de la institución originaria si realizó inscripción en la misma carrera.<br><br>
                                Será condición necesaria para registrar equivalencia puntual tener aprobada/s la/s actividad/es curricular/es correlativa/s según el correspondiente Plan de Estudio. La solicitud de equivalencia puntual, total o parcial, será analizada por un tribunal integrado por el/la docente responsable de la actividad curricular en la que se solicita equivalencia y dos integrantes de la misma actividad o en su defecto cátedras afines. En caso de existir algún impedimento para conformar el tribunal, Decanato, o quien éste delegue, podrá proponer su constitución.<br><br>
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
