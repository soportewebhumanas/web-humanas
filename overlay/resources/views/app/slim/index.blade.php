<!-- *********************************************************************************************** -->
<!-- *                                  CSS PERSONALIZADO DE INDEX                                 * -->
<!-- *                        slim/css/estilos-index-personalizados.css                            * -->
<!-- *********************************************************************************************** -->
@extends('app.slim.layouts.home')
	<!--cards movil-->

	<!--cards movil-->
@section('content')


<!-- ******************************************ALERT MODAL************************************************ -->

<style>
.texto-alerta{
	font-family: Arial, Helvetica, sans-serif !important;
}
</style>
@php
    use Carbon\Carbon;
    $fechaInicio = Carbon::create(2026, 01, 02, 0, 0, 0);
    $fechaFin = Carbon::create(2026, 01, 31, 23, 59, 59);
    $ahora = now();
@endphp

@if ($ahora->between($fechaInicio, $fechaFin))
<!--<div id="myModal" class="modal fade">
    <div class="modal-dialog float-right">
        <div class="modal-content float-right" style="width: 100%;">
            <div class="modal-header" style="background-color: #26406c">
				<h3 class="text-left text-white pb-0">Receso Administrativo</h3>
                <button type="button" class="close text-white" data-dismiss="modal"><i class="fa fa-window-close opacity-100" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <p class="text-justify text-dark texto-alerta" style="font-size: 1rem; overflow: visible;"> 
					Durante el período comprendido entre el 2 y el 31 de enero de 2026, ambos inclusive. 
					<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2025_868.pdf" target="_blank">Res. 868-FCH-2025</a>
				</p>
				<img src="./slim/images/index/01-Enero.png" alt="Enero 2026" class="img-fluid">
            </div>
        </div>
    </div>
</div>-->
@else
    <!--Condición alternativa-->
@endif
<!-- Modal Emergente - Ley de Financiamiento Universitario (Orden Reestructurado) -->
<div id="univ-modal-financiamiento" class="univ-modal-overlay">
    <div class="univ-modal-container">
        <button class="univ-modal-close" id="univ-cerrar-modal">&times;</button>
        
        <div class="univ-modal-body">
            <!-- 1. Hashtag en la parte superior -->
            <div class="univ-modal-hashtag">#somosHumanas</div>

            <!-- 2. Contador Dinámico (Años si pasa 365 días, sino Días) -->
            <div class="univ-contador-wrapper">
                <div class="univ-contador-dias-grupo">
                    <span id="univ-numero-principal" class="univ-contador-numero-grande">0</span>
                    <span id="univ-etiqueta-principal" class="univ-contador-etiqueta-grande">DÍAS</span>
                </div>
                
                <div id="univ-contenedor-resto" class="univ-contador-resto-grupo">
                    <!-- Estos elementos cambian dinámicamente según si se muestran los años -->
                </div>
            </div>

            <!-- 3. Título Principal en la parte inferior -->
            <h2 class="univ-modal-title">SIN APLICAR LA LEY DE FINANCIAMIENTO UNIVERSITARIO</h2>
        </div>
    </div>
</div>
<!-- Modal Emergente - Ley de Financiamiento Universitario (Orden Reestructurado) -->

<!-- ******************************************ALERT MODAL************************************************ -->

