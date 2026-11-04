@extends('app.slim.layouts.home')
    <style>
        .button {
        border: none;
        font-family: sans-serif;
        font-size: 17px;
        background: transparent;
        color: #007bff;
        border: solid 1px rgba(0, 107, 179, 0.2);
        padding: 10px;
        border-radius: 4px;
        transition-duration: 0.2s;
        text-decoration: none;
        }

        .button:before {
        content: "»";
        opacity: 0;
        margin-left: -15px;
        transition-duration: 0.2s;
        }

        .button:hover:before {
        margin-left: 0px;
        opacity: 1;
        }

        .button:hover {
        color: #6C93D5;
        background: rgba(0, 0, 0, 0.02);
        border: solid 1px gainsboro;
        text-decoration: none;
        }
		.accordion .card-header:after {
			font-family: 'FontAwesome';  
			content: "\f0aa";
			float: right;
			color: white;
		}
		.accordion .card-header.collapsed:after {
			/* symbol for "collapsed" panels */
			content: "\f0ab";
			color: white;
		}        
    </style>
@section('content')
@php
    $msg ="";
    if (!isset($_GET['anio'])){
        $anio = "";
        $msg = "Elija un año de la lista";
    }
    else
    $anio=$_GET['anio'];
@endphp
            <div class="container">
                <div class="row">
                    <div class="col-md-12 pt-3">
                        <div class="intro-text ">
                            <p><span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="{{route('noticias.index')}}">Noticias <i class='fa fa-angle-right'></i></a></span>
                            <span class="b-active">Archivo de noticias {{$anio}}</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
<div class="container">
    <div class="row">
        <div class="col-12">
                        <!--Form -->
                        <div class="p-2 d-flex justify-content-center">
                            <form action="{{route('archivo-noticias.noticias')}}" method="GET" role="buscar">
                            <div class="input-group justify-content-center">
                                <label for="anio" class="pt-2 pr-1">Buscar noticias por año</label>
                                <select class="custom-select my-1 mr-sm-2" id="buscar" name="anio" required>
                                    <option value="" disabled selected>Elija el año</option>
                                    @php
                                        for ($i=2022; $i<=date("Y"); $i++)
                                            echo "<option value='".$i."'>".$i."</option>";
                                    @endphp
                                </select>
                                <span class="input-group-btn">
                                    <button class="btn mt-2 ml-2 text-white" type="submit" title="Buscar por anio" style="background-color: #1b365d">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    </span>
                                </div>
                            </form>                
                        </div>
                        <hr>
                        <!--Form -->            
        </div>
    </div>
</div>
<div class="container" style="min-height:75vh">
    <section class="become-teachers">
        <div class="container">
            <div class="row">
                <div class="col-12 py-4">
                                <!-- Noticias -->
                                @php
                                                $noticiasAnio=[];
                                                $noticiasAnio=DB::table('noticias')->orderBy('updated_at', 'desc')->whereYear('updated_at', $anio)->get();
                                                
                                                if (sizeof($noticiasAnio)==0)
                                                    if(empty($msg)){
                                                        $msg = "No hay noticias del año ";
                                                        $msg = $msg."$anio";
                                                    }
                                                    echo "
                                                        <center class='text-danger font-weight-bold'>
                                                        <i>
                                                            $msg
                                                        </i>
                                                        </center>";
                                                
                                                $novedades=DB::table('noticias')->orderBy('updated_at', 'desc')->get();
                                                $meses = [];

                                                for ($i=1; $i<=12; $i++){
                                                    $meses[$i]=DB::table('noticias')->orderBy('updated_at', 'desc')->whereYear('updated_at', $anio)->whereMonth('updated_at', $i)->get();
                                                }

                                                /* Chequear array vacio para avisar que no hay noticias*/
                                                $nombresMeses = [
                                                    1=>'Enero',
                                                    2=>'Febrero',
                                                    3=>'Marzo',
                                                    4=>'Abril',
                                                    5=>'Mayo',
                                                    6=>'Junio',
                                                    7=>'Julio',
                                                    8=>'Agosto',
                                                    9=>'Septiembre',
                                                    10=>'Octubre',
                                                    11=>'Noviembre',
                                                    12=>'Diciembre'
                                                    ]
                                            @endphp

                                            @for ($i=1; $i<=12; $i++)
                                            @if ($meses[$i]->count()>0)
                                            <div id="accordion">
                                            <div class="card shadow-none">
                                                <div class="card-header"  style="background-color: #1b365d;" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link text-white" data-toggle="collapse" data-target="#{{$nombresMeses[$i]}}" aria-expanded="true" aria-controls="{{$nombresMeses[$i]}}">
                                                            {{$nombresMeses[$i]}}<br>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="{{$nombresMeses[$i]}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        @foreach ($meses[$i] as $mes)
                                                            @php
                                                                    $fechaNoticia=new DateTime($mes->updated_at);
                                                                    $fecha = $fechaNoticia->format("d/m/Y");
                                                            @endphp
                                                            <ul>
                                                            @if ($mes->active == 1)
                                                                <div class="card">
                                                                    <div class="row p-2 m-2">
                                                                        <div class="col-lg-5 col-md-4 col-12">
                                                                            @php
                                                                                $URL = "/storage/".$mes->imagen;
                                                                            @endphp
                                                                            <img src="{{ $URL }}" class="img-fluid" alt="Noticia" style="width:800px; height:150px; object-fit: cover; border-radius: 15px;">                                                                            
                                                                        </div>
                                                                        <div class="col-lg-7 col-md-8 col-12 text-justify p-2">
                                                                            <h4>{{$mes->titulo}} - {{$fecha}}</h4>
                                                                            <a href="{{route('noticias.show',['noticia'=> $mes->id])}}">Leer noticia</a><br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            </ul>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            </div>                                            
                                            @endif
                                            @endfor
                                            
                </div>
            </div>
        </div>
    </section>
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