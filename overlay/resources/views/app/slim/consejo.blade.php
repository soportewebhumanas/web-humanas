@extends('app.slim.layouts.home')

@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-2"><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Consejo Directivo</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>

<div class="container pt-2">
	<div class="row">
		<div class="col-12">
		<h3>Consejo Directivo</h3>			
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="composicion-tab" data-toggle="tab" href="#composicion" role="tab" aria-controls="composicion" aria-selected="true">Composición Actual</a>
		</li>
		<!--<li class="nav-item">
			<a class="nav-link" id="actas-tab" data-toggle="tab" href="#actas" role="tab" aria-controls="actas" aria-selected="false">Actas</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="boletines-tab" data-toggle="tab" href="#boletines" role="tab" aria-controls="boletines" aria-selected="false">Boletines</a>
		</li>-->
		<li class="nav-item">
			<a class="nav-link" id="audios-tab" data-toggle="tab" href="#audios" role="tab" aria-controls="audios" aria-selected="false">Audios</a>
		</li>		
		</ul>
		<div class="tab-content" id="myTabContent">
		<!-- Composición Actual -->		
		<div class="tab-pane fade show active px-2 pt-2" id="composicion" role="tabpanel" aria-labelledby="composicion-tab">
			<div class="container pb-4">
				<div class="row">
					<div class="col-12 text-justify py-2">
						<p>El Consejo Directivo es el Órgano de gobierno de la Facultad. El mismo está integrado por el Decano/a, y ocho representantes del Claustro de Docentes (seis representantes del Subclaustro de Profesores y dos representantes del Subclaustro de Docentes Auxiliares), tres representantes del Claustro de Graduados, cuatro representantes del Claustro Estudiantil y un representante del Personal no docente.</p>
					</div>
					<div class="col-12 text-justify py-2 text-center">
						<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Reglamento del Consejo Directivo - Ordenanza Nº 67-CD-2014</a><br>
					</div>					
					<div class="col-12 text-center bg-light text-dark font-weight-bold py-2">Claustro de Docentes - Subclaustro Profesores</div>
					<div class="col-12 text-center">
						<span class="font-weight-bold">Titulares</span><br>    
						DI LISCIA, María Silvia<br>
						HUVELLE, Ana María<br>
						DI FRANCO, María Graciela<br>
						MARTÍN, María Ema<br>
						MORETTA, María Rosana<br>
						FORTE, Nora Beatriz<br><br>

						<span class="font-weight-bold">Suplentes</span><br>
						FERNÁNDEZ, José María<br>
						GARBARINO, Adriana Carina<br>
						PEDELABORDE, Paula Mabel<br>
						MONTAÑA, Alejandra Erica<br>
						COMERCI, María Eugenia<br>
						ROSSI, Graciela Lis<br>
					</div>
					
					<div class="col-12 text-center bg-light text-dark font-weight-bold py-2">Claustro de Docentes - Subclaustro Auxiliares</div>
					<div class="col-12 text-center">
					<span class="font-weight-bold">Titulares</span><br>
						DOMÍNGUEZ, María Carolina<br>
						FARÍAS, Patricia Leonor<br><br>

						<span class="font-weight-bold">Suplentes</span><br>
						DELGADO, María Verónica<br>
						MORALES, Mónica Adriana<br>						
					</div>

					<div class="col-12 text-center bg-light text-dark font-weight-bold py-2">Claustro de Graduados</div>
					<div class="col-12 text-center">
						<span class="font-weight-bold">Titulares</span><br>
						BESSOLO, Adela Mabel<br>
						ROVEDA, Soraya Raquel<br>
						MORO, Erica Elizabeth<br><br>

						<span class="font-weight-bold">Suplentes</span><br>
						NAIMAN GIL, Yesica Anabel<br>
						GARCÍA, Marcelo Omar<br>
						CHEME ARRIAGA, Romina<br>						
					</div>

					<div class="col-12 text-center bg-light text-dark font-weight-bold py-2">Claustro de Estudiantes</div>
					<div class="col-12 text-center">
						<span class="font-weight-bold">Titulares</span><br>
						LLANOS, Franco Nahuel<br>
						GONZÁLEZ, Candelaria<br>
						MORENO AGUERRE, Ana<br><br>

						<span class="font-weight-bold">Suplentes</span><br>
						VERA, María Florencia<br>
						GOMEZ, Nancy Carolina<br>
						ALONSO FERRER, Paulina<br>					
					</div>

					<div class="col-12 text-center bg-light text-dark font-weight-bold py-2">Personal No Docente</div>
					<div class="col-12 text-center">
						<span class="font-weight-bold">Titulares</span><br>
						ALFAGEME, Mariano René<br><br>

						<span class="font-weight-bold">Suplentes</span><br>
						GARCÍA, Adriana Elizabeth
					</div>
					
					<div class="col-12 text-center py-2 text-center">
						<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Acta de la Junta Electoral UNLPam</a><br>
					</div>
				</div>
			</div>
		</div>
		<!-- Composición Actual -->

		<!-- Actas -->
		<div class="tab-pane fade px-2 pt-2" id="actas" role="tabpanel" aria-labelledby="actas-tab">
			<!-- 2021-->			
			<div id="accordion">
				<p class="text-justify">
				<span class="font-weight-bold text-dark">Año 2021</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2020</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">X Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XVI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XVII Sesión Ordinaria</a><br><br>
				<br><span class="font-weight-bold text-dark">Año 2019</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">X Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XII Sesión Ordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2018</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">X Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XVI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XVII Sesión Ordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2017</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">X Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XII Sesión Ordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2016</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">X Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIII Sesión Ordinaria</a><br><br>
							
							<span class="font-weight-bold">Sesiones Extraordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Extraordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2015</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">X Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XI Sesión Ordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2014</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br><br>
							
							<span class="font-weight-bold">Sesiones Extraordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Extraordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2013</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">X Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XVI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XVII Sesión Ordinaria</a><br><br>
							
							<span class="font-weight-bold">Sesiones Extraordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Extraordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2012</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">X Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIII Sesión Ordinaria</a><br><br>
							
							<span class="font-weight-bold">Sesiones Extraordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Extraordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2011</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">X Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XVI Sesión Ordinaria</a><br><br>
							
							<span class="font-weight-bold">Sesiones Extraordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Extraordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2010</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">X Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XVI Sesión Ordinaria</a><br><br>
							
							<span class="font-weight-bold">Sesiones Extraordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Extraordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2009</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">V Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IX Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">X Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XVI Sesión Ordinaria</a><br><br>
							
							<span class="font-weight-bold">Sesiones Extraordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">I Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Extraordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">IV Sesión Extraordinaria</a><br>
				<br><span class="font-weight-bold text-dark">Año 2008</span><br>
				<span class="font-weight-bold">Sesiones Ordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">II Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">VIII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XII Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XIV Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XVI Sesión Ordinaria</a><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">XVII Sesión Ordinaria</a><br><br>
							
							<span class="font-weight-bold">Sesiones Extraordinarias</span><br>
							<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">III Sesión Extraordinaria</a><br>
				</p>
			</div>
		</div>
		<!-- Actas -->

		<!-- Boletines -->
		<div class="tab-pane fade px-2 pt-2" id="boletines" role="tabpanel" aria-labelledby="boletines-tab">
			<p class="text-justify pb-2">
				<span class="text-dark font-weight-bold">Año 2018</span><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 43 - 09 de Agosto de 2018</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 42 - 04 de Junio de 2018</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 41 - 07 de Marzo de 2018</a><br><br>

				<span class="text-dark font-weight-bold">Año 2017</span><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 40 - 06 de Noviembre de 2017</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 39 - 11 de Agosto de 2017</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 38 - 15 de Mayo de 2017</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 37 - 24 de Febrero de 2017</a><br><br>

				<span class="text-dark font-weight-bold">Año 2016</span><br>				
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 35 - 21 de Octubre de 2016</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 34 - 15 de Septiembre de 2016</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 33 - 06 de Julio de 2016</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 32 - 07 de Junio de 2016</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 31 - 12 de Mayo de 2016</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 30 - 02 de Abril de 2016</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 29 - 23 de Marzo de 2016</a><br><br>

				<span class="text-dark font-weight-bold">Año 2015</span><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 28 - 23 de Diciembre de 2015</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 27 - 10 de Noviembre de 2015</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 26 - 30 de Septiembre de 2015</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 25 - 02 de Septiembre de 2015</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 24 - 19 de Agosto de 2015</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 23 - 05 de Junio de 2015</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 22 - 13 de Marzo de 2015</a><br><br>

				<span class="text-dark font-weight-bold">Año 2014</span><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 21 - 17 de Diciembre de 2014</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 20 - 19 de Noviembre de 2014</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 19 - 17 de Octubre de 2014</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 18 - 10 de Septiembre de 2014</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 17 - 02 de Septiembre de 2014</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 16 - 14 de Agosto de 2014</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 12 - 26 de Mayo de 2014</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 11 - 16 de Mayo de 2014</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 10 - 12 de Mayo de 2014</a><br><br>
				
				<span class="text-dark font-weight-bold">Año 2013</span><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 09 - 7 de Octubre de 2013</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 08 - 26 de Agosto de 2013</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 07 - 26 de Agosto de 2013</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 06 - 15 de Agosto de 2013</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 04 - 07 de Junio de 2013</a><br>
				<i class="fas fa-file-pdf text-danger"></i> <a href="" target="_blank">Boletín Informativo Nº 03 - 21 de Mayo de 2013</a><br>
			</p>
		</div>
		<!-- Boletines -->

		<!-- Audios -->
		<div class="tab-pane fade px-2 pt-2" id="audios" role="tabpanel" aria-labelledby="audios-tab">
			<div id="accordion">
				<!-- 2022 -->
				<!-- Marzo -->
				<p class="text-dark font-weight-bold">Año 2022</p>
				<div class="card">
					<div class="card-header"  style="background-color:#26406C" id="Marzo2022">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseMarzo2022" aria-expanded="true" aria-controls="collapseMarzo2022">
								Marzo
							</button>
						</h5>
					</div>

					<div id="collapseMarzo2022" class="collapse" aria-labelledby="headingMarzo2022" data-parent="#accordion">
						<div class="card-body">
								<span class="text-dark font-weight-bold">II Sesión Ordinaria</span><br>
								<iframe src="https://drive.google.com/file/d/1GT68i8YBCnuXAv0r0MZLaJzFdLbwdG9a/preview" width="400" height="100" allow="autoplay"></iframe>
						</div>
					</div>
				</div>
				<!-- Marzo -->

				<!-- Febrero -->
				<div class="card">
					<div class="card-header   " style="background-color:#26406C" id="Febrero2022">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseFebrero2022" aria-expanded="true" aria-controls="collapseFebrero2022">
								Febrero
							</button>
						</h5>
					</div>

					<div id="collapseFebrero2022" class="collapse" aria-labelledby="Febrero2022" data-parent="#accordion">
						<div class="card-body">
							<span class="text-dark font-weight-bold">I Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1lYW9sVzMVGEogAmUaXDW_U8iZ_eMqYK7/preview" width="400" height="100" allow="autoplay"></iframe>
						</div>
					</div>
				</div>
				<!-- Febrero -->
				<!-- 2022 -->

				<!-- 2021 -->
				<p class="text-dark font-weight-bold">Año 2021</p>
				<!-- Marzo -->
				<div class="card">
					<div class="card-header   " style="background-color:#26406C" id="Marzo2021">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseMarzo2021" aria-expanded="true" aria-controls="collapseMarzo2021">
								Marzo
							</button>
						</h5>
					</div>

					<div id="collapseMarzo2021" class="collapse" aria-labelledby="headingMarzo2021" data-parent="#accordion">
						<div class="card-body">
							<span class="text-dark font-weight-bold">I Sesión Ordinaria - Parte I</span><br>
							<iframe src="https://drive.google.com/file/d/1-X0548OXkFmk6qqeu-11pQ5eGGD7wKEH/preview" width="400" height="100" allow="autoplay"></iframe><br><br>
							
							<span class="text-dark font-weight-bold">I Sesión Ordinaria - Parte II</span><br>
							<iframe src="https://drive.google.com/file/d/1nqUQq-KGKYiIMXtBEodH3zRX5L2Qncyg/preview" width="400" height="100" allow="autoplay"></iframe><br><br>
							
							<span class="text-dark font-weight-bold">II Sesión Ordinaria - Parte I</span><br>
							<iframe src="https://drive.google.com/file/d/1-5SlLOMzRVb5BV5jpHXQNpmqnab96L0_/preview" width="400" height="100" allow="autoplay"></iframe><br>
						</div>
					</div>
				</div>
				<!-- Marzo -->
				<!-- Abril -->
				<div class="card">
					<div class="card-header   " style="background-color:#26406C" id="Abril2021">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseAbril2021" aria-expanded="true" aria-controls="collapseAbril2021">
								Abril
							</button>
						</h5>
					</div>

					<div id="collapseAbril2021" class="collapse" aria-labelledby="headingAbril2021" data-parent="#accordion">
						<div class="card-body">
							<span class="text-dark font-weight-bold">III Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/162Cy80euJBujrWFf3k42AKMjkVFO33qB/preview" width="400" height="100" allow="autoplay"></iframe><br><br>

							<span class="text-dark font-weight-bold">IV Sesión Ordinaria - Parte I</span><br>
							<iframe src="https://drive.google.com/file/d/1EFy-aCAw1egiR78pGiy9szDkhP0zvRla/preview" width="400" height="100" allow="autoplay"></iframe><br><br>

							<span class="text-dark font-weight-bold">IV Sesión Ordinaria - Parte II</span><br>
							<iframe src="https://drive.google.com/file/d/1uaJCsW7RtA0hU7SA1vKk_R5IIwDGJ8po/preview" width="400" height="100" allow="autoplay"></iframe><br>
						</div>
					</div>
				</div>
				<!-- Abril -->
				
				<!-- Mayo -->
				<div class="card">
					<div class="card-header   " style="background-color:#26406C" id="Mayo2021">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseMayo2021" aria-expanded="true" aria-controls="collapseMayo2021">
								Mayo
							</button>
						</h5>
					</div>

					<div id="collapseMayo2021" class="collapse" aria-labelledby="headingMayo2021" data-parent="#accordion">
						<div class="card-body">
							<span class="text-dark font-weight-bold">V Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1Cuf25mSDUy5ULSKUzP9nk6NJgce7__l1/preview" width="400" height="100" allow="autoplay"></iframe><br><br>

							<span class="text-dark font-weight-bold">VI Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1F4f-lzqDoa234T0iiXTnLr-Z7SY5DdDz/preview" width="400" height="100" allow="autoplay"></iframe><br>
						</div>
					</div>
				</div>
				<!-- Mayo -->
				<!-- Junio -->
				<div class="card">
					<div class="card-header   " style="background-color:#26406C" id="Junio2021">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseJunio2021" aria-expanded="true" aria-controls="collapseJunio2021">
								Junio
							</button>
						</h5>
					</div>

					<div id="collapseJunio2021" class="collapse" aria-labelledby="headingJunio2021" data-parent="#accordion">
						<div class="card-body">
							<span class="text-dark font-weight-bold">VII Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1OPby5ffVW-NOJnN0k1JEaGVEAwxpDd2G/preview" width="400" height="100" allow="autoplay"></iframe><br><br>

							<span class="text-dark font-weight-bold">VIII Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1HtnhOaDFAF8FJA-MPs80fY5oTvv3UYfQ/preview" width="400" height="100" allow="autoplay"></iframe><br><br>
						</div>
					</div>
				</div>
				<!-- Junio -->
				<!-- Julio -->
				<div class="card">
					<div class="card-header   " style="background-color:#26406C" id="Julio2021">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseJulio2021" aria-expanded="true" aria-controls="collapseJulio2021">
								Julio
							</button>
						</h5>
					</div>

					<div id="collapseJulio2021" class="collapse" aria-labelledby="headingJulio2021" data-parent="#accordion">
						<div class="card-body">
							<span class="text-dark font-weight-bold">IX Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1mPgIJaSyxmpxY8MpiJjOGSGiQQVALWA0/preview" width="400" height="100" allow="autoplay"></iframe><br><br>
						</div>
					</div>
				</div>
				<!-- Julio -->
				<!-- Agosto -->
				<div class="card">
					<div class="card-header   " style="background-color:#26406C" id="Agosto2021">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseAgosto2021" aria-expanded="true" aria-controls="collapseAgosto2021">
								Agosto
							</button>
						</h5>
					</div>

					<div id="collapseAgosto2021" class="collapse" aria-labelledby="headingAgosto2021" data-parent="#accordion">
						<div class="card-body">
							<span class="text-dark font-weight-bold">X Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1UDSmRtkeGUdsxbpHQp7purRSoV7E2136/preview" width="400" height="100" allow="autoplay"></iframe><br><br>

							<span class="text-dark font-weight-bold">XI Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1YAEgF-aa5tNZjGidUtoxyTGh2jlkYjm8/preview" width="400" height="100" allow="autoplay"></iframe><br><br>
						</div>
					</div>
				</div>
				<!-- Agosto -->
				<!-- Septiembre -->
				<div class="card">
					<div class="card-header   " style="background-color:#26406C" id="Septiembre2021">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseSeptiembre2021" aria-expanded="true" aria-controls="collapseSeptiembre2021">
								Septiembre
							</button>
						</h5>
					</div>

					<div id="collapseSeptiembre2021" class="collapse" aria-labelledby="headingSeptiembre2021" data-parent="#accordion">
						<div class="card-body">
							<span class="text-dark font-weight-bold">XII Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1xQnUNNVIs8boid9hPaG9pV1X_eAcKksJ/preview" width="400" height="100" allow="autoplay"></iframe><br><br>

							<span class="text-dark font-weight-bold">XIII Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1AMSDc2PB-raORnQwKDHsYlXN_UA4O62P/preview" width="400" height="100" allow="autoplay"></iframe><br><br>
						</div>
					</div>
				</div>
				<!-- Septiembre -->
				<!-- Octubre -->
				<div class="card">
					<div class="card-header   " style="background-color:#26406C" id="Octubre2021">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseOctubre2021" aria-expanded="true" aria-controls="collapseOctubre2021">
							Octubre
							</button>
						</h5>
					</div>

					<div id="collapseOctubre2021" class="collapse" aria-labelledby="headingOctubre2021" data-parent="#accordion">
						<div class="card-body">
							<span class="text-dark font-weight-bold">XIV Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1KuJ2jFn04aC0KebTIe-d9JTV22ZDVkWm/preview" width="400" height="100" allow="autoplay"></iframe><br><br>							
						</div>
					</div>
				</div>
				<!-- Octubre -->
				<!-- Noviembre -->
				<div class="card">
					<div class="card-header   " style="background-color:#26406C" id="Noviembre2021">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseNoviembre2021" aria-expanded="true" aria-controls="collapseNoviembre2021">
							Noviembre
							</button>
						</h5>
					</div>

					<div id="collapseNoviembre2021" class="collapse" aria-labelledby="headingNoviembre2021" data-parent="#accordion">
						<div class="card-body">
							<span class="text-dark font-weight-bold">XV Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1ZTcPpGahCG2YwXFi3u5kkMWIU83Yc0pr/preview" width="400" height="100" allow="autoplay"></iframe><br><br>							
						</div>
					</div>
				</div>
				<!-- Noviembre -->
				<!-- Diciembre -->
				<div class="card">
					<div class="card-header   " style="background-color:#26406C" id="Diciembre2021">
						<h5 class="mb-0">
							<button class="btn  btn-link text-light " data-toggle="collapse" data-target="#collapseDiciembre2021" aria-expanded="true" aria-controls="collapseDiciembre2021">
							Diciembre
							</button>
						</h5>
					</div>

					<div id="collapseDiciembre2021" class="collapse" aria-labelledby="headingDiciembre2021" data-parent="#accordion">
						<div class="card-body">
							<span class="text-dark font-weight-bold">XVI Sesión Ordinaria</span><br>
							<iframe src="https://drive.google.com/file/d/1zz-CXPORpg7y6hKw6xC8eOqjjrlKCZcR/preview" width="400" height="100" allow="autoplay"></iframe><br><br>							
						</div>
					</div>
				</div>
				<!-- Noviembre -->																																			
				<!-- 2021 -->																			
			</div>
		</div>
		<!-- Audios -->

		</div>
		</div>
	</div>
