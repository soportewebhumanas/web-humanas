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
                                <a href="{{route('carreras.grado.departamento.cs_de_la_educacion.carrera_lic_en_cs_de_la_educacion_a_distancia')}}">Licenciatura en Ciencias de la Educación a Distancia <i class='fa fa-angle-right'></i></a>
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
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1iqsWLmsRUaqdTv20jKNxjb6IdU_rt65p/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SU0ZQDy9-1bYlBFpJZqgP34hqfJix_-E/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Sociología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1MCpagnYO9E1YwpXvVsvOdqHH_o-M_USv/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LpZBCTZYzN4YV2CkyB9JjZvJloZeHF-Q/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Fundamentos Biológicos del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1AOzogCx3iiRCrdxH4DApX2njniZPUF4u/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19UkqFTOaboWCknUSyPdBcuHOE7QLtP85/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Psicología I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12xVg7SQq5XIVXZp-hiwliYDx1QmSoBw_/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Historia General de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1o2ambJ8Z9iikEge60n2WKNpf_gVFANOb/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1St5-HxaRHeLN746PlhamHzS8-v3gpbMZ/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Psicología II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Oh7ve2ZZRuwlFKW9XbH7_5extRqYdQT0/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica I - Teorías de la Enseñanza</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Msq23DxvhxLBIXF0t8GN6hopcE9tXgoY/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia de la Educación Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1H9q7GWa1bP_bgLFYPNzFf6jtrvNz-cHu/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Organización y Administración Educacional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1yJWf4iqKVHYL6bMzSO9cylrNb0gbvaV2/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ywEkaquhPuzq4g6ozqE2NzWvxfxtSzmw/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Didáctica II - Teorías del Currículo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tVAMNRfvNtbNGORNDEU8ETO7SPtiPToo/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Epistemología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1e3KU9K3QtobBc6fdGwWtgmE4q8CFI7Zc/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Política Educacional y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SUf0TpVg3M-lDhSUSnPaiSZgv-maCBkk/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
    <div class="col-6 py-2">Sociología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1c4GTVpB22pkgpEeZ08y3qDxseYmwxc7P/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica de Nivel Inicial y del Nivel Primario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UthOJ-QhFE3AvlQtsvURf7SJ3m-ino2x/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Filosofía de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1DsxNh5xS59uJ-DkYXVZ9YSCgLx-6pSlF/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1AZQacL3OwsdTcD4ALw6y7F0qq8WbXJb-/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Educación Especial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JxLRUucrZSFdOIytDX-zWU7PdCOrxJpH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica del Nivel Secundario</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RzY9nmFidPQA2SvgDPSgLJGDlx6azp-6/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Metodología de la Investigación Socio Educativa I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1c83t6rJuHuAycIkDQ6kPFBYLFun0PRhe/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica del Nivel Superior</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1V7XH46D56RlpZsJ5DEOd2JrKmRlZx8hv/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Metodología de la Investigación Socio Educativa II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tfGQ6-49pRkiPt3x5nndpy_preP-TAd8/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zxkAuruqq7zkpEzXMCC0aTTvqNkHwv3p/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10KZPP6WuuRQjnZbaC-KXwf9O_sPk2gLE/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
    <div class="col-6 py-2">Seminario de Análisis Institucional </div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/15ITLhUh-thHDcuTqJwM90RpkCFPDSRzH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Taller de Elaboración de Trabajo Final</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1se0MH8WTnT9JSU3gsDNBSOBpkKDtq0Z6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Teorías Educativas</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14a6gveqzgy871Nbc6lWympOpSL6YaUcC/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13oZ5kdV6zLnYSz8V6qig7yu7fFe_8N8F/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I La Educación a Distancia en la Universidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11ENZhGIYEMdOyzwQe1-OV1SGU8DVwm7k/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional II: ESI</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1N2I5cUZA4ayRO28N8UOXtoAHB6GD_ABS/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional II: La Educación a Distancia en la Universidad</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LjEv2oLFoaRhrlwJa1xb_L3m2w0SJR0o/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I: Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ECRHqptGw8RkLqNvq0hsBatdv1vk4EYB/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Actividad Curricular Opcional II: Capacitación Laboral y Educación del Trabajo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1O7VkfjyqFi9lKfy17naPMPR29Lr_17gW/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I: Saberes y Practicas Vinculadas al Campo Profesional del Cientista de la Educacion</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18nB_0_H0VaodjzIP0kYXVJnvBDMRTkYO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional II: Saberes y Practicas Vinculadas al Campo Profesional del Cientista de la Educacion</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Zt0tCmkrRX7C9tuaHLc3RiYzqD4eulgP/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
    <div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qTF9kHuKRn1G1h_MW7dclsw19-thn7UA/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1j5t8OGLHt0IeyqQkBkmdOiRh5XxgRzz9/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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