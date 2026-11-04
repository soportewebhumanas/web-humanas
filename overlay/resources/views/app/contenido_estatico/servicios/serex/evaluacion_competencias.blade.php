@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
							<span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="{{ route('servicios.servicios_externos') }}">Servicios <i class='fa fa-angle-right'></i></a></span>
                            <span class="b-active">Programa de Evaluación de Competencias Comunicativas en Inglés destinado a Alumnos de la Educación Secundaria (Ciclos Básico y Orientado)</span>
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
			<h3 style="color: #26406C;">Programa de Evaluación de Competencias Comunicativas en Inglés destinado a Alumnos de la Educación Secundaria (Ciclos Básico y Orientado)</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Programa de Evaluación de Competencias Comunicativas</a>
			<a class="nav-link" id="v-pills-duracion-tab" data-toggle="pill" href="#duracion" role="tab" aria-controls="v-pills-duracion" aria-selected="false">Descriptores de Competencias</a>
			<a class="nav-link" id="v-pills-requisitos-tab" data-toggle="pill" href="#requisitos" role="tab" aria-controls="v-pills-requisitos" aria-selected="false">Evaluaciones Modelo</a>			
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Contacto</a>
		</div>
		<div class="col-12 d-xl-none">
			<hr>
		</div>
		<div class="tab-content col-12 col-xl-8 col-lg-8 mb-5" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<div class="container">
					<div class="row">
						<div class="col-12">
                            <!--<b>EVALUACIONES DE COMPETENCIAS 2024</b><br><br>-->
                            <!--<b>E-MAIL:</b> <a href="mailto:evaluacionescompetencias@humanas.unlpam.edu.ar" target="_blank">evaluacionescompetencias@humanas.unlpam.edu.ar</a><br>-->
                            <b>¡ATENCIÓN! EXÁMENES DE COMPETENCIAS 2025</b><br>
                            <br>
                            Fecha límite de inscripción: 24 de noviembre
                            <br>
                            Los exámenes se realizarán el día 28 de noviembre del corriente año, horario a confirmar.<br>
                            Los aranceles de los Exámenes serán comunicados en el mes de octubre<br>
                            <br>                            
                            Nivel A<br>
                            Nivel B<br>
                            Nivel C<br>
                            Lugar: Facultad de Ciencias Humanas - Coronel Gil 353, 2° Piso, Sta. Rosa.<br>
                            <br>
                            <!--<b>Fecha de evaluaciones:</b> 28 de NOVIEMBRE – 8:30 hs.<br>
                            <b>Inscripción:</b> hasta el 27 de noviembre<br> 
                            <b>Formulario de Inscripción: </b> <a href="https://docs.google.com/forms/d/11bNhmWf81BzIyoIAqRORGtheWugHz0iFJ9v0XMWtfBU/edit" target="_blank">Aquí</a><br>-->

                            <!-- noviembre 2024 -->
                            <!--<b>Fecha de evaluaciones:</b> 29 de NOVIEMBRE – 8:30 hs.<br>
                            <span class="text-danger"><b>Inscripción:</b> hasta el 28 de NOVIEMBRE</span><br> 
                            <b>Formulario de Inscripción: </b> <a href="https://forms.gle/r2eGd5nnjnQ8eoxa9" target="_blank">Aquí</a><br>                            
                            <br>
                            <b>Forma de pago:</b><br>
                            <b>Depósito bancario</b> <br>
                            CUENTA Nª 102-012578/3 Banco Santander Rio (a nombre de la UNLPam)<br>
                            <b>CBU:</b> 0720102420000001257836<br>
                            <b><i>Después de realizar el depósito, informar mediante envío de comprobante escaneado del depósito o transferencia por medio de correo electrónico a <a href="mailto:direccionadministrativa@humanas.unlpam.edu.ar">direccionadministrativa@humanas.unlpam.edu.ar</a></b></i><br><br>
                            <b>ARANCELES:</b><br>
                            Nivel A: $ 44.000<br>
                            Nivel B: $ 48.000<br>
                            Nivel C: $ 52.000<br><br>
                            <b>Importante:</b><br>
                            <i>En el caso de que los servicios fueran solicitados por estudiantes de la Facultad de Ciencias Humanas o del Colegio de la UNLPam, los aranceles se reducirán en un 50,00% (cincuentapor ciento). En el caso de que los servicios fueran solicitados por docentes de la Facultad de Ciencias Humanas o del Colegio de la UNLPam, los aranceles se reducirán en un 20,00%
                            (veinte por ciento).</i>-->
                            <!-- noviembre 2024 -->
                            <!--<b><i>En el caso de que los servicios fueran solicitados por estudiantes del Colegio de la UNLPam, los aranceles se reducirán en un 50%.En el caso de que los servicios fueran solicitados por docentes de la Facultad de Ciencias Humanas o del Colegio de la UNLPam, los aranceles se reducirán en un 20,00% (veinte por ciento).</i></b>-->						
                        </div>
					</div>
				</div>
			</div>
			<!-- Niveles -->
			<div class="tab-pane fade vh-100" id="duracion" role="tabpanel" aria-labelledby="v-pills-duracion-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Descriptores de Competencias</b><br><br>
                    <div class="row border border-dark">
                        <div class="bg-light col-6 py-2 border border-dark border-top-0 border-right-0 border-left-0 font-weight-bold">NIVEL A</div>
                        <div class="col-6 py-2 border border-dark border-top-0 border-right-0"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16ZMM_z8-Kezvqxuh2s--q8Wfkf3dFpJb/view?usp=sharing" target="_blank">Descargar</a></div>
                                    
                        <div class="bg-light col-6 py-2 border border-dark border-top-0 border-right-0 border-left-0 font-weight-bold">NIVEL B</div>
                        <div class="col-6 py-2 border border-dark border-top-0 border-right-0"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14DizDZTP0Gym4_Qg7cFe1wyX4wGJMunM/view?usp=sharing" target="_blank">Descargar</a></div>
                                    
                        <div class="bg-light col-6 py-2 border border-dark border-top-0 border-right-0 border-left-0 border-bottom-0 font-weight-bold">NIVEL C</div>
                        <div class="col-6 py-2 border border-dark border-top-0 border-right-0 border-bottom-0"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14vTj2VmD4IyhXGVndxGEowNSKFSSiaHV/view?usp=sharing" target="_blank">Descargar</a></div>
                    </div>
				</p>
			</div>
			<!-- Duración -->

			<!-- Requisitos -->
			<div class="tab-pane fade vh-100" id="requisitos" role="tabpanel" aria-labelledby="v-pills-requisitos-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Evaluaciones Modelo</b><br><br>
                    <div class="row border border-dark">
                                <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-top-0 border-bottom-0 font-weight-bold">EVALUACIONES MODELO</div>
                                <!-- 2016 -->
                                <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">AÑO 2016</div>
                                <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                    <iframe src="https://drive.google.com/embeddedfolderview?id=1zCivj6E3ZHzPXkTnFNk_DZA6cQUdFAii#list" style="width:100%; height: 200px; border:0;"></iframe>
                                </div>
                                <!-- 2013 -->
                                <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">AÑO 2013</div>
                                <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                    <iframe src="https://drive.google.com/embeddedfolderview?id=1FW3cErwE1r-n4t4NoiT-lI5npfeWF_Kt#list" style="width:100%; height: 200px; border:0;"></iframe>
                                </div>
                                <!-- 2012
                                <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">AÑO 2012</div>
                                <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                    <iframe src="https://drive.google.com/embeddedfolderview?id=1EakwlOXXexUVJ-cj4VjcqXIBbgDnHIqK#list" style="width:100%; height: 200px; border:0;"></iframe>
                                </div>-->
                                <!-- 2011
                                <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">AÑO 2011</div>
                                <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                    <iframe src="https://drive.google.com/embeddedfolderview?id=1V5n_2K6aWEPoFq3fw3tSLWg0sZ76yGTY#list" style="width:100%; height: 200px; border:0;"></iframe>
                                </div>-->
                                <!-- 2010
                                <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">AÑO 2010</div>
                                <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                    <iframe src="https://drive.google.com/embeddedfolderview?id=13MMq1lAlUX1n7WLy1Sya6m0Q_LVoalW7#list" style="width:100%; height: 200px; border:0;"></iframe>
                                </div>-->
                                <!-- 2009
                                <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">AÑO 2009</div>
                                <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                    <iframe src="https://drive.google.com/embeddedfolderview?id=1NBZBPiJM-a6_CiIOxRh5H7KpNrRjdYuI#list" style="width:100%; height: 200px; border:0;"></iframe>
                                </div>-->
                                <!-- 2008
                                <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">AÑO 2008</div>
                                <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                    <iframe src="https://drive.google.com/embeddedfolderview?id=1687Fby_WI8JI7h3XzveateEjv7K5Saui#list" style="width:100%; height: 200px; border:0;"></iframe>
                                </div>-->                                                                                                                                                                  
                            </div>   
			</div>
			<!-- Requisitos -->
			
			<!-- Perfil del Título -->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Contacto</b><br><br>
					<p class="py-4 px-4">
                        <span class="font-weight-bold">Consultas al siguiente mail:</span><br> 
                        <a href="mailto:evaluacionescompetencias@humanas.unlpam.edu.ar"> evaluacionescompetencias@humanas.unlpam.edu.ar</a><br>
                    </p>
				</p>				
			</div>
			<!-- Perfil del Título -->

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