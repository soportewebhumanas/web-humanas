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
                                <a href="{{route('carreras.grado.departamento.lenguas_extranjeras.carrera_lic_ingles_ola')}}">Licenciatura en Inglés con Orientación en Lingüística Aplicada</a> <i class='fa fa-angle-right text-primary'></i>
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
    <div class="col-6 py-2">Preliminares de Lengua Inglesa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1jVncGAjsLF1yoL8Q8IEolvuZRbIoijpk/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Primer Año</div>
    <div class="col-6 py-2">Fonética y Fonología Inglesa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1yoLt3cLmiqR8boYBdrmX7mp4BB2WAGcZ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática Inglesa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1D5j2jrA_BTlwChSG_xXjIeDkM8ebZQl3/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Lengua Inglesa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SFge9k9t_0joFNa7PpSDYQN8sKkOLmsO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19vapwNlbiPBPH8LTrhfRaqOoe_-Ev-7Y/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Española</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10mifLWF8wXagMg7o78KmSr71HX_gIRqh/view?usp=sharing" target="_blank">Descargar Programa</a></div>    

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Fonética y Fonología Inglesa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/15V55Oy9txmtBPjdNQMZQy-ngZ-0v9cqe/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática Inglesa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1cROSFAC34xi2-gXmHaJI-KVGH9kz8kvr/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Inglesa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1gdB6ggMR582f3M5JvEY3UWWIaZHPwd00/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Introducción a los Estudios Literarios</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10y55gaChhRbImMZObrojuRfsfWVT9m9Q/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Introducción a los Estudios Socio-Culturales</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-Np_qyKFtmMc_GX1q2_mxtUkBZf05_i-/view?usp=sharing" target="_blank">Descargar Programa</a></div>


    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Fonética y Fonología Inglesa III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1XrAZe2lXkRrM7hjzqOrqSbN2ejzRWVK4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Gramática Inglesa III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xY4a-Lo68JuPOe5w-EEocWE_Htb1Q0vs/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Inglesa III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1GRqjaib44Te2AlhzNCxA10Y90mG65ZI0/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
    <div class="col-6 py-2">Cultura de los Países de Habla Inglesa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EzWM9sDZvWsTqbccAGQ_SFbeaFp5HmfY/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Discurso y Pragmática</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1lZSeRqXfDL3ctC8gtbXg0C9Nnd9_yz8H/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lingüística Contrastativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1wIZqfWXi0o7VpA7ycSw6jnCSoL2hb113/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Fonética y Fonología Inglesa IV</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZJwOMUQfUU2FOPSwOc0ymuMYZA0NDEjd/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua Inglesa IV</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12hAjnF9QffWacahAd1HhLcnTsBT_HkL-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Adquisición de Segunda Lengua</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fymOxh0wuF-pWCHEASgrvRKE9KNsU1MH/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Historia de la Lengua</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Lingüística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ASYOIxPZAeePxv9I-Eblq50EqhB3T7rJ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario Abierto de Lingüística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
    <div class="col-6 py-2">Psicolingüística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Sociolingüística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KHPPFLuF4gjdS721qWkJTnZtYr4C7-A5/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario: Metodología de la Investigacion y la Enseñanza Superior y Universitaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-IG-AYUSJslUMlzkNqh5g1M_FnzJZnAU/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Trabajo Final Integrador</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
    <div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1o8A3DJIQZ5AvIxTtyeA6C2Hs3FW5zQxm/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17LfxUoC00HE0Uy_W6gVNprA8dEKETGMm/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">I Nivel de Idioma (Italiano)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1XlvZuWMxMwYJW65NbmkyNLlGfobPMvh5/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Italiano)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vkDSTUlP_K7XIOwQtuOHo6_1gT2pbbb5/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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