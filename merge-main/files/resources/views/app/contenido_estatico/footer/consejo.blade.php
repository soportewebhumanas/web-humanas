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
	<style>
		.accordion .card-header:after {
			font-family: 'FontAwesome';  
			content: "\f146";
			float: left;
			color: black; 
		}
		.accordion .card-header.collapsed:after {
			/* symbol for "collapsed" panels */
			content: "\f0fe";
			color: black;
		}
	</style>	
</header>

<div class="container pt-2">
	<div class="row">
		<div class="col-12">
		<h3>Consejo Directivo</h3>			
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="composicion-tab" data-toggle="tab" href="#composicion" role="tab" aria-controls="composicion" aria-selected="true">Composición Actual</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="audios-tab" data-toggle="tab" href="#audios" role="tab" aria-controls="audios" aria-selected="false">Audios</a>
		</li>
		<!--<li class="nav-item">
			<a class="nav-link" id="memoria-tab" data-toggle="tab" href="#memoria" role="tab" aria-controls="memoria" aria-selected="false">Memoria de Gestión</a>
		</li>-->
		<li class="nav-item">
			<a class="nav-link" id="actas-tab" data-toggle="tab" href="#orden" role="tab" aria-controls="actas" aria-selected="false">Orden del día</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="actas-tab" data-toggle="tab" href="#actas-firmadas" role="tab" aria-controls="actas" aria-selected="false">Actas</a>
		</li>						
		</ul>
		<div class="tab-content" id="myTabContent">
		
		<!-- Composición Actual -->		
		<div class="tab-pane fade show active px-2 pt-2" id="composicion" role="tabpanel" aria-labelledby="composicion-tab">
			<div class="container pb-4">
				<div class="row">
					<div class="col-12 d-flex justify-content-end">
                        <div>
                            <audio style="height: 2rem;" controls=""><source src="./slim/audios-web/consejo-directivo.wav" type="audio/wav">Tu navegador no soporta audio HTML5.</audio><br>
                        </div>
                    </div>					
					<div class="col-12 text-justify py-2">
						<p>El Consejo Directivo es el órgano de gobierno de la Facultad. Está integrado por la/el <b>Decana/o</b>, 8 representantes del <b>Claustro de Docentes</b> (6 representantes del <b>Subclaustro de Profesores</b> y 2 del <b>Subclaustro de Docentes Auxiliares</b>), 3 representantes del <b>Claustro de Graduados</b>, 4 representantes del <b>Claustro de Estudiantes</b> y 1 representante del <b>Sector Nodocente</b>.</p>
					</div>
					<div class="col-12 text-justify py-2 text-center">
						<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2014_67.pdf" target="_blank">Reglamento del Consejo Directivo - Ordenanza Nº 67-CD-2014</a><br>
						<!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://www.unlpam.edu.ar/images/elecciones/2024/actas/ACTA_7-24.pdf" target="_blank">Acta de la Junta Electoral UNLPam</a><br>-->
					</div>					
					<div class="col-12 text-center bg-secondary text-light font-weight-bold py-2">Claustro de Docentes - Subclaustro Profesores</div>
					<div class="col-12 text-center bg-light">
					<span class="font-weight-bold">Titulares</span><br>    
						<!--2026-->
						Silvia Cristina QUIPILDOR<br>
						Andrea Marina D’ATRI<br>
						Juan Carlos FRANCO<br>
						Silvia Andrea SPINELLI<br>
						Mabel María FERNANDEZ<br>
						Mariano OLIVETO<br><br>
						<!--2026-->
					<span class="font-weight-bold">Suplentes</span><br>
						<!--2026-->
						María Rosana MORETTA<br>
						Paula Mabel PEDELABORDE<br>
						María Eugenia COMERCI<br>
						Valeria Soledad GÓMEZ<br>
						Juan Cruz LÓPEZ RASCH<br>
						María Cecilia GAISER<br><br>
						<!--2026-->						
					</div>
					
					<div class="col-12 text-center bg-secondary text-light font-weight-bold py-2">Claustro de Docentes - Subclaustro Auxiliares</div>
					<div class="col-12 text-center bg-light">
					<span class="font-weight-bold">Titulares</span><br>
						<!--2026-->
						María Carolina DIHARCE<br>
						Ivana Celeste GUARDIA<br><br>
						<!--2026--> 
					<span class="font-weight-bold">Suplentes</span><br>
						<!--2026-->
						Leonardo Daniel LEDESMA (en uso de licencia)<br>
						María Silvia BURATTI<br><br>						
						<!--2026-->
					</div>

					<div class="col-12 text-center bg-secondary text-light font-weight-bold py-2">Claustro de Graduados</div>
					<div class="col-12 text-center bg-light">
						<span class="font-weight-bold">Titulares</span><br>
						<!--2026-->
						Carlos Gustavo FUHR<br>
						Vanesa Estefanía ELIAS<br>
						Yesica Anabel NAIMAN GIL<br><br>
						<!--2026-->

						<span class="font-weight-bold">Suplentes</span><br>
						<!--2026-->
						María Graciela DI FRANCO<br>
						Magdalena Guadalupe LEDESMA<br>
						Carolina Liz PILDAIN<br><br>
						<!--2026-->
					</div>

					<div class="col-12 text-center bg-secondary text-light font-weight-bold py-2">Claustro de Estudiantes</div>
					<div class="col-12 text-center bg-light">
						<span class="font-weight-bold">Titulares</span><br>
							<!--2026-->
							Joaquín BARROSO CUEVAS<br>
							Camila Inés CASTRO LIMA<br>
							Oriana AVILA<br>
							Sayi Malen VILLEGAS<br><br>
							<!--2026-->							
						<span class="font-weight-bold">Suplentes</span><br>
							<!--2026-->
							Candela Agustina GONZÁLEZ<br>
							Selva Victoria JUÁREZ<br>
							Matías Alfredo MONTERO<br>
							Renzo SEIA ALBERTI<br><br>
							<!--2026-->
					</div>

					<div class="col-12 text-center bg-secondary text-light font-weight-bold py-2">Sector Nodocente</div>
					<div class="col-12 text-center bg-light">
						<span class="font-weight-bold">Titulares</span><br>
						<!--2026-->
						Ana Lis VILLEGAS<br><br>
						<!--2026-->

						<span class="font-weight-bold">Suplentes</span><br>
						<!--2026-->
						Tamara Soledad VERALLI
						<!--2026-->
						
					</div>
				</div>
			</div>
		</div>
		<!-- Composición Actual -->

		<!-- Actas -->
		<div class="tab-pane fade px-2 pt-2" id="actas-firmadas" role="tabpanel" aria-labelledby="actas-tab">
		<div id="accordion">
				<div class="row">
					<div class="col-12 vh-100">
                        <!-- Carpeta actas -->
                        <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">Actas</div>
                        <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
							<iframe src="https://drive.google.com/embeddedfolderview?id=1tmQgAFR-6EIk_7NIaSWjqLIC7mW-F_IH#list" style="width:100%; height: 400px; border:0;"></iframe>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- Actas -->
		<!-- Memoria de gestión -->
		<div class="tab-pane fade px-2 pt-2" id="memoria" role="tabpanel" aria-labelledby="actas-tab">
			<div id="accordion">
				<div class="row">
					<div class="col-12 vh-100">
					<p class="text-justify pt-3 pl-4" style="min-height: 450px">
					<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NXVW8-jqN6dvAeHbRfeGeV3xKvgxmhL0/view?usp=drive_link" target="_blank">
						Memoria anual de Gestión 2020
					</a><br>
					<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zVeQBFY2E1-H5oYEsg2EpYGzeqFEkRf-/view?usp=drive_link" target="_blank">
						Memoria anual de Gestión 2021
					</a><br>					
					<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LWC9TVGF3UclnRacgsqLUCxHO-7zmUWB/view?usp=drive_link" target="_blank">
						Memoria anual de Gestión 2022
					</a><br>
					<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1HJPe5444c6KaysVGzuxcxRxtI27lMTDP/view?usp=drive_link" target="_blank">
						Memoria anual de Gestión 2023
					</a><br>					
				</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Memoria de gestión -->

		<!-- Orden del día -->
		<div class="tab-pane fade px-2 pt-2" id="orden" role="tabpanel" aria-labelledby="actas-tab">
			<div id="accordion">
				<div class="row">
					<div class="col-12 vh-100">
                        <!-- Carpeta orden del día -->
                        <div class="bg-light col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold text-center">Orden del día</div>
                        <div class="col-12 py-2 border border-dark border-right-0 border-left-0 border-bottom-0 font-weight-bold">
                        	<iframe src="https://drive.google.com/embeddedfolderview?id=1l1h2ezpbClKOTMlZ8eBstRBMme2uElMV#list" style="width:100%; height: 400px; border:0;"></iframe>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- Orden del día -->

		<!-- Boletines -->
		<div class="tab-pane fade px-2 pt-2" id="boletines" role="tabpanel" aria-labelledby="boletines-tab">
			<p class="text-justify pb-2">
			</p>
		</div>
		<!-- Boletines -->

		<!-- Audios -->
		<div class="tab-pane fade px-2 pt-2" id="audios" role="tabpanel" aria-labelledby="audios-tab">
			<!-- 2026 -->
			<p class="text-dark font-weight-bold">Año 2026</p>
			<div id="accordion">
				<div class="card accordion shadow-none rounded-0 border-0"><!-- open card -->
					<!-- Septiembre -->
					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseseptiembre2026" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Septiembre
							</a>
						</div>
						<div id="collapseseptiembre2026" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2026/Sesion-25-09-2026.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">X Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2026/Sesion-11-09-2026.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>
					<!-- Septiembre -->						
					<!-- Agosto -->
					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseagosto2026" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Agosto
							</a>
						</div>
						<div id="collapseagosto2026" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">IX Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2026/Sesion-21-08-2026.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>							
							<span class="text-dark font-weight-bold">VIII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2026/07-08-2026.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>
					<!-- Agosto -->					
					<!-- Julio -->
					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapsejulio2026" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Julio
							</a>
						</div>
						<div id="collapsejulio2026" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">VII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2026/Sesion-03-07-2026.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>
					<!-- Julio -->					
					<!-- Junio -->
					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapsejunio2026" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Junio
							</a>
						</div>
						<div id="collapsejunio2026" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">VI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2026/Sesión-19-06-2026.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">V Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2026/05-06-2026.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>
					<!-- Junio -->
					<!-- Mayo -->
					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapsemayo2026" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Mayo
							</a>
						</div>
						<div id="collapsemayo2026" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">IV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2026/22-05-2026.MP3" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>						
						</div>
					<!-- Mayo -->									
					<!-- Abril -->
					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseabril2026" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Abril
							</a>
						</div>
						<div id="collapseabril2026" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">III Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2026/Sesion-30-04-2026.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>						
						</div>
					<!-- Abril -->				
					<!-- Marzo -->
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseMarzo2026" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Marzo
							</a>
						</div>
						<div id="collapseMarzo2026" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">II Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2026/Sesion-27-03-2026.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>						
							<span class="text-dark font-weight-bold">I Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2026/Sesion-06-03-2026.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>
					<!-- Marzo -->
				</div><!-- end card -->
			</div>
			<!-- 2026 -->


