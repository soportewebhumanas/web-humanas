@extends('app.slim.layouts.home')
@section('content')
<style>
    .link {
        color: #1b365d;
        text-decoration: none !important;        
    }
    .link a{
        color: #1b365d;
    }    
</style>
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <p>
                                <span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                <span><a href="{{ route('carousel.declaraciones.home') }}">Declaraciones <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">
                                    Declaración 1
                                </span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row row-cols-1">
                    <!--Inicio Contenido-->
                    <div class="container mb-4 my-2">
                        <h3>
                            Declaración 1
                        </h3>

                    </div>
                    <!--Fin Contenido-->
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection


<script src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('body').addClass('become_teachers');
        moment.locale('es');
        $('.fecha').each(function() {
            var fecha = $(this).text();
            var fecha_formateada = moment(fecha).fromNow()
            $(this).text(fecha_formateada);
        });
        
    });
</script>