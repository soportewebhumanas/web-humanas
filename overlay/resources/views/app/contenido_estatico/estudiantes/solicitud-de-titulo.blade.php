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
                                    <span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{ route('estudiantes.inicio') }}">Estudiantes <i class='fa fa-angle-right'></i></a></span>
                                    <span class="b-active">Solicitud de título</span>
                                </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-justify become-title">
                            <h3 class="text-justify">Solicitud de Título</h3>
                            <p class="text-justify text-dark">
                                <b>Para solicitar el título se deben realizar los siguientes pasos:</b><br>
                                <ol class="text-justify">
                                    <li>Verificar que figure el 100% de aprobación de las asignaturas en el SIU y contar con la acreditación de las Prácticas Comunitarias.</li>
                                    <li>Enviar un correo electrónico a Mesa de Entradas de la sede correspondiente, solicitando inicio del trámite del título con la información que se detalla a continuación:</li>
                                </ol>
                                <ol type="a" class="text-justify">
                                    <li>Carrera:</li>
                                    <li>Datos personales:</li>
                                    <ul class="text-justify">
                                        <li>Apellido y Nombres</li>
                                        <li>Tipo y número de documento de identidad Nacionalidad</li>
                                        <li>Fecha de nacimiento</li>
                                        <li>Lugar de nacimiento</li>
                                        <li>Domicilio</li>
                                        <li>Localidad</li>
                                        <li>Provincia</li>
                                        <li>País</li>
                                        <li>Teléfono</li>
                                        <li>Otro teléfono</li>
                                        <li>Correo electrónico</li>
                                    </ul>
                                    <li>Fórmula de Juramento o Promesa elegida</li>
                                </ol>
                                <br>
                                Mesa de Entradas Sede Santa Rosa: <a href="mailto:mesaentradas@humanas.unlpam.edu.ar">mesaentradas@humanas.unlpam.edu.ar</a><br>
                                Mesa de Entradas Sede General Pico: <a href="mailto:mesaentradasgp@humanas.unlpam.edu.ar">mesaentradasgp@humanas.unlpam.edu.ar</a>
                                <br><br>
                                Para mayor información, véase:<br>
                                <!--<a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2019_137.pdf" target="_blank">Anexo II del Procedimiento de emisión de Tìtulos de la UNLPam<a><br>-->
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2020_164.pdf" target="_blank">Procedimiento de emisión de Títulos - UNLPam<a><br>
                                <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_5_2022_499_lNMEqib.pdf" target="_blank"> Procedimiento para la Solicitud de certificados analíticos final que expide la Facultad de Ciencias Humanas</a>
                            </p>
                            <!--
                            <p>
                                El/la estudiante que haya aprobado todos los requisitos obligatorios para obtener el título,  deberá comunicarlo mediante un correo electrónico o proceso digital que posteriormente lo reemplace, al Departamento Estudiantes de la sede correspondiente. Dentro de los tres días hábiles posteriores de haberse producido la comunicación, el Departamento Estudiantes enviará una notificación de recepción de la misma. <a href="#notaAlPie">(i)</a> 
                                <br><br>  
                                El Departamento Estudiantes iniciará el proceso de control manual del cumplimiento de los requisitos obligatorios para obtener el título de grado. Este proceso incluye la verificación de la concordancia de la información presente en el Certificado de Actividades Curriculares aprobadas con las actas de Examen y/o Promoción resguardadas físicamente en Libros; y todos aquellos requisitos determinados por la Unidad Académica o la Universidad.
                                <br><br>
                                A tal efecto se determina un plazo de 20 días hábiles presenciales para cada solicitud de Título, contados a partir de la recepción del correo electrónico del estudiante.
                                <br><br>
                                Finalizado el control, el Departamento Estudiantes enviará un correo electrónico o mediante proceso digital que posteriormente lo reemplace, a el/la estudiante para que manifieste sus datos personales y académicos, y elija la fórmula de juramento. La respuesta del/la estudiante deberá ser dirigida por correo electrónico a Mesa de Entradas de la FCH de la sede correspondiente indicando en el asunto “Solicitud de Título de grado”.
                                <br><br>
                                <b>Confección de expediente de solicitud de títulos</b><br><br>
                                Mesa de Entrada; una vez recibido el correo electrónico del/la solicitante; dará inicio a un expediente debidamente caratulado y anexará la información enviada por el/la estudiante, que contempla:
                                <br><br>
                                <b>Datos Personales</b>
                            </p>

                                <ul class="text-secondary text-justify">
                                    <li>Apellido y Nombres</li>
                                    <li>Tipo y número de documento de identidad</li>
                                    <li>Nacionalidad</li>
                                    <li>Fecha de nacimiento</li>
                                    <li>Lugar de nacimiento</li>
                                    <li>Domicilio de procedencia:</li>
                                    <ul class="text-secondary text-justify">
                                        <li>Domicilio</li>
                                        <li>Localidad</li>
                                        <li>Provincia</li>
                                        <li>País</li>
                                    </ul>
                                    <li>Teléfono</li>
                                    <li>Otro teléfono</li>
                                    <li>Correo electrónico</li>
                                </ul>
                            <p>
                                <b>Fórmula de Juramento o Promesa elegida:</b>
                                <br><br>                                    
                                 Tal Expediente será remitido dentro de un plazo máximo de 5 días hábiles, al Departamento Estudiantes de cada sede -según corresponda- para continuar su trámite. 
                                <br><br>
                                Recibido el Expediente y previo control de los datos personales del solicitante, el Departamento Estudiantes procederá en un plazo no mayor a 5 días hábiles, a ejecutar la solicitud de Título de Grado en el Sistema de Gestión Académica SIU-Guaraní y emitirá un Certificado de Título de Grado en Trámite que será remitido a la casilla de correo electrónico del/la interesado/a.  Se exportará la información del sistema SIU-Guaraní para ser importada al Sistema Informático de Diplomas y Certificaciones (SIDCer). Luego del control manual de la información en el SIDCer, se enviará la solicitud para ser evaluada por el área nacional competente. 
                                <br><br>
                                Semanalmente se verificará en dicho sistema si hay nuevas solicitudes aprobadas pendientes de continuar el trámite en la FCH.
                                <br><br>
                                En caso de que la solicitud sea rechazada por el área nacional competente, el Departamento Estudiantes informará a la Secretaría Académica de la Facultad para que se tomen las acciones correspondientes a fin de reenviar la solicitud. 
                                <br><br>
                                Una vez que la solicitud se encuentre aprobada por la dependencia correspondiente del Ministerio de Educación de Nación, el Departamento Estudiantes iniciará el proceso de impresión de:
                                <br>
                            </p>
                            <ol type="a" class="text-justify text-secondary">
                                <li>Solicitud de Título de Grado</li>
                                <li>Certificado analítico final de actividades curriculares en papel blanco tamaño A4</li>
                                <li>Certificado analítico final de actividades curriculares en papel segurizado, o documento digital que lo reemplace en el futuro, que no se foliará ni se incorporará al expediente. </li>
                            </ol>
                            <p>
                                Los documentos a) y b) serán foliados y anexados al Expediente.
                                <br><br>
                                Para tal acción, se determinará un plazo máximo de 5 días hábiles presenciales desde la fecha de aprobación de la solicitud en el SIDCer.
                                <br><br>
                                El Departamento Estudiantes enviará el Expediente al área correspondiente de la Unidad Académica para la firma de las autoridades competentes. Una vez culminadas las firmas correspondientes, la Unidad Académica girará el Expediente al Departamento de Títulos y Certificados de la Universidad y éste permanecerá allí hasta que el/la graduado/la haya recibido la documentación.
                                <br><br>
                                Una vez entregado el diploma y certificado analítico al/la graduado/a, el Departamento de Títulos y Certificados anexará al expediente un remito con el detalle del título otorgado, esto es, número de libro, folio y acta de emisión, y número de resolución de entrega del título.
                                Finalmente, si el expediente es en soporte papel, será devuelto a la Unidad Académica de origen para su archivo. El Departamento Estudiantes tomará conocimiento de lo actuado y cargará los datos necesarios al SIU-Guaraní para Diplomar al/la Egresado/a.
                                <br><br>
                                <b>Duplicado del Certificado Analítico:</b><br><br>
                                En caso de pérdida o extravío del certificado analítico original  en  papel,  el/la  graduado/a podrá solicitar un duplicado a la Unidad Académica. Para ello deberá presentar una nota dirigida al Decanato/Secretaría Académica con la exposición policial de pérdida o extravío del original.
                                <br><br>
                                Los duplicados del certificado analítico se tramitarán mediante el mismo expediente que se tramitó la documentación original. 
                                <br><br>
                                En caso de pérdida o extravío del duplicado del certificado analítico en papel, a solicitud del/la graduado/a y a través del Departamento de Títulos y Certificados de la UNLPam, la  Universidad le hará entrega a su titular de un certificado que acredita el título recibido.
                                <br><br>
                                <hr>
                                <span id="notaAlPie" class="text-secondary"><b>(i)</b> Las comunicaciones recibidas por correo electrónico que se realicen entre el inicio del último llamado a examen y el final del primer llamado a examen del año siguiente serán respondidas dentro de los tres días hábiles posteriores. Y el proceso del control manual será realizado a partir de la finalización del primer llamado a examen del año en curso dando inicio al plazo de los 20 días hábiles presenciales.</span>
                            </p>
                            -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>


@endsection