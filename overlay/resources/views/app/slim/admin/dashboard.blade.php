@extends('layouts.admin')



@section('top-content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4 class="page-title"> <i class="dripicons-meter"></i> Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->

@endsection

@section('content')

<div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card text-center m-b-30">
                <div class="mb-2 card-body text-muted">
                    <h3 id="kpi_visits" class="text-purple">0</h3>
                    Visitas
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card text-center m-b-30">
                <div class="mb-2 card-body text-muted">
                    <h3 id="kpi_contacts" class="text-primary">0</h3>
                    Contactos
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card text-center m-b-30">
                <div class="mb-2 card-body text-muted">
                    <h3 id="kpi_clicks" class="text-info">0</h3>
                    Clics Redes Sociales
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card text-center m-b-30">
                <div class="mb-2 card-body text-muted">
                    <h3 id="kpi_purchases" class="text-success">0</h3>
                    Clics Compras
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection