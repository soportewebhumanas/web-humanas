@extends('app.slim.layouts.home')

@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text pt-3">
						<p>
							<span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> 
							<span><a href="{{route('ingresantes.inicio')}}">Ingresantes <i class='fa fa-angle-right'></i></a></span> 
							<span class="b-active">Preguntas Frecuentes</span>
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
			<h3 class="text-justify col-12">Preguntas Frecuentes</h3>
			<div class="col-12">
				<!-- Pregunta 1 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta1" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Me puedo inscribir en varias carreras?
							</a>
						</div>
						<div id="Pregunta1" class="card-body collapse" data-parent="#accordion">
							Te podés inscribir en todas las carreras que quieras.
						</div>
				<!-- Pregunta 1-->

				<!-- Pregunta 2 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta2" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Se pueden realizar dos carreras en forma paralela?
							</a>
						</div>
						<div id="Pregunta2" class="card-body collapse" data-parent="#accordion">
							Se pueden realizar dos o más carreras en forma paralela.
						</div>
				<!-- Pregunta 2-->

				<!-- Pregunta 29-->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta29" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Para ingresar a la Facultad, ¿tengo que rendir un examen de inglés?
							</a>
						</div>
						<div id="Pregunta29" class="card-body collapse" data-parent="#accordion">
							Solo las/os aspirantes a las carreras de Inglés deberán rendir un test diagnóstico.
						</div>
				<!-- Pregunta 29-->

				<!-- Pregunta 3 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta3" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Si adeudo materias del colegio secundario, ¿me puedo inscribir igual en una carrera?
							</a>
						</div>
						<div id="Pregunta3" class="card-body collapse" data-parent="#accordion">
							En caso que adeudes materias del secundario, podés inscribirte en la carrera que desees con una constancia de las materias adeudas emitida por el colegio. Tenés tiempo de aprobarlas hasta el 30 de abril.
						</div>
				<!-- Pregunta 3-->

				<!-- Pregunta 4 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta4" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Qué requisitos necesito para inscribirme en una carrera?
							</a>
						</div>
						<div id="Pregunta4" class="card-body collapse" data-parent="#accordion">
							<ul class="text-justify">
                                    <li>Imagen de: copia de Documento Nacional de Identidad certificada por Escribano Público, Juez de Paz o Policía (formato foto digital o pdf).</li> 
                                    <li>Foto color de perfil derecho sobre fondo azul celeste.</li> 
                                    <li>Imagen de: copia del Título de aprobación de Nivel Secundario o Nivel Equivalente certificada por Escribano Público, Juez de Paz o Policía; en caso de no tener aún el título; se deberá adjuntar una Constancia de finalización de cursada o una Constancia de título en trámite, cualquiera sea el caso debe ser el original entregado por el colegio. No se aceptan certificado de alumno regular.</li>
                                    <li>o imagen de: Certificado de Aprobación para el Ingreso a la Universidad de acuerdo a la excepción establecida en el Artículo 7º dela Ley Nº 24.521 de Educación Superior. (formato foto digital o pdf).</li>
                            </ul>
						</div>
				<!-- Pregunta 4-->

				<!-- Pregunta 5 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta5" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Cómo me informo en qué aula curso?
							</a>
						</div>
						<div id="Pregunta5" class="card-body collapse" data-parent="#accordion">
							Al momento de inscribirte en SIU Guaraní y luego de elegir comisión a la que asistirás, te aparece el aula en la que se dictará la asignatura.
						</div>
				<!-- Pregunta 5-->

				<!-- Pregunta 6 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta6" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
							¿Cómo se aprueba una asignatura?
							</a>
						</div>
						<div id="Pregunta6" class="card-body collapse" data-parent="#accordion">
							Las asignaturas se aprueban por promoción en las materias que así lo tengan definido en el programa de estudios, o por examen final dentro de los llamados destinados a tal fin.
						</div>
				<!-- Pregunta 6-->

				<!-- Pregunta 7 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta7" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Qué implica regularizar una asignatura?
							</a>
						</div>
						<div id="Pregunta7" class="card-body collapse" data-parent="#accordion">
							Implica que tenés aprobada la cursada de la asignatura y solo te resta aprobar el final de la misma. La vigencia de la regularidad es por dos años.
						</div>
				<!-- Pregunta 7-->

				<!-- Pregunta 8 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta8" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Es lo mismo hablar de SIU Guaraní y campus virtual?
							</a>
						</div>
						<div id="Pregunta8" class="card-body collapse" data-parent="#accordion">
							No. El SIU Guaraní es el sistema que utilizas a lo largo de toda la carrera para realizar los trámites administrativos (inscripciones en cursadas, certificados, inscripciones en exámenes, reinscripción, etc). El campus virtual o Moodle es una plataforma educativa que permite brindar capacitación y formación a través de los recursos tecnológicos que ofrece internet.
						</div>
				<!-- Pregunta 8-->
				<!-- Pregunta 9 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta9" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Me tengo que inscribir en teóricos y prácticos?
							</a>
						</div>
						<div id="Pregunta9" class="card-body collapse" data-parent="#accordion">
							Todas las asignaturas tienen comisiones de Teóricos y Prácticos. Siempre te debés inscribir y asistir a las dos instancias.
						</div>
				<!-- Pregunta 9-->

				<!-- Pregunta 10 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta10" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Qué implica promocionar una asignatura?
							</a>
						</div>
						<div id="Pregunta10" class="card-body collapse" data-parent="#accordion">
							Implica que la asignatura ya está aprobada y no debes rendir examen final.
						</div>
				<!-- Pregunta 10-->
				<!-- Pregunta 11 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta11" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Cuándo puedo pedir el certificado de alumno regular?
							</a>
						</div>
						<div id="Pregunta11" class="card-body collapse" data-parent="#accordion">
							El certificado de alumno regular podés pedirlo cuando aprobaste dos finales el año anterior a la reinscripción o dos finales desde el 01/02 hasta el 30/06.
						</div>
				<!-- Pregunta 11-->

				<!-- Pregunta 12 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta12" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Cómo pido el certificado de alumno regular?
							</a>
						</div>
						<div id="Pregunta12" class="card-body collapse" data-parent="#accordion">
							Entrando al sistema SIU Guaraní, Solicitud de certificados; colocar EMITIR.
						</div>
				<!-- Pregunta 12-->
				<!-- Pregunta 13 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta13" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Mientras tanto ¿Qué certificado me puede emitir la Facultad?
							</a>
						</div>
						<div id="Pregunta13" class="card-body collapse" data-parent="#accordion">
							Si no podés pedir el certificado de alumno regular, se te puede otorgar el certificado de estudiante. Los ingresantes a una carrera, durante el primer año de la misma, solo pueden solicitar certificado de estudiante.
						</div>
				<!-- Pregunta 13-->

				<!-- Pregunta 14 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta14" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Cómo pido el certificado de estudiante?
							</a>
						</div>
						<div id="Pregunta14" class="card-body collapse" data-parent="#accordion">
								Podés solicitarlo al Departamento Estudiante de la sede a la que perteneces a través de los siguientes correos:<br>
                                Sede General Pico: <a href="mailto:departamentoestudiantesgp@humanas.unlpam.edu.ar">departamentoestudiantesgp@humanas.unlpam.edu.ar</a><br>
                                Sede Santa Rosa: <a href="mailto:departamentoestudiantes@humanas.unlpam.edu.ar">departamentoestudiantes@humanas.unlpam.edu.ar</a><br><br>
						</div>
				<!-- Pregunta 14-->
				<!-- Pregunta 15 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta15" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Qué es reinscribirse?
							</a>
						</div>
						<div id="Pregunta15" class="card-body collapse" data-parent="#accordion">
							Manifestar a voluntad - a través de la reinscripción anual- de continuar los estudios.<br><br>
						</div>
				<!-- Pregunta 15-->

				<!-- Pregunta 16 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta16" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Si figuro como no regular y no me puedo reinscribir ¿qué trámite debo realizar?
							</a>
						</div>
						<div id="Pregunta16" class="card-body collapse" data-parent="#accordion">
							Tenés que enviar el formulario de Convalidación al correo electrónico al Departamento Estudiante de la sede a la que perteneces.
						</div>
				<!-- Pregunta 16-->
				<!-- Pregunta 17 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta17" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Dónde obtengo los formularios para los trámites?
							</a>
						</div>
						<div id="Pregunta17" class="card-body collapse" data-parent="#accordion">
							Tenés que entrar a la página de la Facultad, acceder a la Sección Estudiantes, Certificados y Formularios.
						</div>
				<!-- Pregunta 17-->

				<!-- Pregunta 18 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta18" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Cuántas veces puedo rendir una misma materia?
							</a>
						</div>
						<div id="Pregunta18" class="card-body collapse" data-parent="#accordion">
							Las materias se pueden rendir todas las veces que sean necesarias hasta su aprobación.
						</div>
				<!-- Pregunta 18-->
				<!-- Pregunta 19 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta19" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Qué es una reválida?
							</a>
						</div>
						<div id="Pregunta19" class="card-body collapse" data-parent="#accordion">
							Una reválida es la prórroga de la vigencia de la regularidad.
						</div>
				<!-- Pregunta 19-->

				<!-- Pregunta 20 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta20" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿La reválida debo pedirla antes del fin de vigencia de la cursada?
							</a>
						</div>
						<div id="Pregunta20" class="card-body collapse" data-parent="#accordion">
							La reválida se puede pedir una vez que la regularidad de la asignatura esté vencida. Se recomienda solicitarla cuando estás decidido a rendir el examen, antes del llamado, ya que se puede solicitar una única vez en cada asignatura.
						</div>
				<!-- Pregunta 20-->
				<!-- Pregunta 21 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta21" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Qué es el EPSA?
							</a>
						</div>
						<div id="Pregunta21" class="card-body collapse" data-parent="#accordion">
							El EPSA es el Examen Preventivo de Salud. Es obligatorio para las y los ingresantes a una carrera universitaria. Incluye un conjunto de estudios tales como: examen odontológico, vacunación vigente, análisis de laboratorio, estudio visual, electrocardiograma, y examen clínico final.
						</div>
				<!-- Pregunta 21-->

				<!-- Pregunta 22 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta22" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Todos los años debo realizar el EPSA?
							</a>
						</div>
						<div id="Pregunta22" class="card-body collapse" data-parent="#accordion">
							Los estudios médicos se presentan por única vez cuando te inscribís en una carrera universitaria. Tiene una duración de 5 años.
						</div>
				<!-- Pregunta 22-->
				<!-- Pregunta 23 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta23" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Si tengo un título terciario o universitario ¿puedo pedir equivalencia?
							</a>
						</div>
						<div id="Pregunta23" class="card-body collapse" data-parent="#accordion">
							Podés pedir equivalencia una vez que te hayas inscripto en la carrera, consultando los pasos a seguir a través del correo del Departamento de Estudiantes.
						</div>
				<!-- Pregunta 23-->

				<!-- Pregunta 24 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta24" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿Puedo inscribirme a una materia si adeudo una correlativa?
							</a>
						</div>
						<div id="Pregunta24" class="card-body collapse" data-parent="#accordion">
							Si adeudas una o dos correlativas, podés solicitar inscripción condicional.
						</div>
				<!-- Pregunta 24-->
				<!-- Pregunta 25 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta25" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								¿La Facultad dicta carreras bajo la modalidad a distancia?
							</a>
						</div>
						<div id="Pregunta25" class="card-body collapse" data-parent="#accordion">
							Si, la Licenciatura en Ciencias de la Educación.
						</div>
				<!-- Pregunta 25-->

				<!-- Pregunta 26 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta26" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								La cursada de la Licenciatura en Ciencias de la Educación, ¿posee una cursada 100 por ciento virtual?
							</a>
						</div>
						<div id="Pregunta26" class="card-body collapse" data-parent="#accordion">
							No, es semipresencial, con tres encuentros por cuatrimestres en la Sede General Pico.
						</div>
				<!-- Pregunta 26-->

				<!-- Pregunta 27 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta27" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Los exámenes finales de la Licenciatura en Ciencias de la Educación a distancia, ¿son 100 por ciento virtuales?
							</a>
						</div>
						<div id="Pregunta27" class="card-body collapse" data-parent="#accordion">
							No, son presenciales, en la Sede General Pico.
						</div>
				<!-- Pregunta 27-->

				<!-- Pregunta 28 -->
				<div id="accordion">
					<div class="card accordion shadow-none rounded-0 border-0">
						<div class="card-header collapsed py-3 border-dark" data-toggle="collapse" href="#Pregunta28" style="background-color:#f8f9fa">
							<a class="card-title text-dark ml-2">
								Las carreras que dicta la Facultad, ¿tienen arancel?
							</a>
						</div>
						<div id="Pregunta28" class="card-body collapse" data-parent="#accordion">
							No, nuestra Universidad, al ser Nacional, Pública y Gratuita, no cobra ningún tipo de arancel en sus carreras de grado.
						</div>
				<!-- Pregunta 28-->				
																																																								
				</div>				
			</div>
		</div>
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

