@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
                                    <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{route('carreras.posgrado.carreras-posgrado')}}">Carreras de Posgrado <i class='fa fa-angle-right'></i></a></span>
									<span class="b-active">Magíster en Docencia en Educación Superior</span>
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
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Duración</a>
			<a class="nav-link" id="v-pills-alcances-tab" data-toggle="pill" href="#v-pills-alcances" role="tab" aria-controls="v-pills-alcances" aria-selected="false">Alcances del Título</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Perfil</a>
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
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1kMjI-jPbJoy8E1KVArTACKN90ulAXtSJ/view?usp=sharing" target="_blank"> Descargar</a>
						</div>

						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reconocimiento Oficial (Res. Min. Nº 133/2015)
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZmWxVG5-jdRlMowu7acyyquqxHsTBm_8/view?usp=sharing" target="_blank"> Descargar</a>
						</div>
						
						<!-- modificado 09/12/2024
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reglamento de Posgrados 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13Mq_jKxpLOty_FwkMQVXtXZXMOU6d-vo/view?usp=sharing" target="_blank"> Descargar</a>
						</div>-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reglamento de carreras de Posgrados de la Facultad de Ciencias Humanas 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1YldY8euchsi2wA0MSYDHhZf8evPEsi2f/view?usp=drive_link" target="_blank"> Descargar</a>
						</div>
						<!--Acrededitación y reglamentos-->

						<!--Plan de estudios-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">       
							Plan de estudios (Res. CS Nº 020/2012)
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2012_20_4YA62e5.pdf" target="_blank">Descargar</a>
							<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JZb9GlZYdbbLJnx_a8VQ9bT-EaMgf8qG/view?usp=sharing" target="_blank">Descargar</a>-->
						</div>						
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark vh-100">
					<b style="color: #26406C;">Duración</b><br><br>
					La duración prevista del cursado es de veinticuatro (24) meses. El tiempo estimado para la realización de la tesis es de dieciocho (18) meses
				</p>
			</div>

			<div class="tab-pane fade mx-2" id="v-pills-alcances" role="tabpanel" aria-labelledby="v-pills-alcances-tab">
				<div class="container">
					<div class="row">
						<div class="col-12">
						<p class="text-justify text-dark">
							<b style="color: #26406C;">Alcances del Título</b><br><br>
							Tratándose de una carrera de posgrado, el título no tiene alcances profesionales más allá de los que ya posee el título de grado del/la estudiante que complete estos estudios. Su propósito es capacitarlo/a para ejercer la docencia y todas las tareas relacionadas con el asesoramiento, la enseñanza, la evaluación, la dirección y supervisión de actividades docentes, así como para proyectar y llevar a cabo tareas de investigación en el campo de la enseñanza en general y en el de su disciplina en particular. En consecuencia, el/la graduado/a en la carrera Maestría en Docencia en Educación Superior estará capacitado/a para desempeñarse en instituciones de ese nivel en tareas de enseñanza, investigación, asesoramiento, dirección y supervisión académica, participando en la planificación, programación, implementación y evaluación.
						</p>				
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane fade mx-2" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<div class="container">
					<div class="row">
						<div class="col-12">
						<p class="text-justify text-dark">
							<b style="color: #26406C;">Perfil</b><br><br>
							El/la graduado/a de la carrera Maestría en Docencia en Educación Superior poseerá conocimientos avanzados de teorías de la Educación Superior y de las características organizativas de las instituciones del nivel y su dinámica de transformación. Entre otros aspectos, tendrá conocimiento y capacidades para participar en tareas de investigación, planificación estratégica y autoevaluación institucional en aspectos académicos, en particular en los relacionados con la misión de docencia de las instituciones de Educación Superior; asimismo desarrollará conocimientos actualizados sobre diferentes teorías y modelos de la enseñanza, así como sobre políticas y normativas de la educación superior y sus fundamentaciones.
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