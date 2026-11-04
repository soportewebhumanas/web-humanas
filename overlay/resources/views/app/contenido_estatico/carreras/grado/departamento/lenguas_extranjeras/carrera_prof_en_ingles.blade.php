@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
                            <span>
                                <a href="{{route('index')}}">Inicio</a> <i class='fa fa-angle-right text-primary'></i>
                            </span>
							<span><a href="{{route('carreras.grado.departamentos')}}">Departamentos <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="{{route('carreras.grado.departamento.lenguas-extranjeras')}}">Lenguas Extranjeras <i class='fa fa-angle-right'></i></a></span>
							<span><a href="{{route('carreras.grado.departamento.carreras-de-grado')}}">Carreras de Grado <i class='fa fa-angle-right'></i></a></span>                             
                            <span class="b-active">Profesorado en Inglés</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Profesorado en Inglés</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profesorado en Inglés</a>
			<a class="nav-link" id="v-pills-info-tab" data-toggle="pill" href="#v-pills-info" role="tab" aria-controls="v-pills-info" aria-selected="true">Información General</a>			
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Perfil</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Alcances del Título</a>

			<a class="nav-link" id="v-pills-requisitos-tab" data-toggle="pill" href="#v-pills-requisitos" role="tab" aria-controls="v-pills-requisitos" aria-selected="false">Requisitos de ingreso a la carrera</a>
			<a class="nav-link" id="v-pills-test-tab" data-toggle="pill" href="#v-pills-test" role="tab" aria-controls="v-pills-test" aria-selected="false">Test de Diagnóstico</a>

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
							<img style="height: 700px" src="../slim/planes-estudio-images/prof_ingles.png" class="img-fluid p-1" alt="Profesorado en Ingles">
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
							Profesor/a en Inglés
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
							4
                        </div>
                        
                        <!--Sede-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Sede</div>
						<div class="col-7 py-2">
                            Santa Rosa
                        </div>

                        <!--Plan de Estudios-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Plan de estudios</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2013_26_yQ89zcO.pdf" target="_blank">Descargar</a>							
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br>
					La/el graduada/o del Profesorado en Inglés de la Facultad de Ciencias Humanas de la Universidad Nacional de La Pampa, posee:<br>
					<ul>
						<li>Una formación específica en el área de inglés y para todos los niveles del sistema educativo, que le permite desempeñarse en organismos, establecimientos y entidades educativas, así como en todo tipo de institución que realice actividades vinculadas con la educación formal y no formal, de gestión pública o privada;</li>
						<li>Un grado de conocimientos y competencias de la lengua inglesa suficiente para desempeñar sus funciones con total idoneidad;</li>
						<li>Los saberes psicológicos, pedagógicos, metodológicos y didácticos necesarios para desempeñarse profesionalmente en forma individual o en equipos interdisciplinarios.</li>
						<li>Capacidad para planificar conocimientos, procesos educativos, conducir y orientar grupos de aprendizaje e investigación;</li>
						<li>Conocimientos para evaluar aprendizajes y asesorar programas, planes, y proyectos educacionales en instituciones educativas de la provincia y del resto del país en el ámbito específico.</li>
					</ul>
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Título</b><br><br>
					<ul>
						<li>Planificar, conducir y evaluar procesos de enseñanza y de aprendizaje en el área de la lengua y la literatura de habla inglesa en todos los niveles del sistema educativo.</li>
						<li>Elaborar, dirigir, ejecutar y evaluar proyectos institucionales en el área de la lengua y de la literatura de habla inglesa.</li>
						<li>Asesorar en lo referente a la metodología del aprendizaje en el área de las lenguas extranjeras (y en particular en el área de la lengua y la literatura de habla inglesa).</li>
						<li>Realizar investigaciones educativas en lo referente a la metodología de la enseñanza de la lengua y la literatura de habla inglesa.</li>
					</ul>
				</p>				
			</div>
            <!--Tab Alcances-->

            <!--Tab Requisitos-->
			<div class="tab-pane fade" id="v-pills-requisitos" role="tabpanel" aria-labelledby="v-pills-requisitos-tab">
				<p class="text-justify text-dark">
					<!--<b style="color: #26406C;">Requisitos de ingreso a la carrera</b><br>
					Para ingresar a la Carrera Profesorado en Inglés las/os aspirantes deberán cumplir con la normativa vigente a nivel nacional, y con la de la Universidad Nacional de La Pampa y de la Facultad de Ciencias Humanas.<br>
					El Ciclo Propedéutico (anual, 600 hs.) es de carácter obligatorio para las/os aspirantes que no posean un nivel de conocimiento de la lengua extranjera equivalente al nivel intermedio, determinado previamente a través del Test de Diagnóstico.<br>
					Las/os ingresantes deberán realizar un Test de Diagnóstico en inglés de carácter <b>obligatorio no eliminatorio</b>. Quienes no alcancen el nivel intermedio requerido, deberán aprobar el Ciclo Propedéutico como parte de su Plan de Estudio. Todas/os las/os aspirantes deberán realizar el Test de Diagnóstico, sin excepción.<br>-->
					<b style="color: #26406C;">Requisitos de ingreso a la carrera</b><br>					
					Para ingresar a la Carrera de Profesorado en Inglés/Licenciatura en Inglés, las/os aspirantes deberán cumplir con la normativa vigente a nivel nacional, de la Universidad Nacional de La Pampa y de la Facultad de Ciencias Humanas.<br>
					<br>
					<b style="color: #26406C;">Test de Diagnóstico</b><br>
					Todas/os las/os aspirantes deberán realizar un Test de Diagnóstico en inglés, de carácter obligatorio no eliminatorio, que evalúa el nivel de conocimiento del idioma. <br>
					Aquellas/os estudiantes que demuestren poseer un nivel intermedio de conocimiento, ingresan al Primer Año de la carrera. Quienes no alcancen el nivel requerido,  deberán aprobar el Ciclo Propedéutico como parte de su Plan de Estudio.<br>
					<br>
					<b style="color: #26406C;">Ciclo Propedéutico</b><br>
					El Ciclo Propedéutico (“Preliminares de Lengua Inglesa”) es de carácter obligatorio para quienes no posean un nivel intermedio de inglés, según los resultados del Test de Diagnóstico. Esta instancia tiene como objetivo preparar a las/os estudiantes en las áreas de lectura, escritura, comprensión auditiva y producción oral necesarias para el ingreso al Primer Año de la carrera.<br>
					●	Régimen: Anual.<br>
					●	Carga horaria: 600 hs. (20 horas semanales).<br>
					●	Modalidad: Presencial con soporte virtual en Plataforma Moodle<br>
					●	Sistema de aprobación: Promoción con examen final.<br><br>
					Una vez finalizado y aprobado, ingresan al Primer Año de la carrera.<br>					
				</p>				
			</div>
            <!--Tab Requisitos-->

            <!--Tab Test de Diagnóstico-->
			<div class="tab-pane fade" id="v-pills-test" role="tabpanel" aria-labelledby="v-pills-test-tab">
				<p class="text-justify text-dark">
					<!--<b style="color: #26406C;">Test de Diagnóstico</b><br>
					El Departamento de Lenguas Extranjeras podrá considerar certificados de exámenes estandarizados, de nivel intermedio o superior en lengua inglesa, como supletorios del Test de Diagnóstico.
					<br><br>
					Se realizará de manera presencial el día <b>lunes 26 de febrero de 2024 a las 8:00 horas</b>.
					<br><br>-->
					<b>Modelos de Test</b><br><br>
					<!--
					<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1oaitbuSgSqyhP9MHoiXuyzOzygvI-V51/view?usp=sharing" target="_blank">Test de Diágnostico 2011</a><br>
					<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1VAOg4zQpfsMKmnizaTwWfUMmAUNFStlN/view?usp=sharing" target="_blank">Test de Diágnostico 2012</a><br>
					<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1YQpC9IFYTzKJpdX7YcuDTK_8nqloapc8/view?usp=sharing" target="_blank">Test de Diágnostico 2017</a><br>					
					-->
					<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1YvnrdAPPnPKoX-3uI-ZJh38WvrqBwcJg/view?usp=drive_link" target="_blank">Test de Diágnostico 2021</a><br>
					<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1o9GYH5WQfQmLZz72MOeML4qSouGDNjAz/view?usp=drive_link" target="_blank">Test de Diágnostico 2022</a><br>					
				</p>				
			</div>
            <!--Tab Test de Diagnóstico-->


            <!--Tab Programa de Asignaturas-->
			<div class="tab-pane fade" id="v-pills-asignaturas" role="tabpanel" aria-labelledby="v-pills-asignaturas-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Programa de Asignaturas</b>
                    <!--Programa de Asignaturas-->
					<div class="container  mb-4" style="font-size: 0.9rem">
					<div class="row border border-dark mx-1">
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
					<div class="col-6 py-2">Seminario Optativo I/II: Literatura Infantil</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1e0sWInRiJhtQusXn4qS8pnHzFMli51i7/view?usp=share_link" target="_blank">Descargar Programa</a></div>
					
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