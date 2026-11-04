@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
                            <span>
                                <a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a>
                            </span>
							<span><a href="{{route('carreras.grado.departamentos')}}">Departamentos <i class='fa fa-angle-right'></i></a></span>
							<span><a href="{{route('carreras.grado.departamento.ciencias-educacion')}}">Ciencias de La Educación <i class='fa fa-angle-right'></i></a></span>                             
							<span><a href="{{route('carreras.grado.departamento.carreras-de-grado')}}">Carreras de Grado <i class='fa fa-angle-right'></i></a></span>							
                            <span class="b-active">Profesorado en Ciencias de La Educación</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>

<!--Contenido-->
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
div ul li{
	font-weight: none !important;
}
</style>
<div class="container mb-4 my-2">
	<div class="row text-left mx-1 mb-2">
		<div class="col-12 py-2">
			<h3 style="color: #26406C;">Carreras de grado: Profesorado en Ciencias de La Educación</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profesorado en Ciencias de La Educación</a>
			<a class="nav-link" id="v-pills-info-tab" data-toggle="pill" href="#v-pills-info" role="tab" aria-controls="v-pills-info" aria-selected="true">Información General</a>			
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Perfil</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Alcances del Título</a>
            <a class="nav-link" id="v-pills-asignaturas-tab" data-toggle="pill" href="#v-pills-asignaturas" role="tab" aria-controls="v-pills-asignaturas" aria-selected="false">Programa de Asignaturas</a>
		</div>
		<!-- linea divisoria  en movil -->
		<div class="col-12 d-xl-none">
			<hr>
		</div>
		<!-- linea divisoria  en movil -->
		<div class="tab-content col-12 col-xl-8 col-lg-8 mb-5" id="v-pills-tabContent">

            <!--Tab Imagen-->
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<div class="container">
					<div class="row">
						<!--Imagen-->
						<div class="d-flex justify-content-center col-12 mx-1 py-2">
							<img style="height: 700px" src="../slim/planes-estudio-images/prof_cs_educacion.png" class="img-fluid p-1" alt="Profesorado en Ciencias de la Educación">
						</div>
					</div>
				</div>		
			</div>
			<!--Tab Imagen-->

            <!--Tab Información General-->
			<div class="tab-pane fade" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">
				<div class="container">
					<div class="row">

						<!--Título-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Título</div>
						<div class="col-7 py-2">
							Profesor/a en Ciencias de La Educación
                        </div>
						
						<!--Nivel-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Nivel</div>
						<div class="col-7 py-2">
							Grado
                        </div>

						<!--Modalidad-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Modalidad</div>
						<div class="col-7 py-2">
							Presencial
                        </div>

						<!--Duración-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Duración</div>
						<div class="col-7 py-2">
							5 años
                        </div>
                        
                        <!--Sede-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Sede</div>
						<div class="col-7 py-2">
                            General Pico
                        </div>

                        <!--Plan de Estudios-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Plan de estudios</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2010_13_o3BcYMw.pdf" target="_blank">Descargar</a>
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br><br>
					La/el graduado del Profesorado en Ciencias de la Educación plantea una formación con:
					<ul>
						<li>Conocimientos actualizados de las disciplinas sociales, históricas, psicológicas, pedagógicas, didácticas y técnicas indispensables como base para desarrollar su labor profesional, con compromiso social y capacidad científica para la indagación de problemas y resolución de situaciones;</li>
						<li>Capacidad para participar en equipos multi e interdisciplinarios;</li>
						<li>Formación para integrar equipos de investigaciones educativas;</li>
						<li>Capacidad para planificar, conducir, evaluar y asesorar programas, planes y proyectos educacionales, en el ámbito de las políticas educativas, institucionales y comunitarias;</li>
						<li>Formación profesional para el desempeño de roles de asesoramiento y especialista en los distintos ámbitos donde la educación y la formación se desarrollan;</li>
						<li>Conocimientos y capacidades para ejercer la docencia en los niveles Secundario y Superior del Sistema Educativo con una formación amplia y diversificada para ello.</li>
					</ul>
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Título</b><br><br>
					La/el Profesor/a en Ciencias de la Educación puede desempeñarse en organismos, establecimientos y entidades educativas, así como en todo tipo de Institución que realice actividades vinculadas con la educación en distintos ámbitos, en los campos de la educación escolar, la animación sociocultural, la alfabetización, la formación de adultos, la formación profesional, la formación docente, la capacitación laboral dentro del ámbito público o privado, en sus diferentes niveles y modalidades (presenciales o a distancia), y en modalidades de ejercicio liberal de la profesión, estando habilitado para:
					<ul>
						<li>Elaborar y evaluar modelos y propuestas curriculares;</li>
						<li>Planificar, conducir y evaluar procesos de enseñanza y de aprendizaje para la educación formal, no formal y a distancia;</li>
						<li>Brindar asesoramiento pedagógico a Instituciones Educativas de los distintos Niveles y a otras instituciones comunitarias;</li>
						<li>Participar en proyectos de investigación educativa;</li>
						<li>Dirigir Instituciones Educativas;</li>
						<li>Planificar, conducir y evaluar programas de formación, perfeccionamiento y actualización de recursos humanos.</li>
						<li>Diseñar, dirigir, ejecutar y evaluar planes, programas y proyectos educativos, culturales y socio-comunitarios</li>
						<li>Diseñar, producir y evaluar materiales educativos con distinta complejidad tecnológica;</li>
						<li>Asesorar en la formulación de políticas educativas y culturales;</li>
						<li>Asesorar en la formulación de criterios y normas destinadas a promover la dimensión educativa de los medios de comunicación social;</li>
						<li>Ejercer la docencia en disciplinas específicas del campo de las Ciencias de la Educación, en los niveles Secundario y Superior.</li>
					</ul>

				</p>				
			</div>
            <!--Tab Alcances-->

            <!--Tab Programa de Asignaturas-->
			<div class="tab-pane fade" id="v-pills-asignaturas" role="tabpanel" aria-labelledby="v-pills-asignaturas-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Programa de Asignaturas</b>
                    <!--Programa de Asignaturas-->
					<div class="container  mb-4" style="font-size: 0.9rem">
						<div class="row border border-dark mx-1">
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-0">Primer Año</div>
						<div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1iEE9xQeF0M3wd0jDgsww5QBEXF-t6w-j/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IGWP_C9XOGJOiTUwgW20WapPbRqWJCBp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Sociología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16mXxGxQbS9cpr85PImb2b6Xl1kE6pzJZ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18KJ7Nh9l7gws5TQUO2YU2OojMCJdHTnF/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Fundamentos Biológicos del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SFEvA6z6qH_y1yD4Z2HVeZoqfCHMK5s-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Práctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Dc4dLFOwKEtou8u8DWH0XgMb2X9ZJMtl/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Psicología I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18h_eAdAeZT93X8lCxHfHap9xnlPw7RIk/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
						<div class="col-6 py-2">Historia General de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZCMXdnP-VCAowHxrIWP1oJRSXuXZwLjX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Psicología del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1wXJyU-La1zDbeTLKJPjjMtV91kKQ-Wl6/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Psicología II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1BgiHJSAa6wPSorv6ZsuCIJ60VdDYnWwG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Didáctica I - Teorías de la Enseñanza</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1maCnzZ1AuzynxfFO9KLMurORH6ZjdFVU/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia de la Educación Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rLXEpJ7koj6Q2DcSVgI2ClMzgg-9S1uX/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Organización y Administración Educacional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1wJcB35NQV8AikvJ4S5jo28Li8MeMcFZp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Práctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1i-870uaFSEIJKxozSdTyHFNKVVS6RqpA/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
						<div class="col-6 py-2">Didáctica II - Teorías del Currículo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KCqE-nE1FfeCTNrzyIUm1LjT7cDyI8Su/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Epistemología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NOe4N2cmwO4jIPK2OO3FDUnEoKyGrRic/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Política Educacional y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1OJ9vIWELS0_8vGhQZ7pa9cXGc0dPB6Ku/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
						<div class="col-6 py-2">Sociología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1um-RAmRglYqDT1DN_oOvjlS7xXZVAo67/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Didáctica de Nivel Inicial y del Nivel Primario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14-F5c0-P_htTZ-QL3OpWCi7MWL6E2Tep/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Filosofía de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1khBo9nyw73yfBioxPu5Wn5Ol5ynirKZm/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Psicología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MaeloMecJfWsuA0NH810WtCRPHdePCD9/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
						<div class="col-6 py-2">Educación Especial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CEYv1oy52LB6DYeJ_WIW5pxF57PzCJM_/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Didáctica del Nivel Secundario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZxOJQhWjk1hv4uxc2LwMEJx3kt3vBAyj/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Metodología de la Investigación Socio Educativa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17PXqjbZmZ5HilygJNLIwn_H4nUszRvmn/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Didáctica del Nivel Superior</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1s6Rc_v219fgcfCLvHXi5C2aq4CJPKLmw/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Metodología de la Investigación Socio Educativa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KDMUdUFy3VpOikXEUrLw7Yd0GzzsqSxX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Práctica III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17cTVpisAriNL03g7xQLCChHWavLvMvLy/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						
						<!-- Almacenamiento local -->
						<div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://www.humanas.unlpam.edu.ar/storage/public/asignaturas/profesorado_en_cs_de_la_educacion/2025/11112025/Tecnologia_Educativa_2025.pdf" target="_blank">Descargar Programa</a></div>												

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>

						<!-- 2025 -->
						<div class="col-6 py-2">Actividad Curricular Opcional I y II: Del Algoritmo al Aula: Tecnologías emergentes y Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1n9kbRggbHarB9flXRsU7e1YnrxH2h-KJ/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						
						<div class="col-6 py-2">Teorías Educativas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1P_JqLK0pYreW2uP9lLDnC9gKRIkfodGH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Residencia en el Nivel de Educación Secundaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pVNzKTMondZ7W-6FBUxOdTZORmC1qlzk/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional I: Problemáticas filosóficas contemporáneas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1VvK9aYDlj5gzxV3jl0e29JZhU7CMUPOj/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

						<div class="col-6 py-2">Actividad Curricular Opcional I: Hacia una escuela secundaria inclusiva</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/15n0HkR61ZY-hTjOHMXUEBu9g_pGB-1F1/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						
						<div class="col-6 py-2">Residencia en el Nivel de Educación Superior</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dX2dOd3cGyBPGcxFIx7MzAVw4H6NRoUz/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						
						<!-- octubre 2023 -->
						<div class="col-6 py-2">Actividad Curricular Opcional I y II: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1v9G6lSmZ1OtqHTzIktchBnlVHbvcclNF/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						
							<!-- octubre 2024 -->
							<div class="col-6 py-2">Actividad Curricular Opcional I y II Extensión Universitaria trayectorias y desafíos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1AhYjB6cq2Db8iLvcDlfLBbTW_sRApZh5/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Actividad Curricular Opcional I y II Educación de Jóvenes y Adultas/os</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1g9nSnf91Fkch21MtaYt_Z6ekL8wPwBDI/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

						<!--
						<div class="col-6 py-2">Actividad Curricular Opcional I y II: Educación en contextos de encierro</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1L20-YFY_4wMti6N2Tw7uOd9s6jgMLNsF/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional I Educacion en Contextos de Ruralidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IXL_zGCBc8GkaK_oFTl1DEK_1wj462VC/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional I: Asesoramiento Pedagógico y Análisis Institucional en la Escuela Secundaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1TaZH3mNfrBT7tUhKuA0Zbx9gkZwHfm19/view?usp=share_link" target="_blank">Descargar Programa</a></div>
						-->
						<div class="col-6 py-2">Actividad Curricular Opcional II: La Educación a Distancia en la Universidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xhBxA0xTKQOtII04rfd0FiwDRWjkuI39/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional II: Debates en la Filosofía Política Contemporánea</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WbMyD89lp1vZ1yWJEJ1ZtagaWrOo3mkH/view?usp=share_link" target="_blank">Descargar Programa</a></div>    
						<!--<div class="col-6 py-2">Actividad Curricular Opcional I ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1youSsBqAhjrDHTkINuAi_YVFzUrHHcwI/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->    
						<!--<div class="col-6 py-2">Actividad Curricular Opcional I Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LPtQNJnTa0maWhxMDL0o-VNl6DKL5jwt/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						<!--<div class="col-6 py-2">Actividad Curricular Opcional I Saberes y Prácticas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1jzzP_g0KuyW8MnS1Jjna9jTW1ogHSCWe/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->    
						<!--<div class="col-6 py-2">Actividad Curricular Opcional II Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1GZzzfehp4Ab7tP8QVK4uhte0nau_GGbN/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						<!--<div class="col-6 py-2">Actividad Curricular Opcional II: Saberes y Practicas Vinculadas al Campo Profesional del Cientista de la Educacion</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1argMV0aytrAy6aIvbmmhe3umF4AOS4ux/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						<!--<div class="col-6 py-2">Actividad Curricular Opcional II: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16aeqDyUB8ks3hV7daKy_CU6wkygWyu8k/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->


						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
						<div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12aS3g11sA_jPfITKqpXoFHmtQSGxgQfL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19LrfhFb9HeF3rJWHO-UkLfkTgUVDuZd7/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						</div> 
					</div>
                    <!--Programa de Asignaturas-->
				</p>				
			</div>
            <!--Tab Programa de Asignaturas-->            

		</div>			
	</div><!--row-->
</div><!-- container -->
<!--Contenido-->

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