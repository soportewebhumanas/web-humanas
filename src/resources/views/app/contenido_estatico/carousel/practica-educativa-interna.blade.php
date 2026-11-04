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
                                <span class="b-active">Práctica Educativa Interna</span>
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
        <h3>Práctica Educativa Interna para estudiantes avanzados de la Licenciatura y/o profesorado en Historia</h3>
        <p class="text-justify">
            Se seleccionará un <b class="text-dark">(1) estudiante</b> que busque adquirir experiencia laboral como complemento de la formacióón académica. Las y los postulantes deberán ser estudiantes regulares de las carreras Licenciatura y/o Profesorado en Historia de la Facultad de Ciencias Humanas, contar con el <b class="text-dark">50% o más de la carrera aprobada y tener antecedentes en participación en programas o proyectos institucionales de la UNLPam</b>.
            <br><br> 
            Las tareas a realizar en el marco de la Práctica Educativa son colaborar en realizar un relevamiento exhaustivo de información sobre la formación y funcionamiento de la Facultad y sus etapas previas en otros espacios de la UNLPam y otras dependencias de la Provincia de La Pampa y auxiliar a conformar un repositorio virtual y público que contenga el relevamiento de la información oficial y de entrevistas, redes, prensa y todo otro documento al respecto, a instalarse en el Repositorio Digital de la Facultad de Ciencias de la Salud UNLPam. Seráá una actividad semanal no mayor de cinco días, con una carga horaria de 20 horas, en cuyo transcurso las/los practicantes cumplirán jornadas de hasta cuatro horas. 
            <br><br>            
            La convocatoria se encontrará abierta desde el <b class="text-danger">19/08/2024 al 30/08/2024</b>.
            <br><br>             
            La inscripción se realizará vía correo electrónico a <a href="mailto:despacho@salud.unlpam.edu.ar">despacho@salud.unlpam.edu.ar</a>. En el asunto, indicar: <b class="text-dark">“Práctica Educativa Interna”</b>; en el cuerpo del mail los datos personales de quien se inscribe: <b class="text-dark">nombre y apellido, DNI y teléfono de contacto</b>. Además, deberá adjuntarse la siguiente documentación: <b class="text-dark">Currículum Vitae actualizado; certificado analítico actualizado; constancia de estudiante regular; imagen de ambas caras del DNI; nota de elevación a María Silvia Di Liscia (responsable del plan de trabajo) indicando la motivación para realizar la Práctica Educativa. Importante: explicitar que no se encuentra efectuando una práctica similar y si ha efectuado otras experiencias, caso de pasantía, indicar en qué organismo y por qué período</b>.
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