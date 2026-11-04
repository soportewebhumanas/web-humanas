@if ($company->personal->count()>0)
    
<div class="row">
    <h5 class="col-12">Representantes</h5>
    @foreach ($company->personal as $item)
        
    <div class="col-md-6">
        <div class="author border-t-e6f3ff">
            <div class="author-avata">
                <img src="{{siteUrl($item->picture)}}">
            </div>
            <div class="author-info">
                <h6 class="name">{{$item->name}}</h6>
                <div class="wrap-list">
                    <span class="title">{{$item->charge}}:</span><br>
                    <a href="https://api.whatsapp.com/send?phone={{$item->whatsapp}}"> <span class="fa fa-whatsapp"></span>  Escribir por Whatsapp</a>
                
                </div>
            </div> 
        </div>
    </div>   

    @endforeach
    
 </div>

@endif