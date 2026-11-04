@extends('app.slim.layouts.home')

@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <p><span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Asignaturas de Licenciaturas con modalidad a distancia</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Asignaturas de Licenciaturas con modalidad a distancia</h3>
                            <p class="text-justify text-dark">
                                <img class="img-fluid" src="slim/images/index/asignaturas.png" alt="Asignaturas de licenciaturas bajo modalidad distancia">
                                <br><br>
                                Por Resolución Nº 018-CD-24, el Consejo Directivo autorizó el dictado con modalidad a distancia, así como la realización de las correspondientes mesas examinadoras de las actividades curriculares específicas y exclusivas de las carreras de Licenciatura que poseen un trayecto común con las respectivas carreras de Profesorado, a saber: Licenciatura en Ciencias de la Educación, Licenciatura en Geografía, Licenciatura en Historia, Licenciatura en Inglés con Orientación en Estudios Literarios y Licenciatura en Letras.<br>
                                Para el año 2025, las asignaturas que se dictarán bajo este esquema son las siguientes:<br>
                                <br>
                                LICENCIATURA EN CIENCIAS DE LA EDUCACIÓN<br>
                                - Taller de Elaboración de Trabajo Final<br>
                                - Seminario de Análisis Institucional<br>
                                <br>
                                LICENCIATURA EN GEOGRAFÍA<br>
                                - Seminario de Investigación Geográfica III (Planificación y Ordenamiento Territorial)<br>
                                - II Nivel de Idioma Portugués<br>
                                - Técnicas en Geografía II<br>
                                <br>
                                LICENCIATURA EN HISTORIA<br>
                                - Seminario de Teoría y Metodología de la Investigación Historiográfica<br>
                                - Seminario Optativo: Historia Indígena Regional<br>
                                <br>
                                LICENCIATURA EN LETRAS<br>
                                - Seminario Orientado: Literatura<br>
                                <br>                                
                                LICENCIATURA EN INGLÉS CON ORIENTACIÓN EN ESTUDIOS LITERARIOS<br>
                                - Literatura Multiétnica I<br>
                                - Seminario: Metodología de la Investigación y la Enseñanza Superior y Universitaria<br>
                                - Seminario Abierto de Literatura<br>
                                <br>                                
                                LICENCIATURA EN INGLÉS CON ORIENTACIÓN EN LINGÜÍSTICA APLICADA<br>
                                -Sociolingüística<br>
                                <br>                                
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
