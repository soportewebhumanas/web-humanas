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
									<span class="b-active">Especialista en Docencia en Educación Superior (a distancia)</span>
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
			<h3 style="color: #26406C;">Posgrado</h3>
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
			<div class="tab-pane fade show active vh-100" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<div class="container">
					<div class="row">
						<!--Importante-->
						<div style="background-color: #26406C;" class="rounded text-white col-12 border border-bottom-0 border-left-0 border-right-0 border-top-0 border-secondary mb-2 py-2 text-justify">
							INSCRIPCIÓN CERRADA<br><br>       
						</div>						
						<!--Título-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Título</div>
						<div class="col-7 py-2">Especialista en Docencia en Educación Superior</div>

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
						
						<!--Formulario de pre-inscripcion-->
						<!--
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Formulario de pre-inscripción</div>
						<div class="col-7 py-2"><a href="https://forms.gle/JpPDxbLQkdgAKnZg8" target="_blank">Aquí</a></div>-->

						<!--Formulario de pre-inscripcion-->
						<!--<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Formulario de pre-inscripción</div>
						<div class="col-7 py-2">
							<i class="text-danger">Inscripción por SIU3  hasta el 17 de mayo de 2024</i>													
							<a href="https://g3.unlpam.edu.ar/preinscripcion/ua5/?__o" target="_blank">Aquí</a><br>
						</div>-->						

						<!--Coneau-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Acreditación CONEAU</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1VjLRhqOKfDROokSW6MOU7Ivhgf_mumxA/view?usp=drive_link" target="_blank">Ver</a>
						</div>

						<!--Reglamento de carreras de posgrado FCH-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Reglamento general de carreras de posgrado de la FCH</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2024_103.pdf" target="_blank">Ver</a>
						</div>
						
						<!--Resolución ministerial-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Resolución Ministerial de la carrera</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qKN3atfFqRtf-eBVqxrTV_oiLdQawL0t/view?usp=drive_link" target="_blank">Ver</a>
						</div>												

						<!--Programa-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Res. CS Nº 355/2022</div>
						<div class="col-7 py-2">
							<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dQkPU2rV8q5sdpfyZqCRT17CLbglDCbj/view?usp=drive_link" target="_blank">Ver</a>-->
							<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2022_355.pdf" target="_blank">Ver</a>-->
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Ff5iLwtbW1S0rhAE7ZwgktKO-TxIktIE/view?usp=drive_link" target="_blank">Ver</a>
						</div>						
					</div>
				</div>
			</div>
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Propuesta</b><br><br>
					Esta carrera de posgrado ofrecerá a docentes que provienen de distintos campos disciplinares, una formación académica y profesional de calidad que redunde en el mejoramiento de las prácticas de enseñanza en el nivel superior. Se profundizará en la formación para la docencia, la gestión y la extensión, en un proceso continuo de reflexión que atienda a las demandas de los contextos socio-políticos actuales y su proyección al futuro. Asimismo, la educación a distancia permite ofrecer a las/os destinatarias/os estrategias que promuevan el desarrollo de sus propias trayectorias, de manera autónoma.
				</p>
			</div>
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil del título</b><br><br>
					La/el graduada/o de la Carrera Especialización en Docencia en Educación Superior:
					<br><br>
					<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Poseerá conocimientos avanzados de teorías sobre la Educación Superior y de las características organizativas de las instituciones del nivel y su dinámica de transformación.</span></div></br>
					<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Tendrá dominio de conocimiento avanzado de diferentes teorías de la enseñanza y de diversos modelos de enseñanza y sus fundamentaciones.</span></div></br>
					<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Poseerá conocimiento de las ideas de las/os autoras/es más importantes del campo y será capaz de comparar posiciones teóricas y de proseguir por sí mismo y profundizar los conocimientos del campo.</span></div></br>
					<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Desarrollará criterios de análisis y de evaluación con el fin de seleccionar teorías y modelos que considere apropiados para emplearlos como sustento de sus programaciones didácticas.</span></div></br>
					<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Tendrá conocimiento y capacidades avanzadas para participar en tareas de planificación estratégica y autoevaluación institucional en aspectos académicos, en particular en los relacionados con la misión de docencia de las instituciones de Educación Superior.</span></div></br>
					<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Conocerá diferentes modalidades de vinculación entre las tareas de docencia, investigación y extensión en la Educación Superior.</span></div></br>
					<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Poseerá conocimiento actualizado sobre los procesos de diseño curricular y la problemática actual del diseño curricular universitario, sus tendencias y las modalidades que adopta en diferentes carreras e instituciones.</span></div></br>
					<div class=" d-flex align-items-center"><i class="fa fa-circle pr-3" aria-hidden="true" style="font-size: 0.4rem"></i><span class="text-justify">Será capaz de programar sus cursos; adoptando decisiones creativas y, al mismo tiempo, rigurosamente fundadas, haciendo el mejor uso del tiempo y resolviendo de manera adecuada los problemas de selección, secuenciación y organización de contenidos, así como la selección de estrategias de enseñanza.</span></div></br>
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