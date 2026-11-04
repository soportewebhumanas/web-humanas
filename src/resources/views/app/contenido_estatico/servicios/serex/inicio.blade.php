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
                                <span><a href="{{route('servicios.inicio')}}">Servicios <i class='fa fa-angle-right'></i></a></span>
                                <span><a href="{{route('servicios.serex')}}">Servicio Externo de Lenguas Extranjeras <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Inicio</span>
                                </p>
                                <h3 class="text-justify">Servicio Externo de Lenguas Extranjeras</h3>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('servicios.serex.examenes-de-acreditacion-de-nivel-de-lengua-inglesa')}}">Exámenes de Acreditación de Nivel de Lengua Inglesa</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('servicios.serex.evaluacion-de-competencias-comunicativas')}}">Evaluación de Competencias Comunicativas - Estudiantes Secundarios</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <br><br>
                </div>
            </section>
        </div>
    </section>
@endsection