@extends('app.slim.layouts.home')

<style>
        .zoomEffect_1 {
        position: relative;
        overflow: hidden;
        padding: 5px;
        margin: 0px;
        max-width: fit-content;
        max-height: fit-content;
        }
        .zoomEffect_1 img {
        max-width: 100%;
        height:auto;
        -moz-transition: all 0.5s;
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
        }
        .zoomEffect_1:hover img {
        -moz-transform: scale(1.3);
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
        }

        .link {
            color: white !important;
        }
        .link a{
            color:white !important;
        }
        .link a:hover {
            color: white !important;
        }
        .link a:visited{
            color: white !important;
        }
    .texto-carreras{
        margin: 5%; 
        width: 80%; 
        position: absolute; 
        top: 50%; 
        left: 5%; 
        color: white; 
        font-weight: bold; 
        text-shadow: 0.1em 0.1em 0.2em black;    
    }
    .texto-carousel{
        color: white; 
        font-weight: bold; 
        text-shadow: 0.1em 0.1em 0.2em black;
        font-size: calc(1em + 0.2vw);
        float: left;    
    }
    .texto-carousel a{
        color: white; 
        font-weight: bold; 
        text-shadow: 0.1em 0.1em 0.2em black;
        float: left;    
    }
    .texto-carousel a:hover{
        color: white; 
        font-weight: bold; 
        text-shadow: 0.1em 0.1em 0.2em black;
        float: left;    
    }
    .icono{
        font-size: 3em; 
        color: #FFF;
    }
    .icono a{
        font-size: 3em; 
        color: #FFF;
    }
    .icono a:hover{
        font-size: 3em; 
        color: #FFF;
    }
    .descripcion {
        font-size: calc(10px + (20 - 10) * ((100vw - 300px) / (1600 - 300)));
    }            
</style>  
@section('content')
    <!-- header -->
    <!-- container -->
    <div class="container-fluid">
        <div class="row h-50" style="image-rendering: auto; background-position: center center; background-color: #1b365d; background-image:url(slim/images/posgrado/header/header-home-01.jpg); background-repeat: no-repeat; background-size: cover;"><!-- row -->
            <!-- col -->
            <div class="col-12 mx-0 mt-0 px-0 py-0">

                <div class="row mb-1">
                        <div class="col-12 px-3 mx-5 pt-5 mt-4">
                            <span class="text-left texto-carousel">
                                <a href="{{route('index')}}">Inicio&nbsp;</a> 
                                <i class='fa fa-angle-right'></i> Investigación y Posgrado
                            </span>
                        </div>
                    </div>
                    <div class="row px-2 mx-5 mt-3" style="background-color: rgba(0, 0, 0, 0.5)">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-center py-2"><a href="#" data-toggle="modal" data-target="#MariaPiaBruno" style="color: #FFF;"><i class="fas fa-user-graduate icono"></i><br><span class="descripcion">Dra. María Pía Bruno</span></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-center py-2"><a href="https://goo.gl/maps/vpSVVKoAafvX6YFHA" target="_blank" style="color: #FFF"><i class="fas fa-university icono"></i><br><span class="descripcion">Cnel. Gil 353, 2º Piso</span></a></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-center py-2"><a href="tel:+542954451661" style="color: #FFF"><i class="fas fa-phone icono"></i><br><span class="descripcion">02954 - 451661</span></a></div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-center py-2"><a href="mailto:posgrado@humanas.unlpam.edu.ar" style="color: #FFF"><i class="far fa-envelope icono"></i><br><span  class="descripcion">posgrado@humanas.unlpam.edu.ar</span></a></div>                    
                    </div>

            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
    <!-- header -->
    <section class="become-teachers-01">

                        <!-- Modal María Pía Bruno-->
                        <div class="modal fade" id="MariaPiaBruno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header"  style="background-color: #26406C">
                                <h5 class="modal-title text-light" id="exampleModalLabel">Secretaria de Investigación y Posgrado</h5>
                                <button class="shadow shadow-lg" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-left text-light">
                                <div class="row mx-1">
                                    <img class="col-4 card card-img-top px-0" src="slim/images/teachars/pia-web.jpg" alt="María Pía Bruno">
                                    <div class="col-8">
                                        <span class="card-title text-dark" style="font-size: 1.2rem">Dra. María Pía Bruno</span>			
                                        <p class="card-text" style="font-size: 0.9rem;">
                                            SECRETARIA INVESTIGACIÓN Y POSGRADO<br>
                                            secretariaposgrado@humanas.unlpam.edu.ar<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" style="background-color: #1b365d; color:white" data-dismiss="modal">Cerrar</button>
                            </div>
                            </div>
                        </div>
                        </div>                    
                        <!-- Modal María Pía Bruno-->
        <div class="container pt-3">
            <div class="row">
                <div class="col-12">
                    <p class="text-justify font-weight-bold">Humanas posee una oferta académica amplia, que incluye 2 maestrías y 3 especializaciones. Te invitamos a conocer nuestras carreras. </p>
                </div>
            </div>
        </div>

        <div class="container-fluid pb-5 pt-2">
                <div class="row" style="padding: 0% 15%;">
                    <div class="col-12 col-s-12 col-lg-4 py-2" style="background: #00028a; background: -webkit-linear-gradient(0deg, #00028a 0%, #000000 100%); background: linear-gradient(0deg, #00028a 0%, #000000 100%); border-top: 6px solid #FFF; border-bottom: 6px solid #FFF; border-left: 14px solid #FFF; border-right: 14px solid #FFF; display:flex; justify-content: center; align-items: center;">
                        <h2 class="text-light font-weight-bold">Carreras</h2>
                    </div>
                    
                    <div class="zoomEffect_1 col-12 col-s-12 col-lg-4">
                        <img src="slim/images/posgrado/especializacion-docencia.png" alt="photo">
                        <p class="texto-carreras">
                            <a href="{{ route('posgrado.especializacion-en-docencia-en-educacion-superior')}}" class="link">Especialización en Docencia en Educación Superior</a>
                        </p>
                    </div>
                    <div class="zoomEffect_1 col-12 col-s-12 col-lg-4"">
                        <img src="slim/images/posgrado/especializacion-historia.png" alt="photo">
                        <p class="texto-carreras">
                            <a href="{{ route('posgrado.especializacion-historia-regional')}}" class="link">Especialización en Historia Regional</a>
                        </p>
                    </div>
                    <div class="zoomEffect_1 col-12 col-s-12 col-lg-4"">
                        <img src="slim/images/posgrado/especializacion-lengua.png" alt="photo">
                        <p class="texto-carreras">
                            <a href="{{ route('posgrado.especializacion-en-ensenanza')}}" class="link">Esp. en Enseñanza de la Lengua y la Literatura</a>
                        </p>
                    </div>                                        
                    <div class="zoomEffect_1 col-12 col-s-12 col-lg-4"">
                        <img src="slim/images/posgrado/maestria-educacion.png" alt="photo">
                        <p class="texto-carreras">
                            <a href="{{route('posgrado.maestria-educacion')}}" class="link">Maestría en Docencia en Educación Superior</a>
                        </p>
                    </div>

                    <div class="zoomEffect_1 col-12 col-s-12 col-lg-4"">
                        <img src="slim/images/posgrado/maestria-estudios-sociales.png" alt="photo">
                        <p class="texto-carreras">
                            <a href="{{route('posgrado.maestria-estudios-sociales')}}" class="link">Maestría en Estudios Sociales y Culturales</a>
                        </p>
                    </div>                    
                </div>
            </div>
        </div>
    </section>


@endsection