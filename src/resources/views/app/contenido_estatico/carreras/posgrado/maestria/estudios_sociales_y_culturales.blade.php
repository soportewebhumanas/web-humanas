@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
                                    <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{route('carreras.posgrado.carreras-posgrado')}}">Carreras de Posgrado <i class='fa fa-angle-right'></i></a></span>
									<span class="b-active">Magíster en Estudios Sociales y Culturales</span>
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
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Magíster en Estudios Sociales y Culturales</a>
			<a class="nav-link" id="v-pills-duracion-tab" data-toggle="pill" href="#duracion" role="tab" aria-controls="v-pills-duracion" aria-selected="false">Duración</a>
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Alcances del Título</a>
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
						<div class="col-7 py-2">Magíster en Estudios Sociales y Culturales</div>

						<!--Directora-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Directora</div>
						<div class="col-7 py-2">Dra. Lía Norverto</div>

						<!--Cordinadora-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Coordinadora</div>
						<div class="col-7 py-2">Dra. Mariana Funkner</div>
						
						<!--Consejo Acdémico-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Consejo Académico</div>
						<div class="col-7 py-2">Dr. José Maristany, Dra. Ana María Rodríguez, Dra. Eugenia Comerci, Dra. Andrea D´Atri</div>

						<!--Nivel-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Nivel</div>
						<div class="col-7 py-2">Posgrado</div>
						
						<!--Modalidad-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Modalidad</div>
						<div class="col-7 py-2">Presencial</div>

						<!--Sede-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Sede</div>
						<div class="col-7 py-2">Santa Rosa</div>						

						<!--Pre-inscripción-->
						<!--<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Pre-inscripción</div>
						<div class="col-7 py-2"><a href="https://docs.google.com/forms/d/1YmXo44J1E16c-ElNYwzViZ43u2pRZlZaV7j3iZz-70Q/viewform?edit_requested=true">Ver</a></div>-->

						<!--Aranceles-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Aranceles</div>
						<div class="col-7 py-2"><a href="{{route('carreras.posgrado.aranceles.aranceles')}}">Ver</a></div>

						<!--Contacto-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Contacto</div>
						<div class="col-7 py-2"><a class="d-none d-sm-none d-md-block d-lg-block" href="mailto:maestriaestudiossyc@humanas.unlpam.edu.ar">maestriaestudiossyc@humanas.unlpam.edu.ar</a></div>
						
						<!--Acrededitación y reglamentos-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">       
							Acreditación CONEAU 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pOlSNBLApT7iDPdmWqClVUCMQ3xX-KN1/view?usp=share_link" target="_blank"> Descargar</a>
						</div>

						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reconocimiento Oficial 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1oCwWwnGeVJKTokkU1e26DSloff9CRvVC/view?usp=share_link" target="_blank"> Descargar</a>
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
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tn9qLKLTEwCUz7YD3s0EW8PiWWWCXmPP/view?usp=sharing" target="_blank"> Descargar</a>
						</div>-->
						<!-- Modificado 17/12/2024 <div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reglamento de carreras de Posgrados de la Facultad de Ciencias Humanas
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1YldY8euchsi2wA0MSYDHhZf8evPEsi2f/view?usp=drive_link" target="_blank"> Descargar</a>
						</div>-->
						
						<!-- Modificado 17/12/2024 -->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reglamento Interno 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tn9qLKLTEwCUz7YD3s0EW8PiWWWCXmPP/view?usp=sharing" target="_blank"> Descargar</a>
						</div>
						<!-- Modificado 17/12/2024 -->

						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
							Reglamento para la Defensa de Tesis de Posgrado
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16W8WmCcNYyxHG_7sCvGK41SFUZLQRFYO/view?usp=sharing" target="_blank"> Descargar</a>
						</div>						
						<!--Acrededitación y reglamentos-->

						<!--Plan de estudios-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">       
							Plan de estudios 
						</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1s8tupiTaN11VYuDFZ3qQHEpxM6cvANid/view?usp=share_link" target="_blank">Descargar</a>
						</div>

						
					</div>
				</div>
			</div>
			<!-- Duración -->
			<div class="tab-pane fade vh-100" id="duracion" role="tabpanel" aria-labelledby="v-pills-duracion-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Duración</b><br><br>
					La carga horaria total de la Maestría es de 744 horas. Se organiza bajo la modalidad presencial y tendrá una duración de dieciocho (18) meses de cursado más doce (12) meses de plazo para la presentación de la Tesis.
				</p>
			</div>
			<!-- Duración -->

			<!-- Alcances del Título -->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del título</b><br>
					<p class="text-dark">
						<b>A través de la formación de posgrado, se pretende desarrollar solvencia en la investigación y atender nuevos requerimientos sociales en los siguientes aspectos:</b>
					</p>
					<ol type="a">
						<li>Reconocimiento de la diversidad cultural que aparece en el espacio regional;</li>
						<li>Avance en la formación de los/as graduados/as para el mercado comunicacional local, atento a las manifestaciones múltiples de la cultura;</li>
						<li>Desarrollo de mejores competencias que requieren investigaciones específicas, reconocimientos de públicos y estudios focalizados;</li>
						<li>Profundización interdisciplinar de los conocimientos en el campo de los estudios sociales y culturales desde una perspectiva más amplia. </li>															
					</ol>

				</p>
			</div>
			<!-- Alcances del Título -->

			<!-- Perfil del Título -->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br>
					<b class="text-dark">
						<p class="text-dark">
							El campo de aplicación de la carrera es la promoción general del conocimiento en Ciencias Humanas y en Ciencias Sociales. La cualificación profesional de los/as graduados/as de la Maestría se centra en la adquisición y desarrollo de las siguientes competencias y saberes:
						</p>
						<ul>
							<li>Investigación y docencia especializada en el campo de los estudios sociales y culturales;</li>
							<li>Planificación y gestión de programas socioculturales;</li>
							<li>Planificación y gestión de comunicación social especializada.</li>
						</ul>	
					</b>
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