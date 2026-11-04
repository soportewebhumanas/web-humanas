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
                                <a href="{{route('carreras.grado.departamento.educacion-inicial')}}">Educación Inicial <i class='fa fa-angle-right'></i></a>
                            </span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.ed_inicial.carrera_ed_inicial')}}">Profesorado en Educación Inicial <i class='fa fa-angle-right'></i></a>
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
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1o3IN_UgZEbI8PLdMOHjZeLwbfWkWoWBW/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Zedc2zfWtjuJXTn70MjqVWTeg9cbpcYx/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Sociología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1f77ayB41gmSjQ6l4TBmxBYK2GuYU7P-O/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bHrEMwuLZcICyzsHKxPriIxowdvvcBZK/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-9DtWJUN3b5l1OCmBIUv7TsyB164twqk/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11ZkHMyw5Z9blt4bm93kkbrWgduYv6fZt/view?usp=sharing">Descargar Programa</a></div>            

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Historia de la Educación</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IiU-ozB92Mf_n89yghR3mgvC-kljJRvD/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Psicología del Aprendizaje</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/15r0ZF4M0sM64pdiw-ZqZ41Oir-LNk8Ix/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario: Infancias, Familias y Contextos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LzO1W_1FsK2HkhvkZ3OSBjjqRLCZf9hp/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica General</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NMj0Pvdhtih0drUDv173VypZjK8ezK9x/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Educación Especial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11fTUNfGDP8n2encwbJm76CaQG6uxmqGJ/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Organización y Administración Educacional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1j5gQznVt7owB07KXkUdtnlVG3LERQeyA/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IpaDcWi-IDLTkwdGBpboR-jHyeIVX5dn/view?usp=sharing">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Ciencias Naturales y su Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10VdJCQY6iGoyIHLhbnSWAqwC24ZwPPl3/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Didáctica de Educación Inicial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1J9lKtol2MVLvpubPICEWewdo0--XzgmQ/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Lengua y su Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1AMQS3Hucg3l0HEID-Sr29RQ2stXcruDO/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Lenguaje Visual y su Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1BYei5K0bO6iiNCGoo89KievdOhzCBSgX/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/150cbvK_y2_sGkq2BWsMA1SNxy0S8yT_B/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Ciencias Sociales y su Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1v_K4SOgmZSfqob2CGEeqVbBOSD3l9ZA6/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Literatura y su Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1v_K4SOgmZSfqob2CGEeqVbBOSD3l9ZA6/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Matemática y su Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1A-YdvwGULApedMW1eAxBipcCaDS4AfAH/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Música y Expresión Corporal y su Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1mMvE7j9gDQGpcp3nnQxC1MkedpU29hJ7/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Práctica IV</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1lGaJIbCm38amWCYspUDYbH1PfuMHjFOi/view?usp=sharing">Descargar Programa</a></div>                    

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Actividad Curricular Opcional I: Educación Sexual Integral</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NB07csfbJCulJ3-deOmhDlcgxxmDRGMF/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Actividad Curricular Opcional I: Elaboración de Material Didáctico</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WRwlJPqya7u2jp8wdS_2-kv8PH1AZTng/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Educación Física en la Educación Inicial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CSmkFNe6USI20gXGcZh6CbIWUT2so8zz/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Política Educacional y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zCqUe48jvYkRDnovCWOjXlN8rur4u-4u/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Residencia I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1M9ELxg5MYtDBygPO_q9Fm61SrMM5HqtO/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Taller: Proyectos Educativos y Socio-Comunitarios</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1uo-mPE2dmTumv4mZqc38woEd8cHVk5yh/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Educación para la Salud</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1eyOo5x99QZ_2HMF_ns9KzDZdZ2nVROsc/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Residencia II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10ASb10gUtqQDHPAY_VePqjXj-B9qQCOw/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario Derechos Humanos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1lLoDgDfT70dJg_JVBpuiHO0u3kmT3oyF/view?usp=sharing">Descargar Programa</a></div>
    <div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rZXExKLq9lVtx8s1IAAXfCfhMc5TVvsP/view?usp=sharing">Descargar Programa</a></div>                
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