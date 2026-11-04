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
                                <a href="{{route('carreras.grado.departamento.letras.carrera_lic_letras')}}">Licenciatura en Letras</a> <i class='fa fa-angle-right text-primary'></i>
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
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fg8P9Gr7r3ZqHhdOXuhi_2fHgQjW25FQ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CxRy0YE0aGLRnWP9oXRy5Ucy6wWk9jaO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Introducción a la Literatura</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16GdcKsem29VAyy5k9gUXjjAkqij18udb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Taller I: Comprensión y Producción de Textos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1GL6XA6Ge0wmfXb2x7cZNrSeKVI_1Nd5j/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Optativa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Lingüística General</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1BRGb8jLR4FUw_pGByi5QWhDN4U6DW553/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua y Literatura Griegas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1FcxJqOUtlKsbtcWf057LC3zyQrwUZ_lN/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura Española I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fGFV5qc76xw7xTeyr5bcaMexBoWvG4-g/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Teoría y Análisis Literario I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1FIU367mk67q9uC_m2EdnxBKNMmfmg-vb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pKvE6ASzswqvkbjbXtNoy4ieum-Nbojp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Semiótica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-2qM7Fg3zQiP4jcR8WFtSctHrz-WTuAk/view?usp=sharing" target="_blank">Descargar Programa</a></div>    

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Sociolingüística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pugjKJCkm4E4US7q-wr3-lJnLAo9U2gI/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua y Literatura Latinas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xhnVVRIN6i6uJqVs4I2FLYKY9PrkySFZ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura Española II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1jwYDDDueMtUTtR_qjOSO6-M3BJhsVvG-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura en Lenguas Romances</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1x_TTtRQm5mxQZsZAmrWKZm6hr0cBkDfG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Teoría y Análisis Literario II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LXWsIHbBjRDpoOZmAP4ZQr0Kry_sP124/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/140bZSzbtoXryzQS7qsTSczNBp5-Byv4H/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura Latinoamericana I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_el74Xhz9DHOPDbYoJlmGYSUvYwoKJhh/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Literatura Latinoamericana II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hS6BSFoLL-N6FhiV514esbPuIHr-cH-5/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia de la Lengua</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_2mhe3yl9glda08igWxVMsXbN_qpBqmb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Optativa II Lingüística Descriptiva</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1f9NAHZGR_HYYCbScksHuy6PSbI1Xvk5P/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario Orientado (a optar entre Ligüística o Literatura)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RfFSyc_z-CpH5yQ69PZC_9ZiDZu2KlJN/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura en Lenguas Anglosajonas y Germánicas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DmHU_KkeRz1cdQpehl11ZMXEpgPo5cfL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura Argentina I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11wT_LD7T_XV5S6MMfqNahazhf1K1e4i0/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Literatura Regional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1f_wCBrTR-ITpnQyjMVpvBv5HRXNzIKhL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Taller II: Escritura Académica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19cPks-D0rqGi9T0OWm7e5QKTOTqXlV7Z/view?usp=sharing" target="_blank">Descargar Programa</a></div>    

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
    <div class="col-6 py-2">Literatura Argentina II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario Orientado de Metodología de la Investigación (a optar entre Lingüística/Literaria)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Pasantía en Proyecto de Investigación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Tesis Orientado</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Tesis</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
    <div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fLaAOu8IUfBO5PWrXrlfLiQQLWeT3rOk/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1m_His22PvMbFAWQEFjjjea0hzRiAQyJF/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">III Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qjLg-PJ4hjdp9IlCKB68K9AhlzbrAuKs/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Ut0PMyUB2HwegLKDhoI_XyYJCuOeg9ZG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fzSOB2KLZuprk2w_0Nzrz7-aq3eCGXIx/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">III Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vnEri6f1lkae7vfV4CD-5NlHqF-d9CAY/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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