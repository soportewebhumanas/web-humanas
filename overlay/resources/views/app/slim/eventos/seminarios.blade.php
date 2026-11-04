@extends('app.slim.layouts.home')


@section('content')
<section class="become-teachers-01 mb-auto">
<div class="container">
    <div class="containerflex">
        <div class="row">
            <div class="col-md-12">
                <div class="intro-text ">
                    <p class="pt-3"><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Seminarios</span></p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
    <section class="body">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center become-title">
                    <h2 class="arialGrande">Seminarios</h2>
                    <span class="line"></span>
                </div>
            </div>
            @isset($eventos)
                <div class="row mt-3">
                    @if(count($eventos) === 0)
                        <h3 class="text-center w-100" style="color:#26406C"><i>No hay seminarios disponibles</i></h3>
                    @endif
                   
                    <!--septiembre 2024-->
                    <table class="table table-striped table-bordered">
                        <thead style="background-color: #26406C; color: #FFF">
                            <tr>
                                <th scope="col">Evento</th>
                                <th scope="col">Inicio</th>
                                <th scope="col">Información</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($eventos as $evento)
                        @php
                            $ruta = $evento->imagen;
                                $rutaModificada = Str::replace('public\eventos\imagenes/', 'public/eventos/imagenes/', $ruta);
                        @endphp
                        <?php
                        if(isset($evento->fecha_inicio)){
                            $fechaInicio=new DateTime($evento->fecha_inicio);
                            $inicioStr = $fechaInicio->format("d/m/Y");
                        }
                        ?>                        
                            <tr class="p-3">
                                <td>{{$evento->titulo}}</td>
                                <td type="date">{{$inicioStr}}</td>
                                <td>
                                    <a href="{{route('eventos.show', ['actividad' => $evento->id] )}}" style="color: #1b365d;  font-size: 0.9rem;);">
                                        + Detalle
                                    </a>                                    
                                </td>
                            </tr>
                        @endforeach                            
                        </tbody>
                    </table>

                    <!--
                    <div class="container card">
                        <div class="row">
                            <div class="col-8 p-3 text-light" style="background: linear-gradient(#15a6b9, #08444C);">
                                
                            </div>
                            <div class="col-2 p-3 text-center d-flex justify-content-center align-items-center" style="background: linear-gradient(#757ab9, #45486E);">
                                <div>
                                    <a href="{{route('eventos.show', ['actividad' => $evento->id] )}}" style="color: #FFF; font-size: 0.9rem;">
                                        Comienza: 
                                    </a>
                                </div>
                            </div>                           
                            <div class="col-2 p-3 text-center d-flex justify-content-center align-items-center" style="background: linear-gradient(#b3d2e7, #788D9C">
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <!--septiembre 2024-->

                    <!-- tarjeta seminarios -->
                    <!--
                    <div class="col-lg-12 col-xl-8 col-md-8 col-8">

                            
                            <div class="d-flex">
                                <div class="card mt-3" style="width:100%;">
                                    <div class="card-img-top mx-0 my-0 px-0 py-0"
                                            style="
                                                image-rendering: auto;
                                                background-position: top center;
                                                background-size: cover;
                                                background-color: #FFF;
                                                background-repeat: no-repeat;
                                                height: 100px;
                                                width: auto;
                                            "
                                        >
                                        <style>
                                            .card-title a{
                                                text-decoration:none !important;
                                            }
                                        </style>
                                        <div class="container d-flex align-items-center justify-content-left mx-0 p-2" style="height: 70px; background: linear-gradient(#1b365d, #39567F);">
                                                    <h5 class="card-title text-justify">
                                                        <span style="color: #1b365d !important; font-size: 1rem; font-weight: bold;">
                                                            <a href="{{route('eventos.show', ['actividad' => $evento->id] )}}" style="color: #FFF;  font-size: 0.9rem;">
                                                                ...
                                                            </a>
                                                        </span>
                                                    </h5>                                        
                                        </div>

                                        <div class="container" style="height: 30px;">
                                            <div class="row" style="background-color: rgba(255, 255, 255, 0.9); height: 30px;">
                                                <div class="col-2" style="border-style: solid; border-color: #15a6b9; background-color: #15a6b9; height: 30px;"></div>
                                                <div class="col-2" style="border-style: solid; border-color: #757ab9; background-color: #757ab9; height: 30px;"></div>
                                                <div class="col-1" style="border-style: solid; border-color: #b3d2e7; background-color: #b3d2e7; height: 30px;"></div>
                                                <div class="col-6 d-flex align-items-center justify-content-center">
                                                    ...
                                                </div>                                        
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                    </div>
                    -->

                    <!-- tarjeta seminarios -->
            @endisset
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
<style>
    /*background-color: #1b365d;
    background-image:url({{'/storage/'.$rutaModificada}});*/
</style>