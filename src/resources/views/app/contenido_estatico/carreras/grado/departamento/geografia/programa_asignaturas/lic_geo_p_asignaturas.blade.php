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
                                <a href="{{route('carreras.grado.departamento.geografia')}}">Geografía <i class='fa fa-angle-right'></i></a>
                            </span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.geografia.carrera_lic_geografia')}}">Licenciatura en Geografía <i class='fa fa-angle-right'></i></a>
                            </span>							                             
                            <span class="b-active">Programa de Asignaturas</span></p>
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
    <div class="col-6 py-2">Introducción a la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UDxwyssjtzE1VeCVr9sTaPcghqpzLCB5/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SZJRar4uYHWz16fTCxVup0_QpvN9CVqr/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Técnicas en Geografía I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rw8zoeL8IG_MFEsTPUy2uxqAXVJ_DYw1/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Geología y Geomorfología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1FClWX7HpFewyuTYOcIdElnEEe3D6iPYD/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Climatología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14p0co1NqJbWMSji8MK2vdrVXI3XRkv_2/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
        
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Fundamentos de Economía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1V1KnWoN-XHszsm64WZbVwv573rI3XMba/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Fundamentos de Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zMr3Ota6cXQvvbmYWFxjlNMteDPXw_HM/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Biogeografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1H0WH7M4QaOzL477cddjKSSsTQVGUc9p1/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Técnicas en Geografía II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hTCcRq4Pqi9CvOOJV5e6uvd8EuqFrWd8/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Fundamentos de Sociología y Ciencia Política</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14VManIlwL5MXliws4EphDSOhQpfzh4KB/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Hidrología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1a9pk7SfUmeENsUfcADXdyRPIsbTtxodr/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Geografía de la Población</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16efFCCq-B6V674bhr1iXyfvJahrZRSJ9/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Sistemas de Información Geográfica y Teledetección</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fcanyoWDCDc_6-zI2uQdj_Q1DL622gye/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Historia del Siglo XX</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fLmcdA3PZ6JCJ_vaQp2Q51JJ2w4zApAa/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Geografía Urbana</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/175i-is7FytQQrOb0XGFTxOTHKhgdlSf6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Epistemología de la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_wxSrKSSLMzwMYc432JCCqMDpLdR5mzP/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Argentina Contemporánea (1853-2000)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xncvwz-gN8K-D7iIrR6QWWqKtFPaMLGW/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
    <div class="col-6 py-2">Geografía Rural</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zBQ8ik4UP8FqbwNxnGsrDWHou4T0veSm/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Geografía Política y Económica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LXPEBXRHjbZ4cQOpCWG6ZfT52dnfT2D6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Investigación Geográfica I (Metodología de la Investigación Geográfica)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1FuR5ktg9DtBMEpAIVFkcz9W1yT3UVPVp/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Geografía de América Latina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10j46MdWal360E4oVuIvWlExVysmRiIwm/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Geografía de Europa y Oceanía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1jL5i6ArqG-JObMFPXZvHet4SSg5krvBF/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Geografía de Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1v57poldaNId3FFveqV-wxQXBfjPhS9HU/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Geografía de América Anglosajona</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ykHMUt1PwnE8Bim1nUGU72FCTGlj_TA6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Geografía de Asia y Africa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16jlGO7VgF4Tw-kAdH-9ZITC-5oko00_V/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Seminario de Investigación Geográfica II (Ambiental)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EQ4IMwo7u0Yf-_DZLc5bZrFlO1VYkS7e/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
        
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
    <div class="col-6 py-2">Geografía de La Pampa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1koVyOpIM_BRtzAQzi-UwURTrvNp13pTH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Investigación Geográfica III (Planificación y Ordenamiento Territorial)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WckY6yCnG-1rxBgRoG9tjYxItF_Yzc5W/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Investigación Geográfica IV (Electivo obligatorio)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Taller de Tesis de Licenciatura</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Tesis de Licenciatura</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma I</div>
    <div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1HeFQtQmUkrlBq792u6P45XQ2rJbQSbwp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1F0aY3Nf6ga2y_LLCaBhHkoh_pxfqCdZQ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">III Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14chODeQn8Bs_7xOoQAV0vrcX04b2Etx6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SdHNXjeMvxFclqefNz-vsGtmW8TipiJ6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1T5wDSAPBqEga9Lhi6WG-WnJhlyDkGhMz/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">III Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1O44B9VoJ2jSWOfIEfkIlTa-xR3ZWHP2_/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma II</div>
    <div class="col-6 py-2">I Nivel de Idioma (Italiano)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Italiano)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">III Nivel de Idioma (Italiano)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">I Nivel de Idioma (Portugués)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SsQP3pfq_xhMvDd_f-RQcn5KFniIeLMX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Portugués)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16zHyWx-FH6XV52zKGw3lyQgMbrHA0i6h/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">III Nivel de Idioma (Portugués)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WNnAoYNbFLuLi016t6T_9YjN3RB_xwuf/view?usp=sharing" target="_blank">Descargar Programa</a></div>     
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