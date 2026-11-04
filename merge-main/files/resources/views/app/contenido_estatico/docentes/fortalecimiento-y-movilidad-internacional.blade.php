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
                                <span><a href="{{route('docentes.inicio')}}">Docentes <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Fortalecimiento y Movilidad Internacional</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Fortalecimiento y Movilidad Internacional</h3>
                            <p class="text-justify">
                            Con la finalidad de fortalecer y promover la movilidad internacional del sector docente, la UNLPam ha adherido a diversos Programas y Convenios con organismos e instituciones de Educación Superior nacionales e internacionales. Además, cuenta con un Plan de Internacionalización como medio para mejorar sus relaciones con el exterior.<br><br> 
                            Para mayor información, visite la <a href="https://www.unlpam.edu.ar/relaciones-internacionales" target="_blank">página web de la UNLPam</a>.<br> 
                            Contacto: <a href="mailto:movilidad@unlpam.edu.ar">movilidad@unlpam.edu.ar</a><br>
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
