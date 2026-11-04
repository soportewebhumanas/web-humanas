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
                                    <span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{ route('estudiantes.inicio') }}">Estudiantes <i class='fa fa-angle-right'></i></a></span>
                                    <span><a href="{{ route('certificaciones-y-formularios.certificaciones_y_formularios') }}">Certificaciones y formularios <i class='fa fa-angle-right'></i></a></span>
                                    <span class="b-active">Formularios</span>
                                </p>
                                <h3 class="text-left mt-2">Formularios</h3>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    Solicitud de Reválida
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    Solicitud de Inscripción Condicional a Cursadas
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    Solicitud de Convalidación de Actividades Curriculares
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    Solicitud de Equivalencias
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    Solicitud de Certificados de Asistencia a Clase
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    Solicitud de certificados de asistencia a Examen Parcial
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    Solicitud de Cambio de Plan de la Carrera
                                </div>
                                <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                                    Solicitud de Inscripción fuera de Término
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