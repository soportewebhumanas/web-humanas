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
                                <span><a href="{{route('docentes.inicio')}}">Docentes <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Convocatorias</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Convocatoria “Cursos breves para la vinculación interuniversitaria y la internacionalización del Currículum de la Facultad de Ciencias Humanas”<br>
                            <!--<span class="text-justify text-secondary" style="font-size: 0.7rem">19/09/2023</span>--></h3>
                            <p class="text-justify pt-0">
                                Aprobada por Res. 304-CD-24, está destinada a docentes de la FCH, con o sin antecedentes en IdC, con propuestas de trabajo con instituciones de Nivel Superior Universitario de América Latina.<br>
                                Se ponderará positivamente propuestas de equipos integrados por docentes de distintas áreas disciplinares de esta Facultad.<br>
                                Las propuestas de cursos deben ser orientadas a estudiantes universitarias/os de grado de centros universitarios internacionales, bajo modalidad virtual/a distancia, a través de la plataforma de la UNLPam.<br>
                                La carga horaria de cada curso será de 20 horas, 12 de encuentros sincrónicos y a distancia, y las 8 restantes para trabajo domiciliario a través de la plataforma virtual.<br>
                                Se financiarán tres cursos por un monto de $ 100.000,00 cada uno. El financiamiento estará destinado a la preparación/diseño de la propuesta en la plataforma virtual indicada.<br>
                                La recepción de propuestas se extenderá hasta el 1 de noviembre de 2024, a las 13:00.<br>
                                <br>
                                Las presentaciones se haran a través de las mesas de entrada: <a href="mailto:mesaentradas@humanas.unlpam.edu.ar" target="_blank">mesaentradas@humanas.unlpam.edu.ar</a> (Sede Santa Rosa) y <a href="mailto:mesaentradasgp@humanas.unlpam.edu.ar" target="_blank">mesaentradasgp@humanas.unlpam.edu.ar</a> (Sede General Pico)
                                <br><br>
                                Bases y condiciones: <a target="_blank" href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2024_304.pdf">Res. 304-CD-2024</a>
                                <br><br>
                                Consultas: <a href="mailto: decanato@humanas.unlpam.edu.ar">decanato@humanas.unlpam.edu.ar</a><br>
                            </p>
                        </div>
                    </div>
                    <hr>                    
                    <!--<div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Presentación de Informes de avance e informes finales de proyectos de investigación radicados en la FCH: vence 23 de febrero de 2024<br>
                            <span class="text-justify text-secondary" style="font-size: 0.7rem">28/12/2023</span></h3>
                            <p class="text-justify pt-0">
                                Presentar por mesa de entrada, de manera virtual nota de directora/r, elevando informe (de avance o final, según corresponda) y adjuntar:<br><br>
                                <i class="fa fa-square" aria-hidden="true" style="font-size: 0.4em"></i> Planilla word con informe 2023<br>
                                <i class="fa fa-square" aria-hidden="true" style="font-size: 0.4em"></i> Planilla de Excel con producción científica 2023.<br>
                                <i class="fa fa-square" aria-hidden="true" style="font-size: 0.4em"></i> Enlace a carpetas de Drive con las probanzas (con permiso para que puedan acceder quienes tienen el enlace). Puede incorporarse el enlace en la nota de elevación realizada por quien dirige el proyecto.<br>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Banco de evaluadoras/es Proyectos de Investigación 2023<br>
                            <span class="text-justify text-secondary" style="font-size: 0.7rem">25/09/2023</span></h3>
                            <p class="text-justify pt-0">
                                <i class="fa fa-file-excel-o text-success" aria-hidden="true"></i> <a href="slim/docentes/2023_BE_Human_Educ_Definitivo.xlsx" target="_blank" download>Banco de evaluadoras/es Proyectos de Investigación 2023</a>
                            </p>
                        </div>
                    </div>
                    <hr>                
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Presentación de Proyectos de investigación con inicio en 2024<br>
                            <span class="text-justify text-secondary" style="font-size: 0.7rem">21/09/2023</span></h3>
                            <p class="text-justify pt-0">
                                La Secretaría de Investigación y Posgrado informa que el periodo de la convocatoria para presentar proyectos de investigación con inicio en 2024 se extiende desde el <b class="text-dark">01 de diciembre hasta el 23 de febrero de 2024.</b> La documentación digital se entrega por Mesa de Entradas de la Facultad. <br>
                                <b class="text-dark">Sede Santa Rosa:</b> <a href="mailto:mesaentradas@humanas.unlpam.edu.ar" target="_blank">mesaentradas@humanas.unlpam.edu.ar</a>,<br> 
                                <b class="text-dark">Sede General Pico:</b> <a href="mailto:mesaentradasgp@humanas.unlpam.edu.ar" target="_blank">mesaentradas@humanas.unlpam.edu.ar</a> es la siguiente:<br><br>
                                <i class="fa fa-square" aria-hidden="true" style="font-size: 0.4em"></i> Nota de presentación del proyecto, dirigida a la Secretaría de Investigación y Posgrado.<br> 
                                <i class="fa fa-square" aria-hidden="true" style="font-size: 0.4em"></i> Aval del Departamento o Instituto donde se radicará el proyecto.<br>
                                <i class="fa fa-square" aria-hidden="true" style="font-size: 0.4em"></i> Formulario de presentación de proyectos: la <a href="slim/formularios-de-presentacion-de-proyectos/Formulario-de-presentacion-proyectos-FCH-convocatoria-2024.docx" download> planilla 2024</a> está disponible en la página web. Importante: completar esta versión porque se han realizado modificaciones.
                                <br><br>
                                <i>
                                    Por favor, lean cuidadosamente el instructivo de la planilla y tengan en cuenta las restricciones reglamentarias que prevé la <a href="https://drive.google.com/file/d/1-T7wzedUIasLwdAl3BZTwInpThcACX_o/view" target="_blank">Ordenanza 025-99</a> para la Dirección o Co-dirección de proyectos.
                                    -CV de Director/a y Codirector/a.
                                </i>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Solicitud de prórrogas de finalización de Proyectos de Investigación radicados en la FCH<br>
                            <span class="text-justify text-secondary" style="font-size: 0.7rem">21/09/2023</span></h3>
                            <p class="text-justify pt-0">
                                <i class="fa fa-square" aria-hidden="true" style="font-size: 0.4em"></i> La Secretaría de Investigación y Posgrado de la Facultad de Ciencias Humanas informa que hasta el 3 de noviembre del corriente se reciben solicitudes de prórroga de proyectos de investigación que finalizan el 31 de diciembre de 2023. Podrán solicitar la extensión por un año más, tal como lo establece el reglamento, aquellos proyectos que no tengan prórrogas otorgadas.
                                <br>
                                <i class="fa fa-square" aria-hidden="true" style="font-size: 0.4em"></i> La solicitud la realiza quien dirige el proyecto,  mediante una nota dirigida a la Secretaría de Investigación y Posgrado, en la cual fundamente la necesidad de la prórroga. La presentación se realiza de manera virtual por Mesa de Entradas de ambas sedes de la FCH.
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Llamado a selección de aspirantes para cubrir el cargo de Director/a del Instituto de Geografía<br><span class="text-justify text-secondary" style="font-size: 0.7rem">20/09/2022</span></h3>
                            <p class="text-justify">
                                El Consejo Directivo de la Facultad de Ciencias Humanas aprobó el viernes 16 de septiembre la convocatoria del llamado a selección de aspirantes para cubrir el cargo de Director/a y, en forma opcional, de Codirector/a, del Instituto de Geografía. Además, designó a las y los miembros titulares y suplentes de la comisión ad-hoc de especialistas para evaluar las presentaciones de las/os aspirantes a los citados cargos.<br><br>
                                El plazo de presentación de antecedentes será entre los días 3 y 28 de octubre de 2022, trámite que deberá realizarse en forma digital, por las Mesas de Entradas de ambas Sedes de la Facultad: <a href="mailto:mesaentradas@humanas.unlpam.edu.ar">mesaentradas@humanas.unlpam.edu.ar</a> (Santa Rosa) y <a href="mesaentradasgp@humanas.unlpam.edu.ar">mesaentradasgp@humanas.unlpam.edu.ar</a> (General Pico).La referida comisión ad-hoc tiene como titulares a Perla Zusman (UBA), Rodolfo Bertoncello (UBA) y Jorge Oscar Blanco (UBA), mientras que, como suplentes, están Héctor Luis Adriani (UNLP), Alvaro Alvares (UNCPBA-CONICET) y Cecilia Alejandra Rodríguez (UNS). Las y los integrantes poseen reconocidos y pertinentes antecedentes académicos y científicos en las temáticas de investigación de dicho Instituto, y en todos los casos registran una pertenencia institucional externa a la UNLPam.<br>

                            </p>
                            <hr>
                            <h3 class="text-justify">Convocatoria Propuestas Seminarios del Departamento de Comunicación Social<br><span class="text-justify text-secondary" style="font-size: 0.7rem">06/09/2022</span></h3>
                            <p class="text-justify pt-0">
                                La Secretaría Académica y el Departamento de Comunicación Social de la Facultad de Ciencias Humanas convocan a la presentación de propuestas para el dictado de la actividad curricular Seminario-Taller Electivo I/ Seminario-Taller Electivo II de la carrera de Comunicación Social. Las propuestas deben enmarcarse en alguna de las siguientes áreas temáticas: Periodismo Digital, Periodismo Deportivo, Periodismo y Literatura, Foniatría y Locución, Herramientas de Edición Fotografía y Diseño, Arte y Estética, Comunicación Científica o Marketing y Publicidad.
                                <br><br>
                                El seminario tendrá un dictado de carácter intensivo y el/la docente será designado en un cargo de profesor/a adjunto/a interino con dedicación simple por 90 días o hasta el 31 de diciembre de 2022.
                                <br><br>
                                Las propuestas presentadas serán evaluadas por la Secretaría Académica y el Consejo Departamental de Comunicación Social ponderándose, además de los antecedentes de quienes se presenten, la adecuación y pertinencia de las propuestas con el cronograma de opciones dictadas en los últimos años y los intereses y requerimientos de las/os estudiantes.
                                <br><br>
                                La convocatoria estará abierta entre el 07 y el 14&nbsp;de septiembre de 2022.
                                Las presentaciones deberán enviarse por mail&nbsp; a Mesa de Entradas (<a href="mailto:mesaentradas@humanas.unlpam.edu.ar">mesaentradas@humanas.unlpam.edu.ar</a>)&nbsp;
                                e implican la obligatoriedad de incluir nota de elevación dirigida a la Secretaria Académica, programa tentativo de la propuesta y 
                                CV del/la docente responsable del dictado. <br><br>

                                <i class="fas fa-file-pdf text-danger"></i><a href="https://drive.google.com/file/d/1X-NaJ79F1wY0-fJggmY7ikvZlzG1-nTX/view?usp=sharing" target="_blank"> Acta: Inscripciones de propuestas para el dictado de la actividad Curricular Seminario-Taller Electivo I / Seminario - Taller Electivo II de la Carrera de Comunicación Social</a>
                            </p>                          
                        </div>
                    </div>--> 
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
