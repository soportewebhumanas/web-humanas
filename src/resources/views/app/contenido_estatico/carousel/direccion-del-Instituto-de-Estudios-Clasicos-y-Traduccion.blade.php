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
                                <!--<span><a href="{{ route('estudiantes.inicio') }}">Estudiantes <i class='fa fa-angle-right'></i></a></span>-->
                                <span class="b-active">Dirección del Instituto de Estudios Clásicos y Traducción (IECyT)</span>
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
        <h3>Llamado a selección de antecedentes para cubrir la dirección del Instituto de Estudios Clásicos y Traducción (IECyT) de la Facultad de Ciencias Humanas-UNLPam</h3>
        <p class="text-justify">
            La Secretaría de Investigación y Posgrado de la Facultad de Ciencias Humanas informa que hasta el 12 de marzo se encuentra abierta la convocatoria de selección de antecedentes de aspirantes para cubrir los cargos de Director/a y, en forma opcional, de Codirector/a, del Instituto de Estudios Clásicos y Traducción (IECyT) de esta Unidad Académica (Res. 15-CD-25)<br>
            <br>
            La comisión ad hoc de especialistas que evaluará las postulaciones está integrada por la Dra. Marcela Alejandra Suarez. Universidad de Buenos Aires-CONICET, la Dra. Eleonora Tola. Universidad de Buenos Aires-Universidad Nacional de Córdoba- CONICET y el Dr. Guillermo de Santis. Universidad Nacional de Córdoba-CONICET, quienes fueron designados como jurados titulares. En carácter de jurados suplentes, conforman el tribunal la Dra. Mariana Calderón. Universidad Nacional de Cuyo, la Dra. Lidia Raquel Miranda. Universidad Nacional de La Pampa-CONICET y el Dr. José Javier Maristany. Universidad Nacional de La Pampa.<br>
            <br>
            La presentación de antecedentes se realizará desde el 13 de marzo al 1° de abril de 2025, según los criterios que establece la Ordenanza 088-CD-20.<br>
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