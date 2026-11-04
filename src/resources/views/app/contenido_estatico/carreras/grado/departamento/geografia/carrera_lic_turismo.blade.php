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
                            <span class="b-active">Licenciatura en Turismo</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Licenciatura en Turismo</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-info-tab" data-toggle="pill" href="#v-pills-info" role="tab" aria-controls="v-pills-info" aria-selected="true">Información General</a>			
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Perfil</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Alcances de los Títulos</a>
            <a class="nav-link" id="v-pills-asignaturas-tab" data-toggle="pill" href="#v-pills-asignaturas" role="tab" aria-controls="v-pills-asignaturas" aria-selected="false">Programa de Asignaturas</a>
		</div>
		<!-- linea divisoria  en movil -->
		<div class="col-12 d-xl-none">
			<hr>
		</div>
		<!-- linea divisoria  en movil -->
		<div class="tab-content col-12 col-xl-8 col-lg-8 mb-5" id="v-pills-tabContent">

            <!--Tab Información General-->
			<div class="tab-pane fade show active" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">
				<div class="container">
					<div class="row">

						<!--Título-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Título</div>
						<div class="col-7 py-2">
                            Licenciado/a en Turismo
                        </div>

						<!--Título intermedio-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Título intermedio</div>
						<div class="col-7 py-2">
                            Guía Universitario/a en Turismo
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

						<!--Cohorte-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Carrera por el término de</div>
						<div class="col-7 py-2">
                            1 (una) cohorte
                        </div>
                        
						<!--Año-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Año</div>
						<div class="col-7 py-2">
                            2018
                        </div>                        
                        
                        <!--Sede-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Sede</div>
						<div class="col-7 py-2">
                            Santa Rosa
                        </div>

                        <!--Plan de Estudios-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Plan de estudios</div>
						<div class="col-7 py-2">
                            <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2011_325_DjemFQD.pdf" target="_blank">Descargar</a>
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br><br>
                    El/La Licenciado/a en Turismo será un/a profesional cuyas competencias comprenden:<br>
                    <ol type="a">
                        <li>El conocimiento científico-técnico para el desarrollo de investigaciones, programas, proyectos, tecnologías y formulación de políticas destinados a la actividad turística.</li>
                                <ul>
                                    <li>El conocimiento de los abordajes de la actividad turística desde una perspectiva amplia, articulando el saber científico y la práctica.</li>
                                </ul>                    
                        <li>el conocimiento de las problemáticas propias de la actividad a la luz de los marcos teóricos elaborados y consolidados para actuar sobre la realidad con un sentido crítico.<br></li>
                        <li>el conocimiento, aptitud y habilidad para intervenir en las distintas formas de la actividad turística que incluyen:</li>
                                <ol>
                                    <li>la planificación turística y<br> 
                                    <li>la gestión de las unidades productoras de servicios turísticos, tanto en el ámbito público, como en el privado o en organizaciones intermedias.</li>
                                </ol>
                        <li>El conocimiento de marketing estratégico y conducción de personal que permitan un adecuado asesoramiento en el ámbito estatal y/o privado.</li>
                    </ol>


                    
                    El/La Guía Universitario/a en Turismo será un/a profesional cuyas competencias comprenden:<br>
                    <ul>
                        <li>El conocimiento de los abordajes de la actividad turística con aplicación en ámbitos locales y regionales, articulando el saber científico con la práctica.</li>
                        <li>La capacidad de manejo de grupos de acuerdo a sus diversos intereses y edades.</li>
                        <li>El conocimiento y la capacidad de transmisión de valores respecto de la preservación del patrimonio natural y cultural de los ambientes turísticos.</li>
                    </ul>
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances de los Títulos</b><br><br>
                    Licenciado/a en Turismo:<br>
                    <ul>
                        <li>Dirigir e integrar equipos interdisciplinarios de investigación y consultoría en temas de su competencia profesional.</li>
                        <li>Planificar, formular, organizar, administrar, dirigir, coordinar y evaluar proyectos turísticos y recreacionales.</li>
                        <li>Administrar, planificar, organizar, coordinar, dirigir, controlar y ejecutar las actividades de gestión política operativa y gerencial en empresas prestadoras de servicios turísticos y en organismos de turismo públicos y/o privados.</li>
                        <li>Elaborar y ejecutar las políticas propias de su área dentro de la administración pública o la empresa privada de organización turística.</li>
                    </ul>
                    
                    Guía Universitario/a en Turismo:
                    <ul>
                        <li>Recepcionar, informar, coordinar, conducir y orientar a grupos de turistas de distintas procedencias y/o residentes en instituciones públicas y/o privadas.</li>
                        <li>Colaborar en actividades de administración, programación, promoción y gestión de servicios turísticos.</li>
                        <li>Relevar y producir información turística.</li>
                        <li>Participar en equipos interdisciplinarios en temas de su competencia profesional.</li>
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
                        <div class="col-6 py-2">Introducción al Turismo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13kKiW2yCdaacSB7vUESzqwDHuVPL_a2e/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Antropología Cultural</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_WWnl5j30Q-BZA4SG3oewZjaNUp748vL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Geografía del Turismo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1z9GiH96Xo4Qr7GEvjDd02AhXAOrEALgi/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Psicología Social y Manejo de Grupos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1haDcLQlEvdRb2Im-lhwy6GMpNBl2ftWV/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Fundamentos de Economía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UQe2ijKtajLO1enfZckKwgGhZsRkO6YR/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Patrimonio Natural y Cultural</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1jCVuaAUfNk7naxitgGxFDk0meiVdC-L4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Seminario de Recreación y Animación Turística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1AZnm5VVedksUSsb_9aviOhFaTCtxtRa1/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">I Nivel de Idioma I(Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LgC9C_5Lsc6tqAF5Fkbi8I9kD_HyCExe/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
                        
                        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
                        <div class="col-6 py-2">Geografía de América Latina y Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DY7jgAXyVY0q922I1Wm1Rlr61DFiGNej/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Historia de America Latina y Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ClVkxtZF3f9pU-qQBKG0SRW9gCFwd2h6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Historia del Arte Universal y Latinoamericano</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1TUwxKGBieyacYtRUwqpNF0MuJbqxUXRk/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">II Nivel de Idioma I (inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1leXSBjG9OeEanFbSap3s5E2SCSLfIFq4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Geografía de La Pampa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Historia de La Pampa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Práctica de Campo Integrada I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">I Nivel de Idioma II (Portugués)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>

                        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
                        <div class="col-6 py-2">Sociedad y Cultura de La Pampa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1br5S3dAwBCXWgnbmaZh7GowJAIhb8i55/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Seminario de Servicios Turísticos I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1cSlscCmyCnLXWutOn4M1gubEhXA2Zyg2/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Práctica de Campo Integrada II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10kEaB0Y0ZdFLGBMoD3jhRkAlb2ReVoUq/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">II Nivel de Idioma II (Portugués)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_gRZV2kmjHP5ZGC0cz1od-0jVFSNNbkG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Geografía de los Espacios Mundiales</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1VcoppNI0CYWitwbXQhgarJQeOVQtOdR7/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Derecho y Legislación Turística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Fhr-u-bLgbMvkqFFZxKqXTJdH3iBjpgM/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">III Nivel de Idioma I (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/149zdpmjtnMSAZSEKdi4kiFEcte3WvuYC/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">III Nivel de Idioma II (Portugués)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1K_G2ilTOAgUzFtYm9MmCgkypgCy0qnbp/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
                    
                        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
                        <div class="col-6 py-2">Elementos de Investigación Social</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1poqlVnfV0EiSQwUrLq9cPmeNJFpF6z7z/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Seminario de Servicios Turísticos II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pFMDyvR6Ybxw-E-ZlenGLqYwjoTdd1yK/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Informática aplicada al Turismo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1AY4uHOUj_RCF8xWZJhfBXbY0FGW5YzEl/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Seminario de Políticas Turísticas y Recreacionales</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vwPx8pDdIjSRKMG845AcKIEcCJtvlUid/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Seminario de Planificación Turística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1VjXvtb9SmN5vA41ky-s2HPvd74AU2_Q7/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Seminario de Administración y Gestión de Empresas Turísticas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1uEa6n01I_l-Nkgrq5t6Txsi9FzJLADtx/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Seminario de Formulación y Evaluación de Proyectos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_yre1Qfb8u3YtjLwPXM1WSfTJVQtISnz/view?usp=sharing" target="_blank">Descargar Programa</a></div>
                        <div class="col-6 py-2">Seminario Optativo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
                        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
                        <!--<div class="col-6 py-2">Pasantía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>-->
                        <div class="col-6 py-2">Taller de Trabajo Final</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1euelCSwZgz_DINiQKK2tkvJEJIlTDFep/view?usp=share_link" target="_blank">Descargar Programa</a></div>
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