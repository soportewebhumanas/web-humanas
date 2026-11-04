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
                            <span><a href="{{route('carreras.grado.departamento.geografia')}}">Geografía <i class='fa fa-angle-right'></i></a></span>
							<span><a href="{{route('carreras.grado.departamento.carreras-de-grado')}}">Carreras de Grado <i class='fa fa-angle-right'></i></a></span>
                            <span class="b-active">Licenciatura en Geografía</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Licenciatura en Geografía</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Licenciatura en Geografía</a>
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
							<img src="../slim/planes-estudio-images/lic_geografia.png" class="img-fluid p-1" alt="Licenciatura en Geografía" style="height: 700px">
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
							Licenciado/a en Geografía
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
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2011_284_UQ5p68C.pdf" target="_blank">Descargar</a>
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br>
					La/el graduado de la carrera Licenciatura en Geografía de la Facultad de Ciencias Humanas de la Universidad Nacional de 
					La Pampa es un profesional cuyas competencias comprenden un conjunto de saberes sobre el campo disciplinar específico de 
					la Geografía en el contexto de las Ciencias Sociales, tales como: el conocimiento de los enfoques teóricos y metodológicos 
					fundamentales de la Geografía en tanto ciencia social y de sus conceptos, métodos y campos diferenciados; el abordaje del 
					análisis integrado del espacio geográfico, teniendo en cuenta la interacción de sus elementos constitutivos 
					socio-territoriales, políticos, ambientales y culturales; la comprensión de la realidad socio-espacial integrada, mediante 
					la articulación entre la formación profesional y la realidades territoriales, mediante el aporte de análisis críticos y 
					reflexivos de saberes científicamente fundados; el ejercicio de la profesión desde un punto de vista crítico y comprometido 
					con la realidad socioterritorial; el conocimiento y el dominio de los métodos y técnicas esenciales para la producción y 
					construcción del saber geográfico; el conocimiento y la vinculación de los procesos básicos de la conformación de diferentes 
					espacios geográficos a distintas escalas: local, regional, nacional, global; la aplicación de los enfoques, métodos y 
					técnicas básicas para el desarrollo de la investigación, extensión y transferencia geográficas; el conocimiento de los 
					fundamentos y las estrategias más pertinentes para desarrollar programas, proyectos y actividades institucionales de 
					planificación socio-territorial, política, ambiental y cultural; el conocimiento de los procesos de producción, 
					socialización y apropiación de los espacios geográficos.					

				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Titulo</b><br>
					<ul>
						<li>Diseñar, planificar, dirigir, realizar y evaluar investigaciones geográficas.</li>
						<li>Asesorar a instituciones públicas y/o privadas.</li>
						<li>Coordinar, diseñar y evaluar planes, programas y proyectos que contribuyan al fortalecimiento y consolidación de la ciencia geográfica en ámbitos de trabajo interdisciplinario y hacia la resolución de problemáticas socioterritoriales, socioeconómicas y ambientales.</li>
						<li>Coordinar equipos inter y multidisciplinarios para el desarrollo de planes, programas y proyectos económicos, políticos, ambientales, entre otros, de aplicación socioterritorial.</li>
						<li>Diseñar, planificar, coordinar y evaluar planes, programas y proyectos institucionales de enseñanza universitaria en Geografía y su área de conocimiento.</li>
						<li>Diseñar, planificar, conducir y evaluar proyectos de investigación educativa y disciplinar en Geografía.</li>
						<li>Coordinar, participar e intervenir en equipos interdisciplinarios de investigación, extensión, transferencia y vinculación tecnológica.</li>
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
							<div class="col-6 py-2">Introducción a la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UDxwyssjtzE1VeCVr9sTaPcghqpzLCB5/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SZJRar4uYHWz16fTCxVup0_QpvN9CVqr/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Técnicas en Geografía I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rw8zoeL8IG_MFEsTPUy2uxqAXVJ_DYw1/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geología y Geomorfología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1FClWX7HpFewyuTYOcIdElnEEe3D6iPYD/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							<div class="col-6 py-2">Climatología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14p0co1NqJbWMSji8MK2vdrVXI3XRkv_2/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
								
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
							<div class="col-6 py-2">Fundamentos de Economía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1V1KnWoN-XHszsm64WZbVwv573rI3XMba/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Fundamentos de Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zMr3Ota6cXQvvbmYWFxjlNMteDPXw_HM/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Biogeografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1H0WH7M4QaOzL477cddjKSSsTQVGUc9p1/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Técnicas en Geografía II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hTCcRq4Pqi9CvOOJV5e6uvd8EuqFrWd8/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Fundamentos de Sociología y Ciencia Política</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14VManIlwL5MXliws4EphDSOhQpfzh4KB/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Hidrología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1a9pk7SfUmeENsUfcADXdyRPIsbTtxodr/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía de la Población</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16efFCCq-B6V674bhr1iXyfvJahrZRSJ9/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Sistemas de Información Geográfica y Teledetección</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fcanyoWDCDc_6-zI2uQdj_Q1DL622gye/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
							<div class="col-6 py-2">Historia del Siglo XX</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fLmcdA3PZ6JCJ_vaQp2Q51JJ2w4zApAa/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía Urbana</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/175i-is7FytQQrOb0XGFTxOTHKhgdlSf6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Epistemología de la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_wxSrKSSLMzwMYc432JCCqMDpLdR5mzP/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Historia Argentina Contemporánea (1853-2000)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xncvwz-gN8K-D7iIrR6QWWqKtFPaMLGW/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
							<div class="col-6 py-2">Geografía Rural</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zBQ8ik4UP8FqbwNxnGsrDWHou4T0veSm/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía Política y Económica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LXPEBXRHjbZ4cQOpCWG6ZfT52dnfT2D6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Metodología de la Investigación Geográfica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1FuR5ktg9DtBMEpAIVFkcz9W1yT3UVPVp/view?usp=sharing" target="_blank">Descargar Programa</a></div>

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
							<div class="col-6 py-2">Geografía de América Latina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10j46MdWal360E4oVuIvWlExVysmRiIwm/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía de Europa y Oceanía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1jL5i6ArqG-JObMFPXZvHet4SSg5krvBF/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía de Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1v57poldaNId3FFveqV-wxQXBfjPhS9HU/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía de América Anglosajona</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ykHMUt1PwnE8Bim1nUGU72FCTGlj_TA6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía de Asia y Africa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16jlGO7VgF4Tw-kAdH-9ZITC-5oko00_V/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							<div class="col-6 py-2">Seminario de Investigación Geográfica II (Ambiental)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EQ4IMwo7u0Yf-_DZLc5bZrFlO1VYkS7e/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
								
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
							<div class="col-6 py-2">Geografía de La Pampa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1koVyOpIM_BRtzAQzi-UwURTrvNp13pTH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Seminario de Investigación Geográfica III (Planificación y Ordenamiento Territorial)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WckY6yCnG-1rxBgRoG9tjYxItF_Yzc5W/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Seminario de Investigación Geográfica IV (Electivo obligatorio)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Seminario de Taller de Tesis de Licenciatura</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Tesis de Licenciatura</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma I</div>
							<div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1HeFQtQmUkrlBq792u6P45XQ2rJbQSbwp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1F0aY3Nf6ga2y_LLCaBhHkoh_pxfqCdZQ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">III Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14chODeQn8Bs_7xOoQAV0vrcX04b2Etx6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SdHNXjeMvxFclqefNz-vsGtmW8TipiJ6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1T5wDSAPBqEga9Lhi6WG-WnJhlyDkGhMz/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">III Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1O44B9VoJ2jSWOfIEfkIlTa-xR3ZWHP2_/view?usp=sharing" target="_blank">Descargar Programa</a></div>

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma II</div>
							<div class="col-6 py-2">I Nivel de Idioma II (Italiano)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qRCYYoBIdlU4EHUtQu3ofsvfZ5lb-nk5/view?usp=share_link" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">II Nivel de Idioma (Italiano)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17QUPoWftXP_gAQ9nqWSb9QA-8y80SCUO/view?usp=share_link" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">III Nivel de Idioma (Italiano)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">I Nivel de Idioma (Portugués)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SsQP3pfq_xhMvDd_f-RQcn5KFniIeLMX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">II Nivel de Idioma (Portugués)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16zHyWx-FH6XV52zKGw3lyQgMbrHA0i6h/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">III Nivel de Idioma (Portugués)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WNnAoYNbFLuLi016t6T_9YjN3RB_xwuf/view?usp=sharing" target="_blank">Descargar Programa</a></div>     
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