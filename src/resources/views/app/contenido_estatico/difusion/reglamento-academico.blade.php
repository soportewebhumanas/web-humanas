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
                                    <span class="b-active">Reglamento Académico</span>
                                </p>
                            </div>
                            <div class="col-12 text-justify">
                                <h3>Reglamento Académico</h3>
                                <br>
                                Después de 10 años, la Facultad de Ciencias Humanas tiene un nuevo Reglamento Académico con importantes modificaciones.<br>
                                Consejeros y consejeras del Consejo Directivo, destacan algunos puntos clave.<br>
                                <br>
                            </div>
                            <div class="d-flex justify-content-center" >
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/6C5iWjPr9b0?si=BKxV9biXqglGqvq-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                                
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <br><br>
                </div>
            </section>
        </div>
    </section>
@endsection