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
                            <span class="b-active">Profesorado de Nivel Secundario en Lengua y Literatura</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Profesorado de Nivel Secundario en Lengua y Literatura</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-info-tab" data-toggle="pill" href="#v-pills-info" role="tab" aria-controls="v-pills-info" aria-selected="true">Información General</a>			
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

            <!--Tab Información General-->
			<div class="tab-pane fade show active" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">
				<div class="container">
					<div class="row">

						<!--Título-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Título</div>
						<div class="col-7 py-2">
							Profesor/a de Nivel Secundario en Lengua y Literatura
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
							G. Pico y G. Acha
                        </div>

                        <!--Cohorte-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Carrera por el término de</div>
						<div class="col-7 py-2">
                            1 (cohorte)
                        </div>
						
                        <!--Año-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Año</div>
						<div class="col-7 py-2">
                            2018
                        </div>						

                        <!--Plan de Estudios-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Plan de estudios</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2017_21.pdf" target="_blank">Descargar</a>
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br>
                    El/la graduado/a de la carrera Profesorado de Nivel Secundario en Lengua y Literatura es un profesional cuyas competencias comprenden:
                    <ol type="a">
                        <li>Respecto de la disciplina</li>
                            <li>Un saber disciplinar relativo a los campos del conocimiento de la Lingüística, la Literatura y otros discursos.</li>
                            <li>El conocimiento del sistema de la lengua española en sus niveles y funciones y de las principales teorías y modelos que configuran el panorama actual de las Ciencias del Lenguaje.</li>
                            <li>El conocimiento de las literaturas regionales, nacionales, latinoamericanas, clásicas, en otras lenguas y sus contextos.</li>
                            <li>El conocimiento de la teoría literaria, el análisis de textos y la crítica que vincula el texto literario con su contexto social e histórico.</li>
                            <li>La capacidad para el diseño, planificación y elaboración de estrategias pedagógicas e institucionales y la evaluación e investigación acerca de propuestas de enseñanza y aprendizaje de lengua y literatura.</li>
                        <li>Respecto de la enseñanza y el aprendizaje</li>
                            <ul>
                                <li>El conocimiento de las teorías sobre los procesos de adquisición y desarrollo del lenguaje y las estrategias para su enseñanza mediante una adecuada transposición didáctica.</li>
                                <li>El conocimiento de los sujetos, adolescentes, jóvenes y adultos, que interactúan en el ámbito educativo, en particular, en el nivel secundario.</li>
                                <li>El conocimiento de las estrategias para la promoción, intervención y desarrollo de actividades no formales y comunitarias vinculadas con el área de la Lengua y la Literatura.</li>
                            </ul> 
                    </ol>					

				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Título</b><br>
                    <ul>
                        <li>Diseñar, planificar, gestionar y evaluar procesos de enseñanza y de aprendizaje de Lengua y Literatura, con incumbencia en el nivel secundario.</li>
                        <li>Diseñar, planificar, coordinar, ejecutar y evaluar proyectos institucionales de enseñanza y aprendizaje de la Lengua y la Literatura.</li>
                        <li>Diseñar, planificar, coordinar, ejecutar y evaluar programas y proyectos en ámbitos relativos a la promoción cultural, la transferencia en ámbitos de la educación comunitaria y la asesoría en la planificación lingüística, educativa y cultural.</li>
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
							<div class="col-6 py-2 bg-light font-weight-bold border border-dark border-right-0 border-left-0  border-top-0">Asignatura</div>
							<div class="col-3 py-2 font-weight-bold bg-light border border-dark border-right-0 border-left-0  border-top-0">Sede G. Acha</div>
							<div class="col-3 py-2 font-weight-bold bg-light border border-dark border-right-0 border-left-0  border-top-0">Sede G. Pico</div>
							
							<div class="col-6 py-2">Psicología Educativa</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1IEoZyjJPgDbq3aQp025md4bwQ_xm2zF_/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1zs4l-4T5etYsH8bhNoWtQ4VXDRGCPQMz/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    
							
							<div class="col-6 py-2">Taller de Prácticas Comunicativas Escritas y Orales I</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1KMaLpn28zIwVkB4b7-MD0L6iMONWKwlC/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1K3ZVBtNnDs2DHASHlxKrMrNVkhtiRjOD/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    
							
							<div class="col-6 py-2">Panorama y Contexto de Tendencias Estéticas</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1kc9Y99t-_CMGaMm81mpF-KQ5o7ZFjmwV/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/11KaOBNBKpp2J8q-M-CiWMq1n9Ol3_sHw/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Problemas Filosóficos</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/10mq4FQx9DWmtJgmLWqKJTrongk0BDv8k/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1BqsYMw3E9BKLxrpqvMkZt42GG-kP6YxO/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Gramática del Español I</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1VaZenJ8jc0MzIRiE8Kx8S1R92h2v2juU/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1yE1CoP220PWJPgRzMIuu8gmYCm6FowC6/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Introducción a la Literatura</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1TxgGZdg98hqenrXByeQ9Gw9rXHtN8ifJ/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1gtUUd_JjvJi6jGJdsnMcxeYK9x7kg-CT/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Práctica I: Sujetos de la Educación</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1EzYjaHMt9ipbXEUNKMkrbab4ibcQQhsV/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1BSYbmwrUKKwRgAIF1j2IEiJ1U_OsBwYu/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    
							
							<div class="col-6 py-2">Pedagogía</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1HRMn8fgfjHPME1yu34oWZMLD2Z97AVpv/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1XFamSX4-2v6Ho0K_wPoeJ4Iy_9fpbz-0/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>            

							<!--Segundo Año -->
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
							<div class="col-6 py-2">Culturas y Tradiciones Literarias</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1Nbh2dZHVnjuoN1v-WBzf90Jr1Dyu06YL/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1Bvtln4m6jCN-duPtJkyY8JW35UmHEHKK/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Gramática del Español II</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1hjHvFaRvB54F_PPIRM6GXM2m-tOVbsmE/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/19kmmQamNXbPZwk2Uss6-TuN3TAoSqSDQ/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Lingüística General</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1VY6ionynMYRu9udvswJ-LK9YmxYoWhZO/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1tyeQ9_8fZ54geefA_ez-pR-cCaEdzHsy/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Taller de Prácticas Comunicativas Escritas y Orales II</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1KbZ291OK-fwamKATPjeGMh_C1_YlWUYR/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1aw7w2ElSSwBz-bgBhXb5UjiT5ibV2T2-/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Literatura en Lenguas Romances</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1sq-m1nq2SLS3YQPfsJ7Cn2GbOR4ythzQ/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1AEmtcg8F6mRfUXgAmLPG_UtT7P6zRcXo/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Gramática del Español III</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/15DrMKA8OB8zku3VsMNe0wjsWosDueMqM/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1Xlf_wC77xBmwuZ6Sr7EAmfznU82m5-BM/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Teoría Literaria</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1Sz5t7mWwHVkaOs6R9AZhUeJY7j5jVawq/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1JW9N0bEoM3axHq7Uh-hC_rEwNLLa4SBV/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Didáctica General</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1m74vUlhOYbm2C18T0uTO5AxzTdihNyD6/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1G8XyOShnOYA691tq4PmrOI9rx_alLQ-e/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Práctica II: Curriculum y Enseñanza</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1VBuSIE5eSykUGq2fDjbWUGEMSeX7T49s/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1zZv_L9A4rXmXVAtZsx2P75Ej1gtQKgVT/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>

							<!-- Tercer Año -->
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
							<div class="col-6 py-2">Sociolingüística</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1lAy71mRGmi_a01gCsgeJGGkfixKZi-XU/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1X6MLW4-pst-PHIxtXZy23SOPyMJFACJE/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Didáctica de la Lengua y la Literatura I</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/19h-dskmGDUuRFKjYh63y7_mha1rqWw5U/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1R3wEThxkmOJ_AzwrFlq9LEv0DKi-AlSt/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>        

							<div class="col-6 py-2">Historia Latinoamericana y Argentina</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/10nPzudub5s7ojMS5rqT38f2QNcXix8os/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1p9yJYJPs-6GaF0azOyIJTkvWpM0Ix-C3/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Literatura Latinoamericana I</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1ieDb09ZaE31XTQAve2BXTPQtzTltrsp7/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1vbv_ztvmcUX34WjKQb_1EMUmaJulhZks/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Literatura en Lenguas Anglosajonas Germanas y Eslavas</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1ruKLG2WIl1ewAU8keCKzuM1cZaBChk2i/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1F_qDBcR4fbCsAp3f2iXpDCNFQuljfOsb/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Didáctica de la Lengua y la Literatura II</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1l0AcUdd2RBoHEmDBf3QNGoWcL1K8FRjv/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1o9K7U2KNPK-UJQd-qgmOlfCXgPWtVY5J/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>

							<div class="col-6 py-2">Taller de Escritura Creativa y Animación Cultural</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1m4uiipBMeCPOBhftJGHTkGtLAMeYUrSU/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1zSA36YyTh4McHsSqhFLdswjk1Wu7YiAP/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>
							<div class="col-6 py-2">Práctica III: Instituciones y Contextos</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/14NRWCPaUTfqBAvVzTQyb8UH9F1laMwZ_/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1iMquEE_9uk8kWlVIy-SKNoeBFgNeYbLq/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    
							
							<!-- Cuarto Año -->
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
							
							<div class="col-6 py-2">Literatura Española</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1vseR4RaxBnrnCR8vcAv6YTD2DD3LZ9Gz/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1A8cxEVwQjEhYe-SOK8NeJi1x4MDTHZia/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>    

							<div class="col-6 py-2">Literatura Latinoamericana II</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1l_j0af6LX8Fwq71IYSgdo9x1OYVIQflD/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1S4jMeaHM4zjCc6kykSkqUMq6gFL7zCvW/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>
							
							<div class="col-6 py-2">Residencia I Ciclo Basico de la Ed. Secundaria</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1U-iqSP2VcyugP0QT8diSJ-NmOsTxJqzF/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1ZWH__aDZ-asWCyTevna12EC-9lIbWAYE/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>
							
							<div class="col-6 py-2">Literatura Argentina I</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1bLQS54koo7EgjbFqtAhou_263gZsnwgE/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1IXpB_bDO9iUaEVXARtahDydVkdxOHJgg/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div> 

							<div class="col-6 py-2">Política y Legislación Escolar</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1ReHgFqyKJUE4l-hmu0_cG-bIVxJ4GpiQ/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1NvXJdgNstoN8qt0pbnS02loZHaLxYCN7/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>

							<div class="col-6 py-2">Literatura Regional</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1MFZ7q5StjLtLAmxxASRzOscFjAKE1FVx/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/18alidMHYTAgYANHGPaw_OCWXUb3EDTU-/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>

							<div class="col-6 py-2">Literatura Argentina II</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1JfQCFTmEyQyLTb_U3S4Nnp7DO066MlBs/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1rYq-wX6YlAinmLL9zDAla50-ESX_72Ji/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>

							<div class="col-6 py-2">Residencia II Ciclo Orientado de la Ed. Secundaria</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1K35oB1zpz7sSdYjsrT8BLku9xsqpKfUH/view?usp=sharing">Descargar</a><!--G. Acha -->
							</div>
							<div class="col-3 py-2">
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/1rC3uTC6vMnyZVEZ7YIJaQ32g7OZjb3O9/view?usp=sharing">Descargar</a><!--G. Pico -->
							</div>
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