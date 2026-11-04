@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
							<span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="{{ route('servicios.servicios_externos') }}">Servicios <i class='fa fa-angle-right'></i></a></span>
                            <span class="b-active">Exámenes de Acreditación de Nivel de Lengua Inglesa</span>
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
			<h3 style="color: #26406C;">Exámenes de Acreditación de Nivel de Lengua Inglesa</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Exámenes de Acreditación de Nivel de Lengua Inglesa</a>
			<a class="nav-link" id="v-pills-duracion-tab" data-toggle="pill" href="#duracion" role="tab" aria-controls="v-pills-duracion" aria-selected="false">Programas</a>
			<a class="nav-link" id="v-pills-requisitos-tab" data-toggle="pill" href="#requisitos" role="tab" aria-controls="v-pills-requisitos" aria-selected="false">Modelos de exámen</a>			
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
											<p class="text-justify text-dark my-1 mx-1 pb-2 border border-secondary border-top-0 border-left-0 border-right-0">
                                                <span class="text-danger">¡ATENCIÓN!</span> <b>EXÁMENES DE ACREDITACIÓN 2024</b>
                                                <br><br>
                                                <span class="text-danger">Fecha límite de inscripción : viernes 6 de diciembre</span><br>
                                                <br>
                                                <a href="https://drive.google.com/file/d/1z2DIZ4-YvsUAKU9Sjd_Bw-BnV2Gs3dEX/view?usp=drive_link" target="_blank">Horarios 2024</a><br>
                                                <br>
                                                Los exámenes se realizarán durante los días <b>10 y 11 de diciembre del corriente año.</b><br>
                                                <b>Aranceles Exámenes de Acreditación en Lenguas Extranjeras:</b><br>
                                                <b>Nivel Inicial</b> $ 40.000,00<br>
                                                <b>Nivel Pre-Intermedio</b> $ 48.000,00<br>
                                                <b>Nivel Intermedio</b> $ 56.000,00<br>
                                                <b>Nivel Post-Intermedio</b> $ 64.000,00<br>
                                                <b>Nivel Avanzado</b> $ 73.000,00<br>
                                                <b>Lugar:</b> Facultad de Ciencias Humanas - Coronel Gil 353, 2° Piso, Sta. Rosa.<br>
                                                En el caso de que los servicios fueran solicitados por estudiantes de la Facultad de Ciencias Humanas o del Colegio de la UNLPam, los aranceles se reducirán en un 50%. Para docentes de la Facultad de Ciencias Humanas o del Colegio de la UNLPam, se reducirá un 20%.<br>
                                                <b>Formulario de Inscripción:</b> <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCgaTXpDZ9igxQYDTkdHGZBIUH5VV9wXn-ZVhJH2Wf3lKgpg/viewform?pli=1" target="_blank">Aquí</a><br>
                                                <br>
                                                <b class="text-dark">Forma de pago:</b><br>
                                                <b>Depósito bancario</b><br>
                                                <b>CUENTA N°</b> 102-012578/3 Banco Santander Rio (a nombre de la UNLPam)<br>
                                                <b>CBU:</b> 0720102420000001257836<br>
                                                <b>Después de realizar el depósito, informar mediante envío de comprobante escaneado del depósito o transferencia por medio de correo electrónico a</b> 
                                                <a href="mailto:direccionadministrativa@humanas.unlpam.edu.ar">direccionadministrativa@humanas.unlpam.edu.ar</a>
                                                <br><br>

                                                <!--
                                                <b>Horarios de exámenes:</b> <i class="fas fa-file-pdf text-danger"></i>  <a href="https://drive.google.com/file/d/1ePdCODs1j4_sYT1rjgewe9xLiNaG1qNP/view?usp=drive_link" target="_blank">Ver</a></b><br>
                                                <b>E-mail:</b> <a href="mailto:examenesacreditacion@humanas.unlpam.edu.ar">examenesacreditacion@humanas.unlpam.edu.ar</a></b><br>
                                                <b>Fechas de exámenes:</b> 12 y 13 de DICIEMBRE – 8:30 hs.<br>
                                                <b>Lugar:</b> Facultad de Ciencias Humanas - Coronel Gil 353, 2° Piso, Sta. Rosa.<br>
                                                <b>Inscripción:</b> 08 de noviembre a 07 de diciembre<br>
                                                <b>Formulario de Inscripción:</b> <a href="https://forms.gle/RrJKSvFDbkzBhQQn9" target="_blank">Aquí</a><br>
                                                <b>Forma de pago:</b><br>
                                                <b>Depósito bancario</b><br>
                                                <b>CUENTA N°</b> 102-012578/3 Banco Santander Rio (a nombre de la UNLPam)<br>
                                                <b>CBU:</b> 0720102420000001257836<br>
                                                <b>Después de realizar el depósito, informar mediante envío de comprobante escaneado del depósito o transferencia por medio de correo electrónico a</b> 
                                                <a href="mailto:direccionadministrativa@humanas.unlpam.edu.ar">direccionadministrativa@humanas.unlpam.edu.ar</a>
                                                <br><br>
                                                <b>ARANCELES:</b><br>
                                                <b>Nivel Inicial</b> $13.250<br>
                                                <b>Nivel Pre-Intermedio</b> $15.750<br>
                                                <b>Nivel Intermedio</b> $18.250<br>
                                                <b>Nivel Post-Intermedio</b> $20.750<br>
                                                <b>Nivel Avanzado</b> $24.000<br>
                                                <br>
                                                En el caso de que los servicios fueran solicitados por estudiantes de la Fac. de Ciencias Humanas o del Colegio de la UNLPam., los aranceles se reducirán en un 50%. Para docentes de la Fac. de Cs. Hs. o del Colegio de la UNLPam, se reducirá un 20%.
                                                Ante cualquier consulta, estamos a su disposición.-->
                                            </p>
										</div>
						
					</div>
				</div>
			</div>
			<!-- Niveles -->
			<div class="tab-pane fade vh-100" id="duracion" role="tabpanel" aria-labelledby="v-pills-duracion-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Programas</b><br><br>
                                    <!-- sección pdfs niveles -->
									<div class="container mb-4">
                                            <div class="row border border-dark">
                                                <div class="bg-light col-6 py-2 border border-dark border-top-0 border-right-0 border-left-0 font-weight-bold">NIVEL INICIAL</div>
                                                <div class="col-6 py-2 border border-dark border-top-0 border-right-0"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1x3MqVXfo0qTNKsIvvNFBcP0V2mhduT5a/view?usp=sharing" target="_blank">Programa Nivel Inicial</a></div>
                                                
                                                <div class="bg-light col-6 py-2 border border-dark border-top-0 border-right-0 border-left-0 font-weight-bold">NIVEL PRE-INTERMEDIO</div>
                                                <div class="col-6 py-2 border border-dark border-top-0 border-right-0"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1F-jgUmO9Sn-1ga-7A85iAyx-mBJPCzBP/view?usp=sharing" target="_blank">Programa Nivel Pre-Intermedio</a></div>
                                                
                                                <div class="bg-light col-6 py-2 border border-dark border-top-0 border-right-0 border-left-0 font-weight-bold">NIVEL INTERMEDIO</div>
                                                <div class="col-6 py-2 border border-dark border-top-0 border-right-0"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tq9P0DtLOTEFe0H_PzOQBIHBtsQ6Q44K/view?usp=sharing" target="_blank">Programa Nivel Intermedio</a></div>
                                                
                                                <div class="bg-light col-6 py-2 border border-dark border-top-0 border-right-0 border-left-0 font-weight-bold">NIVEL POST-INTERMEDIO</div>
                                                <div class="col-6 py-2 border border-dark border-top-0 border-right-0"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1aCtVbXVTp-Cz14vsyl-hTjDQ_pnJ-Et4/view?usp=sharing" target="_blank">Programa Nivel Post-Intermedio</a></div>
                                                
                                                <div class="bg-light col-6 py-2 border border-dark border-top-0 border-right-0 border-left-0 border-bottom-0 font-weight-bold">NIVEL AVANZADO</div>
                                                <div class="col-6 py-2 border border-dark border-top-0 border-right-0 border-bottom-0"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1U-IVvHyUrh8qQpo_6NXdACRJwbu6b4yR/view?usp=sharing" target="_blank">Programa Nivel Avanzado</a></div>
                                            </div>
                                        </div>
                                    <!-- sección pdfs niveles -->
				</p>
			</div>
			<!-- Duración -->

			<!-- Requisitos -->
			<div class="tab-pane fade vh-100" id="requisitos" role="tabpanel" aria-labelledby="v-pills-requisitos-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Modelos de exámen</b><br><br>
                                    <!-- sección drive -->
									<div class="container mb-4">
                                            <div class="row border border-dark">
                                                    <!-- 2019 -->
                                                    <div class="bg-light col-12 py-2 border border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">
                                                        AÑO 2019
                                                    </div>
                                                    <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                                        <iframe src="https://drive.google.com/embeddedfolderview?id=1WNBIwtU6boALcOWpOC2hujC22u_q_Z82#list" style="width:100%; height: 200px; border:0;"></iframe>
                                                    </div>
                                                    <!-- 2017 -->
                                                    <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">
                                                        AÑO 2017
                                                    </div>
                                                    <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                                        <iframe src="https://drive.google.com/embeddedfolderview?id=14t7-Dn1UHXjClsWupV4jaq6K9DSfhNL_#list" style="width:100%; height: 200px; border:0;"></iframe>
                                                    </div>
                                                    <!-- 2016
                                                    <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">
                                                        AÑO 2016
                                                    </div>
                                                    <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                                        <iframe src="https://drive.google.com/embeddedfolderview?id=1VpqWuR8NO7EPwm-6IwSnxH_RNzorRYgR#list" style="width:100%; height: 200px; border:0;"></iframe>
                                                    </div> -->
                                                    <!-- 2015
                                                    <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">
                                                        AÑO 2015
                                                    </div>
                                                    <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                                        <iframe src="https://drive.google.com/embeddedfolderview?id=1q-6NXMWbnqV327EEy_UJsSQ4cqg0tcm1#list" style="width:100%; height: 200px; border:0;"></iframe>
                                                    </div> -->
                                                    <!-- 2014
                                                    <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">
                                                        AÑO 2014
                                                    </div>
                                                    <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                                        <iframe src="https://drive.google.com/embeddedfolderview?id=11zBPCafpmB63NazUArg9Tw2WYhES10Sw#list" style="width:100%; height: 200px; border:0;"></iframe>
                                                    </div> --> 
                                                    <!-- 2013
                                                    <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">
                                                        AÑO 2013
                                                    </div>
                                                    <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                                        <iframe src="https://drive.google.com/embeddedfolderview?id=1K-xmUGUJEvWDUYH6tKFLRNvqNql8AryM#list" style="width:100%; height: 200px; border:0;"></iframe>
                                                    </div> -->
                                                    <!-- 2012
                                                    <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">
                                                        AÑO 2012
                                                    </div>
                                                    <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                                        <iframe src="https://drive.google.com/embeddedfolderview?id=1HlOci7QH-yP7aoENSZ0oqeFi9oRjRlQp#list" style="width:100%; height: 200px; border:0;"></iframe>
                                                    </div> -->
                                                    <!-- 2011
                                                    <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">
                                                        AÑO 2011
                                                    </div>
                                                    <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                                                        <iframe src="https://drive.google.com/embeddedfolderview?id=1EA58FCkklTVWdhS66EA8gbcwbtgThzgW#list" style="width:100%; height: 200px; border:0;"></iframe>
                                                    </div> -->                                                                                                                                                                                                 
                                            </div>                            
                                        </div>
                                    <!-- sección drive -->
				</p>
			</div>
			<!-- Requisitos -->
			
			<!-- Perfil del Título -->
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<p class="text-justify text-dark">
					<b style="color: #26406C;">Contacto</b><br><br>
					<p class="py-4 px-4">
                        <span class="font-weight-bold">Consultas al siguiente mail:</span><br> 
                        <a href="mailto:examenesacreditacion@humanas.unlpam.edu.ar"> examenesacreditacion@humanas.unlpam.edu.ar</a><br><br>
                        <span class="font-weight-bold">Modalidad del Exámen</span><br>
                        <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zzc8KXxTMJaOxaLjbmzYqUL56-DlbXpH/view?usp=sharing" target="_blank">Criterios de Calificación</a>
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