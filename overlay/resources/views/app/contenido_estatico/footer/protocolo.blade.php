@extends('app.slim.layouts.home')


@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <p><span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Protocolo</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Protocolo</h3>
                        <p class="text-justify text-dark">
                            <a href="https://www.unlpam.edu.ar/la-unlpam/uso-del-lenguaje-no-sexista" target="_blank">Protocolo ante situaciones de violencia de género
Guía de recomendaciones para el uso de lenguaje no sexista </a>
                            <!--<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/2_6_2020_258.pdf" target="_blank">Guía de recomendaciones para el uso de lenguaje no sexista en la UNLPam</a><br>-->
                        </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection