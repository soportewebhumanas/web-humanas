<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.docentes.show_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('admin.docentes.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>
                <div class="mt-4 px-4 flex flex-wrap">

                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-12/12" >
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.docentes.inputs.apellido')
                        </h5>
                        <span>{{ $docente->apellido ?? '-' }}</span>
                    </center>
                    
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-12/12" >
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.docentes.inputs.nombre')
                        </h5>
                        <span>{{ $docente->nombre ?? '-' }}</span>
                    </center>
                  
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-12/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.docentes.inputs.asignaturas')
                        </h5>
                        @foreach ($docente->asignaturas as $key => $asignatura)
                            {{$asignatura}} <br/>
                        @endforeach
                    </center>
                    
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-12/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.docentes.inputs.especialidad')
                        </h5>
                        @foreach ($docente->especialidad as $key => $especialidad)
                            {{$especialidad}}<br/>
                        @endforeach
                    </center>
                   
                    <hr style=" border: 0; clear:both; display:block; width: 96%;background-color:grey;  height: 1px; margin-top: 10px; margin-bottom: 10px;"/>
                    <center class="mb-4 w-full lg:w-4/12" >
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.docentes.inputs.CVLink')
                        </h5>
                        <span><a href="{{ $docente->CVLink ?? '-' }}">{{ $docente->CVLink ?? '-' }}</a></span>
                    </center>
                    
                    <center class="mb-4 w-full lg:w-4/12">
                        <h5 class="font-medium text-gray-700">
                            Archivo de CV
                        </h5>

                        @if (isset($docente->CVFile))
                            <iframe class="w-full" height="300" src="{{asset('storage/'.$docente->CVFile)}}" frameborder="0"></iframe>
                        @else
                            No se cargó ningún archivo de CV
                        @endif
                       

                    </center>

                     <center class="mb-4 w-full lg:w-4/12">
                        <h5 class="font-medium text-gray-700">
                            Foto de perfil
                        </h5>

                        @if (isset($docente->imagen))
                            <iframe class="w-full" height="300" src="{{asset('storage/'.$docente->imagen)}}" frameborder="0"></iframe>
                        @else
                            No se cargó ninguna foto de perfil.
                        @endif
                    </center>

                </div>
                <div class="mt-10">
                    <a href="{{ route('admin.docentes.index') }}" class="button">
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