</div>
<!--
<div class="single-courses-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 sidebar-left">
				<div class="single-curses-contert">
					<h2>Claustro de Docentes - Subclaustro Profesores</h2>
					<div class="description-content">
						<h2>Titulares: </h2>
						<div class="requirements">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>DI LISCIA, María Silvia</li>
										<li>HUVELLE, Ana María</li>
										<li>DI FRANCO, María Graciela</li>
									</ul>
								</div>
								<div class="col-sm-6">
									<ul class="list-unstyled">
                                        <li>MARTÍN, María Ema</li>
                                        <li>MORETTA, María Rosana</li>
                                        <li>FORTE, Nora Beatriz</li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <div class="description-content">
						<h2>Suplentes: </h2>
						<div class="requirements">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>FERNÁNDEZ, José María</li>
										<li>PEDELABORDE, Paula Mabel</li>
										<li>DOMÍNGUEZ, María Marcela (licencia)</li>
									</ul>
								</div>
								<div class="col-sm-6">
									<ul class="list-unstyled">
                                        <li>COMERCI, María Eugenia</li>
                                        <li>ROSSI, Graciela Lis</li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
				</div>
            </div>
        </div>
        <div class="row">
			<div class="col-sm-8 sidebar-left">
				<div class="single-curses-contert">
					<h2>Claustro de Docentes - Subclaustro Auxiliares</h2>
					<div class="description-content">
						<h2>Titulares: </h2>
						<div class="requirements">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>DOMÍNGUEZ, María Carolina</li>
										<li>FARÍAS, Patricia Leonor</li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <div class="description-content">
						<h2>Suplentes: </h2>
						<div class="requirements">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>DELGADO, María Verónica</li>
										<li>MORALES, Mónica Adriana</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
        </div>
        <div class="row">
			<div class="col-sm-8 sidebar-left">
				<div class="single-curses-contert">
					<h2>Claustro de Graduados</h2>
					<div class="description-content">
						<h2>Titulares: </h2>
						<div class="requirements">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>BESSOLO, Adela Mabel</li>
                                        <li>ROVEDA, Soraya Raquel</li>
                                        <li>MORO, Erica Elizabeth</li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <div class="description-content">
						<h2>Suplentes: </h2>
						<div class="requirements">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>NAIMAN GIL, Yesica Anabel</li>
                                        <li>GARCÍA, Marcelo Omar</li>
                                        <li>CHEME ARRIAGA, Romina</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
        </div>
        <div class="row">
			<div class="col-sm-8 sidebar-left">
				<div class="single-curses-contert">
					<h2>Claustro de Estudiantes</h2>
					<div class="description-content">
						<h2>Titulares: </h2>
						<div class="requirements">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>CARABEL, Carla Daniela</li>
                                        <li>LÉVANO, Micaela Romina</li>
                                        <li>GUIÑAZÚ, Yanina Beatriz</li>
                                        <li>SCHMIDT, Candela Aixa</li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <div class="description-content">
						<h2>Suplentes: </h2>
						<div class="requirements">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>LANZONI QUIROGA, María Antonella</li>
                                        <li>BENGOLEA, Lucas Gabriel</li>
                                        <li>MORENO, Ana</li>
                                        <li>MACHADO, Juliana Antonella</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
        </div>
        <div class="row">
			<div class="col-sm-8 sidebar-left">
				<div class="single-curses-contert">
					<h2>Personal No Docente</h2>
					<div class="description-content">
						<h2>Titulares: </h2>
						<div class="requirements">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>ALFAGEME, Mariano René</li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <div class="description-content">
						<h2>Suplentes: </h2>
						<div class="requirements">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>GARCÍA, Adriana Elizabeth</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>
	</div>	
</div>
-->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
	$('body').addClass('single-courses_v single-courses_v1');
});
</script>
@endsection
