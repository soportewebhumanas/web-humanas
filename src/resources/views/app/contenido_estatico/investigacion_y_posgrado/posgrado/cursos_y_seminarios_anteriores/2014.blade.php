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
                                <span class="b-active">Cursos y seminarios 2014</span>
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
        <!-- 2014 -->
        <div class="col-12 font-weight-bold py-2 bg-light border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">Año 2014</div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Lectura y escritura: aspectos psicolingüísticos y neurológicos<br>
            Dr. Adolfo M. García<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1INq1wex2ih2DkQ8pKSDBS8j_JxtqkhA5/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Docentes que subjetivan<br> 
            Dra. Inés Rosbaco.<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/18L8Wp6odkfQBcy1kphIHr9aKorEGTgdg/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Alfabetización Inicial<br>
            Dra. Bibiana Amado<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1M2Z88LwrLXif4UHfWj2sowfWc44n8HR0/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Fundamentos de tipología lingüística<br>
            Dra. María Alejandra Regúnaga<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1eLFFzv7AQWpiJ21DCfZhsmV9h9HGbkSO/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Tipología de la voz verbal<br>
            Dr. Fernando Zúñiga<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16CrpfOao0d2BVrr66ffAQGMHrhIROwyL/view?usp=sharing" target="_blank">Programa</a>
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