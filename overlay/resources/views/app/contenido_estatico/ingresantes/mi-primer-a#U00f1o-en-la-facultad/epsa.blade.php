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
                                <span class="b-active">EPSA</span>
                        </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Examen Preventivo de Salud (EPSA)</h3>
                            <p class="text-justify">
                                Es un estudio integral de salud obligatorio para las y los ingresantes a una carrera universitaria de la UNLPam, con el fin de conocer su estado de salud actual. Incluye un conjunto de estudios tales como: examen odontológico, vacunación vigente, análisis de laboratorio, estudio visual, electrocardiograma, y examen clínico final.<br>
                                El trámite se realiza a través de la Secretaría de Bienestar Universitario de la UNLPam.<br>
                                Para mayor información: <a href="http://www.unlpam.edu.ar/epsa" target="_blank">http://www.unlpam.edu.ar/epsa</a>
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
