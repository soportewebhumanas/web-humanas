@extends('layouts.home')

@section('content')
    
<section class="flat-title-page parallax style4" style="background: url('{{siteUrl($company->page->banner)}}') center center no-repeat;">
    <div class="overlay style4"></div> 
    <div class="container wrap-title-page bg-img ">
        <div class="title-page">
            <h2 class="title font-weight-700"><a href="#">{{$company->page->title}}</a></h2>
            <p class="text">{!! nl2br($company->page->description)!!}</p>
        </div>
        <div class="breadcrumbs">
            <ul>
                <li><a href="{{siteUrl('/expositores')}}">Expositores</a></li>
                <li><a href="{{siteUrl('/expositores/'.$company->category->pretty_url)}}">{{$company->category->name}}</a></li>
            </ul>
        </div>
        <img src="{{siteUrl('images/title-page/bg-white.png')}}" alt="bookflare" class="bg-breadcrumbs style2">
    </div>
</section> <!-- /.flat-title-page -->

<div class="content-wrap  courses-single-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12"   >
                <div class="content-page-wrap">
                    <div class="course-single">
                      


                        <div class="content">

@foreach ($company->page->components as $component)
@switch($component->type)
    @case(1)
        @include('layouts.components.image')
        @break
    @case(2)
        @include('layouts.components.image-link')
        @break
    @case(3)
        @include('layouts.components.text')
        @break
    
    @case(4)
        @include('layouts.components.video')
        @break
        
    @case(5)
        @include('layouts.components.title')
        @break
    @case(6)
        @include('layouts.components.products')
        @break
    @case(7)
        @include('layouts.components.galery')
        @break
    @default
@endswitch
    
@endforeach
{{-- 

                                     <!--   BLOQUE MP -->

                                   <div class="comment bg-fff border-f-e6f3ff">
                                    <h6 class="title text-center">Una descripción del Botón</h6>
                                    <div class="text-center pt-3">
                                         <!--   ESTE DATO BRINDA MP -->
                                    <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                                    data-preference-id="166879731-489b50a4-9b7a-404c-8928-5bc0c099bcea">
                                    </script>
                                       <!--   ESTE DATO BRINDA MP -->
                                    </div>
                                </div>

                                    <!--   FIN BLOQUE MP --> --}}

@include('layouts.components.representantes')

                        </div>
                    </div> <!-- /.course-single -->
                 
                </div> <!-- /.content-page-wrap -->
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">

                    <div class="widget-contact border-ra4 flat-text-center">
                 
                        <h4 class="widget-title ">Contactar</h4>
                        <div class="flat-form-reply">
                           
                            <form id="form-message" action="{{siteUrl('/'.$company->pretty_url.'/message')}}" method="post">
                               
                                    <div class="wrap-input pt-3">
                                        <input id="form-m-name" type="text" name="name"  placeholder="Nombre" required="">
                                    </div>
                                    <div class="wrap-input pt-3 ">
                                        <input id="form-m-email" type="email" name="email"  placeholder="Email" required="">
                                    </div>
                                
                                <div class="wrap-textarea pt-3">
                                    <textarea id="form-m-message" name="message" placeholder="Su mensaje..." required=""></textarea>
                                </div>
                                <div >
                                    <button type="submit" class="flat-button btn-send">ENVIAR</button>
                                </div>   
                                <p id="form-m-result" class="text pt-2 " style="font-size: 1.5rem;color: #192836;"></p>
                                
                            </form>
                        </div>
                    
                     </div> <!-- /.widget-subscribe -->
@if (strlen($company->whatsapp)>0)
    
                     <div class="widget-whatsapp border-ra4 flat-text-center">
                 
                   
                        <a href="https://api.whatsapp.com/send?phone={{$company->whatsapp}}" onclick="trackEvent(2,1)" target="_blank" class="flat-button btn-start-slider border-ra4 "> <span class="fa fa-whatsapp"></span>  Escribir por Whatsapp</a>
                        
                    
                     </div> <!-- /.widget-subscribe -->
