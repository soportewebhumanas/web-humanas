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
                                <span><a href="{{route('comunidad-graduada.comunidad_graduada')}}">Comunidad Graduada <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Proyectos de Investigación</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Proyectos de Investigación</h3>
                            <p class="text-justify">
                                La investigación y la extensión universitaria son dos de las funciones esenciales de la Universidad con mayor desarrollo dentro de esta Unidad Académica. Dos funciones sustanciales que se han profesionalizado en correspondencia con los cambios que trajo consigo la interdisciplinariedad y la renovación de enfoques epistemológicos que marcaron las últimas décadas. La producción científica y el desarrollo de acciones de extensión universitaria se han expandido a partir de las interrelaciones con otros centros de estudio y con otros organismos y entidades sociales, porque desde Humanas entendemos nuestro trabajo en vínculo con una trama social que es compleja y variable. Así, la investigación y la extensión universitaria de nuestra Facultad se traduce en 9  institutos, 9 revistas científicas, 5 cátedras libres extracurriculares y más de 80 proyectos acreditados y activos en los cuales graduadas y graduados pueden fortalecer, ampliar y desplegar sus conocimientos y experiencia en el territorio.
                            </p>
                        <h3 class="text-justify">Accesos</h3>
                        <p class="text-justify">
                            <a href="https://investigacion.humanas.unlpam.edu.ar/" target="_blank">Institutos de Investigación</a><br>
                            <a href="{{route('carousel.extension')}}">Extensión Universitaria</a>
                        </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
