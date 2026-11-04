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
                                <a href="{{route('carreras.grado.departamento.lenguas_extranjeras.carrera_lic_ingles_oel')}}">Licenciatura en Inglés con Orientación en Estudios Literarios</a> <i class='fa fa-angle-right text-primary'></i>
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
    <div class="col-6 py-2">Preliminares de Lengua Inglesa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rvzCQmX_CPqkk2iEIvYn4sytVRJWjQrJ/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Primer Año</div>
    <div class="col-6 py-2">Fonética y Fonología Inglesa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1TiY_r8bk4yKeDUT5ryH8JwYvUsRP_Hhs/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática Inglesa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZWN07pHfdpGWuxPWO-NcOtJh1_ofRZOe/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Inglesa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_wIB_eA_hKITFsCq38zoRIVc9O3FY80P/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sMpz5Rd86K6MjmSZYS1N1g4FTzBPCJiL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Española</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/113U3KX1QiLvPG5KC_MChBxL1BC_GE7SQ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Fonética y Fonología Inglesa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1U9AsSPueKNehpOuxPmetCAQIqR9lcW-K/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática Inglesa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1BYdBrPSs6pWqSOwi5Dz_FyQx2wFst_M4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Inglesa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1FQx93G0EktWpa670OwgaWqF59AJSHVet/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Introducción a los Estudios Literarios</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1nxKhFxH9TwAW6Kugq3_beFGExdq_hM4C/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Introducción a los Estudios Socio-Culturales</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1lhT8G6TbHPyeS6b6NEmnqB3TslfnhZyE/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Cultura de los Países de Habla Inglesa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1l_UCW96-9mO1UX39UiNMU7d8zxBG08Dk/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Discurso y Pragmática</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14JVICAWtb1NI9zHhioPJOm6FPgwJ2vIS/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Fonética y Fonología Inglesa III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sIuVngvcpN49QOfC6tEiaXmptuCz_Gnz/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática Inglesa III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1m37knYzuEawOP4sQlKpauu3zVIXdNOZu/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Inglesa III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1QLaOBE6pWgYzN5Gj-W2oDBirgtmvkj2O/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Teoría y Análisis Literario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UVKFuKiqoE7Aqa55WnQ4eclpWFCa6jE5/view?usp=sharing" target="_blank">Descargar Programa</a></div>        

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Fonética y Fonología IV</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14pRZjDUTSjHXJFXF1IzvXgAggBc2YNeD/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Inglesa IV</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1wGtFT4xao9_oGI2EVGGEcHnamRQJ-pZ_/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura de Habla Inglesa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Lubtk7pG_LaTT3LMXtOgdRzwfB9XbE82/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura Multiétnica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EzRGvyN-hZEs2k0NjX9HdtW1gy03imov/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura de Habla Inglesa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1lccHd4hUupp2QsTIdAVOa8uHOsb9c5Fv/view?usp=sharing" target="_blank">Descargar Programa</a></div>            
    <div class="col-6 py-2">Literatura Latinoamericana</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura Multiétnica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>            
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
    <div class="col-6 py-2">Trabajo Final Integrador</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura Medieval y del Renacimiento</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario Abierto de Literatura</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14xnJDJx6GzkqAp5lmHDhYUiXXIWDtxOk/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario: Metodología de la Investigación y de la Ens. Superior y Universitaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10z_ziGdzBF4t63Zs9J4Siff6DBF2p63Z/view?usp=sharing" target="_blank">Descargar Programa</a></div>    

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
    <div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_K_FRd66YuVNbusZYm7BCWBG013t5Dkv/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1YAzhl3s0V6u6wPX6Bxfqo_rRPmyz4mpB/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">I Nivel de Idioma (Italiano)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19tbCiPe9fdo5zmXE7SyOBjNSDBP6BKVc/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Italiano)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1VvcUUtR1-uE2Hs1FJS9cJsnJ4_1CygnI/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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