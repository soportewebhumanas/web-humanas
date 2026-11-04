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
                                <span class="b-active">Beca</span>
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
        <h3>Convocatoria para acompañamiento de estudiantes con discapacidad</h3>
        <p>
            1 estudiante avanzada/o del Departamento de Historia<br>
            1 estudiante avanzada/o del Departamento de Comunicación Social<br>
            Dedicación horaria: 10 hs semanales<br>
            Monto: equivalente a una beca primaria compatible con otras becas.<br>
            <br>
            <strong>Requisitos:</strong><br>
            · Ser estudiante regular.<br>
            · Presentar certificado analítico o certificación de materias aprobadas.<br>
            · Nota donde se exprese motivo de presentación a esta beca.<br>
            · Disponibilidad y predisposición para acompañar a estudiantes con discapacidad en su trayectoria universitaria.<br>
            · Favorecer la integración con sus pares, comunicación articulada con docentes, representantes de la comisión de accesibilidad y equipo técnico del Servicio de Apoyo Psicopedagógico de la Secretaría de Bienestar Universitario.<br> 
            · Detectar barreras que condicionan la accesibilidad académica, edilicia y comunicacional.
            <br><br>
            Para más información relacionada con los requisitos para la tarea dirigirse a <a href="mailto:luciana.alvarez@unlpam.edu.ar">luciana.alvarez@unlpam.edu.ar</a><br>
            El equipo SAPsI realizará las entrevistas a aspirantes junto al representante de la comisión de accesibilidad y generará un orden de mérito para la selección, capacitación y posterior acompañamiento y supervisión.<br>
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