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
                                <span class="b-active">Letras</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <!--Inicio Contenido-->
                <div class="container mb-4">
                    <h3>Carreras: Letras</h3>
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
                                <a href="{{route('carreras.grado.departamento.letras.carrera_prof_en_letras')}}">Profesorado en Letras</a>
                            </div>
                            <div class=" my-1 row-carreras col-12 py-2 text-justify border border-dark border-right-0 border-left-0 border-top-0 rounded">
                                <a href="{{route('carreras.grado.departamento.letras.carrera_lic_letras')}}">Licenciatura en Letras</a>
                            </div>
                            <div class=" my-1 row-carreras col-12 py-2 text-justify border border-dark border-right-0 border-left-0 border-top-0 rounded">
                                <a href="{{route('carreras.grado.departamento.letras.carrera_prof_de_nivel_secundario_en_lengua_y_literatura')}}">Profesorado de Nivel Secundario en Lengua y Literatura</a>
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
