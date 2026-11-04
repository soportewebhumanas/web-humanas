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
                                <a href="{{route('carreras.grado.departamento.educacion-primaria')}}">Educación Primaria <i class='fa fa-angle-right'></i></a>
                            </span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.ed_primaria.carrera_ed_primaria')}}">Profesorado en Educación Primaria <i class='fa fa-angle-right'></i></a>
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
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_y1aGrSCIZLyBxdiPxkkWVm3gcxSdJtg/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Ei5P3KfDIGEUlYq2R4CdbPBp_Y1hdE4V/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Sociología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12uhfCy-dPStytPvjkwi45mXAE-PHPNyC/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18mEWAK5Mp6LIk0Vi2zq1SQ-CwYzPp1td/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rtv4dqIxey5b0TMb2Ovzqw9H2DblTCZO/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1nLEDfvT9TR0bCjT6UAQVHlvI2kRalj3Z/view?usp=sharing">Descargar Programa</a></div>            

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Corporeidad y Motricidad en la Escuela Primaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RyoaPgaMWaVm_NnZ53Ki5VJIU4KZO6Ic/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UCE8gRX08kIxyWHOuqbu7_5ZPE7H9jPk/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MkH6Ulg2L3YLYXlcEjT4YDAXxMjiW7DH/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16kOVIylIlfpBz5boiRg476fmmhW-rLNy/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica General</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14NiL5cUm9LuXRNZfhnk73cC9NYwAo-H1/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Educación Especial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1OzExod9ikxMsOLt5gRWl2lQFTivWAYr2/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Organización y Administración Educacional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1j14dN1sOFv1kgMSFD0e-slQ2FItwJK26/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-okrDOlOR7YJM9sX7IQybCelSEIExgvW/view?usp=sharing">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Práctica IV</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1kjdU1tQyH6ysjbSauTVJOVwj9SJynaSO/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Ciencias Naturales y su Didáctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_zy5IQZdaUSouhPKnFSgxFy0zgJAuRAI/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Ciencias Sociales y su Didáctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1QaFqqGJHZhLM1Hc8SNvYUKC9xuKNsa_F/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua y su Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1n83Nj3UjuQDBff2MwJmkiRTXieI--YFI/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Matemática y su Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bMQRM55K2O9YOTwkL4dvPxQm6MaQp1NO/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Ciencias Naturales y su Didáctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dYpG_7Wioxz3bR0AUfToZtr0hvXV4rNM/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Ciencias Sociales y su Didáctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EmLVJv074EoRhHt_9BMDbudyGLR3Iv6U/view?usp=sharing">Descargar Programa</a></div>    
    <div class="col-6 py-2">Lengua y su Didáctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1OdnsFzoP4MgdT1Q4nyz7ZkDtvzkTwYh-/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Matemática y su Didáctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DzRo7ceS8ttnGR_s0KLzK7aMFj4yLljD/view?usp=sharing">Descargar Programa</a></div>                    

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Actividad Curricular Opcional: Educación para la Salud en la Ed. Primaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1yBGXXXyNIB8h7X5acHRjf7_8FtFaIaMa/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional: Educacion Primaria Modalidad y Contextos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1s3w6OPXJAvChX4udRFIePDyM-bxci63_/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10GpJSUOHJvfE4P8vx0xJBW4GWBYiH4_8/view?usp=sharing">Descargar Programa</a></div>
    <!--<div class="col-6 py-2">Actividad Curricular Opcional II: Educación para la Salud en la Ed. Primaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional II: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#">Descargar Programa</a></div>-->    
    <div class="col-6 py-2">Educación Artística</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19uaI-PxMM0Xfe5ugJ_1yeBDApv5yx3jH/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Política Educacional y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fM-P4zc8BVe0gharm1MJN8gA_DgIHSu5/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Residencia I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_-bZT1U27H-WTeN4oIgoEMp-Go2YlLAT/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qcw_YgAaWrAjbu06Ouz_2gwbxSQMAaTz/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Residencia II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xik10o9PNh3JypqvG7u6r4DmNwj_wpmz/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Derechos Humanos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sRJUa00sjOlQc8Dr0yGMkIiRz-am0Nmx/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Qj4oiSAipKVx9ybD8OwjjaKl6KNznoyy/view?usp=sharing">Descargar Programa</a></div>                
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