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
                                    <span class="b-active">Departamentos</span>
                                </p>
                                <h3>Departamentos</h3>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.ciencias-educacion')}}">Departamento de Ciencias de la Educación</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.comunicacion-social')}}">Departamento de Comunicación Social</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.educacion-inicial')}}">Departamento de Educación Inicial</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.educacion-primaria')}}">Departamento de Educación Primaria</a>
                                </div>
                                <!--<div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('departamento.formacion-docente')}}">Departamento de Formación Docente</a>
                                </div>-->
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.geografia')}}">Departamento de Geografía</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.historia')}}">Departamento de Historia</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.lenguas-extranjeras')}}">Departamento de Lenguas Extranjeras</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                <a href="{{route('carreras.grado.departamento.letras')}}">Departamento de Letras</a>
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