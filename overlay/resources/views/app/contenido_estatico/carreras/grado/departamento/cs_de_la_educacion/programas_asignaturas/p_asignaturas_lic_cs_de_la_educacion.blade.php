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
							<span><a href="#">Departamentos <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="#">Carreras <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="#">Grado <i class='fa fa-angle-right'></i></a></span>                            
                            <span>
                                <a href="{{route('carreras.grado.departamento.ciencias-educacion')}}">Ciencias de la Educación <i class='fa fa-angle-right'></i></a>
                            </span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.cs_de_la_educacion.carrera_lic_en_cs_de_la_educacion')}}">Licenciatura en Ciencias de la Educación <i class='fa fa-angle-right'></i></a>
                            </span>
                            <span class="b-active">Programa de Asignaturas</span>
                    </p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>
<!--Inicio Contenido-->
<div class="container  mb-4">
    <div class="row border border-dark">
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-0">Primer Año</div>
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RiYcY4aasb_azG9WF23D6p59dFbLo1n4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rEOZbJSdFFVqLJAO8ZZOh81rbZ-eo1I3/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Sociología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1y3gmDT2TWJWp_8xBecA7WeQ-3L12rzfS/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1t8P2wSB9UtiDeyk9ZxFf4bIHB1kzdMLc/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Fundamentos Biológicos del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1gcfkqlVpajRbjN0BqDHR-lU138ZDkhlc/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12RmIhdnf8Pxyumj6T1Tpg1f5WPecpeUi/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Psicología I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sWuplYiBlQDg04aPDogRNDshChIAfZGc/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Historia General de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11y6fZALa2vYYZS5BBYjxt4FffxiJUqRL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1G_QGbd3s22b2_QSvqbmj2HKln_B9cuoC/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Psicología II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12_DX93cgxzrBwc8FqXwxCNZzgaAa4Qu-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica I - Teorías de la Enseñanza</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MehIxcpPH8u9wnVP1OcfggJmG9o2HlBb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia de la Educación Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1G3xVq2GknscjabS4QC7ELiZozkUj4dTp/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Organización y Administración Educacional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CNBKKVGhGBVDvFlQVC8LYyAMjbzY51vk/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11FMalxCJzSt068DzwUMkELEI3u99PczN/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Didáctica II - Teorías del Currículo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1oAbHK5m6uE9b1VYtDW9-KrwgzHnmoZIq/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Epistemología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sV46CdkQglsfqg8QYbkqRFltUjss71Ji/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Política Educacional y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bx9bsl3MIh8gM5Hnv81npKXtFfgPEErR/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
    <div class="col-6 py-2">Sociología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1l6yLw7TM7EBV-SlOfjoCuIEEkMmZhtnB/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica de Nivel Inicial y del Nivel Primario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18OicVyzq6yBkIFomh6SwjhLzTCgttg-E/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Filosofía de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1C90dLdjeI4vurolwAh-LqSsLDaHoK5fK/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14jZ3YLdrgncw1AWnPlwwrls_sNpKAiWu/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Educación Especial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sTl9Fy5j1pRf6SAfa_SfeJVH3aUxfDpi/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica del Nivel Secundario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IGIMg43OhrkySBukFTbUm-VD-QYZqsei/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Metodología de la Investigación Socio Educativa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xmPn7L9AQWD-n9jzuQ2y9mGJ-ji_DcFB/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica del Nivel Superior</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1QdSBfoQAAoI0_y2EcQHZVvQw5lV6P2Xc/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Metodología de la Investigación Socio Educativa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CElq1UQE5_8IJGdHjFZsxRAldH1rqolE/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1gelvcW44X47OhkeAYnqrBi29NAgmVf-j/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vc-nyFf9IxZsY6guNJ4WZkH_YH3yVZeb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
    <div class="col-6 py-2">Seminario de Análisis Institucional </div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EGj_oj0wAfFM3NuNbl6q9_ED6n6-My9D/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Taller de Elaboración de Trabajo Final</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1PPmOTiQtwSTL7cx7Qs7dV4fh35MpbJDA/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Teorías Educativas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1G9Y4QGoZSqXRM7ZME643LDumHzYmE5Lq/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1B5e1o5INKEWe0uDO2KFIPBBx-VBsQ-9t/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I La Educación a Distancia en la Universidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Ze9HzM6D8Fq7TSg-wF8E8HvQsk7fpkUM/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional II: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18ct-svfd_6PsgC6ffVJ_WQXpuykshLyN/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional II: La Educación a Distancia en la Universidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1cZ0QheZIdaC1H1fGJk85xpH3Bu6mPk3M/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I: Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1d-HT0lc5wX1eeBJ5d2uayzF46-KxjSqF/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Actividad Curricular Opcional II: Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SKf4z9B36x8Qzun4yvGkSE3t7vxliQ9x/view?usp=sharing#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I: Saberes y Practicas Vinculadas al Campo Profesional del Cientista de la Educacion</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Hp7VYlkMmH6z_7O3i_V7xTGEb8ip1nCl/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional II: Saberes y Practicas Vinculadas al Campo Profesional del Cientista de la Educacion</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10hw5JMmkq2ajwZvf9CR9ArjcmS_d6A2P/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
    <div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Sh_E5M2XJ67_7r0CtAe5tQ2csQRVtjvA/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1V35Z3sginspFhgbSQGGjZZfNzPsY_fcw/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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