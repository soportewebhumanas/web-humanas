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
                                <span><a href="{{route('docentes.inicio')}}">Docentes <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Bedelía</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Bedelía</h3>
                            <p class="text-justify">
                            <!--Las consultas relativas a aulas, horarios y licencias de Zoom para el desarrollo de actividades curriculares y extracurriculares (aprobadas por el Consejo Directivo), las/os docentes pueden comunicarse con Bedelía a través de los siguientes correos:<br><br>-->
                            Por consultas relativas a aulas, horarios y licencias de Zoom para el desarrollo de actividades curriculares y extracurriculares (aprobadas por el Consejo Directivo), las/os docentes pueden comunicarse con Bedelía a través de los siguientes correos:<br><br>
                            Sede General Pico: <a href="mailto:bedeliagp@humanas.unlpam.edu.ar">bedeliagp@humanas.unlpam.edu.ar</a><br> 
                            Sede Santa Rosa:  <a href="mailto:bedelia@humanas.unlpam.edu.ar">bedelia@humanas.unlpam.edu.ar </a>

                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
