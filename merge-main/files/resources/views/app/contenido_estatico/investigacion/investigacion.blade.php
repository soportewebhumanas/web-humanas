@extends('app.slim.layouts.home')

@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12 pt-2">
					<div class="intro-text ">
						<p><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Investigación</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>
<!-- Inicio de Contenido -->
<div class="container">
	<div class="row">
		<div class="col-12 vh-100">
			Visite el sitio: <a href="https://investigacion.humanas.unlpam.edu.ar/" target="_blank">https://investigacion.humanas.unlpam.edu.ar/</a>
		</div>
	</div>
</div>
<!--Fin Contenido-->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
	$('body').addClass('courses');
});
</script>
@endsection
