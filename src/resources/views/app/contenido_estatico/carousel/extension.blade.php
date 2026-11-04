@extends('app.slim.layouts.home')

@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text pt-3">
					<p>
						<span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                        <span class="b-active pb-0">Extensión Universitaria</span>
                    </p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
	<style>
		.accordion .card-header:after {
			font-family: 'FontAwesome';  
			content: "\f0aa";
			float: right;
			color: black;
		}
		.accordion .card-header.collapsed:after {
			/* symbol for "collapsed" panels */
			content: "\f0ab";
			color: black;
		}
	</style>	
</header>
<section class="contact-area-02">
	<div class="container">
		
		<div class="row pb-4">
			<div class="col-12 d-flex justify-content-end">
                <div>
                    <audio style="height: 2rem;" controls=""><source src="../slim/audios-web/extension-universitaria.wav" type="audio/wav">Tu navegador no soporta audio HTML5.</audio><br>
                </div>
            </div>			
			<h3 class="pt-0 pl-3">Extensión Universitaria</h3>
            <div class="col-12">
				<p class="text-justify">
					Desde la Facultad de Ciencias Humanas entendemos la educación universitaria en relación con nuestra sociedad y, 
					por ende, procuramos establecer puentes que habiliten el diálogo, la participación y la atención de demandas 
					concretas en el territorio, a través de propuestas que nos permitan aportar herramientas metodológicas y conceptuales 
					para realizar diagnósticos e intervenir de manera cooperativa junto a otras instituciones en situaciones complejas y 
					asuntos que interpelan a la comunidad pampeana. La pospandemia, la problemática de los ríos, el pasado y el presente de 
					los pueblos indígenas, la elaboración de protocolos que abordan la perspectiva de género, la violencia y la inclusión, la 
					Educación Sexual Integral y los complejos escenarios educativos, son algunos de los ejes sobre los cuales se trabaja con 
					una impronta de extensión, a partir de la aprobación de iniciativas que favorecen la participación de 
					estudiantes, graduadas, graduados, docentes y nodocentes, que aportan a la comunidad. Al mismo tiempo, esas prácticas de extensión 
					permiten una Universidad abierta, que articula e integra temas de la agenda social.                   
                </p>
			</div>
		</div>

		<!-- Comunicados y Convocatorias -->		
		<div class="row pb-4">
			<h3 class="pt-0 pl-3">Comunicados</h3>			
			<div class="col-12">

				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Comunicados" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Comunicados
							</a>
						</div>
						<div id="Comunicados" class="card-body collapse" data-parent="#accordion">
							<span class="font-weight-bold">CONVOCATORIA 2022 DE ACCIONES DE EXTENSIÓN UNIVERSITARIA DE LA FACULTAD DE CIENCIAS HUMANAS</span><br><br>
							Acta Presentaciones registradas en la convocatoria 2022 de acciones de extensión universitaria de la Facultad de Ciencias Humanas (AEU HUMANAS) aprobada por<br>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2021_513.pdf" target="_blank">Res. 513-CD-21</a><br>
							<hr>
							<span class="font-weight-bold">CONVOCATORIA 2021 DE ACCIONES DE EXTENSIÓN UNIVERSITARIA DE LA FACULTAD DE CIENCIAS HUMANAS</span><br><br>
							Acta Presentaciones registradas en la convocatoria 2021 de acciones de extensión Universitaria de La Facultad de Ciencias Humanas (AEU HUMANAS) Aprobada por<br> 
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2021_316.pdf" target="_blank">Res. 316-CD-21</a><br>
						</div>

					</div>																																									
				</div>				
			</div>
		</div>
		<!-- Comunicados y Convocatorias -->


		<!-- Registro descriptivo de iniciativas de Extensión Universitaria de la FCH-UNLPam (2003-2006) -->		
		<div class="row pb-4">
			<h3 class="pt-0 pl-3">Registro descriptivo de iniciativas de Extensión Universitaria de la FCH-UNLPam (2003-2006)</h3>
			<div class="col-12">
					<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Anexo" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Anexo
							</a>
						</div>
						<div id="Anexo" class="card-body collapse" data-parent="#accordion">
							<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1kJcRVv2mQ38lhZ6MnFCHIPGpaoi-NdNd/view?usp=drive_link" target="_blank">Anexo: Registro descriptivo de iniciativas de Extensión Universitaria de la FCH-UNLPam (2003-2006)</a><br>
						</div>
					</div>																																									
				</div>				
			</div>
		</div>
		<!-- Registro descriptivo de iniciativas de Extensión Universitaria de la FCH-UNLPam (2003-2006) -->



		<!-- Actividades Vigentes -->		
		<div class="row pb-4">
			<h3 class="pt-0 pl-3">Actividades de Extensión Universitaria</h3>
			<!--<h3 class="pt-0 pl-3">Actividades de Extensión Universitaria desde 2021</h3>-->			
			<div class="col-12">
				<!-- Convocatorias 2023 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item3" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								EU Humanas 2023<!--Acciones de Extensión Universitaria 2022-->
							</a>
						</div>
						<div id="item3" class="card-body collapse" data-parent="#accordion">
							<i class="fa fa-link" aria-hidden="true"></i>
							<a href="https://memoriasmaricas.humanas.unlpam.edu.ar/" target="_blank">
								 EU HUMANAS “Memorias Maricas Pampeanas. Memoria e historia del colectivo LGTBINBQ+ de La Pampa”. 
							</a><br><hr>
						</div>
				<!-- Convocatorias 2023 -->	
				<!-- Convocatorias 2022 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<!--
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item1" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								EU Humanas 2022
							</a>
						</div>
						<div id="item1" class="card-body collapse" data-parent="#accordion">
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2022_358.pdf" target="_blank">
								EU HUMANAS “Aprender jugando”. 
							</a><br><hr>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2022_358.pdf" target="_blank">							
								EU HUMANAS "Gestión colectiva del hábitat y producción agroecológica. Una contribución desde la extensión universitaria al reconocimiento de la comunidad `El Amanecer´ y de formas `otras´ de habitar la ciudad de Santa Rosa”
							</a><br><hr>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2022_358.pdf" target="_blank">							
								EU HUMANAS “Te conozco, te valoro... una experiencia colaborativa para fomentar la recreación y el turismo responsable en el pueblo ferroviario de Hucal”.
							</a><br><hr>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2022_358.pdf" target="_blank">
								EU HUMANAS “Historias e identidades teñidas de `rojo´: acciones para preservar y resguardar el patrimonio documental del Club Atlético Macachín”
							</a><br><hr>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2022_358.pdf" target="_blank">
								EU HUMANAS “Conocer (nos), Reconocer (nos) y Cuestionar (nos): educándonos en DDHH y ESI”
							</a><br><hr>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2022_358.pdf" target="_blank">							
								EU HUMANAS “100 años de cultura popular. Puesta en valor y difusión de documentos culturales en localidades pampeanas”
							</a><br><hr>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2022_358.pdf" target="_blank">							
								EU HUMANAS “Tejiendo redes: patrimonio en territorio. Pasos para una Arqueología Pública en La Pampa”
							</a><br><hr>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2022_358.pdf" target="_blank">							
								EU HUMANAS “Malvinas, Memorias en disputa”
							</a><br><hr>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2022_358.pdf" target="_blank">							
								EU HUMANAS “Jóvenes preuniversitarixs como protagonistas en la promoción de la Salud”
							</a><br><hr>
						</div>
						-->
				<!-- Convocatorias 2022 -->					
				<!-- Convocatorias 2021 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<!--
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#item2" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								EU Humanas 2021
							</a>
						</div>
						<div id="item2" class="card-body collapse" data-parent="#accordion">
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2021_764.pdf" target="_blank">
								EU HUMANAS “Acompañamiento a las trayectorias escolares de estudiantes del Nivel de Educación Primaria y Educación Secundaria del Barrio Malvinas”.
							</a><br><hr>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2021_764.pdf" target="_blank">
								EU HUMANAS “Adolescencias/juventudes y canciones en inglés: explorando nexos para la enseñanza post-pandemia.”								
							</a><br><hr>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2021_764.pdf" target="_blank">
								EU HUMANAS “Socialización, impacto y apropiación de materiales audiovisuales en instituciones educativas.”
							</a><br><hr>
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2021_764.pdf" target="_blank">
								EU HUMANAS “Aprender a escribir y escribir para aprender. Acuerdos docentes sobre la enseñanza de la escritura”
							</a><br>
						</div>
						-->
				<!-- Convocatorias 2021 -->																																																													
				</div>				
			</div>
		</div>
		<!-- Comunicados y Convocatorias -->
		
		<!-- Actividades Concluidas -->
		<div class="row pb-4">
			<!--<h3 class="pt-0 pl-4">Actividades de Extensión Universitaria hasta 2020</h3>-->
			<div class="col-12">
				<!-- Programas -->
				<div id="accordion">
					<!--<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Programas" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Programas
							</a>
						</div>
						<div id="Programas" class="card-body collapse text-justify" data-parent="#accordion">
						<span class="font-weight-bold">El cine como herramienta para la educación, el debate y construcción de la memoria</span>
						<ul>
							<li>“El cine como herramienta para la enseñanza de la Historia”</li>
							<li>“El cine como herramienta para la comprensión de la sociedad”</li>
							<li>“El cine como herramienta para el debate y la construcción de la memoria”</li>		
						</ul>				
						<i class="fas fa-file-pdf text-danger"></i><a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2015_479.pdf" target="_blank"> Res. 479 </a>- Programa de Extensión "El cine como herramienta para la educación, el debate y construcción de la memoria", dirigido por la Prof. Silvia CROCHETTI.<br>
						<hr>
						<span class="font-weight-bold">Las identidades religiosas de los pampeanos: historia y actualidad</span><br>
						<i class="fas fa-file-pdf text-danger"></i><a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2015_477.pdf" target="_blank"> Res. 477 </a>- Programa de Extensión “Las identidades religiosas de los pampeanos: historia y actualidad”.<br>
					</div>-->
				<!-- Programas -->
				<!-- Proyectos -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Proyectos" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Proyectos
							</a>
						</div>
						<div id="Proyectos" class="card-body collapse" data-parent="#accordion">
						<i class="fa fa-link" aria-hidden="true"></i><a href="https://www.humanas.unlpam.edu.ar/coleccion-enriqueta-schmidt/index.html" target="_blank"> Colección Fotográfica Enriqueta Schmidt - 1892 -1911 - Santa Rosa, La Pampa</a><br>
						<hr>
						<i class="fa fa-link" aria-hidden="true"></i><a href="https://catalogoregional.wordpress.com/" target="_blank"> Catálogo sobre Historia Regional</a><br>
						<hr>
						<i class="fa fa-plus" aria-hidden="true"></i><a href="{{route('extension.proyecto-de-digitalizacion')}}"> Proyecto de Digitalización y Preservación del Material Documental y Bibliográfico de la Historia de La Pampa</a>
						<hr>
						<!--
						<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2016_90.pdf" target="_blank">Proyecto de Extensión “El juego en la construcción de conocimiento matemático, para una mayor inclusión en la educación secundaria obligatoria”.</a><br>
						<hr>
						<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2016_201.pdf" target="_blank">Proyecto de Extensión “Acompañamiento en el diseño de actividades de Educación Sexual Integral en las escuelas primarias en el nivel inicial”.</a><br>
						<hr>
						<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2016_203.pdf" target="_blank">Proyecto de formación, extensión y actualización ICEII 2016 “Educación y derechos: Pensar la enseñanza desde el conflicto”.</a><br>
						<hr>
						<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2015_476.pdf" target="_blank">Proyecto de Extensión “Tomar la palabra. Una propuesta de formación en educación sexual integral y de acompañamiento escolar a adolescentes embarazadas y madres en la escuela secundaria”.</a><br>
						<hr>
						<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2015_478.pdf" target="_blank">Proyecto de Extensión “Desentramando la violencia a través del arte. Cine, música, pintura y literatura en El Escondido”.</a><br>
						-->
						</div>
				<!-- Proyectos -->
				<!-- Acciones -->
				<div id="accordion">
					<!--<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Acciones" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
							Acciones
							</a>
						</div>
						<div id="Acciones" class="card-body collapse" data-parent="#accordion">
							<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2016_390.pdf" target="_blank">"La Infancia en Movimiento"</a>
						</div>-->
				</div>				
				<!-- Acciones -->
			</div>
		</div>
		<!-- Actividades Concluidas -->
	</div>
</section>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
	$('body').addClass('contact');
});
</script>
@endsection

