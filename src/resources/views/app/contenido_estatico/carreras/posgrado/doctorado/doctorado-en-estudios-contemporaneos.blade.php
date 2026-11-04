@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
                                    <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{route('carreras.posgrado.carreras-posgrado')}}">Carreras de Posgrado <i class='fa fa-angle-right'></i></a></span>
									<span class="b-active">Doctorado en Estudios Contemporáneos en Educación</span>
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
			<h3>Posgrado</h3>
		</div>
		<div class="nav flex-column nav-pills col-12 col-xl-4 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<!--<a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Inscripción</a>-->
			<a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Sobre la carrera</a>
			<a class="nav-link" id="v-pills-alcances-tab" data-toggle="pill" href="#v-pills-alcances" role="tab" aria-controls="v-pills-alcances" aria-selected="false">Plan de estudios</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Perfil del título</a>
		</div>
		<div class="col-12 d-xl-none">
			<hr>
		</div>
		<div class="tab-content col-12 col-xl-8 col-lg-8 mb-5" id="v-pills-tabContent">
			<div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<p class="text-justify text-dark">
								<h3>Inscripción</h3>
								<b class="text-dark">
								<!--La Secretaría de Investigación y Posgrado de la Facultad de Ciencias Humanas informa que ya está abierta la inscripción al Doctorado en Estudios Contemporáneos en Educación.<br>
								El período de inscripción estará abierto hasta el 16 de diciembre de 2024.-->
								La Secretaria de Investigación y Posgrado informa que se extiende el período de inscripción para el Doctorado en Estudios Contemporáneos en Educación hasta el 28 de febrero.
								</b>
								<br><br>
								<b class="text-dark">1) El enlace para realizar la inscripción en el sistema Guaraní de la Universidad Nacional de Río Negro:</b>
								<a href="https://www.unrn.edu.ar/noticias/Esta-abierta-la-inscripcion-para-el-Doctorado-en-Estudios-Contemporaneos-en-Educacion-4221" target="_blank">link</a>
								<br>
								Al final de la página, encuentran el link a la inscripción en el botón Inscribirse ahora.<br>
								En la inscripción en Guaraní, deben seleccionar la opción "Sede Atlántica ATL" para que aparezca la carrera y seleccionarla.<br>
								<br>
								<b class="text-dark">2) Un instructivo de inscripción en sistema Guaraní UNRN. Lo enviamos adjunto en este mail y en este enlace:</b>
								<a href="https://www.youtube.com/watch?v=vN3Xgs7gHZo" target="_blank">link</a> 
								<br>
								<br>
								<b class="text-dark">3) Datos de las universidades para certificar copias de títulos.</b><br>
								En la inscripción, los/las postulantes deben presentar copias certificadas de sus títulos (diploma y analítico). Les acercamos los datos de las universidades en las que pueden realizar este trámite. Adjuntamos archivo con estos datos.<br>
								<a href="../../../slim/images/index/posgrado/DECE - certificación copias de títulos.pdf" target="_blank">Certificación copias de Títulos</a><br>
								<a href="../../../slim/images/index/posgrado/Instructivo inscripción Doctorado DECE.mp4" download>Instructivo inscripción Doctorado</a>
								<br>
							</p>
						</div>
						<div class="col-12 d-flex justify-content-center">
							<a href="../../../slim/images/index/doctorado-en-estudios-contemporaneos-flyer-diciembre.jpg" download>
                                <img class="img-fluid mb-1" style="height: 400px" src="../../../slim/images/index/doctorado-en-estudios-contemporaneos-flyer-diciembre.jpg" alt="Doctorado en estudios contemporáneos">
                            </a>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<p class="text-justify text-dark text-justify">
								<h3>INSCRIPCIÓN</h3>
								Cerrada<br>
								<br>
								<h3>Acreditación</h3>
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://www.unrn.edu.ar/archivos/planes/95/RES%20CSPyGE%20N%C2%BA%20013-23%20-%20Crea%20el%20Doctorado%20en%20Estudios%20Contempor%C3%A1neos%20en%20Educaci%C3%B3n.pdf?v=1715952057" target="_blank">
									RES CSPyGE Nº 013-23 - Crea el Doctorado en Estudios Contemporáneos en Educación
								</a>
								<br>								
								<i class="fas fa-file-pdf text-danger"></i>
								<a href="https://www.unrn.edu.ar/archivos/planes/95/Dictamen%20CONEAU_2023_48233351_APN_DAC.pdf?v=1715952606" target="_blank">
									Dictamen CONEAU_2023_48233351_APN_DAC
								</a>								
								<br><br>

								<h3>Reglamento de la Carrera</h3>
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/185g76zBVsXueG5tot1MoXBkZH98fYZHp/view?usp=drive_link" target="_blank">
									Descargar
								</a>
								<br><br>

								<h3>Aranceles</h3>
								<i class="fas fa-file-pdf text-danger"></i> 
								<a href="https://drive.google.com/file/d/13Yvs1ipiz2tkrFr3Puc_WMMk90Ski8I5/view?usp=drive_link" target="_blank">
									Descargar
								</a>								
								<br><br>

								<h3>Título</h3>
								Doctor/a en Estudios Contemporáneos en Educación <br>
								<br>

								<h3>Modalidad</h3>
								Presencial (con mediación tecnológica)<br>
								<br>								

								

								<h3>Duración</h3>
								4 años (3 años de cursado y 1 año a partir de la finalización del cursado para la presentación de la tesis doctoral)
								<br><br>
								<h3>Carrera Interinstitucional</h3>
								Universidad Nacional de Río Negro<br>
								Universidad Nacional de la Patagonia San Juan Bosco<br>
								Universidad Nacional de la Patagonia Austral<br>
								Universidad Nacional de La Pampa<br>
								Universidad Nacional de Tierra Del Fuego, Antártida e Islas del Atlántico Sur<br>
								<br>
								El presente Doctorado ofrece una formación de posgrado del máximo nivel académico en una ecología de saberes situada en la educación. Tiene como centro la producción y la gestión del conocimiento en todas sus dimensiones (docencia, investigación, vinculación, gestión, evaluación, regulación, internacionalización y virtualización) en las instituciones de educación, en tanto la formación de recursos humanos.<br> 
								La creación del doctorado interinstitucional busca potenciar y fomentar el desarrollo de formación de investigadores/ras, articular centros de investigación de las universidades patagónicas a partir de la masa crítica de profesionales dispuestos/as a desarrollar el doctorado. Para ello es clave las capacidades adquiridas por cada universidad patagónica, tanto en el desarrollo de sus docentes como posgraduados/as e investigadores/as. En este sentido, se aspira tanto al desarrollo de capacidades críticas en la gestión institucional como a la formación de capacidades de investigación para alcanzar un nivel de formación doctoral que califique la actividad de los graduados/as al frente de proyectos de gestión e investigación, formando, de esta manera, profesionales capaces de actualizar y profundizar en forma permanente los saberes del campo disciplinar en el que se desempeñan. Esta propuesta de carrera de doctorado pone énfasis en capacitar en la comprensión de la complejidad de la educación, sus relaciones con aquellos temas contemporáneos dominantes y en formar a los/as doctorandos/as para identificar y conocer problemas cruciales, así como sus formas de aprehensión epistemológica y metodológica para potenciar la construcción de relatos o textos explicativos de fenomenología que posibiliten describir estados de situación y proponer vías innovadoras de solución o mejoramiento.<br>
								<br>
								<h3>Objetivos de la carrera</h3>
								- Contribuir a la profesionalización de la investigación educativa en la región patagónica y en el país, por medio de una propuesta pedagógica integral y tutorial que asegura la formación en las prácticas y el oficio de investigador/a.<br>
								- Formar doctores/as capaces de analizar críticamente la complejidad de los problemas y desafíos que presentan los procesos educativos en América Latina.<br>
								- Brindar una sólida formación teórica y metodológica para la investigación en educación, que ubique a los/as graduados/as en posiciones de relevancia para la dirección de proyectos de investigación, y la producción de conocimiento científico útil para las políticas y procesos educativos y pedagógicos, en diálogo con la investigación previa y propia de cada subcampo disciplinario o temático.<br>
								<br>
								<h3>Requisitos de ingreso y egreso </h3>
								Los/as postulantes deberán contar con titulación de grado universitario o superior no universitaria de cuatro años o más de duración. Se espera que sean graduados/as de cualquier disciplina de las ciencias sociales y humanas interesados/as en una formación intensiva e integral en la investigación educativa. Graduados/as de otros campos disciplinares y áreas del conocimiento podrán ser admitidos/as en función de la evaluación que realice el Comité Académico sobre su propuesta de investigación y su trayectoria previa.<br>
								En caso de poseer título expedido por una universidad extranjera, deberá ser presentado con la correspondiente legalización según lo establece la normativa vigente en el país.<br>
								<br>
								<h3>Para obtener el título de Doctor/a en Educación el/la estudiante deberá:</h3>
								- Aprobar la totalidad de las actividades curriculares obligatorias determinadas en el Plan de Estudios.<br>
								- Aprobar y defender la Tesis Doctoral.<br>
							</p>
						</div>						
					</div>
				</div>
			</div>

			<div class="tab-pane fade mx-2" id="v-pills-alcances" role="tabpanel" aria-labelledby="v-pills-alcances-tab">
				<div class="container">
					<div class="row">
						<div class="col-12">
						<p class="text-justify text-dark">
							<h3>Plan de estudios: semiestructurado.</h3>
							Se compone de doce espacios obligatorios (seminarios, talleres de tesis y jornadas de tesistas) y tres espacios optativos (seminarios).
							<br><br>
							<h3>Asignaturas obligatorias:</h3> 
							Políticas y Sistemas educativos en América Latina<br> 
							Teorías de la Educación<br>
							Perspectivas Contemporáneas en Curriculum y Didáctica Perspectivas Contemporáneas en Estudios sobre los Aprendizajes<br>
							Metodología de la Investigación Educativa<br> 
							Producción Científica y Tecnológica en Argentina y América Latina<br>
							Taller de Tesis I<br> 
							Taller de Tesis II<br> 
							Taller de Tesis III<br> 
							I Jornada Anual de Doctorandos/as<br> 
							II Jornada Anual de Doctorandos/as<br> 
							III Jornada Anual de Doctorandos/as<br> 
							<br>
							Asignaturas de cursado electivo: Se requiere cursar tres seminarios. 
							<br><br>
							<h3>Tesis</h3>
						</p>				
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane fade mx-2" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<div class="container">
					<div class="row">
						<div class="col-12">
						<p class="text-justify text-dark">
							<h3>Perfil del título</h3>
							<div class="text-justify">
								Los/as Doctores/as en Estudios Contemporáneos en Educación poseerán un profundo conocimiento de los enfoques teóricos y metodológicos para el desarrollo de la investigación educativa, lo que les permitirá desarrollar proyectos de investigación individuales y colectivos bajo su dirección. Habrán adquirido los conocimientos teóricos y prácticos del oficio necesarios para desempeñarse como investigadores/as que pueden elaborar proyectos, desarrollar trabajo de campo, escribir informes, tesis y artículos, comunicar la producción científica y construir conocimiento situado en una posición ética y política sobre la relevancia del conocimiento científico para comprender y transformar la realidad educativa. Estarán preparados/as para integrar equipos de investigación pluridisciplinarios. Habrán accedido a una formación que los habilitará a establecer diálogos con otros campos del saber e investigadores/as de otras áreas y disciplinas. Tendrán conocimiento del funcionamiento del sistema científico, de las reglas, códigos y prácticas que definen a una comunidad de investigadores/as.
							</div>
						</p>				
						</div>
					</div>
				</div>
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