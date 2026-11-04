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
                                <span class="b-active">Investigación y Posgrado</span>
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
	<div class="row text-left border border-dark border-bottom-1">
        <div style="background-color: #26406C;" class="col-12 font-weight-bold py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0 text-light">Secretaria de Investigación y Posgrado</div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            <i class="fas fa-user-graduate"></i> Dra. María Pía Bruno<br>
            <i class="fas fa-university"></i> Cnel. Gil 353, 2º Piso<br>
            <i class="fas fa-phone"></i> (+54) 02954-451661<br>
            <i class="far fa-envelope"></i> <a href="mailto:posgrado@humanas.unlpam.edu.ar">posgrado@humanas.unlpam.edu.ar</a><br>            
        </div>

        <div style="background-color: #26406C;" class="col-12 font-weight-bold py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0 text-light">Investigación</div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            <!--<span class="font-weight-bold">Accesos</span><br>
            <a href="{{route('institutos')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Institutos</a><br>
            <a href="{{route('comunidad-graduada.proyectos-de-investigacion')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Proyectos de Investigación</a><br>
            <a href="{{route('investigacion_y_posgrado.investigacion.programa_incentivos')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Programa de Incentivos</a><br>-->
            <!--<a href="{{route('investigacion_y_posgrado.investigacion.jornadas')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Jornadas de Investigación</a><br><br>-->
            <span class="font-weight-bold">Normativa</span><br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10Lu9j7GzLivNMZ9tXD7qwM5iCWCgT6Gr/view?usp=sharing" target="_blank">Reglamento de Institutos</a><br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Y4IC2NqfxzL63SkOqI8LuwE8CFrI0Gud/view?usp=sharing" target="_blank">Normas del Anuario</a><br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zw0d0T7nUC1Y9b_i_OzrZqdi_grF8y3B/view?usp=sharing" target="_blank">Reglamento del Anuario</a><br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Km1x84_QR23XfLJzHxLQxkzVgJXADQFQ/view?usp=sharing" target="_blank">Ordenanza 025-CD-99</a><br><br>
            <span class="font-weight-bold">Becas y Subsidios</span><br>
            <i class="fas fa-file-pdf text-danger"></i><a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2017_378.pdf" target="_blank"> Reglamento Becas de Investigación de la UNLPam (Res. 378-CS-17)</a><br>
            <i class="fas fa-file-pdf text-danger"></i><a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2017_515.pdf" target="_blank"> Rectificatoria Art. 1° y 2° del Reglamento Becas de Investigación de la UNLPam (Res. 515-CS-17)</a><br><br>            
        </div>

        <div style="background-color: #26406C;" class="col-12 font-weight-bold py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0 text-light">Posgrado</div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-0 border-left-0">
            <!--<a href="{{route('carreras.posgrado.maestria')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Maestrías</a><br>
            <a href="{{route('carreras.posgrado.especializacion')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Especializaciones</a><br>
            <a href="{{route('comunidad-graduada.programa-de-formacion-permanente')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Programa de Formación Permanente para Graduadas/os</a><br>
            <a href="{{route('comunidad-graduada.cursos-y-seminarios')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Cursos y Seminarios</a><br><br>-->
            <span class="font-weight-bold">Normativa</span><br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13Mq_jKxpLOty_FwkMQVXtXZXMOU6d-vo/view?usp=sharing" target="_blank">Reglamento de Posgrados</a><br><br>
            <!--<span class="font-weight-bold">Becas</span><br>
            <br>-->            
        </div>                
	</div>

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