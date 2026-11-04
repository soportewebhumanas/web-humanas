@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="py-2">
							<span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> 
							<span><a href="{{route('servicios.inicio')}}">Servicios <i class='fa fa-angle-right'></i></a></span>
							<span class="b-active">Servicio para la Escritura y la Lectura en la Universidad</span>
						</p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>

<!--Inicio Contenido-->
<style>
	.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff !important;
    background-color: #26406C !important;
}

.nav a {
    color: #26406C;
    text-decoration: none;
    background-color: transparent;
}
</style>
<div class="container mb-4 my-2">
	<div class="row text-left mx-1 mb-2">
		<div class="col-12 py-2">
			<h3>Servicio para la Escritura y la Lectura en la Universidad (SERLECES)</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Servicio para la Escritura y la Lectura en la Universidad</a>
		</div>
		<div class="col-12 d-xl-none">
			<hr>
		</div>
		<div class="tab-content col-12 col-xl-8 col-lg-8 mb-5" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<p class="text-justify text-dark vh-100">
					<b style="color: #26406C;">Servicio para la Escritura y la Lectura en la Universidad (SERLECES)</b><br><br>
					<!--<i class="fas fa-file-pdf text-danger"></i> <a href="#">Resolución Nº 086-08 - Servicio para la Escritura y la Lectura en la Universidad</a><br>-->
					<!--El Serleces fue creado por Resolución N° 475-CD-03, y por el mismo acto se aprobó su reglamento de funcionamiento.<br>-->
					Sus objetivos generales son: Promover el mejoramiento de las prácticas de lectura y de escritura en el nivel universitario; contribuir a la formación docente
					continua en el área de la producción de lectura de textos académicos; ofrecer un servicio de extensión universitaria.<br><br>
					<b>Contacto: </b><a href="mailto:serleces@humanas.unlpam.edu.ar">serleces@humanas.unlpam.edu.ar</a>
				</p>
			</div>
		</div>			
	</div><!--row-->
</div><!-- container -->
<!--Fin Contenido-->

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