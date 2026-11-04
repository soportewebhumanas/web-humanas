<!DOCTYPE html>
<html>
  <head>
	<title>Expo Rural Virtual 2020</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<link rel="shortcut icon" href="{{siteUrl('images/favicon.png')}}">
	<link rel="apple-touch-icon-precomposed" href="{{siteUrl('images/favicon-apple.png')}}">
	<!-- Included Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300,100' rel='stylesheet' type='text/css'>
	
	<!-- CSS Files comes here -->
	<link href="css/grid12.css" rel="stylesheet" media="screen">                              	 <!-- Grid System -->
	<link href="css/james_typography.css" rel="stylesheet" media="screen">                       <!-- James Framework - TYPOGRAPHY -->
	<link href="css/main.css" rel="stylesheet" media="screen">                                   <!-- Main CSS file -->
	<link href="css/color_scheme_light.css" rel="stylesheet" media="screen">                      <!-- Color scheme (dark/light)-->
	<link href="css/colors/color_palette_lime.css" rel="stylesheet" media="screen">             <!-- Color palette -->
	<link href="css/rapid-icons.css" rel="stylesheet" media="screen">                            <!-- James Framework - ICONS -->
	<link href="css/js_styles/jquery.maximage.min.css" rel="stylesheet" media="screen">          <!-- MaxImage background image slideshow -->
	<link href="css/responsivity.css" rel="stylesheet" media="screen">                           <!-- Responsive Fixes -->
	
	<!-- Modernizer and IE specyfic files -->  
	<script src="js/modernizr.custom.js"></script>	   
	<!-- Modernizer and IE specyfic files -->  
	<script src="js/modernizr.custom.js"></script>	   
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-8018264-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-8018264-2');
</script>
  </head>
  
  <body>
	<div id="preloader_container">
	    
	    <!-- Preloader Screen -->
		<header class="preloader_header">	 
	        <div class="preloader_loader">
	            <svg class="preloader_inner" width="60px" height="60px" viewBox="0 0 80 80">
	                <path class="preloader_loader_circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
	                <path id="preloader_loader_circle" class="preloader_loader_circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
	            </svg>
	        </div>
	    </header>
	    <!-- //Preloader Screen -->
	
	
		<!-- Fullscreen homepage -->
		<section class="hero_fullscreen newsletter timer mockups headline background_solid"><!-- You can edit classes of this section to control the content that i displayed and backgrounds of this section, more info in documentation. -->
			
			
		
			
			
			<!-- Main content -->
		  	<div class="container align-left" id="main_content">
				<div class="content_container row">
				
				
				    <!-- Headline (put class="headline" in Homepage section if you want slogan to be shown)-->
					<div class="slogan mockup-animation1"  ><img style="max-width: 90vw !important;" src="images/logo-expo2020.png"></div>
					
					
					<!-- Timer (put class="timer" in Homepage section if you want timer to be shown)-->
					<div id="countdown" class="countdown">
						<div class="countdown_part first">
							<h1 class="days">00</h1>
							<p class="timeRefDays">días</p>
						</div>
						<div class="countdown_part">
							<h1 class="hours">00</h1>
							<p class="timeRefHours">horas</p>
						</div>
						<div class="countdown_part">
							<h1 class="minutes">00</h1>
							<p class="timeRefMinutes">minutos</p>
						</div>
						<div class="countdown_part last">
							<h1 class="seconds">00</h1>
							<p class="timeRefSeconds">segundos</p>
						</div>
					</div>
					<!-- //Timer -->
					
					
					<h6>Falta muy poco para primera Expo Rural Virtual, <br>si quieres recibir información o participar como expositor <br>deja tu correo electrónico y te contactaremos</h6>
					
					
					<!-- Newsletter Form (put class="newsletter" in Homepage section if you want newsletter form to be shown)-->
		  			<div class="newsletter_form">
		  				<form action="php/send.php" method="post" id="subscribe-form">
		  				<div class="input-field">
		  					<div data-icon="&#xe563;" class="prefix"></div>
			  				<input id="email" type="email" name="email" class="validate">
			  				<label for="email">E-mail</label>	
			  			</div>
			  			<button class="btn waves-effect waves-light subscribe-submit" type="submit" name="action" id="subscribe-form-submit">Suscribirse</button>
			  			</form>
			  			<div id="preview"></div>
		  			</div>
		  			<!-- //Newsletter form -->
					  <h6>
						<a href="#conferencias" id="more_info_btn" class="more_info_btn" style="font-size: 20px;">  Ver Cronograma de Charlas y Conferencias.</a></h6>  
			
				</div>		
			</div>  
			<!-- //Main content -->


			<!-- Mockups (put class="mockups" in Homepage section if you want mockups to be shown)-->
			<!-- /Mockup 1-->
			<div class="mockup mockup-right mockup-animation1">
			<img src="images/back.png"  />
			</div>
			<!-- //Mockup 1-->
			
			
			<!-- /Mockup 2-->
			<div class="mockup mockup-right mockup-animation2">
			<img src="images/front.png"  />
			</div>
			<!-- //Mockup 2-->
			
			
			
			
			
		
			
			
		
		
			
		</section><!-- //Homepage -->
		
		<section id="conferencias">
				<div class="container">
					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">
							<div class="intro content_anim18 animated fadeInUp">
								<h3>Agenda de Charlas y Conferencias</h3>
								<p>Durante 5 días la Asociación Rural Salliqueló organizó una jornada de charlas y conferencias llamada "Hablemos con los que saben", conocé el cronograma:</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<h3>Lunes 19/10 - 20 Hs.</h3>
						<p style="font-size: 24px;">Apertura del Ciclo de Conferencias.</p>
						<img  src="images/expositor1.png">
						
						<ul class="icon_list">
							<li><div data-icon="&#xe064;" class="icon_small float-left"></div><h6>- Matías de Velazco, Presidente de CARBAP.</h6></li>
					
						</ul>
						<hr style="margin-bottom: 20px;"> 
						<p style="font-size: 24px;">Nuestra confederación en tiempos de crisis.</p>	
						<img  src="images/expositor2.png">
						<ul class="icon_list">
							<li><div data-icon="&#xe05c;" class="icon_small float-left"></div><h6>- Jorge Chemes y Mario Llambias.</h6></li>
					
						</ul>
					
							
						<ul class="icon_list">
						<li><div class="float-left"><img  src="images/modera0.png" width="50"></div><h6 style="font-size: 14px !important; line-height: normal;">Modera Fernando Bertello.  Licenciado en Comunicación (UBA) Editor de contenido campo en web diario La Nación
							</h6></li>
					
						</ul>
					
						</div>
						
						
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<h3>Martes 20/10 - 20 Hs.</h3>
						<p style="font-size: 24px;">Desafios  de la ganadería.</p>
						<img  src="images/expositor3.png">
						
						<ul class="icon_list">
							<li><div data-icon="&#xe05c;" class="icon_small float-left"></div><h6>- Dardo Chiesa, Coordinador Mesa Nacional de Carnes - Ex Presidente de CARBAP- Ex presidente CRA – Ex presidente IPCVA<br>- Miguel Jairala  (analista económico – asesor  IPCVA) Universidad Di Tella</h6></li>
					
						</ul>
						
					
					
							
						<ul class="icon_list">
						<li><div class="float-left"><img  src="images/modera1.png" width="50"></div><h6 style="font-size: 14px !important; line-height: normal;">Modera Dr. Luciano Nosetti (Secretario Asoc. Rural Salliqueló - Coordinador concurso Novillos)

							</h6></li>
					
						</ul>
					
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center"></div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<h3>Miércoles 21/10 - 20:30 Hs.</h3>
						<p style="font-size: 24px;">Una reforma judicial inconstitucional que afecta el destino de la República.</p>
						<img  src="images/expositor4.png">
						
						<ul class="icon_list">
							<li><div data-icon="&#xe064;" class="icon_small float-left"></div><h6>- Dr Daniel Sabsay, Abogado (UBA).  Posgrado en la Facultad de Derecho de la Universidad de París. Profesor Titular de Derecho Constitucional, Facultad de Derecho (UBA). Director de la Carrera Especial de Posgrado en Derecho Constitucional (UBA). Presidente de la Asociación Argentina de Derecho Constitucional (AADC). Vicepresidente del Instituto Iberoamericano de Derecho Constitucional
								.</h6></li>
					
						</ul>
					
					
							
						<ul class="icon_list">
						<li><div class="float-left"><img  src="images/modera2.png" width="50"></div><h6 style="font-size: 14px !important; line-height: normal;">Modera Mariana Grieder Pfund, Médica veterinaria (UNLP). Tesorera Asociación Rural SALLIQUELO y Productora agropecuaria 
							</h6></li>
							<li><div class="float-left"><img  src="images/modera5.png" width="50"></div><h6 style="font-size: 14px !important; line-height: normal;">Modera Carola Urdangarin, Periodista, locutora, conductora de Agrolink Radio en AM 550 Radio Colonia, Savia Comunicación, redactora en Infocampo. 
							</h6></li>
					
						</ul>
					
						</div>
						
						
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<h3>Jueves 22/10 - 20 Hs.</h3>
						<p style="font-size: 24px;">Situación económica actual y perspectivas
							.</p>
						<img  src="images/expositor5.png">
						
						<ul class="icon_list">
							<li><div data-icon="&#xe064;" class="icon_small float-left"></div><h6>- Dr  Roberto Cachanosky, Lic. En Economía (universidad Católica Argentina). Consultor económico</h6></li>
					
						</ul>
						
					
					
							
						<ul class="icon_list">
						<li><div class="float-left"><img  src="images/modera3.png" width="50"></div><h6 style="font-size: 14px !important; line-height: normal;">Modera José Casado Editor de camponoticias.com Cond. de prog. de radio Casado con el Campo, Campo Orégano y El Campo es noticia. 


							</h6></li>
					
						</ul>
					
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center"></div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Viernes 23/10 - 20 Hs.</h3>
							<p style="font-size: 24px;">Nuestras Confederadas .</p>
							<img  src="images/expositor6.png">
							
							<ul class="icon_list">
								<li><div data-icon="&#xe064;" class="icon_small float-left"></div><h6>- Mariana Martinez, Contadora Publica UNLZ parte de la Comisión Directiva de la S.Rural de Nogoyá, delegada FARER en CRA y Coordino la Comisión de Impuestos y legislación de CRA
								</h6></li>
						
							</ul>
							<img  src="images/expositor7.png">
							
							<ul class="icon_list">
								<li><div data-icon="&#xe064;" class="icon_small float-left"></div><h6>- Andrea Passerini: Tambera Coordinadora Comisión Lechería en CARBAP Y CRA.
								</h6></li>
						
							</ul>
							<img  src="images/expositor8.png">
							
							<ul class="icon_list">
								<li><div data-icon="&#xe064;" class="icon_small float-left"></div><h6>- Ariela Aristizabal: comisión directiva de la Soc Rural Lago Argentino, y También De la Federacion de Instituciones Agropecuarias de Santa Cruz, (FIAS)ocupando el cargo de secretaria.

								</h6></li>
						
							</ul>
							<img  src="images/expositor9.png">
							
							<ul class="icon_list">
								<li><div data-icon="&#xe064;" class="icon_small float-left"></div><h6>- Yurchag Santander Yeny Evangelina: Coordinadora de la comisión de mujeres ruralistas de la Soc Rural de San Luis 

								</h6></li>
						
							</ul>
							<img  src="images/expositor10.png">
							
							<ul class="icon_list">
								<li><div data-icon="&#xe064;" class="icon_small float-left"></div><h6>- Lorena Andrea Elorriaga, Ingeniera Agrónoma (UNLP) - Dirigente  Asociación Rural Salliquelo - Vicepresidenta Ciacoba (centro de ingenieros Agronomos del Centro Oeste de la provincia de bs As ) - Delegada en Comisión Comunicación región Sur  CIAFBA (Colegio de Ingenieros Agrónomos y forestales de la Pcia de Buenos Aires y Productora agropecuaria.

								</h6></li>
						
							</ul>
						
							
						
						
								
							<ul class="icon_list">
							<li><div class="float-left"><img  src="images/modera4.png" width="50"></div><h6 style="font-size: 14px !important; line-height: normal;">Modera Matias Longoni (Bichos de campo): Periodista especializado en agro. Conductor, cronista y editor de bichos de campo.

	
	
								</h6></li>
						
							</ul>
						
							</div>
					</div>				
				</div>
			</section><!-- //More info -->
	

	
	</div><!-- //preloader -->

   
	<!-- JavaScript plugins comes here -->	
    <script src="js/jquery-2.1.3.min.js"></script>        <!-- jQuery -->
    <script src="js/jquery.easing.min.js"></script>       <!-- jQuery easing -->    
    <script src="js/jquery.scrollTo.js"></script>         <!-- Scroll to -->
    <script src="js/jquery.cycle.all.min.js"></script>    <!-- jQuery cycle -->
    <script src="js/jquery.form.js"></script>    		  <!-- jQuery form -->
    <script src="js/jquery.maximage.min.js"></script>     <!-- MaxImage background image slideshow -->
    <script src="js/materialize.js"></script>     		  <!-- Materialize -->
    <script src="js/classie.js"></script>                 <!-- Class helper function -->
	<script src="js/pathLoader.js"></script>              <!-- Preloader Loading Animation -->
	<script src="js/preloader.js"></script>               <!-- Preloader -->
    <script src="js/count_down.js"></script>              <!-- Count Down Timer -->
    <script src="js/happy.js"></script>                   <!-- Newsletter form validation -->
    <script src="js/happy.methods.js"></script>           <!-- Newsletter form validation -->

    <script src="js/main.js"></script>                    <!-- Main Js file -->
    
    
    <!-- Show message after newsletter form submit -->
	<script type="text/javascript">
        $('document').ready(function()
            {
            $('#subscribe-form').ajaxForm( {
                target: '#preview',
                success: function() {       
                      $('#preview').addClass( "show_message" );
                    }
				});
				
				if (window.location.hash) {
					var hash = window.location.hash;

					if ($(hash).length) {

						 setTimeout(function () {
						
							$('html, body').animate({
							scrollTop: $("#conferencias").offset().top
						}, 900, 'swing');
							
						}, 5000);
					
						
					}
				}
            });
    </script>
	
	
    
  </body>
</html>