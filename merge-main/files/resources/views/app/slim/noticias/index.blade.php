@extends('app.slim.layouts.home')


@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <p><span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Noticias</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-justify become-title">
                            <h3>Noticias</h3>
                        </div>
                    </div>
                    <div class="row row-cols-1">
                        @foreach ($noticias as $noticia)
            <!-- tarjeta noticias -->
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
            <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                @php $i=$noticia->updated_at->format("n"); @endphp
                @php
                $ruta = $noticia->imagen;
                    $rutaModificada = Str::replace('public\noticias\imagenes/', 'public/noticias/imagenes/', $ruta);
                @endphp
                    
                    <div class="d-flex">
						<div class="card mt-3" style="width:100%;">
							<div class="card-img-top mx-0 my-0 px-0 py-0"
									style="
										image-rendering: auto;
										background-position: top center;
										background-size: cover;
										background-color: #1b365d;
										background-image:url({{'/storage/'.$rutaModificada}});
										background-repeat: no-repeat;
										height: 250px;
									"
								>
								<div class="container d-flex align-items-end mx-0" style="height: 250px;">
									<div class="row d-flex align-items-end" style="background-color: rgba(27, 54, 93, 0.3)">
										<div class="col-12">
											<!--<span class="text-white" style="font-size: 0.6rem; color: #FFF !important; text-shadow: 1px 1px #000">
                                                {{$noticia->updated_at->format("d")." de "}}{{$nombresMeses[$i]. " de "}}
                                                {{$noticia->updated_at->format("Y, H:i")}}
											</span>-->								
											<h5 class="card-title">
												<span style="color: #FFF !important; font-size: 1rem; font-weight: bold; text-shadow: 1px 1px #000">
                                                    <a href="{{route('noticias.show',['noticia'=> $noticia->id])}}" class="text-light">
                                                        <!--{{$noticia->titulo}}-->
                                                        {{Str::limit($noticia->titulo, 30, '... ')}}
                                                    </a>    
                                                
                                                </span>
											</h5>
										</div>
										<div class="col-2" style="border-style: solid; border-color: #1b365d; background-color: #1b365d; height: 15px;"></div>
										<div class="col-1" style="border-style: solid; border-color: #15a6b9; background-color: #15a6b9; height: 15px;"></div>
										<div class="col-1" style="border-style: solid; border-color: #b3d2e7; background-color: #b3d2e7; height: 15px;"></div>
										<div class="col-1" style="border-style: solid; border-color: #d2d3d5; background-color: #d2d3d5; height: 15px;"></div>
										<div class="col-7"></div>
									</div>
								</div>						
							</div>
						</div>
					</div>
            </div>
            <!-- tarjeta noticias -->








                            <!--<div class="col mb-3 ">
                                <div class="card h-100 " style="margin-bottom: 0px">
                                    <div class="row no-gutters "  >
                                        <div class="col-md-4 text-center align-self-center">
                                        @php $URL = "/storage/".$noticia->imagen;@endphp
                                            <img 
                                                src="{{ $URL }}" 
                                                class="img-fluid px-1"
                                                alt="Noticia" style="height:220px; width: auto; object-fit: cover; border-radius: 10px;">
                                        </div>
                                        <div class="col-md-8 align-self-center h-100">
                                            <div class="card-body h-100 d-flex flex-column mh-100" >
                                                <h5 class="card-title" style="font-size: 1.5rem">{{ $noticia->titulo }}</h5>
                                                <div class="" style="height: 220px; max-height: 220px">
                                                    <div class='overflow-hidden mh-100 text-justify'>
                                                        @if ($noticia->resumen)
                                                        {!! htmlspecialchars_decode($noticia->resumen) !!}  
                                                        @else
                                                        {!! htmlspecialchars_decode($noticia->descripcion) !!}  
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class='d-flex align-items-center'>
                                                    <div class='flex-grow-1 '>
                                                        <p class="card-text"><small class="text-muted fecha">{{$noticia->updated_at}}</small></p>
                                                    </div>
                                                    <div class="p-2">
                                                        <a href="{{route('noticias.show',['noticia'=> $noticia->id])}}" class="btn self-align-bottom text-light" style="background-color: #26406C">Ver Noticia Completa</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        @endforeach
                    </div>

                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection


<script src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('body').addClass('become_teachers');
        moment.locale('es');
        $('.fecha').each(function() {
            var fecha = $(this).text();

            var fecha_formateada = moment(fecha).fromNow()
            $(this).text(fecha_formateada);
        });
        
    });
</script>
