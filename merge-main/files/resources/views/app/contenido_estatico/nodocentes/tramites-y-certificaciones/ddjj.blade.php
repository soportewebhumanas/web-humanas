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
                                <span class="b-active">DDJJ</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Declaracion Jurada</h3>
                        <p class="text-justify">
                                Anualmente, las/os trabajadoras/es nodocentes deberán presentar la Declaración Jurada de cargos ante el Departamento de Recursos Humanos de la Facultad de Ciencias Humanas. <br><br>
                                La presentación se realizará hasta el 30 de abril.<br><br> 
                                Los documentos están disponibles a través de los siguientes enlaces: <br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1PiCibVBLw47lUko6u_NAqfJ9OUSUcZn7/view?usp=sharing" target="_blank">Ver DDJJ</a><br>
                                <i class="fa fa-file-excel-o text-success" aria-hidden="true"></i> <a href="https://docs.google.com/spreadsheets/d/1PEsUKSSlz25ylVk2TT4ETXOCG8TfMomt/edit?usp=sharing&amp;ouid=100666954725665481049&amp;rtpof=true&amp;sd=true" target="_blank">Ver DDJJ de cargos</a><br><br>
                                Por consultas, comunicarse a <a href="mailto:recursoshumanos@humanas.unlpam.edu.ar">recursoshumanos@humanas.unlpam.edu.ar</a>  
                        </p>                        
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection