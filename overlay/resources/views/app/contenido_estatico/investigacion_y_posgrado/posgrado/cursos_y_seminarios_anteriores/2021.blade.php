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
                                <span class="b-active">2021</span>
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
        <!-- 2021-->
        <div class="col-12 font-weight-bold py-2 bg-light border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">Año 2021</div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario extracurricular de posgrado: “Derechos Humanos, Sujeto y Emancipación: pensados desde la pandemia”<br>
            Dr. Eduardo Luis Aguirre, Mgtr. María Liliana Ottaviano<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1GAfjZEqUGOBbN3hQ7tUkOoPtYdEthofp/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario extracurricular de grado: “Actualización teórico-metodológica en temas de lingüística histórica e historiografía lingüística”<br>
            Dra. María Alejandra Regúnaga (Conicet/iLing, Facultad de Ciencias Humanas, UNLPam), Dra. Lidia Raquel Miranda (Conicet/IDEAE, Facultad de Ciencias Humanas, UNLPam), Dr. Guillermo Toscano y García (Universidad de Buenos Aires), Dr. Esteban Lidgett (Universidad de Buenos Aires)<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hHRb4wRI6oEawbleAp_HJTSlCpbPsj8P/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario extracurricular de posgrado: "Introducción a las fuentes del derecho griego clásico, ptolemaico y greco-romano"<br>
            Dr. Emiliano Buis (CONICET, UBA, UNCEN), Dra. Paola Druille (CONICET, UNLPam), Abg. Diego M. Santos (UBA, UNIPE)<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ivqWA5DslkGc3zn7wYf0za8ugfmwmw-I/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario extracurricular de posgrado: “Nociones básicas de escritura académica”<br>
            Doctoras Nora Forte, María Carolina Domínguez y Diana Moro.<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1G4XaBeQ3sbxcY_hZLYobh9ECYKE--tff/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario - Taller Extracurricular de posgrado: "La investigación literaria: diseños y herramientas metodológicas"<br>
            Dras. Graciela Salto y Diana Moro - Dras. Sonia Bertón y María Virginia González.<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Kawa7u5KkUpaMfCjtBhuS98vvM1D6uOO/view?usp=sharing" target="_blank">Programa</a>
        </div>                                
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Taller Extracurricular de Grado “Arts-based practices in english language teacher education: an initial framework [prácticas basados en las artes en la formación docente en inglés: un marco posible]"<br>
            Enrique Alejandro Basabe.<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12R7RN7jjUCk6Ob4Da_F6FNMlKIFmm2m5/view?usp=sharing" target="_blank">Programa</a>
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