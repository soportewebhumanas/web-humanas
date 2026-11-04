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
                                    <span>
                                        <a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a>
                                    </span> 
                                    <span class="b-active">Comunidad Graduada</span>
                                </p>
                                <h3 class="text-justify">Comunidad Graduada</h3>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('comunidad-graduada.nuestra-comunidad')}}">Nuestras/os graduadas/os</a>
                                </div>
                                @php
									$prgm=DB::table('programas_institucionales')->get();
									$j=0;
									$pformacionpermanente="Formación Permanente para Graduadas y Graduados";
								@endphp
							 	@foreach($prgm as $programa)
									@if ($programa->nombre === $pformacionpermanente)
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
                                <!--<div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('comunidad-graduada.programa-de-formacion-permanente')}}">Programa de formación permanente</a>
                                </div>-->
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('comunidad-graduada.cursos-y-seminarios')}}">Cursos y Seminarios</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('llamadosSeleccion.index')}}">Concursos y selección</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('comunidad-graduada.proyectos-de-investigacion')}}">Proyectos de investigación</a>
                                </div>
                                <!--<div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('comunidad-graduada.elecciones')}}">Elecciones Generales 2026</a>
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