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
                                <span class="b-active">Certificación de Servicios</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Certificación de Servicios</h3>
                            <p class="text-justify">
                            Las/os trabajadores/es nodocentes podrán solicitar la certificación de servicios para su presentación ante otros organismos. El trámite se realiza directamente en el Departamento de Recursos Humanos de la Facultad de Ciencias Humanas.
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection