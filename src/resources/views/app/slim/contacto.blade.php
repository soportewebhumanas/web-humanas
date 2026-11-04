@extends('app.slim.layouts.home')

@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text pt-2">
						<p><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Contactos</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>
<section class="contact-area-02">
	<div class="container">
		<div class="row pb-4">
			<div class="col-12">
				<!-- Sedes -->
				<div id="accordion">
					<div class="card">
						<div class="card-header" style="background-color:#26406C" id="Sedes">
						<h5 class="mb-0">
							<button class="btn btn-link text-light" data-toggle="collapse" data-target="#collapseSedes" aria-expanded="true" aria-controls="collapseSedes">
								Sedes
							</button>
						</h5>
						</div>

						<div id="collapseSedes" class="collapse" aria-labelledby="headingSedes" data-parent="#accordion">
						<div class="card-body">
							<span class="font-weight-bold">Sede Santa Rosa</span><br>
							<i class="fa fa-phone"></i> 02954-451611<br>
							<!--<i class="fa fa-envelope"></i> <br>-->
							<i class="fa fa-map-marker"></i> Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>

							<span class="font-weight-bold">Sede General Pico</span><br>
							<i class="fa fa-phone"></i> 02302-422780<br>
							<!--<i class="fa fa-envelope"></i> <br>-->
							<i class="fa fa-map-marker"></i> Calle 7 esq. 110, General Pico<br>

						</div>
						</div>
					</div>
				</div>
				<!-- Sedes-->
				<!-- Decanato -->
				<div id="accordion">
					<div class="card">
						<div class="card-header" style="background-color:#26406C" id="Decanato">
						<h5 class="mb-0">
							<button class="btn btn-link text-light" data-toggle="collapse" data-target="#collapseDecanato" aria-expanded="true" aria-controls="collapseDecanato">
								Decanato
							</button>
						</h5>
						</div>

						<div id="collapseDecanato" class="collapse" aria-labelledby="headingDecanato" data-parent="#accordion">
						<div class="card-body">
							<span class="font-weight-bold">Decana</span><br>
							<span class="font-weight-bold">Prof. Beatriz Elena Cossio</span><br>
							<i class="fa fa-phone"></i> 02954-451606<br>
							<i class="fa fa-envelope"></i> decanato@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i>  Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>

							<span class="font-weight-bold">Vice-Decana</span><br>
							<span class="font-weight-bold">Prof. Verónica Zucchini</span><br>
							<i class="fa fa-phone"></i> 02954-451606<br>
							<i class="fa fa-envelope"></i> vicedecanato@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i>  Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br>
						</div>
						</div>
					</div>
				</div>
				<!-- Decanato -->
				<!-- Secretarías y Pro Secretaría -->
				<div id="accordion">
					<div class="card">
						<div class="card-header" style="background-color:#26406C" id="Secretarias">
						<h5 class="mb-0">
							<button class="btn btn-link text-light" data-toggle="collapse" data-target="#collapseSecretarias" aria-expanded="true" aria-controls="collapseSecretarias">
								Secretarías
							</button>
						</h5>
						</div>

						<div id="collapseSecretarias" class="collapse" aria-labelledby="headingSecretarias" data-parent="#accordion">
						<div class="card-body">
							<span class="font-weight-bold">Secretaría Académica</span><br>
							<span class="font-weight-bold">Prof. Laura Sánchez</span><br>
							<i class="fa fa-phone"></i> 02954-451662<br>
							<i class="fa fa-envelope"></i> secretariaacademica@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i> Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>
	
							<span class="font-weight-bold">Secretaría Académica</span><br>
							<span class="font-weight-bold">Martín Alejandro Ussei</span><br>
							<i class="fa fa-phone"></i> 02954-451654<br>
							<i class="fa fa-envelope"></i> sadm@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i> Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>

							<span class="font-weight-bold">Secretaría del Consejo Directivo y Relaciones Institucionales</span><br>
							<span class="font-weight-bold">Prof. María Marta Dukart</span><br>
							<i class="fa fa-phone"></i> 02954-451656<br>
							<i class="fa fa-envelope"></i> secretariaconsejo@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i> Dirección: Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>

							<span class="font-weight-bold">Secretaría de  Investigación y Posgrado</span><br>
							<span class="font-weight-bold">Dra. María Pía Bruno</span><br>
							<i class="fa fa-phone"></i> 451661<br>
							<i class="fa fa-envelope"></i> secretariaposgrado@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i> Dirección: Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>

							<span class="font-weight-bold">Pro Secretaría Privada de Decano</span><br>
							<span class="font-weight-bold">Dr. Eric Morales Schmuker<br></span>
							<i class="fa fa-phone"></i> Telefono: 02954-451606<br>
							<i class="fa fa-envelope"></i> E-mail: decanato@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i> Dirección: Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>
						</div>
						</div>
					</div>
				</div>
				<!-- Secretarías y Pro Secretaría-->
				<!-- Departamento de Estudiantes -->
				<div id="accordion">
					<div class="card">
						<div class="card-header" style="background-color:#26406C" id="DepartamentoEstudiantes">
						<h5 class="mb-0">
							<button class="btn btn-link text-light" data-toggle="collapse" data-target="#collapseDepartamentoEstudiantes" aria-expanded="true" aria-controls="collapseDepartamentoEstudiantes">
								Departamento de Estudiantes
							</button>
						</h5>
						</div>

						<div id="collapseDepartamentoEstudiantes" class="collapse" aria-labelledby="headingDepartamentoEstudiantes" data-parent="#accordion">
						<div class="card-body">
							<span class="font-weight-bold">Departamento de Estudiantes (Santa Rosa)</span><br>
							<i class="fa fa-envelope"></i> departamentoestudiantes@humanas.unlpam.edu.ar<br><br>

							<span class="font-weight-bold">Departamento Estudiantes (General Pico)</span><br>
							<i class="fa fa-envelope"></i> departamentoestudiantesgp@humanas.unlpam.edu.ar<br><br>						
						</div>
						</div>
					</div>
				</div>
				<!-- Departamento de Estudiantes -->				
				<!-- Departamentos -->
				<div id="accordion">
					<div class="card">
						<div class="card-header" style="background-color:#26406C" id="Departamentos">
						<h5 class="mb-0">
							<button class="btn btn-link text-light" data-toggle="collapse" data-target="#collapseDepartamentos" aria-expanded="true" aria-controls="collapseDepartamentos">
								Departamentos
							</button>
						</h5>
						</div>

						<div id="collapseDepartamentos" class="collapse" aria-labelledby="headingDepartamentos" data-parent="#accordion">
						<div class="card-body">
							<a href="{{route('carreras.grado.departamento.ciencias-educacion')}}">Departamento de Ciencias de la Educación</a><br>
							<a href="{{route('carreras.grado.departamento.comunicacion-social')}}">Departamento de Comunicación Social</a><br>
							<a href="{{route('carreras.grado.departamento.educacion-inicial')}}">Departamento de Educación Inicial</a><br>
							<a href="{{route('carreras.grado.departamento.educacion-primaria')}}">Departamento de Educación Primaria</a><br>
							<a href="{{route('carreras.grado.departamento.formacion-docente')}}">Departamento de Formación Docente</a><br>
							<a href="{{route('carreras.grado.departamento.geografia')}}">Departamento de Geografía</a><br>
							<a href="{{route('carreras.grado.departamento.historia')}}">Departamento de Historia</a><br>
							<a href="{{route('carreras.grado.departamento.lenguas-extranjeras')}}">Departamento de Lenguas Eextranjeras</a><br>
							<a href="{{route('carreras.grado.departamento.letras')}}">Departamento de Letras</a><br>
						</div>
						</div>
					</div>
				</div>
				<!-- Departamentos-->
				<!-- Investigación -->
				<div id="accordion">
					<div class="card">
						<div class="card-header" style="background-color:#26406C" id="Investigacion">
						<h5 class="mb-0">
							<button class="btn btn-link text-light" data-toggle="collapse" data-target="#collapseInvestigacion" aria-expanded="true" aria-controls="collapseInvestigacion">
								Investigación
							</button>
						</h5>
						</div>

						<div id="collapseInvestigacion" class="collapse" aria-labelledby="headingInvestigacion" data-parent="#accordion">
						<div class="card-body">
							<a href="{{route('institutos')}}">Institutos</a><br>
						</div>
						</div>
					</div>
				</div>
				<!-- Investigacion-->
				<!-- Programas -->
				<div id="accordion">
					<div class="card">
						<div class="card-header" style="background-color:#26406C" id="Programas">
						<h5 class="mb-0">
							<button class="btn btn-link text-light" data-toggle="collapse" data-target="#collapseProgramas" aria-expanded="true" aria-controls="collapseProgramas">
								Programas Institucionales
							</button>
						</h5>
						</div>

						<div id="collapseProgramas" class="collapse" aria-labelledby="headingProgramas" data-parent="#accordion">
						<div class="card-body">
							<span class="font-weight-bold">Programa de Ambientación a la Vida Universitaria</span><br>
							<span class="font-weight-bold">Profesoras María Esther Folco y Verónica Zucchini</span><br>
							<span class="font-weight-bold">Sede Santa Rosa: </span><i class="fa fa-envelope"></i> ambientacionsantarosa@humanas.unlpam.edu.ar<br>
							<span class="font-weight-bold">Sede General Pico: </span><i class="fa fa-envelope"></i> ambientaciondistancia@humanas.unlpam.edu.ar<br><br>
							
							<span class="font-weight-bold">Programa de Formación y Acompañamiento a las Trayectorias Pedagógicas Diversas</span><br>
							<span class="font-weight-bold">Dra. Silvia Siderac</span><br>
							<i class="fa fa-envelope"></i> trayectoriasdiversas@humanas.unlpam.edu.ar<br><br>

							<span class="font-weight-bold">Programa del Campo de las Prácticas Comunitarias</span><br>
							<span class="font-weight-bold">Profesores Carlos Alainez y Franco Carcedo</span><br>
							<span class="font-weight-bold">Sede Santa Rosa: </span><i class="fa fa-envelope"></i> comunitariasgp@humanas.unlpam.edu.ar<br>
							<span class="font-weight-bold">Sede General Pico: </span><i class="fa fa-envelope"></i> comunitarias@humanas.unlpam.edu.ar<br><br>					

							<span class="font-weight-bold">Programa de Prácticas Profesionales (Sede Santa Rosa)</span><br>
							<span class="font-weight-bold">Dra. María Graciela Di Franco</span><br>
							<i class="fa fa-envelope"></i> campodelaspracticas@humanas.unlpam.edu.ar<br>
						</div>
					</div>
				</div>
				<!-- Programas-->
				<!-- PAGP -->
				<div id="accordion">
					<div class="card">
						<div class="card-header" style="background-color:#26406C" id="PAGP">
						<h5 class="mb-0">
							<button class="btn btn-link text-light" data-toggle="collapse" data-target="#collapsePAGP" aria-expanded="true" aria-controls="collapsePAGP">
								Personal Administrativo (General Pico)
							</button>
						</h5>
						</div>
							<div id="collapsePAGP" class="collapse" aria-labelledby="headingPAGP" data-parent="#accordion">
							<div class="card-body">
								<span class="font-weight-bold">Bedelía</span><br>
								<i class="fa fa-envelope"></i> bedeliagp@humanas.unlpam.edu.ar<br><br>

								<span class="font-weight-bold">Mesa de Entradas</span><br>
								<i class="fa fa-envelope"></i> mesaentradasgp@humanas.unlpam.edu.ar<br><br>

								<span class="font-weight-bold">Área de Educación a Distancia</span><br>
								<i class="fa fa-envelope"></i> distancia@humanas.unlpam.edu.ar<br><br>

								<span class="font-weight-bold">Coordinación Educación a Distancia</span><br>
								<i class="fa fa-envelope"></i> coordinaciondistancia@humanas.unlpam.edu.ar<br><br>

								<span class="font-weight-bold">División Docentes</span><br>
								<i class="fa fa-envelope"></i> divisiondocentesgp@humanas.unlpam.edu.ar<br><br>

								<span class="font-weight-bold">Area Personal</span><br>
								<i class="fa fa-envelope"></i> divisionpersonalgp@humanas.unlpam.edu.ar<br><br>

								<span class="font-weight-bold">Coordinación Académico-Administrativa</span><br>
								<i class="fa fa-envelope"></i> coordinacion@humanas.unlpam.edu.ar<br><br>

								<span class="font-weight-bold">Posgrado</span><br>
								<i class="fa fa-envelope"></i> posgradogp@humanas.unlpam.edu.ar<br><br>

						</div>
						</div>
					</div>
				</div>
				<!-- PAGP-->
				<!-- PASR -->
				<div id="accordion">
					<div class="card">
						<div class="card-header" style="background-color:#26406C" id="PASR">
						<h5 class="mb-0">
							<button class="btn btn-link text-light" data-toggle="collapse" data-target="#collapsePASR" aria-expanded="true" aria-controls="collapsePASR">
								Personal Administrativo (Santa Rosa)
							</button>
						</h5>
						</div>

						<div id="collapsePASR" class="collapse" aria-labelledby="headingPASR" data-parent="#accordion">
						<div class="card-body">
									<span class="font-weight-bold">Bedelía</span><br>
									<i class="fa fa-envelope"></i> bedelia@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Mesa de entradas</span><br>
									<i class="fa fa-envelope"></i> mesaentradas@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Despacho</span><br>
									<i class="fa fa-envelope"></i> despacho@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Dirección Académica</span><br>
									<i class="fa fa-envelope"></i> direccionacademica@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Departamento Docente</span><br>
									<i class="fa fa-envelope"></i> departamentodocente@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Dirección Económico Administrativa</span><br>
									<i class="fa fa-envelope"></i> direccionadministrativa@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Departamento Económico Financiero</span><br>
									<i class="fa fa-envelope"></i> departamentoeconomico@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Departamento de Recursos Humanos</span><br>
									<i class="fa fa-envelope"></i> recursoshumanos@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Departamento de Investigación y Posgrado</span><br>
									<i class="fa fa-envelope"></i> departamentoinvestigacion@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Posgrado</span><br>
									<i class="fa fa-envelope"></i> posgrado@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Consejo Directivo</span><br>
									<i class="fa fa-envelope"></i> consejodirectivo@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Prensa</span><br>
									<i class="fa fa-envelope"></i> prensa@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Departamento Tecnología</span><br>
									<i class="fa fa-envelope"></i> tecnologia@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">División Personal</span><br>
									<i class="fa fa-envelope"></i> divisionpersonal@humanas.unlpam.edu.ar<br><br>
									<span class="font-weight-bold">Soporte Web</span><br>
									<i class="fa fa-envelope"></i> soporteweb@humanas.unlpam.edu.ar<br><br>									
						</div>
						</div>
					</div>
				</div>
				<!-- PASR-->
				<!-- Biblioteca UNLPam-->
				<div id="accordion">
					<div class="card">
						<div class="card-header" style="background-color:#26406C" id="Biblioteca">
						<h5 class="mb-0">
							<button class="btn btn-link text-light" data-toggle="collapse" data-target="#collapseBiblioteca" aria-expanded="true" aria-controls="collapseBiblioteca">
								Biblioteca UNLPam
							</button>
						</h5>
						</div>

						<div id="collapseBiblioteca" class="collapse" aria-labelledby="headingBiblioteca" data-parent="#accordion">
						<div class="card-body">
							<span class="font-weight-bold">Sede Santa Rosa</span><br>
							<i class="fa fa-map-marker"></i> Coronel Gil 353, 1er. Subsuelo (6300)<br> 
							<a href="mailto:webmaster@biblioteca.unlpam.edu.ar"><i class="fa fa-envelope"></i> webmaster@biblioteca.unlpam.edu.ar</a><br><br>
							
							<span class="font-weight-bold">Sede General Pico</span><br>
							<i class="fa fa-map-marker"></i> Calle 2 esquina 9 oeste General Pico,La Pampa<br>
							<a href="mailto:bibliogp@unlpam.edu.ar"><i class="fa fa-envelope"></i> bibliogp@unlpam.edu.ar</a><br><br>

							<span class="font-weight-bold">Biblioteca del Instituto de la Mujer</span><br>
							<span class="font-weight-bold">Lic. María Herminia Di Liscia</span><br>
							<a href="mailto:bibliotecamujer@humanas.unlpam.edu.ar"><i class="fa fa-envelope"></i> bibliotecamujer@humanas.unlpam.edu.ar</a><br>
						</div>
						</div>

					</div>
				</div>
				<!-- Biblioteca-->
				<!-- Bienenestar Estudiantil UNLPam-->
				<div id="accordion">
					<div class="card">
						<div class="card-header" style="background-color:#26406C" id="BienenestarEstudiantil">
						<h5 class="mb-0">
							<button class="btn btn-link text-light" data-toggle="collapse" data-target="#collapseBienenestarEstudiantil" aria-expanded="true" aria-controls="collapseBienenestarEstudiantil">
								Bienenestar Estudiantil UNLPam
							</button>
						</h5>
						</div>

						<div id="collapseBienenestarEstudiantil" class="collapse" aria-labelledby="headingBienenestarEstudiantil" data-parent="#accordion">
						<div class="card-body">
							Secretaría de Bienestar Estudiantil<br>
								<a href="http://www.unlpam.edu.ar/bienestar-universitario" target="_blank">www.unlpam.edu.ar/bienestar-universitario</a><br>					
								<i class="fa fa-map-marker"></i> Mansilla 178-(6300), Santa Rosa - La Pampa<br> 
								<i class="fa fa-phone"></i> +54-(0)2954-436476<br>
								<i class="fa fa-phone"></i> +54-(0)2954-421452<br>
								<i class="fa fa-envelope"></i> secbienestar@unlpam.edu.ar<br>
						</div>
						</div>
					</div>
				</div>
				<!-- Bienenestar Estudiantil-->																																				
			</div>				
				
			</div>
				

		
			
				

		<!--
			<div class="col-sm-6 contact-info">
				<div class="col-sm-12 contact-title">
					<h2>Sede Santa Rosa</h2>		
					<p class="content-sub_p">En la ciudad de Santa Rosa, se dictan carreras relacionadas con las áreas de Geografía, Historia, Lenguas Extranjeras, Letras y Comunicación. Asimismo  se encuentra el Colegio de la Universidad Nacional de La Pampa. </p>
				</div>
				<div class="col-sm-12 contact-box">
					<div class="row">
						<div class="col-sm-12 col-md-6 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-phone"></i>
                                <h4>Telefono</h4>
                                <p>02954-451611</p>
                            </div>
                        </div>  
                        <div class="col-sm-12 col-md-6  single-address-box">
                            <div class="single-address">
                                <i class="fa fa-envelope"></i>
                                <h4>Email</h4>
                                <p>hello@education.com</p>
                            </div>
                        </div> 
                        <div class="col-sm-12 col-md-12 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-map-marker"></i>
                                <h4>Dirección:</h4>
                                <p>Cnel. Gil Nº 353, 2do. Piso, Santa Rosa</p>
                            </div>
	                    </div> 
	                	<div class="col-sm-12 single-address-box">
	                        <ul class="list-unstyled">
								<li><a href=""><i class="fa fa-facebook teacher-icon"></i></a></li>
								<li><a href=""><i class="fa fa-twitter teacher-icon"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus teacher-icon"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin teacher-icon"></i></a></li>
								<li><a href=""><i class="fa fa-instagram teacher-icon"></i></a></li>
							</ul>	 
	                	</div> 
                    </div>
                </div>                          	                        
            </div>
            <div class="col-sm-6 contact-info">
				<div class="col-sm-12 contact-title">
					<h2>Sede General Pico</h2>		
					<p class="content-sub_p">En la ciudad de General Pico, situada a 130 km. de la capital provincial, se dictan carreras relacionadas con las Ciencias de la Educación, Educación Inicial y Educación Primaria.</p>
				</div>
				<div class="col-sm-12 contact-box">
					<div class="row">
						<div class="col-sm-12 col-md-6 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-phone"></i>
                                <h4>Telefono</h4>
                                <p>02302-422780</p>
                            </div>
                        </div>  
                        <div class="col-sm-12 col-md-6  single-address-box">
                            <div class="single-address">
                                <i class="fa fa-envelope"></i>
                                <h4>Email</h4>
                                <p>hello@education.com</p>
                            </div>
                        </div> 
                        <div class="col-sm-12 col-md-12 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-map-marker"></i>
                                <h4>Dirección:</h4>
                                <p>Calle 7 esq. 110, General Pico</p>
                            </div>
	                    </div>
	                	<div class="col-sm-12 single-address-box">
	                        <ul class="list-unstyled">
								<li><a href=""><i class="fa fa-facebook teacher-icon"></i></a></li>
								<li><a href=""><i class="fa fa-twitter teacher-icon"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus teacher-icon"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin teacher-icon"></i></a></li>
								<li><a href=""><i class="fa fa-instagram teacher-icon"></i></a></li>
							</ul>	 
	                	</div> 
                    </div>
                </div>                          	                        
			</div>-->
		</div>
	</div>
</section>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
	$('body').addClass('contact');
});
</script>
@endsection

