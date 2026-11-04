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
                                <span class="b-active">Convalidaciones</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Convalidación</h3>
                            <p class="text-justify">
                            Las/os estudiantes podrán solicitar la convalidación de actividades curriculares.<br><br> 
                            La convalidación de las actividades curriculares en reserva, tanto las aprobadas como las cursadas regularizadas, será automática para las/os estudiantes que se encuentren inscriptas/os en el último Plan de Estudios aprobado de las carreras respectivas.<br><br>
                            La convalidación de las actividades curriculares en reserva, tanto las aprobadas como las cursadas regularizadas, será automática para los/as estudiantes que se encuentren inscriptas/os en Planes de Estudios anteriores al último aprobado.<br><br>
                            Las convalidaciones se otorgarán por un plazo de tiempo que no podrá exceder el doble de años de la duración de la carrera, contando a partir de la aprobación del último Diseño Curricular por parte del Consejo Superior.<br>
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection