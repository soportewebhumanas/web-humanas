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
                                <span class="b-active">2016</span>
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
        <!-- 2016 -->                                        
        <div class="col-12 font-weight-bold py-2 bg-light border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">Año 2016</div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            “Literatura Infantil y Juvenil”<br>
            Mgter. María Gabriela Jure<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1q8LhXoDPxFLShKuN9gys49E4MxUL-DKH/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            “Formas del Relato en la Literatura Rusa Moderna”<br>
            Dr. Omar Lobos<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JtWpafGotVtvubw53BHE-PLJ9UY3kyM-/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            “Re-Significaciones de las TIC en Educación Formadora de Formadores: Diseño, Desarrollo, Reflexión y Evaluación de Proyectos TIC desde Web2.0”<br>
            Mg María Cristina Nosei (UNLPam), la Mg María Graciela Di Franco (UNLPam) y la Prof. Aurelia García (UNLPam)<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1y7Aa7gJ7xqGs86FXcJPdGKfold21W5Jh/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            “Doing Cultural Studies: Representations of Argentina in recent English and American literature” (Estudios Culturales en práctica: Representaciones de la Argentina en la literatura anglo-estadounidense reciente)<br>
            Prof. Enrique Alejandro Basabe (UNLPam)<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Rz1PSRp-fQLQHAmUyJCUXpV6TynueDr-/view?usp=sharing" target="_blank">Programa</a>
        </div>
       
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