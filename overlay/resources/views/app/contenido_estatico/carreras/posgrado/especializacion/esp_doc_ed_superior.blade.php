@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
                                    <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{route('carreras.posgrado.carreras-posgrado')}}">Carreras de Posgrado <i class='fa fa-angle-right'></i></a></span>
									<span class="b-active">Especialista en Docencia en Educación Superior</span>
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
			<a class="nav-link" id="v-pills-duracion-tab" data-toggle="pill" href="#duracion" role="tab" aria-controls="v-pills-duracion" aria-selected="false">Duración</a>
			<a class="nav-link" id="v-pills-requisitos-tab" data-toggle="pill" href="#requisitos" role="tab" aria-controls="v-pills-requisitos" aria-selected="false">Requisitos de inscripción</a>			
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Alcances del Título</a>
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
							Aquellos aspirantes que no posean título universitario de grado o de nivel superior no universitario de cuatro (4) 
							años de duración como mínimo, deberán presentar también copia del currículum vitae.
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
						<div class="col-7 py-2">Presencial</div>	

						<!--Sede-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Sede</div>
						<div class="col-7 py-2">General Pico</div>	
						
						<!--Aranceles-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Aranceles</div>
						<div class="col-7 py-2"><a href="{{route('carreras.posgrado.aranceles.aranceles')}}">Ver</a></div>
						
						<!--Acrededitación y reglamentos-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">       
							Acreditación CONEAU 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1aF_Vcyr8FCw0_jPbFbwenPLGbrnc5pdt/view?usp=drive_link" target="_blank"> Descargar</a>
						</div>

						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							<!--Reglamento de Posgrados (Res. Min. Nº 1592/2019)-->Resolución Ministerial de la carrera
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1S6NadZPJNYNItUngP0nbZniOOmb_m6cx/view?usp=sharing" target="_blank"> Descargar</a>
						</div>

						<!-- modificado 09-12-2024
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reglamento de Posgrados 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13Mq_jKxpLOty_FwkMQVXtXZXMOU6d-vo/view?usp=sharing" target="_blank"> Descargar</a>
						</div>

						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reglamento Interno 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1XgWEitRRLzcpBIQtVPeNJr6BcMIWT7Qk/view?usp=sharing" target="_blank"> Descargar</a>
						</div>-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reglamento de carreras de Posgrados de la Facultad de Ciencias Humanas 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1YldY8euchsi2wA0MSYDHhZf8evPEsi2f/view?usp=drive_link" target="_blank"> Descargar</a>
						</div>
						<!--Acrededitación y reglamentos-->

						<!--Plan de estudios-->
						<!--
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">       
							Plan de estudios 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dQkPU2rV8q5sdpfyZqCRT17CLbglDCbj/view?usp=drive_link" target="_blank">Descargar</a>
						</div>-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">       
							Plan de Estudios (Res. CS Nº 317/2017)
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1BVnVGuKFPTRw71BbyZYGbm0i-p-U7_z7/view?usp=sharing" target="_blank">Descargar</a>
						</div>
						
					</div>
				</div>
			</div>
			<!-- Duración -->
			<div class="tab-pane fade vh-100" id="duracion" role="tabpanel" aria-labelledby="v-pills-duracion-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Duración</b><br><br>
					La Especialización tiene una duración de dieciocho (18) meses de cursado y un plazo de doce (12) meses posteriores a la aprobación del último seminario dictado para la presentación del Trabajo Final de Especialización.
				</p>
			</div>
			<!-- Duración -->

			<!-- Requisitos -->
			<div class="tab-pane fade vh-100" id="requisitos" role="tabpanel" aria-labelledby="v-pills-requisitos-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Requisitos de inscripción</b><br><br>
					Los/as aspirantes deberán presentar:
					<ul>
						<li>Nota dirigida al Decano/a solicitando la admisión</li>
						<li>Fotocopia autenticada del título de grado y del certificado analítico (por escribano, policía o Juez de Paz)</li>
						<li>Fotocopia del DNI</li>
						<li>Dos (dos) fotos carnet</li>
						<li><a href="../../../slim/posgrado/P_Inscripcion_EDES.doc" download="Planilla de Inscripción" target="_blank">Planilla de inscripción</a></li>
					</ul>					
				</p>
			</div>
			<!-- Requisitos -->
			
			<!-- Alcances del Título -->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del título</b><br><br>
					Tratándose de una carrera de posgrado, el título no tiene alcances profesionales más allá de los que ya posee el 
					título de grado del estudiante que complete estos estudios. Su propósito es capacitarlo para ejercer la docencia y 
					todas las tareas relacionadas con el asesoramiento, la enseñanza, la evaluación, la dirección y supervisión de 
					actividades docentes así como para proyectar y llevar a cabo tareas de investigación en el campo de la enseñanza en 
					general y en el de su disciplina en particular. En consecuencia, el graduado en la Carrera de Especialización en 
					Docencia en Educación Superior estará capacitado para desempeñarse en instituciones de ese nivel en tareas de enseñanza, 
					asesoramiento, dirección y supervisión académica participando en todas las tareas de planificación, programación, 
					implementación y evaluación de la institución en general y, en especial, en el área de competencia de su disciplina de 
					origen. Poseerá igualmente competencias básicas para desarrollar trabajos de investigación en el campo.					
				</p>
			</div>
			<!-- Alcances del Título -->

			<!-- Perfil del Título -->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil del título</b><br><br>
					<p class="text-dark text-justify pl-3">
					Entre otros, quien obtenga el título de Especialista en Docencia en Educación Superior:
					<ul>
					<li>Poseerá conocimientos avanzados de Teorías de la Educación Superior y de las características organizativas de las instituciones del nivel y su dinámica de transformación.</li>
					<li>Tendrá dominio de conocimiento avanzado de diferentes teorías de la enseñanza y de diversos modelos de enseñanza y sus fundamentaciones.</li>
					<li>Desarrollará criterios de análisis y de evaluación con el fin
					de seleccionar teorías y modelos que considere apropiados para emplearlos como sustento de sus programaciones didácticas.</li>
					<li>Tendrá conocimiento y capacidades avanzadas para participar en tareas de
					planificación estratégica y autoevaluación institucional en aspectos académicos, en particular en los relacionados con la misión de docencia de las instituciones de Educación Superior.</li>
					<li>Conocerá diferentes modalidades de vinculación entre las tareas de docencia,
					investigación y extensión en la Educación Superior.</li>
					<li>Poseerá conocimiento actualizado sobre los procesos de diseño curricular y la
					problemática actual del diseño curricular universitario, sus tendencias y las
					modalidades que adopta en diferentes carreras e instituciones.</li>
					</ul>
				</p>
				</p>				
			</div>
			<!-- Perfil del Título -->

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