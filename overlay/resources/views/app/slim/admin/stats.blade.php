@extends('layouts.admin')



@section('top-content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4 class="page-title"> <i class="dripicons-meter"></i> Estadísticas de {{$company->name}}</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="row">
    <div class="col-12 mb-4">
        <div id="morris-bar-example" class="dash-chart"></div>
        
    </div>
</div>
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
    <script>
        
        var G = null;
        
        $(document).ready(function() {
        G = Morris.Bar({
            data: [],
            element: 'morris-bar-example',
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels:  ['Visitas', 'Contactos'],
            gridLineColor: 'rgba(255,255,255,0.1)',
            gridTextColor: '#98a6ad',
            barSizeRatio: 0.4,
            resize: true,
            hideHover: 'auto',
            barColors: ['#2f8ee0','#4bbbce']
        });
        
        $.ajax({
                    type: 'GET',
                    url: "{{siteUrl('admin/dashboard/graph/'.$company->pretty_url)}}",
                    success: function(data) {
                        $("#kpi_visits").html(data.kpi.visits);
                        $("#kpi_contacts").html(data.kpi.contacts);
                        $("#kpi_clicks").html(data.kpi.clicks);
                        $("#kpi_purchases").html(data.kpi.purchases);
                            G.setData( data.graph );
                        }
                    });

        });
    </script>
@endsection