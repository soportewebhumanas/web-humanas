@extends('app.slim.layouts.home')
<style>
.page-item.active .page-link {
    background-color: #1b365d !important;
    border-color: #1b365d !important;
}

.page-item .page-link {
    color: black;
}
</style>

@section('content')

<br/>
<section class="become-teachers-01">
    <div class="container">
         <div class="row">
            <div class="col-md-12">
                <div class="intro-text ">
                    <p><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Docentes</span></p>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="container">
            <div class="col-sm-12 text-center become-title">
    			<h2 style="font-size: 2em">Docentes</h2>
    			<h3>Nuestras y nuestros docentes</h3>
    			<span class="line"></span>
            </div>       
        </div><!-- /.container -->
        <form id="form">
           <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="row" style="padding-bottom: 5vh;">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <label for="apellido" class="col-sm-12 col-form-label">Apellido</label>
                    <input class="form-control" name="apellido" id="apellido" type="text" placeholder="Filtrar por apellido" aria-label="Apellido" value="{{(isset($apellido) ? $apellido : '')}}">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <label for="nombre" class="col-sm-12 col-form-label">Nombre</label>
                    <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Filtrar por nombre"  aria-label="Nombre" value="{{(isset($nombre) ? $nombre : '')}}">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <label for="asignatura" class="col-sm-12 col-form-label">Asignatura</label>
                    <input class="form-control" name="asignatura" id="asignatura" type="text" placeholder="Filtrar por asignatura" aria-label="Asignatura" value="{{(isset($asignatura) ? $asignatura : '')}}">
                </div>
                <div class="col-xs-12 col-sm-6  col-md-1">
                    <label for="btnFiltrar" class="col-sm-12 col-form-label"><br/></label>
                        <a  name="btnFiltrar" id="btnFiltrar" id ="btnFiltrar" class=" btn text-white py-2 px-3" style="background-color: #1b365d">
                            <i class="fa fa-search search_btn"></i>
                        </a>
                </div>

            </div>
        </form>

        <div id="DIVdocentes" class="row" style=" display: flex; flex-wrap: wrap;">
            @foreach($docentes as $docente)

            <!-- tarjeta noticias -->
            @php $ruta = $docente->imagen; $rutaModificada = Str::replace('public\docentes\imagenes/', 'public/docentes/imagenes/', $ruta); @endphp
            <div class="col-lg-3 col-xl-3 col-md-6 col-6">
                <div class="d-flex">
					<div class="card mt-3" style="width:100%;">
						<div class="card-img-top mx-0 my-0 px-0 py-0" style="image-rendering: auto; background-position: center center; background-size: cover; background-color: #1b365d; background-image:url({{'/storage/'.$rutaModificada}}); background-repeat: no-repeat; height: 250px;">
							<div class="container d-flex align-items-end mx-0" style="height: 250px;">
								<div class="row d-flex align-items-end">
									<div class="col-12">
										<h5 class="card-title">
										<span style="color: #FFF !important; font-size: 0.6rem; font-weight: bold; text-shadow: 1px 1px #000">
                                            <a href="{{route('docentes.show', $docente->id)}}" class="text-light">
                                                <span style="text-transform: uppercase">{{$docente->apellido}}, {{$docente->nombre}}</span><br>
                                                <span style="font-size: 0.5rem">{{$docente->titulo}}</span>
                                            </a>    
                                        </span>
									</h5>
									</div>
									<div class="col-5" style="border-style: solid; border-color: #15a6b9; background-color: #15a6b9; height: 15px;"></div>
									<div class="col-4" style="border-style: solid; border-color: #757ab9; background-color: #757ab9; height: 15px;"></div>
									<div class="col-3" style="border-style: solid; border-color: #b3d2e7; background-color: #b3d2e7; height: 15px;"></div>
								</div>
							</div>						
						</div>
					</div>
				</div>
            </div>

            <!-- tarjeta noticias -->



            <!-- tarjeta -->
            <!--
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 px-2 py-3 mb-1">	
                <div class="card h-100">
                <img 
                class="card-img-top" 
                src="{{'/storage/'.$docente->imagen}}" 
                alt="{{$docente->apellido}}, {{$docente->nombre}}"
                style="
                        filter: sepia(80%) brightness(1) saturate(3) hue-rotate(190deg) grayscale(80%); 
                        image-rendering: auto; 
                    " 
                >
                <div class="card-body">
                    <h5 class="card-title text-center"><a href="{{route('docentes.show', $docente->id)}}" style="color: #1b365d !important">{{$docente->apellido}}, {{$docente->nombre}}</a></h5>
                </div>
                </div>
            </div>
            -->
            <!-- tarjeta -->                        
            @endforeach
            @if(count($docentes) == 0)
                <center style="width: 100vw; padding-top:10vh;padding-bottom:20vh">
                    <b><i>NO HAY DOCENTES PARA VISUALIZAR</i></b>
                </center>
            @endif
            <center style="width:100vw">
                <nav aria-label="Page navigation" class="d-flex justify-content-center">
                  <ul class="pagination">                
                    @for ($i = 1; $i <= $pages; $i++)
                        @if ($i == $currentPage)
                            <li class="page-item active">
                                <a class="page-link">{{$i}}</a>
                            </li>
                        @else
                            <li class="page-item"><a class="btnPagina page-link">{{$i}}</a></li>
                        @endif
                    @endfor
                  </ul>
                </nav>
            </center>
        </div>
    </div>
