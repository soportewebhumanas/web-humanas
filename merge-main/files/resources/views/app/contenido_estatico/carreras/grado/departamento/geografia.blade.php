@extends('app.slim.layouts.home')


@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <p>
                                <span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                <span><a href="{{route('carreras.grado.departamentos')}}">Departamentos <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Geografía</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <!--Inicio Contenido-->
                <div class="container mb-4">
                    <h3>Carreras: Geografía</h3>
                    <div class="container">
                        <div class="row">
                            <style>
                                .row-carreras{
                                    background-color: #1b365d;
                                }
                                .row-carreras a{
                                    color: #FFF;
                                }
                                .row-carreras a:hover{
                                    color: #FEFEFE;
                                }
                            </style>                            
                            <div class=" my-1 row-carreras col-12 py-2 text-justify border border-dark border-right-0 border-left-0 border-top-0 rounded">
                                <a href="{{route('carreras.grado.departamento.geografia.carrera_prof_geografia')}}">Profesorado en Geografía</a>
                            </div>
                            <div class=" my-1 row-carreras col-12 py-2 text-justify border border-dark border-right-0 border-left-0 border-top-0 rounded">
                                <a href="{{route('carreras.grado.departamento.geografia.carrera_lic_geografia')}}">Licenciatura en Geografía</a>
                            </div>
                            <div class=" my-1 row-carreras col-12 py-2 text-justify border border-dark border-right-0 border-left-0 border-top-0 rounded">
                                <a href="{{route('carreras.grado.departamento.geografia.carrera_lic_turismo')}}">Licenciatura en Turismo</a>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!--Fin Contenido-->
                </div>
            </section>
        </div>
    </section>


@endsection
