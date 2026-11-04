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
                                <span class="b-active">Reválidas</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Reválidas</h3>
                            <p class="text-justify">
                                Las/os estudiantes podrán presentarse a rendir examen final de las actividades curriculares dentro de los dos (2) años posteriores a la aprobación de la correspondiente cursada, y con el mismo programa con que aprobaron la misma. Pasados los dos (2) años, podrán revalidar dicha cursada, por una única vez, debiendo rendir el examen final con el último programa vigente. La reválida la solicitará el/la estudiante ante la Secretaría Académica y, previo informe académico, la/la profesor/a a cargo de la cátedra resolverá acerca de su otorgamiento y término del mismo, que no podrá exceder los dos (2) años.                                
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
