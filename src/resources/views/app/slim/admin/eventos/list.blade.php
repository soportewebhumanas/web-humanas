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
        <div class="card text-center container">
            <div class="card-header">
                <h3 class="">Eventos</h3>
            </div>
            <div class="mb-2 card-body">
                <table class="table thead-dark table-responsive-md table-responsive-sm" id="eventos_table" >
                    <thead>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        @foreach ($eventos as $evento)
                            <tr>
                                <td>{{$evento->title}}</td>
                                <td>{{$evento->date}}</td>
                                <td>{{$evento->type->name}}</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input text-success cambio-estado-evento" data-id='{{ $evento->id }}' id="{{$evento->id}}">
                                    <label class="custom-control-label text-capitalize" for="{{$evento->id}}">                                            
                                       </label>
                                    </div>

                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>               
                
            </div>
        </div>
    </div>   
</div>

@endsection

@section('scripts')
    <script>
        $(function () {
            var table = $('#eventos_table').DataTable({
                    "dom": "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>><'row'<'col-sm-12't>><'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",
                    buttons: [{
                        text: 'Agregar evento',
                        action: function ( e, dt, node, config ) {
                           window.location = '{{ routeByName("eventos.crear",[]) }}'
                        }
                    }],
                    "language": {
                            "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                    },
                });
                
        })
        
    </script>
@endsection