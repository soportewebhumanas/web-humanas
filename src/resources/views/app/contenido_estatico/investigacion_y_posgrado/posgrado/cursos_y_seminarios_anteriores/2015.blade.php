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
                                <span class="b-active">2015</span>
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
        <!-- 2015 -->
        <div class="col-12 font-weight-bold py-2 bg-light border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">Año 2015</div>
        <!--<div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            History and Memory: Narratives on cultural traumas [Historia y Memoria: Las narrativas de los traumas culturales]<br>
            Dra. Laura P. Z. de Izarra (USP, Brasil) y la Mgter. María Graciela Eliggi (UNLPam)<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Programa</a>
        </div>-->
        <div class="col-12 py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0">
            Producir conocimientos, compartir conocimientos: los investigadores y la Comunicación Pública de la Ciencia<br> 
            Dra. Carina Cortassa (UNER). Colaborador: Lic. Mariano Pineda Abella (UNLPam)<br>
            <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1oK23614I4lS8rSkeRqCTLbVz0aL2Yjf4/view?usp=sharing" target="_blank">Programa</a>
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