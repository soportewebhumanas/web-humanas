@extends('app.slim.layouts.home')


@section('content')
<div class="container" style="min-height:80vh">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="intro-text">
                    <p class="pt-3">
                        <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> 
                        <span class="b-active">{{$item->nombre}}</p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
    
    <div class="container">
        <div class="card">
            <div class="card-header" style="background-color: #1b365d;">
                <h4 class="text-center pt-2 text-light">{{$item->nombre}}</h4>
            </div>
            <div class="card-body row">
                <div class="col-12 col-sm-12 col-md-8 pb-2">
                    <ul class="list-group list-group-horizontal row">
                        <li class="list-group-item col-4">Responsables</li>
                        <li class="list-group-item col-8">
                                @foreach ($item->responsables as $key => $responsable)
                                    {{$responsable}}<br/>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                     <ul class="list-group list-group-horizontal row">
                        <li class="list-group-item col-4">Contacto</li>
                        <li class="list-group-item col-8"> {{$item->email}}</li>
                    </ul>
                    <ul class="list-group list-group-horizontal row">
                        <li class="list-group-item col-4">Reseña</li>
                        <li class="list-group-item col-8">
                            <textarea id="editor">
                                {{ $item->reseña }}
                            </textarea></li>
                    </ul>
                    <ul class="list-group list-group-horizontal row">
                        <li class="list-group-item col-4">Proximas Actividades:</li>
                        <li class="list-group-item col-8">
                            <ul class="list-group">
                                @foreach ($item->eventos->where('fecha_fin','>=', new DateTime('NOW')) as $key => $evento)
                                @if ($evento->active)
                                    <li class="list-group-item">
                                        <a href="{{route('eventos.show',$evento->id)}}">{{$evento->titulo}}</a>
                                    </li>
                                @endif
                                @endforeach
                                @if (count($item->eventos->where('fecha_fin','>=', new DateTime('NOW'))) === 0)
                                    No hay próximas actividades
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="{{'/storage/'.$item->imagen}}" style="width: 100%; height: auto;" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
	$('body').addClass('become_teachers');
    
    ClassicEditor
    .create( document.querySelector( '#editor' ),  {
        language: 'es',
        defaultLanguage: 'es',
        toolbar: [],
        link: {
            addTargetToExternalLinks: true
        }
    } )
    .then( editor => {
        editor.isReadOnly = true;
        console.log(editor)
        $('.ck').addClass('border-0')
        $('.ck').css('text-align','justify')
    } )
    .catch( error => {
        console.error( error );
    } );

});
</script>
