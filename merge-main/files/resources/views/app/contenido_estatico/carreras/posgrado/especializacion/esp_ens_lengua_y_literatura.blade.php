@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
                                    <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{route('carreras.posgrado.carreras-posgrado')}}">Carreras de Posgrado <i class='fa fa-angle-right'></i></a></span>
									<span class="b-active">Especialista en Enseñanza de la Lengua y Literatura</span>
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
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Presentación</a>
			<a class="nav-link" id="v-pills-duracion-tab" data-toggle="pill" href="#duracion" role="tab" aria-controls="v-pills-duracion" aria-selected="false">Aspectos Generales</a>
			<a class="nav-link" id="v-pills-requisitos-tab" data-toggle="pill" href="#requisitos" role="tab" aria-controls="v-pills-requisitos" aria-selected="false">Perfil y Alcances del Título</a>			
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Plan de estudios</a>
			<!--<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Inscripción</a>-->
			<a class="nav-link" id="v-pills-faq-tab" data-toggle="pill" href="#v-pills-faq" role="tab" aria-controls="v-pills-faq" aria-selected="false">Preguntas Frecuentes</a>
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
						<!-- Presentación -->
						<div class="col-12">
							
							<p class="text-dark text-justify">
								<b style="color: #26406C;">Presentación</b><br><br>
								La Especialización en Enseñanza de la lengua y la literatura responde a los requerimientos académicos de docentes que se desempeñan en tareas educativas o de animación cultural vinculadas con los procesos de lectura y de escritura, en ámbitos formales o no formales. También, se encuentra dirigida a profesionales que enseñan Lengua y Literatura en los niveles medio, superior y universitario.
								<br>
								El dictado se realizará en forma combinada, es decir, presencial, con transmisión vía videoconferencia y actividades en Aulas Virtuales.
							</p>
						</div>

						<!--<div class="col-12 d-flex justify-content-center">
							<img style="height: 450px; width: auto;" src="../../../slim/posgrado/flyer-especializacion.jpg" class="img-fluid" alt="Enseñanza de la Lengua y Literatura ">
						</div>-->
						<!-- Presentación -->
					</div>
				</div>
			</div>
			<!-- Aspectos Generales -->
			<div class="tab-pane fade" id="duracion" role="tabpanel" aria-labelledby="v-pills-duracion-tab">
				<div class="container">
					<div class="row">
										<!--Título-->
										<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Título</div>
										<div class="col-7 py-2">Especialista en Enseñanza de la Lengua y Literatura</div>
									
										<!--Directora-->
										<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Directora</div>
										<div class="col-7 py-2">Dra. Diana Moro</div>

										<!--Cordinadora-->
										<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Coordinadora</div>
										<div class="col-7 py-2">Dra. Nora Forte</div>										

										<!--Consejo Acdémico-->
										<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Consejo Académico</div>
										<div class="col-7 py-2">Dra. Silvia Spínelli, Dra. María Carolina Domínguez, Dra. Graciela Salto</div>

										<!--Nivel-->
										<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Nivel</div>
										<div class="col-7 py-2">Posgrado</div>
										
										<!--Modalidad-->
										<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Modalidad</div>
										<div class="col-7 py-2">Presencial</div>	

										<!--Sede-->
										<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Sede</div>
										<div class="col-7 py-2">Santa Rosa</div>	
										
										<!--Aranceles-->
										<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Aranceles</div>
										<div class="col-7 py-2"><a href="{{route('carreras.posgrado.aranceles.aranceles')}}">Ver</a></div>

										<!--Contacto-->
										<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Contacto</div>
										<div class="col-7 py-2">
											<a class="d-none d-sm-none d-md-block d-lg-block" href="mailto:esp.ens.lenguayliteratura@humanas.unlpam.edu.ar">esp.ens.lenguayliteratura@humanas.unlpam.edu.ar</a>
										</div>
										
										<!--Acrededitación y reglamentos-->
										<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
											Reconocimiento Oficial 
										</div>
										<div class="col-7 py-2">
											<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13f9n39nqKh21XDoNW7EkqjvfPwMnECni/view?usp=sharing" target="_blank"> Descargar</a>
										</div>

										<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">
											Validez nacional del Título
										</div>
										<div class="col-7 py-2">
											<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1f2Bf50VeG9xY34PWnkOVgSV0BYK698ai/view?usp=drive_link" target="_blank"> Descargar</a>
										</div>
										<!-- Modificado 09-12-2024
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
					</div>
				</div>
			</div>
			<!-- Aspectos Generales -->

			<!-- Perfil y Alcances -->
			<div class="tab-pane fade" id="requisitos" role="tabpanel" aria-labelledby="v-pills-requisitos-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil y Alcances del Título</b><br><br>
					<b style="color: #26406C;">Perfil: </b>
					El/La graduado/a de la Especialización tendrá capacidad para: desarrollar propuestas didácticas que contribuyan al mejoramiento de la enseñanza de la lectura y de la escritura; diseñar y ejecutar acciones destinadas a la formación lingüística y literaria; promover, orientar y desarrollar proyectos educativos vinculados con la lectura y la escritura, desde una perspectiva interdisciplinaria; elaborar material didáctico para la circulación escolar, académica o para la actualización docente en los niveles secundario, universitario y superior no universitario o de quienes se desempeñen en ámbitos formales o informales de educación de adultos, vinculado con los conocimientos lingüísticos, con la Literatura en sus diferentes manifestaciones genéricas y con los procesos culturales, sociales e históricos que se manifiestan a través de las prácticas del lenguaje.
					<br><br>
					<b style="color: #26406C;">Alcances del Título: </b>
					Dado que se trata de una carrera de posgrado, el título no tiene alcances profesionales más allá de los que ya posee el título de grado del/la estudiante que complete este trayecto formativo. Su propósito es potenciar las capacidades para el ejercicio de la docencia para el cual ha sido habilitado/a por el título de grado, desarrollar la reflexión sobre la propia práctica y las tareas relacionadas con el asesoramiento, la enseñanza, la evaluación, la dirección y supervisión de actividades docentes, así como para proyectar y llevar a cabo tareas de investigación en el campo específico de la lengua y la literatura. En consecuencia, el/la graduado/a en la carrera de Especialización en Enseñanza de la Lengua y la Literatura estará capacitado/a para desempeñarse en tareas de enseñanza, dirección y supervisión en diversas instituciones, en el nivel que lo habilite su título de grado, como así también en acciones de planificación, programación, implementación y evaluación en el área de la lectura y la escritura, la Lingüística y la Literatura.
				</p>
			</div>
			<!-- Perfil y Alcances -->
			
			<!-- Plan de estudios -->
			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
			<div class="container pb-4">
							<div class="row">
								<div class="col-12">
									<p>
										<b class="text-dark font-weight-bold" style="color: #26406C !important;">Plan de Estudios: </b><a href="https://drive.google.com/file/d/1-9e8N7m4Hcq2uLZWeFRiqEjK0Fqx_eDv/preview" target="_blank">Resolución 519-CS-22</a>
									</p>
								</div>
								<div class="col-12 d-flex justify-content-center">
									<!-- Modal -->
									<div class="modal fade" id="profcsed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content" style="width: 100%;">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times; Cerrar</span>
											</button>
										</div>
										<div class="modal-body">
											<img style="width:720px" src="../../../slim/posgrado/esp_en_ens_lengua_y_literatura.png" alt="Plan de estudios" class="img-fluid">
										</div>
										</div>
									</div>
									</div>                  
									<!--Botón-->
									<a data-toggle="modal" data-target="#profcsed">
										<img style="width:400px" src="../../../slim/posgrado/esp_en_ens_lengua_y_literatura.png" alt="Plan de estudios" class="img-fluid">
                                    </a>
									<!--Botón-->
									<!-- Modal -->

								</div>								
								<!--<div class="col-6 d-flex justify-content-center">
									<iframe src="https://drive.google.com/file/d/1-9e8N7m4Hcq2uLZWeFRiqEjK0Fqx_eDv/preview" width="640" height="480" allow="autoplay"></iframe>
								</div>-->
							</div>
						</div>
			</div>
			<!-- Plan de estudios -->

			<!-- Inscripción -->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
						<div class="container pb-4">
							<div class="row">
								<!--Importante-->
								<div style="background-color: #26406C;" class="rounded text-white col-12 border border-bottom-0 border-left-0 border-right-0 border-top-0 border-secondary mb-2 py-2 text-justify">       
									El inicio de la carrera en 2024 está supeditado a que se alcance el número mínimo de 35 personas matriculadas que cumplan con el proceso de inscripción.
									<br>
									El periodo de inscripción se extiende hasta el 23 de febrero de 2024
								</div>								
								<div class="col-12">
									<b style="color: #26406C;">Inscripción</b><br><br>
								</div>
								<div class="col-12 vh-100">
									La inscripción se realiza mediante el siguiente enlace: <a href="https://forms.gle/vqPynKih1AwgPHT97" target="_blank">Formulario de Inscripción</a>
								</div>
							</div>
						</div>		
			</div>
			<!-- Inscripción -->

			<!-- Preguntas frecuentes -->
			<div class="tab-pane fade" id="v-pills-faq" role="tabpanel" aria-labelledby="v-pills-faq-tab">
			<div class="container pb-4">
							<div class="row">
								<div class="col-12">
									<b style="color: #26406C;">Preguntas Frecuentes</b><br><br>
								</div>
								<div class="col-12">
								<!-- collapse preguntas -->
									<div class="accordion" id="accordionExample">
										<div class="">
											<div class="card-header collapsed" style="background-color: #f8f9fa" id="headingOne">
											<h2 class="mb-0">
												<button class="btn btn-link btn-block text-left text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													¿Quiénes se pueden inscribir?
												</button>
											</h2>
											</div>
											<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
											<div class="card-body">
												Graduados/as en Letras o títulos equivalentes o quienes posean otros títulos habilitantes de cuatro años o 2600 horas de duración, que se desempeñen en espacios del área de Lengua y Literatura en los niveles secundario y superior.
											</div>
											</div>
										</div>
										<div class="">
											<div class="card-header" style="background-color: #f8f9fa" id="headingTwo">
											<h2 class="mb-0">
												<button class="btn btn-link btn-block text-left text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													Para la inscripción ¿Qué significa presentar antecedentes docentes? 
												</button>
											</h2>
											</div>
											<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
											<div class="card-body">
												Se debe solicitar certificación de servicios en una de las instituciones en que ejerce la docencia (nivel secundario o nivel superior). Subir el archivo en formato PDF, en el sitio requerido en el formulario en línea. 
											</div>
											</div>
										</div>
										<div class="">
											<div class="card-header" style="background-color: #f8f9fa" id="headingThree">
											<h2 class="mb-0">
												<button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													¿Qué tamaño debe tener la foto para que sea aceptada en el formulario en línea?
												</button>
											</h2>
											</div>
											<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
											<div class="card-body">
												La imagen debe tener una resolución mínima de 640x480 px y no debe exceder el tamaño máximo de 8 MB.
											</div>
											</div>
										</div>
										<div class="">
											<div class="card-header" style="background-color: #f8f9fa" id="heading4">
											<h2 class="mb-0">
												<button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
													¿Cómo será la cursada? 
												</button>
											</h2>
											</div>
											<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
											<div class="card-body">
												La carrera se dicta de manera presencial en la sede Santa Rosa de la Facultad de Ciencias Humanas, excepto dos seminarios que se dictarán a distancia (los docentes no estarán en la sede de la Facultad).<br><br>
												Las clases serán transmitidas vía zoom institucional, por lo tanto, quienes no residen en Santa Rosa podrán cursar de manera remota, sin necesidad de trasladarse. <br><br>
												Quienes cursen de manera remota deberán estar presentes a través de la videoconferencia, la totalidad de las horas de cursada, con cámara encendida. <br><br>
												Se prevé el dictado de tres (3) seminarios por cuatrimestre. Cada uno se extenderá por 4 semanas y el horario de cursada será de 18:00 a 21:00. <br><br>
											</div>
											</div>
										</div>
										<div class="">
											<div class="card-header" style="background-color: #f8f9fa" id="heading5">
											<h2 class="mb-0">
												<button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
													¿Cuándo me notifican que se abre o no la carrera o si mi inscripción ha sido aceptada?
												</button>
											</h2>
											</div>
											<div id="collapse5" class="collapse" aria-labelledby="f8f9fa" data-parent="#accordionExample">
											<div class="card-body">
												Como el periodo de inscripción se extendió hasta el 23 de febrero de 2024, la Secretaría de Investigación y Posgrado, a partir de la última semana de febrero- primera de marzo, enviará una notificación a cada una de las personas inscriptas para comunicar si la inscripción ha sido aceptada y si, en efecto, se comienza con el cursado en el mes de marzo de 2024. Es importante aclarar que la carrera se dictará si cuenta con un cupo mínimo de inscriptxs. De no abrirse cohorte o de extenderse el plazo de inscripción y por lo tanto, iniciar más adelante, se informará a quienes se inscribieron.
												<!--A partir del 15 de febrero la Secretaría de Investigación y Posgrado enviará una notificación a cada una de las personas inscriptas para comunicar si la inscripción ha sido aceptada y si, en efecto, se comienza con el cursado en el mes de marzo de 2024. Es importante aclarar que la carrera se dictará si cuenta con un cupo mínimo de inscriptxs. De no abrirse cohorte o de extenderse el plazo de inscripción y por lo tanto, iniciar más adelante, se informará a quienes se inscribieron.-->
											</div>
											</div>
										</div>
										<div class="">
											<div class="card-header" style="background-color: #f8f9fa" id="heading6">
											<h2 class="mb-0">
												<button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
													¿Cuándo se establecen los aranceles? Formas de pago, facilidades y actualizaciones previstas
												</button>
											</h2>
											</div>
											<div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
											<div class="card-body">
												Esta carrera de posgrado es arancelada. Se abona una matrícula de inscripción y cada seminario tiene un costo. Los aranceles para 2024 se fijarán en el mes de febrero y se reactualizan cada seis meses.   A modo de ejemplo, en 2023 la matrícula de una maestría tiene un valor de 27 mil pesos que se abona en hasta dos cuotas y los seminarios un costo de 13.500 c/u.
											</div>
											</div>
										</div>
										<div class="">
											<div class="card-header" style="background-color: #f8f9fa" id="heading7">
											<h2 class="mb-0">
												<button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
													Si tengo consultas sobre esta carrera, ¿con quiénes me contacto?
												</button>
											</h2>
											</div>
											<div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
											<div class="card-body">
												Para consultas, sugerimos escribir a: <a href="mailto:posgrado@humanas.unlpam.edu.ar">posgrado@humanas.unlpam.edu.ar</a> o bien, al correo institucional de la carrera: <a href="mailto:esp.ens.lenguayliteratura@humanas.unlpam.edu.ar">esp.ens.lenguayliteratura@humanas.unlpam.edu.ar</a>
											</div>
											</div>
										</div>																														
									</div>								
								<!-- collapse preguntas -->
								</div>
								<!--
								<p class="vh-100">
									<b style="color:#26406C">¿Quiénes se pueden inscribir?</b><br>
									Graduados/as en Letras o títulos equivalentes o quienes posean otros títulos habilitantes de cuatro años o 2600 horas de duración, que se desempeñen en espacios del área de Lengua y Literatura en los niveles secundario y superior. 
									<br><br>
									<b style="color:#26406C">Para la inscripción ¿Qué significa presentar antecedentes docentes?</b><br>
									Se debe solicitar certificación de servicios en una de las instituciones en que ejerce la docencia (nivel secundario o nivel superior). Subir el archivo en formato PDF, en el sitio requerido en el formulario en línea. 
									<br><br>									
									<b style="color:#26406C">¿Qué tamaño debe tener la foto para que sea aceptada en el formulario en línea?</b><br>
									La imagen debe tener una resolución mínima de 640x480 px y no debe exceder el tamaño máximo de 8 MB.
									<br><br>									
									<b style="color:#26406C">¿Cómo será la cursada?</b><br>
									La carrera se dicta de manera presencial en la sede Santa Rosa de la Facultad de Ciencias Humanas, excepto dos seminarios que se dictarán a distancia (los docentes no estarán en la sede de la Facultad).
									Las clases serán transmitidas vía zoom institucional, por lo tanto, quienes no residen en Santa Rosa podrán cursar de manera remota, sin necesidad de trasladarse. 
									Quienes cursen de manera remota deberán estar presentes a través de la videoconferencia, la totalidad de las horas de cursada, con cámara encendida. 
									Se prevé el dictado de tres (3) seminarios por cuatrimestre. Cada uno se extenderá por 4 semanas y el horario de cursada será de 18:00 a 21:00.
									<br><br>									
									<b style="color:#26406C">¿Cuándo me notifican que se abre o no la carrera o si mi inscripción ha sido aceptada?</b><br>
									A partir del 15 de febrero la Secretaría de Investigación y Posgrado enviará una notificación a cada una de las personas inscriptas para comunicar si la inscripción ha sido aceptada y si, en efecto, se comienza con el cursado en el mes de marzo de 2024. Es importante aclarar que la carrera se dictará si cuenta con un cupo mínimo de inscriptxs. De no abrirse cohorte o de extenderse el plazo de inscripción y por lo tanto, iniciar más adelante, se informará a quienes se inscribieron.
									<br><br>									
									<b style="color:#26406C">¿Cuándo se establecen los aranceles?</b><br>
									Formas de pago, facilidades y actualizaciones previstas
									<br><br>
								</p>-->
							</div>
						</div>
			</div>
			<!-- Preguntas frecuentes -->			
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