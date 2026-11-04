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
                                <span><a href="{{route('comunidad-graduada.comunidad_graduada')}}">Comunidad Graduada <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Cursos y Seminarios anteriores</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 become-title">
                        <!--<div style="background-color: #26406C;" class="col-12 font-weight-bold py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0 text-light">Posgrado</div>-->
                        <div class="col-12 py-2 border border-dark border-right-1 border-top-1 border-bottom-0 border-left-1">
                           
                                <span class="font-weight-bold text-dark">Cursos y Seminarios anteriores</span><br>
                                <ul class="text-primary text-justify">
                                    <li><a href="{{route('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2021')}}">2021</a></li>
                                    <li><a href="{{route('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2020')}}">2020</a></li>
                                    <li><a href="{{route('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2019')}}">2019</a></li>
                                    <li><a href="{{route('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2018')}}">2018</a></li>
                                    <li><a href="{{route('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2017')}}">2017</a></li>
                                    <li><a href="{{route('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2016')}}">2016</a></li>
                                    <li><a href="{{route('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2015')}}">2015</a></li>
                                    <li><a href="{{route('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2014')}}">2014</a></li>
                                    <li><a href="{{route('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2013')}}">2013</a></li>                                                                        
                                </ul>
                                <!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13Mq_jKxpLOty_FwkMQVXtXZXMOU6d-vo/view?usp=sharing" target="_blank">Reglamento de Posgrados</a>-->
                            
                        </div>
                        <!--<div style="background-color: #26406C;" class="col-12 font-weight-bold py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0 text-light">Programa de Formación Permanente</div>-->
                        <div class="col-12 py-2 border border-dark border-right-1 border-top-0 border-bottom-1 border-left-1">
                            <!--<span class="font-weight-bold text-dark">Actividades académicas vigentes</span><br>
                                <ul class="text-primary text-justify">
                                    <li><a href="{{route('eventos.index')}}">Acceder</a></li>
                                </ul>-->                            
                            <span class="font-weight-bold text-dark">Cursos y seminarios extracurriculares anteriores</span>
                                <ul class="text-primary text-justify">
                                    <li><a href="{{route('cursos_2021')}}">2021</a></li>
                                    <li><a href="{{route('cursos_2020')}}">2020</a></li>
                                </ul>
                                <!--<i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2019_538.pdf" target="_blank">Resolución 538-CD-2019</a>-->
                        </div>                        
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
