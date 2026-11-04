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
                                <span><a href="{{route('nodocentes.inicio')}}">NoDocentes <i class='fa fa-angle-right'></i></a></span> 
                                <span><a href="{{route('nodocentes.tramites_y_certificaciones')}}">Trámites y Certificaciones <i class='fa fa-angle-right'></i></a></span>                                 
                                <span class="b-active">Licencias, justificaciones y franquicias</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Licencias, justificaciones y franquicias</h3>
                            <p class="text-justify">
                                En el marco de sus derechos laborales, las/os nodocentes pueden hacer uso de licencias, justificaciones y franquicias. <br><br>
                                Según las características de la solicitud, deberán comunicarse con el Departamento de Recursos Humanos de la Facultad, a través del correo <a href="mailto:recursoshumanos@humanas.unlpam.edu.ar">recursoshumanos@humanas.unlpam.edu.ar</a>. O bien, remitir la Nota de solicitud por Mesa de Entradas a través de los siguientes correos:<br><br> 
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