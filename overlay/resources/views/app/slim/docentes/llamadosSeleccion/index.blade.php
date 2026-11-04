@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
							<span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
							<span><a href="{{route('docentes.inicio')}}">Docentes <i class='fa fa-angle-right'></i></a></span> 
							<span class="b-active">Llamados a Selección y Concursos</span>
						</p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>

<!--Inicio Contenido-->
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

.card-header h2 button{
    color: #26406c !important;
}
.collapse .card-body a{
    color: #26406c !important;
}
</style>
<div class="container mb-4 my-2">
	<div class="row text-left mx-1 mb-2">
		<div class="col-12 py-2">
			<h3>Docentes</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Llamados a Selección</a>
			<a class="nav-link" id="ConcursosDocentes-tab" data-toggle="pill" href="#ConcursosDocentes" role="tab" aria-controls="ConcursosDocentes" aria-selected="true">Concursos Docentes</a>
		</div>
		<div class="col-12 d-xl-none">
			<hr>
		</div>
		<div class="tab-content col-12 col-xl-8 col-lg-8 mb-5" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!--LLAMADOS VIGENTES-->
							<div class="col-sm-12 text-center">
								<h3 class="text-success">LLAMADOS VIGENTES</h3>
								@if ($cantVigentes == 0)
								<div class='text-center'>
									<p style="color:darkblue; font-style: italic;">
									No hay llamados a selección vigentes para visualizar
									</p>
								</div>
								@endif
								</div>
								<div class=" text-left">
								@foreach($llamadosSeleccionVigentes as $llamadoSeleccion)
									<div class="card">
									<div class="card-body">
										<p class="card-text">
											<b style="color: #26406c !important;">Asignatura:</b> 
											{{$llamadoSeleccion->asignatura}}<br>
											<b style="color: #26406c !important;">Cantidad:</b> 
											{{ $llamadoSeleccion->cantidad}}<br>
											<b style="color: #26406c !important;">Cargo: </b>
											{{ $llamadoSeleccion->cargo}}<br>
											<b style="color: #26406c !important;">Dedicación: </b>
											{{$llamadoSeleccion->dedicacion}}<br>
											<b style="color: #26406c !important;">Departamento: </b>
											{{$llamadoSeleccion->departamento}}<br>
										</p>
										<a role="button" class="btn btn-primary btn-sm border-0" style="float:left; background-color:#1b365d !important;"  href="{{route('llamadosSeleccion.show', $llamadoSeleccion->id)}}" class="card-text"><b>Ver más detalles</b></a>
									</div>
									</div>
								@endforeach
								</div>
							</div>
							
							<div class="container">
								<div class="row">
									<div class="col-12">
										<hr>
									</div>
								</div>
							</div>
							
							<!--LLAMADOS VENCIDOS-->
							<div class="container">
								<div class="col-sm-12 text-center">
								<h3 class="text-danger">LLAMADOS FINALIZADOS</h3>
									@if ($cantFinalizados == 0)
									<div class='text-center'>
										<p style="color:darkblue; font-style: italic;">
										No hay llamados a selección finalizados para visualizar
										</p>
									</div>
									@endif
								</div>

								<div class=" text-left">
								@foreach($llamadosSeleccionFinalizados as $llamadoSeleccion)
									<div class="card">
									<div class="card-body">
										<p class="card-text">
											<b style="color: #26406c !important;">Asignatura:</b> 
											{{$llamadoSeleccion->asignatura}}<br>
											<b style="color: #26406c !important;">Cantidad:</b> 
											{{ $llamadoSeleccion->cantidad}}<br>
											<b style="color: #26406c !important;">Cargo: </b>
											{{ $llamadoSeleccion->cargo}}<br>
											<b style="color: #26406c !important;">Dedicación: </b>
											{{$llamadoSeleccion->dedicacion}}<br>
											<b style="color: #26406c !important;">Departamento: </b>
											{{$llamadoSeleccion->departamento}}<br>
										</p>
										<a role="button" class="btn btn-primary btn-sm border-0" style="float:left; background-color:#1b365d !important;"  href="{{route('llamadosSeleccion.show', $llamadoSeleccion->id)}}" class="card-text"><b>Ver más detalles</b></a>
									</div>
									</div>
								@endforeach
							</div>						
						</div>

						<div class="container">
							<div class="row">
								<div class="col-12">
									<hr>
								</div>
							</div>
						</div>
						<div class="col-12">
							<!-- Collapse 1 - Llamados a Selección -->
							<div class="accordion" id="accordionExample">
								<div>
									<div class="card-header" id="headingOne">
									<h2 class="mb-0">
										<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Contacto
										</button>
									</h2>
									</div>

									<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
									<div class="card-body">
										<a href="mailto:departamentodocente@humanas.unlpam.edu.ar">departamentodocente@humanas.unlpam.edu.ar</a><br>
										<a href="mailto:direccionacademica@humanas.unlpam.edu.ar">direccionacademica@humanas.unlpam.edu.ar</a><br>
									</div>
									</div>
								</div>
								<div>
									<div class="card-header" id="headingTwo">
									<h2 class="mb-0">
										<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Resoluciones, Actas y Ordenanzas
										</button>
									</h2>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
									<div class="card-body">
										<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2020_118.pdf" target="_blank">Res. 118-CS-2020 - Pautas Complementarias Excecpionales Reglamento Selección Aspirantes</a><br>
										<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2003_178_Um9YoZd.pdf" target="_blank">Res. 178-CS-2003 - Reglamento para la selección de aspirantes a cubrir cargos docentes interinos</a><br>
										<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2015_76.pdf" target="_blank">Ord. 76-CD-2015 - Reglamento Selección de docentes interinos FCH</a><br><br>
									</div>
									</div>
								</div>
							</div>
							<!-- Collapse 1 - Llamados a Selección -->							
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="ConcursosDocentes" role="tabpanel" aria-labelledby="ConcursosDocentes-tab">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!--Concursos a mostrar-->
							@php
								use Carbon\Carbon;
								$fechaInicio = Carbon::create(2025, 11, 13, 8, 0, 0);
								$fechaFin = Carbon::create(2025, 12, 29, 12, 0, 0);
								$ahora = now();
							@endphp

							@if ($ahora->between($fechaInicio, $fechaFin))
									<h3>Concursos Docentes</h3>
									<!-- card concursos-->
									<div class='card'>
										<div class='card-body'>
											<h4 class="text-center">CONCURSO DE CARGOS DE PROFESORES Y DOCENTES AUXILIARES REGULARES, DIFUSIÓN Y PERÍODO DE INSCRIPCIÓN</h4>
											<br>
											<p class="text-justify text-dark">
												Período de Inscripción: 4 al 29 de diciembre de 2025
												Horario: desde las 08:00 del 4 de diciembre hasta las 12:00 del día 29 de diciembre de 2025<br>
												<i class="fas fa-file-pdf text-danger text-center"></i> <a href='https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_785.pdf' target='_blank'>Res. 785-FCH-2025</a>
											</p>
											<hr>
											<p class='card-text text-dark text-center font-weight-bold'>
												Departamento de Letras<br>
											</p>
											 
											<p class='card-text text-dark text-center'>
												<hr>

												Actividad curricular: Literatura Latinoamericana II<br>
												Categoría: Profesor Adjunto<br> 
												Dedicación: Exclusiva<br>
												<a style='color:green' href='https://forms.gle/9jF9mG1N97TCnHXr6' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br><br>

												Actividad curricular: Lenguas y Literatura Griegas<br>
												Categoría: Jefa/e de Trabajos Prácticos<br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/Ve9smZfkqntxK9aGA' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br>
												<hr>
											</p>											

											<p class='card-text text-dark text-center font-weight-bold'>
												Departamento de Educación Inicial, Educación Primaria y Ciencias de la Educación<br>
											</p>
											
											<p class='card-text text-dark text-center'>
												<hr>
												Actividad curricular: Antropología <br>
												Categoría: Tres (3) Ayudante de Primera<br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/j5x1Ffobm4xzRJVj6' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br><br>
											
												Actividad curricular: Práctica I<br>
												Categoría: Dos (2) Ayudante de Primera<br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/9xim8S5QC62Qfusi8' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br>
												<hr>
											</p>											

											<p class='card-text text-dark text-center font-weight-bold'>
												Departamento de Educación Primaria<br>
											</p>
											<p class='card-text text-dark text-center'>
												<hr>
												Actividad curricular: Educación Artística<br>
												Categoría: Dos (2) Ayudante de Primera <br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/3DwibEbiW6dQXePS9' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br><br>
												
												Actividad curricular: Lengua y su Didáctica I - Lengua y su Didáctica II <br>
												Categoría: Dos (2) Ayudante de Primera <br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/LY6cxf1xUuQx4x2D6' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br><br>

												Actividad curricular: Residencia I - Residencia II <br>
												Categoría: Ayudante de Primera <br> 
												Dedicación: Semiexclusiva<br>
												<a style='color:green' href='https://forms.gle/GntvFJvchXTEwfpc7' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br><br>

												Actividad curricular: Matemática y Su Didáctica I - Matemática y Su Didáctica II<br>
												Categoría: Jefa/e de Trabajos Prácticos <br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/mPjZVRozvs74dTWEA' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br>
												<hr>
											</p>

											<p class='card-text text-dark text-center font-weight-bold'>
												Departamento de Ciencias de la Educación<br>
											</p>

											<p class='card-text text-dark text-center'>
												<hr>
												Actividad curricular: Didáctica I. Teorías De La Enseñanza <br>
												Categoría: Ayudante de Primera<br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/5L3jxPWrNRthSJeG7' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br><br>

												Actividad curricular: Didáctica del Nivel Inicial y del Nivel Primario<br>
												Categoría: Ayudante de Primera<br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/PKWtbXvvUyRfeWkt7' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br><br>

												Actividad curricular: Fundamentos Biológicos del Aprendizaje<br>
												Categoría: Ayudante de Primera<br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/6qGCuMZKdExMKTkw6' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br><br>
												<hr>
											</p>
											
											<p class='card-text text-dark text-center font-weight-bold'>
												Departamentos: Educación Inicial<br>
											</p>

											<p class='card-text text-dark text-left'>
												<hr>
												Actividad curricular: Residencia I - Residencia II<br>
												Categoría: Ayudante de Primera<br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/hAmuExwXFBNh6aL4A' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br><br>

												Actividad curricular: Educación Física en la Educación Inicial<br>
												Categoría: Jefa/e de Trabajos Prácticos<br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/4Zox8gJKcY4JNg6R9' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br><br>												
												<hr>
											</p>

											  											
											<p class='card-text text-dark text-center font-weight-bold'>
												Departamentos: Educación Primaria y Ciencias de La Educación<br>
											</p>

											<p class='card-text text-dark text-center'>
												<hr>
												Actividad curricular: Práctica II<br>
												Categoría: Ayudante de Primera<br> 
												Dedicación: Simple<br>
												<a style='color:green' href='https://forms.gle/5s88b96QEHn7ddtV6' class='card-text' target='_blank'><b>Formulario de inscripción</b></a>
												<br><br>
												<hr>
											</p>


										</div>
									</div>
									<!-- card concursos-->
								<hr>	
							@else
								<h3></h3>
							@endif
							<!--Concursos a mostrar-->
							<!--<hr>-->
						</div>
					</div>
				</div>


				<!-- Collapse 2 - Concursos Docentes -->
				<div class="accordion" id="accordionExample">
				<!--Llamados a Concursos Docentes-->
					<div>
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Llamados a Concursos Docentes
								</button>
							</h2>
							</div>

							<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2024_341.pdf" target="_blank">Resolución Nº 341-CS-24 - Llamado a concurso Formación Docente y comunicación Social - Facultad de Ciencias Humanas</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2024_388.pdf" target="_blank">Resolución Nº 388-CS-24 - Llamado a concurso "Lenguas Extranjeras"</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2025_446.pdf" target="_blank">Resolución Nº 446-CS-24 - Llamado a concurso "Historia Medieval" - Facultad de Ciencias Humanas</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2024_447.pdf" target="_blank">Resolución Nº 447-CS-24 - Llamado a concurso Prof. Adj "Didáctica Especial" - Facultad de Ciencias Humanas</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2024_448.pdf" target="_blank">Resolución Nº 448-CS-24 - Llamado a concurso Ay. Prim. "Didáctica Especial" - Facultad de Ciencias Humanas</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2024_449.pdf" target="_blank">Resolución Nº 449-CS-24 - Llamado a concurso Ay. Prim. "Fundamentos de Economía" - Facultad de Ciencias Humanas</a><br>-->
								
								
							</div>
						</div>
					</div>

					<!--Actas de Cierre-->
					<div>
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Actas de Cierre
								</button>
							</h2>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
								<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xiljOvQRWaepOkUuzBO67sxCZIjULX8Q/view?usp=drive_link" target="_blank">Acta cierre inscripción Concurso de cargos Res. 341-CS-24</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IFvVqPZ13ssD5Vpfvx_nBsbsWRS3p9jT/view?usp=drive_link" target="_blank">Acta cierre inscripción Concurso de cargos Res. 388, 446, 447, 448 y 449-CS-2024</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zG6dxtt8Ss20msbf09T07El7S_S8MR9B/view?usp=sharing" target="_blank">Acta cierre inscripción Concurso de cargos Res. 47, 48, 49 y 108-CS-2025</a><br>-->
								<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1QK_ROb8gmBmVJlQd4ronesjC8SoEG9BX/view?usp=drive_link" target="_blank">Acta cierre inscripción Concurso de cargos Res. 371, 372, 373, 374 y 383-CS-2025</a><br>-->
							</div>
						</div>
					</div>
					
					<!--Difusión Llamados a Concursos-->
					<div>
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Difusión Llamados a Concursos
								</button>
							</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
								<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_4.pdf" target="_blank">Resolución Nº 004-FCH-25 - Difusión concursos de cargos de Profesores y Docentes Auxiliares de los Departamentos de Lenguas Extranjeras y de Historia</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_302.pdf" target="_blank">Resolución Nº 302-FCH-25 - Difusión concursos de cargos de Profesores y Docentes Auxiliares de los Departamentos de Geografía y de Letras</a><br>-->
								<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_785.pdf" target="_blank">Resolución Nº 785-FCH-25 - Difusión concursos de cargos de Profesores y Docentes Auxiliares de los Departamentos de Letras, Educación Inicial, Educación Primaria y Ciencias de la Educación</a><br>-->
							</div>
						</div>
					</div>
					
					<!--Fechas de Sustanciación de Concursos-->
					<div>
						<div class="card-header" id="headingFour">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Fechas de Sustanciación de Concursos
								</button>
							</h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
							<div class="card-body">
								<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_8.pdf" target="_blank">Resolución Nº 008-FCH-25 - Fecha Ayte. - Teorias de la Com. Social I</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_264.pdf" target="_blank">Resolución Nº 264-FCH-25 - Fecha Profesor/a Adjunto/a - Historia Medieval</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_335.pdf" target="_blank">Resolución Nº 335-FCH-25 - Fecha Profesor/a Adjunto/a - Didáctica Especial</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_440.pdf" target="_blank">Resolución Nº 440-FCH-25 - Fecha Ayte. de Primera - Fundamentos de Economía</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_563.pdf" target="_blank">Resolución Nº 563-FCH-25 - Fecha Ayte. de Primera Práctica I: Didáctica de la Lengua y la Literatura del Departamento de Letras</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_565.pdf" target="_blank">Resolución Nº 565-FCH-25 - Fecha Ayte Primera Didáctica Especial</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_566.pdf" target="_blank">Resolución Nº 566-FCH-25 - Fecha Ayte. de Primera I Nivel de Idioma Francés</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_651.pdf" target="_blank">Resolución Nº 651-FCH-25 - Fecha Ayte. de Primera Geología y Geomorfología</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_665.pdf" target="_blank">Resolución Nº 665-FCH-25 - Fecha Adjunto/a Problemas del Conocimiento Histórico</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_705.pdf" target="_blank">Resolución Nº 705-FCH-25 - Fecha Ay. Prim. "Int. a los Estudios Literarios"</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_725.pdf" target="_blank">Resolución Nº 725-FCH-25 - Fecha sorteo orden de exposición Ay. Prim. "Int. a los Estudios Literarios"</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_735.pdf" target="_blank">Resolución Nº 735-FCH-25 - Fecha Ay. Prim. "Práctica III: Residencia Docente en Escuelas Secundarias"</a><br>-->
								<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_21.pdf" target="_blank">Resolución Nº 021-FCH-26 - Fecha Ay. de Primera "Didáctica I, Toerías de la Enseñanza"</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_23.pdf" target="_blank">Resolución Nº 023-FCH-26 - Fecha JTP "Lengua y Literatura Griega"</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_31.pdf" target="_blank">Resolución Nº 031-FCH-26 - Fecha Adjunto/a "Literatura Latinoamericana II"</a><br>-->
								<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_525.pdf" target="_blank">Resolución Nº 525-FCH-26 - Fecha Adjunto/a "Taller de Producción Gráfica I"</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_540.pdf" target="_blank">Resolución Nº 540-FCH-26 - Fecha Ayte de 1° "Filosofía"</a><br>-->
								
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_535.pdf" target="_blank">Resolución Nº 535-FCH-26 - Establecer fecha y hora CD Ayte. de Primera dedicación semiexclusiva en Residencia I y II EP </a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_536.pdf" target="_blank">Resolución Nº 536-FCH-26 - Establecer fecha y hora CD Ayte. de Primera dedicación simple en Residencia I y II EI</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_537.pdf" target="_blank">Resolución Nº 537-FCH-26 - Establecer fecha y hora CD Ayte. de Primera dedicación simple en Fundamentos Biológicos del Aprendizaje CE</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_538.pdf" target="_blank">Resolución Nº 538-FCH-26 - Establecer fecha y hora CD 2 cargos Ayte. de Primera Lengua y su Didáctica I y Lengua y su Didáctica II EP</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_588.pdf" target="_blank">Resolución Nº 588-FCH-26 - Rectifica Resolución 537/2026</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_641.pdf" target="_blank">Resolución Nº 641-FCH-26 - Establecer fecha y hora Ayte de Primera Práctica II EP y Cs de la Educación</a><br>

								<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2026_668.pdf" target="_blank">Resolución Nº 668-FCH-26 - Establecer fecha y hora Prof. Adj. Introducción a la Planificación Comunicacional</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1R3JH-dfdGFuafYTYy6XGmJUfyByk65ui/view?usp=drive_link" target="_blank">Resolución Nº 691-FCH-26 - Establecer fecha y hora Prof. Adj. Taller de Producción Audiovisual II</a><br>

								<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ePVWEnqUfo7Lrubkwlui_47W_Z-JHije/view?usp=drive_link" target="_blank">Resolución Nº 710-FCH-26 - Establecer fecha y hora Prof. Adj. Psicología del Aprendizaje - EI-EP-CE</a><br>
								<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1p3pACYQFKEfaDO6Xf7niZk4XmbXupjNW/view?usp=drive_link" target="_blank">Resolución Nº 752-FCH-26 - Establecer fecha y hora Prof. Adj. Matemática y su Didáctica I y II - EP</a><br>
							</div>
						</div>
					</div>
				</div>
				<!-- Collapse 2 - Concursos Docentes -->
			</div>
		</div>			
	</div><!--row-->
</div><!-- container -->
<!--Fin Contenido-->

@endsection

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script>
    // Se ejecuta una vez que el DOM está completamente cargado
    $(document).ready(function() {
        // 1. Obtener el hash de la URL (e.g., "#v-pills-profile")
        var hash = window.location.hash;

        // 2. Verificar si hay un hash y buscar el enlace de la pestaña
        if (hash) {
            // Utilizamos el selector para encontrar el <a> que apunta al ID del hash
            var $tabLink = $('a[href="' + hash + '"]');

            // 3. Si se encuentra el enlace, usar el método nativo de Bootstrap para activarlo
            if ($tabLink.length) {
                // 'tab("show")' se encarga de:
                // a) Desactivar la pestaña y contenido previamente activos (ej. 'Home').
                // b) Activar el enlace del nuevo tab (añadir 'active', 'aria-selected').
                // c) Activar el contenido del nuevo tab (añadir 'show active').
                $tabLink.tab('show');
            }
        }
        
        // Opcional: Esto asegura que el hash de la URL se actualice cuando el usuario haga clic en una pestaña
        $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
          window.location.hash = e.target.hash;
        });
    });
</script>
<script>	
$( document ).ready(function() {
    $('body').removeClass();
	$('body').addClass('become_teachers');
});
</script>
