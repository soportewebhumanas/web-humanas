<li id="{{$component->id}}" class="ui-state-default form-group row">
    <div class="card" style="width: 100%;">
        <div class="card-header">
            <h4>Productos</h4>
        </div>
        <div class="card-body">
            <p class="card-text">El listado de productos se generá de manera automática para mostrar todos aquellos que se hayan cargado en la sección de <a href="{{siteUrl('/admin/settings/productos')}}">PRODUCTOS</a> opcionalmente se puede ocultar.</p>
            <input id="component_calendar" type="checkbox" @if($component->content == '1') checked @endif class="iswitch iswitch-primary pull-right switch-active" data-component-id="{{$component->id}}">
        </div>
    </div>
</li>