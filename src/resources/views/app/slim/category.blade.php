@extends('layouts.home')

@section('content')
    
<section class="flat-title-page parallax style4" style="background: url('images/expositores/bg-all.jpg') center center no-repeat;">
    <div class="overlay style4"></div> 
    <div class="container wrap-title-page bg-img ">
        <div class="title-page">
            <h2 class="title font-weight-700">{{$category->name}}</h2>
            {{-- <p class="text">Encuentre en esta sección todos los expositores de la Expo Rural Virtual 2020.</p> --}}
        </div>
        <div class="breadcrumbs">
            <ul>
                <li><a href="{{siteUrl('/categorias')}}">Expositores</a></li>
                <li><a href="#">{{$category->name}}</a></li>
            </ul>
        </div>
        <img src="images/title-page/bg-white.png" alt="bookflare" class="bg-breadcrumbs style2">
    </div>
</section> <!-- /.flat-title-page -->

<div class="content-wrap  courses-grid-v1-page" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="content-page-wrap">
            {{-- <ul class="flat-filter-isotype style1 text-center ">
                @foreach ($categories as $category)
                    
                <li ><a href="{{siteUrl('/categoria/'.$category->pretty_url)}}" >{{$category->name}}</a></li>
               
                @endforeach
            </ul> --}}


            <div class="flat-courses clearfix isotope-courses">


            @foreach ($companies as $company)
                <div class="course one-of-five text-2ebd59 Marketing Design ">
                    <div class="course-border border-f-e6f3ff border-ra4 transition-vline">   
                        <div class="course-img img-vline">
                            <a href="{{siteUrl($company->pretty_url)}}"><img src="{{siteUrl($company->page->preview)}}" alt="{{$company->name}}"></a>
                            <div class="overlay">
                                <span class="vline"></span>
                                <span class="vline vline-bottom"></span>
                            </div>
                        </div>
                        <div class="course-content">
                            <div class="text-wrap border-bt-e6f3ff">
                                <h6 class="title"><a href="{{siteUrl($company->pretty_url)}}">{{$company->name}}</a></h6>
                                <p class="teacher"><a href="{{siteUrl('/categorias/'.$company->category->pretty_url)}}">{{$company->category->name}}</a></p>
                                <p class="description">{{mb_substr($company->page->description, 0, 200)}}@if(strlen($company->page->description)>200)...@endif</p>
                            </div>
                            <div class="wrap-rating-price">
                                <a href="{{siteUrl($company->pretty_url)}}" class=" btn-learn-more">MÁS INFO</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.course -->

            @endforeach
                
                
               
            </div> <!-- /.flat-courses -->
        </div> <!-- /.content-page-wrap -->
      
       
    </div> <!-- /.container -->
</div> <!-- /.content-wrap -->



@endsection