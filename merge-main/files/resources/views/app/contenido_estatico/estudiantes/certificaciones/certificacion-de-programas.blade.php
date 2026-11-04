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
                                <span><a href="{{ route('certificaciones-y-formularios.certificaciones_y_formularios') }}">Certificaciones y formularios <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Certificación de Programas</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Certificación de Programas</h3>
                            <p class="text-justify">
                                Las/os estudiantes que se inscriban en otra Universidad o Instituto Terciario pueden solicitar la certificación de los programas de asignaturas aprobadas en esta Facultad para iniciar los trámites de equivalencias en la nueva institución.<br><br> 
                                La solicitud se realiza a través del Departamento de Estudiantes, quien remite la documentación a Decanato y, luego, Rectorado para las firmas correspondientes. Si la documentación es presentada ante organismo e instituciones del exterior, Rectorado debe enviarla al Ministerio de Educación de la Nación.
                            </p>                            
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
