@extends('app.slim.layouts.home')
@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-text ">
                                <p>
                                    <span>
                                        <a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a>
                                    </span> 
                                    <span><a href="{{route('nodocentes.inicio')}}">NoDocentes <i class='fa fa-angle-right'></i></a></span> 
                                    <span class="b-active">Cursos y capacitaciones</span>
                                </p>
                                <h1 class="text-center text-color-institucional mt-2">Cursos y capacitaciones</h1>
                                <span  class="line"></span>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <br><br>
                </div>
            </section>
        </div>
    </section>
@endsection