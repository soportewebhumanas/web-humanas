@extends('layouts.admin')

@section('top-content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4 class="page-title"> <i class="dripicons-meter"></i>Administracíon</h4>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card text-center ">
            <div class="card-header">
                <h3 class="">Panel de administracion</h3>
            </div>
            <div class="mb-2 card-body">
                <h4 class="text-left">Usted Puede: </h4>

                <ul class="list-group">
                    <li class="list-group-item"><a href="" class="btn btn-primary">Administrar Servicios</a></li>
                    <li class="list-group-item"><a href="{{ routeByName('eventos.listar',[]) }}" class="btn btn-primary">Administrar Eventos</a></li>
                    <li class="list-group-item"><a href="" class="btn btn-primary">Administrar Catedras libres</a></li>
                    <li class="list-group-item"><a href="" class="btn btn-primary">Administrar Publicaciones</a></li>
                    <li class="list-group-item"><a href="" class="btn btn-primary">Administrar Concursos y selección</a></li>
                    <li class="list-group-item"><a href="" class="btn btn-primary">Administrar Programas institucionales</a></li>
                    <li class="list-group-item"><a href="" class="btn btn-primary">Administrar Inscripciones</a></li>
                </ul>  
            </div>
        </div>
    </div>   
</div>

@endsection