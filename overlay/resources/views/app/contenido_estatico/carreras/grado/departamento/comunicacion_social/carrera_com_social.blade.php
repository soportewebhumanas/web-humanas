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
							<span>
                                <a href="{{route('carreras.grado.departamento.comunicacion-social')}}">Comunicación Social <i class='fa fa-angle-right'></i></a>
                            </span>
							<span><a href="{{route('carreras.grado.departamento.carreras-de-grado')}}">Carreras de Grado <i class='fa fa-angle-right'></i></a></span>
                            <span class="b-active">Licenciado/a en Comunicación Social</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Licenciado/a en Comunicación Social</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Licenciado/a en Comunicación Social</a>
			<a class="nav-link" id="v-pills-info-tab" data-toggle="pill" href="#v-pills-info" role="tab" aria-controls="v-pills-info" aria-selected="true">Información General</a>			
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Perfil y Alcances del Título</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Orientaciones y Práctica Profesional</a>
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
							<img src="../slim/planes-estudio-images/lic_com_social.png" style="height: 700px" class="img-fluid p-1" alt="Licenciatura en Comunicación Social">
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
							Licenciado/a en Comunicación Social
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
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">DUración</div>
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
                            <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2011_302_s1qgQhi.pdf" target="_blank">Descargar</a>
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil y Alcances del Título</b><br><br>
					<span class="font-weight-bold" style="color:#26406C">Perfil</span><br>
					<b>
					El/la graduado/a de la carrera Licenciatura en Comunicación Social de la Facultad de Ciencias Humanas de la Universidad Nacional de La Pampa es un profesional 
					con conocimientos teórico-metodológicos específicos para intervenir en distintas prácticas profesionales y académicas inscriptas en el campo disciplinar de 
					la Comunicación Social y en el marco de las Ciencias Sociales en general. Entre sus competencias específicas se destacan:<br>
					</b>
					<ul>
						<li>La comprensión de las distintas perspectivas teóricas desde las que pueden abordarse los fenómenos comunicacionales y los procesos de producción de sentido, así como de las principales teorías que explican el funcionamiento de la sociedad en su conjunto.</li>
						<li>La construcción de saberes específicos referidos al análisis y la elaboración de materiales y contenidos a través de los diferentes lenguajes, soportes y tecnologías de la comunicación.</li>
						<li>La construcción de conocimientos teóricos y prácticos necesarios para investigar, diagnosticar, planificar y gestionar las diversas formas de comunicación masiva e institucional.</li>
						<li>La construcción de conocimientos teóricos y prácticos necesarios para planificar, gestionar y evaluar propuestas de Comunicación/Educación.</li>						
					</ul>
					<span class="font-weight-bold" style="color:#26406C">Alcances del Título</span><br>
					<ul>
						<li>Analizar, elaborar contenidos y desempeñarse en la tarea periodística y en la producción de medios y tecnologías de comunicación.</li>
						<li>Planificar, investigar y gestionar en forma estratégica procesos y prácticas comunicacionales en distintos ámbitos y espacios públicos y privados.</li>
						<li>Investigar y reflexionar sobre los procesos socio-culturales y comunicacionales.</li>
						<li>Planificar, gestionar y evaluar las diversas formas de comunicación masiva e institucional.</li>
						<li>Planificar, gestionar y evaluar propuestas de Comunicación, Educación y Tecnologías.</li>
					</ul>
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Orientaciones y Práctica profesional</b><br><br>
					<span class="font-weight-bold">Orientaciones</span><br>
					La Licenciatura en Comunicación Social posee dos Orientaciones<br>
					<ul>
						<li>Comunicación Institucional</li>
						<li>Comunicación, Educación y Tecnologías</li>
					</ul>

					<span class="font-weight-bold">Práctica Profesional</span><br>
					El estudiante deberá realizar una experiencia de práctica profesional en instituciones, medios de comunicación, escuelas, reparticiones estatales, 
					organizaciones sociales, entre otras opciones, donde pueda desarrollar algunas de las actividades que forman parte de las incumbencias de su título. 
					El plan de trabajo y las tareas a desarrollar serán acordados y supervisados por el/los docente/s a cargo de la asignatura.<br><br>

				</p>				
			</div>
            <!--Tab Alcances-->

            <!--Tab Programa de Asignaturas-->
			<div class="tab-pane fade" id="v-pills-asignaturas" role="tabpanel" aria-labelledby="v-pills-asignaturas-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Programa de Asignaturas</b>
                    <!--Programa de Asignaturas-->
					<div class="container mb-4" style="font-size: 0.9rem !important">
						<div class="row border border-dark mx-1">
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-0">Primer Año</div>
						<div class="col-6 py-2">Fundamentos de Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1W_EZjchkUPGreO5Q-suDoeqB1ad9z5Gs/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller de Producción Gráfica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1R9CR-5a2fWty01bNNCceYu3cYMR6GgBC/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Teorías de la Comunicación Social I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1TH-mIqVuOJllDlpMfcheFMcwScSoY6AL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Economía Política</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JYeXxtR5iwZ0qkKPXbKdGCwB3dOrxVa8/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Fundamentos de Sociología y Ciencia Política</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hHuL-NyarSJku7A6qEgDG6R7jMndVejq/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Semiótica y Comunicación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12_ZHAdUCoPf1Sy7BHleqQ4lZjVV703F_/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller de Producción Gráfica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MPqvMNU8nNxZ-OQpOgnCjnJbKIM5ZXhV/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
						<div class="col-6 py-2">Historia del Siglo XX</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11vGt-odf_fgHSEzKe50IgwKwruuYROH_/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Problemas Filosóficos Contemporáneos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1S0A5qV4jPdDeqhyTnbfFCI1icTBi6UOy/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller de Producción Radiofónica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_BWH1hSUeldumG2k_2Tk6RxF5YFh34Y9/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Teorías de la Comunicación Social II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Gr1ulnWue56yn_REqZKieIhjSP0EtdH8/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Cultura y Comunicación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Kufu-Uav5qlg3zcT1NHnU03SK6shPDqp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Contemporánea de Argentina y América Latina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger" target="_blank"></i> <a href="https://drive.google.com/file/d/1i8c6PTp9KsqQJbWBcb6LEyBQqQ15wags/view?usp=sharing">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario-Taller Electivo I - Herramientas de Edición Fotográfica y Diseño</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger" target="_blank"></i> <a href="https://drive.google.com/file/d/1Rmzq7a8DYV1tJ9E6k6pjBkjtFzSbc4Rn/view?usp=sharing">Descargar Programa</a></div>

						<!-- 2025 -->
						<div class="col-6 py-2">Seminario Taller Electivo I-II: La Adaptación y los trasvases culturales</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qe6PQaRjRnKjXSqfBgdRdqm1gMTPiMim/view?usp=drive_link" target="_blank">Descargar Programa</a></div>						

						
						<!-- 2024 -->
						<div class="col-6 py-2">Seminario-Taller Electivo I o II: Marketing y Publicidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1TLbkdUTyaY0RX1S6ndwLrBNz4NzOvS6k/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario-Taller Electivo I - Comunicación Científica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1TlZO3J7UhH9EXT2402eruDsE4gHY2ck5/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<!--<div class="col-6 py-2">Seminario-Taller Electivo I - Comunicación Científica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rh-BZ7vupW_1N6hyjz8l4UAxSMLNYll_/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						
						<div class="col-6 py-2">Taller de Locución y Foniatría</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1PTmc4da0XR8qTzg63xObkql8-YuGlo-X/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						
						<div class="col-6 py-2">Taller de Produccíon Radiofónica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Brs4DixAizagNMnve2l2E9j3ChfLPdFG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario Taller Electivo: “Periodismo digital” </div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14ozGBjtgjaHDdU5KN0Q557-NisfXeXdL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario-Taller Electivo I y II: Arte y Estética </div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1cNipQiliNF8hkS-i40DCBqA4IP0QeAkc/view?usp=share_link" target="_blank">Descargar Programa</a></div>
						

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
						<div class="col-6 py-2">Derecho de la Comunicación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DqqciDyezwmwDJqG-2ErghYwGAttH8jl/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Metodología de la Investigación en Comunicación I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1js2GAmJHs3YP2QXCMxG9EWq3DYpNbap4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller de Análisis del Discurso y Crítica de Medios</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1C2lxq-F47I47zPMNhMwqcCv4MuwoTX3n/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller de Producción Audiovisual I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MdCnuspMGUceBrQp4F7KX7ZaP-Q7-6PK/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Introducción a la Planificación Comunicacional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1K8--1OB2B7Ctb4yTizPTNIPh-Q83iroX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Metodología de la Investigación en Comunicación II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CIuIXLPlNkoGxfVbTbPj_LJ8lwNOQkhj/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario-Taller Electivo II - Herramientas de Edición Fotográfica y Diseño</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1z9ugNaMF59WDuteqDMs10_Vjlp186tL7/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						
						<!--<div class="col-6 py-2">Seminario-Taller Electivo II - Comunicación Científica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/163txTlyoHk1GJyu1vqEJWQXUKePYVjRM/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						
						<!--2026 16/06/2026-->
						<div class="col-6 py-2">Seminario Taller Electivo I - Seminario Taller Electivo II: Producción informativa para plataformas de streaming</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fnrx5e-OrNvktaI-HaPNLNE2Cn8Xu-Il/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

						<div class="col-6 py-2">Seminario-Taller Electivo - La Adaptación: una historia de lealtades y traiciones</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/196PbLiFIjs4mFLSYdujVZAqEj_ejfaCp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller de Producción Audiovisual II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1VRxemHFyvoc7K3Ywsipu_zXsqD-fHjUN/view?usp=sharing" target="_blank">Descargar Programa</a></div>

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
						<div class="col-6 py-2">Comunicación Institucional Orientación Comunicación Institucional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/188FPjIu88GgE3Yp11FgO5DyB0kjrHwbP/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Comunicación y Educación Orientación Comunicación,Educación y Tecnologías</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14Qf3bZxVmyZI0ThlISaglaktuaSTBHPI/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Psicología y Comunicación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_hJOdYPed3AKp8nPGIF2PZ_4YdnEbhIv/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Tecnologías de la Información y la Comunicación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/101gKYl_Iqz-hy3w5ad-WlkrU_xFZJEkP/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Diseño, Gestión y Evaluación de Proyectos en Comunicación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KWucDzicLeMoGMaouwC01WNuaX24Yldv/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Comunicación Comunitaria Orientación Comunicación Institucional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-igTvJZ98L54oL7s-IqFvdWOsZT-JqWi/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Enseñanza y Aprendizaje en Entornos Virutales Orientación Comunicación, Educación y Tecnologías</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hu450eukn5gNWtk44_J2u-7xkj77hYfX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Opinión Pública e Investigación de Mercados Orientación Comunicación Institucional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JUePB3d5Fw1f3xbizcZLnOeWmR4q8OsX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller de Gestión de la Comunicación Institucional Orientación Comunicación Institucional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DrETic9HXHxFSPZsyGqDvcZcPxeKi3EL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller de Medios y Narrativas Digitales Orientación Comunicación, Educación y Tecnologías</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1wnzK4HJ1sl52b0X7nUT6sTofgInPWKpr/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Tecnologías Educativas Orientación Comunicación, Educación y Tecnologías</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IkzkBIirLO2Akpou1CjtQVq_jBAktgui/view?usp=sharing" target="_blank">Descargar Programa</a></div>

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
						<div class="col-6 py-2">Práctica Profesional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1gDtzC1T1AX1mkQEZiovzB4LjtcsJ6FAZ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller de Elaboración del Trabajo Final</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1FSW1y5e3hDW9k0Sz-SmuCiGHpYo5kEGM/view?usp=sharing" target="_blank">Descargar Programa</a></div>

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Ciclos Idiomáticos</div>
						<div class="col-6 py-2">I Nivel de Idioma: Inglés</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17DQDrMp11Xlb0yom9vPjcY_NpYoiYf9j/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">II Nivel de Idioma: Inglés</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_8cVQx9GI3uQPYQzHi6MEa2kgAQlVhjF/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">III Nivel de Idioma: Inglés</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1eo0d3DsenxEvUph0adSvSUgBIbKsQ8E8/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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