<!-- 2026 -->
<p class="text-dark font-weight-bold">Años 2021 a 2025</p>
			<div id="accordion">
				<div class="card accordion shadow-none rounded-0 border-0">
					<!-- open card -->
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapse2021a2025" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Audios de sesiones 2021 a 2025
							</a>
						</div>
						<div id="collapse2021a2025" class="card-body collapse" data-parent="#accordion">
							<a href="https://drive.google.com/drive/folders/1acVkat4xhftYL0IjVoRKLhZEcwWfh6G1?usp=drive_link" target="_blank">Enlace a carpeta de drive</a>
						</div>
						<!-- end card -->
				</div>
			</div>
			<!-- 2026 -->



			<!-- 2025 -->
			<!--
			<p class="text-dark font-weight-bold">Año 2025</p>
			<div id="accordion">
				<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseDiciembre2025" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Diciembre
							</a>
						</div>
						<div id="collapseDiciembre2025" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/XV Sesión Ordinaria - 5 de diciembre de 2025.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
						</div>						

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseNoviembre2025" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Noviembre
							</a>
						</div>
						<div id="collapseNoviembre2025" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XIV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/XIV Sesión Ordinaria - 14 de noviembre de 2025.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
						</div>						

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseOctubre2025" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Octubre
							</a>
						</div>
						
						<div id="collapseOctubre2025" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XIII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/XIII Sesión Ordinaria - 31 de octubre de 2025.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
						</div>						
						<div id="collapseOctubre2025" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/XII Sesión Ordinaria - 17 de octubre de 2025.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseAgosto2025" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Agosto
							</a>
						</div>
						<div id="collapseAgosto2025" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">X Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/X Sesión Ordinaria - 29 de agosto de 2025.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">IX Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/IX Sesión Consejo Directivo.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseJulio2025" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Julio
							</a>
						</div>
						<div id="collapseJulio2025" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">VIII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/VIII Sesión Ordinaria - 4 de julio de 2025.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>							
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseJunio2025" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Junio
							</a>
						</div>
						<div id="collapseJunio2025" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">VII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/VII Sesión Ordinaria - 27 de junio de 2025.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>							
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseMayo2025" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Mayo
							</a>
						</div>
						<div id="collapseMayo2025" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">VI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/VI Sesión Consejo Directivo- 30-05-2025.mp3" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>							
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseAbril2025" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Abril
							</a>
						</div>
						<div id="collapseAbril2025" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">IV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/IV Sesión Consejo Directivo - 25-04-2025.mp3" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>							
							<span class="text-dark font-weight-bold">III Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/III Sesión Ordinaria - 04 de abril de 2025.mp3" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseMarzo2025" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Marzo
							</a>
						</div>
						<div id="collapseMarzo2025" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">II Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/II Sesión Ordinaria - 21 de marzo de 2025.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseFebrero2025" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Febrero
							</a>
						</div>
						<div id="collapseFebrero2025" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">I Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2025/I Sesión Ordinaria - 28 de febrero de 2025.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>
                 
				</div>
			</div>
			-->
			<!-- 2025 -->			
			<!-- 2024 -->
			<!--
			<p class="text-dark font-weight-bold">Año 2024</p>
			<div id="accordion">
				<div class="card accordion shadow-none rounded-0 border-0">

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseNoviembre2024" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Noviembre
							</a>
						</div>
						<div id="collapseNoviembre2024" class="card-body collapse" data-parent="#accordion">
						<span class="text-dark font-weight-bold">XIV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/XIV Sesión Ordinaria - 22 de noviembre de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">XIII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/XIII Sesión Ordinaria - 8 de noviembre de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseOctubre2024" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Octubre
							</a>
						</div>
						<div id="collapseOctubre2024" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/XII Sesión Ordinaria - 25 de octubre de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseSeptiembre2024" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Septiembre
							</a>
						</div>
						<div id="collapseSeptiembre2024" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/XI Sesión Ordinaria - 27 de septiembre de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">X Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/X Sesión Ordinaria - 6 de septiembre de 2024 1.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseAgosto2024" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Agosto
							</a>
						</div>
						<div id="collapseAgosto2024" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">IX Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/IX Sesión Ordinaria - 16 de agosto de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">VIII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/VIII Sesión Ordinaria - 2 de agosto de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseJunio2024" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Junio
							</a>
						</div>
						<div id="collapseJunio2024" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">VII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/VII Sesión Ordinaria - 28 de junio de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">VI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/VI Sesión Ordinaria - 7 de junio de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseMayo2024" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Mayo
							</a>
						</div>
						<div id="collapseMayo2024" class="card-body collapse" data-parent="#accordion">
						<span class="text-dark font-weight-bold">V Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/V Sesión Ordinaria - 24 de mayo de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">IV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/IV Sesión Ordinaria - 3 de mayo de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseAbril2024" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Abril
							</a>
						</div>
						<div id="collapseAbril2024" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">III Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/III Sesión Ordinaria - 19 de abril de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseMarzo2024" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Marzo
							</a>
						</div>
						<div id="collapseMarzo2024" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">I Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/marzo-01-03-2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							
							<span class="text-dark font-weight-bold">II Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2024/II Sesión Ordinaria - 22 de marzo de 2024.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>
				</div>
			</div>-->
			<!-- 2024 -->
			<!--
			<p class="text-dark font-weight-bold">Año 2023</p>
			<div id="accordion">
				<div class="card accordion shadow-none rounded-0 border-0">

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseNoviembre2023" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Noviembre
							</a>
						</div>
						<div id="collapseNoviembre2023" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XIV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/XIV Sesión Ordinaria - 3 de noviembre de 2023.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseOctubre2023" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Octubre
							</a>
						</div>
						<div id="collapseOctubre2023" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XIII Sesión Ordinaria - Parte 1</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/XIII Sesión Ordinaria - 20 de octubre de 2023 1.MP3" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">XIII Sesión Ordinaria - Parte 2</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/XIII Sesión Ordinaria - 20 de octubre de 2023 2.MP3" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseSeptiembre2023" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Septiembre
							</a>
						</div>
						<div id="collapseSeptiembre2023" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/XI Sesión Ordinaria - 1 de septiembre de 2023.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">XII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/XII Sesión Ordinaria - 29 de septiembre de 2023 GP.MP3" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseAgosto2023" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Agosto
							</a>
						</div>
						<div id="collapseAgosto2023" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">IX Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/IX Sesión Ordinaria - 4 de agosto de 2023.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">X Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/X Sesión Ordinaria - 18 de agosto de 2023.MP3" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseJulio2023" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Julio
							</a>
						</div>
						<div id="collapseJulio2023" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">VIII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/VIII Sesión Ordinaria - 28 de julio de 2023 GP.MP3" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseJunio2023" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Junio
							</a>
						</div>
						<div id="collapseJunio2023" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">VI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/VI_Sesión_Ordinaria-2_de_junio_de_2023.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">VII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/VII_Sesión_Ordinaria-16_de_junio_de_2023.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseMayo2023" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Mayo
							</a>
						</div>
						<div id="collapseMayo2023" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">V Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/V_Sesión_Ordinaria-12_de_mayo_de_2023.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>

						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseAbril2023" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Abril
							</a>
						</div>
						<div id="collapseAbril2023" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">III Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/III_Sesión_Ordinaria-14_de_abril_de_2023.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">IV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/IV_Sesión_Ordinaria-28_de_abril_de_2023.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseMarzo2023" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Marzo
							</a>
						</div>
						<div id="collapseMarzo2023" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">II Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/II_Sesion_Ordinaria-17_de_marzo_de_2023.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">I Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2023/I_Sesion Ordinaria-3_de_marzo_de_2023.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio>
						</div>
				</div>
		</div>-->
		<!-- 2023 -->


			<!-- 2022 -->
			<!--
			<p class="text-dark font-weight-bold">Año 2022</p>
			<div id="accordion">
				<div class="card accordion shadow-none rounded-0 border-0">

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseDiciembre2022" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Diciembre
							</a>
						</div>
						<div id="collapseDiciembre2022" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XVI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/XVI_Sesion_Ordinaria-02_de_diciembre_de_2022.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseNoviembre2022" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Noviembre
							</a>
						</div>
						<div id="collapseNoviembre2022" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/XV_Sesion_Ordinaria-11-de_noviembre_de_2022.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseOctubre2022" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Octubre
							</a>
						</div>
						<div id="collapseOctubre2022" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XIV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/XIV_Sesion_Ordinaria-28_de_octubre_de_2022.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">XIII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/XIII_Sesion_Ordinaria-14_de_octubre_de_2022.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseSeptiembre2022" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Septiembre
							</a>
						</div>
						<div id="collapseSeptiembre2022" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/XI_Sesión_Ordinaria-7_de_septiembre_de_2022.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>
							<span class="text-dark font-weight-bold">XII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/XII_Sesion_Ordinaria-16_de_septiembre_de_2022.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseAgosto2022" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Agosto
							</a>
						</div>
						<div id="collapseAgosto2022" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">IX Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/IX_Sesión_Ordinaria-5_de_agosto_de_2022.mp3" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br>							
							<span class="text-dark font-weight-bold">X Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/X_Sesión_Ordinaria-19_de_agosto_de_2022.m4a" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio><br>

						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseJulio2022" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
							Julio
							</a>
						</div>
						<div id="collapseJulio2022" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">VIII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/VIII_Sesion.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseJunio2022" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
							Junio
							</a>
						</div>
						<div id="collapseJunio2022" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">VII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/VII_Sesion.mp3" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio>
						</div>

					<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseMayo2022" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Mayo
							</a>
						</div>
						<div id="collapseMayo2022" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">V Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/V_Sesión_Ordinaria-13_de_mayo_de_2022.MP3" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio>
							<br>
							<span class="text-dark font-weight-bold">VI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/VI_Sesion_Ordinaria-27_de_mayo_de_2022.mp3" type="audio/mp3">Tu navegador no soporta audio HTML5.</audio>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseAbril2022" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Abril
							</a>
						</div>
						<div id="collapseAbril2022" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">III Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/III_sesión_8_de_abril_2022.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio>
							<br>
							<span class="text-dark font-weight-bold">IV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/IV_sesión_29_de_abril_2022.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseMarzo2022" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Marzo
							</a>
						</div>
						<div id="collapseMarzo2022" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">II Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/II_sesión_18_de_marzo_2022.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseFebrero2022" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Febrero
							</a>
						</div>
						<div id="collapseFebrero2022" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">I Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2022/I_sesión_25_de_febrero_CD_2022.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio>
						</div>

				</div>
			</div>-->
			<!-- 2022 -->

			<!-- 2021 -->
			<!--
			<p class="text-dark font-weight-bold">Año 2021</p>
			<div id="accordion">
				<div class="card border-0 shadow-none rounded-0 accordion">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Marzo2021" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
							Marzo
							</a>
						</div>
						<div id="Marzo2021" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">I Sesión Ordinaria - Parte I</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/I_Sesión_Ordinaria_Parte_ I _5_de_marzo_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>
							
							<span class="text-dark font-weight-bold">I Sesión Ordinaria - Parte II</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/I_Sesión_Ordinaria_Parte_II_5_de_marzo_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>
							
							<span class="text-dark font-weight-bold">II Sesión Ordinaria - Parte I</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/II_Sesión_Ordinaria_19_de_marzo_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseAbril2021" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Abril
							</a>
						</div>
						<div id="collapseAbril2021" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">III Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/III_Sesión_Ordinaria_9_de_abril_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>

							<span class="text-dark font-weight-bold">IV Sesión Ordinaria - Parte I</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/IV_Sesión_Ordinaria_Parte_I_23_de_abril_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>

							<span class="text-dark font-weight-bold">IV Sesión Ordinaria - Parte II</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/IV_Sesión_Ordinaria_Parte_II_23_de_abril_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseMayo2021" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Mayo
							</a>
						</div>
						<div id="collapseMayo2021" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">V Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/V_Sesión_Ordinaria_7_de_mayo_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>

							<span class="text-dark font-weight-bold">VI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/VI_Sesión_Ordinaria_21_de_mayo_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>
						</div>				

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseJunio2021" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Junio
							</a>
						</div>
						<div id="collapseJunio2021" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">VII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/VII_Sesión_Ordinaria_4_de_junio_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>

							<span class="text-dark font-weight-bold">VIII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/VIII_Sesión_Ordinaria_18_de_junio_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseJulio2021" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Julio
							</a>
						</div>
						<div id="collapseJulio2021" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">IX Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/IX_Sesión_Ordinaria_2_de_julio_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Agosto2021" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Agosto
							</a>
						</div>
						<div id="Agosto2021" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">X Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/X_Sesión_Ordinaria_6_de_agosto_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>

							<span class="text-dark font-weight-bold">XI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/XI_Sesión_Ordinaria_20_de_agosto_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Septiembre2021" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Septiembre
							</a>
						</div>
						<div id="Septiembre2021" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/XII_Sesión_Ordinaria_3_de_septiembre_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>

							<span class="text-dark font-weight-bold">XIII Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/XIII_Sesión_Ordinaria_24_de_septiembre_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#collapseOctubre2021" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Octubre
							</a>
						</div>
						<div id="collapseOctubre2021" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XIV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/XIV_Sesión_Ordinaria_22_de_octubre_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Noviembre2021" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Noviembre
							</a>
						</div>
						<div id="Noviembre2021" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XV Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/XV_Sesión_Ordinaria_5_de_noviembre_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>							
						</div>

						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Diciembre2021" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Diciembre
							</a>
						</div>
						<div id="Diciembre2021" class="card-body collapse" data-parent="#accordion">
							<span class="text-dark font-weight-bold">XVI Sesión Ordinaria</span><br>
							<audio controls=""><source src="./slim/consejo/audios/2021/XVI_Sesión_Ordinaria_3_de_diciembre_de_2021.m4a" type="audio/mp4">Tu navegador no soporta audio HTML5.</audio><br><br>							
						</div>

				</div>
			</div>-->
		<!-- 2021 -->		
		
		</div>
		<!-- Audios -->
		

		</div>
		</div>
	</div>
</div>


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
