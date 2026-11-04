@extends('app.slim.layouts.home')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="intro-text ">
				<h1>Departamentos</h1>
				<p><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Departamentos</span></p>
			</div>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->
</div>
</header>
<section class="become-teachers-01">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center become-title">
				<h2>Educación inicial</h2>
				<p>Sede General Pico</p>
				<span class="line"></span>
            </div>
			<div class=" offset-sm-2 col-sm-8 col-sm-offset-2 text-center">
				<p>El <b>Profesorado en Educación Inicial</b> forma profesionales con habilidades y conocimientos para ejercer la docencia en el nivel de la Educación Inicial e integrar equipos interdisciplinarios dedicados al diseño y la evaluación de proyectos de investigación y gestión relativos a problemáticas del ámbito escolar y social. </p>
            </div>
            <div class="col-sm-12">
				<img src="../slim/images/teachars/become-teacher.jpg" alt="" class="img-responsive">
			</div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-form text-center">
                    <h3>Programas de las carreras</h3>
                    <p><a href="#">Profesorado en Educación Inicial</a></p>
                </div>
            </div>
        </div>		
	</div>
</section>
@endsection

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
	$('body').addClass('become_teachers');
});
</script>