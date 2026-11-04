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
	</div> <!-- header-top -->
</header>
<!--Inicio Contenido-->
<div class="container mb-4">
    <h3>Ciencias de la Educación</h3>
    <div class="container">
        <div class="row">
            <div class="col-12 py-2 px-2 bg-light"><h5>Carreras</h5></div>
            <div class="col-12 col-lg-4 py-2">
				<a href="#">Profesorado en Ciencias de la Educación</a>
			</div>
            <div class="col-12 col-lg-4 py-2">
				<a href="#">Licenciatura en Ciencias de la Educación</a>
			</div>
            <div class="col-12 col-lg-4 py-2">
				<a href="#">Licenciatura en Ciencias de la Educación - Modalidad Distancia</a></div>
            <div class="col-12 py-2 bg-light"><h5>Contacto</h5></div>
            <div class="col-12 py-2">
                Calle 9 esq. 110, General Pico<br>
                Tel: 02302-421041<br>
                <a href="mailto:deptocseduc@humanas.unlpam.edu.ar">deptocseduc@humanas.unlpam.edu.ar</a><br>
            </div>
            <div class="col-12 py-2 bg-light"><h5>Integrantes</h5></div>
            <div class="col-12 py-2">
                <h5>DIRECTORA: </h5>FARÍAS, Patricia<br><br>
                
                <h5>PROFESORES:</h5>
                <span class="font-weight-bold">Titular: </span><br>FERNÁNDEZ, Natalia Celina<br>
                <span class="font-weight-bold">Suplente: </span><br>-<br><br>
                
                <h5>AUXILIARES:</h5>
                <span class="font-weight-bold">Titular: </span><br>RASILLA TOMASELLI, Sofía<br>
                <span class="font-weight-bold">Suplente: </span><br>
                HERITIER, Elena<br><br>
                
                <h5>GRADUADOS:</h5>
                <span class="font-weight-bold">Titular: </span><br> ARAGONEZ, Víctor Miguel<br>
                <span class="font-weight-bold">Suplente: </span><br> RUBIO, María Belén<br><br>
                
                <h5>ESTUDIANTES:</h5>
                <span class="font-weight-bold">Titular: </span><br> MONTALVANO, Jésica<br>
                <span class="font-weight-bold">Suplente: </span><br> GALDAME, Fernando<br><br>
            </div>            
        </div>
    </div>
</div>
<!--Fin Contenido-->
<!--<section class="become-teachers-01">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center become-title">
				<h2>Ciencias de la educación</h2>
				<p>Sede General Pico</p>
				<span class="line"></span>
            </div>
			<div class="offset-sm-2 col-sm-8 col-sm-offset-2 text-center">
				<p>El <b>Profesorado en Ciencias de la Educación</b> forma profesionales con habilidades y conocimientos para desempeñarse en organismos e instituciones que realizan actividades vinculadas con la educación formal, la alfabetización, la anmación sociocultural y la formación profesional y de adultos.</p>
                <p>La <b>Licenciatura en Ciencias de la Educación</b> forma profesionales con habilidades y conocimientos para elaborar y evaluar modelos y propuestas curriculares, brindar asesoramiento pedagógico a instituciones educativas de distintos niveles, diseñar proyectos de investigación, coordinar instituciones y asesorar en la formulación de políticas educativas. </p>
            </div>
            <div class="col-sm-12">
				<img src="../slim/images/teachars/become-teacher.jpg" alt="" class="img-responsive">
			</div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-form text-center">
                    <h3>Programas de las carreras</h3>
                    <p><a href="#">Profesorado en Ciencias de la Educación</a></p>
                    <p><a href="#">Licenciatura en Ciencias de la Educación</a></p>				
                </div>
            </div>
        </div>		
	</div>
</section>-->
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
