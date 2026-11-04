@extends('app.slim.layouts.home')


@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                                <p>
                                    <span>
                                        <a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a>
                                    </span> 
                                    <a href="#">Ingresantes <i class='fa fa-angle-right'></i></a>
                                    <span class="b-active">Preguntas Frecuentes</span>
                                </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <br>
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title text-left">
                        <h3 class="text-justify">Preguntas Frecuentes</h3>
                        <!-- accordion -->
                        <div id="accordion">
                        <!-- Pregunta -->    
                        <div class="">
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important" id="headingOne">
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-dark text-justify" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Me puedo inscribir en varias carreras?
                                </button>
                            </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Te podes inscribir en todas las carreras que quieras.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="headingTwo">
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link collapsed  text-dark text-justify" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Se pueden realizar dos carreras en forma paralela?
                                </button>
                            </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Se pueden realizar dos o más carreras en forma paralela.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="cuatro">
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link collapsed  text-dark text-justify" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> Si adeudo materias del colegio secundario, ¿me puedo inscribir igual en una carrera?
                                </button>
                            </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
                            <div class="card-body text-justify">
                            En caso que adeudes materias del secundario, podes inscribirte en la carrera que desees con una constancia de las materias adeudas emitida por el colegio. Tenés tiempo de aprobarlas hasta el 30 de abril.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="cinco" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link  text-dark collapsed text-justify" data-toggle="collapse" data-target="#collapsecinco" aria-expanded="false" aria-controls="collapsecinco">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Qué requisitos necesito para inscribirme en una carrera?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsecinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
                            <div class="card-body">
                            <ul class="text-justify">
                                    <li>Imagen de: copia de Documento Nacional de Identidad certificada por Escribano Público, Juez de Paz o Policía (formato foto digital o pdf).</li> 
                                    <li>Foto color de perfil derecho sobre fondo azul celeste.</li> 
                                    <li>Imagen de: copia del Título de aprobación de Nivel Secundario o Nivel Equivalente certificada por Escribano Público, Juez de Paz o Policía; en caso de no tener aún el título; se deberá adjuntar una Constancia de finalización de cursada o una Constancia de título en trámite, cualquiera sea el caso debe ser el original entregado por el colegio. No se aceptan certificado de alumno regular.</li>
                                    <li>o imagen de: Certificado de Aprobación para el Ingreso a la Universidad de acuerdo a la excepción establecida en el Artículo 7º dela Ley Nº 24.521 de Educación Superior. (formato foto digital o pdf).</li>
                            </ul>
                            </div>
                            </div>
                        </div>                        

                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="seis" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link   text-dark collapsed text-justify" data-toggle="collapse" data-target="#collapseseis" aria-expanded="false" aria-controls="collapseseis">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Cómo me informo en qué aula curso?
                                </button>
                            </h5>
                            </div>
                            <div id="collapseseis" class="collapse" aria-labelledby="seis" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Al momento de inscribirte en SIU Guaraní y luego de elegir comisión a la que asistirás, te aparece el aula en la que se dictará la asignatura.
                            </div>
                            </div>
                        </div>

                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="siete" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link   text-dark collapsed text-justify" data-toggle="collapse" data-target="#collapsesiete" aria-expanded="false" aria-controls="collapsesiete">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Cómo se aprueba una asignatura?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsesiete" class="collapse" aria-labelledby="siete" data-parent="#accordion">
                            <div class="card-body text-justify">
                                Las asignaturas se aprueban por promoción en las materias que así lo tengan definido en el programa de estudios, o por examen final dentro de los llamados destinados a tal fin.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="ocho" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-dark collapsed text-justify" data-toggle="collapse" data-target="#collapseocho" aria-expanded="false" aria-controls="collapseocho">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Qué implica regularizar una asignatura?
                                </button>
                            </h5>
                            </div>
                            <div id="collapseocho" class="collapse" aria-labelledby="ocho" data-parent="#accordion">
                            <div class="card-body text-justify">
                                Las asignaturas se aprueban por promoción en las materias que así lo tengan definido en el programa de estudios, o por examen final dentro de los llamados destinados a tal fin.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="nueve" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link   text-dark collapsed text-justify" data-toggle="collapse" data-target="#collapsenueve" aria-expanded="false" aria-controls="collapsenueve">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿El SIU Guaraní y el campus virtual es lo mismo?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsenueve" class="collapse" aria-labelledby="nueve" data-parent="#accordion">
                            <div class="card-body text-justify">
                            No son lo mismo. El SIU Guaraní es el sistema que utilizas a lo largo de toda la carrera para realizar los trámites administrativos (inscripciones en cursadas, certificados, inscripciones en exámenes, reinscripción, etc). El campus virtual o Moodle es una plataforma educativa que permite brindar capacitación y formación a través de los recursos tecnológicos que ofrece internet.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="mil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link   text-dark collapsed text-justify" data-toggle="collapse" data-target="#collapsemil" aria-expanded="false" aria-controls="collapsemil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Me tengo que inscribir en teóricos y prácticos?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsemil" class="collapse" aria-labelledby="mil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Todas las asignaturas tienen comisiones de Teóricos y Prácticos. Siempre te debés inscribir y asistir a las dos instancias.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="dosmil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsedosmil" aria-expanded="false" aria-controls="collapsedosmil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Qué implica promocionar una asignatura?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsedosmil" class="collapse" aria-labelledby="dosmil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Implica que la asignatura ya está aprobada y no debes rendir examen final.
                            </div>
                            </div>
                        </div>

                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="tresmil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsetresmil" aria-expanded="false" aria-controls="collapsetresmil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Cuándo puedo pedir el certificado de alumno regular?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsetresmil" class="collapse" aria-labelledby="tresmil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            El certificado de alumno regular podes pedirlo cuando aprobaste dos finales el año anterior a la reinscripción o dos finales desde el 01/02 hasta el 30/07.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="cuatromil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsecuatromil" aria-expanded="false" aria-controls="collapsecuatromil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Cómo pido el certificado de alumno regular?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsecuatromil" class="collapse" aria-labelledby="cuatromil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Entrando al sistema SIU Guaraní, Solicitud de certificados; colocar EMITIR.
                            </div>
                            </div>
                        </div>                        

                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="cincomil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-dark collapsed text-justify" data-toggle="collapse" data-target="#collapsecincomil" aria-expanded="false" aria-controls="collapsecincomil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> Mientras tanto ¿Qué certificado me puede emitir la facultad?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsecincomil" class="collapse" aria-labelledby="cincomil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Si no podes pedir el certificado de alumno regular, se te puede otorgar el certificado de estudiante. Los ingresantes a una carrera, durante el primer año de la misma, solo pueden solicitar certificado de estudiante.
                            </div>
                            </div>
                        </div>

                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="seismil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapseseismil" aria-expanded="false" aria-controls="collapseseismil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Cómo pido el certificado de estudiante?
                                </button>
                            </h5>
                            </div>
                            <div id="collapseseismil" class="collapse" aria-labelledby="seismil" data-parent="#accordion">
                            <div class="card-body text-justify">
                                Podés solicitarlo al Departamento Estudiante de la sede a la que perteneces a través de los siguientes correos:<br>
                                Sede General Pico: <a href="mailto:departamentoestudiantesgp@humanas.unlpam.edu.ar">departamentoestudiantesgp@humanas.unlpam.edu.ar</a><br>
                                Sede Santa Rosa: <a href="mailto:departamentoestudiantes@humanas.unlpam.edu.ar">departamentoestudiantes@humanas.unlpam.edu.ar</a><br><br>
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="sietemil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsesietemil" aria-expanded="false" aria-controls="collapsesietemil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Qué es reinscribirse?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsesietemil" class="collapse" aria-labelledby="sietemil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Manifestar a voluntad - a través de la reinscripción anual- de continuar los estudios.<br><br>
                            </div>
                            </div>
                        </div> 
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="ochomil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapseochomil" aria-expanded="false" aria-controls="collapseochomil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> Si figuro como no regular y no me puedo reinscribir ¿qué trámite debo realizar?
                                </button>
                            </h5>
                            </div>
                            <div id="collapseochomil" class="collapse" aria-labelledby="ochomil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Tenés que enviar el formulario de Convalidación al correo electrónico al Departamento Estudiante de la sede a la que perteneces.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="nuevemil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsenuevemil" aria-expanded="false" aria-controls="collapsenuevemil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Dónde obtengo los formularios para los trámites?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsenuevemil" class="collapse" aria-labelledby="nuevemil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Tenés que entrar a la página de la Facultad, acceder a la Sección Estudiantes, Certificados y Formularios.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="diezmil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsediezmil" aria-expanded="false" aria-controls="collapsediezmil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Cuántas veces puedo rendir una misma materia?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsediezmil" class="collapse" aria-labelledby="diezmil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Las materias se pueden rendir todas las veces que sean necesarias hasta su aprobación.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="oncemil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapseoncemil" aria-expanded="false" aria-controls="collapseoncemil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Qué es una reválida?
                                </button>
                            </h5>
                            </div>
                            <div id="collapseoncemil" class="collapse" aria-labelledby="oncemil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Una reválida es la prórroga de la vigencia de la regularidad.
                            </div>
                            </div>
                        </div>

                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="docemil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsedocemil" aria-expanded="false" aria-controls="collapsedocemil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿La reválida debo pedirla antes del fin de vigencia de la cursada?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsedocemil" class="collapse" aria-labelledby="docemil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            La reválida se puede pedir una vez que la regularidad de la asignatura esté vencida. Se recomienda solicitarla cuando estás decidido a rendir el examen, antes del llamado, ya que se puede solicitar una única vez en cada asignatura.
                            </div>
                            </div>
                        </div>

                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="trecemil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsetrecemil" aria-expanded="false" aria-controls="collapsetrecemil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Qué es el EPSA?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsetrecemil" class="collapse" aria-labelledby="trecemil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            El EPSA es el Examen Preventivo de Salud. Es obligatorio para las y los ingresantes a una carrera universitaria. Incluye un conjunto de estudios tales como: examen odontológico, vacunación vigente, análisis de laboratorio, estudio visual, electrocardiograma, y examen clínico final.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="catorcemil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsecatorcemil" aria-expanded="false" aria-controls="collapsecatorcemil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Todos los años debo realizar el EPSA?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsecatorcemil" class="collapse" aria-labelledby="catorcemil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Los estudios médicos se presentan por única vez cuando te inscribís en una carrera universitaria. Tiene una duración de 5 años.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="quincemil" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsequincemil" aria-expanded="false" aria-controls="collapsequincemil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> Si tengo un título terciario o universitario ¿puedo pedir equivalencia?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsequincemil" class="collapse" aria-labelledby="quincemil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Podés pedir equivalencia una vez que te hayas inscripto en la carrera, consultando los pasos a seguir a través del correo del Departamento de Estudiantes.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="veinte" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapseveintemil" aria-expanded="false" aria-controls="collapseveintemil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿Puedo inscribirme a una materia si adeudo una correlativa?
                                </button>
                            </h5>
                            </div>
                            <div id="collapseveintemil" class="collapse" aria-labelledby="veintemil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Si adeudas una o dos correlativas, podés solicitar inscripción condicional.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="treinta" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsetreintamil" aria-expanded="false" aria-controls="collapsetreintamil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> ¿La facultad dicta carreras bajo la modalidad a distancia?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsetreintamil" class="collapse" aria-labelledby="treintamil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            Si, la Licenciatura en Ciencias de la Educación.
                            </div>
                            </div>
                        </div>

                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="cuarenta" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsecuarentamil" aria-expanded="false" aria-controls="collapsecuarentamil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> La cursada de la Licenciatura en Ciencias de la Educación, ¿posee una cursada 100 por ciento virtual?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsecuarentamil" class="collapse" aria-labelledby="cuarentamil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            No, es semipresencial, con tres encuentros por cuatrimestres en la Sede General Pico.
                            </div>
                            </div>
                        </div>

                        <!-- Pregunta -->
                        <div >
                            <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important"  id="cincuenta" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify text-dark collapsed" data-toggle="collapse" data-target="#collapsecincuentamil" aria-expanded="false" aria-controls="collapsecincuentamil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> Los exámenes finales de la Licenciatura en Ciencias de la Educación a distancia, ¿son 100 por ciento virtuales?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsecincuentamil" class="collapse" aria-labelledby="cincuentamil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            No, son presenciales, en la Sede General Pico.
                            </div>
                            </div>
                        </div>
                        
                        <!-- Pregunta -->
                        <div >
                        <div class="card-header text-justify border border-bottom-1 border-primary border-left-0 border-right-0 border-top-0 bg-light" style="border-color:#26406C !important" id="sesenta" >
                            <h5 class="mb-0 text-justify">
                                <button class="btn btn-link text-justify collapsed  text-dark" data-toggle="collapse" data-target="#collapsesesentamil" aria-expanded="false" aria-controls="collapsesesentamil">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> Las carreras que dicta la facultad, ¿tienen arancel?
                                </button>
                            </h5>
                            </div>
                            <div id="collapsesesentamil" class="collapse" aria-labelledby="sesentamil" data-parent="#accordion">
                            <div class="card-body text-justify">
                            No, nuestra Universidad, al ser Nacional, Pública y Gratuita, no cobra ningún tipo de arancel en sus carreras de grado.
                            </div>
                            </div>
                        </div>                        

                        </div>
                        <!-- accordion -->
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection