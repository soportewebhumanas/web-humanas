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
                            <span><a href="{{route('carreras.grado.departamento.historia')}}">Historia <i class='fa fa-angle-right'></i></a></span>
							<span><a href="{{route('carreras.grado.departamento.carreras-de-grado')}}">Carreras de Grado <i class='fa fa-angle-right'></i></a></span>							
                            <span class="b-active">Licenciatura en Historia</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Licenciatura en Historia</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Licenciatura en Historia</a>
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
						<img src="../slim/planes-estudio-images/lic_historia.png" style="height: 700px" class="img-fluid p-1" alt="Licenciatura en Historia">
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
							Licenciado/a en Historia
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
                            Santa Rosa
                        </div>

                        <!--Plan de Estudios-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Plan de estudios</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2011_194_PaTMyhx.pdf" target="_blank">Descargar</a>
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br>
					La/el graduado/a de la carrera de Licenciatura en Historia de la Facultad de Ciencias Humanas de la Universidad Nacional de La Pampa es un profesional cuyas competencias comprenden un conjunto de saberes sobre el campo disciplinar específico de la Historia en el contexto de las Ciencias Sociales. Las competencias específicas son:
					<ul>
						<li>El conocimiento de los enfoques teóricos fundamentales de la Historia y las Ciencias Sociales y de sus conceptos, métodos y campos diferenciados</li>
						<li>La comprensión de los modelos interpretativos de la Historia desarrollados por la historiografía contemporánea y competencias para el análisis crítico y reflexivo de sus desarrollos como saberes científicamente fundados</li>
						<li>El conocimiento y el dominio de los métodos y técnicas esenciales para la producción y construcción del conocimiento histórico</li>
						<li>El conocimiento de los procesos sociales básicos de la historia mundial, americana y argentina</li>
						<li>El conocimiento de las vinculaciones de los procesos antedichos con la historia regional</li>
						<li>El conocimiento de los enfoques, métodos y técnicas básicas para el desarrollo de investigaciones históricas</li>
						<li>El conocimiento teórico y práctico para identificar, seleccionar, organizar e interpretar fuentes históricas de distinto tipo</li>
						<li>El conocimiento de los fundamentos y las estrategias más pertinentes para desarrollar programas, proyectos y actividades institucionales de preservación y enriquecimiento del patrimonio y la memoria histórica</li>
						<li>El conocimiento de los procesos de producción, socialización y apropiación del conocimiento histórico</li>				
					</ul>
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Título</b><br>
					<ul>
						<li>Diseñar, planificar, dirigir y realizar investigaciones históricas.</li>
						<li>Diseñar, planificar, conducir y evaluar programas, proyectos y actividades inherentes al campo de las Ciencias Sociales.</li>
						<li>Asesorar a instituciones, realizar tareas de coordinación y de evaluación para el desarrollo de programas, proyectos y actividades que contribuyan a la preservación del patrimonio y la memoria histórica.</li>	
					</ul>

				</p>				
			</div>
            <!--Tab Alcances-->

            <!--Tab Programa de Asignaturas-->
			<div class="tab-pane fade" id="v-pills-asignaturas" role="tabpanel" aria-labelledby="v-pills-asignaturas-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Programa de Asignaturas</b>
                    <!--Programa de Asignaturas-->
					<div class="container  mb-4" style="font-size: 0.9rem;">
						<div class="row border border-dark mx-1">
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-0">Primer Año</div>
						<div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1V-_VZwAADwEv3Zw8RWplr_JrlTZVWips/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Fundamentos de Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/15k_KigqWdaYeZjpiW_JSrM2JE-IfwAsx/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia de los Procesos Sociales</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13L0zsAcczNuoI1b4VLPd92Nm1Nuj3dL4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Fundamentos de Sociología y Ciencia Política</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1QU6z4wk9Ga2exPfhLfHe5dN_TiNFDubs/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Prehistoria General</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qLAkTV_n7gGuwDhqq_DVKm9HkUD5NTIB/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Introducción a la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RROZM0uVZJR2QMaOTBZTKkycXKdSSytT/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
						<div class="col-6 py-2">Fundamentos de Economía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EkplqifmIO1NiRvmAGjCpsgq1hnkoFoR/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Problemas del Conocimiento Histórico</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CCyLiiqv5zsiHxNvHRd0nu93eqiUw1mq/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Antigua I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UpN3xwbFeU8rA1o2udTwIg8nupgV3DwR/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia de América I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Mq9IGCFv9GgbYjxSLwPgyw0WSnRTvhhj/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Historia Antigua II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hDO-L1_xdtoNmfMCIiUZEy0-N4zcIZns/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller de Comprensión y Producción de Textos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13MpoAv8OPmIOO1jQOkUMlcfTXr3P6_sn/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
						<div class="col-6 py-2">Historia de América II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RlYYiVYNvyh_ttcswWLvy_GemMGCfxmU/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Medieval</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/178IhsnqBoemhYZdlHMdOcE0_3-yTjpMf/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Metodología de la Investigación Histórica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sJGSWaZySPGHT_gRW8hQHy5EBMZBGy1H/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						
						<div class="col-6 py-2">Historia Argentina I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12jVgHmP_8MMii3x6qUPKq4W1-kHS7jUW/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Moderna</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1v38M2EOlXykn--tYn-phWdleUXF-ynln/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						
						<!-- 07/10/2025-->
						<!--
						<div class="col-6 py-2">Esp. Curricular I - Esp. Curricular II - Silvia Crochetti - Juan Cruz López Rasch</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rrPczh37ImqR3T5GZ6Jpf_FxTvYEF-eJ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Esp. Curricular I - Esp. Curricular II - María Lanzillotta – Ana María T. Rodríguez</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1r_nwHrZQRXMKuUpdrsTVHYcAC4maki_B/view?usp=sharing" target="_blank">Descargar Programa</a></div>            
						-->

						<div class="col-6 py-2">Esp. Curricular I - Esp. Curricular II - María José Billorou y Lía Norverto</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1lFa8Y0u7JAigxcogafJAFOIhc21dIqUM/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<!-- 07/10/2025-->

						<!-- 28/04/2025-->
						<div class="col-6 py-2">
							Esp. Curricular I - Esp. Curricular II - Juan Cruz López Rasch
						</div>
						<div class="col-6 py-2">
							<i class="fas fa-file-pdf text-danger"></i> 
							<a href="https://drive.google.com/file/d/1HvwT5HsATowhvAWMHme3T9nZm7yyYWbr/view?usp=drive_link" target="_blank">Descargar Programa</a>
						</div>
						<!-- 28/04/2025-->						
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
						<div class="col-6 py-2">Historia Argentina II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1jJ99ghcsWTiqt_Xev2TfnZ2vbxc53h0p/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Contemporánea</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1uuegHJACddUMxPxqhGot_rw9upCEhep6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia de América III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CrOZUBRPLd3uEnIL3sIS-pkABUgiLUTG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Pasantía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>    
						
						<div class="col-6 py-2">Epistemología e Historiografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1W6nC2FgAVYrbW_QfLSaGlMMH33_2mXgu/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Argentina III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xIuJjq_-DrkBQtjUxUdsXbGHnxA6tlYw/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia del Siglo XX</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bz0oPNJmhlTvJLWPzgJ0ygqwCaCz3rY4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario Optativo: Historia Indígena Regional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1XOrfTcsgFP_Hu16v2HRGaX2wy9ZSP1Fm/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<!--<div class="col-6 py-2">Seminario Optativo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1aipDZtdHblh5dDnYhoevUBi8t-OVXDvg/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
						
						<!-- 2026 16/06/2026 -->
						<div class="col-6 py-2">Seminario de Historia I/Seminario de Historia II. Espacio curricular I. Espacio Curricular II (Historia cultural, Historia Política, Historia Social)</div>
						<div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1POX95Dj66IJguUAiNnfcdZz-AiHZYxfJ/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario de Historia I - Seminario de Historia II - Espacio Curricular I - Espacio Curricular II (áreas: historia cultural, social y económica): La historiografía argentina en las últimas décadas: problemas, perspectivas, debates y desafíos</div>
						<div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10O6ykBLmK8crtzryN29lvNiEdV4QhHWE/view?usp=drive_link" target="_blank">Descargar Programa</a></div>						
						<!-- 2026 16/06/2026 -->

						<!-- Nov 2025 -->
						<div class="col-6 py-2">Sem. de Historia I - II: Principales cuestiones de la teoría económica contemporánea: <br>problematización historiográfica en las sociedades precapitalistas y capitalistas</div>
						<div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1nCjszyKiX0n92HH0xMnObBTHVmu1R4yT/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

						<div class="col-6 py-2">Sem. de Historia I - II: Seminario de Historia de la Educación Argentina</div>
						<div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1F2O3d74do_WXRAKhwpKZSEFpmqY1WvLy/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<!-- Nov 2025 -->

						<div class="col-6 py-2">
						La historiografía argentina en las últimas décadas: problemas, perspectivas,
						<br>debates y desafíos
						</div>
						<div class="col-6 py-2">
							<i class="fas fa-file-pdf text-danger"></i> 
							<a href="https://drive.google.com/file/d/1bjDK2EVMX8kaYmuxQRMShql5Y8RM4D2Z/view?usp=drive_link" target="_blank">Descargar Programa</a>
						</div>

						<!-- 28/04/2025-->
						<!--<div class="col-6 py-2">
							Esp. Curricular I - Esp. Curricular II - Juan Cruz López Rasch
							Seminario de Historia I - II: Videojuegos e historia económica: formas de enseñar (y aprender) lógicas productivas, 
							<br>distributivas y acumulativas en las sociedades precapitalistas y capitalistas.
						</div>
						<div class="col-6 py-2">
							<i class="fas fa-file-pdf text-danger"></i> 
							<a href="https://drive.google.com/file/d/1NujMMRAMktf6-2qVhIWNvyGuginNgmgC/view?usp=drive_link" target="_blank">Descargar Programa</a>
						</div>-->
						<!-- 28/04/2025-->


						<div class="col-6 py-2">Seminario de Investigación en Historia Regional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1C425G0TlwbzBpG-ix87X0r2l6cYIy6W6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Teoría y Metodología de la Investigación Historiográfica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10O6ykBLmK8crtzryN29lvNiEdV4QhHWE/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario de Tesis Orientado</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Tesis</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
						<!--    
						<div class="col-6 py-2">Sem. de Historia I - II - Prof. Gregoire</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zXONQCObBUNF0fULxzEv3mlVdVspQHds/view?usp=share_link" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Sem. de Historia I - II - Prof. Rabinovich</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1lHW3xBuZJUbhG06Ix0i4XRAE2sGIeOIO/view?usp=share_link" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Sem. de Historia I - II - Prof. Cantera</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1u8MCcOJdXJLkDb78vc0Ic_txWSrzX_lq/view?usp=share_link" target="_blank">Descargar Programa</a></div>
						-->    
						<!-- octubre 2023-->
						<!--<div class="col-6 py-2">Seminario de Historia I - Seminario de Historia II - Espacio Curricular I - Espacio Curricular II (Prof. Fabio Alonso)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bMSlDFY7PVlD9UtojRyITOgRF_Kv-640/view?usp=drive_link" target="_blank">Descargar Programa</a></div>-->
						<!--<div class="col-6 py-2">Seminario de Historia II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_sQZx5Lg9BsaXGicPEU2rz329tDq7XEm/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						<!--<div class="col-6 py-2">Sem. de Historia I - Sem. de Historia II - Silvia Crochetti - Juan Cruz López Rasch</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CT5v4PErFzOOyJRtko7ASjukkOHqL8B5/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Sem. de Historia I - Sem. de Historia II - María Lanzillotta – Ana María T. Rodríguez</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1euzoyBHtQxdqfVmYJaxy1-_qnDj3X7zG/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						<!--<div class="col-6 py-2">Seminario de Historia I - Prof. Cantera</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_rWPyXpaGk8Ol7wpliz7oRTSEaI1YhGf/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario de Historia I - Prof. Justo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZYbXJjrHBU-1eY8AN856d9rZ2rhRUQTa/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
						<div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1je-sEp80lVTlSFT-e6v2mD1juqUXutNM/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/102-MHeie7ToOTwUB4ggtO8JhoHYlPw5f/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">III Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qx-YYbcf5xKh5q4TjPV1vQ-Cofe9JsIp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1GzELl9xFBxIQEJhLZXWSEFhAmQHUp8bt/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1mPh6UCukSUKWBDuT_y8xhLYTcUG6hdHQ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">III Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1i1001_ltAfhg-Srw-MsNbM9oWslLepKH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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