@endif

                    <div class="widget-subscribe border-ra4 flat-text-center" style="background: url('{{siteUrl('images/sidebar/bg-sidebar-detail-2.png')}}') center center no-repeat;">
                 
                        <h4 class="widget-title ">Seguir en contacto </h4>
                       @if ($company->page->facebok || $company->page->youtube || $company->page->instagram || $company->page->twitter)
                        <p class="text ">Seguinos en redes </p>
                        <p >  
                            <div class="keepintouch">
                                <ul class="list ">
                                
                                    @if ($company->page->facebook) <li><a href="{{addhttp($company->page->facebook)}}" onclick="trackEvent(2,2)" target="_blank"><span class="fa fa-facebook-official"></span></a></li> @endif
                                    @if ($company->page->youtube) <li><a href="{{addhttp($company->page->youtube)}}" onclick="trackEvent(2,3)" target="_blank"><span class="fa fa-youtube"></span></a></li> @endif
                                    @if ($company->page->instagram) <li><a href="{{addhttp($company->page->instagram)}}" onclick="trackEvent(2,4)" target="_blank"><span class="fa fa-instagram"></span></a></li> @endif
                                    @if ($company->page->twitter) <li><a href="{{addhttp($company->page->twitter)}}" onclick="trackEvent(2,5)" target="_blank"><span class="fa fa-twitter"></span></a></li> @endif
                                        
                                </ul>
                            </div>   
                        </p>
                        @if ($company->page->web)
                        <p class="text pt-3">o visitanos en </p>
                        @endif
                        @endif
                        @if ($company->page->web) <h5 class="widget-title "><a href="{{addhttp($company->page->web)}}" target="_blank">{{$company->page->web}}</a></h5>@endif
                                    
                        
                        <p class="text pt-2 ">Deseo recibir ofertas y novedades <br>de <b>{{$company->page->title}}</b>. </p>
                       
                        <div class="wrap-form-subscribe mt-2">
                            <form id="form-subscribe" action="{{siteUrl('/'.$company->pretty_url.'/subscriber')}}" method="post">
                                <input id="form-s-email" type="email" name="email" required placeholder="Ingrese su e-mail">
                                <button class="btn-send flat-button">ENVIAR</button>
                                <p id="form-s-result" class="text pt-2 "></p>
                            </form>
                        </div>   
                    </div> <!-- /.widget-subscribe -->
                    <div class="flat-courses style3">
                        <div class="course style3  text-2ebd59 ">
                            <div class="course-border border-f-e6f3ff border-ra4 transition-vline">   
                                <div class="course-img img-vline">
                                    <a href="#"><img src="{{siteUrl('images/courses/curso1.jpg')}}" alt="bookflare"></a>
                                    <div class="overlay">
                                        <span class="vline"></span>
                                        <span class="vline vline-bottom"></span>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <div class="text-wrap border-bt-e6f3ff">
                                        <p class="teacher"><a href="#">CONFERENCIA</a></p>
                                        <h6 class="title"><a href="#">Carlos Etchepare: La cosecha gruesa del 2020</a></h6>
                                       
                                        <span class="price v2">JUE 22 HS</span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.course -->
                        <div class="course style3  text-2ebd59   ">
                            <div class="course-border border-f-e6f3ff border-ra4 transition-vline">   
                                <div class="course-img img-vline">
                                    <a href="#"><img src="{{siteUrl('images/courses/curso2.jpg')}}" alt="bookflare"></a>
                                    <div class="overlay">
                                        <span class="vline"></span>
                                        <span class="vline vline-bottom"></span>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <div class="text-wrap border-bt-e6f3ff">
                                        <p class="teacher"><a href="#">CONTENIDOS</a></p>
                                        <h6 class="title"><a href="#">La Leche 360º ¿que pasa antes de llegar a nuestra mesa?</a></h6>
                                       
                                        <span class="price v2">DISPONIBLE EL JUEVES</span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.course -->
                    </div>
                </div>
            </div>    
        </div>  
    </div> <!-- /.container -->
</div> <!-- /.content-wrap -->


@endsection

@section('scripts')
    <script>
        function trackEvent(type,value){
            $.ajax({
                url: '{{siteUrl("/".$company->pretty_url."/track")}}',
                type: "POST",
                data: {"type":type,"value":value},
                success: function (data) {
                    console.log("track ok")
                }
            });
        }

        $(document).ready(function() {
            $("#form-message").submit(function(e) {
                        e.preventDefault();
                        var fd = new FormData(this);
                        $.ajax({
                            url: $(this).attr('action'),
                            type: "POST",
                            data: fd,
                            cache: false,
                            async: true,
                            scroll:true,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                $("#form-m-name").val('');
                                $("#form-m-email").val('');
                                $("#form-m-message").html('');
                                $("#form-m-result").html('Muchas gracias');
                            }
                        });
                    });
            $("#form-subscribe").submit(function(e) {
                        e.preventDefault();
                        var fd = new FormData(this);
                        $.ajax({
                            url: $(this).attr('action'),
                            type: "POST",
                            data: fd,
                            cache: false,
                            async: true,
                            scroll:true,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                $("#form-s-email").val('');
                                $("#form-s-result").html('Muchas gracias');
                                
                            }
                        });
                    });
        });
    </script>
@endsection