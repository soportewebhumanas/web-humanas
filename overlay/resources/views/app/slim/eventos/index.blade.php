@extends('app.slim.layouts.home')


@section('content')
<section class="become-teachers-01">
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="intro-text ">
                    <p class="pt-3"><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Actividades Académicas</span></p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
    <section class="become-teachers">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center become-title">
                    <!--<h2>Actividades académicas</h2>-->
                    <h3> Próximas actividades académicas</h3>
                    <!--<span class="line"></span>-->                       
                </div>
            </div>
                    @if (count($eventos) === 0)
                        <br><br>
                        <center style="height: 10vh;">
                        <i> <h3 style="color:royalblue">No hay próximos eventos</h3> </i>
                        </center>
                        <br><br>
                    @endif
                    <!-- -->
                    <table class="table table-hover">
                    <thead>
                        <tr style="background-color: #1B365D" class="text-light">
                            <th scope="col" class="d-none d-md-none d-lg-table-cell font-weight-bold">Evento</th>
                            <th scope="col"><span class="d-inline d-md-inline d-lg-none">Evento</span></th>
                            <th scope="col" class="d-none d-md-none d-lg-table-cell">Responsables</th>
                            <th scope="col" class="d-none d-md-none d-lg-table-cell">Inicio</th>
                            <th scope="col">Información</th>
                        </tr>
                    </thead>
                    @foreach ($eventos as $evento)
                    <?php
                        if(isset($evento->fecha_inicio)){
                            $fechaInicio=new DateTime($evento->fecha_inicio);
                            $inicioStr = $fechaInicio->format("d/m/Y");
                        }
                        if(isset($evento->fecha_fin)){
                            $fechaFin=new DateTime($evento->fecha_fin);
                            $finStr = $fechaFin->format("d/m/Y - H:i"."\h\s"); 
                        }
                    ?>                    
                    <tbody>
                        <tr>
                            <th scope="row" class="d-none d-md-none d-lg-table-cell align-middle">
                                <a href="{{route('eventos.show', ['actividad' => $evento->id] )}}">
                                    <img class="media-object" style="width:100%; height:auto" src="{{'/storage/'.$evento->imagen }}" >
                                </a>                            
                            </th>
                            <td class="p-auto align-items-center align-middle">
                                {{$evento->titulo}}
                            </td>
                            <td class="d-none d-md-none d-lg-table-cell align-middle" scope="col">
                                @foreach ($evento->responsables as $responsable)
                                    {{$responsable}}<br>
                                @endforeach
                            </td>                        
                            <td class="d-none d-md-none d-lg-table-cell align-middle" scope="col">
                                @isset($inicioStr)
                                    {{$inicioStr}}
                                @endisset
                            </td>
                            <td class="align-middle">
                                <a href="{{route('eventos.show', ['actividad' => $evento->id] )}}" class="btn pull-right text-white" style="background-color:#1b365d">Ver más</a>
                            </td>
                        </tr>
                        <tr>
                        @endforeach
                    </tbody>
                    </table>
                    <!-- -->
        </div>
    </section>
</div>

</section>

@endsection


<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
	$('body').addClass('become_teachers');
});
</script>