</section>
@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="application/javascript">
    $(document).ready( function () {
        var msg;
        var onfocus;
        var initialHash = location.hash;

        $('body').addClass('become_teachers');

        $(window).on('hashchange', function() {
            if(location.hash.localeCompare("#form") != 0){
                location.hash = "#form";
            }
            $(onfocus).focus();
        });
       
        //Eventos de onChange
        $("#apellido").click( function(){
            onfocus="#apellido"       
        });
        $("#nombre").click( function(){
            onfocus="#nombre"
        });
        $("#asignatura").click( function(){
            onfocus="#asignatura"
        });

        //Eventos de onChange
        $("#apellido").change( function(){
            $("#btnFiltrar").click();       
        });
        $("#nombre").change( function(){
            $("#btnFiltrar").click();
        });
        $("#asignatura").change( function(){
            $("#btnFiltrar").click();
        });

        //Boton de filtro
        $('#btnFiltrar').click( function(){
           showLoader();
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                type: 'post',
                url: '{{ route("docentes.filtrar") }}',
                data: {
                    '_token': $("meta[name='csrf-token']").attr('content'),
                    'apellido': $('#apellido').val(),
                    'nombre': $('#nombre').val(),
                    'asignatura': $('#asignatura').val(),
                    'page': '1'
                },
                success: function (data) {
                    $("#DIVdocentes").empty();
                    const respuesta = JSON.parse(data);
                    const docentes = respuesta.docentes;
                    const pages = respuesta.pages;
                    const currentPage = respuesta.currentPage;
                    $.each(docentes, function(i, item) {
                        console.log(item);
                        tarjeta(item.id,item.apellido,item.nombre,item.titulo,item.imagen);
                    });
                    numerado(pages,currentPage);
                },
                error: function (jqXHR) {
                    console.log('boo!');
                }
            });
        });

        //Boton de filtro
        $(document).on("click", ".btnPagina", function(){
           showLoader();

            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                type: 'post',
                url: '{{ route("docentes.filtrar") }}',
                data: {
                    '_token': $("meta[name='csrf-token']").attr('content'),
                    'apellido': $('#apellido').val(),
                    'nombre': $('#nombre').val(),
                    'asignatura': $('#asignatura').val(),
                    'page': $(this).html()
                },
                success: function (data) {
                    $("#DIVdocentes").empty();
                    const respuesta = JSON.parse(data);
                    const docentes = respuesta.docentes;
                    const pages = respuesta.pages;
                    const currentPage = respuesta.currentPage;
                    $.each(docentes, function(i, item) {
                        console.log('Se filtraron los docentes exitosamente');
                        tarjeta(item.id,item.apellido,item.nombre,item.titulo,item.imagen);
                    });
                    numerado(pages,currentPage);
                },
                error: function (jqXHR) {
                     console.log('Falló el filtrado de docentes');
                }
            }); 
        });
       
        function tarjeta(id,apellido,nombre,titulo,imagen) {
            let newDiv;
            img = imagen.slice(25)
            src="/storage/public/docentes/imagenes/"+img;
            srcView = '/docentes/'+id;
            newDiv ="";
            newDiv += "<div class='col-lg-3 col-xl-3 col-md-6 col-6'>"
                newDiv += "<div class='d-flex'>"
                    newDiv += "<div class='card mt-3' style='width:100%;'>"
                        newDiv += "<div class='card-img-top mx-0 my-0 px-0 py-0' style='image-rendering: auto; background-position: center center; background-size: cover; background-color: #1b365d; background-image:url("+src+"); background-repeat: no-repeat; height: 250px;'>"
                            newDiv += "<div class='container d-flex align-items-end mx-0' style='height: 250px;'>"
                                newDiv += "<div class='row d-flex align-items-end'>"
                                    newDiv += "<div class='col-12'><h5 class='card-title'><span style='color: #FFF !important; font-size: 0.6rem; font-weight: bold; text-shadow: 1px 1px #000'><a href='"+srcView+"' class='text-light'><span style='text-transform: uppercase'>"+apellido+", "+nombre+"</span><br><span style='font-size: 0.5rem'>"+titulo+"</span></a></span></h5>"
                                    newDiv += "</div>"
                                    newDiv += "<div class='col-5' style='border-style: solid; border-color: #15a6b9; background-color: #15a6b9; height: 15px;'>"
                                    newDiv += "</div>"
                                    newDiv += "<div class='col-4' style='border-style: solid; border-color: #757ab9; background-color: #757ab9; height: 15px;'>"
                                    newDiv += "</div>"
                                    newDiv += "<div class='col-3' style='border-style: solid; border-color: #b3d2e7; background-color: #b3d2e7; height: 15px;'>"                        
                                    newDiv += "</div>"
                                newDiv += "</div>"
                            newDiv += "</div>"
                        newDiv += "</div>"
                    newDiv += "</div>"
                newDiv += "</div>"
            newDiv += "</div>"            
            /*newDiv ="";
            newDiv += "<div class='col-6 col-sm-6 col-md-3 col-lg-2 px-2 py-3 mb-1'>";	
                newDiv += "<div class='card h-100'>";
                    newDiv += "<img class='card-img-top' src="+src+" style='filter: sepia(80%) brightness(1) saturate(3) hue-rotate(190deg) grayscale(80%);  image-rendering: auto;'>";
                    newDiv += "<div class='card-body'>";
                        newDiv += "<h5 class='card-title text-center'><a href='"+srcView+"' style='color: #1b365d !important'>"+apellido+", "+nombre+"</a></h5>";
                    newDiv += "</div>";
                newDiv += "</div>";
            newDiv += "</div>";*/




            $("#DIVdocentes").append(newDiv);
        }

        function numerado(pages, currentPage){
            let paginas;
            if (pages == 0){
                paginas = '<center style="width: 100vw; padding-top:10vh;padding-bottom:20vh" class="text-danger"><b><i>No hay resultados que coincidan con su búsqueda</i></b></center>';
            }else{
                paginas=' <center style="width:100vw" class="d-flex justify-content-center">';
                paginas+='    <nav aria-label="Page navigation">';
                paginas+='      <ul class="pagination">';
                                    for (let nro = 1; nro <= pages; nro++){
                                        if (nro == currentPage){
                paginas+='                <li class="page-item active">';
                paginas+='                    <a class="page-link">'+nro+'</a>';
                paginas+='                </li>';
                                        }else{
                paginas+='                <li class="page-item"><a class="btnPagina page-link">'+nro+'</a></li>';                            
                                        }
                                    }
                paginas+='      </ul>';
                paginas+='    </nav>';
                paginas+='</center>';
            }
            $("#DIVdocentes").append(paginas);
        }
        function showLoader(){
            let loader;
            location.hash = "";
            location.hash = "#form";
            $("#DIVdocentes").empty();
            loader = '<center style="height: 60vh; width:100%">';
            loader += '<div class="loader" id="loader-1"></div>';
            loader += '</center>';
            $("#DIVdocentes").html(loader);
        }
    } );
</script>