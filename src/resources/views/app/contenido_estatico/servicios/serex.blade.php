@extends('app.slim.layouts.home')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="intro-text ">
				<p class="py-2">
					<span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> 
					<span><a href="{{route('servicios.inicio')}}">Servicios <i class='fa fa-angle-right'></i></a></span>
					<span class="b-active">Servicio Externo de Lenguas Extranjeras</span>
				</p>
			</div>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->


<!--Inicio Contenido-->
<style>
	.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff !important;
    background-color: #26406C !important;
}

.nav a {
    color: #26406C;
    text-decoration: none;
    background-color: transparent;
}
</style>
<div class="container mb-4 my-2">
	<div class="row text-left mx-1 mb-2">
		<div class="col-12 py-2">
			<h3>Servicios</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Servicio Externo de Lenguas Extranjeras</a>
		</div>
		<div class="col-12 d-xl-none">
			<hr>
		</div>
		<div class="tab-content col-12 col-xl-8 col-lg-8 mb-5" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Servicio Externo de Lenguas Extranjeras (SerEx)</b><br><br>
					<!--<i class="fas fa-file-pdf text-danger"></i> <a href="#">Resolución Nº 086-08 - Servicio Externo de Lenguas Extranjeras</a><br>-->
					<!--<i class="fas fa-link"></i> <a href="#">Exámenes de Acreditación de Nivel de Lengua Inglesa</a><br>
					<i class="fas fa-link"></i> <a href="#">Programa de Evaluación de Competencias Comunicativas en Inglés destinado a Alumnos de la Educación Secundaria (Ciclos Básico y Orientado)</a><br>-->
					<!--El Serex fue creado por Resolución N° 86-CD-08, y por el mismo acto se aprobó su reglamento de funcionamiento.<br>-->
					Sus objetivos generales son: Favorecer las prácticas de lectura, escritura y conversación en lenguas extranjeras; contribuir a la formación docente continua en el
					área de las lenguas extranjeras; ofrecer un servicio de extensión universitaria.<br><br>                    
					<span class="font-weight-bold"><a href="{{route('servicios.serex.examenes-de-acreditacion-de-nivel-de-lengua-inglesa')}}"> Exámenes de Acreditación de Nivel de Lengua Inglesa</a></span><br>
					<!--<span class="font-weight-bold">Consultas: </span><a href="mailto:examenesacreditacion@humanas.unlpam.edu.ar">examenesacreditacion@humanas.unlpam.edu.ar</a><br><br>-->
					<span class="font-weight-bold"><a href="{{route('servicios.serex.evaluacion-de-competencias-comunicativas')}}"> Evaluación de Competencias Comunicativas - Estudiantes Secundarios</a></span><br>
					<!--<span class="font-weight-bold">Consultas: </span><a href="mailto:evaluacionescompetencias@humanas.unlpam.edu.ar">evaluacionescompetencias@humanas.unlpam.edu.ar</a><br>-->
				</p>
			</div>
		</div>			
	</div><!--row-->
</div><!-- container -->
<!--Fin Contenido-->

@endsection

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
	$('body').addClass('become_teachers');
});
</script>