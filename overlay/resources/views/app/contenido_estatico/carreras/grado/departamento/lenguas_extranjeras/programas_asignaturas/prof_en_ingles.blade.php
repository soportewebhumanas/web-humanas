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
                                <a href="{{route('carreras.grado.departamento.lenguas-extranjeras')}}">Lenguas Extranjeras</a> <i class='fa fa-angle-right text-primary'></i>
                            </span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.lenguas_extranjeras.carrera_prof_en_ingles')}}">Profesorado en Inglés</a> <i class='fa fa-angle-right text-primary'></i>
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
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-0">Ciclo Propedéutico</div>
    <div class="col-6 py-2">Preliminares de Lengua Inglesa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1k3jmvY3efVUFwkoqjWjpvNajW-8Jt_v5/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Primer Año</div>
    <div class="col-6 py-2">Fonética y Fonología Inglesa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1cFNQyDeCpF1WowHw7jGSfk3XmusHAp06/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática Inglesa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1PE6mVwuQtmVJhyltF_IiWLgi5HwD0qqD/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Inglesa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dZDrDmp2qCxaxFGXreEss_Jb__GuHQnA/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1kPuUMPRPIXci_nB12hEimG8os1z7h72T/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Española</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1adgUYDXre71kyg6QTWNLBcnyYnDJZwPe/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UFVaR03totGv7VxXNVGQqFgwe5y8dj4z/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12QXp-z98QZ0fnbmWYboa89T_tMz7fQmm/view?usp=sharing" target="_blank">Descargar Programa</a></div>		

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Fonética y Fonología Inglesa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LFmDUCtvH_1CscApPj-V709nXOizqPSf/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática Inglesa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sAJ-sd6XwNuuGEwmRzu_06ivbmBef4GK/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Inglesa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1on83Wf--uim-b5FlEhTN4kMLeD9ExgI9/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Introducción a los Estudios Literarios</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13MgGJxq46ZQ2aChyjKRqTscwddSChcCF/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Introducción a los Estudios Socio-Culturales</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/182uRism6wEvwJAxCImiZVfQz32FRHbvz/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica Educativa I: Práctica Curricular</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1nJSqart9SJ3JrXFMNXn-f53ChgRrTPDF/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DzlcRyZ2iEL5mKWNQF0E8_K3Q1L2pQ9j/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Fonética y Fonología Inglesa III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1C_zdQB_OdKOIbCMUJ7CpEjw6Bop3qu14/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática Inglesa III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ksKmMCda0zdYN_zQXF4_WptZ60kqpPWB/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Inglesa III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16-yrXImiWRWnbi4MKX_uTZP1hNcD-bYw/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Cultura de los Países de Habla Inglesa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WUEU6g0_7Bi57rcLEglMVh3GxSjEAw9N/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Discurso y Pragmática</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ma_BsHZ6EWria7qy2PjGfSg-woUhUqGT/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica Educativa II: D.Esp. y Res.Docente</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1w6gdxQ7QRfb79DPA4SB6dcd65JzJPNgG/view?usp=sharing" target="_blank">Descargar Programa</a></div>					

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Fonética y Fonología Inglesa IV</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1TnWBZK1XEwxsMe3U6sOVVh1rb9rIvvDB/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Inglesa IV</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ji0WppEe_bEgRFgSxn-4EkBpBplbMxXP/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Adquisición de Segunda Lengua</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sezdjgFjJ1L49gGVYsN5uTkBPYkKp97e/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica Educativa III: Residencia Docente</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vvt79NwNmpfun4Gv_4KwreSgFwc9an5N/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura de Habla Inglesa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KSX7iABJlA3WbYFu67kZB_ymKbo6ZNxR/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura de Habla Inglesa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1f-PzRisDBnRgZSppYODoT6WU62-mhaCq/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Política y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ViKBMies67ThVx8APnbi2Vm7gWQyhxRC/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario Optativo: Inglés para Propósitos Específicos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_Fwuda3MtNN-cQ5AxJklTEuXxajfjQj2/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario Optativo: TICs</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1mylhjTXaZwJB0-stsVR9BooogBTgQ_Da/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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