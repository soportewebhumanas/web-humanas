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
                                <span><a href="{{route('docentes.inicio')}}">Docentes <i class='fa fa-angle-right'></i></a></span> 
                                <span><a href="{{route('docentes.tramites_y_certificaciones')}}">Trámites y Certificaciones <i class='fa fa-angle-right'></i></a></span>  
                                <span class="b-active">Licencias y autorizaciones</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Licencias y autorizaciones</h3>
                            <p class="text-justify">
                                En el marco de sus derechos laborales, las/os docentes pueden hacer uso de licencias, franquicias y autorizaciones de viajes al exterior. Por <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2001_73_ChwGeem.pdf" target="_blank">Resolución 073-2001</a>, el Consejo Superior aprueba el Régimen de Licencias para el personal docente de la UNLPam. Asimismo, la Facultad de Ciencias Humanas posee un cursograma para su trámite, aprobado por <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2014_317.pdf" target="_blank">Resolución 317-CD-2014</a>.<br><br> 
                                Para la presentación de la solicitud al Consejo Directivo o al Decanato, según corresponda, es de treinta (30) días corridos con anterioridad al momento de inicio de la licencia, franquicia o autorización de viaje, excluyendo los períodos de receso. La Nota de solicitud debe presentarse por Mesa de Entradas, a través de los siguientes correos:<br><br> 
                                Sede General Pico: <a href="mailto:mesaentradasgp@humanas.unlpam.edu.ar">mesaentradasgp@humanas.unlpam.edu.ar</a><br>  
                                Sede Santa Rosa: <a href="mailto:mesaentradas@humanas.unlpam.edu.ar">mesaentradas@humanas.unlpam.edu.ar</a> 

                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
