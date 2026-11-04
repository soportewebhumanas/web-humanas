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
                                <span class="b-active">2017</span>
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
        <!-- 2017 -->        
        <div class="col-12 font-weight-bold py-2 bg-light border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">Año 2017</div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Taller de posgrado “Historia de la Lengua Inglesa”<br>
            Mgr. María Dolores Trebucq<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1csqU-7tiE4miAipZb8BAnNH6YN4fIKh_/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario de posgrado "Investigación en Didáctica de la Geografía”<br>
            Dra. Viviana Zenobi.<br> 
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1XYF1QrU4DcdadoN1Pt3lzw8q5eZgPNnP/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario de posgrado "La economía agraria de Castilla e Inglaterra en perspectiva comparada (siglos XIII-XIV)”<br>
            Dr. Lucio B. Mir<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17-DKQJZgsemC4xrFmfa4DNPO3qF8dw7L/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario “Figuras del archivo en la crítica y la investigación literaria”<br>
            Dra. Graciela Salto<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1a8_gcZ8Ud9n_ajlXs5XIa2WDhl2faLV8/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario “Las alteridades históricas en tiempos del multiculturalismo neoliberal: enfoques teóricos y epistémicos transdisciplinares para el reconocimiento y producción del conocimiento histórico”<br>
            Dr. José María Bompadre<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SRuJOM3WL6ESH9d4ZvNLaJkhYfpEQMtI/view?usp=sharing" target="_blank">Programa</a>
        </div>
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Seminario “Tecnologías de la Información y la Comunicación (TIC) para el Aprendizaje y el Conocimiento (TAC) – Nuevos desafíos educativos en la era digital”<br>
            Esp. Aurelia García<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16d-zQU8cwla-jlfz5P3xrZnyeCw0VMji/view?usp=sharing" target="_blank">Programa</a>
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