@extends('layouts.home')

@section('content')

            <div class="content-wrap blog-single-page">
                <div class="container">  
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="content-page-wrap">
                                <div class="post-single border-bt-f0f0f0">
                                    <div class="content-single">
                                    <h3 class="title">{{$article->title}}</h3>
                                       

                                        <p class="text1">
                                        {{$article->page->subtitle}}
                                        </p>
                                      
                                    </div>
                                    @foreach ($article->page->components as $component)
                                    @switch($component->type)
                                        @case(1)
                                            @include('layouts.components.image')
                                            @break
                                        @case(2)
                                            @include('layouts.components.image-link')
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
                                        @case(8)
                                            @include('layouts.components.text-article')
                                            @break
                                        @default
                                    @endswitch
                                        
                                    @endforeach
                                    {{--<div class="video-responsive border-ra4 ">
                                        <iframe src="https://www.youtube.com/embed/DoLQ_M6dZfg" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="img-single">
                                        <a href="#"><img class="border-ra4 " src="images/noticiasyeventos/sponsors.png"></a>
                                    </div>--}}
                                  
                                    <div class="row">
                                        <div class="col-md-6">
                                        
                                        </div>
                                        <div class="col-md-6">
                                            <div class="socails flat-text-right">
                                                <ul class="list">
                                                    <li>COMPARTIR</li>
                                                    <li class="facebook"><a href="#"><span class="ion-social-facebook"></span></a></li>
                                                 
                                                    <li class="twitter"><a href="#"><span class="ion-social-twitter"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                            
                               
                            </div> <!-- /.content-page-wrap -->
                        </div>
                        @include('layouts.components.sidebar')
                                
                    </div> 
                </div> <!-- /.container -->
            </div> <!-- /.content-wrap -->

@endsection