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
                            <span class="b-active">Licenciatura en Ciencias de la Educación</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Licenciatura en Ciencias de la Educación</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Licenciatura en Ciencias de la Educación</a>
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
							<img style="height: 700px" src="../slim/planes-estudio-images/lic_cs_educacion.png" class="img-fluid p-1" alt="Licenciatura en Ciencias de la Educación">
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
							Licenciado/a en Ciencias de la Educación
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
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2010_14_EIDDqkf.pdf" target="_blank">Descargar</a>
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br><br>
					La/el graduada/o de la Licenciatura en Ciencias de La Educación plantea una formación con:
					<ul>
						<li>Conocimientos actualizados de las disciplinas sociales, históricas, psicológicas, pedagógicas, didácticas y técnicas indispensables como base para desarrollar su labor profesional; con compromiso social y capacidad científica para la indagación de problemas y resolución de situaciones;</li>
						<li>Capacidad para participar en equipos multi e interdisciplinarios;</li>
						<li>Formación para desarrollar distintos tipos de investigaciones educativas en forma individual y en equipo;</li>
						<li>Capacidad de planificar, conducir, evaluar y asesorar programas, planes y proyectos educacionales, en el ámbito de las políticas educativas, institucionales y comunitarias;</li>
						<li>Formación profesional para el desempeño de roles de asesoramiento y especialista en los distintos ámbitos donde la educación y la formación se desarrollan;</li>
					</ul>
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Título</b><br><br>
					La/el Licenciada/o en Ciencias de la Educación puede desempeñarse en organismos, establecimientos y entidades educativas, así como en todo tipo de institución que realice actividades vinculadas con la educación en distintos ámbitos, en los campos de la educación escolar, la animación sociocultural, la alfabetización, la formación de adultos, la formación profesional, la formación docente, la capacitación laboral dentro del ámbito público o privado, en sus diferentes niveles y modalidades (presenciales o a distancia), y en modalidades de ejercicio liberal de la profesión, estando habilitado para:
					<ul>
						<li>Elaborar y evaluar modelos y propuestas curriculares;</li>
						<li>Brindar asesoramiento pedagógico a instituciones educativas de distintos Niveles y a otras instituciones comunitarias;</li>
						<li>Diseñar, dirigir y ejecutar proyectos de investigación educativa;</li>
						<li>Dirigir instituciones educativas y servicios educativos y pedagógicos;</li>
						<li>Planificar, conducir y evaluar programas de formación, perfeccionamiento y actualización de recursos humanos;</li>
						<li>Diseñar, dirigir, ejecutar y evaluar planes, programas y proyectos educativos, culturales y socio-comunitarios;</li>
						<li>Diseñar, producir y evaluar materiales educativos con distinta complejidad tecnológica;</li>
						<li>Asesorar en la formulación de políticas educativas y culturales;</li>
						<li>Asesorar en la formulación de criterios y normas destinadas a promover la dimensión educativa de los medios de comunicación social.</li>
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
							<div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RiYcY4aasb_azG9WF23D6p59dFbLo1n4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rEOZbJSdFFVqLJAO8ZZOh81rbZ-eo1I3/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Sociología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1y3gmDT2TWJWp_8xBecA7WeQ-3L12rzfS/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1t8P2wSB9UtiDeyk9ZxFf4bIHB1kzdMLc/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							<div class="col-6 py-2">Fundamentos Biológicos del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1gcfkqlVpajRbjN0BqDHR-lU138ZDkhlc/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Práctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12RmIhdnf8Pxyumj6T1Tpg1f5WPecpeUi/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							<div class="col-6 py-2">Psicología I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sWuplYiBlQDg04aPDogRNDshChIAfZGc/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
							
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
							<div class="col-6 py-2">Historia General de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11y6fZALa2vYYZS5BBYjxt4FffxiJUqRL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Psicología del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1G_QGbd3s22b2_QSvqbmj2HKln_B9cuoC/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							<div class="col-6 py-2">Psicología II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12_DX93cgxzrBwc8FqXwxCNZzgaAa4Qu-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Didáctica I - Teorías de la Enseñanza</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MehIxcpPH8u9wnVP1OcfggJmG9o2HlBb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Historia de la Educación Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1G3xVq2GknscjabS4QC7ELiZozkUj4dTp/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							<div class="col-6 py-2">Organización y Administración Educacional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CNBKKVGhGBVDvFlQVC8LYyAMjbzY51vk/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Práctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11FMalxCJzSt068DzwUMkELEI3u99PczN/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
							<div class="col-6 py-2">Didáctica II - Teorías del Currículo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1oAbHK5m6uE9b1VYtDW9-KrwgzHnmoZIq/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Epistemología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sV46CdkQglsfqg8QYbkqRFltUjss71Ji/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Política Educacional y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bx9bsl3MIh8gM5Hnv81npKXtFfgPEErR/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
							<div class="col-6 py-2">Sociología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1l6yLw7TM7EBV-SlOfjoCuIEEkMmZhtnB/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Didáctica de Nivel Inicial y del Nivel Primario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18OicVyzq6yBkIFomh6SwjhLzTCgttg-E/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Filosofía de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1C90dLdjeI4vurolwAh-LqSsLDaHoK5fK/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Psicología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14jZ3YLdrgncw1AWnPlwwrls_sNpKAiWu/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
							<div class="col-6 py-2">Educación Especial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sTl9Fy5j1pRf6SAfa_SfeJVH3aUxfDpi/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Didáctica del Nivel Secundario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IGIMg43OhrkySBukFTbUm-VD-QYZqsei/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							<div class="col-6 py-2">Metodología de la Investigación Socio Educativa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xmPn7L9AQWD-n9jzuQ2y9mGJ-ji_DcFB/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Didáctica del Nivel Superior</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1QdSBfoQAAoI0_y2EcQHZVvQw5lV6P2Xc/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Metodología de la Investigación Socio Educativa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CElq1UQE5_8IJGdHjFZsxRAldH1rqolE/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Práctica III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1gelvcW44X47OhkeAYnqrBi29NAgmVf-j/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							
							<!-- Almacenamiento local -->
							<div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://www.humanas.unlpam.edu.ar/storage/public/asignaturas/licenciatura_en_cs_de_la_educacion/2025/11112025/Tecnologia_Educativa_2025.pdf" target="_blank">Descargar Programa</a></div>
							
							
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>

							<!-- 2025 -->
							<div class="col-6 py-2">Actividad Curricular Opcional I y II: Del Algoritmo al Aula: Tecnologías emergentes y Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1mlz5hxxFthh0cvLMSGQQ7eqeV4E06KSD/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Actividad Curricular Opcional I y II: Problemáticas filosóficas contemporáneas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZqLPoMaBkWgWJWpkTlZxgWXMkI3edF0y/view?usp=drive_link" target="_blank">Descargar Programa</a></div>


							<div class="col-6 py-2">Seminario de Análisis Institucional </div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EGj_oj0wAfFM3NuNbl6q9_ED6n6-My9D/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Taller de Elaboración de Trabajo Final</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1PPmOTiQtwSTL7cx7Qs7dV4fh35MpbJDA/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Teorías Educativas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1G9Y4QGoZSqXRM7ZME643LDumHzYmE5Lq/view?usp=sharing" target="_blank">Descargar Programa</a></div>

							<!-- octubre 2023 -->
							<div class="col-6 py-2">Actividad Curricular Opcional I y II: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1c_TbRZ8rqnKTKjhaBeU5aeaKmYTEtY0U/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Actividad Curricular Opcional I y II: Educación en contextos de encierro</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1g1IP8Tr_X5IamDRSzMi-X3ngrdXGZ337/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

							<!-- octubre 2024 -->
							<div class="col-6 py-2">Actividad Curricular Opcional I y II Extensión Universitaria trayectorias y desafíos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1cn6LnbNjUqzAz1HWxyHKiZktvCVp_ajR/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Actividad Curricular Opcional I y II Educación de Jóvenes y Adultas/os</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1z0mDAG4idTm9gcGCKRG5UQ9Uq450POqm/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

							<!--<div class="col-6 py-2">Actividad Curricular Opcional I: Asesoramiento Pedagógico y Análisis Institucional en la Escuela Secundaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1X_OfrTvVD1Ey_aS6xl9jUGtfL0ae9Rrx/view?usp=share_link" target="_blank">Descargar Programa</a></div>-->
							<!--<div class="col-6 py-2">Actividad Curricular Opcional I: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1B5e1o5INKEWe0uDO2KFIPBBx-VBsQ-9t/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
							<!--<div class="col-6 py-2">Actividad Curricular Opcional I La Educación a Distancia en la Universidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Ze9HzM6D8Fq7TSg-wF8E8HvQsk7fpkUM/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
							<!--<div class="col-6 py-2">Actividad Curricular Opcional II: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18ct-svfd_6PsgC6ffVJ_WQXpuykshLyN/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
							<div class="col-6 py-2">Actividad Curricular Opcional II: La Educación a Distancia en la Universidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1cZ0QheZIdaC1H1fGJk85xpH3Bu6mPk3M/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<!--<div class="col-6 py-2">Actividad Curricular Opcional I: Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1d-HT0lc5wX1eeBJ5d2uayzF46-KxjSqF/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
							<!--<div class="col-6 py-2">Actividad Curricular Opcional II: Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SKf4z9B36x8Qzun4yvGkSE3t7vxliQ9x/view?usp=sharing#" target="_blank">Descargar Programa</a></div>-->
							<!--<div class="col-6 py-2">Actividad Curricular Opcional I: Saberes y Practicas Vinculadas al Campo Profesional del Cientista de la Educacion</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Hp7VYlkMmH6z_7O3i_V7xTGEb8ip1nCl/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
							<div class="col-6 py-2">Actividad Curricular Opcional II: Saberes y Practicas Vinculadas al Campo Profesional del Cientista de la Educacion</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10hw5JMmkq2ajwZvf9CR9ArjcmS_d6A2P/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Actividad Curricular Opcional II: Debates en la Filosofía Política Contemporánea</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12bEqbTEYsjEibu_XZgGY64U2Q5Q5Ki8j/view?usp=share_link" target="_blank">Descargar Programa</a></div>
							
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
							<div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Sh_E5M2XJ67_7r0CtAe5tQ2csQRVtjvA/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1V35Z3sginspFhgbSQGGjZZfNzPsY_fcw/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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