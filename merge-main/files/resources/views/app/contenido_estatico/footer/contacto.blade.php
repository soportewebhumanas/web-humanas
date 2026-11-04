@extends('app.slim.layouts.home')

@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text pt-2">
						<p><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Contacto</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
	<style>
		.accordion .card-header:after {
			font-family: 'FontAwesome';  
			content: "\f146";
			float: left;
			color: black; 
		}
		.accordion .card-header.collapsed:after {
			/* symbol for "collapsed" panels */
			content: "\f0fe";
			color: black;
		}
	</style>	
</header>
<section class="contact-area-02">
	<div class="container">
		<div class="row pb-4">
			<div class="col-12">
				<div id="accordion">
				<div class="card accordion shadow-none rounded-0 border-0">					
				<!-- Departamento de Estudiantes -->
				<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseDepartamentoEstudiantes" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Departamento de Estudiantes
							</a>
						</div>
						<div id="collapseDepartamentoEstudiantes" class="card-body collapse" data-parent="#accordion">
						<span class="font-weight-bold">Departamento de Estudiantes (Santa Rosa)</span><br>
							<i class="fa fa-envelope"></i> departamentoestudiantes@humanas.unlpam.edu.ar<br>
							<i class="fa fa-phone" aria-hidden="true"></i> 2954 451611<br><br>

							<span class="font-weight-bold">Departamento Estudiantes (General Pico)</span><br>
							<i class="fa fa-envelope"></i> departamentoestudiantesgp@humanas.unlpam.edu.ar<br>
							<i class="fa fa-phone"></i> 02302-421041 (interno 6601/6603)<br><br>
						</div>				
				<!-- Departamento de Estudiantes -->	
				<!-- PASR -->
				<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapsePASR" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
							Personal Administrativo (Santa Rosa)
							</a>
						</div>
						<div id="collapsePASR" class="card-body collapse" data-parent="#accordion">
									<span class="font-weight-bold">Bedelía</span><br>
									<i class="fa fa-envelope"></i> bedelia@humanas.unlpam.edu.ar<br>
									<i class="fa fa-phone" aria-hidden="true"></i> 2954 451611<br><br>
									<span class="font-weight-bold">Mesa de entradas</span><br>
									<i class="fa fa-envelope"></i> mesaentradas@humanas.unlpam.edu.ar<br>
									<br>
									<span class="font-weight-bold">Despacho</span><br>
									<i class="fa fa-envelope"></i> despacho@humanas.unlpam.edu.ar<br>
									<br>
									<span class="font-weight-bold">Dirección Académica</span><br>
									<i class="fa fa-envelope"></i> direccionacademica@humanas.unlpam.edu.ar<br>
									<i class="fa fa-phone" aria-hidden="true"></i> 2954 451662<br><br>
									<span class="font-weight-bold">Departamento Docente</span><br>
									<i class="fa fa-envelope"></i> departamentodocente@humanas.unlpam.edu.ar<br>
									<i class="fa fa-phone" aria-hidden="true"></i> 2954 451662<br><br>
									<span class="font-weight-bold">Dirección Económico Administrativa</span><br>
									<i class="fa fa-envelope"></i> direccionadministrativa@humanas.unlpam.edu.ar<br>
									<i class="fa fa-phone" aria-hidden="true"></i> 2954 451654<br><br>
									<span class="font-weight-bold">Departamento Económico Financiero</span><br>
									<i class="fa fa-envelope"></i> departamentoeconomico@humanas.unlpam.edu.ar<br>
									<i class="fa fa-phone" aria-hidden="true"></i> 2954 451658<br><br>
									<span class="font-weight-bold">Departamento de Recursos Humanos</span><br>
									<i class="fa fa-envelope"></i> recursoshumanos@humanas.unlpam.edu.ar<br>
									<i class="fa fa-phone" aria-hidden="true"></i> 2954 451618<br><br>
									<span class="font-weight-bold">Departamento de Investigación y Posgrado</span><br>
									<i class="fa fa-envelope"></i> departamentoinvestigacion@humanas.unlpam.edu.ar<br>
									<i class="fa fa-phone" aria-hidden="true"></i> 2954 451661<br><br>
									<span class="font-weight-bold">Posgrado</span><br>
									<i class="fa fa-envelope"></i> posgrado@humanas.unlpam.edu.ar<br>
									<i class="fa fa-phone" aria-hidden="true"></i> 2954 451661<br><br>
									<span class="font-weight-bold">Consejo Directivo</span><br>
									<i class="fa fa-envelope"></i> consejodirectivo@humanas.unlpam.edu.ar<br>
									<i class="fa fa-phone" aria-hidden="true"></i> 2954 451656<br><br>
									<span class="font-weight-bold">Prensa</span><br>
									<i class="fa fa-envelope"></i> prensa@humanas.unlpam.edu.ar<br>
									<i class="fa fa-phone" aria-hidden="true"></i> 2954 451656<br><br>
									<span class="font-weight-bold">Departamento Tecnología</span><br>
									<i class="fa fa-envelope"></i> tecnologia@humanas.unlpam.edu.ar<br>
									<i class="fa fa-phone" aria-hidden="true"></i> 2954 451653<br><br>
									<span class="font-weight-bold">Soporte Web</span><br>
									<i class="fa fa-envelope"></i> soporteweb@humanas.unlpam.edu.ar<br><br>	
						</div>
				<!-- PASR-->

				<!-- PAGP -->
				<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapsePAGP" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Personal Administrativo (General Pico)
							</a>
						</div>

						<div id="collapsePAGP" class="card-body collapse" data-parent="#accordion">
								<span class="font-weight-bold">Bedelía</span><br>
								<i class="fa fa-envelope"></i> bedeliagp@humanas.unlpam.edu.ar<br><br>

								<span class="font-weight-bold">Mesa de Entradas</span><br>
								<i class="fa fa-envelope"></i> mesaentradasgp@humanas.unlpam.edu.ar<br><br>

								<span class="font-weight-bold">Área de Educación a Distancia</span><br>
								<i class="fa fa-envelope"></i> distancia@humanas.unlpam.edu.ar<br>
								<i class="fa fa-phone"></i> 02302-421041 (interno 6609)<br><br>

								<span class="font-weight-bold">Coordinación Educación a Distancia</span><br>
								<i class="fa fa-envelope"></i> coordinaciondistancia@humanas.unlpam.edu.ar<br><br>

								<span class="font-weight-bold">División Docentes</span><br>
								<i class="fa fa-envelope"></i> divisiondocentesgp@humanas.unlpam.edu.ar<br><br>

								<span class="font-weight-bold">Area Personal</span><br>
								<i class="fa fa-envelope"></i> divisionpersonalgp@humanas.unlpam.edu.ar<br>
								<i class="fa fa-phone"></i> 02302-421041 (interno 6604)<br><br>

								<span class="font-weight-bold">Coordinación Académico-Administrativa</span><br>
								<i class="fa fa-envelope"></i> coordinacion@humanas.unlpam.edu.ar<br>
								<i class="fa fa-phone"></i> 02302-421041 (interno 6605)<br><br>

								<span class="font-weight-bold">Posgrado</span><br>
								<i class="fa fa-envelope"></i> posgradogp@humanas.unlpam.edu.ar<br><br>
						</div>	
				<!-- PAGP-->

				<!-- Secretarías y Pro Secretaría -->
				<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseSecretarias" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Secretarías
							</a>
						</div>
						<div id="collapseSecretarias" class="card-body collapse" data-parent="#accordion">
							<span class="font-weight-bold">Secretaría Académica</span><br>
							<!--<span class="font-weight-bold">Dr. Eric Morales Schmuker</span><br>-->
							<i class="fa fa-phone"></i> 02954-451662<br>
							<i class="fa fa-envelope"></i> secretariaacademica@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i> Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>
	
							<span class="font-weight-bold">Secretaría Económico - Administrativa</span><br>
							<!--<span class="font-weight-bold">CPN. Martín Alejandro Ussei</span><br>-->
							<i class="fa fa-phone"></i> 02954-451654<br>
							<i class="fa fa-envelope"></i> sadm@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i> Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>

							<span class="font-weight-bold">Secretaría del Consejo Directivo y Relaciones Institucionales</span><br>
							<!--<span class="font-weight-bold">Prof. María Marta Dukart</span><br>-->
							<i class="fa fa-phone"></i> 02954-451656<br>
							<i class="fa fa-envelope"></i> secretariaconsejo@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i> Dirección: Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>

							<span class="font-weight-bold">Secretaría de  Investigación y Posgrado</span><br>
							<!--<span class="font-weight-bold">Dra. María Pía Bruno</span><br>-->
							<i class="fa fa-phone"></i> 451661<br>
							<i class="fa fa-envelope"></i> secretariaposgrado@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i> Dirección: Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>

							<!--<span class="font-weight-bold">Pro Secretaría Privada del Decanato</span><br>
							<span class="font-weight-bold">Dr. Eric Morales Schmuker<br></span>
							<i class="fa fa-phone"></i> Telefono: 02954-451606<br>
							<i class="fa fa-envelope"></i> E-mail: decanato@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i> Dirección: Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>-->
						</div>
				<!-- Secretarías y Pro Secretaría-->

				<!-- Decanato -->
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseDecanato" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Decanato
							</a>
						</div>
						<div id="collapseDecanato" class="card-body collapse" data-parent="#accordion">
							<span class="font-weight-bold">Decano</span><br>
							<!--<span class="font-weight-bold">Prof. Beatriz Elena Cossio</span><br>-->
							<i class="fa fa-phone"></i> 02954-451606<br>
							<i class="fa fa-envelope"></i> decanato@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i>  Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>

							<span class="font-weight-bold">Vice-Decana</span><br>
							<!--<span class="font-weight-bold">Prof. Verónica Zucchini</span><br>-->
							<!--<i class="fa fa-phone"></i> 02954-451606<br>-->
							<i class="fa fa-phone"></i><!--02954-451606--> 02302-421041 (int. 6611)<br>
							<i class="fa fa-envelope"></i> vicedecanato@humanas.unlpam.edu.ar<br>
							<i class="fa fa-map-marker"></i> Calle 7 esq. 110, General Pico<!--Cnel. Gil Nº 353, 2do. Piso, Santa Rosa--><br>
						</div>
				<!-- Decanato-->

			
				<!-- Departamentos -->
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseDepartamentos" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
							Departamentos
							</a>
						</div>
						<div id="collapseDepartamentos" class="card-body collapse" data-parent="#accordion">
							<a href="{{route('departamento.ciencias-educacion')}}">Departamento de Ciencias de la Educación</a><br>
							<i class="fa fa-phone"></i> 02302-421041 (interno 6608)<br><br>
							<a href="{{route('departamento.comunicacion-social')}}">Departamento de Comunicación Social</a><br>
							<i class="fa fa-phone"></i> 02954-451651<br><br>
							<a href="{{route('departamento.educacion-inicial')}}">Departamento de Educación Inicial</a><br>
							<i class="fa fa-phone"></i> 02302-421041 (interno 6608)<br><br>
							<a href="{{route('departamento.educacion-primaria')}}">Departamento de Educación Primaria</a><br>
							<i class="fa fa-phone"></i> 02302-421041 (interno 6608)<br><br>
							<a href="{{route('departamento.formacion-docente')}}">Departamento de Formación Docente</a><br>
							<i class="fa fa-phone"></i> 02954-451655<br><br>
							<a href="{{route('departamento.geografia')}}">Departamento de Geografía</a><br>
							<i class="fa fa-phone"></i> 02954-451664<br><br>
							<a href="{{route('departamento.historia')}}">Departamento de Historia</a><br>
							<i class="fa fa-phone"></i> 02954-451617<br><br>
							<a href="{{route('departamento.lenguas-extranjeras')}}">Departamento de Lenguas Extranjeras</a><br>
							<i class="fa fa-phone"></i> 02954-451660<br><br>
							<a href="{{route('departamento.letras')}}">Departamento de Letras</a><br>
							<i class="fa fa-phone"></i> 02954-451630<br><br>
						</div>	
				<!-- Departamentos-->
				<!-- Investigación -->
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseInvestigacion" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Investigación
							</a>
						</div>
						<div id="collapseInvestigacion" class="card-body collapse" data-parent="#accordion">
							<!--<a href="{{route('institutos')}}">Institutos</a><br>-->
							<b>Inst. Cs. de la Educación para la Investig. Interdisciplinaria</b><br>
							<i class="fa fa-phone"></i> 02954-451655<br>
							<i class="fa fa-envelope"></i> iceii@humanas.unlpam.edu.ar<br><br>	 	

							<b>Inst. para el Estudio de la Educación, el Lenguaje y la Sociedad</b><br>
							Tel: 02302-421041 (interno 6607)<br>
							<i class="fa fa-envelope"></i> ieles@humanas.unlpam.edu.ar<br><br>

							<b>Inst. de Investig. Literarias y Discursivas</b><br>
							<i class="fa fa-phone"></i> 02954-451630<br>
							<i class="fa fa-envelope"></i> iilyd@humanas.unlpam.edu.ar<br><br>	 	

							<b>Inst. de Estudios Socio-Históricos</b><br>
							<i class="fa fa-phone"></i> 02954-451648<br>
							<i class="fa fa-envelope"></i> sociohistoricos@humanas.unlpam.edu.ar<br><br>

							<b>Inst. de Estudios Americanos y Europeos</b><br>
							<i class="fa fa-phone"></i> 02954-451666<br>
							<i class="fa fa-envelope"></i> ideae@humanas.unlpam.edu.ar<!--historiaamericana@humanas.unlpam.edu.ar--><br><br>	 	

							<b>Inst. Lingüística</b><br>
							<!--<i class="fa fa-phone"></i><br>--> 
							<i class="fa fa-envelope"></i> institutolinguistica@humanas.unlpam.edu.ar<br><br>

							<b>Inst. de Estudios Clásicos</b><br>
							<i class="fa fa-phone"></i> 02954-451648<br>
							estudiosclasicos@humanas.unlpam.edu.ar<br><br>	 	

							<b>Inst. Geografía</b><br>
							<i class="fa fa-phone"></i> 02954-451664<br>
							<i class="fa fa-envelope"></i> institutogeografia@humanas.unlpam.edu.ar<br><br>

							<b>Inst. Interdisciplinario de Estudios de Géneros</b><br>
							<i class="fa fa-phone"></i> 02954-451663<br>
							<i class="fa fa-envelope"></i> institutodegeneros@humanas.unlpam.edu.ar<br><br>
						</div>				
				<!-- Investigacion-->
				<!-- Programas -->
				<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseProgramas" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Programas Institucionales
							</a>
						</div>
						<div id="collapseProgramas" class="card-body collapse" data-parent="#accordion">
							<span class="font-weight-bold">Programa de Ambientación a la Vida Universitaria</span><br>
							<span class="font-weight-bold">Profesoras María Esther Folco y Verónica Zucchini</span><br>
							<span class="font-weight-bold">Sede Santa Rosa: </span><i class="fa fa-envelope"></i> ambientacionsantarosa@humanas.unlpam.edu.ar<br>
							<span class="font-weight-bold">Sede General Pico: </span><i class="fa fa-envelope"></i> ambientaciondistancia@humanas.unlpam.edu.ar<br><br>
							
							<span class="font-weight-bold">Programa de Formación y Acompañamiento a las Trayectorias Pedagógicas Diversas</span><br>
							<span class="font-weight-bold">Dra. Silvia Siderac</span><br>
							<i class="fa fa-envelope"></i> trayectoriasdiversas@humanas.unlpam.edu.ar<br><br>

							<span class="font-weight-bold">Programa del Campo de las Prácticas Comunitarias</span><br>
							<span class="font-weight-bold">Prof. Carlos Alainez y Mgr. Belén Alonso</span><br>
							<span class="font-weight-bold">Sede Santa Rosa: </span><i class="fa fa-envelope"></i> comunitariasgp@humanas.unlpam.edu.ar<br>
							<span class="font-weight-bold">Sede General Pico: </span><i class="fa fa-envelope"></i> comunitarias@humanas.unlpam.edu.ar<br><br>					

							<span class="font-weight-bold">Programa de Prácticas Profesionales (Sede Santa Rosa)</span><br>
							<span class="font-weight-bold">Dra. María Graciela Di Franco</span><br>
							<i class="fa fa-envelope"></i> campodelaspracticas@humanas.unlpam.edu.ar<br>
						</div>
				<!-- Programas-->

				<!-- Sedes -->
				<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseSedes" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Sedes
							</a>
						</div>
						<div id="collapseSedes" class="card-body collapse" data-parent="#accordion">
						<span class="font-weight-bold">Sede Santa Rosa</span><br>
							<i class="fa fa-phone"></i> 02954-451611<br>
							<!--<i class="fa fa-envelope"></i> <br>-->
							<i class="fa fa-map-marker"></i> Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>

							<span class="font-weight-bold">Sede General Pico</span><br>
							<i class="fa fa-phone"></i> 02302-422780<br>
							<!--<i class="fa fa-envelope"></i> <br>-->
							<i class="fa fa-map-marker"></i> Calle 7 esq. 110, General Pico<br>
						</div>
				<!-- Sedes-->				

				<!-- Biblioteca UNLPam-->
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseBiblioteca" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
							Biblioteca UNLPam
							</a>
						</div>
						<div id="collapseBiblioteca" class="card-body collapse" data-parent="#accordion">
							<span class="font-weight-bold">Sede Santa Rosa</span><br>
							<i class="fa fa-map-marker"></i> Coronel Gil 353, 1er. Subsuelo (6300)<br> 
							<i class="fa fa-envelope"></i> webmaster@biblioteca.unlpam.edu.ar<br><br>
							
							<span class="font-weight-bold">Sede General Pico</span><br>
							<i class="fa fa-map-marker"></i> Calle 2 esquina 9 oeste General Pico,La Pampa<br>
							<i class="fa fa-envelope"></i> bibliogp@unlpam.edu.ar<br><br>

							<span class="font-weight-bold">Biblioteca del Instituto de la Mujer</span><br>
							<span class="font-weight-bold">Lic. María Herminia Di Liscia</span><br>
							<i class="fa fa-envelope"></i> bibliotecamujer@humanas.unlpam.edu.ar<br>							
						</div>
				<!-- Biblioteca-->
				<!-- Bienenestar Estudiantil UNLPam-->
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#BienenestarEstudiantil" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Bienenestar Universitario UNLPam
							</a>
						</div>
						<div id="BienenestarEstudiantil" class="card-body collapse" data-parent="#accordion">
							<b><a href="http://www.unlpam.edu.ar/bienestar-universitario" target="_blank">Secretaría de Bienestar Universitario</a></b><br>					
							<br>
							<b>Santa Rosa:</b> M.T de Alvear 228- Santa Rosa - La Pampa <br>
							<b>Teléfono ☎</b> (02954) 436476 
							- 
							<a href="https://wa.me/5492954533578">WhatsApp 2954-533578 </a>
							<br>
							<a href="mailto:secbienestar@unlpam.edu.ar">secbienestar@unlpam.edu.ar</a>
							- 
							<a href="mailto:subsecbienestar@unlpam.edu.ar">subsecbienestar@unlpam.edu.ar</a>
							<br>
							<br>
							<b>General Pico:</b> Calle 9 Nº 24 Oeste <br>
							<b>Teléfono ☎</b> (02302)-424655 
							- 
							<a href="https://wa.me/5492954684110">WhatsApp 2954-684110 </a>
							<br>
							<a href="mailto:secbienestar@unlpam.edu.ar">secbienestar@unlpam.edu.ar</a>
							-
							<a href="mailto:subsecbienestar@unlpam.edu.ar">subsecbienestar@unlpam.edu.ar</a>
							<br>


						</div>
				<!-- Bienenestar Estudiantil-->																																				
			</div>				
				
			</div>
			
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

