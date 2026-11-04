@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="py-2">
							<span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> 
							<span><a href="{{route('servicios.inicio')}}">Servicios <i class='fa fa-angle-right'></i></a></span>
							<span class="b-active">Servicio de Traducción de la Facultad de Ciencias Humanas</span>
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
			<h3>Servicio de Traducción de la Facultad de Ciencias Humanas (SERTRA)</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Servicio de Traducción de la Facultad de Ciencias Humanas</a>
		</div>
		<div class="col-12 d-xl-none">
			<hr>
		</div>
		<div class="tab-content col-12 col-xl-8 col-lg-8 mb-5" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<p class="text-justify text-dark vh-100">
					<b style="color: #26406C;">Servicio de Traducción de la Facultad de Ciencias Humanas (SERTRA)</b><br><br>
						Sus objetivos son: Ofrecer a las distintas cátedras, institutos de investigación e investigadores de la Facultad de Ciencias Humanas, un Servicio de Traducción, en los idiomas inglés y francés, del material bibliográfico, científico y técnico,
						de interés para el desarrollo de la actividad académica y de investigación; ofrecer a los docentes e investigadores de otras unidades académicas de la Universidad Nacional de La
						Pampa, la posibilidad de acceder al Servicio de Traducción de la Facultad de Ciencias Humanas; ofrecer a instituciones oficiales y a empresas, asociaciones o personas de
						carácter privado, el Servicio de Traducción de la Facultad de Ciencias Humanas.<br>                    
						<br>
						<b>Contacto: </b><a href="mailto:sertra@humanas.unlpam.edu.ar">sertra@humanas.unlpam.edu.ar</a>
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