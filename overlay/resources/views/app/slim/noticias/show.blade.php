@extends('app.slim.layouts.home')
    <style>
        .pie-noticia{
            color:#26406C !important;
        }
                                        
        .pie-noticia a{
            color:#26406C !important;
        }

        .pie-noticia a:hover{
            color:#256B6B !important;
        }
                                    
        .button {
        border: none;
        font-family: sans-serif;
        font-size: 17px;
        background: transparent;
        color: #007bff;
        border: solid 1px rgba(0, 107, 179, 0.2);
        padding: 10px;
        border-radius: 4px;
        transition-duration: 0.2s;
        text-decoration: none;
        }

        .button:before {
        content: "»";
        opacity: 0;
        margin-left: -15px;
        transition-duration: 0.2s;
        }

        .button:hover:before {
        margin-left: 0px;
        opacity: 1;
        }

        .button:hover {
        color: #6C93D5;
        background: rgba(0, 0, 0, 0.02);
        border: solid 1px gainsboro;
        text-decoration: none;
        }
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
    </style>
@section('content')
@php 
    $anio = date('Y'); 
    $nombresMeses = [
        1=>'Enero',
        2=>'Febrero',
        3=>'Marzo',
        4=>'Abril',
        5=>'Mayo',
        6=>'Junio',
        7=>'Julio',
        8=>'Agosto',
        9=>'Septiembre',
        10=>'Octubre',
        11=>'Noviembre',
        12=>'Diciembre'
    ];
