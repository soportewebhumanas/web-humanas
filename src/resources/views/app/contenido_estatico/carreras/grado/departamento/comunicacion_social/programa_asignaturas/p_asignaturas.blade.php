@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text pt-2">
						<p>
                            <span>
                                <a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a>
                            </span>
							<span><a href="#">Departamentos <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="#">Carreras <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="#">Grado <i class='fa fa-angle-right'></i></a></span>                            
                            <span>
                                <a href="{{route('carreras.grado.departamento.comunicacion-social')}}">Comunicación Social <i class='fa fa-angle-right'></i></a>
                            </span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.comunicacion_social.carrera_com_social')}}">Licenciado/a en Comunicación Social <i class='fa fa-angle-right'></i></a>
                            </span>							                             
                            <span class="b-active">Programa de Asignaturas</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>
<!--Inicio Contenido-->
<!--Inicio Contenido-->
<div class="container  mb-4">
    <div class="row border border-dark">
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
    <div class="col-6 py-2">Seminario-Taller Electivo I - Comunicación Científica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rh-BZ7vupW_1N6hyjz8l4UAxSMLNYll_/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Taller de Produccíon Radiofónica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Brs4DixAizagNMnve2l2E9j3ChfLPdFG/view?usp=sharing" target="_blank">Descargar Programa</a></div>    


    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Derecho de la Comunicación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DqqciDyezwmwDJqG-2ErghYwGAttH8jl/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Metodología de la Investigación en Comunicación I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1js2GAmJHs3YP2QXCMxG9EWq3DYpNbap4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Taller de Análisis del Discurso y Crítica de Medios</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1C2lxq-F47I47zPMNhMwqcCv4MuwoTX3n/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Taller de Producción Audiovisual I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MdCnuspMGUceBrQp4F7KX7ZaP-Q7-6PK/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Introducción a la Planificación Comunicacional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1K8--1OB2B7Ctb4yTizPTNIPh-Q83iroX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Metodología de la Investigación en Comunicación II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CIuIXLPlNkoGxfVbTbPj_LJ8lwNOQkhj/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario-Taller Electivo II - Herramientas de Edición Fotográfica y Diseño</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1z9ugNaMF59WDuteqDMs10_Vjlp186tL7/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario-Taller Electivo II - Comunicación Científica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/163txTlyoHk1GJyu1vqEJWQXUKePYVjRM/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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
<!--Fin Contenido-->			

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