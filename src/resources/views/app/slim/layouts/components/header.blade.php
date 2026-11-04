		<style>
				.gsc-search-button-v2{
					background-color: #1b365d !important;
					border-color: #1b365d !important;
				}
				.gsc-search-button-v2{
					background-color: #1b365d !important;
					border-color: #1b365d !important;
				}

				.custom-social-instagram{
					color: #1b365d;
					font-size: 1.2rem !important;
				}
				.custom-social-instagram:hover{
					background: linear-gradient(red,yellow);
					-webkit-background-clip: text;
					color: transparent;
				}				

				.custom-social-facebook{
					color: #1b365d;
					font-size: 1.2rem !important;
				}
				.custom-social-facebook:hover{
					background: linear-gradient(#11acff,#006ce5);
					-webkit-background-clip: text;
					color: transparent;
				}

				.custom-social-youtube{
					color: #1b365d;
					font-size: 1.2rem !important;
				}				
				.custom-social-youtube:hover{
					color: red;
				}

				.custom-social-twitter{
					color: #1b365d;
					font-size: 1.5rem;
				}				
				.custom-social-twitter:hover{
					color: #1DA1F2;
				}	
				
				.custom-social-tiktok{
					fill: #1b365d !important;
				}
				.custom-social-tiktok svg{
					fill: #1b365d !important;
				}								
				.custom-social-tiktok svg:hover{
					fill: #6B929B !important;
				}				
		</style>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
		</style>
<header id="header">
<nav class="navbar navbar-light text-dark navSuperior row" style="background-color: white;">
	
	<!-- header nuevo -->
	<div class="col-12 my-1 align-content-center" id="main-header">
			<div class="row">
				<!-- Pin -->
				<div class="col-12 col-md-2 col-lg-2 order-0 text-center d-flex align-content-center justify-content-center align-items-center" id="header-FacultadDeCienciasHumanasPin">
					<a href="{{route('index')}}" alt="Facultad de Ciencias Humanas">
						<img class="isologotipoImg img-fluid" style="max-width: 120px; width: auto; min-height: 100px" src="{{asset('slim/images/navbar/pin-universidad-publica.png')}}"/>
					</a>
				</div>
				<!-- Pin -->

				<!-- Logo Facultad -->
				<div class="d-none d-md-none d-lg-flex col-md-4 order-1 text-center align-items-center justify-conten-left" id="header-FacultadDeCienciasHumanas">
					<img class="isologotipoImg " style="width:70%; height: auto" src="{{asset('slim/images/navbar/header.svg')}}"/>
				</div>
				<!-- Logo Facultad -->

				<!-- Siu y Campus -->
				<div class="col-12 col-md-6 col-lg-4 order-3 order-md-2 align-content-center" id="header-SiuGuarani-Moodle">
					<div class="row">
						<div class="col-12 py-3">
							<div class="row">
								<!--<div class="col-6 text-right text-md-center text-lg-center">
									<a class="custom-siu" style="color:#26406C; font-family: 'Roboto', sans-serif !important;" target="_blank" href="http://g3w.fchst.unlpam.edu.ar/g3w/">
										<b style="font-size: 0.9rem !important;">Guaraní SR</b>
									</a>
								</div>-->
								<div class="col-6 text-right text-md-center text-lg-center">
									<a class="custom-siu  d-flex justify-content-center" style="color:#26406C; font-family: 'Roboto', sans-serif !important;" target="_blank" href="https://g3.unlpam.edu.ar/g3w3/">
										<svg style="height: 18px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 240.5 232.1" style="enable-background:new 0 0 240.5 232.1;" xml:space="preserve"> 
											<style type="text/css"> 
												.st0{fill:#1b365d;} 
												.st1{fill:#D6E1EA;} 
												.st2{fill:#FFFFFF;} 
											</style> 
											<g id="Layer_1"> 
												<path class="st0" d="M23.9,27.6c0,0,179-20.4,185.9-20.9s16,1.8,16.6,10.5c0.5,10.8,1,192.3,1,197.9s-4.9,12.8-11.2,12.5 c-6.3-0.3-189.9-21.9-194.8-22.7s-8.9-6.6-9.2-13c-0.3-6.4,0-152.4,0-152.4S12.6,28.9,23.9,27.6z"></path> <path class="st0" d="M22.2,136.6"></path> <path class="st1" d="M64.9,161.7"></path> <g id="Layer_3"> </g> </g> <g id="Layer_4"> <path class="st2" d="M65.1,161.6h28.7c0,0,0,45.6,0,47.2s-1.8,3.3-2.9,3.2c-1.1-0.1-66.9-8.4-66.9-8.4s-9.4-4.3-9.6-12.4 c-0.1-8.1-0.3-59-0.3-66c3.6-6.6,18.8-17.8,38.8-17.8c24,0,32.2,8.6,41.9,21.3c-6.4,5.2-20.3,15.7-20.3,15.7s-9.1-12.7-21.5-13 c-14.7,0.4-19.6,15.7-19.7,17.8c-0.3,6.5-5,46,16.8,47.2c11.4,0.6,12.3,0,12.3,0l2.5-1L65.1,161.6z"></path> 
											</g> 
										</svg>
										<b style="font-size: 0.9rem !important;">Siu Guaraní</b>
									</a>
								</div>								
								<div class="col-6 text-left text-md-center text-lg-center">
									<a class="custom-siu d-flex justify-content-center" style="color:#26406C; font-family: 'Roboto', sans-serif !important;" target="_blank" href="https://campusfch.humanas.unlpam.edu.ar/">
										<img src="{{asset('slim/images/icon-moodle.svg')}}" alt="Moodle" style="height: 20px;">
										<b style="font-size: 0.9rem !important;">Campus Virtual</b>
									</a>
								</div>
								<!--<div class="col-6 text-right text-md-center text-lg-center">
									<a class="custom-siu" style="color:#26406C; font-family: 'Roboto', sans-serif !important;" target="_blank" href="http://170.210.121.202/guarani/g3w/">
										<b style="font-size: 0.9rem !important;">Guaraní GP</b>
									</a>
								</div>-->
								<!--<div class="col-12 text-center text-md-center text-lg-center">
									<a class="custom-siu" style="color:#26406C; font-family: 'Roboto', sans-serif !important;" target="_blank" href="https://g3.unlpam.edu.ar/g3w3/">
										<b style="font-size: 0.9rem !important;">Guaraní LyL - Posgrado</b>
									</a>
								</div>-->								
							</div>
						</div>
					</div>
				</div>
				<!-- Siu y Campus -->
				
				<!-- Redes -->
				<div class="col-12 col-md-4 col-lg-2 order-2 order-md-3 text-center align-content-center p-1" id="social-networks">
					<div class="row">
						<div class="col-12">
						<a class="p-1" href="https://www.instagram.com/humanasUNLPam/" target="_blank"  title="Instagram" alt="Instagram"><i class="fab fa-instagram custom-social-instagram" style="vertical-align: middle;"></i></a>
						<a class="p-1" href="https://www.facebook.com/cienciashumanasUNLPam/" target="_blank"  title="Facebook" alt="Facebook"><i class="fab fa-facebook custom-social-facebook" style="vertical-align: middle;"></i></a>
						<a class="p-1" href="https://www.youtube.com/channel/UCS-Fu3MOs8FIbDNtcsSKPRA" target="_blank"   title="Youtube" alt="Youtube"><i class="fab fa-youtube custom-social-youtube" style="vertical-align: middle;"></i></a>
						<a class="p-1" href="https://www.tiktok.com/@humanasunlpam" target="_blank"  title="Tik Tok" alt="Tik Tok" class="custom-social-tiktok" style="color: #1B365D !important;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1.2rem"><path fill="#1b365d" d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg></a>
						<a class="p-1" href="https://www.linkedin.com/company/humanas-unlpam" target="_blank"  title="LinkedIn" alt="LinkedIn" class="custom-social-tiktok" style="color: #1B365D !important;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1.2rem"><path fill="#1b365d" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
						</div>
					</div>
				</div>
				<!-- Redes -->
			</div>
	</div>
	<!-- header nuevo -->

		<!--header viejo-->
		<!--
		<div class="col-6 offset-3 offset-md-0 col-md-3 col-lg-2 order-1 order-md-1 row">
			<a href="{{route('index')}}"	class="offset-2 col-8" title="Ir a inicio" alt="Ir a inicio">
				<img class="isologotipoImg" style="width:100%; max-width: 350px; height: auto" src="{{asset('slim/images/navbar/pin-universidad-publica.png')}}"/>
			</a>
		</div>

		<div class="col-lg-4 d-none d-lg-block order-1 order-md-1">
			<img class="isologotipoImg " style="width:80%; height: auto" src="{{asset('slim/images/navbar/header.svg')}}"/>
		</div>
		

		<center class="col-12 offset-sm-3 col-sm-6 offset-md-0 col-md-5 col-lg-4 order-3 order-md-2 mt-2 row justify-content-center" style="width: 100vw;">
				<a class="col-6 custom-siu text-center" style="color:#26406C; font-family: 'Roboto', sans-serif !important;" target="_blank" href="http://g3w.fchst.unlpam.edu.ar/g3w/" title="SIU Santa Rosa" alt="SIU Santa Rosa"><b style="font-size: 0.9rem !important;"> Guaraní SR </b></a><br>
				<a class="col-6 custom-siu text-center text-nowrap" style="color:#26406C; font-family: 'Roboto', sans-serif !important;" target="_blank" href="https://campus.humanas.unlpam.edu.ar/"><b style="font-size: 0.9rem !important;"> Campus Virtual </b></a>				
				<a class="col-6 custom-siu text-center" style="color:#26406C; font-family: 'Roboto', sans-serif !important;" target="_blank" href="http://170.210.121.202/guarani/g3w/" title=" SIU General Pico" alt=" SIU General Pico"><b style="font-size: 0.9rem !important;"> Guaraní GP </b></a><br>
				<a class="col-6 custom-siu text-center" style="color:#26406C; font-family: 'Roboto', sans-serif !important;" target="_blank" href="https://g3.unlpam.edu.ar/g3w3/"><b style="font-size: 0.9rem !important;">Guaraní LyL - Posgrado </b></a><br>
		</center>

		
		<center class="offset-3 col-6 offset-md-1 col-md-3 offset-lg-0 col-lg-2 order-2 order-sm-2 order-md-3 mt-2 mr-2 row justify-content-center">
			
			<a href="https://www.instagram.com/humanasUNLPam/" target="_blank"  title="Instagram" alt="Instagram" class="col-2">
				<i class="fab fa-instagram custom-social-instagram"></i>
			</a>
			<a href="https://www.facebook.com/cienciashumanasUNLPam/" target="_blank"  title="Facebook" alt="Facebook" class="col-2">
				<i class="fab fa-facebook custom-social-facebook"></i>
			</a>
			<a href="https://www.youtube.com/channel/UCS-Fu3MOs8FIbDNtcsSKPRA" target="_blank"   title="Youtube" alt="Youtube" class="col-2">
				<i class="fab fa-youtube custom-social-youtube"></i>
			</a>
			<a href="https://www.tiktok.com/@humanasunlpam" target="_blank"  title="Tik Tok" alt="Tik Tok" class="col-2 custom-social-tiktok">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1.2rem">
					<path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
				</svg>
			</a>
			<a href="https://www.linkedin.com/company/humanas-unlpam " target="_blank"  title="LinkedIn" alt="LinkedIn" class="col-2 custom-social-tiktok">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1.2rem">
					<path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
				</svg>
			</a>
		</center>
		-->
		<!--header viejo-->

		<!-- Modal Google-->
		<!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Buscar en el sitio</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">-->
				<!--Buscador Google-->
					<!--<script async src="https://cse.google.com/cse.js?cx=d2e34322217444c13">
					</script>
					<div class="gcse-search" style="background-color: #1b365d !important;"></div>-->
				<!--Buscador Google-->
			<!--</div>
			<div class="modal-footer">
				<button type="button" class="btn text-white" data-dismiss="modal" style="background-color: #1b365d;">Cerrar</button>
			</div>
			</div>
		</div>
		</div>-->
		<!-- Modal Google-->		
</nav>
<style>
.home-menu-nav {
	background-color: #EEEEEE !important;
}
.home-menu-nav ul li{
	background-color: #FFFFFF !important;
}
.home-menu-nav .dropdown-item{
	background-color: #EEEEEE !important;
}	

/*.home-menu-nav span{
	color: #15a6b9 !important;
}*/
/*.home-menu-nav:hover {
	background-color: #EFEFEF !important;
	color: #FFFFFF !important;
}*/
</style>
<nav class="navbar navbar-dark navbar-expand-lg d-flex justify-content-between" style="background-color:#26406C; z-index: 25;">  
	<!--<a class="navbar-brand" href="#"></a>-->
	<img class="d-flex d-sm-flex d-md-flex d-lg-none d-xl-none pb-1" style="width:auto; height: 35px" src="{{asset('slim/images/logo-menu.svg')}}"/>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 	<div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
    	<ul class="navbar-nav mr-auto mt-2 mt-lg-0 menuPrincipal">

    	<!--CARRERAS-->

		<li class="nav-item menu1 text-center border-lg border-light">
	        	 <a class="nav-link mx-1 px-1" href="" id="carrerasMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Carreras
		        </a>
		        <ul class="dropdown-menu submenu1" aria-labelledby="carrerasMenu">
					<!-- Carreras de grado -->
		        	<li class="dropdown-submenu dropright">
			            <a style="font-size: 0.9rem;" class="dropdown-item dropdown-toggle" href="#">Grado <b class="plusCaret"><i class="fas fa-plus"></i></b></a>
			            <ul class="dropdown-menu submenu2" >
								<li class="home-menu-nav">
									<a class="dropdown-item" href="{{route('carreras.grado.departamentos')}}">
										<span style="font-size: 0.9rem !important;">Departamentos &nbsp</span>
									</a>
								</li>
								<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.grado.departamento.ciencias-educacion')}}">Ciencias de la Educación</a></li>
								<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.grado.departamento.comunicacion-social')}}">Comunicación Social</a></li>								
								<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.grado.departamento.educacion-inicial')}}">Educación Inicial</a></li>
								<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.grado.departamento.educacion-primaria')}}">Educación Primaria</a></li>
								<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.grado.departamento.geografia')}}">Geografía</a></li>
								<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.grado.departamento.historia')}}">Historia</a></li>
								<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.grado.departamento.lenguas-extranjeras')}}">Lenguas extranjeras</a></li>
								<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.grado.departamento.letras')}}">Letras</a></li>
						</ul>
			        </li>                    
			        <!--Carreras de posgrado-->
					<li class="dropdown-submenu dropright">
						<a style="font-size: 0.9rem;" class="dropdown-item dropdown-toggle" href="#">Posgrado<b class="plusCaret"><i class="fas fa-plus"></i></b></a>
						<ul class="dropdown-menu submenu2">
						<li class="home-menu-nav">
							<a class="dropdown-item" href="{{route('carreras.posgrado.carreras-posgrado')}}">
								<span style="font-size: 0.9rem !important;">Carreras de Posgrado</span>
							</a>
						</li>
						  <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.posgrado.especializacion.esp_doc_ed_superior')}}">Esp. en Docencia en Educación Superior</a></li>
						  <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.posgrado.especializacion.esp_doc_ed_superior-a-distancia')}}">Esp. en Docencia en Educación Superior a Distancia</a></li>
						  <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.posgrado.especializacion.esp_historia_regional')}}">Esp. en Historia Regional a Distancia</a></li>
						  <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.posgrado.especializacion.esp_ens_lengua_y_literatura')}}">Esp en Enseñanza de la Lengua y la Literatura</a></li>
						  <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.posgrado.maestria.doc_ed_superior')}}">Maestría en Docencia en Educación Superior</a></li>
						  <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.posgrado.maestria.doc_ed_superior-a-distancia')}}">Maestría en Docencia en Educación Superior a Distancia</a></li>
						  <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.posgrado.maestria.estudios_sociales_y_culturales')}}">Maestría en Estudios Sociales y Culturales</a></li>
						  <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('carreras.posgrado.doctorado.doctorado-en-estudios-contemporaneos')}}">Doc. en Estudios Contemporáneos en Educación<!-- a Distancia--></a></li>
						</ul>
					</li>
		        </ul>
		</li>


		    </li>
		<!--INGRESANTES -->
			<li class="nav-item menu1 text-center border-lg border-light">
	        	 <a class="nav-link mx-1 px-1" href="" id="ingresantesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Ingresantes
		        </a>
		        <ul class="dropdown-menu submenu1" aria-labelledby="ingresantesMenu">
					<li class="home-menu-nav">
						<a class="dropdown-item" href="{{route('ingresantes.inicio')}}">
							<span style="font-size: 0.9rem;">Ingresantes</span>
						</a>
					</li>
		        	<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('ingresantes.que-estudiar')}}">Qué estudiar</a></li>
                	<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('ingresantes.como-inscribirse')}}">Cómo inscribirse</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('ingresantes.mi-primer-año-en-la-facultad.preguntas-frecuentes')}}">Preguntas frecuentes</a></li>
                	<li class="dropdown-submenu dropright">
			            <a style="font-size: 0.9rem;" class="dropdown-item dropdown-toggle" href="#">Mi primer año en la Facultad<b class="plusCaret"><i class="fas fa-plus"></i></b></a>
			            <ul class="dropdown-menu submenu2" >
							<li class="home-menu-nav">
								<a class="dropdown-item" href="{{route('mi-primer-año-en-la-facultad.mi-primer-anio')}}">
									<span style="font-size: 0.8rem; font-weight: bold !important;">Mi primer año en la Facultad</span>
								</a>
							</li>
			              	<li class="dropdown-submenu dropright">
								@php
									$prg=DB::table('programas_institucionales')->get();
									$i=0;
									$ambientacion="Ambientación a la Vida Universitaria";
									$trayectorias="Formación y Acompañamiento a las Trayectorias Pedagógicas Diversas";
									$tipo="Programa institucional";
								@endphp
							 	@foreach($prg as $programas)
									@if ((($programas->nombre === $ambientacion) || ($programas->nombre === $trayectorias)) && 	($programas->tipo === $tipo))
										@php $i++; @endphp
										@if ($programas->nombre === $ambientacion)
											<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('programas.show',$programas->id)}}">Programa de<br> Ambientación a la <br>Vida Universitaria</a></li>	
										@endif
										@if ($programas->nombre === $trayectorias)
											<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('programas.show',$programas->id)}}">Programa de<br>Formación y Acompañamiento<br> a las Trayectorias <br> Pedagógicas Diversas</a></li>	
										@endif
									@endif
								@endforeach
								@if ($i == 0)	
									<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="#">Programas Institucionales</a></li>
								@endif  
								<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('ingresantes.mi-primer-año-en-la-facultad.epsa')}}">EPSA</a></li>
								<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('estudiantes.centro-de-estudiantes')}}">Centros de estudiantes</a></li>
			              	</li>
			            </ul>
			        </li>
                	<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('estudiantes.becas-y-ayudas-economicas')}}">Becas y ayudas económicas</a></li>
                </ul>
	      	</li>

		<!--Estudiantes -->
			<li class="nav-item menu1 text-center border-lg border-light">
	        	 <a class="nav-link mx-1 px-1" href="" id="estudiantesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Estudiantes
		        </a>
		        <ul class="dropdown-menu submenu1" aria-labelledby="estudiantesMenu">
					<li class="home-menu-nav">
						<a class="dropdown-item" href="{{ route('estudiantes.inicio') }}">
							<span style="font-size: 0.9rem;">Estudiantes</span>
						</a>
					</li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('estudiantes.adscripcion_a_catedra') }}">Adscripciones</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('estudiantes.ayudante_de_segunda') }}">Ayudante de Segunda</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('estudiantes.becas-y-ayudas-economicas') }}">Becas y ayudas económicas</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('estudiantes.biblioteca') }}">Biblioteca</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('estudiantes.calendario-aulas-y-horarios') }}">Calendario, aulas y horarios</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('estudiantes.centro-de-estudiantes') }}">Centros de estudiantes</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('certificaciones-y-formularios.certificaciones_y_formularios') }}">Certificaciones y Formularios</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('estudiantes.derechos-estudiantes') }}">Derechos estudiantiles</a></li>
					<!--<li><a class="dropdown-item" href="{{ route('estudiantes.pasantias-vigentes') }}">Pasantías</a></li>-->
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('estudiantes.pasantias-y-becas') }}">Pasantías y Becas</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('estudiantes.solicitud-de-titulo') }}">Solicitud de título</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('estudiantes.tutoria_de_pares') }}">Tutorías</a></li>    
		        </ul>
		    </li>
		<!--COMUNIDAD GRADUADA -->
			<li class="nav-item menu1 text-center border-lg border-light">
	        	 <a class="nav-link mx-1 px-1" href="" id="graduadosMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Comunidad Graduada
		        </a>
		        <ul class="dropdown-menu submenu1" aria-labelledby="graduadosMenu">
					<li class="home-menu-nav">
						<a class="dropdown-item" href="{{route('comunidad-graduada.comunidad_graduada')}}">
							<span style="font-size: 0.9rem;">Comunidad Graduada</span>
						</a>
					</li>
		        	<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('comunidad-graduada.nuestra-comunidad')}}">Nuestras/os graduadas/os</a></li>
								@php
									$prg=DB::table('programas_institucionales')->get();
									$i=0;
									$formacionpermanente="Formación Permanente para Graduadas y Graduados";
								@endphp
							 	@foreach($prg as $programas)
									@if ($programas->nombre === $formacionpermanente)
										@php $i++; @endphp
										<!--<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('programas.show',$programas->id)}}">Programa de <br>{{$programas->nombre}}</a></li>-->
									@endif
								@endforeach
								@if ($i == 0)	
									<!--<li><a style="font-size: 0.9rem;" class="dropdown-item" href="#">Programas Institucionales</a></li>-->
								@endif

					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="https://programagraduados.humanas.unlpam.edu.ar/" target="_blank">Programa de <br>Formación Permanente para la Comunidad Graduada</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('eventos.seminarios')}}">Cursos y Seminarios vigentes</a></li>
                    <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('comunidad-graduada.cursos-y-seminarios-anteriores')}}">Cursos y Seminarios anteriores</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('llamadosSeleccion.index')}}">Concursos y selección</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('comunidad-graduada.proyectos-de-investigacion')}}">Proyectos de investigación</a></li>
					<!--<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('comunidad-graduada.elecciones')}}">Elecciones Generales 2026</a></li>-->
		        </ul>
		    </li>

		<!--DOCENTES -->
			<li class="nav-item menu1 text-center border-lg border-light">
	        	 <a class="nav-link mx-1 px-1" href="" id="docentesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Docentes
		        </a>
		        <ul class="dropdown-menu submenu1" aria-labelledby="docentesMenu">
					<li class="home-menu-nav">
						<a class="dropdown-item" href="{{route('docentes.inicio')}}">
							<span style="font-size: 0.9rem;">Docentes</span>
						</a>
					</li>
		        	<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('docentes.index',[])}}">Nuestras/os docentes</a></li>
                    <li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('docentes.reglamentos_actas_concursos_docentes')}}">Reglamentos y Normativas</a></li>
					<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('docentes.carrera-docente')}}">Carrera docente</a></li>
					<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('llamadosSeleccion.index')}}">Llamados a Selección y Concursos</a></li>
                    <li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{ route('estudiantes.calendario-aulas-y-horarios') }}">Calendario académico</a></li>
                    <li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('docentes.bedelia')}}">Bedelía</a></li>
					<!-- trámites y certificaciones estaba acá-->
					<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('docentes.fortalecimiento-y-movilidad-internacional')}}">Fortalecimiento y Movilidad Internacional</a></li>
					<li><a  style="font-size: 0.9rem;" class="dropdown-item" href="{{route('docentes.convocatorias')}}">Convocatorias</a></li>
					<li class="dropdown-submenu dropbottom">
			            <a  style="font-size: 0.9rem;" class="dropdown-item dropdown-toggle" href="#">Trámites y Certificaciones <b class="plusCaret"><i class="fas fa-plus"></i></b></a>
			            <ul class="dropdown-menu submenu2" >
			            	<li class="dropdown-submenu dropright">
								<li class="home-menu-nav">
									<a class="dropdown-item" href="{{route('docentes.tramites_y_certificaciones')}}">
										<span style="font-size: 0.9rem;">Trámites y Certificaciones</span>
									</a>
								</li>
	                            <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('docentes.tramites-y-certificaciones.recibos_de_sueldo')}}">Recibos de sueldo</a></li>
								<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('docentes.tramites-y-certificaciones.licencias-y-autorizaciones')}}">Licencias y autorizaciones</a></li>
	                            <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('docentes.tramites-y-certificaciones.ddjj')}}">DDJJ</a></li>
								<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('docentes.tramites-y-certificaciones.adicional-por-titulo-de-posgrado')}}">Adicional por Título de Posgrado</a></li>
	                        </li>
                        </ul>									
                    </li>					
		        </ul>
		    </li>


		<!--NO DOCENTES -->
			<li class="nav-item menu1 text-center border-lg border-light">
	        	 <a class="nav-link mx-1 px-1" href="" id="noDocentesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Nodocentes
		        </a>
		        <ul class="dropdown-menu submenu1" aria-labelledby="noDocentesMenu">
					<li class="home-menu-nav">
						<a class="dropdown-item" href="{{route('nodocentes.inicio')}}">
							<span style="font-size: 0.9rem;">Nodocentes</span>
						</a>
					</li>
		        	<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('nodocentes.nuestros-nodocentes')}}">Nuestras/os nodocentes</a></li>
					<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('nodocentes.concursos-nodocentes')}}">Concursos</a></li>
                    <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('nodocentes.convenio-colectivo-de-trabajo')}}">Convenio Colectivo de Trabajo</a></li>
					<!--<li><a style="font-size: 0.9rem;" class="dropdown-item" href="#">Cursos y capacitaciones</a></li>-->
					<li class="dropdown-submenu dropbottom">
			            <a style="font-size: 0.9rem;" class="dropdown-item dropdown-toggle" href="#">Trámites y Certificaciones <b class="plusCaret"><i class="fas fa-plus"></i></b></a>
			            <ul class="dropdown-menu submenu2" >
			            	<li class="dropdown-submenu dropbottom">
								<li class="home-menu-nav">
									<a class="dropdown-item" href="{{route('nodocentes.tramites_y_certificaciones')}}">
										<span style="font-size: 0.9rem;">Trámites y Certificaciones </span>
									</a>
								</li>
	                            <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('nodocentes.tramites-y-certificaciones.recibos_de_sueldo')}}">Recibos de Sueldo</a></li>
	                            <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('nodocentes.tramites-y-certificaciones.licencias_justificaciones_y_franquicias')}}">Licencias, justificaciones y franquicias</a></li>
	                            <li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('nodocentes.tramites-y-certificaciones.ddjj')}}">DDJJ</a></li>
								<li><a style="font-size: 0.9rem;" class="dropdown-item" href="{{route('nodocentes.tramites-y-certificaciones.certificacion_de_servicios')}}">Certificación de Servicios</a></li>
	                        </li>
                        </ul>									
                    </li>
		        </ul>
		    </li>

	      	<li class="nav-item menu1 text-center border-lg border-light">
	        	<a class="nav-link mx-1 px-1" href="https://colunlpam.humanas.unlpam.edu.ar/" target="_blank">Colegio</a>
	      	</li>
	      	<li class="nav-item menu1 text-center border-lg border-light">
	        	<a class="nav-link mx-1 px-1" href="{{route('servicios.inicio')}}">Servicios</a>
	      	</li>
   		</ul>
  	</div>
</nav>


</header>
<!--<script type="text/javascript">
	document.oncontextmenu = function(){return false;}
</script>-->