@endphp
    <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <h3 class="modal-title">Archivo de Noticias </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                                    <!--Form -->
                                    <div class="mb-2">
                                        <form action="{{route('archivo-noticias.noticias')}}" method="GET" role="buscar">
                                        <div class="input-group justify-content-center">
                                            <select class="custom-select my-1 mr-sm-2 col-12" id="buscar" name="anio" required>
                                                <option value="" disabled selected>Elija el año</option>
                                                @php
                                                for ($i=2022; $i<=date("Y"); $i++)
                                                    echo "<option value='".$i."'>".$i."</option>";
                                                @endphp
                                            </select>
                                            <span class="input-group-btn">
                                                <button class="btn mt-1 text-white" type="submit" title="Buscar por anio" style="background-color: #1b365d">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                                </span>
                                            </div>
                                        </form>                
                                    </div>
                                    <!--Form -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #1b365d">Cerrar</button>
                </div>
                </div>
            </div>
            </div>        
    <!-- Modal -->

    <!-- Ruta -->
        <!--<div class="container pt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-text">
                        <p class="pt-2" id="arriba">
                            <span><a href="{{route('index')}}">Inicio</a> </span>
                            <i class='fa fa-angle-right'></i> 
                            <span><a href="{{route('noticias.index')}}">Noticias</a></span>
                            <i class='fa fa-angle-right'></i> 
                            <span class="b-active">{{$noticia->titulo}}</span>                            
                            </p>
                    </div>
                </div>
            </div>
        </div>-->
    <!-- Ruta -->
        @isset($noticia)    
        @php

			$ruta = $noticia->imagen;
 			$rutaModificada = Str::replace('public\noticias\imagenes/', 'public/noticias/imagenes/', $ruta);

			$resumen = $noticia->resumen;
 			$resumenModificado = Str::replace('<p>', '', $resumen);
			$resumenModificado = Str::replace('</p>', '', $resumenModificado);
			$resumenModificado = Str::replace('<strong>', '', $resumenModificado);
			$resumenModificado = Str::replace('</strong>', '', $resumenModificado);
			$resumenModificado = Str::limit($resumenModificado, 240, '...');				
		    @endphp 

                    <!-- desktop -->               
                    <div class="d-none d-sm-none d-md-none d-lg-flex container mb-2">
                        <div class="d-flex" style="margin: 0% 0%">
							<div class="w-100">
								<div class="card-img-top mx-0 my-0 px-0 py-0 rounded-0"
										style="
											image-rendering: auto;
											background-position: center center;
											background-size: cover;
											background-color: #1b365d;
											background-image:url({{'/storage/'.$rutaModificada}});
											background-repeat: no-repeat;
											min-height: 350px;
											height: 500px;
										"
								>
									<div class="d-flex align-items-end mx-0 px-0" style="min-height: 350px; height: 500px;">
										<div class="row d-flex align-items-end m-0 p-0 w-100">

											<div class="col-12 m-0 p-0">
												<div class="container m-0 p-0">
													<div class="row m-0 p-0">
														<div class="col-9 m-0 p-0" style="background-color: #56718E; height: 15px;"></div>
														<div class="col-3 m-0 p-0" style="background-color: #59817B; height: 15px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>						
								</div>
								<div class="card-body">
    								<span style="color: #1b365d !important; font-size: 1.2rem; text-transform: uppercase; font-family: 'Rubik', sans-serif;">{!!$noticia->titulo!!}</span><br>
									<p class="text-justify card-text" style="font-size: 1rem; font-family: 'Rubik', sans-serif !important; text-transform: uppercase; text-align: justify !important;">
                                        @php echo $noticia->descripcion;@endphp
									</p>
                                    <hr>
                                    <p class="text-right pie-noticia" style="font-family: 'Rubik', sans-serif !important;">
                                        <i class="fa fa-home" aria-hidden="true"></i> <a href="{{route('index')}}">Inicio</a><!-- - <a href="#arriba">Ir arriba</a>--> | <i class="fa fa-newspaper-o" aria-hidden="true"></i> <a href="{{route('noticias.index')}}">Ver más noticias</a>
                                    </p>
								</div>
							</div>
						</div>
                    </div>
                    <!-- desktop -->            
            
                    <!-- movil -->               
                    <div class="d-flex d-sm-flex d-md-flex d-lg-none mb-2">
                        <div class="d-flex" style="margin: 0% 0%">
							<div class="w-100">
								<div class="card-img-top mx-0 my-0 px-0 py-0 rounded-0"
										style="
											image-rendering: auto;
											background-position: center center;
											background-size: cover;
											background-color: #1b365d;
											background-image:url({{'/storage/'.$rutaModificada}});
											background-repeat: no-repeat;
											min-height: 350px;
											height: 500px;
										"
								>
									<div class="d-flex align-items-end mx-0 px-0" style="min-height: 350px; height: 500px;">
										<div class="row d-flex align-items-end m-0 p-0 w-100">

											<div class="col-12 m-0 p-0">
												<div class="container m-0 p-0">
													<div class="row m-0 p-0">
														<div class="col-9 m-0 p-0" style="background-color: #56718E; height: 15px;"></div>
														<div class="col-3 m-0 p-0" style="background-color: #59817B; height: 15px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>						
								</div>
								<div class="card-body">
    								<span style="color: #1b365d !important; font-size: 1.2rem; text-transform: uppercase; font-family: 'Rubik', sans-serif;">{!!$noticia->titulo!!}</span><br>
									<p class="text-justify card-text" style="font-size: 1rem; font-family: 'Rubik', sans-serif !important; text-transform: uppercase; text-align: justify !important;">
                                        @php echo $noticia->descripcion;@endphp
									</p>
                                    <hr>
                                    <p class="text-right pie-noticia" style="font-family: 'Rubik', sans-serif !important;">
                                        <i class="fa fa-home" aria-hidden="true"></i> <a href="{{route('index')}}">Inicio</a><!-- - <a href="#arriba">Ir arriba</a>--> | <i class="fa fa-newspaper-o" aria-hidden="true"></i> <a href="{{route('noticias.index')}}">Ver más noticias</a>
                                    </p>
								</div>
							</div>
						</div>
                    </div>
                    <!-- movil -->
            @endisset	
    <!-- Noticia -->

    <section name="news">

    </section>
    <!-- Noticia -->
@endsection


<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
	$('body').addClass('become_teachers');
    
    ClassicEditor
    .create( document.querySelector( '#editor' ),  {
        language: 'es',
        defaultLanguage: 'es',
        toolbar: [],
        link: {
            addTargetToExternalLinks: true
        }
    } )
    .then( editor => {
        editor.isReadOnly = true;
        console.log(editor)
        $('.ck').addClass('border-0')
        $('.ck').css('text-align','justify')
    } )
    .catch( error => {
        console.error( error );
    } );

});
</script>