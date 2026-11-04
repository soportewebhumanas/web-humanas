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
                                <span><a href="{{route('comunidad-graduada.cursos-y-seminarios')}}">Cursos y Seminarios <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Cursos y seminarios 2013</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
<!--Inicio Contenido-->
<div class="container">
<div class="row row-cols-1">
<div class="container mb-4 my-2">
	<div class="row text-left border border-dark border-bottom-1">
        <!-- 2013 -->
        <div class="col-12 font-weight-bold py-2 bg-light border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">Año 2013</div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Historia del arte europeo y latinoamericano: temas y problemas <br>
            Prof. Marta Penhos<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14dNwcWwHyjp8lQlvA0jMokuf8JJ7wm7t/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            "Bloomsbury, café de flore y sur"<br> 
            Prof. José Amícola<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SE2D9oIGohezTb1XZgDLcpuv7-S7QsOs/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Sistemas de información geográfica (sig) aplicados a la enseñanza de la geografía en la escuela secundaria<br>
            Profs. Graciela Di Franco, Celeste Martínez Uncal y Daila Pombo  <br>          
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tNPRPtErJIADxnUtqb7blN-6LlvyQLhL/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Difusión areal vs herencia genética<br> 
            Prof. Ana Fernández Garay<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12wgF7G2kIjvTd_OQjreneNvwCuwopkzV/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-0 border-left-0">
            Límites y Posibilidades del Comparatismo en América Latina<br> 
            Prof. Graciela Salto<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18i5bDF7iiYLrTvcBJC7G9eDnuF1rKky6/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <!--<div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-0 border-left-0">
            Mitología Griega: La  potencialidad  de la narrativa  mítica como estrategia de enseñanza<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="#">Programa</a>
        </div>-->        
	</div>

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