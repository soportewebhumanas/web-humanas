@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
                                    <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{route('carreras.posgrado.carreras-posgrado')}}">Carreras de Posgrado <i class='fa fa-angle-right'></i></a></span>
									<span class="b-active">Especialista en Historia Regional</span>
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
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Especialista en Historia Regional</a>
			<a class="nav-link" id="v-pills-duracion-tab" data-toggle="pill" href="#duracion" role="tab" aria-controls="v-pills-duracion" aria-selected="false">Duración</a>
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
						<!--<div style="background-color: #26406C;" class="rounded text-white col-12 border border-bottom-0 border-left-0 border-right-0 border-top-0 border-secondary mb-2 py-2 text-justify">
							INSCRIPCIÓN CERRADA<br><br>       
						</div>-->
						<!--Pre-inscripción-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">       
							Preinscripción Cohorte 2027 
						</div>
						<div class="col-7 py-2">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i> <a href="https://forms.gle/JZAHvLehLVDoZYHj9" target="_blank"> Formulario de inscripción</a>
						</div>	
						<!--Título-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Título</div>
						<div class="col-7 py-2">Especialista en Historia Regional</div>
						
						<!--Directora-->
						<!--<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Directora</div>
						<div class="col-7 py-2">Dra. Andrea Lluch</div>-->

						<!--Cordinadora-->
						<!--<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Coordinadora</div>
						<div class="col-7 py-2">Dra. Ana Rodríguez</div>-->
						
						<!--Consejo Acdémico-->
						<!--<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Consejo Académico</div>
						<div class="col-7 py-2">Dra. María Silvia Di Liscia, Dr. Enrique Mases, Prof. Jorge Mitre Saab</div>-->

						<!--Nivel-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Nivel</div>
						<div class="col-7 py-2">Posgrado</div>
						
						<!--Modalidad-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Modalidad</div>
						<div class="col-7 py-2">a distancia</div>	

						<!--Aranceles-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Aranceles</div>
						<div class="col-7 py-2"><a href="{{route('carreras.posgrado.aranceles.aranceles')}}">Ver</a></div>

						<!--Contacto-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Contacto</div>
						<div class="col-7 py-2"><a class="d-none d-sm-none d-md-block d-lg-block" href="mailto:especializacionhistoria@humanas.unlpam.edu.ar">especializacionhistoria@humanas.unlpam.edu.ar</a></div>
						
						<!--Acrededitación y reglamentos-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">       
							Acreditación CONEAU 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RyUkXUvGXaWus-3rXLGf5M3R_U5K_uUW/view?usp=drive_link" target="_blank"> Descargar</a>
							<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17BBdteL92l7C_Jjy3SoHl3lNFnDBNfMF/view?usp=sharing" target="_blank"> Descargar</a>-->
						</div>

						<!--<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reconocimiento Oficial 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dpjeAHwr47Ia3ISWmvtA3DXiS--jqLsQ/view?usp=sharing" target="_blank"> Descargar</a>
						</div>
						-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reglamento Interno 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2025_105.pdf" target="_blank"> Descargar</a>
						</div>

						<!--Acrededitación y reglamentos-->

						<!--Plan de estudios-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">       
							Plan de estudios 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Dd_3gsZN-GBmpmFYVWsZJiLmcZ38ROui/view?usp=drive_link" target="_blank">Descargar</a>
							<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/113F2RY3zndr2oDqhsWuW7LiftRvqCliX/view?usp=sharing" target="_blank">Descargar</a>-->
						</div>

						
					</div>
				</div>
			</div>
			<!-- Duración -->
			<div class="tab-pane fade vh-100" id="duracion" role="tabpanel" aria-labelledby="v-pills-duracion-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Duración</b><br><br>
					La duración de la carrera está prevista en dieciocho (18) meses de cursado, más un plazo de hasta doce (12) meses para la presentación del Trabajo Final de Especialización, a contar a partir de la aprobación del Taller de Trabajo Final. Este plazo podrá prorrogarse por una única vez por un período de seis (6) meses.
				</p>
			</div>
			<!-- Duración -->

			<!-- Alcances del Título -->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcance del título</b><br><br>
					El título de la Especialización tiene los mismos alcances profesionales que posee el título de grado del/la estudiante. Su propósito es la capacitación en temáticas que requieren de una actualización permanente, dados los avances en estas áreas y que, a la vez, le permitan insertarse e intervenir en el medio como un/a especialista para resolver aquellos problemas vinculados con un insuficiente conocimiento y/o valoración de la memoria, la identidad, el patrimonio histórico y cultural. Por ello, el/la graduado/a en la Especialización en Historia Regional podrá desempeñarse en instituciones educativas y culturales, en tareas de enseñanza,
					asesoramiento, dirección y supervisión académica, así como en actividades-espacios vinculados con la planificación y gestión del patrimonio histórico y cultural.
					<!--
					Al tratarse de una carrera de posgrado, el título no tiene alcances profesionales más allá de los que posee el título de grado del/la estudiante. Su propósito es capacitarlo/a en temáticas que requieren de una actualización permanente, dados los avances en estas áreas y que, a la vez, le permitan insertarse e intervenir en el medio como un/a especialista para resolver aquellos problemas vinculados con un insuficiente conocimiento y/o valoración de la memoria, la identidad, el patrimonio histórico y cultural. Por ello, el/la graduado/a en la Especialización en Historia Regional podrá desempeñarse en instituciones educativas y culturales, en tareas de enseñanza, asesoramiento, dirección y supervisión académica, así como en actividades-espacios vinculados con la planificación y gestión del patrimonio histórico y cultural.
					-->
				</p>
			</div>
			<!-- Alcances del Título -->

			<!-- Perfil del Título -->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil del título</b><br><br>
					<b class="text-dark">
						La/el Especialista en Historia Regional:<br>
						●&nbspPoseerá conocimientos actualizados y avanzados sobre nuevas perspectivas teóricas y metodológicas vinculadas con la Historia Regional en sus distintas áreas (arqueología, historia económica, política, social y cultural);<br>
						●&nbspSerá capaz de adquirir información y reflexionar sobre la arqueología y la historia indígena, con un criterio respetuoso de las diferencias culturales y étnicas, como así también el manejo respetuoso de los restos humanos recuperados y los depositados en Museos;<br>
						●&nbspPodrá redactar informes y documentos vinculados con las distintas áreas temáticas (arqueología, historia política, económica, cultural y social);<br>
						●&nbspTendrá herramientas y capacidades para intervenir de manera dinámica y creativa en programas y proyectos vinculados con la preservación de la memoria y del patrimonio histórico-cultural.<br>

					<!--El/la graduado/a de la carrera Especialización en Historia Regional: 
					<ul>
						<li>Poseerá conocimientos actualizados y avanzados sobre nuevas perspectivas teóricas y metodológicas vinculadas con la Historia Regional en sus distintas áreas (arqueología, historia económica, política, social y cultural); </li>
						<li>Será capaz de adquirir información y reflexionar sobre la arqueología y la historia indígena del área pampeana, con un criterio respetuoso de las diferencias culturales y étnicas; </li>
						<li>Podrá redactar informes y documentos vinculados con las distintas áreas (arqueología, historia política, económica, cultural y social); </li>
						<li>Tendrá herramientas y capacidades para intervenir de manera dinámica y creativa en programas y proyectos vinculados con la preservación de la memoria y del patrimonio histórico-cultural; </li>
						<li>Dispondrá de propuestas acordes con el manejo de nuevas tecnologías (TICs) en los procesos de enseñanza y aprendizaje y en relación con la temática de la Especialización.</li>
					</ul>	
					</b>-->
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