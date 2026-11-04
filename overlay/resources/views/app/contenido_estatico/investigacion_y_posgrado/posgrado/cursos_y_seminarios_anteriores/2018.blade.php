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
                                <span><a href="{{route('comunidad-graduada.cursos-y-seminarios')}}">Cursos y Seminarios <i class='fa fa-angle-right'></i></a></span>                                
                                <span class="b-active">2018</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
<!--Inicio Contenido-->
<div class="container">
<div class="row row-cols-1">
<div class="container mb-4 my-2">
	<div class="row text-left border border-dark border-bottom-1">
        <!-- 2018 -->                
        <div class="col-12 font-weight-bold py-2 bg-light border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">Año 2018</div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario “Trayectorias educativas, una construcción subjetiva e institucional”<br>
            Dra. María Beatriz Greco y de la Mgter. Sofía Adinolfi (colaboradora)<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19NxB4779Vyj3-JBhZWOQ6S9hbb_i-yLf/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario de posgrado "Bases Cognitivas y Neurobiológicas de la adquisición y procesamiento del lenguaje"<br>
            Dr. Alejandro Wainselboim<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13HMiiyjK1E_PhIKFx_tr14ntbe4g820u/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario Extracurricular de Posgrado "Derechos Humanos, Sujeto y Emancipación"<br>
            Dr. Eduardo Luis Aguirre, Mg. María Liliana Ottaviano.<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1HJr0lWeWgTVf_mCslaDS0ANms2gxUQ1i/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <!--<div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario "Los Géneros orales y su realización Fonológica"<br>
            Miriam P. Germani y Lucía I. Rivas<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Programa</a>
        </div>-->
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario “Fonética y fonología”<br>
            Dr. Scott Sadowsky<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qqMCWqpjd68uONpSK-hUG7hZlizJlWq3/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario “Tecnologías de la Información y la Comunicación (TIC) para el Aprendizaje y el Conocimiento (TAC) – Nuevos desafíos educativos en la era digital”<br>
            Esp. Aurelia García.<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/15L3x-BcTHGZ9JjDkRPVv27YjY6b72VU8/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario de posgrado “Acercándonos a la problemática del Asesoramiento en las instituciones educativas”<br>
            Dra. Diana Martín<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1QCiz160tJTnGVpg-JqwiMtk1SMWvHOBr/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario de posgrado “Entre lo global y lo local: las herramientas teóricas de Stephen Ball para estudiar las trayectorias de las políticas educativas”<br>
            Dr. Jason Beech y del Dr. Pablo del Monte (colaborador)<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1uWhzNl_xaKzWuYD5iDqPUDNcnolpoTAk/view?usp=sharing" target="_blank">Programa</a>
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