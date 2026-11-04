@extends('app.slim.layouts.home')

@section('content')
<style>
		.accordion .card-header:after {
			font-family: 'FontAwesome';  
			content: "\f0aa";
			float: right;
			color: black;
		}
		.accordion .card-header.collapsed:after {
			/* symbol for "collapsed" panels */
			content: "\f0ab";
			color: black;
		}
</style>
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-text ">
                                <p>
                                    <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{route('estudiantes.inicio')}}">Estudiantes <i class='fa fa-angle-right'></i></a></span> 
                                    <span class="b-active">Certificaciones y formularios</span>
                                </p>
                                <h3 class="text-justify">Certificaciones y formularios</h3>
                                <div class="col-12">
                                    <!-- Certificacion de programas-->
                                    <div id="accordion">
                                        <div class="card accordion shadow-none rounded-0 border-0">
                                            <div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item1" style="background-color:#f8f9fa">
                                                <a class="card-title text-dark ml-2">
                                                    Certificación de Programas
                                                </a>
                                            </div>
                                            <div id="item1" class="card-body collapse" data-parent="#accordion">
                                                <p class="text-justify">
                                                        Las/os estudiantes que se inscriban en otra Universidad o Instituto Terciario pueden solicitar la certificación de los programas de asignaturas aprobadas en esta Facultad para iniciar los trámites de equivalencias en la nueva institución.
                                                        <br>
                                                        La solicitud se realiza a través del Departamento de Estudiantes, quien remite la documentación a Decanato y, luego, Rectorado para las firmas correspondientes. Si la documentación es presentada ante organismo e instituciones del exterior, Rectorado debe enviarla al Ministerio de Educación de la Nación.
                                                        <br>
                                                </p>
                                            </div>
                                    <!-- Certificacion de programas-->
                                    <!-- Condicionalidades-->
                                    <div id="accordion">
                                        <div class="card accordion shadow-none rounded-0 border-0">
                                            <div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item2" style="background-color:#f8f9fa">
                                                <a class="card-title text-dark ml-2">
                                                    Condicionalidades
                                                </a>
                                            </div>
                                            <div id="item2" class="card-body collapse" data-parent="#accordion">
                                                <p class="text-justify">
                                                    Las/os estudiantes podrán solicitar matriculación en forma condicional en las actividades curriculares de las que adeuden hasta dos (2) correlativas. La autorización es extendida por la/el Secretaria/o Académica/o, previa consulta con el/la docente a cargo de la cátedra. La condicionalidad se concederá por un período de tiempo que no podrá exceder el llamado de examen anterior a la finalización de los cuatrimestres o años. Las/os estudiantes que hayan solicitado condicionalidad podrán cursar las actividades curriculares, en forma condicional, hasta tanto se resuelva la situación.
                                                </p>
                                            </div>
                                        <!-- Condicionalidades-->
                                        <!-- Convalidación-->
                                        <div id="accordion">
                                            <div class="card accordion shadow-none rounded-0 border-0">
                                                <div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item3" style="background-color:#f8f9fa">
                                                    <a class="card-title text-dark ml-2">
                                                        Convalidación
                                                    </a>
                                                </div>
                                                <div id="item3" class="card-body collapse" data-parent="#accordion">
                                                    <p class="text-justify">
                                                    Las/os estudiantes podrán solicitar la convalidación de actividades curriculares.<br>
                                                    <br>
                                                    La convalidación de las actividades curriculares en reserva, tanto las aprobadas como las cursadas regularizadas, será automática para las/os estudiantes que se encuentren inscriptas/os en el último Plan de Estudios aprobado de las carreras respectivas.<br>
                                                    <br>
                                                    La convalidación de las actividades curriculares en reserva, tanto las aprobadas como las cursadas regularizadas, será automática para los/as estudiantes que se encuentren inscriptas/os en Planes de Estudios anteriores al último aprobado.<br>
                                                    <br>
                                                    Las convalidaciones se otorgarán por un plazo de tiempo que no podrá exceder el doble de años de la duración de la carrera, contando a partir de la aprobación del último Diseño Curricular por parte del Consejo Superior.
                                                    </p>
                                                </div>
                                        <!-- Convalidación--> 
                                        <!-- Equivalencias-->
                                        <div id="accordion">
                                            <div class="card accordion shadow-none rounded-0 border-0">
                                                <div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item4" style="background-color:#f8f9fa">
                                                    <a class="card-title text-dark ml-2">
                                                        Equivalencias
                                                    </a>
                                                </div>
                                                <div id="item4" class="card-body collapse" data-parent="#accordion">
                                                    <p class="text-justify">
                                                    Las equivalencias entre actividades curriculares pueden ser automáticas o puntuales. Las equivalencias automáticas se otorgan, sin que medie solicitud alguna por parte del/la estudiante, entre actividades curriculares y según lo establecido en las tablas de equivalencias de los respectivos diseños curriculares. Las equivalencias puntuales se otorgan a solicitud del/la estudiante en función de estudios superiores previos, completos o incompletos, entre una actividad curricular y/o extracurricular o un grupo de actividades y otra u otras. Las equivalencias pueden ser totales o parciales y son otorgadas por Decanato a través de un acto resolutivo.
                                                    <br><br>
                                                    Los/as estudiantes que soliciten equivalencias puntuales deberán presentar, ante Departamento de Estudiantes, la siguiente documentación: a) formulario de solicitud de equivalencias, elevado a Decanato, b) certificación de aprobación de la/s actividad/es curricular/es y/o extracurricular/es, en relación a la equivalencia solicitada y calificación/es obtenida/s en la misma, extendida por autoridad competente. c) programa de la actividad curricular y/o extracurricular aprobada y de la cual solicita equivalencia.
                                                    <br><br>
                                                    Los/as estudiantes que provengan de otras universidades, facultades o instituciones superiores no universitarias, además, deberán presentar ante Departamento Estudiantes la siguiente documentación: a) programa/s completo/s de la/s actividad/es curricular/es y/o extracurricular/es, con la que solicita equivalencia, debidamente autenticado por autoridad competente, b) plan de estudio autenticado por autoridad competente, c) baja de la institución originaria si realizó inscripción en la misma carrera.
                                                    <br><br>
                                                    Será condición necesaria para registrar equivalencia puntual tener aprobada/s la/s actividad/es curricular/es correlativa/s según el correspondiente Plan de Estudio. La solicitud de equivalencia puntual, total o parcial, será analizada por un tribunal integrado por el/la docente responsable de la actividad curricular en la que se solicita equivalencia y dos integrantes de la misma actividad o en su defecto cátedras afines. En caso de existir algún impedimento para conformar el tribunal, Decanato, o quien éste delegue, podrá proponer su constitución.
                                                    </p>
                                                </div>
                                        <!-- Equivalencias-->
                                        <!-- Reválidas-->
                                        <div id="accordion">
                                            <div class="card accordion shadow-none rounded-0 border-0">
                                                <div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item6" style="background-color:#f8f9fa">
                                                    <a class="card-title text-dark ml-2">
                                                        Reválidas
                                                    </a>
                                                </div>
                                                <div id="item6" class="card-body collapse" data-parent="#accordion">
                                                    <p class="text-justify">
                                                        Las/os estudiantes podrán presentarse a rendir examen final de las actividades curriculares dentro de los dos (2) años posteriores a la aprobación de la correspondiente cursada, y con el mismo programa con que aprobaron la misma. Pasados los dos (2) años, podrán revalidar dicha cursada, por una única vez, debiendo rendir el examen final con el último programa vigente. La reválida deberá ser solicitada por el/la estudiante ante la Secretaría Académica y le será otorgada por un (1) año a partir de la solicitud. Secretaría Académica informará al/a la profesor/a a cargo de la cátedra sobre el otorgamiento. 
                                                        <!--Las/os estudiantes podrán presentarse a rendir examen final de las actividades curriculares dentro de los dos (2) años posteriores a la aprobación de la correspondiente cursada, y con el mismo programa con que aprobaron la misma. Pasados los dos (2) años, podrán revalidar dicha cursada, por una única vez, debiendo rendir el examen final con el último programa vigente. La reválida la solicitará el/la estudiante ante la Secretaría Académica y, previo informe académico, la/la profesor/a a cargo de la cátedra resolverá acerca de su otorgamiento y término del mismo, que no podrá exceder los dos (2) años.-->
                                                    </p>
                                                </div>
                                        <!-- Reválidas-->
                                        <!-- Formularios-->
                                        <div id="accordion">
                                            <div class="card accordion shadow-none rounded-0 border-0">
                                                <div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item5" style="background-color:#f8f9fa">
                                                    <a class="card-title text-dark ml-2">
                                                    Formularios
                                                    </a>
                                                </div>
                                                <div id="item5" class="card-body collapse" data-parent="#accordion">
                                                    <p class="text-justify">
                                                        <i class="fas fa-file-pdf" style="color: red !important"></i> <a href="https://drive.google.com/file/d/1OJLNfgKfD4X-OY9Kr0gFoDQJRBqIqqh8/view?usp=sharing" target="_blank">Solicitud de Reválida</a><br>
                                                        <i class="fas fa-file-pdf" style="color: red !important"></i> <a href="https://drive.google.com/file/d/1Z3jBOUmDiyf_ANqVOxcBQrQf7apBaJPp/view?usp=sharing" target="_blank">Solicitud de Inscripción Condicional a Cursadas</a><br>
                                                        <i class="fas fa-file-pdf" style="color: red !important"></i> <a href="https://drive.google.com/file/d/1qbeeluZqYr-XbLGpYsFbq9FlpVw9G1aS/view?usp=sharing" target="_blank">Solicitud de Convalidación de Actividades Curriculares</a><br>
                                                        <i class="fas fa-file-pdf" style="color: red !important"></i> <a href="https://drive.google.com/file/d/10M0K3tBw-FP3jLDxOyEr2j97u4c0ltrj/view?usp=sharing" target="_blank">Solicitud de Equivalencias</a><br>
                                                        <i class="fas fa-file-pdf" style="color: red !important"></i> <a href="https://drive.google.com/file/d/1Zk7owLSz6ohp_xkeOjKOXN8s0pDSgfI6/view?usp=sharing" target="_blank">Solicitud de Certificados de Asistencia a Clase</a><br>
                                                        <i class="fas fa-file-pdf" style="color: red !important"></i> <a href="https://drive.google.com/file/d/18zXhnd8Q3XKazjA9tlR_MyhpMOnOts43/view?usp=sharing" target="_blank">Solicitud de certificados de asistencia a Examen Parcial</a><br>
                                                        <i class="fas fa-file-pdf" style="color: red !important"></i> <a href="https://drive.google.com/file/d/1lp_CbzEYRtEXysPrL_PJZm0vvVNN3rDl/view?usp=sharing" target="_blank">Solicitud de Cambio de Plan de la Carrera</a><br>
                                                        <i class="fas fa-file-pdf" style="color: red !important"></i> <a href="https://drive.google.com/file/d/1xnmiLfBZ8_uLjp-bkKoVENJOHrfc32b-/view?usp=sharing" target="_blank">Solicitud de Inscripción fuera de Término</a><br>
                                                    </p>
                                                </div>
                                        <!-- Formularios-->                                                                                                                                                                                                                                       
                                    </div>
                                    <p>
                                        Para estudiantes sede Santa Rosa, envíos a: 
                                        <a href="mailto:departamentoestudiantes@humanas.unlpam.edu.ar">departamentoestudiantes@humanas.unlpam.edu.ar</a>
                                        <br>
                                        Para estudiantes sede General Pico, envíos a: 
                                        <a href="mailto:departamentoestudiantesgp@humanas.unlpam.edu.ar">departamentoestudiantesgp@humanas.unlpam.edu.ar</a>
                                        <br>                                    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <br><br>
                </div>
            </section>
        </div>
    </section>
@endsection