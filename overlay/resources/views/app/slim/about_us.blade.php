@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Sobre Nosotros</h1>
						<p><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Sobre Nosotros</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>
<section class="become-teachers-01">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center become-title">
				<h2>Facultad de Ciencias Humanas - UNLPam</h2>
				<p>Algun eslogan corto de 10 palabras</p>
				<span class="line"></span>
			</div>
			<div class="col-sm-8 col-sm-offset-2 text-center become-title-text">
				<p>La Facultad de Ciencias Humanas se organizó a fines de 1970, doce años despúes de la fundación de la Universidad de La Pampa. El 2 de octubre de ese año, la aspiración del Instituto Provincial del Profesorado de convertirse en Facultad se alcanzó mediante el Decreto Provincial 1.589. La novel Unidad Académica, con sede inicial en la ciudad de Santa Rosa, otorgaba los títulos de Profesor de Historia y Geografía, Literatura y Castellano, e Idioma Inglés. En 1972 se creó el Departamento de Filosofía y Pedagogía en General Pico, consolidando así la presencia de la Facultad en esa ciudad.</p>
				<p>Desde su organización, la Facultad de Ciencias Humanas se caracterizó por el desarrollo de las tres funciones sustantivas de la Universidad Pública: la docencia, la investigación y la extensión. De ello da cuenta la efímera experiencia del Instituto de Estudios Regionales (IER), entidad creada en 1974, en el marco del proceso de nacionalización de la Universidad, y disuelto un año después, tras la intervención de esta Casa de Estudios. </p> 
				<p>La última dictadura-cívico militar conllevó la clausura del proyecto político-universitario de inicios de la década: se cancelaron proyectos de investigación, se destruyeron bibliotecas y documentación, y se agudizaron las redadas represivas a docentes, estudiantes, investigadoras e investigadores iniciadas en 1975.</p>
				<p>Después de la normalización institucional de los años ochenta, la Facultad de Ciencias Humanas atravesó un proceso de crecimiento que se tradujo en el fortalecimiento de su planta docente, la ampliación de su oferta académica, el incremento de su matrícula, el desarrollo de los campos de investigación y extensión mediante la creación de institutos, la edición de revistas científicas y la organización de proyectos coparticipativos con diversos actores sociales, con la convicción creciente de que es su deber el garantizar el derecho a la educación universitaria. </p>
				<p>Con medio siglo de historia, la Facultad de Ciencias Humanas trabaja junto a la comunidad en la construcción colectiva de una Universidad pública, gratuita, laica, inclusiva y diversa. Desarrolla de manera articulada las tres funciones sustantivas de la Educación Superior en sus tres sedes: Santa Rosa, General Pico y General Acha. Cuenta con nueve departamentos: Historia, Geografía, Letras, Lenguas Extranjeras, Educación Inicial, Educación Primaria, Ciencias de la Educación y Comunicación Social. Posee una oferta académica amplia, que incluye quince carreras de grado, tres especializaciones y dos maestrías. Además, en su ámbito funcionan el Colegio de la Universidad Nacional de La Pampa, 9 institutos de investigación y 8 revistas científicas. </p>
			</div>
		</div>		
		<div class="row">
			<div class="col-sm-12">
				<img src="src/images/teachars/become-teacher.jpg" alt="" class="img-responsive">
			</div>												
		</div>
		<div class="row">
			<div class="col-sm-12 text-center become-title become-teacher-title">
				<h2>Hablando un poco más</h2>
				<p>Algun eslogan corto de 10 palabras</p>
				<span class="line"></span>
			</div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5">
						<div class="contact-form text-center">
							<h3>Contáctanos</h3>
							<p>Tienes que completar los siguientes campos</p>
 							<form>
	                            <div class="row">
	                                <div class="col-sm-12">
	                                    <div class="form-group">
	                                        <input type="text" class="form-control" disabled="disabled" placeholder="Nombre">
	                                    </div>
	                                </div>
	                                <div class="col-sm-12">
	                                    <div class="form-group">
	                                        <input type="email" class="form-control" disabled="disabled" placeholder="Email">
	                                    </div>
	                                </div>
	                                <div class="col-sm-12">
	                                    <div class="form-group">
	                                        <input type="text" class="form-control"  disabled="disabled" placeholder="Numero de telefono">
	                                    </div>
	                                </div>		
	                                <div class="col-sm-12">                                    
	                                    <div class="full-width submit-btn">
	                                        <input value="Enviar" disabled="disabled" type="submit">
	                                    </div>
	                                </div>	
	                            </div>
	                        </form>							
						</div>
					</div>
					<div class="col-sm-7">
						<div class="tab-wapper">
							<ul class="nav nav-tabs">
                                <!-- Esto va por el texto que envio Eric. -->
							  	<li  class="active"><a href="#become_a_teacher"  data-toggle="tab"><i class="fa fa-user-plus"></i>Docencia</a></li>
							  	<li ><a href="#roles" data-toggle="tab"><i class="fa fa-list-ol"></i>investigación</a></li>
							  	<li ><a href="#courses"  data-toggle="tab"><i class="fa fa-book"></i>Extensión</a></li>
							</ul>

							<div class="tab-content">
							  	<div class="tab-pane fade in active" id="become_a_teacher">
							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream.  Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>

							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream. Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>
							  	</div>
							  	<div class="tab-pane fade" id="roles">
							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream.  Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>

							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream. Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>
							  	</div>
							  	<div class="tab-pane fade" id="courses">
							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream.  Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>

							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream. Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>
							  	</div>
							</div>
  						</div>
					</div>
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