@extends('app.slim.layouts.home')
<style>
.link-publicacion{
    color: #1b365d !important;
    text-decoration: none !important;
    text-transform: uppercase !important;    
}
.link-publicacion:hover{
    color: #4068a3 !important;
    text-decoration: none !important;    
}
</style>
<link rel="shortcut icon" href="{{asset('slim/images/humanas.png')}}" type="image/x-icon">

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<br/>   
<section class="become-teachers-01">
<input type="text" id="BaseURL" value="@php echo($BaseURL)@endphp" hidden="" />
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="intro-text ">
                    <p><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Publicaciones</span></p>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="container">
            <div class="col-sm-12 text-center become-title">
                <h2>Publicaciones</h2>
                <span class="line"></span>
            </div>       
        </div><!-- /.container -->
    </div>
    <!--<div class="container">
        <div class="row">
            <div class="col-12">
                <a class="col-12 col-sm-6 col-md-3 link-publicacion" href="..." style="margin-bottom:10vh;"> 
                    <div class="card-top" style="margin-bottom: 0px;">
                        <img src="" class="img-fluid" style="width: 100%; object-fit: cover; max-height:720px; object-postion: center;" alt="Colección La Tinajera">
                    </div>
                </a>
            </div>
            <div class="col-12">
                <p class="text-justify">
                    La huelga Agraria de 1919. Un abordaje sobre los actores, objetivos y consecuencias de un conflicto centenario
                    Autores: Federico Martocci y Pablo Volkind, 2023
                    De 1919 se suele recordar la denominada “semana trágica”, ocurrida en enero de ese año en Buenos Aires, un evento que constituye un punto nodal en la historia de la represión en Argentina. En cambio, se conocen menos otras instancias de conflictividad social desplegadas durante el gobierno de Hipólito Yrigoyen, en especial aquellas que tuvieron lugar en zonas rurales. ¿Qué ocurrió en los campos pampeanos durante 1919? ¿Quiénes eran los agricultores que se nuclearon en la Liga Agraria de La Pampa con el fin de hacer oír sus reclamos? ¿Cuál era el sustrato ideológico en el que se apoyaban sus planteos? ¿Qué posición asumieron la autoridades ante las peticiones de estos trabajadores? ¿Cuáles fueron las consecuencias de la famosa (aunque poco explorada) huelga agraria de 1919? Este libro responde a esos interrogantes y desentraña las complejidades de un conflicto que ha quedado en la sombra de la historia argentina. La obra revisita el rol crucial de la Liga Agraria, creada en 1912, la relación entre esa entidad y la Federación Agraria Argentina, los vínculos de los liguistas con el Partido Socialista, así como el impacto del proceso huelguístico local en provincias como Santa Fe, Córdoba y Buenos Aires. Sin duda, es relevante revisar este momento del pasado en la actualidad, en especial para que la memoria sobre lo ocurrido no se desvanezca y para recuperar las luchas populares del siglo pasado como prisma que permita repensar las crisis políticas y sociales del presente.
                </p>
            </div>
        </div>
    </div>-->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row mt-3" style="background-color:snow">
                    <a class="col-12 col-sm-6 col-md-3 link-publicacion" href="https://iesh.humanas.unlpam.edu.ar/publicaciones/colecci%C3%B3n-la-tinajera" style="margin-bottom:10vh;"> 
                        <div class="card-top" style="margin-bottom: 0px;">
                            <img src="./slim/images/index/coleccion-la-tinajera.jpg" class="img-fluid" style="width: 100%; object-fit: cover; max-height:720px; object-postion: center;" alt="...">
                            <h5 class="text-center" style="margin-top:10px"> Colección La Tinajera</h5>
                        </div>
                    </a>
                </div>
            </div><!-- col-12 -->
        </div><!-- row-->    
    </div><!-- container--> 



    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row mt-3" style="background-color:snow">
                    <h2 class="col-12 text-center" style="padding-top:2vh; font-size:18px">PERIÓDICAS</h2>
                    @php $cantPeriodicas = $publicacionesPeriodicas->count() @endphp
                    @if($cantPeriodicas !== 0)
                            @foreach($publicacionesPeriodicas as $publicacion)
                            <a class="col-12 col-sm-6 col-md-3 link-publicacion" href="{{$publicacion->enlace}}" style="margin-bottom:10vh;"> 
                                <div class="card-top" style="margin-bottom: 0px;">
                                    @php $URL = $BaseURL.$publicacion->imagen;@endphp
                                    <img src={{$URL}} class="img-fluid" style="width: 100%; object-fit: cover; max-height:720px; object-postion: center;" alt="{{$publicacion->titulo}}" title="{{$publicacion->titulo}}">
                                    <h5 class="text-center" style="margin-top:10px"> {{$publicacion->titulo}}</h5>
                                </div>
                            </a>
                            @endforeach

                @else
                        <h4 class="col-12 text-danger" style="text-align: center;padding-bottom: 10vh;">No hay publicaciones periódicas para mostrar</h4>
                @endif 
                </div>
                <div class="row mt-3">
                    <h2 class="col-12 text-center" style="padding-top:2vh; font-size:18px">NO PERIÓDICAS</h2>
                        @php $cantNOPeriodicas = $publicacionesNOPeriodicas->count() @endphp
                        @if($cantNOPeriodicas !== 0)
                                @foreach($publicacionesNOPeriodicas as $publicacion)
                                <a class="col-12 col-sm-6 col-md-3 link-publicacion" href="{{$publicacion->enlace}}" style="margin-bottom:10vh;"> 
                                    <div class="card-top" style="margin-bottom: 0px;">
                                        @php $URL = $BaseURL.$publicacion->imagen;@endphp
                                        <img src={{$URL}} class="img-fluid" style="width:100%;" alt="{{$publicacion->titulo}}" title="{{$publicacion->titulo}}">
                                        <h5 class="text-center" style="margin-top:10px"> {{$publicacion->titulo}}</h5>
                                    </div>
                                </a>
                                @endforeach
                    @else
                            <h4 class="col-12 text-danger" style="text-align: center;padding-bottom: 10vh;">No hay publicaciones NO periódicas para mostrar</h4>
                    @endif 
                </div>    
            </div><!-- col-12 -->
        </div><!-- row-->    
    </div><!-- container-->    
