<div class="widget-recent-work widget-sidebar">
    <h6 class="widget-title">{{$component->title}}</h6>
    <div class="flat-recentOwl"  data-column="1" data-column2="1" data-loop="true"  data-column3="1" data-gap ="0" data-dots="false" data-nav="true" >
        <div class="flat-imgbox style1 clearfix owl-carousel">

        <!--  Loop -->
@foreach ($component->galery as $item)
    
        <div class="column">  
            <div class="imgbox style1 transition-vline" >
                <a href="{{siteUrl($item->path)}}" class="fancybox">  
                    <div class="imgbox-img img-vline">
                         <img src="{{siteUrl($item->path)}}" style="max-height: 460px;  width: auto !important; margin: auto;">
                        <div class="overlay">
                            <span class="vline"></span>
                            <span class="vline vline-bottom"></span>
                        </div>
                    </div>
                </a>
            </div>
          
        </div>

@endforeach
    <!--  Loop -->    
        </div>
    </div>
   
</div>