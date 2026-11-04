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
                                <a href="{{route('carreras.grado.departamento.historia')}}">Historia <i class='fa fa-angle-right'></i></a>
                            </span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.historia.carrera_prof_historia')}}">Profesorado en Historia <i class='fa fa-angle-right'></i></a>
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
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1PgS_jokZN9udTAgD5RBFHN3Q18nbUoWn/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Fundamentos de Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hix3Bcu3_6Q_MLGCeekcLvrymsEyh2wo/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia de los Procesos Sociales</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ym0NddaNTiH7K2f3sEMOb3i8Fy4CVuCE/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Fundamentos de Sociología y Ciencia Política</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1j5VDxAZOFcuD_hYqB4io0UpIH5gGCxLZ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Prehistoria General</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WMEzi28Z1cX9-f7TDi8vEd0p1MnUKfzh/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZcGXdy3RSgvvrN_lN5k8NwaJYm08NomA/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Fundamentos de Economía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1HBqoka3kWfNJwtnM6Dz90Vc15cnSIbNS/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Problemas del Conocimiento Histórico</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tBXvQFxRoCfIajIhtRtQZvktzUfvDzRn/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Antigua I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JsOMU3_FnwK_A7zKVVDCvGmQXB3Km0XG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia de América I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qe_G8NCWNWut3LbiKbtCYGBoS4QwJtb7/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Historia Antigua II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NKbRMpyhTvr3OqT4Q_74Gnq0oIvzPeKL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zmVhC0SKF5ZEyIjeShfXtxxsy5oCiWvY/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Historia de América II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18a7HkjLzxLr54sMthSxfpGl1sjbfAIUN/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Medieval</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18tLrdRExZdBgswQnAu-Jwx1QVd_1OBCy/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Metodología de la Investigación Histórica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18tLrdRExZdBgswQnAu-Jwx1QVd_1OBCy/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Argentina I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1yeb5YhQ4EhjzKtvhfvJQoYMg2XylVTRO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Moderna</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Kpm5w7KVdVi2bFR7y0i9oiFTmvi9TV3N/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Gp0A6OBpY6hn_KSqeyXy0Oq0UKv6kX3M/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Historia Argentina II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1AyDIehu5AvkGupOncitPD9NvtbVVRLw3/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia de América III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13wJfP9W4Zx4GAco0qSQlVRLfqQ5WXIit/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Contemporánea</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sLVNgzf_hVEbyTCaeyJDSOYYtKXWv0X-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Argentina III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-XivxMcozXxHN6dfYonEOmrQY-XkkmyE/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia del Siglo XX</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1YDrdR-Ebexba6qKgO9jVT2iYbfve4s3X/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica Especial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KqffeZu1BYBmdYuKEnnDE-YsmR9WO38h/view?usp=sharing" target="_blank">Descargar Programa</a></div>    

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
    <div class="col-6 py-2">Seminario de Investigación en Historia Regional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rR8KrsE_sOtIT8kKFbiLDlqzFvs2q6oW/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Historia I - Prof. Cantera</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Gr0pVBeH1fGsOIlQwwZbgeMPB4cibJOJ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Historia I - Prof. Justo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IBktqs4LHabSJgBtt6tqWn_QQl0zy8QU/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica de la Enseñanza de la Historia</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1eiGo77tEpZwijCicfWNxtsMOr9g-eA27/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Sem. de Historia I - Sem. de Historia II - Silvia Crochetti - Juan Cruz López Rasch</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1B-zwF20u8kL4imOH-LqqZB0JCX9N8LBY/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Sem. de Historia I - Sem. de Historia II - María Lanzillotta – Ana María T. Rodríguez</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RzQeZHIMNY-P-yoZDqgj8icbwkCjFYhu/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Epistemología e Historiografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NQn_sUzwz9pEiy-di79QCAVPVKHJJIvF/view?usp=sharing" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
    <div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1mPMr7cZDEEwUdjxI6-Ljn4RHeK71VRhw/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1fstCTyK7H2VcCbbUoAa9JHgmaNF8hUdl/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">III Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EzHhUf1M1lZD1_ShAP0U641kfrGQTKEc/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pme9aY7WKXjb3oVDB3etK0n1PshU9BCi/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-U4Im90DONZc3wbGHIcqK1hgrqnPccaz/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">III Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dnCMU6CGhRNoJEu_DbM3cl3H9m9pAGHP/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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