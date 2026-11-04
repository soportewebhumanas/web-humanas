@extends('app.slim.layouts.home')

@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-text ">
                                <p>
                                    <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{route('nodocentes.inicio')}}">NoDocentes <i class='fa fa-angle-right'></i></a></span> 
                                    <span class="b-active">Trámites y Certificaciones</span>
                                </p>
                                <h3 class="text-justify">NoDocentes</h3>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('nodocentes.tramites-y-certificaciones.recibos_de_sueldo')}}">Recibos de Sueldo</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('nodocentes.tramites-y-certificaciones.licencias_justificaciones_y_franquicias')}}">Licencias, justificaciones y franquicias</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('nodocentes.tramites-y-certificaciones.ddjj')}}">DDJJ</a>
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    <a href="{{route('nodocentes.tramites-y-certificaciones.certificacion_de_servicios')}}">Certificación de Servicios</a>
                                </div>                                
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <br><br>
                </div>
            </section>
        </div>
    </section>
@endsection