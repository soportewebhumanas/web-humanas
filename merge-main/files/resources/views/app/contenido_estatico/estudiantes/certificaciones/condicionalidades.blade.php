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
                                <span><a href="{{ route('estudiantes.inicio') }}">Estudiantes <i class='fa fa-angle-right'></i></a></span>
                                <span><a href="{{ route('certificaciones-y-formularios.certificaciones_y_formularios') }}">Certificaciones y formularios <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Condicionalidades</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Condicionalidades</h3>
                            <p class="text-justify">
                            Las/os estudiantes podrán solicitar matriculación en forma condicional en las actividades curriculares de las que adeuden hasta dos (2) correlativas. La autorización es extendida por la/el Secretaria/o Académica/o, previa consulta con el/la docente a cargo de la cátedra. La condicionalidad se concederá por un período de tiempo que no podrá exceder el llamado de examen anterior a la finalización de los cuatrimestres o años.  Las/os estudiantes que hayan solicitado condicionalidad podrán cursar las actividades curriculares, en forma condicional, hasta tanto se resuelva la situación.                                
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
