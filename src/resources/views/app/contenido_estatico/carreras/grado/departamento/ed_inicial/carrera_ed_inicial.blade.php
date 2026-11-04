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
							<span><a href="{{route('carreras.grado.departamentos')}}">Departamentos <i class='fa fa-angle-right'></i></a></span>
							<span><a href="{{route('carreras.grado.departamento.educacion-inicial')}}">Educación Inicial <i class='fa fa-angle-right'></i></a></span> 
							<span><a href="{{route('carreras.grado.departamento.carreras-de-grado')}}">Carreras de Grado <i class='fa fa-angle-right'></i></a></span>
                            
                            <span class="b-active">Profesorado en Educación Inicial</span></p>
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
			<h3 style="color: #26406C;">Carreras de grado: Profesorado en Educación Inicial</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profesorado en Educación Inicial</a>
			<a class="nav-link" id="v-pills-info-tab" data-toggle="pill" href="#v-pills-info" role="tab" aria-controls="v-pills-info" aria-selected="true">Información General</a>			
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Perfil</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Alcances del Título</a>
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
							<img src="../slim/planes-estudio-images/prof_ed_inicial.png" style="height: 700px" class="img-fluid p-1" alt="Profesor/a en Educación Inicial">
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
							Profesor/a en Educación Inicial
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
							4 años
                        </div>
                        
                        <!--Sede-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Sede</div>
						<div class="col-7 py-2">
							General Pico
                        </div>

                        <!--Plan de Estudios-->
						<div class="col-4 border border-bottom border-left-0 border-right-0 border-top-0 border-secondary mx-1 py-2">Plan de estudios</div>
						<div class="col-7 py-2">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2009_250_2tGXlTZ.pdf" target="_blank">Descargar</a>
                        </div>                        

						
					</div>
				</div>
			</div>
            <!--Tab Información General-->

            <!--Tab Perfil-->
			<div class="tab-pane fade vh-100" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Perfil</b><br>
						<p class="text-dark">
							<b>La/el graduada/o del Profesorado en Educación lnicial será capaz de:</b>
								</p><ul>
								<li>
									Concebir la Educación lnicial como una unidad pedagógica que atiende la educación de niños de 45 días a 5 años que 
									complementa y comparte con otras instituciones la alfabetización cultural y la construcción del conocimiento;
								</li>
								<li>
									Comprender la función docente como práctica social intencional, que aporta a la plena realización profesional en el 
									ejercicio de su tarea como trabajador, trasmisor, productor y recreador de cultura;
								</li>
								<li>
									Conocer los campos del saber, sus fundamentos epistemológicos y sus desarrollos teóricos con especial referencia a 
									los que configuran la función sustantiva del docente: “enseñar” en la Educación lnicial; 
								</li>
								<li>
									Diseñar y/o intervenir en la formulación de proyectos, la elaboración de estrategias y dispositivos para la construcción 
									de aprendizajes en contextos diversos y específicos, la puesta en práctica y la evaluación de los mismos;
								</li>
								<li>
									Participar en equipos interdisciplinarios, concibiendo que su rol se sustenta en las relaciones vinculares y de 
									pertenencia institucional como así también como forma de valorar, socializar y producir conocimiento;
								</li>
								<li>
									Comprender y respetar la diversidad de los alumnos y de las familias para buscar formas de enseñanza que respondan a 
									las demandas infantiles en cuanto a cuidado, crianza y acceso al conocimiento;
								</li>
								<li>
									Concebir su formación como proceso y analizar las relaciones que ha construido sobre sus propias habilidades de 
									pensamiento y razonamiento para continuar con inquietudes de formación permanente y asumir una estrecha relación con 
									las nuevas tecnologías de la comunicación y la información como herramientas para entender los nuevos contextos de 
									producción y circulación del conocimiento;
								</li>																	
								<li>
									Analizar las dimensiones social y ética a través de una constante reflexión crítica del “ser docente” y reflexionar 
									sobre los supuestos y valoraciones de la práctica, los actores intervinientes y los contextos.
								</li>						
							</ul>
						<p></p>
				</p>
			</div>
            <!--Tab Perfil-->

            <!--Tab Alcances-->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Alcances del Título</b><br>
						<ul> 
							<li>Planificar la formulación de objetivos, contenidos, estrategias y modalidades de acción, recursos humanos y materiales, 
							en tiempos previstos para el desarrollo del proceso de enseñanza.</li>
							<li>Conducir y orientar los grupos de aprendizaje para la realización de los procesos planificados.</li>
							<li>Evaluar el análisis de los procesos de aprendizaje y de enseñanza desde las variables que intervienen en ellos, a fin de 
							fundamentar la toma de decisiones, el ajuste en las acciones didácticas, el establecimiento de niveles de calidad, 
							y el análisis y reflexión sobre las prácticas pedagógicas.</li>
							<li>lntegrar equipos interdisciplinarios para diseñar, ejecutar y evaluar proyectos de investigación referidos a problemáticas del ámbito escolar y social.</li>
						</ul>
				</p>				
			</div>
            <!--Tab Alcances-->

            <!--Tab Programa de Asignaturas-->
			<div class="tab-pane fade" id="v-pills-asignaturas" role="tabpanel" aria-labelledby="v-pills-asignaturas-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Programa de Asignaturas</b>
                    <!--Programa de Asignaturas-->
					<div class="container mb-4" style="font-size: 0.9rem">
						<div class="row border border-dark mx-1">
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
						<div class="col-6 py-2">Actividad Curricular Opcional I: Educación Ambiental y desarrollo sostenible</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KI6PiD7M2s38zhMggTG7PJbVXlvXr7RJ/view?usp=sharing">Descargar Programa</a></div>
						<div class="col-6 py-2">Educación Física en la Educación Inicial</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CSmkFNe6USI20gXGcZh6CbIWUT2so8zz/view?usp=sharing">Descargar Programa</a></div>
						<div class="col-6 py-2">Política Educacional y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zCqUe48jvYkRDnovCWOjXlN8rur4u-4u/view?usp=sharing">Descargar Programa</a></div>
						<div class="col-6 py-2">Residencia I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1M9ELxg5MYtDBygPO_q9Fm61SrMM5HqtO/view?usp=sharing">Descargar Programa</a></div>
						<div class="col-6 py-2">Taller: Proyectos Educativos y Socio-Comunitarios</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1uo-mPE2dmTumv4mZqc38woEd8cHVk5yh/view?usp=sharing">Descargar Programa</a></div>
						<div class="col-6 py-2">Educación para la Salud</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1eyOo5x99QZ_2HMF_ns9KzDZdZ2nVROsc/view?usp=sharing">Descargar Programa</a></div>
						<div class="col-6 py-2">Residencia II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10ASb10gUtqQDHPAY_VePqjXj-B9qQCOw/view?usp=sharing">Descargar Programa</a></div>
						<div class="col-6 py-2">Seminario Derechos Humanos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1lLoDgDfT70dJg_JVBpuiHO0u3kmT3oyF/view?usp=sharing">Descargar Programa</a></div>
						
						<!--<div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rZXExKLq9lVtx8s1IAAXfCfhMc5TVvsP/view?usp=sharing">Descargar Programa</a></div>-->

						<div class="col-6 py-2">Tecnología Educativa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://www.humanas.unlpam.edu.ar/storage/public/asignaturas/profesorado_en_ed_inicial/2025/11112025/Tecnologia_Educativa_2025.pdf" target="_blank">Descargar Programa</a></div>
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