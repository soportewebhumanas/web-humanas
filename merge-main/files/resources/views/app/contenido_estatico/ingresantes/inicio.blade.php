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
                                    <span class="b-active">Ingresantes</span>
                                </p>
                                <h3 class="text-justify">Ingresantes</h3>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('ingresantes.que-estudiar')}}">¿Qué estudiar?</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('ingresantes.como-inscribirse')}}">¿Cómo inscribirse?</a>                                    
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('ingresantes.mi-primer-año-en-la-facultad.preguntas-frecuentes')}}">Preguntas frecuentes</a>                                    
                                </div>                                
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('mi-primer-año-en-la-facultad.mi-primer-anio')}}">Mi primer año en la Facultad</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{ route('estudiantes.becas-y-ayudas-economicas') }}">Becas y ayudas económicas</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <br><br>
                </div>
            </section>
        </div>
    </section>
@endsection