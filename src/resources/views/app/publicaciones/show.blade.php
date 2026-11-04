<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.publicaciones.show_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('admin.publicaciones.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>
                <div class="mt-4 px-4 flex flex-wrap">

                    <div class="mb-8 w-full lg:w-12/12">
                        <h1 class="font-medium {{$publicacion->activo ? 'text-green-700' : 'text-red-700'}} text-center">
                            <u {{$publicacion->activo ? print("style='color:green'") : print("style='color:red'")}}> 
                                {{$publicacion->activo ? 'ACTIVO' : 'NO ACTIVO'}}
                            </u>
                        </h1>
                    </div>
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-12/12" >
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.titulo')
                        </h5>
                        <span>{{ $publicacion->titulo ?? '-' }}</span>
                    </center>
                    
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-4/12" >
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.esPeriodica')
                        </h5>
                        <span>{{ $publicacion->esPeriodica ?? '-' }}</span>
                    </center>
                    <center class="mb-4 w-full lg:w-4/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.tipoDePublicacion')
                        </h5>
                        <pre>{{$publicacion->tipoDePublicacion ?? '-' }}</pre>
                    </center>
                    <center class="mb-4 w-full lg:w-4/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.anio')
                        </h5>
                        <span>{{ $publicacion->anio ?? '-' }}</span>
                    </center>
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-12/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.editorial')
                        </h5>
                        <span>{{ $publicacion->editorial ?? '-' }}</span>
                    </center>

                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-12/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.autor')
                        </h5>
                        @foreach ($publicacion->autor as $key => $autor)
                            {{$autor}} <br/>
                        @endforeach
                        @if ($publicacion->autor == [])
                            <i><b>No se cargaron autoras/es para la publicación</b></i>
                        @endif
                    </center>
                 
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-12/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.compilador')
                        </h5>
                        @foreach ($publicacion->compilador as $key => $compilador)
                            {{$compilador}}<br/>
                        @endforeach
                        @if ($publicacion->compilador == [])
                            <i><b>No se cargaron compiladoras/es para la publicación</b></i>
                        @endif
                    </center>
                
               
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-12/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.coordinador')
                        </h5>
                        @foreach ($publicacion->coordinador as $key => $coordinador)
                            {{$coordinador}}<br/>
                        @endforeach
                        @if ($publicacion->coordinador == [])
                            <i><b>No se cargaron coordinadoras/es para la publicación</b></i>
                        @endif
                    </center>

                
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-12/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.editor')
                        </h5>
                        @foreach ($publicacion->editor as $key => $editor)
                            {{$editor}}<br/>
                        @endforeach
                        @if ($publicacion->editor == [])
                            <i><b>No se cargaron editoras/es para la publicación</b></i>
                        @endif
                    </center>

                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <div class="mb-4 w-full lg:w-12/12" >
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.resumen')
                        </h5>
                        <span> <?php echo($publicacion->resumen ?? '-') ?></span>
                    </div>
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <div class="mb-4 w-full lg:w-12/12" >
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.enlace')
                        </h5>
                        <span>{{ $publicacion->enlace ?? '-' }}</span>
                    </div>
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <div class="mb-4 w-full lg:w-12/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.publicaciones.inputs.imagen')
                        </h5>
                         @php $src = asset('storage/'.$publicacion->imagen) @endphp
                       <iframe class="w-full" height="300" src="{{$src}}" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="mt-10">
                    <a href="{{ route('admin.publicaciones.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                </div>

            </x-partials.card>
        </div>
    </div>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
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
    } )
    .catch( error => {
        console.error( error );
    } );

});
</script>
</x-app-layout>
