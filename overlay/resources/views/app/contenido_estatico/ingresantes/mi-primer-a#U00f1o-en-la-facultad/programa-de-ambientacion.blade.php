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
                                    <span>
                                        <a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a>
                                    </span> 
                                    <a href="#">Ingresantes <i class='fa fa-angle-right'></i></a>
                                    <span class="b-active">Programa de ambientación</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Programa de Ambientación</h3>
                            <p class="text-justify">
                            La Facultad de Ciencias Humanas proyecta y ejecuta políticas tendientes a la inserción y permanencia de ingresantes como una dimensión prioritaria respecto al estudiantado. En ese sentido, el Programa Ambientación a la Vida Universitaria se constituye, desde 2004, en un ámbito institucional de recepción académica que aborda la problemática del ingreso desde diferentes aspectos y en cada caso con distintas propuestas de actividades. Su eje estructurador lo constituye la alfabetización académica y se organiza en tres dimensiones: la distinción de los aspectos medulares de la carrera elegida, el desarrollo del pensamiento crítico y la reflexión respecto del proceso de lectoescritura académica. Apunta, además, a que las y los estudiantes se interioricen sobre los programas y servicios institucionales.<br><br>
                            El trabajo de los equipos responsables del Programa Ambientación se extiende durante todo el año, de manera tal de consolidar los procesos de alfabetización académica de las y los estudiantes y de incluirlas/os en las prácticas cotidianas de enseñanza de las actividades curriculares que cursan durante primer año, como así también realizar un seguimiento cercano de sus trayectorias académicas. <br><br>
                            Otro de los aspectos relevantes es el acompañamiento de las trayectorias de los y las ingresantes en la preparación de los exámenes finales cuatrimestrales y anuales, por lo que se proponen talleres para afianzar metas de comprensión de los espacios curriculares cursados.<br><br>
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