<!-- CSS Modal Emergente - Ley de Financiamiento Universitario (Orden Reestructurado) -->
<style>
    /* Estilos del Modal */
    .univ-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease, visibility 0.4s ease;
        font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        box-sizing: border-box;
    }

    .univ-modal-overlay.activo {
        opacity: 1;
        visibility: visible;
    }

    .univ-modal-container {
        background: #ffffff;
        width: 90%;
        max-width: 500px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        position: relative;
        transform: translateY(-30px);
        transition: transform 0.4s ease;
        border-top: 6px solid #1a365d; /* Azul Institucional */
        overflow: hidden;
    }

    .univ-modal-overlay.activo .univ-modal-container {
        transform: translateY(0);
    }

    .univ-modal-close {
        position: absolute;
        top: 15px;
        right: 15px;
        background: none;
        border: none;
        font-size: 28px;
        color: #a0aec0;
        cursor: pointer;
        transition: color 0.2s;
        line-height: 1;
        z-index: 10;
    }

    .univ-modal-close:hover {
        color: #1a202c;
    }

    .univ-modal-body {
        padding: 30px;
        text-align: center;
    }

    /* Estilo para el Hashtag */
    .univ-modal-hashtag {
        display: inline-block;
        background-color: #e6fffa;
        color: #2c7a7b;
        font-weight: 700;
        font-size: 0.9rem;
        padding: 5px 15px;
        border-radius: 20px;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Título ubicado abajo */
    .univ-modal-title {
        font-size: 1.25rem;
        font-weight: 800;
        color: #1a365d;
        line-height: 1.3;
        margin: 20px 0 0 0;
        text-transform: uppercase;
    }

    /* Estructura del contador */
    .univ-contador-wrapper {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    /* Bloque Principal Superior (Días o Años) */
    .univ-contador-dias-grupo {
        background-color: #f7fafc;
        padding: 16px;
        border-radius: 8px;
        border: 1px solid #e2e8f0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .univ-contador-numero-grande {
        font-size: 3.2rem;
        font-weight: 900;
        color: #1a365d;
        line-height: 1;
        letter-spacing: -1px;
    }

    .univ-contador-etiqueta-grande {
        font-size: 1rem;
        font-weight: 700;
        color: #2c5282;
        margin-top: 5px;
        text-transform: uppercase;
    }

    /* Bloque de Resto inferior (Se adapta mediante JS a 3 o 4 columnas) */
    .univ-contador-resto-grupo {
        display: grid;
        gap: 8px;
    }

    .univ-contador-item-pequeno {
        background-color: #f7fafc;
        padding: 8px;
        border-radius: 6px;
        border: 1px solid #e2e8f0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .univ-contador-numero-pequeno {
        font-size: 1.5rem;
        font-weight: 800;
        color: #2d3748;
        line-height: 1.1;
    }

    .univ-contador-etiqueta-pequena {
        font-size: 0.7rem;
        color: #718096;
        text-transform: uppercase;
        margin-top: 2px;
        font-weight: 600;
    }

    /* Ajustes responsivos */
    @media (max-width: 400px) {
        .univ-modal-title { font-size: 1.1rem; }
        .univ-contador-numero-grande { font-size: 2.4rem; }
        .univ-contador-numero-pequeno { font-size: 1.2rem; }
    }
</style>
<!-- CSS Modal Emergente - Ley de Financiamiento Universitario (Orden Reestructurado) -->

<!-- Carrousel -->
<div id="carouselExampleCaptions" class="d-none d-sm-none d-md-none d-lg-block carousel slide border border-secondary border-bottom-1 border-right-0 border-left-0 border-top-0" data-ride="carousel" data-interval="2800">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active shadow-lg"></li>
		<!--<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>-->
		<!--<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>-->
		<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
		@isset($ultimaNoticia)
			<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
		@endisset		
	</ol>
	<div class="carousel-inner">
		<!-- Humanas 50 años-->
		<div class="carousel-item active">
                <div class="container-fluid mx-0 my-0 px-0 py-0">
                    <div class="row mx-0 my-0 px-0 py-0" style="background-color: #f8f9fa;">
                        
						<!-- Bloque Izquierdo -->
						<div class="col-6 mx-0 my-0 px-0 py-0"
						style="
							image-rendering: auto;						
							background-position: center center;
							background-color: #1b365d;
							background-image:url(slim/images/index/2026/historia-50-anios-.png);
							background-repeat: no-repeat;
							background-size: cover;
						"
						>
                        </div>
						<!-- Bloque Izquierdo -->

						<!-- Bloque Derecho-->
						<div class="col-6 pl-0 ml-0">
							<div class="container pl-0 ml-0">
								<div class="row">
									<div class="col-1 mx-0 my-0 px-1 pt-1 pb-0 bloqueDerechoPlumas" style="background-color: #f8f9fa;">

									</div>                        
									<div class="col-11 mx-0 my-0 pr-3 pt-5 pb-4 bloqueDerechoContenido" style="background-color: #f8f9fa; background-position: right; background-repeat: no-repeat; image-rendering: crisp-edges;">
										<div style="height: 100%" class="text-dark d-flex">
											<div class="row d-flex">
												<div class="col-12">
													<div class="container">
														<div class="row">
															<div class="col-10 pl-0 ml-0">
																<h5 style="font-weight: bold;" class="bloqueDerechoTitulo">Humanas: 50 años de docencia, investigación, extensión y compromiso con la sociedad</h5>
															</div>
															<div class="col-2">

															</div>
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="container">
														<div class="row">
															<div class="col-10 pl-0">
																<p class="d-inline-block d-sm-inline-block d-md-inline-block d-lg-inline-block d-xl-none text-justify bloqueDerechoParrafo">
																	Con medio siglo de historia, la Facultad de Ciencias Humanas trabaja junto a la comunidad en la...
																</p>
																<p class="d-none d-sm-none d-md-none d-lg-none d-xl-inline-block text-justify bloqueDerechoParrafo">
																	Con medio siglo de historia, la Facultad de Ciencias Humanas trabaja junto a la comunidad en la construcción colectiva de una Universidad pública, gratuita, laica, inclusiva y diversa.
																</p>
															</div>
															<div class="col-2">

															</div>
														</div>
													</div>
												</div>
												<div class="col-12 align-self-end pb-1">
													<div class="container">
														<div class="row">
															<div class="col-8">
																<a type="button" class="btn rounded-0 mt-1 float-left border border-1 border-secondary boton" style="font-size: 0.7rem;" href="{{route('carousel.historia')}}" class="text-dark"> Ver más</a>
															</div>
															<div class="col-3">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Bloque Derecho-->
                    </div>
                </div>
		</div>



		<!--Doctorado en Estudios Contemporáneos-->
		<div class="carousel-item">

                <div class="container-fluid mx-0 my-0 px-0 py-0">
                    <div class="row mx-0 my-0 px-0 py-0" style="background-color: #f8f9fa;">
						

						<div class="col-6 mx-0 my-0 px-0 py-0"
							style="
								image-rendering: auto;							
								background-position: center center;
								background-size: cover;								
								background-color: #1b365d;
								background-image:url(slim/images/index/memoria-urgente.jpg);
								background-repeat: no-repeat;
							"
						>
						</div>



						<div class="col-6 pl-0 ml-0">
							<div class="container pl-0 ml-0">
								<div class="row">
									<div class="col-1 mx-0 my-0 px-1 pt-1 pb-0 bloqueDerechoPlumas" style="background-color: #f8f9fa;">

									</div>                        
									<div class="col-11 mx-0 my-0 pr-3 pt-5 pb-4 bloqueDerechoContenido" style="background-color: #f8f9fa; background-position: right; background-repeat: no-repeat; image-rendering: crisp-edges;">
										<div style="height: 100%" class="text-dark d-flex">
											<div class="row d-flex">
												<div class="col-12">
													<div class="container">
														<div class="row">
															<div class="col-10 pl-0 ml-0">
																<span class="badge badge-primary text-uppercase" style="background-color: #1b365d;">espacio institucional</span>
																<h5 style="font-weight: bold;" class="bloqueDerechoTitulo">Memoria Urgente de la Facultad de Ciencias Humanas</h5>
															</div>
															<div class="col-2">

															</div>
														</div>
													</div>													
												</div>
												<div class="col-12">
													<div class="container">
														<div class="row">
															<div class="col-10 pl-0">
																<p class="text-justify bloqueDerechoParrafo">
																	Por la Ciencia, los Derechos Humanos y la soberanía argentina.
																	<!--Se presenta un espacio institucional de la Facultad de Ciencias Humanas destinado a reunir, visibilizar y poner en valor los pronunciamientos del Consejo Directivo...--><br>
																</p>
															</div>
															<div class="col-2">
																
															</div>
														</div>
													</div>													
												</div>
												<div class="col-12 align-self-end pb-2">
													<div class="container">
														<div class="row">
															<div class="col-8">
																<a type="button" class="btn rounded-0 mt-1 float-left border border-1 border-secondary boton" style="font-size: 0.7rem;" target="_blank" href="https://memoriaurgente.humanas.unlpam.edu.ar/" class="text-dark"> Ver más</a>
															</div>
															<div class="col-3">

															</div>															
														</div>
													</div>													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


                    </div>
                </div>
		</div>
		<!--Doctorado en Estudios Contemporáneos-->


		<!-- ------------------------------------------------------------------------------------------------Inscripciones Mayo 2026 (depende del script de fecha de finalización) ------------------------------------------------------------------------------------------------ -->
		@php
			$fechaComienzo = Carbon::create(2026, 05, 18, 0, 0, 0);
			$fechaFinal = Carbon::create(2026, 07, 24, 23, 59, 59);
			$ahora = now();
		@endphp

		@if ($ahora->between($fechaComienzo, $fechaFinal))
		<div class="carousel-item">

                <div class="container-fluid mx-0 my-0 px-0 py-0">
                    <div class="row mx-0 my-0 px-0 py-0" style="background-color: #f8f9fa;">
						

						<div class="col-6 mx-0 my-0 px-0 py-0"
							style="
								image-rendering: auto;							
								background-position: center center;
								background-size: cover;								
								background-color: #1b365d;
								background-image:url(slim/images/index/2026/inscripciones-a-carreras-de-grado.jpg);
								background-repeat: no-repeat;
							"
						>
						</div>



						<div class="col-6 pl-0 ml-0">
							<div class="container pl-0 ml-0">
								<div class="row">
									<div class="col-1 mx-0 my-0 px-1 pt-1 pb-0 bloqueDerechoPlumas" style="background-color: #f8f9fa;">

									</div>                        
									<div class="col-11 mx-0 my-0 pr-3 pt-5 pb-4 bloqueDerechoContenido" style="background-color: #f8f9fa; background-position: right; background-repeat: no-repeat; image-rendering: crisp-edges;">
										<div style="height: 100%" class="text-dark d-flex">
											<div class="row d-flex">
												<div class="col-12">
													<div class="container">
														<div class="row">
															<div class="col-10 pl-0 ml-0">
																<h5 style="font-weight: bold;" class="bloqueDerechoTitulo">Inscripciones a carreras de grado</h5>
															</div>
															<div class="col-2">

															</div>
														</div>
													</div>													
												</div>
												<div class="col-12">
													<div class="container">
														<div class="row">
															<div class="col-10 pl-0">
																<p class="text-justify bloqueDerechoParrafo">
																	La Facultad de Ciencias Humanas de la UNLPam comunica que se habilitarán nuevos períodos de inscripción a carreras para el ingreso 2026
																	<!--Se encuentran abiertas las inscripciones a carreras de grado del 29 de junio al al 24 de julio del corriente año 1 al 19 de diciembre de 2025 y del 2 al 20 de febrero de 2026-->
																	<br>
																</p>
															</div>
															<div class="col-2">

															</div>
														</div>
													</div>													
												</div>
												<div class="col-12 align-self-end pb-2">
													<div class="container">
														<div class="row">
															<div class="col-8">
																<a type="button" class="btn rounded-0 mt-1 float-left border border-1 border-secondary boton" style="font-size: 0.7rem;" href="{{route('ingresantes.como-inscribirse')}}" class="text-dark"> Ver más</a>
															</div>
															<div class="col-3">

															</div>															
														</div>
													</div>													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


                    </div>
                </div>
		</div>
		@else
			<!--Condición alternativa-->
		@endif
		<!-- ------------------------------------------------------------------------------------------------Inscripciones Mayo 2026 ------------------------------------------------------------------------------------------------ -->


		<!-- Noticia -->
		@isset($ultimaNoticia)
		@php
			$ruta = $ultimaNoticia->imagen;
 			$rutaModificada = Str::replace('public\noticias\imagenes/', 'public/noticias/imagenes/', $ruta);

			$resumen = $ultimaNoticia->resumen;
 			$resumenModificado = Str::replace('<p>', '', $resumen);
			$resumenModificado = Str::replace('</p>', '', $resumenModificado);
			$resumenModificado = Str::replace('<strong>', '', $resumenModificado);
			$resumenModificado = Str::replace('</strong>', '', $resumenModificado);
			$resumenModificado = Str::limit($resumenModificado, 240, '...');				
		@endphp
		<div class="carousel-item">
                <div class="container-fluid mx-0 my-0 px-0 py-0">
                    <div class="row mx-0 my-0 px-0 py-0" style="background-color: #f8f9fa;">

						<div class="col-6 mx-0 my-0 px-0 py-0"
							style="
								image-rendering: auto;
								background-position: center center;
								background-size: cover;
								background-color: #1b365d;
								background-image:url({{'/storage/'.$rutaModificada}});
								background-repeat: no-repeat;
							"
						>
								
							</div>

						<div class="col-6 pl-0 ml-0">
							<div class="container pl-0 ml-0">
								<div class="row">
									<div class="col-1 mx-0 my-0 px-1 pt-1 pb-0 bloqueDerechoPlumas" style="background-color: #f8f9fa;">

									</div>                        
									<div class="col-11 mx-0 my-0 pr-3 pt-5 pb-4 bloqueDerechoContenido" style="background-color: #f8f9fa; background-position: right; background-repeat: no-repeat; image-rendering: crisp-edges;">
										<div style="height: 100%" class="text-dark d-flex">
											<div class="row d-flex">
												<div class="col-12">
													<div class="container">
														<div class="row">
															<div class="col-10 pl-0 ml-0">
																<span class="badge badge-primary text-uppercase" style="background-color: #1b365d;">Noticia</span>
																<h5 style="font-weight: bold;" class="bloqueDerechoTitulo">{!!$ultimaNoticia->titulo!!}</h5>
															</div>
															<div class="col-2">

															</div>
														</div>
													</div>													
												</div>
												<div class="col-12">
													<div class="container">
														<div class="row">
															<div class="col-10 pl-0">
																<p class="text-justify bloqueDerechoParrafo">
																	{!!$resumenModificado!!}<br>
																</p>
															</div>
															<div class="col-2">

															</div>
														</div>
													</div>													
												</div>
												<div class="col-12 align-self-end pb-2">
													<div class="container">
														<div class="row">
															<div class="col-8">
																<a type="button" class="btn rounded-0 mt-1 float-left border border-1 border-secondary boton" style="font-size: 0.7rem;" href="{{'noticias/'.$ultimaNoticia->id}}" class="text-dark"> Leer más</a>																
															</div>
															<div class="col-3">
														</div>
													</div>													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

                    </div>
                </div>
		</div>
		@endisset
		<!--Noticia-->
	</div>

	<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
		<span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
	</button>
	<button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
		<span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
	</button>
	</div></div>
<!-- Carrousel -->








<!-----------------------------------------------------------------------------Sección móvil----------------------------------------------------------------------------->

	<!-- Noticias -->

		@isset($ultimaNoticia)
					@php
						$nombresMeses = [
							'01'=>'Enero',
							'02'=>'Febrero',
							'03'=>'Marzo',
							'04'=>'Abril',
							'05'=>'Mayo',
							'06'=>'Junio',
							'07'=>'Julio',
							'08'=>'Agosto',
							'09'=>'Septiembre',
							'10'=>'Octubre',
							'11'=>'Noviembre',
							'12'=>'Diciembre'
						];
							$k=$ultimaNoticia->created_at->format("m");
					@endphp
						<div class="d-flex d-sm-flex d-md-flex d-lg-none" style="margin: 0% 0%">
							<div class="card shadow-none w-100">
								<div class="card-img-top mx-0 my-0 px-0 py-0"
										style="
											image-rendering: auto;
											background-position: bottom center;
											background-size: cover;
											background-color: #1b365d;
											background-image:url({{'/storage/'.$rutaModificada}});
											background-repeat: no-repeat;
											min-height: 350px;
											height: 350px;
										"
								>
									<div class="d-flex align-items-end mx-0 px-0" style="min-height: 350px; height: 350px;">
										<div class="row d-flex align-items-end m-0 p-0 w-100">

											<div class="col-12 m-0 p-0">
												<div class="container m-0 p-0">
													<div class="row m-0 p-0">
														<div class="col-6 m-0 p-0" style="background-color: #56718E; height: 15px;"></div>
														<div class="col-4 m-0 p-0" style="background-color: #59817B; height: 15px;"></div>
														<div class="col-2 m-0 p-0" style="height: 15px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>						
								</div>
								<div class="card-body" style="background-color: #f8f9fa;">
									<a style="color: #1b365d !important; font-size: 1.2rem; font-weight: bold; text-transform: uppercase;" href="{{'noticias/'.$ultimaNoticia->id}}">{!!$ultimaNoticia->titulo!!}</a><br>
									<p class="card-text text-justify" style="font-size: 1rem;">
										{{Str::limit($resumenModificado, 150, '... ')}} <a href="{{'noticias/'.$ultimaNoticia->id}}" style="color: #1b365d">Continuar leyendo</a>
									</p>
								</div>
							</div>
						</div>
	@endisset
	
	<!--Noticias -->

	<!-- Nuestra Facultad Temporal

	<div class="d-flex d-sm-flex d-md-flex d-lg-none" style="margin: 0% 0%">
							<div class="card shadow-none w-100">
								<div class="card-img-top mx-0 my-0 px-0 py-0"
										style="
											image-rendering: auto;
											background-position: bottom center;
											background-size: cover;
											background-color: #1b365d;
											background-image:url(slim/images/index/2026/historia-50-anios-.png);
											background-repeat: no-repeat;
											min-height: 350px;
											height: 350px;
										"
								>
									<div class="d-flex align-items-end mx-0 px-0" style="min-height: 350px; height: 350px;">
										<div class="row d-flex align-items-end m-0 p-0 w-100">

											<div class="col-12 m-0 p-0">
												<div class="container m-0 p-0">
													<div class="row m-0 p-0">
														<div class="col-6 m-0 p-0" style="background-color: #56718E; height: 15px;"></div>
														<div class="col-4 m-0 p-0" style="background-color: #59817B; height: 15px;"></div>
														<div class="col-2 m-0 p-0" style="height: 15px;"></div>
														--<div class="col-4 m-0 p-0" style="background-color: #15a6b9; height: 15px;"></div>
														<div class="col-3 m-0 p-0" style="background-color: #757ab9; height: 15px;"></div>
														<div class="col-2 m-0 p-0" style="background-color: #b3d2e7; height: 15px;"></div>
														<div class="col-1 m-0 p-0" style="background-color: #d2d3d5; height: 15px;"></div>
														<div class="col-2 m-0 p-0" style="background-color: rgba(27, 54, 93, 0.8); height: 15px;"></div>--
													</div>
												</div>
											</div>
										</div>
									</div>						
								</div>
								<div class="card-body" style="background-color: #f8f9fa;">
									<a style="color: #1b365d !important; font-size: 1.2rem; font-weight: bold; text-transform: uppercase;" href="{{route('carousel.historia')}}">Humanas: 50 años de docencia, investigación, extensión y compromiso con la sociedad</a><br>
									<p class="card-text text-justify" style="font-size: 1rem;">
									Con medio siglo de historia, la Facultad de Ciencias Humanas trabaja junto a la comunidad en la construcción colectiva de una Universidad pública, gratuita, laica, inclusiva y diversa.<a href="{{route('carousel.historia')}}" style="color: #1b365d">Ver más</a>
									</p>
								</div>
							</div>
						</div>

	Nuestra Facultad Temporal-->



	<!-- Cards, Facultad, Posgrado, Extensión -->
	<div class="d-block d-sm-block d-md-block d-lg-none">
	<!--
	{{route('carreras.posgrado.especializacion.esp_ens_lengua_y_literatura')}}
	{{route('ingresantes.como-inscribirse')}}
	{{route('carousel.beca-tutor')}}
	-->
	<!--<hr style="width: 84vw; margin: 2% 8%; height: 10px;" class="py-2">-->
	<!--Tarjetas-->	
		<style>
		/* From Uiverse.io by SouravBandyopadhyay */ 
		.notification {
		display: flex;
		flex-direction: column;
		isolation: isolate;
		position: relative;
		width: 18rem;
		height: 8rem;
		background: #FFF;
		border-radius: 1rem;
		overflow: hidden;
		font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
		font-size: 16px;
		--gradient: linear-gradient(to bottom, #77a8d7, #15a6b9, #757aba);
		--color: #32a6ff
		}

		.notification:before {
		position: absolute;
		content: "";
		inset: 0.0625rem;
		border-radius: 0.9375rem;
		background: #FFF;
		z-index: 2
		}

		.notification:after {
		position: absolute;
		content: "";
		width: 0.25rem;
		inset: 0.65rem auto 0.65rem 0.5rem;
		border-radius: 0.125rem;
		background: var(--gradient);
		transition: transform 300ms ease;
		z-index: 4;
		}

		.notification:hover:after {
		transform: translateX(0.15rem)
		}

		.notititle {
		color: #1b365d;
		padding: 0.65rem 0.25rem 0.4rem 1.25rem;
		font-weight: 500;
		font-size: 1.1rem;
		transition: transform 300ms ease;
		z-index: 5;
		text-transform: uppercase;  
		}

		.notification:hover .notititle {
		transform: translateX(0.15rem)
		}

		.notibody {
		color: #1b365d;
		padding: 0 1.25rem;
		transition: transform 300ms ease;
		z-index: 5;
		text-transform: uppercase;
		}

		.notification:hover .notibody {
		transform: translateX(0.25rem)
		}

		.notiglow,
		.notiborderglow {
		position: absolute;
		width: 20rem;
		height: 20rem;
		transform: translate(-50%, -50%);
		background: radial-gradient(circle closest-side at center, white, transparent);
		opacity: 0;
		transition: opacity 300ms ease;
		}

		.notiglow {
		z-index: 3;
		}
		.notititle a{
			text-decoration: none;
			color: #1b365d;
		}

		.notibody a{
			text-decoration: none;
			color: #1b365d;
		}
		.notiborderglow {
		z-index: 1;
		}

		.notification:hover .notiglow {
		opacity: 0.1
		}

		.notification:hover .notiborderglow {
		opacity: 0.1
		}

		.note {
		color: var(--color);
		position: fixed;
		top: 80%;
		left: 50%;
		transform: translateX(-50%);
		text-align: center;
		font-size: 0.9rem;
		width: 75%;
		}
		</style>	
			<!--<hr style="width: 84vw; margin: 4% 8%;" class="py-2">-->
			
			<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
			<!------------------------------------------------ Difusion móvil ------------------------------------------------>
			<hr style="width: 84vw; margin: 4% 8%;" class="py-2">
			<div class="notification justify-content-center card" style="width: 84vw; margin: 2% 8%; height: 150px;">
				<div class="notiglow"></div>
				<div class="notiborderglow"></div>
				<div class="notititle" style="text-align: center;">
					<a href="https://memoriaurgente.humanas.unlpam.edu.ar/" target="_blank">
						Memoria Urgente.
					</a>
				</div>
				<div class="notibody" style="text-align: center;">
					<a href="https://memoriaurgente.humanas.unlpam.edu.ar/" target="_blank">
						Por la Ciencia, los Derechos Humanos y la soberanía argentina.
					</a>
				</div>
			</div>
			<!------------------------------------------------ Difusion móvil ------------------------------------------------>

			<!------------------------------------------------ Difusion móvil ------------------------------------------------>
			<!--<hr style="width: 84vw; margin: 4% 8%;" class="py-2">
			<div class="notification justify-content-center card" style="width: 84vw; margin: 2% 8%; height: 150px;">
				<div class="notiglow"></div>
				<div class="notiborderglow"></div>
				<div class="notititle" style="text-align: center;">
					<a href="{{route('carousel.puentes-a-la-comunidad')}}">
						Convocatoria 2026 de AEU Humanas<br>
						Puentes con la Comunidad II
					</a>
				</div>
				<div class="notibody" style="text-align: center;">
					<a href="{{route('carousel.puentes-a-la-comunidad')}}">
					</a>
				</div>
			</div>-->
			<!------------------------------------------------ Puentes a la comunidad ------------------------------------------------>			
			

			<!------------------------------------------------ Becas Posgrado ------------------------------------------------>
			<!--
			<hr style="width: 84vw; margin: 4% 8%;" class="py-2">
			<div class="notification justify-content-center card" style="width: 84vw; margin: 2% 8%; height: 150px;">
				<div class="notiglow"></div>
				<div class="notiborderglow"></div>
				<div class="notititle" style="text-align: center;">
					<a href="{{route('carousel.becas')}}">
					</a>
				</div>
				<div class="notibody" style="text-align: center;">
					<a href="{{route('carousel.becas')}}">
						Convocatoria a las Becas de Estímulo<br>	 
						a las Vocaciones Científicas<br> (EVC-CIN) 2026
					</a>
				</div>
			</div>
			-->
			<!------------------------------------------------ Becas Posgrado ------------------------------------------------>			

			<!------------------------------------------------ Aytes de Segunda ------------------------------------------------>
			<!--<hr style="width: 84vw; margin: 4% 8%;" class="py-2">
			<div class="notification justify-content-center card" style="width: 84vw; margin: 2% 8%; height: 150px;">
				<div class="notiglow"></div>
				<div class="notiborderglow"></div>
				<div class="notititle" style="text-align: center;">
					<a href="https://www.humanas.unlpam.edu.ar/estudiantes/ayudante_de_segunda#Llamado-a-seleccion">
						Llamado a selección de aspirantes<br> 
						a cubrir los cargos de Ayudantes de <br>
						Segunda del 17 al 24 de abril.
						Beca de Tutor/a para <br>
						acompañamiento de Estudiante<br> 
						con Discapacidad<br>
					</a>
				</div>
			</div>-->
			<!------------------------------------------------ Aytes de Segunda ------------------------------------------------>

			<!------------------------------------------------ Inscripciones Mayo 2026 ------------------------------------------------>			
			@php
			$dateComienzo = Carbon::create(2026, 05, 18, 0, 0, 0);
			$dateFinal = Carbon::create(2026, 07, 24, 23, 59, 59);
			$ahora = now();
			@endphp

			@if ($ahora->between($dateComienzo, $dateFinal))			
			<hr style="width: 84vw; margin: 4% 8%;" class="py-2">
			<div class="notification justify-content-center card" style="width: 84vw; margin: 2% 8%; height: 150px;">
				<div class="notiglow"></div>
				<div class="notiborderglow"></div>
				<div class="notititle" style="text-align: center;">
					<a href="{{route('ingresantes.como-inscribirse')}}">
						Inscripciones a carreras de grado<br>
						del 29 de junio al 24 de julio del corriente año.
					</a>
				</div>
			</div>
			@else
				<!--Condición alternativa-->
			@endif			
			<!------------------------------------------------ Inscripciones Diciembre 2026 ------------------------------------------------>

			
			<!------------------------------------------------ Archivo de Noticias ------------------------------------------------>
			<!--<hr style="width: 84vw; margin: 4% 8%;" class="py-2">
			<div class="notification justify-content-center card" style="width: 84vw; margin: 2% 8%; height: 150px;">
				<div class="notiglow"></div>
				<div class="notiborderglow"></div>
				<div class="notititle" style="text-align: center;">
					<a href="{{route('noticias.index')}}">
						Archivo de<br>Noticias
					</a>
				</div>
			</div>-->
			<!------------------------------------------------ Archivo de Noticias ------------------------------------------------>			

	<!--Tarjetas-->

		<!--Linea divisoria	-->
		<hr style="width: 84vw; margin: 2% 8%;" class="py-2">

		<!--Nuestra Facultad-->
		<div class="card" style="width: 84vw; margin: 2% 8%; height: 150px; background-color: #56718E; border-radius: 15px !important; border: 0px;">
			<div class="card-body d-flex align-items-center justify-content-center">
				<div>
					<i class="fa fa-home d-flex justify-content-center pb-2" aria-hidden="true" style="font-size: 1.5rem; color:#FFF;"></i>
					<p class="card-title d-flex justify-content-center">
					<a href="{{route('carousel.historia')}}" class="font-weight-bold text-center" style="text-decoration: none; text-transform: uppercase; color:#FFF;">
						Nuestra Facultad
					</a>
					</p>					
				</div>
			</div>
		</div>
		<!--Nuestra Facultad-->
		
		<!--Posgrado-->
		<div class="card" style="width: 84vw; margin: 2% 8%; height: 150px;  background-color: #C8BFB5; border-radius: 15px !important; border: 0px;">
			<div class="card-body d-flex align-items-center justify-content-center">
				<div>
					<i class="fa fa-graduation-cap d-flex justify-content-center pb-2" aria-hidden="true" style="font-size: 1.5rem; color:#FFF;"></i>
					<p class="card-title d-flex justify-content-center">
					<a href="{{route('carreras.posgrado.carreras-posgrado')}}" class="font-weight-bold text-center" style="text-decoration: none; text-transform: uppercase; color:#FFF;">
						Posgrado
					</a>
					</p>					
				</div>
			</div>
		</div>
		<!--Posgrado-->
		
		<hr style="width: 84vw; margin: 2% 8%;" class="py-2">		
	</div>
	<!-- Cards, Facultad, Posgrado, Extensión -->	
<!-----------------------------------------------------------------------------Sección móvil----------------------------------------------------------------------------->

<style>
	.card-box-01{
		height: 200px; 
		background-color: #577390;  
		border-width: 8px; 
		border-style: solid; 
		border-color: #FFF; 
		transition: all 0.4s ease-in-out;     /* suavizado general */
  		transform: scale(1);
		border-radius: 15px !important;   
	}
	.card-box-01:hover{
		background-color: #7B96B2;            /* color al pasar el mouse */
		transform: scale(0.85);               /* zoom suave */
		box-shadow: 0 8px 20px rgba(0,0,0,0.3); /* sombra elegante */
		border-style: none;
	}
	.card-box-01 h3{
		text-transform: uppercase;
		font-family: 'Nunito Sans', sans-serif;
	}
	.card-box-01 a{
		text-decoration: none;
	}				
	.card-box-02{
		height: 200px; 
		background-color: #59827C;  
		border-width: 8px; 
		border-style: solid; 
		border-color: #FFF; 
		transition: all 0.4s ease-in-out;     /* suavizado general */
  		transform: scale(1);
		border-radius: 15px !important;		  		
	}
	.card-box-02:hover{
		background-color: #7EA6A0;            /* color al pasar el mouse */
		transform: scale(0.85);               /* zoom suave */
		box-shadow: 0 8px 20px rgba(0,0,0,0.3); /* sombra elegante */
		border-style: none;		
	}
	.card-box-02 h3{
		text-transform: uppercase;
		font-family: 'Nunito Sans', sans-serif;
	}	
	.card-box-02 a{
		text-decoration: none;
	}				
	.card-box-03{
		height: 200px; 
		background-color: #A2978A;  
		border-width: 8px; 
		border-style: solid; 
		border-color: #FFF; 
		transition: all 0.4s ease-in-out;     /* suavizado general */
  		transform: scale(1);
		border-radius: 15px !important; 		
	}
	.card-box-03:hover{
		background-color: #C8BFB5;            /* color al pasar el mouse */
		transform: scale(0.85);               /* zoom suave */
		box-shadow: 0 8px 20px rgba(0,0,0,0.3); /* sombra elegante */
		border-style: none;			
	}
	.card-box-03 h3{
		text-transform: uppercase;
		font-family: 'Nunito Sans', sans-serif;
	}
	.card-box-03 a{
		text-decoration: none;
	}
	
	/* Educacion a distancia */
	.card-box-04{
		height: 150px; 
		background-color: #757ABA;
		border-width: 8px; 
		border-style: solid; 
		border-color: #FFF; 
		transition: all 0.4s ease-in-out;     /* suavizado general */
  		transform: scale(1);
		border-radius: 15px !important; 		
	}
	.card-box-04:hover{
		background-color: #24285E;            /* color al pasar el mouse */
		transform: scale(0.85);               /* zoom suave */
		box-shadow: 0 8px 20px rgba(0,0,0,0.3); /* sombra elegante */
		border-style: none;			
	}
	.card-box-04 h3{
		text-transform: uppercase;
		font-family: 'Nunito Sans', sans-serif;
	}
	.card-box-04 a{
		text-decoration: none;
	}	
</style>
	<div style="margin-left: 8vw; width: 84vw;"  class="px-0">
		<div class="row">
		<div class="col-12 col-lg-4 rounded-lg d-flex flex-column justify-content-center align-items-center card-box-01">
				<a href="{{route('eventos.index')}}">
					<img src="slim/images/index/actividadesAcademicas.png" style="height: 55px" class="my-2">
				</a>
				<a href="{{route('eventos.index')}}" class="my-1">
					<h3 class="text-white text-center">Actividades académicas</h3>
				</a>
			</div>
			<div class="col-12 col-lg-4 rounded-lg d-flex flex-column justify-content-center align-items-center card-box-02">
				<a href="https://investigacion.humanas.unlpam.edu.ar/">
					<img src="slim/images/index/institutos.png" style="height: 55px" class="my-2">
				</a>

				<a href="https://investigacion.humanas.unlpam.edu.ar/" class="my-1" target="_blank">					
					<h3 class="text-white text-center">Investigación</h3>
				</a>				
			</div>
			<div class="col-12 col-lg-4 rounded-lg d-flex flex-column justify-content-center align-items-center card-box-03">
				<!--<a href="{{route('publicaciones.index')}}">-->
				<a href="{{route('carousel.extension')}}">
					<img src="slim/images/index/extension-icon-01.png" style="height: 65px" class="my-2">
				</a>
				<!--<a href="{{route('publicaciones.index')}}" class="my-1">-->
				<a href="{{route('carousel.extension')}}" class="my-1">					
					<h3 class="text-white text-center">Extensión Universitaria</h3>
				</a>
			</div>
		</div>
	</div>

<!-- ./ End Students Say Area section -->


<hr class="my-3" style="margin-left:8vw; width:84vw;"/>

<!-- ************************************************************ Ed. a Distancia  2026 ************************************************************ -->
<!-- CSS Educación a Distancia -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
	.banner-distancia {
    /* Fondo principal y secundario en degradado */
    background: linear-gradient(135deg, #26406C 0%, #4B92CC 100%);
    border-radius: 12px;
    padding: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    min-height: 200px;
    color: #D2D3D5; /* Color gris claro para texto secundario */
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    border-bottom: 5px solid #757ABA; /* Detalle estético */
    overflow: hidden;
    position: relative;
}

/* Decoración sutil de fondo */
.banner-distancia::before {
    content: "";
    position: absolute;
    top: -50px;
    right: -50px;
    width: 200px;
    height: 200px;
    background: #D7DBF5;
    opacity: 0.1;
    border-radius: 50%;
}

.banner-title {
    color: #FFFFFF;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
	font-family: "Roboto", sans-serif;
}

.banner-text {
    font-size: 1.1rem;
    margin-bottom: 25px;
    color: #D7DBF5;
}

.banner-button {
    display: inline-block;
    background-color: #15A6B9; /* Color de acento para el botón */
    color: white;
    padding: 12px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(21, 166, 185, 0.3);
	font-family: "Roboto", sans-serif;
}

.banner-button:hover {
    background-color: #757ABA; /* Cambio al color complementario */
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    color: white;
}
</style>
<!-- CSS -->
<!-- CSS Seminarios -->
<style>
.banner-seminarios {
    background: #26406C; /* El color más importante como base */
    background: linear-gradient(90deg, #26406C 0%, #4B92CC 100%);
    border-radius: 8px;
    padding: 50px 30px;
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    border-left: 8px solid #15A6B9; /* El turquesa como acento lateral */
}

/* Elementos decorativos geométricos */
.banner-seminarios::after {
    content: "";
    position: absolute;
    bottom: -30px;
    left: -30px;
    width: 150px;
    height: 150px;
    background: #D7DBF5;
    opacity: 0.1;
    border-radius: 20px;
    transform: rotate(45deg);
}

.banner-overlay {
    z-index: 1;
    text-align: center;
}

.badge-new {
    background-color: #D2D3D5;
    color: #26406C;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: bold;
    text-transform: uppercase;
    display: inline-block;
    margin-bottom: 15px;
}

.banner-title-sm {
    color: #FFFFFF;
    font-size: 2rem;
    font-weight: 900;
    margin: 0;
    letter-spacing: -1px;
    line-height: 1;
	font-family: "Roboto", sans-serif;
}

.banner-subtitle-sm {
    color: #D7DBF5;
    font-size: 1.2rem;
    margin: 15px 0 25px 0;
}

.banner-actions {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-primary-sm {
    background-color: #15A6B9;
    color: white;
    padding: 12px 25px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}

.btn-primary-sm:hover {
    background-color: #FFF;
    transform: scale(1.05);
}

.btn-secondary-sm {
    background-color: transparent;
    color: #FFFFFF;
    padding: 12px 25px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    border: 2px solid #D2D3D5;
    transition: 0.3s;
}

.btn-secondary-sm:hover {
    background-color: #D2D3D5;
    color: #26406C;
}    
</style>
<!-- CSS -->
<!-- Cards Ed. Disstancia - Seminarios -->
<div style="margin-left:8vw; width:84vw;">
		<div class="row d-flex justify-content-around">
			<div class="col-12 col-md-12 col-lg-5 mt-4 mt-md-0 mx-0 px-0 pr-md-2  banner-distancia">
				<div class="banner-content">
					<h2 class="banner-title">Educación a distancia</h2>
					<a href="https://ead.humanas.unlpam.edu.ar/" target="_blank" class="banner-button">Acceder</a>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-5 mt-4 mt-md-0 mx-0 px-0 pr-md-2  banner-seminarios">
				<div class="banner-overlay">
					<h2 class="banner-title-sm">SEMINARIOS</h2>
					<div class="banner-actions">
						<a href="{{route('eventos.seminarios')}}" class="btn-primary-sm">Ver Cronograma</a>
					</div>
				</div>
			</div>		
		</div>
</div>
<!-- Cards Ed. Disstancia - Seminarios -->

<hr class="my-3" style="margin-left:8vw; width:84vw;"/>

<!-- Nueva Agenda -->
<!-- HTML/PHP -->
@php
    $hoy = Carbon::now();
	$mes = Carbon::now()->month;
    $mes = $mes ? \Carbon\Carbon::parse($mes)->startOfMonth() : now()->startOfMonth();
@endphp
<div class="agenda-box" style="margin-left: 8vw; width: 84vw;">
    <h3>Agenda</h3>

    @forelse($eventos as $evento)
        <div class="agenda-item">
            <span class="agenda-fecha">
                {{ \Carbon\Carbon::parse($evento->fecha_inicio)->translatedFormat('d \d\e F') }}
            </span>
            <span class="agenda-titulo">
                {{ $evento->titulo }}
            </span>
        </div>
    @empty
        <p>No hay eventos próximos.</p>
    @endforelse

    <div class="agenda-link">
		<a type="button" id="btnModalCalendar" style="font-size: 0.8em; background-color: #1b365d;" class="btn btn-primary border-0">Ver más</a>
    </div>
</div>
<!-- HTML/PHP -->

<!-- CSS -->
<style>
    .agenda-box {
        background: #f5f5f5;
        padding: 20px;
        border-radius: 10px;
    }

    .agenda-item {
        display: flex;
        gap: 15px;
        padding: 8px 0;
        border-bottom: 1px solid #ddd;
    }

    .agenda-fecha {
        font-weight: bold;
        min-width: 120px;
    }

    .agenda-link {
        margin-top: 10px;
    }
</style>
<!-- CSS -->
<hr class="my-3" style="margin-left:8vw; width:84vw;"/>
<!-- Nueva Agenda -->

<!-- Extensión, Jornadas, Elecciones, Protocolo -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

	<div style="margin-left: 8vw; width:84vw;">
			<div class="row">
			<!--<section class="tarjetas slider-content-bottom col-12 col-md-4 mx-0 px-0 row">
					<a href="https://jornadasdeinvestigacion.humanas.unlpam.edu.ar/" target="_blank" class="slider-btm-box btm-item_04 ml-md-1 w-100">
						<h3 class="arialGrande" style="text-shadow: 0px 0px"><i class="fa fa-code-fork" aria-hidden="true"></i> Jornadas de Investigación</h3>			
					</a>
			</section>-->

				<!--Extensión-->
				<div class="card shadow-none col-12 col-md-3 my-1 border border-light" style="height: 120px; background-color: #7B96B2; border-radius: 15px;">
					<div class="card-body d-flex align-items-center justify-content-center m-1">
						<div class="text-center">
							<!--<a href="{{route('carousel.extension')}}" class="font-weight-bold text-center" style="text-decoration: none; text-transform: uppercase; color:#FFF;">-->
							<a href="{{route('publicaciones.index')}}" class="font-weight-bold text-center" style="text-decoration: none; text-transform: uppercase; color:#FFF;">
								Publicaciones
							</a>
						</div>
					</div>
				</div>
				<!--Extensión-->
				<!--Jornadas de Investigación-->
				<div class="card shadow-none col-12 col-md-3 my-1 border border-light" style="height: 120px; background-color: #5C738E; border-radius: 15px;">
					<div class="card-body d-flex align-items-center justify-content-center m-1">
					<div class="text-center">
							<a href="https://jornadasdeinvestigacion.humanas.unlpam.edu.ar/" target="_blank" class="font-weight-bold text-center" style="text-decoration: none; text-transform: uppercase; color:#FFF;">
								Jornadas de Investigación
							</a>
						</div>
					</div>
				</div>
				<!--Jornadas de Investigación-->
				<!--Junta Electoral-->
				<div class="card shadow-none col-12 col-md-3 my-1 border border-light" style="height: 120px; background-color: #6B9E9E; border-radius: 15px;">
					<div class="card-body d-flex align-items-center justify-content-center m-1">
						<div class="text-center">
							<a href="https://juntaelectoral.humanas.unlpam.edu.ar/" target="_blank" class="font-weight-bold text-center" style="text-decoration: none; text-transform: uppercase; color:#FFF;">
								Junta Electoral FCH
							</a>
						</div>
					</div>
				</div>
				<!--Junta Electoral-->				
				<!--Protocolo Violencia de Género-->
				<div class="card shadow-none col-12 col-md-3 my-1 border border-light" style="height: 120px; background-color: #7EA6A0; border-radius: 15px;">
					<div class="card-body d-flex align-items-center justify-content-center m-1">
						<div class="text-center">
							<a href="https://www.unlpam.edu.ar/la-unlpam/protocolo-ante-situaciones-de-violencia" target="_blank" class="font-weight-bold text-center" style="text-decoration: none; text-transform: uppercase; color:#FFF;">
								Protocolo Violencia de Género
							</a>
						</div>
					</div>
				</div>
				<!--Protocolo Violencia de Género-->
			</div><!-- row -->
	</div>

<!-- Extensión, Jornadas, Elecciones, Protocolo -->
<hr class="my-5" style="margin-left:8vw; width:84vw;"/>

<!-- Programas -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	/*---------------------------------PROGRAMAS-INSTITUCIONALES-----------------------------------------------*/
	.backgroundcolorPI0:hover{
		background-color: #577390 !important;
	}
	.backgroundcolorPI1{
		background-color:  #3C516B !important;
	}
	.backgroundcolorPI2:hover{
		background-color:  #4B7D7D !important;
	}
	.backgroundcolorPI3{
		background-color:  #59827C !important;
	}
	.backgroundcolorPI4:hover{
		background-color:  #6C7D62 !important;
	}	
	.backgroundcolorPI5{
		background-color:  #967160 !important;
	}
	.backgroundcolorPI6:hover{
		background-color:  #A2978A !important;
	}
	.backgroundcolorPI7{
		background-color:  #758089 !important;
	}
	.backgroundcolorPI8:hover{
		background-color:  #6B9E9E !important;
	}
	.backgroundcolorPI9:hover{
		background-color:  #8FAAD9 !important;
	}
	.divMagicImgPar:hover .overlay table {
		background-color: transparent !important;
	}
</style>

		<!-- Programas Institucionales -->
		<div style="margin-left: 8vw; width:84vw;" class="row justify-content-between d-lg-flex d-sm-none d-none">
		<center class="col-md-12 mx-0 pb-3 pt-2">
				<b class="arialRoundedGrande textAzulInstitucional" style="font-family: 'Cabin', sans-serif !important">PROGRAMAS INSTITUCIONALES</b>
		</center>
		</div>

		<div style="margin-left: 8vw; width:84vw;" class="row justify-content-between d-lg-flex d-sm-none d-none shadow-lg">
			@php $i = 0 @endphp
			@foreach ($programas_institucionales as $programa)
			<?php
				$classProgramas = "backgroundcolorPI". $i % 12;
				if ($i % 2 == 0) 
					$classMagicIMG ="divMagicImgImpar"; 
				else
					$classMagicIMG ="divMagicImgPar";
			?> 
			@php $i++ @endphp
			@if($programa->id===12)
				<div class="h-100 col-12 col-md-6 col-lg-3 {{$classMagicIMG}} d-flex justify-content-start mx-0 px-0">
					<img src="{{'/storage/'.$programa->imagen}}" class="mx-0 px-0" style="object-fit: cover;"/>
					<a class="overlay" href="https://programagraduados.humanas.unlpam.edu.ar/" target="_blank"  style="height: 100%; width: 100%;">
					<table class="figMsg text-white {{$classProgramas}}" style="height: 100%; width: 100%;">
						<td class="align-middle text-center arialGrande" style="font-family:'Prompt', serif !important; font-weight: 400 !important; font-style: normal !important; text-transform: uppercase !important; font-size: 0.9rem;">
							{{$programa->nombre}} 
						</td>
					</table>
					</a>
				</div>
			@else
				<div class="h-100 col-12 col-md-6 col-lg-3 {{$classMagicIMG}} d-flex justify-content-start mx-0 px-0">
					<img src="{{'/storage/'.$programa->imagen}}" class="mx-0 px-0" style="object-fit: cover;"/>
					<a class="overlay" href="{{route('programas.show',$programa->id)}}" style="height: 100%; width: 100%;">
					<table class="figMsg text-white {{$classProgramas}}" style="height: 100%; width: 100%;">
						<td class="align-middle text-center arialGrande" style="font-family:'Prompt', serif !important; font-weight: 400 !important; font-style: normal !important; text-transform: uppercase !important; font-size: 0.9rem;">
							{{$programa->nombre}}
						</td>
					</table>
					</a>
				</div>
			@endif
				<?php
					if ($i==4)
						$i++;
				?>
			@endforeach
			@if($programas_institucionales == "[]")
				<center><i>No hay programas institucionales para visualizar</i></center>
			@endif
		</div>
		<!-- Programas Institucionales -->
		<!-- Programas Institucionales Móvil-->
		<div style="margin-left: 8vw; width:84vw;" class="row justify-content-between d-lg-none d-sm-flex d-flex">
		<center class="col-md-12 mx-0 pb-3">
				<b class="arialRoundedGrande textAzulInstitucional" style="font-family: 'Cabin', sans-serif !important">PROGRAMAS INSTITUCIONALES</b>
		</center>
		</div>
		<div style="margin-left: 8vw; width:84vw; background-color: transparent) !important" class="row justify-content-between d-lg-none d-sm-flex d-flex shadow-lg">
			@php $i = 0 @endphp
			@foreach ($programas_institucionales as $programa)
			<?php
				$classProgramas = "backgroundcolorPI". $i % 12;
				if ($i % 2 == 0) 
					$classMagicIMG ="divMagicImgImpar"; 
				else
					$classMagicIMG ="divMagicImgPar";
			?> 
			@php $i++ @endphp
			@if($programa->id===12)
				<div class="h-100 col-12 col-md-6 col-lg-3 {{$classMagicIMG}} d-flex justify-content-start mx-0 px-0">
					<img src="{{'/storage/'.$programa->imagen}}" class="mx-0 px-0" style="object-fit: cover;"/>
					<a class="overlay" href="https://programagraduados.humanas.unlpam.edu.ar/" target="_blank" style="height: 100%; width: 100%;">
					<table class="figMsg text-white {{$classProgramas}}" style="height: 100%; width: 100%;">
						<td class="align-middle text-center arialGrande" style="font-family:'Prompt', serif !important; font-weight: 400 !important; font-style: normal !important; text-transform: uppercase !important; font-size: 0.9rem;
						">{{$programa->nombre}}</td>
					</table>
					</a>
				</div>
			@else
				<div class="h-100 col-12 col-md-6 col-lg-3 {{$classMagicIMG}} d-flex justify-content-start mx-0 px-0">
					<img src="{{'/storage/'.$programa->imagen}}" class="mx-0 px-0" style="object-fit: cover;"/>
					<a class="overlay" href="{{route('programas.show',$programa->id)}}" style="height: 100%; width: 100%;">
					<table class="figMsg text-white {{$classProgramas}}" style="height: 100%; width: 100%;">
						<td class="align-middle text-center arialGrande" style="font-family:'Prompt', serif !important; font-weight: 400 !important; font-style: normal !important; text-transform: uppercase !important; font-size: 0.9rem;
						">{{$programa->nombre}}</td>
					</table>
					</a>
				</div>
			@endif
			@endforeach
			@if($programas_institucionales == "[]")
				<center><i>No hay programas institucionales para visualizar</i></center>
			@endif
		</div>
		<!-- Programas Institucionales Móvil-->

<hr class="my-5" style="margin-left:8vw; width:84vw;"/>

<!--Cátedras Libres-->
<div style="margin-left: 8vw; width:84vw;">	
		<center class="col-md-12 mx-0 px-0">
				<b class="arialRoundedGrande textAzulInstitucional" style="font-family: 'Cabin', sans-serif !important">CÁTEDRAS LIBRES EXTRACURRICULARES</b>
		</center>
</div>

<div style="margin-left: 8vw; width:84vw; background-color: #efefef;" class="shadow-lg">	
		<div class="col-md-12 mx-0 px-0 row d-flex">
			@php $indexCatedra = 0 @endphp
			@foreach ($catedras as $catedra)
				@php $indexCatedra++ @endphp
				<div class="col-12 col-md-4 mt-1 mx-0 px-0 alturaMovilCatedras">
					<a href="{{route('catedras.show',$catedra->id)}}" class="cardCatedra">
						<div class="w-100 d-flex justify-content-center align-items-center" style="height: 100%; width: 100%; background-color:{{$catedra->color}}">
							<!--<img src="{{asset('slim/images/index/pinCatedras.png')}}" style="position:absolute; width: 15%; left:0" class="d-none d-md-block">-->
					    	<p class="text-center catedrasText text-white my-2 py-2" style="width: 70%; font-family:'Prompt', serif !important; font-weight: 400 !important; font-style: normal !important; text-transform: uppercase !important; font-size: 0.9rem; 
							   ">
					    		{{$catedra->nombre}}
							</p>
						</div>
					</a>
				</div>
			@endforeach
		</div>
		@if($catedras == "[]")
			<center><i>No hay cátedras libres para visualizar</i></center>
		@endif
</div>	
<!-- ./ End Cátedras libres -->

<hr class="mt-5" style="margin-left:8vw; width:84vw;"/>

{{--MODAL --}}
<!-- Modal -->
<div class="modal" id="calendarModal" tabindex="0" aria-labelledby="calendarModalLabel" aria-hidden="true" style="z-index: 99999;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #7B96B2;">
        <h5 class="modal-title text-white" id="calendarModalLabel">Actividades Académicas</h4>
        <button type="button" id="btnCalendarModalClose" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      	<center class="row p-4" style="height: 80vh;">
         <center id='calendar' class="col-12"></center>
      	</center>
    </div>
  </div>
</div>


<script>
	document.addEventListener('DOMContentLoaded', function() {
		var initialLocaleCode = 'es';
		var calendarEl = document.getElementById('calendar');
		var date = new Date();
		var calendar = new FullCalendar.Calendar(calendarEl, {
		headerToolbar: {
			left: 'prev,next today',
			center: 'title',
			right: 'dayGridMonth'
		},
		eventSources: [
				{
					url: '{{route("eventos.calendar")}}',
					async: false,
					dataType: 'jsonp',
					className: 'turnos_feed',
				},
			],
		initialDate: date,
		locale: initialLocaleCode,
		editable: false,
		dayMaxEvents: true, // allow "more" link when too many events
		eventClick: function (Args){
			window.location.herf = arg.event.extendedProps.links.show
		}
		
		});
		calendar.render();
	});
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var altura = 0;
	var diffSizes;

	$("#btnModalCalendar").click(function(){
	$('#calendarModal').modal('show');
	
	var initialLocaleCode = 'es';
	var calendarEl = document.getElementById('calendar');
	var date = new Date();
	var calendar = new FullCalendar.Calendar(calendarEl, {
	headerToolbar: {
		left: 'prev,next today',
		center: 'title',
		right: 'dayGridMonth'
	},
	eventSources: [
			{
				url: '{{route("eventos.calendar")}}',
				async: false,
				dataType: 'jsonp',
				className: 'turnos_feed',
			},
		],
	initialDate: date,
	locale: initialLocaleCode,
	editable: false,
	dayMaxEvents: true, // allow "more" link when too many events
	eventClick: function (Args){
		window.location.herf = arg.event.extendedProps.links.show
	}
	
	});
	calendar.render();
  });
  $('#btnCalendarModalClose').click(function(){
  	$('#calendarModal').modal('hide');
  });
});
</script>
<!--********MODAL*******-->
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
<!--********MODAL*******-->

<!-- Script Modal Emergente - Ley de Financiamiento Universitario (Orden Reestructurado) -->

<!--21-10-2026-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById("univ-modal-financiamiento");
        const btnCerrar = document.getElementById("univ-cerrar-modal");

        // Mostrar modal automáticamente al cargar la página con un pequeño retraso
        setTimeout(() => {
            modal.classList.add("activo");
        }, 800);

        // Función para cerrar el modal
        function cerrarModal() {
            modal.classList.remove("activo");
        }

        btnCerrar.addEventListener("click", cerrarModal);

        modal.addEventListener("click", function(e) {
            if (e.target === modal) {
                cerrarModal();
            }
        });

        // Lógica del Contador (Fecha de inicio: 21 de Octubre de 2025)
        const fechaInicio = new Date("2025-10-21T00:00:00");
        
        const elNumeroPrincipal = document.getElementById("univ-numero-principal");
        const elEtiquetaPrincipal = document.getElementById("univ-etiqueta-principal");
        const contenedorResto = document.getElementById("univ-contenedor-resto");

        function actualizarContador() {
            const ahora = new Date();
            const diferencia = ahora - fechaInicio;

            if (diferencia > 0) {
                const segundosTotales = Math.floor(diferencia / 1000);
                const minutosTotales = Math.floor(segundosTotales / 60);
                const horasTotales = Math.floor(minutosTotales / 60);
                const diasTotales = Math.floor(horasTotales / 24);

                const horas = horasTotales % 24;
                const minutos = minutosTotales % 60;
                const segundos = segundosTotales % 60;

                // Verificamos si pasaron 365 días o más para alternar la visualización
                if (diasTotales >= 365) {
                    const anios = Math.floor(diasTotales / 365);
                    const diasRestantes = diasTotales % 365;

                    elNumeroPrincipal.textContent = anios;
                    elEtiquetaPrincipal.textContent = anios === 1 ? "AÑO" : "AÑOS";

                    // Debajo mostramos: Días restantes, Horas, Minutos, Segundos (4 columnas)
                    contenedorResto.style.gridTemplateColumns = "repeat(4, 1fr)";
                    contenedorResto.innerHTML = `
                        <div class="univ-contador-item-pequeno">
                            <span class="univ-contador-numero-pequeno">${diasRestantes}</span>
                            <span class="univ-contador-etiqueta-pequena">Días</span>
                        </div>
                        <div class="univ-contador-item-pequeno">
                            <span class="univ-contador-numero-pequeno">${String(horas).padStart(2, '0')}</span>
                            <span class="univ-contador-etiqueta-pequena">Horas</span>
                        </div>
                        <div class="univ-contador-item-pequeno">
                            <span class="univ-contador-numero-pequeno">${String(minutos).padStart(2, '0')}</span>
                            <span class="univ-contador-etiqueta-pequena">Minutos</span>
                        </div>
                        <div class="univ-contador-item-pequeno">
                            <span class="univ-contador-numero-pequeno">${String(segundos).padStart(2, '0')}</span>
                            <span class="univ-contador-etiqueta-pequena">Segundos</span>
                        </div>
                    `;
                } else {
                    // Si son menos de 365 días, mostramos Días arriba y abajo Horas, Minutos, Segundos (3 columnas)
                    elNumeroPrincipal.textContent = diasTotales;
                    elEtiquetaPrincipal.textContent = "DÍAS";

                    contenedorResto.style.gridTemplateColumns = "repeat(3, 1fr)";
                    contenedorResto.innerHTML = `
                        <div class="univ-contador-item-pequeno">
                            <span class="univ-contador-numero-pequeno">${String(horas).padStart(2, '0')}</span>
                            <span class="univ-contador-etiqueta-pequena">Horas</span>
                        </div>
                        <div class="univ-contador-item-pequeno">
                            <span class="univ-contador-numero-pequeno">${String(minutos).padStart(2, '0')}</span>
                            <span class="univ-contador-etiqueta-pequena">Minutos</span>
                        </div>
                        <div class="univ-contador-item-pequeno">
                            <span class="univ-contador-numero-pequeno">${String(segundos).padStart(2, '0')}</span>
                            <span class="univ-contador-etiqueta-pequena">Segundos</span>
                        </div>
                    `;
                }
            } else {
                elNumeroPrincipal.textContent = "0";
                elEtiquetaPrincipal.textContent = "DÍAS";
                contenedorResto.style.gridTemplateColumns = "repeat(3, 1fr)";
                contenedorResto.innerHTML = `
                    <div class="univ-contador-item-pequeno"><span class="univ-contador-numero-pequeno">00</span><span class="univ-contador-etiqueta-pequena">Horas</span></div>
                    <div class="univ-contador-item-pequeno"><span class="univ-contador-numero-pequeno">00</span><span class="univ-contador-etiqueta-pequena">Minutos</span></div>
                    <div class="univ-contador-item-pequeno"><span class="univ-contador-numero-pequeno">00</span><span class="univ-contador-etiqueta-pequena">Segundos</span></div>
                `;
            }
        }

        actualizarContador();
        setInterval(actualizarContador, 1000);
    });
</script>
<!--21-10-2026-->
<!-- Script Modal Emergente - Ley de Financiamiento Universitario (Orden Reestructurado) -->
@endsection