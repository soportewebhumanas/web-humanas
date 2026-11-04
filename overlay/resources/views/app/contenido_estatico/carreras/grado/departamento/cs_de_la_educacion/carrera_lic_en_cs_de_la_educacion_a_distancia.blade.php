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
                            <span class="b-active">Licenciatura en Ciencias de la Educación a Distancia</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Licenciatura en Ciencias de la Educación a Distancia</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Licenciatura en Ciencias de la Educación a Distancia</a>
			<a class="nav-link" id="v-pills-info-tab" data-toggle="pill" href="#v-pills-info" role="tab" aria-controls="v-pills-info" aria-selected="true">Información General</a>			
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Perfil</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Alcances del Título</a>
            <a class="nav-link" id="v-pills-asignaturas-tab" data-toggle="pill" href="#v-pills-asignaturas" role="tab" aria-controls="v-pills-asignaturas" aria-selected="false">Programa de Asignaturas</a>
			<a class="nav-link" id="v-pills-asignaturas-tab" data-toggle="pill" href="#v-pills-relevante" role="tab" aria-controls="v-pills-relevante" aria-selected="false">Información Relevante</a>
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
							Licenciado/a en Ciencias de la Educación a Distancia
                        </div>
						
						<!--Nivel-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Nivel</div>
						<div class="col-7 py-2">
							Grado
                        </div>

						<!--Modalidad-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Modalidad</div>
						<div class="col-7 py-2">
							a Distancia<br>
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
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2017_262.pdf" target="_blank">Descargar</a>                            
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br><br>
					La/el graduada/o de la Licenciatura en Ciencias de La Educación a Distancia plantea una formación con:
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
						<div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1iqsWLmsRUaqdTv20jKNxjb6IdU_rt65p/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SU0ZQDy9-1bYlBFpJZqgP34hqfJix_-E/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Sociología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MCpagnYO9E1YwpXvVsvOdqHH_o-M_USv/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LpZBCTZYzN4YV2CkyB9JjZvJloZeHF-Q/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Fundamentos Biológicos del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1AOzogCx3iiRCrdxH4DApX2njniZPUF4u/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Práctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19UkqFTOaboWCknUSyPdBcuHOE7QLtP85/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Psicología I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12xVg7SQq5XIVXZp-hiwliYDx1QmSoBw_/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
						<div class="col-6 py-2">Historia General de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1o2ambJ8Z9iikEge60n2WKNpf_gVFANOb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Psicología del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1St5-HxaRHeLN746PlhamHzS8-v3gpbMZ/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Psicología II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Oh7ve2ZZRuwlFKW9XbH7_5extRqYdQT0/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Didáctica I - Teorías de la Enseñanza</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Msq23DxvhxLBIXF0t8GN6hopcE9tXgoY/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia de la Educación Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1H9q7GWa1bP_bgLFYPNzFf6jtrvNz-cHu/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Organización y Administración Educacional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1yJWf4iqKVHYL6bMzSO9cylrNb0gbvaV2/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Práctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ywEkaquhPuzq4g6ozqE2NzWvxfxtSzmw/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
						<div class="col-6 py-2">Didáctica II - Teorías del Currículo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tVAMNRfvNtbNGORNDEU8ETO7SPtiPToo/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Epistemología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1e3KU9K3QtobBc6fdGwWtgmE4q8CFI7Zc/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Política Educacional y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SUf0TpVg3M-lDhSUSnPaiSZgv-maCBkk/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
						<div class="col-6 py-2">Sociología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1c4GTVpB22pkgpEeZ08y3qDxseYmwxc7P/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Didáctica de Nivel Inicial y del Nivel Primario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UthOJ-QhFE3AvlQtsvURf7SJ3m-ino2x/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Filosofía de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DsxNh5xS59uJ-DkYXVZ9YSCgLx-6pSlF/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Psicología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1AZQacL3OwsdTcD4ALw6y7F0qq8WbXJb-/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
						<div class="col-6 py-2">Educación Especial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JxLRUucrZSFdOIytDX-zWU7PdCOrxJpH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Didáctica del Nivel Secundario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RzY9nmFidPQA2SvgDPSgLJGDlx6azp-6/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Metodología de la Investigación Socio Educativa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1c83t6rJuHuAycIkDQ6kPFBYLFun0PRhe/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Didáctica del Nivel Superior</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1V7XH46D56RlpZsJ5DEOd2JrKmRlZx8hv/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Metodología de la Investigación Socio Educativa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tfGQ6-49pRkiPt3x5nndpy_preP-TAd8/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Práctica III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zxkAuruqq7zkpEzXMCC0aTTvqNkHwv3p/view?usp=sharing" target="_blank">Descargar Programa</a></div>

						<!-- Almacenamiento local -->
						<div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://www.humanas.unlpam.edu.ar/storage/public/asignaturas/licenciatura_en_cs_de_la_educacion_a_distancia/2025/11112025/Tecnologia_Educativa_2025.pdf" target="_blank">Descargar Programa</a></div>

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>

						<!-- 2025 -->
						<div class="col-6 py-2">Actividad Curricular Opcional I y II: Del Algoritmo al Aula: Tecnologías emergentes y Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1n-FA7dMZU6vAXUXOV6yYukdZxoTZhzDA/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional I y II: Problemáticas filosóficas contemporáneas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ymrZOGLFq-QdpreTEsHeyf1qIuXBsV5k/view?usp=drive_link" target="_blank">Descargar Programa</a></div>						



						<div class="col-6 py-2">Seminario de Análisis Institucional </div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/15ITLhUh-thHDcuTqJwM90RpkCFPDSRzH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller de Elaboración de Trabajo Final</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1se0MH8WTnT9JSU3gsDNBSOBpkKDtq0Z6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Teorías Educativas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14a6gveqzgy871Nbc6lWympOpSL6YaUcC/view?usp=sharing" target="_blank">Descargar Programa</a></div>

						<!-- octubre 2023 -->
						<div class="col-6 py-2">Actividad Curricular Opcional I y II: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ssfhw713o-KmYxb6PLXLkzCNhg7fy2Ep/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional I y II: Educación en contextos de encierro</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1uIMdrXPddNJUymDv72cacP8qsUEQXdxS/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

						
						<!-- octubre 2024 -->
						<div class="col-6 py-2">Actividad Curricular Opcional I y II Extensión Universitaria trayectorias y desafíos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1S-8Hw100lHD6-3gV0H9TbBWTRw92DGTc/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

						<!--<div class="col-6 py-2">Actividad Curricular Opcional I: Asesoramiento Pedagógico y Análisis Institucional en la Escuela Secundaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1D1pFPQuEkklAsYLgZFaZJdz2Ub4FqlO-/view?usp=share_link" target="_blank">Descargar Programa</a></div>-->
						<!--<div class="col-6 py-2">Actividad Curricular Opcional I: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13oZ5kdV6zLnYSz8V6qig7yu7fFe_8N8F/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						<div class="col-6 py-2">Actividad Curricular Opcional I La Educación a Distancia en la Universidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11ENZhGIYEMdOyzwQe1-OV1SGU8DVwm7k/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<!--<div class="col-6 py-2">Actividad Curricular Opcional II: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1N2I5cUZA4ayRO28N8UOXtoAHB6GD_ABS/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						<!--<div class="col-6 py-2">Actividad Curricular Opcional II: La Educación a Distancia en la Universidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LjEv2oLFoaRhrlwJa1xb_L3m2w0SJR0o/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						<!--<div class="col-6 py-2">Actividad Curricular Opcional I: Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ECRHqptGw8RkLqNvq0hsBatdv1vk4EYB/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						<!--<div class="col-6 py-2">Actividad Curricular Opcional II: Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1O7VkfjyqFi9lKfy17naPMPR29Lr_17gW/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						<div class="col-6 py-2">Actividad Curricular Opcional I: Saberes y Practicas Vinculadas al Campo Profesional del Cientista de la Educacion</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18nB_0_H0VaodjzIP0kYXVJnvBDMRTkYO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional II: Saberes y Practicas Vinculadas al Campo Profesional del Cientista de la Educacion</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Zt0tCmkrRX7C9tuaHLc3RiYzqD4eulgP/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional II: Debates en la Filosofía Política Contemporánea</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-uVeQaTterlAybGys6rjkK60mRpNAhHS/view?usp=share_link" target="_blank">Descargar Programa</a></div>    
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
						<div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qTF9kHuKRn1G1h_MW7dclsw19-thn7UA/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1j5t8OGLHt0IeyqQkBkmdOiRh5XxgRzz9/view?usp=sharing" target="_blank">Descargar Programa</a></div>
					</div>   
					</div>
                    <!--Programa de Asignaturas-->
				</p>				
			</div>
            <!--Tab Programa de Asignaturas-->            

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-relevante" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Información Relevante</b><br><br>
					La modalidad combina el aprendizaje virtual con encuentros presenciales que se llevan a cabo tres veces por cuatrimestre, exclusivamente los días sábado, de 7:30 a 18:00 horas aproximadamente, en la Facultad de Ciencias Humanas, Sede General Pico.<br>
					<!--Por otro lado, los exámenes finales son presenciales y se realizan en la Sede General Pico, conforme a los 10 llamados establecidos por el Calendario Académico. Es importante destacar que estos exámenes se programan durante los días de semana.-->
				</p>				
			</div>
            <!--Tab Alcances-->			
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