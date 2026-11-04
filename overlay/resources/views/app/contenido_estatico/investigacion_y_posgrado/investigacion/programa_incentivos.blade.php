@extends('app.slim.layouts.home')
@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <p><span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="{{ route('carousel.posgrado') }}"> Investigación <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active"> Programa Incentivos</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row row-cols-1">
                    <h3>Programa de Incentivos</h3><br>
                    <p class="text-justify">
                        La Facultad de Ciencias Humanas de la Universidad Nacional de La Pampa participa desde el año 1994 en el programa de Programa de Incentivos que promueve la investigación integrada a la docencia en las universidades nacionales. El pago del incentivo a los docentes investigadores categorizados está condicionado por el cumplimiento de las tareas docentes y de investigación que establece la normativa del Programa, Manual de Procedimientos para la Implementación de Incentivos a Docentes Investigadores, avaladas por la autoridad universitaria correspondiente así como por el resultado de la evaluación periódica de las actividades de investigación y de los currículos de los participantes.
                        <br><br>
                    </p>
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