@extends('layouts.home')

@section('content')

            <section class="flat-title-page parallax style4" style="background: url('{{siteUrl('images/expositores/bg-all.jpg')}}') center center no-repeat;">
                <div class="overlay style4"></div> 
                <div class="container wrap-title-page bg-img ">
                    <div class="title-page">
                        <h2 class="title font-weight-700">Remates</h2>
                        <p class="text">Información sobre Remates de Hacienda y de Aves.</p>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Expo 2020</a></li>
                            <li><a >Remates</a></li>
                        </ul>
                    </div>
                    <img src="{{siteUrl('images/title-page/bg-white.png')}}"  class="bg-breadcrumbs style2">
                </div>
            </section> <!-- /.flat-title-page -->

            <div class="content-wrap  about-us-page">
                <div class="container">
                    <div class="content-page-wrap">
                        <div class="flat-about-info">
                            <div class="info-img border-ra4">
                                <img src="{{siteUrl('images/noticiasyeventos/hacienda.jpg')}}" >
                            </div> <!-- /.info-img -->
                            <div class="info-content border-ra4 border-f-e6f3ff">
                                <div class="heading">
                                    <h6 class="title-small" id="hacienda"> MIÉRCOLES 21 - 14,30 HS</h6>
                                    <h3 class="title">Remates de Hacienda</h3>
                                </div>
                                <p class="text"> 64º  EXPOSICION GANADERA</p>
                                <p class="text">    40º  CONCURSO DE NOVILLO TIPO
                                    </p>
                                <p class="text"> 24º  CONCURSO DE TERNERAS Y VAQUILLONAS</p>
                                <h6  class="title font-Publico font-weight-700"><a >    32 años Salliqueló CAPITAL PROVINCIAL DEL NOVILLO TIPO</a> </h6>

                                <a style="color: #FFF !important; background-color: #515e6f !important"  class="btn-get-ticket flat-button mt-3">REPROGRAMADO AL 4/11/2020 POR COVID-19</a>
                              
                            </div> <!-- /.info-content -->
                        </div> <!-- /.flat-info -->       
                    </div> <!-- /.content-page-wrap -->
                </div> <!-- /.container -->

                <div class="container">
                    <div class="content-page-wrap">
                        <div class="flat-about-info">
                            <div class="info-img border-ra4">
                                <a href="https://bermejo.plazaganadera.com/a2/index.cfm?aplicacion=APP031"><img src="{{siteUrl('images/noticiasyeventos/aves.jpg')}}" ></a>
                            </div> <!-- /.info-img -->
                            <div class="info-content border-ra4 border-f-e6f3ff">
                                <div class="heading">
                                    <h6 class="title-small" id="aves"> SÁBADO 24 - 9 HS</h6>
                                    <h3 class="title">Remates de Aves</h3>
                                </div>
                                <p class="text"> 64º  EXPOSICION AVICOLA</p>
                             
                             
                                <div class="wrap-btn">
                                    <a href="/catalogo-de-aves" class="flat-button btn-contact ">VER CATÁLOGO</a>
                                </div>
                                <div class="wrap-btn">
                                    <a href="https://bermejo.plazaganadera.com/a2/index.cfm?aplicacion=APP031" target="_blank" class="flat-button btn-contact ">VER EN VIVO</a>
                                </div>
                            </div> <!-- /.info-content -->
                        </div> <!-- /.flat-info -->       
                    </div> <!-- /.content-page-wrap -->
                </div> <!-- /.container -->
            
             
            </div> <!-- /.content-wrap -->


            
@endsection
