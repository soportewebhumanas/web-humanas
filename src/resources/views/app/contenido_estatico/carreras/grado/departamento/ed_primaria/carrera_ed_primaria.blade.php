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
							<span><a href="{{route('carreras.grado.departamento.educacion-primaria')}}">Educación Primaria <i class='fa fa-angle-right'></i></a></span>
							<span><a href="{{route('carreras.grado.departamento.carreras-de-grado')}}">Carreras de Grado <i class='fa fa-angle-right'></i></a></span>
                            <span class="b-active">Profesorado en Educación Primaria</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Profesorado en Educación Primaria</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profesorado en Educación Primaria</a>
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
							<img src="../slim/planes-estudio-images/prof_ed_primaria.png" style="height: 700px" class="img-fluid p-1" alt="Profesorado Educación Primaria">
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
							Profesor/a en Educación Primaria
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
							4 años
                        </div>
                        
                        <!--Sede-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Sede</div>
						<div class="col-7 py-2">
                            General Pico
                        </div>

                        <!--Plan de Estudios-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Plan de estudios</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2009_251_dRvNz3H.pdf" target="_blank">Descargar</a>
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br>
					<p class="text-dark" style="font-weight: 500;">
						La/el graduada/o del Profesorado en Educación Primaria será capaz de:
					</p>
					<ul>
						<li>Concebir la educación primaria como una tarea pedagógica y social que complementa y comparte con otras instituciones la transmisión cultural, la socialización, la construcción del conocimiento;</li>  
						<li>Analizar las políticas educativas pasadas y actuales a la luz de los procesos histórico-sociales;</li>
						<li>Conocer los campos del saber, sus fundamentos epistemológicos y sus desarrollos teóricos con especial referencia a los que configuran el nivel de la Educación Primaria;</li>
						<li>Favorecer la profesionalización promoviendo la formación para el desempeño del rol docente en sus aspectos de: intervención técnico-pedagógica mediante el diseño de proyectos, la elaboración de estrategias y dispositivos para la construcción de aprendizajes de los estudiantes en situaciones grupales y en contextos diversos y específicos, la puesta en práctica y la evaluación de los mismos; de relación con la comunidad educativa, las asociaciones profesionales y otras instituciones del medio;</li>
						<li>Participar en la elaboración de proyectos institucionales en aspectos organizativos, pedagógicos, didácticos, administrativos referidos a la escuela y a su relación con la comunidad;</li>
						<li>comprender y respetar la diversidad de los estudiantes para buscar formas de enseñanza que faciliten el acceso al conocimiento;</li>
						<li>participar en equipos interdisciplinarios, concibiendo que su rol se sustenta en las relaciones vinculares y de pertenencia institucional;</li>
						<li>elaborar y/o participar en proyectos de investigación e innovación educativa referidos a problemas de la realidad escolar y social;</li>
						<li>analizar los fenómenos de la estructura y la dinámica institucional y las modalidades de gestión.</li>
					</ul>
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Título</b><br>
					<ul>
						<li>Planificar la formulación de objetivos, contenidos, estrategias y modalidades de acción, recursos humanos y materiales, en tiempos previstos para el desarrollo del proceso de enseñanza.</li>
						<li>Conducir y orientar grupos de aprendizaje, monitoreando los procesos planificados.</li>
						<li>Evaluar el análisis de los procesos de aprendizaje y de enseñanza desde las variables que intervienen en ellos, a fin de fundamentar la toma de decisiones, el ajuste en las acciones didácticas, el establecimiento de niveles de calidad, y el análisis y reflexión sobre las prácticas pedagógicas.</li>
						<li>Integrar equipos interdisciplinarios para diseñar, ejecutar y evaluar proyectos de investigación y de innovación educativa referidos a problemáticas del ámbito escolar y social.</li>
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
						<div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_y1aGrSCIZLyBxdiPxkkWVm3gcxSdJtg/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Ei5P3KfDIGEUlYq2R4CdbPBp_Y1hdE4V/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Sociología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12uhfCy-dPStytPvjkwi45mXAE-PHPNyC/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18mEWAK5Mp6LIk0Vi2zq1SQ-CwYzPp1td/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Práctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rtv4dqIxey5b0TMb2Ovzqw9H2DblTCZO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Psicología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1nLEDfvT9TR0bCjT6UAQVHlvI2kRalj3Z/view?usp=sharing" target="_blank">Descargar Programa</a></div>            

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
						<div class="col-6 py-2">Corporeidad y Motricidad en la Escuela Primaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RyoaPgaMWaVm_NnZ53Ki5VJIU4KZO6Ic/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Historia de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UCE8gRX08kIxyWHOuqbu7_5ZPE7H9jPk/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Práctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MkH6Ulg2L3YLYXlcEjT4YDAXxMjiW7DH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Psicología del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16kOVIylIlfpBz5boiRg476fmmhW-rLNy/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Didáctica General</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14NiL5cUm9LuXRNZfhnk73cC9NYwAo-H1/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Educación Especial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1OzExod9ikxMsOLt5gRWl2lQFTivWAYr2/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Organización y Administración Educacional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1j14dN1sOFv1kgMSFD0e-slQ2FItwJK26/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Práctica III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-okrDOlOR7YJM9sX7IQybCelSEIExgvW/view?usp=sharing" target="_blank">Descargar Programa</a></div>

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
						<div class="col-6 py-2">Práctica IV</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1kjdU1tQyH6ysjbSauTVJOVwj9SJynaSO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Ciencias Naturales y su Didáctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_zy5IQZdaUSouhPKnFSgxFy0zgJAuRAI/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Ciencias Sociales y su Didáctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1QaFqqGJHZhLM1Hc8SNvYUKC9xuKNsa_F/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Lengua y su Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1n83Nj3UjuQDBff2MwJmkiRTXieI--YFI/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Matemática y su Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bMQRM55K2O9YOTwkL4dvPxQm6MaQp1NO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Ciencias Naturales y su Didáctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dYpG_7Wioxz3bR0AUfToZtr0hvXV4rNM/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Ciencias Sociales y su Didáctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EmLVJv074EoRhHt_9BMDbudyGLR3Iv6U/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
						<div class="col-6 py-2">Lengua y su Didáctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1OdnsFzoP4MgdT1Q4nyz7ZkDtvzkTwYh-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Matemática y su Didáctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DzRo7ceS8ttnGR_s0KLzK7aMFj4yLljD/view?usp=sharing" target="_blank">Descargar Programa</a></div>                    

						<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
						<div class="col-6 py-2">Actividad Curricular Opcional: Educación para la Salud en la Ed. Primaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1yBGXXXyNIB8h7X5acHRjf7_8FtFaIaMa/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional: Educacion Primaria Modalidad y Contextos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1s3w6OPXJAvChX4udRFIePDyM-bxci63_/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10GpJSUOHJvfE4P8vx0xJBW4GWBYiH4_8/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional I y/o II: Infancias, Familias y Contextos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zT9hZvLW87Ovkq7hAr6WL_TB8b5V02wj/view?usp=drive_link" target="_blank">Descargar Programa</a></div>    

						<!-- 2026 16/06/2026 -->
						<div class="col-6 py-2">Actividad Curricular Opcional I y II: El aprendizaje desde la neurofisiología</div>
						<div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zT9hZvLW87Ovkq7hAr6WL_TB8b5V02wj/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
						<!-- 2026 16/06/2026 -->
						
						<!--<div class="col-6 py-2">Actividad Curricular Opcional II: Educación para la Salud en la Ed. Primaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#">Descargar Programa</a></div>
						<div class="col-6 py-2">Actividad Curricular Opcional II: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#">Descargar Programa</a></div>-->    

						<!-- octubre 2024 -->
						<div class="col-6 py-2">Actividad Curricular Opcional I y II Educación de Jóvenes y Adultas/os</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EJWn2RoHAwcNbPfMNH1wRBbobb74L2q8/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

						<div class="col-6 py-2">Educación Artística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19uaI-PxMM0Xfe5ugJ_1yeBDApv5yx3jH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Política Educacional y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fM-P4zc8BVe0gharm1MJN8gA_DgIHSu5/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Residencia I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_-bZT1U27H-WTeN4oIgoEMp-Go2YlLAT/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Literatura</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qcw_YgAaWrAjbu06Ouz_2gwbxSQMAaTz/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Residencia II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xik10o9PNh3JypqvG7u6r4DmNwj_wpmz/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario de Derechos Humanos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sRJUa00sjOlQc8Dr0yGMkIiRz-am0Nmx/view?usp=sharing" target="_blank">Descargar Programa</a></div>
						<!--<div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Qj4oiSAipKVx9ybD8OwjjaKl6KNznoyy/view?usp=sharing" target="_blank">Descargar Programa</a></div>-->
						
						<div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://www.humanas.unlpam.edu.ar/storage/public/asignaturas/profesorado_en_ed_primaria/2025/11112025/Tecnologia_Educativa_2025.pdf" target="_blank">Descargar Programa</a></div>
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