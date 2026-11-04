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
                                <a href="{{route('carreras.grado.departamento.letras')}}">Letras</a> <i class='fa fa-angle-right text-primary'></i>
                            </span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.letras.carrera_prof_en_letras')}}">Profesorado en Letras</a> <i class='fa fa-angle-right text-primary'></i>
                            </span>							
                            <span class="b-active">Programa Asignaturas</span>
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
    <div class="col-6 py-2">Historia de la Lengua</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/15a9D9uArE408SsaWCYxMSPTFmbIW7eoL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura Argentina II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1K_4uyusWqktRkR9JKRrhO0MySgm1JzsT/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_RkA6b9DpEX0rOP063lX6-5NdJWFdmUe/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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