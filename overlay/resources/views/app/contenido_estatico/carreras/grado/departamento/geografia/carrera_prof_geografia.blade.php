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
                            <span class="b-active">Profesorado en Geografía</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Profesorado en Geografía</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profesorado en Geografía</a>
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
							<img src="../slim/planes-estudio-images/prof_geografia.png" class="img-fluid p-1" alt="Profesorado en Geografía"  style="height: 700px" >
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
							Profesor/a en Geografía
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
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2009_232_OWH7qtS.pdf" target="_blank">Descargar</a>
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br>
					La/el graduada/o del Profesorado en Geografía será capaz de:
					<ul>
						<li>Desarrollar estrategias de enseñanza y de aprendizaje basadas en el conocimiento de la Geografía, a partir de la articulación entre la formación profesional y la realidad socio- educativa en la que se encuentra inserto el egresado;</li>
						<li>Concretar proyectos de investigación educativa en el marco de la ciencia geográfica y de las ciencias sociales;</li>
						<li>Abordar el análisis del espacio geográfico en forma integrada, teniendo en cuenta la interacción de elementos constitutivos socio-territoriales;</li>
						<li>Ejercer como profesional critico y comprometido con la problemática social y con destinatarios sujetos de derecho, orientando su acción a la formación integral y a la comprensión de las manifestaciones espaciales de los procesos sociales</li>
					</ul>
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Título</b><br>
					<ul>
						<li>Diseñar, planificar, coordinar y evaluar procesos de enseñanza y aprendizaje de la Geografía en los diferentes niveles del Sistema Educativo (nivel secundario, terciario y universitario).</li>
						<li>Diseñar, planificar, coordinar y evaluar proyectos institucionales de enseñanza y de aprendizaje en Geografía y su área de conocimiento, en los diferentes niveles del Sistema Educativo.</li>
						<li>Diseñar, planificar, conducir y evaluar proyectos de investigación educativa y disciplinar en Geografía.</li>
						<li>Coordinar, participar e intervenir en equipos de investigación y/o extensión interdisciplinarios.</li>
					</ul>
				</p>				
			</div>
            <!--Tab Alcances-->

            <!--Tab Programa de Asignaturas-->
			<div class="tab-pane fade" id="v-pills-asignaturas" role="tabpanel" aria-labelledby="v-pills-asignaturas-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Programa de Asignaturas</b>
                    <!--Programa de Asignaturas-->
					<div class="container  mb-4">
						<div class="row border border-dark mx-1" style="font-size: 0.9rem">
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-0">Primer Año</div>
							<div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-_LmO1Nv6aGgsjIMwIwa864iS5m-AKcj/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Introducción a la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UH-SWiBYlqO5KcDaLdQrLMfz0R-1bDnq/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Técnicas en Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vTLBrqh3BZVBwh_AqtElgkxqToUcTFf-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Psicología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tkEIcErGBhbQWJa7YG8a8dh9sZYDQlgS/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							<div class="col-6 py-2">Geología y Geomorfología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NpZdAsQi4NUf1FCth8E0Fra0nNwfNyn-/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							<div class="col-6 py-2">Climatología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16vqj99UWx2kbJjoXVavWqba4VXZbKrtQ/view?usp=sharing" target="_blank">Descargar Programa</a></div>        

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
							<div class="col-6 py-2">Fundamentos de Economía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1v5VB0TIM2uvgfhs4SVUudKOX671MV9P1/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Fundamentos de Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KX5q6h9wrSt6SDiUqIf8j6uT7QFb0Y4G/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Biogeografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1XnqE9ZFPVq5EGriAibLEXC5sOb9nwD6i/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_VM7x2cHWFg1JCvRH_CqAz7g88UB4fj9/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Fundamentos de Sociología y Ciencia Política</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sQ6hZpZDFFJ6PktLgWovnBcupacsDK-V/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Hidrología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1lU4T3q6Lr-R00rH1IfA3GWJFSUQmPxYD/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía de la Población</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Ea7LhPljbEwnBqfLrgElts1W1qyuugzT/view?usp=sharing" target="_blank">Descargar Programa</a></div>

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
							<div class="col-6 py-2">Historia del Siglo XX</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12aKPSsbx6b_Z11TfnKQ2oWrNIZu7HIpY/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía Urbana</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EmfcWDiGIhbinkjrWAxSpM_M1NJv8-nl/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Epistemología de la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bx1kcGQXkNzqY0ENdLXlZJTQ71zOL75J/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1f8WH79GL-hhSbGpbNyzAImBPO1AUSDau/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
							<div class="col-6 py-2">Historia Argentina Contemporánea (1853-2000)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WBsqHtI1t86xMkUUkMkJX2EaAumNYlA2/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
							<div class="col-6 py-2">Geografía Política y Económica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RsSlPNubhJgUluTujNtMQM9Q5ENPFPVL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía Rural</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Pt2q3NdG7hjNMRDpRs14Qy78yz4Z5y9q/view?usp=sharing" target="_blank">Descargar Programa</a></div>

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
							<div class="col-6 py-2">Geografía de América Latina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pEPVKKvSFLf3I0oydcreiwbdGVICNOEf/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía de Europa y Oceanía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JmJmUm2bP8qivjioQLXndeoygOg7TWPO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía de Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1h66BqO0B6M4RR87Iqgu544GjdoQs2wwE/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Política y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1N5VH0zt7wC6oxiq3fyLFLqNHWVyIZD8U/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Didáctica Especial de la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/119VeijP6yijldVCr8JH2Lqu3snRHJaE8/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía de América Anglosajona</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1TD1ijth0K4q49bAMI0rsCOYXr6OVw7N3/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
							<div class="col-6 py-2">Geografía de Asia y Africa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Xd1T_OV_9BKEU26Z9ge0guD8qtjndyhi/view?usp=sharing" target="_blank">Descargar Programa</a></div>    

							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
							<div class="col-6 py-2">Residencia Docente</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vOQCm57atfPJnY2obWiitazM88EA847q/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Geografía de La Pampa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17XE0b97zIFfNwDk8MM65Kr-uLsuVp37M/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">Metodología de la Investigación Geográfica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZRrLxfXuQc2JvxjSuzlMSheqQMagor5A/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							
							<div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Niveles de Idioma</div>
							<div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1n7pij5tO3ETHcJs66NsGiN-c7_vsEKCP/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZAioitDMv150iG1jIDW0Z9INGG3HT20p/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">III Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LIHwwGn671girXH37w_WFv5QNwp0-zgD/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SePzZBc560FE9SO5D9mk3_dbe65gJW26/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1328tvkPLUI9FTRz4tAiSNYVEBcqghJxA/view?usp=sharing" target="_blank">Descargar Programa</a></div>
							<div class="col-6 py-2">III Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Kk60IEeCww-tmd8yxz--A2mLDhoaGGaF/view?usp=sharing" target="_blank">Descargar Programa</a></div>       
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