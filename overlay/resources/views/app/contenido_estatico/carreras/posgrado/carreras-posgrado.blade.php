<style>
                                    /* From Uiverse.io by jvcrz */     
                                    .tarjeta {
                                    font-family: "Poppins", sans-serif;
                                    width: 300px;
                                    height: 289px;
                                    border-radius: 8px;
                                    background-color: #1b365d;
                                    padding: 16px 32px 16px 32px;
                                    display: flex;
                                    flex-direction: column;
                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                    position: relative;
                                    box-sizing: border-box;
                                    overflow: hidden;
                                    cursor: pointer;
                                    }

                                    .cls-1 {
                                    fill: #fff;
                                    }

                                    .title {
                                        text-transform: uppercase;
                                        font-size: 1.4em;
                                        font-weight: 300;
                                        color: #ffffff;
                                        margin-bottom: 12px;
                                    }

                                    .label {
                                    font-size: 18px;
                                    color: #ffffff !important;
                                    opacity: 0.8;
                                    line-height: 1.4;
                                    font-weight: 300;
                                    text-transform: uppercase;
                                    }

                                    .ico {
                                    position: absolute;
                                    bottom: 16px;
                                    left: 92px;
                                    display: flex;
                                    gap: 32px;
                                    opacity: 0;
                                    transition: left 0.3s ease, opacity 0.3s ease;
                                    }

                                    .tarjeta::before {
                                    content: "";
                                    position: absolute;
                                    left: 0;
                                    top: 0;
                                    bottom: 0;
                                    width: 20px;
                                    background-image: linear-gradient(to bottom, #757aba, #15a6b9);
                                    border-radius: 8px 0 0 8px;
                                    transition: width 0.3s ease;
                                    }

                                    .tarjeta:hover::before {
                                    width: 10px;
                                    }

                                    .tarjeta:hover {
                                    border-left-width: 10px;
                                    }

                                    .title,
                                    .label {
                                    transition: transform 0.3s ease;
                                    }

                                    .tarjeta:hover .title,
                                    .tarjeta:hover .label {
                                    transform: translateX(20px);
                                    }

                                    .tarjeta:hover .ico {
                                    left: 52px;
                                    opacity: 0.3;
                                    }

                                    .gradient {
                                    position: absolute;
                                    top: -200px;
                                    left: -200px;
                                    width: 600px;
                                    height: 600px;
                                    background: #ffffff;
                                    border-radius: 50%;
                                    filter: blur(200px);
                                    opacity: 0;
                                    transition: opacity 0.3s ease;
                                    }

                                    .tarjeta:hover .gradient {
                                    opacity: 0.04;
                                    }
</style>
@extends('app.slim.layouts.home')

@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="intro-text ">
                                <div class="row">
                                <!-- Card-1 -->
                                <div class="col-lg-4 col-sm-12 col-12 my-1 d-flex justify-content-center">
                                    <!-- From Uiverse.io by jvcrz --> 
                                    <div class="tarjeta">
                                        <div class="gradient">
                                        </div>
                                        <a href="{{route('carreras.posgrado.especializacion.esp_doc_ed_superior')}}">
                                            <p class="title">Especialización</p>
                                            <p class="label">
                                            <span style="color: #FFF !important;">en Docencia en Educación Superior</span><br>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card-1 -->
                                <!-- Card-2 -->
                                <div class="col-lg-4 col-sm-12 col-12 my-1 d-flex justify-content-center">
                                    <!-- From Uiverse.io by jvcrz --> 
                                    <div class="tarjeta">
                                        <div class="gradient">
                                        </div>
                                        <a href="{{route('carreras.posgrado.especializacion.esp_doc_ed_superior-a-distancia')}}">
                                            <p class="title">Especialización</p>
                                            <p class="label">
                                            <span style="color: #FFF !important;">en Docencia en Educación Superior (a distancia)</span><br>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card-2 -->
                                <!-- Card-3 -->
                                <div class="col-lg-4 col-sm-12 col-12 my-1 d-flex justify-content-center">
                                    <!-- From Uiverse.io by jvcrz --> 
                                    <div class="tarjeta">
                                        <div class="gradient">
                                        </div>
                                            <a href="{{route('carreras.posgrado.especializacion.esp_historia_regional')}}">
                                                <p class="title">Especialización</p>
                                                <p class="label">
                                                <span style="color: #FFF !important;">en Historia Regional (a Distancia)</span><br>
                                                </p>
                                            </a>
                                    </div>
                                </div>
                                <!-- Card-3 -->

                                <!-- Card-4 -->
                                <div class="col-lg-4 col-sm-12 col-12 my-1 d-flex justify-content-center">
                                    <!-- From Uiverse.io by jvcrz --> 
                                    <div class="tarjeta">
                                        <div class="gradient">
                                        </div>
                                        <a href="{{route('carreras.posgrado.especializacion.esp_ens_lengua_y_literatura')}}">
                                            <p class="title">Especialización</p>
                                            <p class="label">
                                            <span style="color: #FFF !important;">en Enseñanza de la Lengua y la Literatura</span><br>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card-4 -->
                                <!-- Card-5 -->
                                <div class="col-lg-4 col-sm-12 col-12 my-1 d-flex justify-content-center">
                                    <!-- From Uiverse.io by jvcrz --> 
                                    <div class="tarjeta">
                                        <div class="gradient">
                                        </div>
                                        <a href="{{route('carreras.posgrado.maestria.doc_ed_superior')}}">
                                            <p class="title">Maestría</p>
                                            <p class="label">
                                            <span style="color: #FFF !important;">en Docencia en Educación Superior</span><br>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card-5 -->
                                <!-- Card-6 -->
                                <div class="col-lg-4 col-sm-12 col-12 my-1 d-flex justify-content-center">
                                    <!-- From Uiverse.io by jvcrz --> 
                                    <div class="tarjeta">
                                        <div class="gradient">
                                        </div>
                                            <a href="{{route('carreras.posgrado.maestria.doc_ed_superior-a-distancia')}}">
                                                <p class="title">Maestría</p>
                                                <p class="label">
                                                <span style="color: #FFF !important;">en Docencia en Educación Superior (a distancia)</span><br>
                                                </p>
                                            </a>
                                    </div>
                                </div>
                                <!-- Card-6 -->
                                <!-- Card-7 -->
                                <div class="col-lg-4 col-sm-12 col-12 my-1 d-flex justify-content-center">
                                    <!-- From Uiverse.io by jvcrz --> 
                                    <div class="tarjeta">
                                        <div class="gradient">
                                        </div>
                                            <a href="{{route('carreras.posgrado.maestria.estudios_sociales_y_culturales')}}">
                                                <p class="title">Maestría</p>
                                                <p class="label">
                                                <span style="color: #FFF !important;">en Estudios Sociales y Culturales</span><br>
                                                </p>
                                            </a>
                                    </div>
                                </div>
                                <!-- Card-7 --> 
                                <!-- Card-8 -->
                                <div class="col-lg-4 col-sm-12 col-12 my-1 d-flex justify-content-center">
                                    <!-- From Uiverse.io by jvcrz --> 
                                    <div class="tarjeta">
                                        <div class="gradient">
                                        </div>
                                            <a href="{{route('carreras.posgrado.doctorado.doctorado-en-estudios-contemporaneos')}}">
                                                <p class="title">Doctorado</p>
                                                <p class="label">
                                                <span style="color: #FFF !important;">en Estudios Contemporáneos en Educación</span><br>
                                                </p>
                                            </a>
                                    </div>
                                </div>
                                <!-- Card-8 -->                                                                                                
                                
                                </div>                                
                                
                        </div>
                        <div class="col-12">
                        <hr>
                        </div>
                    </div><!-- /.row -->
                    <br><br>
                </div>
            </section>
        </div>
    </section>
@endsection