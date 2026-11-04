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
                                <span><a href="{{route('carreras.posgrado.carreras-posgrado')}}">Carreras Posgrado <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Maestrías</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <!-- Contenido -->
                <div class="container mb-4 border border-dark">
                    <div class="row overflow-auto">
                        <!--Maestría en estudios Sociales y Culturales-->
                        <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                            <span class="font-weight-bold"><a href="{{route('carreras.posgrado.maestria.estudios_sociales_y_culturales')}}">Maestría en estudios Sociales y Culturales</a></span><br>
                        </div>
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Directora</div>
                            <div class="col-9 py-2">Andrea Lluch</div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Cordinadora</div>
                            <div class="col-9 py-2">Diana Moro</div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Comisión de Maestría</div>
                            <div class="col-9 py-2">Ana Rodríaguez, José Maristany, María Eugenia Prieto Flores, Graciela Salto</div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Acreditación CONEAU</div>
                            <div class="col-9 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12zJRrBU4soGQLvTTX5Xp8pL-qya634iD/view?usp=sharing" target="_blank">Res. N° 411/2019 CONEAU</a></div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Reconocimiento Oficial:</div>
                            <div class="col-9 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/11vgHmVjXgft5muUi-N5A3e7d0dH-pUoH/view?usp=sharing" target="_blank">Res. N° 344/21</a></div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Contacto</div>
                            <div class="col-9 py-2"><i class="far fa-envelope"></i> <a href="mailto:maestriaestudiossyc@humanas.unlpam.edu.ar">maestriaestudiossyc@humanas.unlpam.edu.ar</a></div>
                        <!--Maestría en estudios Sociales y Culturales-->

                        <!--Maestría en Docencia en Educación Superior-->
                        <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0">
                            <span class="font-weight-bold"><a href="{{route('carreras.posgrado.maestria.doc_ed_superior')}}">Maestría en Docencia en Educación Superior</a></span><br>
                        </div>		
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Directora</div>
                            <div class="col-9 py-2">Liliana Campagno</div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Cordinadora</div>
                            <div class="col-9 py-2">Rosana Moretta</div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Consejo Académico</div>
                            <div class="col-9 py-2">Dra. Lía Norberto, Dra. Sonia Alzamora, Dra. Graciela Di Franco</div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Acreditación CONEAU</div>
                            <div class="col-9 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IByztOSv16841ByUBFX9l257II2uuL4s/view?usp=sharing" target="_blank">Res. 11.125/12</a></div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Reconocimiento Oficial:</div>
                            <div class="col-9 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZmWxVG5-jdRlMowu7acyyquqxHsTBm_8/view?usp=sharing" target="_blank">Res. 1330/15 Validez Nacional del Título</a></div>
                            <!--<div class="col-3 py-2 font-weight-bold bg-light my-0">Contacto</div>
                            <div class="col-9 py-2"><i class="far fa-envelope"></i> <a href="mailto:maestriayespdocenciaes@humanas.unlpam.edu.ar">maestriayespdocenciaes@humanas.unlpam.edu.ar</a></div>-->
                        <!--Maestría en Docencia en Educación Superior-->


                        <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0">
                            <span class="font-weight-bold text-primary">Aranceles para carreras de Posgrado</span><br>
                        </div>
                        <div class="col-12 py-2 text-justify">
                            <a href="{{route('carreras.posgrado.aranceles.aranceles')}}">2022</a><br>
                        </div>

                        <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 font-weight-bold">
                            Secretaría de Investigación y Posgrado
                        </div>
                        <div class="col-10 py-2 px-5">
                            <i class="fas fa-university"></i> Cnel. Gil 353, 2º Piso<br>
                            <i class="fas fa-phone"></i> (+54) 02954-451661<br>
                            <i class="far fa-envelope"></i> <a href="mailto:posgrado@humanas.unlpam.edu.ar">posgrado@humanas.unlpam.edu.ar</a><br>
                        </div>
                    </div>
                </div>
                <!-- Fin Contenido-->
                </div>
            </section>
        </div>
    </section>


@endsection
