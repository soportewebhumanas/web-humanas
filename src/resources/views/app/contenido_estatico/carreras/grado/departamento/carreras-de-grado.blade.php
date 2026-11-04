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
                                    <span class="b-active">Carreras de grado</span>
                                </p>
                                <h3>Carreras de grado</h3>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.geografia.carrera_prof_geografia')}}">Profesorado en Geografía</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.historia.carrera_prof_historia')}}">Profesorado en Historia</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.lenguas_extranjeras.carrera_prof_en_ingles')}}">Profesorado en Inglés</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.letras.carrera_prof_en_letras')}}">Profesorado en Letras</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.cs_de_la_educacion.carrera_prof_en_cs_de_la_eduacion')}}">Profesorado en Ciencias de la Educación</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.ed_inicial.carrera_ed_inicial')}}">Profesorado en Educación Inicial</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.ed_primaria.carrera_ed_primaria')}}">Profesorado en Educación Primaria</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.letras.carrera_prof_de_nivel_secundario_en_lengua_y_literatura')}}">Profesorado de nivel secundario en Lengua y Literatura</a>
                                </div>                                
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.comunicacion_social.carrera_com_social')}}">Licenciatura en Comunicación Social</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.geografia.carrera_lic_geografia')}}">Licenciatura en Geografía</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.geografia.carrera_lic_turismo')}}">Licenciatura en Turismo</a>
                                </div>                                
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.historia.carrera_lic_historia')}}">Licenciatura en Historia</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.lenguas_extranjeras.carrera_lic_ingles_ola')}}">Licenciatura en Inglés con Orientación en Lingüística Aplicada</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.lenguas_extranjeras.carrera_lic_ingles_oel')}}">Licenciatura en Inglés con Orientación en Estudios Literarios</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.letras.carrera_lic_letras')}}">Licenciatura en Letras</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.cs_de_la_educacion.carrera_lic_en_cs_de_la_educacion')}}">Licenciatura en Ciencias de la Educación</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('carreras.grado.departamento.cs_de_la_educacion.carrera_lic_en_cs_de_la_educacion_a_distancia')}}">Licenciatura en Ciencias de la Educación - A distancia</a>
                                </div>
                                </div>                                                                                                        
                            </div>
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