</section>
@endsection





<!-- Modal -->
<div class="modal fade" id="VisorPublicacion" tabindex="-1" role="dialog" aria-labelledby="Title" aria-hidden="true" hidden>
    <div class="modal-dialog" role="document" style="width:90vw">
        <div class="modal-content">
            <center class="modal-header" class="row">
                <div class="col-11">
                     <h4 class="modal-title text-primary" id="Title" style="text-transform: uppercase; font-style: italic;"></h4>
                </div>
               
                <button type="button" class="close col-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </center>
            <div class="modal-body" style="padding:15px;">
                <div class="row" style="border-bottom: dotted silver 1px;">
                    <div class="col-sm-12"  style="display:flex;font-style: italic; text-align: center;">
                        <h5 class="col-sm-6" id="Editorial" style=""></h5>
                        <h5 class="col-sm-6" id="Anio"></h5>                        
                    </div>
                </div>
                <div class="row">    
                    <div class="col-sm-12 Welcome-area-text">
                        <center class="row" style="">
                            <div id="divAutores" style="text-align: left; border-bottom: dotted silver 1px;  padding-top:2vh; padding-bottom:2vh;" class="col-12 container">
                                <label>Resumen: </label>
                                <p id="Resumen"></p>
                            </div>
                           
                            <div id="divAutores" style="text-align: left;  padding-top: 2vh;" class="col-12 col-sm-6">
                                <label>Autoras/Autores: </label>
                                <ul id="autores" > </ul>
                            </div>
                            <div id="divCompiladores" style="text-align: left; padding-top: 2vh;"  class="col-12 col-sm-6">
                                <label>Compiladoras/Compiladores: </label>
                                <ul id="compiladores" > </ul>
                            </div>

                            <div id="divCoordinadores" style="text-align: left; padding-top: 2vh;"  class="col-12 col-sm-6">
                                <label>Coordinadoras/Coordinadores: </label>
                                <ul id="coordinadores" > </ul>
                            </div>
                            <div id="divEditores" style="text-align: left; padding-top: 2vh;"  class="col-12 col-sm-6">
                                <label>Editoras/Editores: </label>
                                <ul id="editores" > </ul>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <center style="padding: 15px 0;"  class="col-12"><a id="URLModal" class="btn btn-primary col-offset-1 col-10 offset-sm-2 col-sm-8 col-md-offset-4 col-md-4 col-xl-offset-4 col-xl-4 ">Ir a la publicación</a> </center>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    //Cuando se cierre el modal, debo llevarlo a su estado inicial
    $('#VisorPublicacion').on('hidden.bs.modal', function (e) {      
        $("#Anio").text("Año ");
        $("#Title").text("");
        $("#URLModal").attr('href', "#");
        $("#Resumen").html("");
        $("#Editorial").text("");
        $("#Anio").css("display","inline");
        $("#Resumen").css("display","inline");
        $("#Editorial").css("display","inline");



        $("#autores").html("<ul></ul>");
        $("#compiladores").html("<ul></ul>");
        $("#editores").html("<ul></ul>");
        $("#coordinadores").html("<ul></ul>");
        $("#divAutores").css( "display", "inline" ) ;
        $("#divCompiladores").css( "display", "inline" ) ;
        $("#divEditores").css( "display", "inline" ) ;
        $("#divCoordinadores").css( "display", "inline" ) ;
        console.log("Cerrado");
    });

});
</script>
<script type="text/javascript">
    function setModalPublication(idPublicacion) { 

        $.ajax({
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '{{ route("publicacion.datos") }}',            // la URL para la petición
            data : { id : idPublicacion },                          // Parámetro
            type : 'POST',                                          // Method
           

            success : function(data) {                              //Si la petición es exitosa, datos en variable 'json'
                console.log("Datos de publicación cargados");
               
                const json = JSON.parse(data);
                //console.log(data);

                if(json.anio !== null){
                    $("#Anio").text("Año "+json.anio);
                }
               
                if(json.titulo !== null){
                    $("#Title").text(json.titulo);
                }else{
                    $("#Title").css("display","none")
                }
                if(json.resumen !== null){
                    $("#Resumen").html(json.resumen);
                }else{
                    $("#Resumen").css("display","none")
                }
                if(json.editorial !== null){
                    $("#Editorial").text("Editorial: "+json.editorial);
                }else{
                    $("#Editorial").css("display","none")
                }
                if(json.enlace !== null){
                    $("#URLModal").attr('href', json.enlace);
                }

                //CARGAR LISTAS DE AUTORES, COMPILADORES, EDITORES, COORDINADORES.
                    /*ALGORITMO
                        SI LA LISTA ES NULA
                            OCULTO TODO EL DIV (ASI NO SE MUESTRAN LOS LABEL)
                        SINO
                            PARA CADA ELEMENTO DE LA LISTA
                                AGREGO UN <li>
                            FINPARA
                        FINSI
                    */
                    if(json.autor.length === 0){
                        $("#divAutores").css( "display", "none" ) ;
                    }else{
                        autores = json.autor;
                        for (var i = 0; i < autores.length; i++) {
                          $("#autores").append('<li>'+autores[i]+'</li>');
                        }
                    }

                    if(json.compilador.length === 0){
                         $("#divCompiladores").css( "display", "none" ) ;
                    }else{
                        compiladores = json.compilador;
                        for (var i = 0; i < compiladores.length; i++) {
                          $("#compiladores").append('<li>'+compiladores[i]+'</li>');
                        }
                    }

                    if(json.editor.length === 0){
                         $("#divEditores").css( "display", "none" ) ;
                    }else{
                        editores = json.editor;
                        for (var i = 0; i < editores.length; i++) {
                          $("#editores").append('<li>'+editores[i]+'</li>');
                        }
                    }

                    if(json.coordinador.length === 0){
                         $("#divCoordinadores").css( "display", "none" ) ;
                    }else{
                        coordinadores = json.coordinador;
                        for (var i = 0; i < coordinadores.length; i++) {
                          $("#coordinadores").append('<li>'+coordinadores[i]+'</li>');
                        }
                    }
                //FIN CARGA DE LISTAS


                $("#VisorPublicacion").modal('show');
                console.log("Modal en pantalla");
            },

            error : function(xhr, status) {                         //Si petición falla, console.log()
                console.log('Disculpe, existió un problema');
            },
        });

    }
</script>
