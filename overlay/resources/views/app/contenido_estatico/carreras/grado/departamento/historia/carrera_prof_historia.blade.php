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
                            <span class="b-active">Profesorado en Historia</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Profesorado en Historia</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profesorado en Historia</a>
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
							<img src="../slim/planes-estudio-images/prof_historia.png" style="height: 700px" class="img-fluid p-1" alt="Profesorado en Historia">
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
							Profesor/a en Historia
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
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2009_228_GgVDndE.pdf">Descargar</a>
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br>
				La/el graduado/a de la Carrera Profesorado en Historia de la Facultad de Ciencias Humanas de la Universidad Nacional de La Pampa es un profesional crítico, reflexivo y comprometido con la realidad social, lo cual supone:
				<ol type="a">
					<li>Respecto de la disciplina</li>
					<ul>
						<li>Un conjunto de saberes sobre el campo disciplinar específico de la Historia en el contexto de las Ciencias Sociales;</li>
						<li>El conocimiento de los enfoques teóricos fundamentales de la Historia y las Ciencias Sociales y de sus conceptos, métodos y campos diferenciados;</li>
						<li>La comprensión de los procesos interpretativos de la Historia desarrollados por la historiografía contemporánea y el análisis crítico y reflexivo de sus desarrollos como saberes científicamente fundados;</li>
						<li>El conocimiento y el dominio de los métodos y técnicas esenciales para la producción y construcción del conocimiento histórico;</li>
						<li>El conocimiento de los procesos sociales básicos de la Historia mundial, americana y argentina;</li>
						<li>El conocimiento de las vinculaciones de los procesos antes enunciados con la Historia regional;</li>
						<li>El conocimiento de los contenidos básicos del Área de Formación Ciudadana.</li>												
					</ul><br>
					<li>Respecto de la enseñanza y el aprendizaje</li>
					<ul>
						<li>un conjunto de saberes acerca de la enseñanza y el aprendizaje de esos campos del conocimiento que le permita el diseño, Planificación y elaboración de estrategias pedagógicas e institucionales y la evaluación e investigación de propuestas de enseñanza y aprendizaje de la Historia y las Ciencias Sociales;</li>
						<li>el conocimiento de los procesos de producción, socialización y apropiación del conocimiento histórico;</li>
						<li>el conocimiento de las diversas estrategias para la transposición didáctica del conocimiento histórico científicamente producido;</li>
						<li>el conocimiento de las técnicas y estrategias de la investigación educativa en el área de Historia y de Ciencias Sociales;</li>
						<li>el conocimiento de las técnicas y estrategias de la gestión de proyectos institucionales para la enseñanza de la Historia y de las Ciencias Sociales.</li>
					</ul>
				</ol>
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Título</b><br><br>
					<ul>
						<li>Diseñar, Planificar, conducir y evaluar procesos de enseñanza y aprendizaje de Historia en los niveles Secundario y Superior Universitario y no Universitario.</li>
						<li>Diseñar, Planificar, conducir y evaluar proyectos institucionales de enseñanza y aprendizaje en Historia en los niveles Secundario y Superior Universitario y no Universitario.</li>
						<li>Diseñar, Planificar, conducir y evaluar investigaciones educativas como investigador en Historia y en Ciencias Sociales.</li>
						<li>Diseñar, Planificar, conducir y evaluar procesos de enseñanza y aprendizaje de los contenidos correspondientes al Área de Formación Ciudadana en el nivel Secundario.</li>
						<li>Realizar investigaciones historiográficas.</li>
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
						<div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1PgS_jokZN9udTAgD5RBFHN3Q18nbUoWn/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Fundamentos de Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hix3Bcu3_6Q_MLGCeekcLvrymsEyh2wo/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia de los Procesos Sociales</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ym0NddaNTiH7K2f3sEMOb3i8Fy4CVuCE/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Fundamentos de Sociología y Ciencia Política</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1j5VDxAZOFcuD_hYqB4io0UpIH5gGCxLZ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Prehistoria General</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WMEzi28Z1cX9-f7TDi8vEd0p1MnUKfzh/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Psicología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZcGXdy3RSgvvrN_lN5k8NwaJYm08NomA/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						
						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
						<div class="col-6 py-2">Fundamentos de Economía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1HBqoka3kWfNJwtnM6Dz90Vc15cnSIbNS/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Problemas del Conocimiento Histórico</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tBXvQFxRoCfIajIhtRtQZvktzUfvDzRn/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Antigua I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JsOMU3_FnwK_A7zKVVDCvGmQXB3Km0XG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia de América I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qe_G8NCWNWut3LbiKbtCYGBoS4QwJtb7/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Historia Antigua II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NKbRMpyhTvr3OqT4Q_74Gnq0oIvzPeKL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zmVhC0SKF5ZEyIjeShfXtxxsy5oCiWvY/view?usp=sharing" target="_blank">Descargar Programa</a></div>

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
						<div class="col-6 py-2">Historia de América II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18a7HkjLzxLr54sMthSxfpGl1sjbfAIUN/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Medieval</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18tLrdRExZdBgswQnAu-Jwx1QVd_1OBCy/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Metodología de la Investigación Histórica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/15uVYBTolaHXmReqKpqCZgHjUSwPMDC7V/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Argentina I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1yeb5YhQ4EhjzKtvhfvJQoYMg2XylVTRO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Moderna</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Kpm5w7KVdVi2bFR7y0i9oiFTmvi9TV3N/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Gp0A6OBpY6hn_KSqeyXy0Oq0UKv6kX3M/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<!--28/04/2025-->						
						<div class="col-6 py-2">
							Esp. Curricular I - Esp. Curricular II - Juan Cruz López Rasch
						</div>
						<div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qFQN04IqlpMXApMjbZzZfMfTnfWvd1E1/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<!--28/04/2025-->
						
						<!--07/10/2026-->
						<div class="col-6 py-2">Esp. Curricular I - Esp. Curricular II - María José Billorou y Lía Norverto</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1TrLtfab1bi3w7aGAAbV17sZbm2d9RtOI/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario Optativo: Historia Indígena Regional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ykWEVGkUa6PIg-8A--tsNtMqlNMXSeqt/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<!--07/10/2026-->

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
						<div class="col-6 py-2">Historia Argentina II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1AyDIehu5AvkGupOncitPD9NvtbVVRLw3/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia de América III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13wJfP9W4Zx4GAco0qSQlVRLfqQ5WXIit/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Contemporánea</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sLVNgzf_hVEbyTCaeyJDSOYYtKXWv0X-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia Argentina III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-XivxMcozXxHN6dfYonEOmrQY-XkkmyE/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia del Siglo XX</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1YDrdR-Ebexba6qKgO9jVT2iYbfve4s3X/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Didáctica Especial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KqffeZu1BYBmdYuKEnnDE-YsmR9WO38h/view?usp=sharing" target="_blank">Descargar Programa</a></div>    

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>

						<!-- Nov 2025 -->
						<div class="col-6 py-2">Sem. de Historia I - II: Principales cuestiones de la teoría económica contemporánea: <br>problematización historiográfica en las sociedades precapitalistas y capitalistas</div>
						<div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_V4J4xys2EuL-ubRE983wgO4x0a3kMiC/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

						<div class="col-6 py-2">Sem. de Historia I - II: Seminario de Historia de la Educación Argentina</div>
						<div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CHeK3beWSYyptN4ZCXFj11qxXnrG3Ze_/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<!-- Nov 2025 -->						

						<div class="col-6 py-2">Seminario de Historia I - II: La historiografía argentina en las últimas décadas: problemas, perspectivas, 
												<br>debates y desafíos
						</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JNZepYjci8kEain9k3kGjAi9OcWWyS2v/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

						<!-- 28/04/2025-->
						<!--
						<div class="col-6 py-2">
							Esp. Curricular I - Esp. Curricular II - Juan Cruz López Rasch
						</div>
						<div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NujMMRAMktf6-2qVhIWNvyGuginNgmgC/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						-->
						<!-- 28/04/2025-->

						<div class="col-6 py-2">Práctica de la Enseñanza de la Historia</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1eiGo77tEpZwijCicfWNxtsMOr9g-eA27/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Seminario de Investigación en Historia Regional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rR8KrsE_sOtIT8kKFbiLDlqzFvs2q6oW/view?usp=sharing" target="_blank">Descargar Programa</a></div>

						<div class="col-6 py-2">Epistemología e Historiografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NQn_sUzwz9pEiy-di79QCAVPVKHJJIvF/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<!--<div class="col-6 py-2">Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>-->    
						
						<!-- 2026 16/06/2026 -->
						<div class="col-6 py-2">Seminario de Historia I/Seminario de Historia II. Espacio curricular I. Espacio Curricular II (Historia cultural, Historia Política, Historia Social)	</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> 
						<a href="https://drive.google.com/file/d/1KlPGAHvA7hfy4ueKnXk4CrPLqyuyz9DI/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario de Historia I - Seminario de Historia II - Espacio Curricular I - Espacio Curricular II (áreas: historia cultural, social y económica): "La historiografía argentina en las últimas décadas: problemas, perspectivas, debates y desafíos".</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> 
						<a href="https://drive.google.com/file/d/1QUDEW17TA8-MKnR9cIiao9T8J2i6t15o/view?usp=drive_link" target="_blank">Descargar Programa</a></div>						
						<!-- 2026 16/06/2026 -->


						<!--
						<div class="col-6 py-2">Seminario de Historia I - Prof. Cantera</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Gr0pVBeH1fGsOIlQwwZbgeMPB4cibJOJ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario de Historia I - Prof. Justo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IBktqs4LHabSJgBtt6tqWn_QQl0zy8QU/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Sem. de Historia I - Sem. de Historia II - Silvia Crochetti - Juan Cruz López Rasch</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1B-zwF20u8kL4imOH-LqqZB0JCX9N8LBY/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Sem. de Historia I - Sem. de Historia II - María Lanzillotta – Ana María T. Rodríguez</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RzQeZHIMNY-P-yoZDqgj8icbwkCjFYhu/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Sem. de Historia I - II - Prof. Gregoire</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1acovJM86a8eYaYz1oNlcEPrkaHuNOp2Z/view?usp=share_link" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Sem. de Historia I - II - Prof. Rabinovich</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rqy8doiJ8AzLbXcfPNDD2_2CJlpNtpAo/view?usp=share_link" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Sem. de Historia I - II - Prof. Cantera</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1iBikvsIl-7aFyRBqNbIrZRt1T-nMeePD/view?usp=share_link" target="_blank">Descargar Programa</a></div>
						-->
						<!-- octubre 2023-->
						<!--
						<div class="col-6 py-2">Seminario de Historia I - Seminario de Historia II - Espacio Curricular I - Espacio Curricular II (Prof. Fabio Alonso)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1jRY9gMKMvVvAso3i1l3lmG5lobOwf1cn/view?usp=drive_link" target="_blank">Descargar Programa</a></div>    
						-->
						


						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
						<div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1mPMr7cZDEEwUdjxI6-Ljn4RHeK71VRhw/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fstCTyK7H2VcCbbUoAa9JHgmaNF8hUdl/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">III Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EzHhUf1M1lZD1_ShAP0U641kfrGQTKEc/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pme9aY7WKXjb3oVDB3etK0n1PshU9BCi/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-U4Im90DONZc3wbGHIcqK1hgrqnPccaz/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">III Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dnCMU6CGhRNoJEu_DbM3cl3H9m9pAGHP/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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