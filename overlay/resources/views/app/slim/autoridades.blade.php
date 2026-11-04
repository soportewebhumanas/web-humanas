@extends('app.slim.layouts.home')
@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-2"><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Autoridades</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>
<!-- Teachers Area section -->
<section class="teachers-area pt-0">
	<div class="container">
	<h3>Autoridades</h3>
	<div class="row">
	<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
		<div class="card h-100">
		<img class="card-img-top" src="../slim/images/teachars/teachar-01.jpg" alt="Beatriz Elena Cossio">
		<div class="card-body">
			<h5 class="card-title text-center">Beatriz Elena Cossio</h5>
			<p class="card-text text-center" style="font-size: 0.9rem;">DECANA</p>
		</div>
		</div>
	</div>

	<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
		<div class="card h-100">
		<img class="card-img-top" src="../slim/images/teachars/teachar-01.jpg" alt="Verónica Zucchini">
		<div class="card-body">
			<h5 class="card-title text-center">Verónica Zucchini</h5>
			<p class="card-text text-center" style="font-size: 0.9rem;">VICEDECANA</p>
		</div>
		</div>
	</div>
	
	<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
		<div class="card h-100">
		<img class="card-img-top" src="../slim/images/teachars/eric-morales.jpg" alt="Eric Morales Schmuker">
		<div class="card-body">
			<h5 class="card-title text-center">Eric Morales Schmuker</h5>
			<p class="card-text text-center" style="font-size: 0.9rem;">PROSECRETARIO PRIVADO DEL DECANO</p>
		</div>
		</div>
	</div>
	
	<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
		<div class="card h-100">
		<img class="card-img-top" src="../slim/images/teachars/teachar-01.jpg" alt="Laura Sánchez">
		<div class="card-body">
			<h5 class="card-title text-center">Laura Sánchez</h5>
			<p class="card-text text-center" style="font-size: 0.9rem;">SECRETARIA <br>ACADÉMICA</p>
		</div>
		</div>
	</div>

	<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
		<div class="card h-100">
		<img class="card-img-top" src="../slim/images/teachars/teachar-01.jpg" alt="María Pía Bruno">
		<div class="card-body">
			<h5 class="card-title text-center">María Pía Bruno</h5>
			<p class="card-text text-center" style="font-size: 0.9rem;">SECRETARIA INVESTIGACIÓN Y POSGRADO</p>
		</div>
		</div>
	</div>
	
	<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
		<div class="card h-100">
		<img class="card-img-top" src="../slim/images/teachars/teachar-01.jpg" alt="Martín Alejandro Ussei">
		<div class="card-body">
			<h5 class="card-title text-center">Martín Alejandro Ussei</h5>
			<p class="card-text text-center" style="font-size: 0.9rem;">SECRETARIA ECONÓMICA ADMINISTRATIVA</p>
		</div>
		</div>
	</div>
	
	<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
		<div class="card h-100">
		<img class="card-img-top" src="../slim/images/teachars/teachar-01.jpg" alt="">
		<div class="card-body">
			<h5 class="card-title text-center">Maria Marta Dukart</h5>
			<p class="card-text text-center" style="font-size: 0.9rem;">CONSEJO DIRECTIVO</p>
		</div>
		</div>
	</div>

	<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
		<div class="card h-100">
		<img class="card-img-top" src="../slim/images/teachars/teachar-01.jpg" alt="Stella Maris Leduc">
		<div class="card-body">
			<h5 class="card-title text-center">Stella Maris Leduc</h5>
			<p class="card-text text-center" style="font-size: 0.9rem;">RECTORA COLEGIO DE LA UNLPAM</p>
		</div>
		</div>
	</div>
	
	<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
		<div class="card h-100">
		<img class="card-img-top" src="../slim/images/teachars/teachar-01.jpg" alt="Cristian Glusko">
		<div class="card-body">
			<h5 class="card-title text-center text-center">Cristian Glusko</h5>
			<p class="card-text text-center" style="font-size: 0.9rem;">VICERRECTOR COLEGIO DE LA UNLPAM</p>
		</div>
		</div>
	</div>	

	</div>	
    </div>
</section>
<!-- ./ End Teachers Area section -->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
    $('body').addClass('teachers-01');
});
</script>
@endsection
