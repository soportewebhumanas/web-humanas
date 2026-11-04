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
                                <span><a href="{{ route('carousel.posgrado') }}">Posgrado <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Cursos y Seminarios Extracurriculares</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
<!--Inicio Contenido-->
            <div class="container">
                    <div class="row row-cols-1">
                    <h4>Reglamento de Seminarios de Posgrado</h4>
                    <p class="text-justify">
                        Requisitos: Poseer título universitario de grado de carrera no inferior a cuatro (4) años de duración o título equivalente a mil ochocientas (1800) horas.<br><br>
                        Los seminarios pueden ser arancelados. El pago debe realizarse antes del comienzo del mismo en la Secretaría de Investigación y Posgrado. Si tiene consultas no dude en escribir a <a href="mailto:posgrado@humanas.unlpam.edu.ar">posgrado@humanas.unlpam.edu.ar</a><br>        
                        <br>
                        <h4>Cursos y Seminarios hasta 2021</h4>                        
                        <a href="{{route('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.cursos_anteriores')}}">Acceder</a>                        
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