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
                <h3 class="">Crear un nuevo evento</h3>
            </div>
            <div class="mb-2 card-body">
                <form action="">

                    @include('admin.eventos._form')
                    <button class="btn btn-success btn-block">Guardar</button>

                </form>       
            </div>
        </div>
    </div>   
</div>

@endsection