@extends('app.slim.layouts.home')

@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-text ">
                                <p>
                                    <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{route('ingresantes.inicio')}}">Ingresantes <i class='fa fa-angle-right'></i></a></span> 
                                    <span class="b-active">Mi primer año en la Facultad</span>
                                </p>
                                <h3 class="text-justify">Mi primer año en la facultad</h3>
                                <!--<div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('ingresantes.mi-primer-año-en-la-facultad.programa-de-ambientacion')}}">Programa de ambientación</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('ingresantes.mi-primer-año-en-la-facultad.programa-de-trayectorias-diversas')}}">Programa de Trayectorias Diversas</a>
                                </div>-->
								@php
									$prgm=DB::table('programas_institucionales')->get();
									$j=0;
									$amb="Formación y Acompañamiento a las Trayectorias Pedagógicas Diversas";
									$tray="Ambientación a la Vida Universitaria";
									$tipo_p="Programa institucional";
								@endphp
							 	@foreach($prgm as $programa)
									@if ((($programa->nombre === $amb) || ($programa->nombre === $tray)) && ($programa->tipo === $tipo_p))
										@php $j++; @endphp
                                        <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                            <a href="{{route('programas.show',$programa->id)}}">Programa de {{$programa->nombre}}</a>
                                        </div>
									@endif
								@endforeach
								@if ($j == 0)
                                        <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                            <a href="#">Programas Institucionales</a>
                                        </div>                                	
								@endif                                
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('ingresantes.mi-primer-año-en-la-facultad.epsa')}}">EPSA</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('estudiantes.centro-de-estudiantes')}}">Centro de estudiantes</a>
                                </div>
                                <!--<div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('ingresantes.mi-primer-año-en-la-facultad.preguntas-frecuentes')}}">Preguntas frecuentes</a>    
                                </div>-->                                                                                                                                                              
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <br><br>
                </div>
            </section>
        </div>
    </section>
@endsection