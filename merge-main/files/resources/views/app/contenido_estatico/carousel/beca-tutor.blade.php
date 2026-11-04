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
                                <span class="b-active">Beca Tutor/a</span>
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
            <p class="text-justify text-dark">
                La Secretaría Académica informa que entre las <b class="text-danger">08:00 del 12 de marzo y las 13:00 del 18 de marzo de 2026</b>, se encontrará abierta la inscripción a una Beca de Tutor/a para acompañamiento de Estudiante con Discapacidad de la Facultad de Ciencias Humanas.
                <br><br> 
                La convocatoria está destinada a un estudiante de la Licenciatura en Historia que se dicta en la Sede Santa Rosa.
                <br><br>
                Son requisitos para aspirar a la Beca:<br> 
                a) Ser estudiante regular en conformidad con lo dispuesto por el artículo 17 bis del Estatuto de la UNLPam.<br> 
                b) Presentar Certificado analítico o certificación de materias aprobadas.<br> 
                c) Presentar nota de presentación que incluya la fundamentación de su motivación para la postulación a esta beca.<br> 
                d) Disponibilidad y predisposición para acompañar a estudiantes con discapacidad en su trayectoria universitaria.<br>
                e) Favorecer la integración con sus pares, comunicación articulada con docentes y equipo técnico del Servicio de apoyo psicopedagógico de la Secretaría de Bienestar Universitario y Asesoría en Discapacidad de Rectorado.<br>
                f) Detectar barreras que condicionan la accesibilidad académica, edilicia y comunicacional.<br>
                <br>
                La dedicación horaria será de 10 horas semanales. La remuneración será equivalente a una beca primaria compatible con otras becas.<br>
                <br>
                Para mayor información escribir a: <a href="mailto:luciana.alvarez@unlpam.edu.ar">luciana.alvarez@unlpam.edu.ar</a><br>
                <br>
                El  formulario estará disponible a partir de la fecha y hora de inscripción: <a href="https://forms.gle/jtbQtFNJxxwHJXwe8" target="_blank">Aquí</a>
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