<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.llamadosSeleccion.show_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('admin.llamadosSeleccion.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>
                <div class="mt-4 px-4 flex flex-wrap">

                    <div class="mb-8 w-full lg:w-12/12">
                        <h1 class="font-medium {{$llamadoSeleccion->activo ? 'text-green-700' : 'text-red-700'}} text-center">
                            <u {{$llamadoSeleccion->activo ? print("style='color:green'") : print("style='color:red'")}}> 
                                {{$llamadoSeleccion->activo ? 'ACTIVO' : 'NO ACTIVO'}}
                            </u>
                        </h1>
                    </div>
                    <div class="mb-4 w-full lg:w-12/12" >
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.llamadosSeleccion.inputs.cantidad')
                        </h5>
                        <span>{{ $llamadoSeleccion->cantidad ?? '-' }}</span>
                    </div>
                    
                    <hr></hr>
                    <div class="mb-4 w-full lg:w-4/12" >
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.llamadosSeleccion.inputs.cargo')
                        </h5>
                        <span>{{ $llamadoSeleccion->cargo ?? '-' }}</span>
                    </div>
                    <div class="mb-4 w-full lg:w-4/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.llamadosSeleccion.inputs.dedicacion')
                        </h5>
                        <pre>{{$llamadoSeleccion->dedicacion ?? '-' }}</pre>
                    </div>
                    <div class="mb-4 w-full lg:w-4/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.llamadosSeleccion.inputs.asignatura')
                        </h5>
                        <span>{{ $llamadoSeleccion->asignatura ?? '-' }}</span>
                    </div>
                    <div class="mb-4 w-full lg:w-4/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.llamadosSeleccion.inputs.departamento')
                        </h5>
                        <span>{{ $llamadoSeleccion->departamento ?? '-' }}</span>
                    </div>
                    <div class="mb-4 w-full lg:w-4/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.llamadosSeleccion.inputs.carrera')
                        </h5>
                        <span>{{ $llamadoSeleccion->carrera ?? '-' }}</span>
                    </div>
                    <div class="mb-4 w-full lg:w-4/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.llamadosSeleccion.inputs.plan')
                        </h5>
                        <span>{{ $llamadoSeleccion->plan ?? '-' }}</span>
                    </div>

                    <div class="mb-4 w-full lg:w-12/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.llamadosSeleccion.inputs.observacion')
                        </h5>
                         <div class="col-md-12" name="editor" id="editor">
                               @php print($llamadoSeleccion->observacion) @endphp
                        </div>
                    </div>
                    
                    <div class="mb-8 w-full lg:w-6/12">
                        <h5 class="font-medium text-gray-700 text-center">
                            @lang('crud.llamadosSeleccion.inputs.inicio_inscripcion')
                        </h5>
                       <p class="text-center">{{ optional($llamadoSeleccion->inicio_inscripcion)->format('d/m/Y \a \l\a\s H:i \h\o\r\a\s') ?? '-' }}</p>
                    </div>

                    <div class="mb-4 w-full lg:w-6/12">
                        <h5 class="font-medium text-gray-700 text-center">
                            @lang('crud.llamadosSeleccion.inputs.fin_inscripcion')
                        </h5>
                        <p class="text-center">{{ optional($llamadoSeleccion->fin_inscripcion)->format('d/m/Y \a \l\a\s H:i \h\o\r\a\s') ?? '-' }}</p>
                    </div>

                    <div class="mb-4 w-full lg:w-6/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.llamadosSeleccion.inputs.enlace_inscripcion')
                        </h5>
                        <a class="text-blue-700" href={{ $llamadoSeleccion->enlace_inscripcion ?? '-' }}>{{ $llamadoSeleccion->enlace_inscripcion ?? '-' }}</a>
                    </div>

                    <div class="mb-4 w-full lg:w-12/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.llamadosSeleccion.inputs.resolucion')
                        </h5>
                         @php $src = asset('storage/'.$llamadoSeleccion->resolucion) @endphp
                       <iframe class="w-full" height="300" src="{{$src}}" frameborder="0"></iframe>
                    </div>

                    <div class="mb-4 w-full lg:w-12/12">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.llamadosSeleccion.inputs.acta_final')
                        </h5>
                        @if ($llamadoSeleccion->acta_final !== '')
                            @php $src = asset('storage/'.$llamadoSeleccion->acta_final) @endphp
                            <iframe class="w-full" height="300" src="{{$src}}" frameborder="0"></iframe> 
                        @else
                            <h6>Aún no se cargó el acta final</h6>
                        @endif
                    </div>


                </div>
                <div class="mt-10">
                    <a href="{{ route('admin.llamadosSeleccion.index') }}" class="button">
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
