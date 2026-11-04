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
                                <a href="{{route('carreras.grado.departamento.cs_de_la_educacion.carrera_prof_en_cs_de_la_eduacion')}}">Profesorado en Ciencias de la Educación <i class='fa fa-angle-right'></i></a>
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
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1iEE9xQeF0M3wd0jDgsww5QBEXF-t6w-j/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IGWP_C9XOGJOiTUwgW20WapPbRqWJCBp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Sociología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16mXxGxQbS9cpr85PImb2b6Xl1kE6pzJZ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18KJ7Nh9l7gws5TQUO2YU2OojMCJdHTnF/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Fundamentos Biológicos del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SFEvA6z6qH_y1yD4Z2HVeZoqfCHMK5s-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Dc4dLFOwKEtou8u8DWH0XgMb2X9ZJMtl/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Psicología I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18h_eAdAeZT93X8lCxHfHap9xnlPw7RIk/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Historia General de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZCMXdnP-VCAowHxrIWP1oJRSXuXZwLjX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1wXJyU-La1zDbeTLKJPjjMtV91kKQ-Wl6/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Psicología II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1BgiHJSAa6wPSorv6ZsuCIJ60VdDYnWwG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica I - Teorías de la Enseñanza</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1maCnzZ1AuzynxfFO9KLMurORH6ZjdFVU/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia de la Educación Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rLXEpJ7koj6Q2DcSVgI2ClMzgg-9S1uX/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Organización y Administración Educacional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1wJcB35NQV8AikvJ4S5jo28Li8MeMcFZp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1i-870uaFSEIJKxozSdTyHFNKVVS6RqpA/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Didáctica II - Teorías del Currículo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KCqE-nE1FfeCTNrzyIUm1LjT7cDyI8Su/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Epistemología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NOe4N2cmwO4jIPK2OO3FDUnEoKyGrRic/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Política Educacional y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1OJ9vIWELS0_8vGhQZ7pa9cXGc0dPB6Ku/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
    <div class="col-6 py-2">Sociología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1um-RAmRglYqDT1DN_oOvjlS7xXZVAo67/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica de Nivel Inicial y del Nivel Primario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14-F5c0-P_htTZ-QL3OpWCi7MWL6E2Tep/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Filosofía de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1khBo9nyw73yfBioxPu5Wn5Ol5ynirKZm/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MaeloMecJfWsuA0NH810WtCRPHdePCD9/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Educación Especial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CEYv1oy52LB6DYeJ_WIW5pxF57PzCJM_/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica del Nivel Secundario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZxOJQhWjk1hv4uxc2LwMEJx3kt3vBAyj/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Metodología de la Investigación Socio Educativa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17PXqjbZmZ5HilygJNLIwn_H4nUszRvmn/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica del Nivel Superior</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1s6Rc_v219fgcfCLvHXi5C2aq4CJPKLmw/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Metodología de la Investigación Socio Educativa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KDMUdUFy3VpOikXEUrLw7Yd0GzzsqSxX/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17cTVpisAriNL03g7xQLCChHWavLvMvLy/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1u2QGAjhXAtD4xtqHLCmS06TV-kob1XAb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
    <div class="col-6 py-2">Actividad Curricular Opcional I ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1youSsBqAhjrDHTkINuAi_YVFzUrHHcwI/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I Educacion en Contextos de Ruralidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IXL_zGCBc8GkaK_oFTl1DEK_1wj462VC/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LPtQNJnTa0maWhxMDL0o-VNl6DKL5jwt/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I Saberes y Prácticas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1jzzP_g0KuyW8MnS1Jjna9jTW1ogHSCWe/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Residencia en el Nivel de Educación Secundaria</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pVNzKTMondZ7W-6FBUxOdTZORmC1qlzk/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Teorías Educativas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1P_JqLK0pYreW2uP9lLDnC9gKRIkfodGH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional II Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1GZzzfehp4Ab7tP8QVK4uhte0nau_GGbN/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional II: Saberes y Practicas Vinculadas al Campo Profesional del Cientista de la Educacion</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1argMV0aytrAy6aIvbmmhe3umF4AOS4ux/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional II: La Educación a Distancia en la Universidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xhBxA0xTKQOtII04rfd0FiwDRWjkuI39/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional II: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16aeqDyUB8ks3hV7daKy_CU6wkygWyu8k/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Residencia en el Nivel de Educación Superior</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dX2dOd3cGyBPGcxFIx7MzAVw4H6NRoUz/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
    <div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12aS3g11sA_jPfITKqpXoFHmtQSGxgQfL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19LrfhFb9HeF3rJWHO-UkLfkTgUVDuZd7/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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