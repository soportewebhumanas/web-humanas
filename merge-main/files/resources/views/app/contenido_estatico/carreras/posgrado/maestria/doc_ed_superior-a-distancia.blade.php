@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
                                    <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{route('carreras.posgrado.carreras-posgrado')}}">Carreras de Posgrado <i class='fa fa-angle-right'></i></a></span>
									<!--<span><a href="{{route('carreras.posgrado.maestria')}}">Maestrías <i class='fa fa-angle-right'></i></a></span>-->
									<span class="b-active">Maestría en Docencia en Educación Superior a distancia</span>
						</p>
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
			<h3>Posgrado</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Docencia en Educación Superior</a>
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Propuesta</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Perfil del Título</a>
		</div>
		<div class="col-12 d-xl-none">
			<hr>
		</div>
		<div class="tab-content col-12 col-xl-8 col-lg-8 mb-5" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<div class="container">
					<div class="row">
						<!--Importante-->
						<div style="background-color: #26406C;" class="rounded text-white col-12 border border-bottom-0 border-left-0 border-right-0 border-top-0 border-secondary mb-2 py-2 text-justify">
							INSCRIPCIÓN CERRADA<br><br>       
						</div>							
						<!--Título-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Título</div>
						<div class="col-7 py-2">Magíster en Docencia en Educación Superior</div>
						
						<!--Director/a-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Directora</div>
						<div class="col-7 py-2">Mgr. Liliana Campagno</div>
						
						<!--Cordinador/a-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Coordinadora</div>
						<div class="col-7 py-2">Dra. Rosana Moretta</div>
						
						<!--Consejo Acdémico-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Consejo Académico</div>
						<div class="col-7 py-2">Dra. Lía Norverto, Dra. Sonia Alzamora, Dra. Graciela Di Franco</div>						

						<!--Nivel-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Nivel</div>
						<div class="col-7 py-2">Posgrado</div>
						
						<!--Modalidad-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Modalidad</div>
						<div class="col-7 py-2">a Distancia</div>	
						
						<!--Aranceles-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Aranceles</div>
						<div class="col-7 py-2"><a href="{{route('carreras.posgrado.aranceles.aranceles')}}">Ver</a></div>
						<!--<div class="col-7 py-2">La carrera es arancelada- Se abona una matrícula y 18 cuotas (Especialización) y 24 cuotas (Maestría)</div>-->
						
						<!--Formulario de pre-inscripcion-->
						<!--<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Formulario de pre-inscripción</div>
						<div class="col-7 py-2">
							<i class="text-danger">Inscripción por SIU3  hasta el 17 de mayo de 2024</i>													
							<a href="https://g3.unlpam.edu.ar/preinscripcion/ua5/?__o" target="_blank">Aquí</a><br>
						</div>-->
						<!--<div class="col-7 py-2"><a href="https://forms.gle/JpPDxbLQkdgAKnZg8" target="_blank">Aquí</a></div>-->

						<!--Coneau-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Acreditación CONEAU</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1288v_lgdyaWC73CHOGyYTQLS7_bLre6r/view?usp=drive_link" target="_blank">Ver</a>
						</div>
						
						<!--Reglamento de carreras de posgrado FCH-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Reglamento general de carreras de posgrado de la FCH</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2024_103.pdf" target="_blank">Ver</a>
						</div>

						<!--Resolución ministerial-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Resolución Ministerial de la carrera</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RDHhx5c0dLtbE6qCjeNNiXxPE0fHC2ng/view?usp=drive_link" target="_blank">Ver</a>
						</div>						

						<!--Programa-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Res. CS Nº 356/2022</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i>
							<!--<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2022_356.pdf" target="_blank">Ver</a>-->
							<a href="https://drive.google.com/file/d/1pVIqE2GhGciIwbpDdlSlholSGfH5q0Um/view?usp=drive_link" target="_blank">Ver</a>
						</div>						
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Propuesta</b><br><br>
					La maestría se propone desarrollar la capacidad para formular, implementar y evaluar proyectos de investigación en el campo pedagógico en general y en el dominio de la didáctica de la disciplina a la que adscribe la/el maestranda/o en la educación superior. A ese fin, se adoptará un enfoque centrado en el estudio de las problemáticas de la educación superior con permanente referencia a la experiencia de las/os maestrandas/os en su historia académica y en su actividad como docentes y, eventualmente, en la gestión de instituciones de educación superior. Se construirá, de este modo, teoría basada sobre el estudio de las concepciones de diferentes autoras/es, desde una perspectiva histórica y de actualidad, y de la reflexión de las/os participantes, con el propósito de construir un texto personal y colectivo con nuevos significados, que permitan dar cuenta de las variadas problemáticas que hoy reclaman soluciones nuevas en este nivel educativo.<br>
					La educación superior está atravesando transformaciones como resultado del impacto de los contextos propios del siglo XXI, en los que se incluyen los avances en tecnologías de la información y comunicación y el potencial transformador de las propuestas formativas a distancia.					
				</p>
			</div>
			<div class="tab-pane fade mx-2" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<div class="container">
					<div class="row">
						<div class="col-12">
						<p class="text-justify text-dark">
							<b style="color: #26406C;">Perfil del título</b><br><br>
							La/el graduada/o de la carrera Maestría en Docencia en Educación Superior poseerá conocimientos avanzados sobre teorías de la Educación Superior y las características organizativas de las instituciones del nivel y su dinámica de transformación.<br><br>
							<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Tendrá conocimientos actualizados sobre diferentes teorías y modelos de la enseñanza, así como sobre políticas y normativas de la educación superior y sus fundamentaciones.</span></div></br>
							<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Tendrá conocimiento y capacidades para participar en tareas de investigación, planificación estratégica y autoevaluación institucional en aspectos académicos, en particular en los relacionados con la misión de docencia en las instituciones de educación superior.</span></div></br>
							<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Conocerá diferentes modalidades de vinculación entre las tareas de docencia, investigación y extensión en la educación superior.</span></div></br>
							<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Poseerá conocimiento actualizado sobre los procesos de diseño curricular y la problemática actual del curriculum de la educación superior, sus tendencias y las modalidades que adopta en diferentes carreras e instituciones.</span></div></br>
							<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Será capaz de programar sus cursos adoptando decisiones creativas y fundadas, resolviendo de manera adecuada los problemas de selección, secuenciación y organización de contenidos, así como la selección de estrategias de enseñanza.</span></div></br>
							<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Tendrá conocimiento y capacidades para diseñar el programa de evaluación de los aprendizajes para, construir los instrumentos de evaluación adecuados, administrarlos e interpretar los resultados.</span></div></br>

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