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
                                <span class="b-active">2020</span>
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
        <!-- 2020 -->
        <div class="col-12 font-weight-bold py-2 bg-light border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">Año 2020</div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario Extracurricular De Posgrado “Literatura y ESI en la escuela secundaria".<br>
            Dra. Rosario Pascual Battista y Dra. Sonia Bertón.<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JTqePKFmCHiENEpcm4H-UbYhyESTnGBh/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario Extracurricular De Posgrado “Análisis de Datos Espaciales con Sistemas de Información Geográfica (Sig) - Qgis (Nivel I)".<br>
            Mg. Daila G. Pombo y  Mgr. María Celeste Martínez Uncal.<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1u6NXAzq8P1-7nKZPOm8x2sBDWzsQ_IxA/view?usp=sharing" target="_blank">Programa</a>
        </div> 
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario extracurricular de posgrado “Derechos Humanos, Sujeto y Emancipación: Psicoanálisis, ética y política en la deriva circular del neoliberalismo”<br>
            Dr. Eduardo Luis Aguirre (U. di Tella - UNLPam), Mg. María Liliana Ottaviano. (UNLPam)<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1TJU_1GWMeQ-VZJaO7C2umGCb6QH9Mo48/view?usp=sharing" target="_blank">Programa</a>
        </div>          
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario extracurricular de posgrado “Antijudaísmo en la Antigüedad y Tardoantigüedad”<br>
            Dra. Paola Druille (CONICET, IDEAE-UNLPam) y Dr. Rodrigo Laham Cohen (CONICET, IMICIHU-UBA)<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1W-UO3NiNXe-1hfNXRIfaVhjlaQ0Yu36r/view?usp=sharing" target="_blank">Programa</a>
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