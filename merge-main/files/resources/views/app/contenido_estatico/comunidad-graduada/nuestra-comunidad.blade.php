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
                                <span class="b-active">Nuestras/os graduadas/os</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <h3 class="text-justify">Nuestras/os graduadas/os</h3>
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <p class="text-justify">
                                Con 50 años de historia, la Facultad de Ciencias Humanas ha alcanzado un lugar destacado en la región como una institución formadora de formadoras/es, de calidad académica y promoción de derechos. Graduadas y graduados, quienes han depositado su confianza en la institución, han sido clave en esa construcción colectiva. Educación pública y privada, investigación, derechos humanos, políticas públicas, gestión cultural, constituyen los principales campos de inserción profesional, respondiendo a las demandas de la sociedad y contribuyendo al desarrollo social, cultural y educativo de la región.
                            </p>                            
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5">
                           <img src="../slim/comunidad-graduada/nuestros-graduados.jpg" alt="Nuestra Comunidad" class="img-fluid">                           
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>


@endsection
