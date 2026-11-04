@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="py-2"><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Servicios</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>

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
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Servicio de Traducción de la Facultad de Ciencias Humanas</a>
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Servicio para la Escritura y la Lectura en la Universidad</a>
			<a class="nav-link" id="v-pills-alcances-tab" data-toggle="pill" href="#v-pills-alcances" role="tab" aria-controls="v-pills-alcances" aria-selected="false">Servicio Externo de Lenguas Extranjeras</a>
		</div>
		<div class="col-12 d-xl-none">
			<hr>
		</div>
		<div class="tab-content col-12 col-xl-8 col-lg-8 mb-5" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<p class="text-justify text-dark vh-100">
					<b style="color: #26406C;">Servicio de Traducción de la Facultad de Ciencias Humanas (SERTRA)</b><br><br>
						Sus objetivos son: Ofrecer a las distintas cátedras, institutos de investigación e investigadores de la Facultad de Ciencias Humanas, un Servicio de Traducción, en los idiomas inglés y francés, del material bibliográfico, científico y técnico,
						de interés para el desarrollo de la actividad académica y de investigación; ofrecer a los docentes e investigadores de otras unidades académicas de la Universidad Nacional de La
						Pampa, la posibilidad de acceder al Servicio de Traducción de la Facultad de Ciencias Humanas; ofrecer a instituciones oficiales y a empresas, asociaciones o personas de
						carácter privado, el Servicio de Traducción de la Facultad de Ciencias Humanas.<br>                    
						<br>
						<b>Contacto: </b><a href="mailto:sertra@humanas.unlpam.edu.ar">sertra@humanas.unlpam.edu.ar</a>
				</p>
			</div>
			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark vh-100">
					<b style="color: #26406C;">Servicio para la Escritura y la Lectura en la Universidad (SERLECES)</b><br><br>
					<!--<i class="fas fa-file-pdf text-danger"></i> <a href="#">Resolución Nº 086-08 - Servicio para la Escritura y la Lectura en la Universidad</a><br>-->
					<!--El Serleces fue creado por Resolución N° 475-CD-03, y por el mismo acto se aprobó su reglamento de funcionamiento.<br>-->
					Sus objetivos generales son: Promover el mejoramiento de las prácticas de lectura y de escritura en el nivel universitario; contribuir a la formación docente
					continua en el área de la producción de lectura de textos académicos; ofrecer un servicio de extensión universitaria.<br><br>
					<b>Contacto: </b><a href="mailto:serleces@humanas.unlpam.edu.ar">serleces@humanas.unlpam.edu.ar</a>
				</p>
			</div>

			<div class="tab-pane fade mx-2" id="v-pills-alcances" role="tabpanel" aria-labelledby="v-pills-alcances-tab">
				<div class="container">
					<div class="row">
						<div class="col-12">
						<p class="text-justify text-dark">
							<b style="color: #26406C;">Servicio Externo de Lenguas Extranjeras (SerEx)</b><br><br>
							<!--<i class="fas fa-file-pdf text-danger"></i> <a href="#">Resolución Nº 086-08 - Servicio Externo de Lenguas Extranjeras</a><br>-->
							<!--<i class="fas fa-link"></i> <a href="#">Exámenes de Acreditación de Nivel de Lengua Inglesa</a><br>
							<i class="fas fa-link"></i> <a href="#">Programa de Evaluación de Competencias Comunicativas en Inglés destinado a Alumnos de la Educación Secundaria (Ciclos Básico y Orientado)</a><br>-->
							<!--El Serex fue creado por Resolución N° 86-CD-08, y por el mismo acto se aprobó su reglamento de funcionamiento.<br>-->
							Sus objetivos generales son: Favorecer las prácticas de lectura, escritura y conversación en lenguas extranjeras; contribuir a la formación docente continua en el
							área de las lenguas extranjeras; ofrecer un servicio de extensión universitaria.<br><br>                    
							<span class="font-weight-bold"><a href="{{route('servicios.serex.examen_acreditacion')}}"> Exámenes de Acreditación de Nivel de Lengua Inglesa</a></span><br>
							<!--<span class="font-weight-bold">Consultas: </span><a href="mailto:examenesacreditacion@humanas.unlpam.edu.ar">examenesacreditacion@humanas.unlpam.edu.ar</a><br><br>-->
							<span class="font-weight-bold"><a href="{{route('servicios.serex.evaluacion_competencias')}}"> Evaluación de Competencias Comunicativas - Estudiantes Secundarios</span><br>
							<!--<span class="font-weight-bold">Consultas: </span><a href="mailto:evaluacionescompetencias@humanas.unlpam.edu.ar">evaluacionescompetencias@humanas.unlpam.edu.ar</a><br>-->
						</p>				
						</div>
					</div>
				</div>
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