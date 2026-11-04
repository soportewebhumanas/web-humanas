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
                            <span class="b-active">Profesorado en Letras</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Profesorado en Letras</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profesorado en Letras</a>
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
							<img style="height: 700px" src="../slim/planes-estudio-images/prof_letras.png" class="img-fluid p-1" alt="Profesorado en Letras">
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
							Profesor/a en Letras
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
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2009_231_anUxOnK.pdf" target="_blank">Descargar</a>
                        </div>                        						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br>
					La/el graduada/o de la Carrera Profesorado en Letras es un/a profesional cuyos conocimientos y capacidades comprenden:<br>
					a) Respecto de la disciplina
					<ul>
						<li>El conocimiento del sistema de la lengua española en sus niveles y funciones y de las principales teorías y modelos que configuran el panorama actual de las Ciencias del Lenguaje;</li>
						<li>El conocimiento de las literaturas regionales, nacionales, latinoamericanas, clásicas, extranjeras y sus contextos;</li>
						<li>El conocimiento de la teoría literaria, el análisis de textos y la critica que vincula el texto literario con su contexto social.</li>
					</ul>
					b) Respecto de la enseñanza y el aprendizaje
					<ul>
						<li>El conocimiento de las teorías sobre los procesos de adquisición y desarrollo del lenguaje y las estrategias para su enseñanza;</li>
						<li>El conocimiento de las técnicas y estrategias de la investigación en el área de la Lengua y la Literatura;</li>
						<li>El conocimiento de las estrategias para la promoción, intervención y desarrollo de actividades no formales vinculadas con el área de la Lengua y la Literatura.</li>
					</ul>			
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Título</b><br><br>
					<ul>
						<li>Diseñar, planificar, gestionar y evaluar procesos de enseñanza y de aprendizaje de Lengua y Literatura, con especial incumbencia en los niveles medio, superior universitario y no universitario.</li>
						<li>Diseñar, planificar, coordinar, ejecutar y evaluar proyectos institucionales de enseñanza y aprendizaje de la Lengua y la Literatura.</li>
						<li>Diseñar, planificar, coordinar, ejecutar y evaluar investigaciones en el campo disciplinar de la Lengua y la Literatura.</li>
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
								<div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16dP88Aya5mzZrD0ZGuEZbzipIOmeO1my/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Gramática I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SNpaHqQI4esndXEGNH9u3h_AcTGk-IdY/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Introducción a la Literatura</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1P6VeqTDFCLfRnYOJrwUqmQs1E4d4cw5R/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Psicología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14PtRjkdifB9h5v-iJAzgWyk3x9QRikl5/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Taller I: Comprensión y Producción de Textos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Y6oaP_dPBLrf95quh_wFCELe8mE8DnIq/view?usp=sharing" target="_blank">Descargar Programa</a></div>

								<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
								<div class="col-6 py-2">Lingüística General</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17OAlYmd_PufpX45Ifp4mCnPYrNWao1J8/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Lengua y Literatura Griegas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UZMtOUnpTXvLJuSzP7hdb3_hKxpsp0Av/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Literatura Española I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19_ojhobALXEArDZfJEsZ8VFtJlshWEdm/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Gramática II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1BMwlAC-El-hU-YWYSYpL54CxfSMQdH9a/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1i1cxQsR3XcinYJVQpiXDXm7iz8Wq1qx1/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
								
								<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
								<div class="col-6 py-2">Sociolingüística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1gOpZK5NZw2_joIeDFgEQrVJeAvDrNCWK/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Lengua y Literatura Latinas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LJy17Xd-OVooytZ6aQMUjAn4x6SVyXCU/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Literatura Española II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LsRFDRH__khuZNsZxP_UKDI3O8RqUdwv/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Teoría y Análisis Literario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dNWoXpga3BNyKgDN0OTxraPhfB-rj9ux/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Gramática III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1t9GZKHbb5vjFjb-jsPnBSDzXxY-hS1O0/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Literatura Latinoamericana I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DCNA6T8JXKsleBUDFKGD6Y7LzOLFIQVC/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dnoHNn6QQ_F9mMrwVTerCs5c_pE4S5mM/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
								
								<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
								<div class="col-6 py-2">Literatura en Lenguas Romances</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1BqQbA5jhR4gKrBbo0aZ4_GepQ6UC6Q-2/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Literatura Latinoamericana II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZemkEW3h-BKt9Hq8kdHeW3FYW3H3coIX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Práctica I: Didáctica de la Lengua y la Literatura</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10E1vq25VHbXeHvySvcFJBTKUGUTEye0P/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Literatura en Lenguas Anglosajonas y Germánicas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Xx-77_zaBGO1mctSr9_snwl6lPRnCPPk/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Literatura Argentina I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1abAbd69jT-uZWzNc8Zh43GyGbnkdIG2r/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Taller II: Escritura Académica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ndDGVzewWPC-1C_LoPiZRbApWKPnZeSh/view?usp=sharing" target="_blank">Descargar Programa</a></div>    

								<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
								<div class="col-6 py-2">Literatura Argentina II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ctP0flK_JeIq4mn7TqFbGMnCR1rejPFX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Historia de la Lengua</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bfkkctLEfXhkC9nVhplDCWfIh0a8ejA9/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Práctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MjnyWga8jT2M4n2tNrFhNvg0SCaIRNCV/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Política y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1QvJEy5wlGsHfzYDKxIvStNEPtPViz0K4/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
								<div class="col-6 py-2">Seminario de Literatura Regional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tyqnvrBEv56NAvkkxvBvSa3RpPGK0x-w/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">Práctica III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Y3ooCrCg2thkHFaw0Izlc7XSbWZ4J9re/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								
								<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
								<div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1stECcURP4uXSdtWnDJf0sM2m57GuGsbs/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KP0f-J4st2ls7YCsMlHXiNjBfTZkPM6j/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">III Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1L1lSsMb9iiliiaTmOnoZH84jNGgFcdqy/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fJQCsCpD8M9bK0i3wyozOXPTUnCF6w5M/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11BY1exqSJk4UiefqwY5LUBF57Fg7AfM2/view?usp=sharing" target="_blank">Descargar Programa</a></div>
								<div class="col-6 py-2">III Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1V8Uh7FU8SLi-g-mkF6VZrRLJcn6HL5vn/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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