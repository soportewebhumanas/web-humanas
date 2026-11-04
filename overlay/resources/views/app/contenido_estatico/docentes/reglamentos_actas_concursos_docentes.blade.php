@extends('app.slim.layouts.home')

@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text pt-3">
					<p>
						<span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                        <span><a href="{{route('docentes.inicio')}}">Docentes <i class='fa fa-angle-right'></i></a></span>
                        <span class="b-active pb-0">Reglamentos y Normativas</span>
                    </p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
	<style>
		.accordion .card-header:after {
			font-family: 'FontAwesome';  
			content: "\f0aa";
			float: right;
			color: black;
		}
		.accordion .card-header.collapsed:after {
			/* symbol for "collapsed" panels */
			content: "\f0ab";
			color: black;
		}
	</style>	
</header>
<section class="contact-area-02">
	<div class="container">
		
		<div class="row pb-4">
			<h3 class="pt-0 pl-3">Reglamentos y Normativas</h3>
		</div>
		
		<!-- Actividades Concluidas -->
		<div class="row pb-4">				
			<div class="col-12">

						




                <!-- Reglamento de Académico -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item04" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Reglamento Académico de la Facultad de Ciencias Humanas
							</a>
						</div>
						<div id="item04" class="card-body collapse text-justify" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2025_106.pdf" target="_blank">Ordenanza Nº 106-CD-25 - Reglamento Académico de la Facultad de Ciencias Humanas</a><br>
						</div>
				<!-- Reglamento de Académico -->

                <!-- Reglamento de Concursos -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item4" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Reglamento de Concursos de Profesores y Docentes Auxiliares Regulares
							</a>
						</div>
						<div id="item4" class="card-body collapse text-justify" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2019_171.pdf" target="_blank">Resolución Nº 171-CS-19 - Cuerpo de Disp. que regulan el Mecanismo de Incorporación a Carrera Docente</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2023_51.pdf" target="_blank">Resolución Nº 51-CS-23 -Reglamento de Concursos para la Docencia Universitaria de la UNLPam</a><br>
							
						</div>
				<!-- Reglamento de Concursos -->

                <!-- Reglamento Entrevista personal y Clase Pública -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item5" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
                                Reglamento Entrevista Personal y Clase Pública
							</a>
						</div>
						<div id="item5" class="card-body collapse text-justify" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-pZzP5h9zt1ZGliS7-tgcr9Y2q_rR3lI/view?usp=sharing" target="_blank">Ordenanza 090-CD-21 - Pautas complementarias al Reglamento de entrevista personal y clase pública para los concursos de Profesores y Docentes Auxiliares regulares de la Facultad de Ciencias Humanas</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1r6UK6myLtYaoHkJrWV0wR2A31qFVz6c8/view?usp=sharing" target="_blank">Resolución - 245-CS-11 - Reglamento de entrevista personal y clase pública  para los concursos de Profesores y Docentes Auxiliares regulares de la Facultad de Ciencias Humanas</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2022_93.pdf" target="_blank">Ordenanza 093-CD-22 - Modificación de los Artículos 6º y 7º de la Ordenanza Nº 090- CD-21</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14WlRd5EqjWPXEBp9nfNdLJN5_V-NdjIl/view?usp=sharing" target="_blank">Resolución 220-CS-23 - Reglamento de entrevista personal y clase pública para la Docencia Universitaria regular</a><br>
						</div>
				<!-- Reglamento Entrevista personal y Clase Pública -->				

                <!-- Reglamento General de Carrera Docente de la Universidad Nacional de La Pampa -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item40" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Reglamento General de Carrera Docente de la Universidad Nacional de La Pampa
							</a>
						</div>
						<div id="item40" class="card-body collapse text-justify" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1l1RxkMPJFVPYQjhCB7rgemJYBE7uMhMX/view?usp=drive_link" target="_blank">Resolución Nº 500-CS-23 - Reglamento General de Carrera Docente de la Universidad Nacional de La Pampa</a><br>
							
						</div>
                <!-- Reglamento General de Carrera Docente de la Universidad Nacional de La Pampa -->

                <!-- Reglamento de carreras de posgrado de la Facultad de Ciencias Humanas -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item33" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
                                Reglamento de seminarios de posgrado de la Facultad de Ciencias Humanas
							</a>
						</div>
						<div id="item33" class="card-body collapse text-justify" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2009_51.pdf" target="_blank">Reglamento de seminarios de posgrado de la Facultad de Ciencias Humanas</a><br>
						</div>
				<!-- Reglamento de carreras de posgrado de la Facultad de Ciencias Humanas -->


                <!-- Plan de Actividades -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item6" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
                                Plan de Actividades
							</a>
						</div>
						<div id="item6" class="card-body collapse text-justify" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_AtCzprLu0-RL1HDkVJCo6q6To1hNji6/view?usp=sharing" target="_blank">Formulario - Resolución Nº 405-CS-2014 - Descargar Plan de Actividades</a><br>
							<i class="fa fa-file-word-o text-primary" aria-hidden="true"></i> <a href="../../slim/docs/Plan_de_actividades.doc" download>Formulario - Resolución Nº 405-CS-2014 - Descargar Plan de Actividades</a><br>
						</div>
				<!-- Plan de Actividades -->

                <!-- Pautas para el Desarrollo de la Investigación -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item8" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
                                Informe del Grado de Cumplimiento del Plan de Actividades
							</a>
						</div>
						<div id="item8" class="card-body collapse text-justify" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-ps-uVW8_7ULEwm3zPyG4iypCizawKcB/view?usp=sharing" target="_blank">Formulario - Anexo III Res. Nº 405-CS-2014 - Descargar Informe del Grado de Cumplimiento del Plan de Actividades</a><br>
							<i class="fa fa-file-word-o text-primary" aria-hidden="true"></i> <a href="../../slim/docs/Informe_de_Cumplimiento.doc" download>Formulario - Anexo III Res. Nº 405-CS-2014 - Descargar Informe del Grado de Cumplimiento del Plan de Actividades</a><br>
						</div>
				<!-- Pautas para el Desarrollo de la Investigación -->				

                <!-- Reglamentos Selecciones de Antecedentes cargos Interinos -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item004" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Reglamentos Selecciones de Antecedentes cargos Interinos
							</a>
						</div>
						<div id="item004" class="card-body collapse text-justify" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2015_76.pdf" target="_blank">Ordenanza N° 76-CD-2015 - Reglamento Selección de Docentes Interinos FCH</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2003_178_Um9YoZd.pdf" target="_blank">Resolución N° 178-CS-2003 - Reglamento para la selección de Aspirantes a cubrir Cargos Docentes Interinos</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2021_369.pdf" target="_blank">Resolución N° 369-CD-2021 - Suspensión de la aplicación del Artículo 7° de la Ordenanza N° 076-CD-2015 para aspirantes a Ayudantes de Primera en Carreras a Término</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2026_286.pdf" target="_blank">Resolución N° 286-CD-2026 - Incorporación Arículo 7º Bis - Ordenanza N° 076-CD-2015</a><br>
						</div>
				<!-- Reglamentos Selecciones de Antecedentes cargos Interinos -->
				
                <!-- Pautas para el Desarrollo de la Investigación -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item7" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
                                Pautas para el Desarrollo de la Investigación
							</a>
						</div>
						<div id="item7" class="card-body collapse text-justify" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-T7wzedUIasLwdAl3BZTwInpThcACX_o/view?usp=sharing" target="_blank">Ordenanza Nº 25 - Reglamento - Pautas para el Desarrollo de la Investigación</a><br>
						</div>
				<!-- Pautas para el Desarrollo de la Investigación -->

				<!-- Pautas para el trámite y desarrollo organizativo de las actividades extracurriculares de Grado y Posgrado y las actividades curriculares de Posgrado -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item9" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Pautas para el desarrollo de actividades extracurriculares
							</a>
						</div>
						<div id="item9" class="card-body collapse text-justify" data-parent="#accordion">
							<!--<i class="fas fa-file-pdf text-danger"></i> <a class="ml-2" href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_532.pdf" target="_blank">Pautas para el desarrollo de actividades extracurriculares</a><br>-->
							<i class="fas fa-file-pdf text-danger"></i> <a class="ml-2" href="https://drive.google.com/file/d/1IT-f2ykI4tOSO5-mOv1eGovN9Yt_Yy72/view?usp=drive_link" target="_blank">Pautas para el desarrollo de actividades extracurriculares</a><br>
						</div>
				<!-- Pautas para el trámite y desarrollo organizativo de las actividades extracurriculares de Grado y Posgrado y las actividades curriculares de Posgrado -->
				
				<!-- Manual de Identidad Visual -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item10" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Identidad Visual
							</a>
						</div>
						<div id="item10" class="card-body collapse text-justify" data-parent="#accordion">
							<!--<i class="fas fa-file-pdf text-danger"></i> <a class="ml-2" href="https://drive.google.com/file/d/1rtrgG3O9Uvv0w6aMGzLzn3mfQfStfkPi/view?usp=drive_link" target="_blank">Manual de Identidad Visual Institucional 2025</a><br>-->
							<i class="fas fa-file-pdf text-danger"></i> <a class="ml-2" href="https://drive.google.com/file/d/1Cv2nZNlgVWj4ZHbUTrIP0jd3XC5DEqR3/view" target="_blank">Manual de Identidad Visual Institucional</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a class="ml-2" href="https://drive.google.com/file/d/1NAyQRTsxBvh3YjE9PB2fzILmNQd1jbny/view" target="_blank">Manual de Identidad Visual Institucional 2025</a><br>
							<i class="fa fa-folder-open" aria-hidden="true" style="color: #146C94"></i> <a class="ml-2" href="https://drive.google.com/drive/folders/1iBROWy1mjiUTxPUjsjlFpW-y_0i7GDQJ?usp=drive_link" target="_blank">Anexo Manual de Identidad Visual - Vectores</a><br>
						</div>
				<!-- Manual de Identidad Visual -->
				
				<!-- Programa Habitar Humanas -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item12" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Programa Habitar Humanas
							</a>
						</div>
						<div id="item12" class="card-body collapse text-justify" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a target="_blank" href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2022_435.pdf"> Programa Institucional “Habitar Humanas”</a>
						</div>
				<!-- Programa Habitar Humanas -->

				<!-- Régimen Especial de Cursado para Estudiantes -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item13" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Régimen Especial de Cursado para Estudiantes
							</a>
						</div>
						<div id="item13" class="card-body collapse text-justify" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a target="_blank" href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2023_381.pdf"> Régimen Especial de Cursado para Estudiantes con obligaciones laborales y/o con familiar/es</a>
						</div>
				<!-- Régimen Especial de Cursado para Estudiantes -->
				</div>				
			</div>
		</div>
		<!-- Actividades Concluidas -->
	</div>
</section>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
	$('body').addClass('contact');
});
</script>
@endsection

