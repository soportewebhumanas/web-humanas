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
                            <span><a href="{{route('carreras.grado.departamento.letras')}}">Letras <i class='fa fa-angle-right'></i></a></span>
							<span><a href="{{route('carreras.grado.departamento.carreras-de-grado')}}">Carreras de Grado <i class='fa fa-angle-right'></i></a></span>
                            <span class="b-active">Licenciatura en Letras</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Licenciatura en Letras</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Licenciatura en Letras</a>
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
							<img style="height: 700px" src="../slim/planes-estudio-images/lic_letras.png" class="img-fluid p-1" alt="Licenciatura en Letras">
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
							Licenciado/a en Letras
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
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2011_195_3Rr2SR5.pdf" target="_blank">Descargar</a>
                        </div>                        
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br><br>
					La/el graduada/o de la carrera Licenciatura en Letras es un profesional cuyas competencias comprenden:<br><br>
					Un saber disciplinar relativo a los campos del conocimiento de la Lingüística, la Literatura, las Lenguas Clásicas y otros discursos sociales.
					<br>
					Las competencias específicas relativas al conocimiento disciplinar son:
					<ul>
						<li>El conocimiento del sistema de la lengua española en sus niveles y funciones.</li>
						<li>El conocimiento de las principales teorías y modelos que configuran el panorama actual de las Ciencias del Lenguaje.</li>
						<li>El conocimiento de los diferentes paradigmas de los estudios culturales contemporáneos.</li>
						<li>El conocimiento de las literaturas regional, nacional, latinoamericana y extranjera y sus contextos históricos.</li>
						<li>El conocimiento de la teoría literaria, el análisis de textos y la crítica que vincula el texto literario con su contexto social.</li>
						<li>El conocimiento de las construcciones culturales, semióticas y lingüísticas que generan los textos clásicos de la literatura griega y latina y la configuración diacrónica de la lengua española.</li>
					</ul>
					
					Un saber acerca de la investigación que le permite el diseño, planificación y elaboración de proyectos en los campos del conocimiento relativos a su especialidad.
					<br>
					Las competencias específicas relativas a la elaboración de los proyectos de investigación son:
					<ul>
						<li>El conocimiento de las metodologías y estrategias de la investigación.</li>
						<li>El conocimiento del estado del arte en la investigación en lengua, literatura, lengua y cultura clásicas.</li>
					</ul>
					
					Un saber acerca de los modelos de las políticas lingüísticas y las políticas culturales. 
					<br>
					Las competencias específicas son:
					<ul>
						<li>El conocimiento sociolingüístico y cultural de los contextos.</li>
						<li>El conocimiento de las estrategias de planificación lingüística.</li>
					</ul>
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Título</b><br><br>
					La formación de grado del Licenciado/a en Letras lo acredita para:
					<ul>
						<li>Evaluar, en proyectos institucionales, la coherencia y consistencia de aspectos referidos a las Ciencias del Lenguaje y a los estudios literarios en los niveles Inicial, de Educación Primaria y Secundaria, y de Formación Docente.</li>
						<li>Diseñar, planificar, conducir y evaluar investigaciones en Lengua y Literatura.</li>
						<li>Diseñar, conducir y evaluar proyectos de planificación lingüística.</li>
						<li>Participar en el diseño, conducción y evaluación de proyectos referidos a políticas culturales.</li>
						<li>Asesorar en lo relativo a la lengua española y en lo atinente a teorías literarias y metodologías de investigación lingüística y literaria.</li>
						<li>Elaborar, dirigir, ejecutar y supervisar programas de edición literaria.</li>
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
							<div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fg8P9Gr7r3ZqHhdOXuhi_2fHgQjW25FQ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Gramática I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CxRy0YE0aGLRnWP9oXRy5Ucy6wWk9jaO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Introducción a la Literatura</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16GdcKsem29VAyy5k9gUXjjAkqij18udb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Taller I: Comprensión y Producción de Textos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1GL6XA6Ge0wmfXb2x7cZNrSeKVI_1Nd5j/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Optativa I: Fundamentos de Sociología y Ciencia Política</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1atIKw2b3RDdqVWyhWvlluIeynq_4Y15V/view?usp=drive_link" target="_blank">Descargar Programa</a></div>

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
							<div class="col-6 py-2">Lingüística General</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1BRGb8jLR4FUw_pGByi5QWhDN4U6DW553/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Lengua y Literatura Griegas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1FcxJqOUtlKsbtcWf057LC3zyQrwUZ_lN/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Literatura Española I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fGFV5qc76xw7xTeyr5bcaMexBoWvG4-g/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Teoría y Análisis Literario I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1FIU367mk67q9uC_m2EdnxBKNMmfmg-vb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Gramática II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pKvE6ASzswqvkbjbXtNoy4ieum-Nbojp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Semiótica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-2qM7Fg3zQiP4jcR8WFtSctHrz-WTuAk/view?usp=sharing" target="_blank">Descargar Programa</a></div>    

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
							<div class="col-6 py-2">Sociolingüística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pugjKJCkm4E4US7q-wr3-lJnLAo9U2gI/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Lengua y Literatura Latinas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xhnVVRIN6i6uJqVs4I2FLYKY9PrkySFZ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Literatura Española II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1jwYDDDueMtUTtR_qjOSO6-M3BJhsVvG-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Literatura en Lenguas Romances</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1x_TTtRQm5mxQZsZAmrWKZm6hr0cBkDfG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Teoría y Análisis Literario II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LXWsIHbBjRDpoOZmAP4ZQr0Kry_sP124/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Gramática III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/140bZSzbtoXryzQS7qsTSczNBp5-Byv4H/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Literatura Latinoamericana I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_el74Xhz9DHOPDbYoJlmGYSUvYwoKJhh/view?usp=sharing" target="_blank">Descargar Programa</a></div>

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
							<div class="col-6 py-2">Literatura Latinoamericana II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hS6BSFoLL-N6FhiV514esbPuIHr-cH-5/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Historia de la Lengua</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_2mhe3yl9glda08igWxVMsXbN_qpBqmb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Optativa II Lingüística Descriptiva</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1f9NAHZGR_HYYCbScksHuy6PSbI1Xvk5P/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Seminario Orientado (a optar entre Ligüística o Literatura)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RfFSyc_z-CpH5yQ69PZC_9ZiDZu2KlJN/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Literatura en Lenguas Anglosajonas y Germánicas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DmHU_KkeRz1cdQpehl11ZMXEpgPo5cfL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Literatura Argentina I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11wT_LD7T_XV5S6MMfqNahazhf1K1e4i0/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Seminario de Literatura Regional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1f_wCBrTR-ITpnQyjMVpvBv5HRXNzIKhL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Taller II: Escritura Académica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19cPks-D0rqGi9T0OWm7e5QKTOTqXlV7Z/view?usp=sharing" target="_blank">Descargar Programa</a></div>    

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
							<div class="col-6 py-2">Literatura Argentina II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-slopILUnV8gvFcP7l5Kik5nJatoZ669/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Seminario Orientado de Metodología de la Investigación Literaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MZpQO6WzhWyvXmf3iFqf5GdJjl2lceyN/view?usp=drive_link" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Pasantía en Proyecto de Investigación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Seminario de Tesis Orientado</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Tesis</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
							<div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fLaAOu8IUfBO5PWrXrlfLiQQLWeT3rOk/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1m_His22PvMbFAWQEFjjjea0hzRiAQyJF/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">III Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qjLg-PJ4hjdp9IlCKB68K9AhlzbrAuKs/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Ut0PMyUB2HwegLKDhoI_XyYJCuOeg9ZG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fzSOB2KLZuprk2w_0Nzrz7-aq3eCGXIx/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">III Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vnEri6f1lkae7vfV4CD-5NlHqF-d9CAY/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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