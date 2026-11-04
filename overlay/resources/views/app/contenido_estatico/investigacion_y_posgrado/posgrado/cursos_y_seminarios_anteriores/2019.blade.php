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
                                <span class="b-active">Cursos y Seminarios hasta 2021</span>
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
        <!-- 2019 -->                
        <div class="col-12 font-weight-bold py-2 bg-light border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">Año 2019</div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Curso Extracurricular de Posgrado "Sistemas de Información Geográfica (SIG): análisis de datos espaciales con QGIS (Nivel 1)"<br>
            Mg. Daila G. Pombo - Mgr. María Celeste Martínez Uncal<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bPdPVd8k_N01eKVjnaOOZYkUj1f4smx8/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario extracurricular de posgrado “Derechos Humanos, Sujeto y Emancipación: Neoliberalismo, racismo y colonización de las subjetividades”<br>
            Dr. Eduardo Luis Aguirre y de la Mg. María Liliana Ottaviano<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1T74qteJYmPPbe_YpFHmt-NRnvjFCtfQX/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Taller extracurricular “A cognitive approach to second lenguaje teaching: theory and teaching methodology (La enseñanza de segundas lenguas desde un enfoque cognitivo: teoría y práctica)”<br>
            Mgr. Sonia Suárez Cepeda y de la Prof. Lilian Ariztimuño<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rJw9qoS2YJPMZYKgtVDtlS4H3G9mynHd/view?usp=sharing" target="_blank">Programa</a>
        </div>        
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario extracurricular de posgrado "El lenguaje como semiótica-social: Una introducción a la Lingüística Sistémico-Funcional con atención a sus principios fundamentales y su aplicación al análisis del discurso"<br>
            PhD Anabelle Lukin (Departamento de Lingüística, Macquarie University, Sydney, Australia)<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LQFQ43KbYJAkPvSBxUZLUZo6OM4egkzN/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario extracurricular de posgrado “Los géneros orales y su realización fonológica”<br>
            Mgr. Miriam Germani y de la Mgr. Lucía Rivas<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14j1b2kISColOdqDRSd88tn4O_bWXuA1M/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario extracurricular de posgrado “Tecnologías de la Información y la Comunicación (TIC) para el Aprendizaje y el Conocimiento (TAC). Nuevos desafíos educativos en la era digital”<br>
            Esp. Aurelia García.<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LEbSKYp6Rf1LrocptXY-p2tyWS6r28os/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario extracurricular de posgrado "Del deseo femenino al patriarcado. Implicancias en las subjetividades"<br>
            Mgr. Cristina Nosei y del Dr. Juan Franco<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1x69Cbaad64FU48MAbYxGCKPI_YoamLSU/view?usp=sharing" target="_blank">Programa</a>
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