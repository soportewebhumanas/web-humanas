<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.pasantias.show_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('admin.pasantias.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>

                <div class="mt-4 px-4">
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pasantias.inputs.destinatario')
                        </h5>
                        <span>{{ $pasantia->destinatario ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pasantias.inputs.organismo_solicitante')
                        </h5>
                        <span>{{ $pasantia->organismo_solicitante ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pasantias.inputs.cantidad')
                        </h5>
                        <span>{{ $pasantia->cantidad ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pasantias.inputs.duracion')
                        </h5>
                        <span>{{ $pasantia->duracion ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pasantias.periodo')
                        </h5>
                        <span>Desde: {{ $pasantia->inicio_inscripcion ?? '-' }} | Hasta: {{ $pasantia->fin_inscripcion ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pasantias.inputs.requisitos')
                        </h5>
                        @foreach ($pasantia->requisitos as $key => $requisito)
                            <div class="flex flex-row">
                                <div class="table-cell">{{$key}} )</div>
                                <div class="table-cell align-middle ml-2">
                                    <span class="align-middle">{{$requisito}}</span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pasantias.inputs.tareas')
                        </h5>
                        @foreach ($pasantia->tareas as $key => $tarea)
                        <div class="flex flex-row">
                            <div class="table-cell">{{$key}} )</div>
                            <div class="table-cell align-middle ml-2">
                                <span class="align-middle">{{$tarea}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pasantias.inputs.documentacion_obligatoria')
                        </h5>

                            @foreach ($pasantia->documentacion_obligatoria as $key => $documentacion)
                            <div class="flex flex-row">
                                <div class="table-cell">{{$key}} )</div>
                                <div class="table-cell align-middle ml-2">
                                    <span class="align-middle">{{var_dump($documentacion)}}</span>
                                </div>
                            </div>
                            @endforeach

                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pasantias.inputs.formulario_inscripcion')
                        </h5>
                        <span> <a href="{{ $pasantia->formulario_inscripcion ?? '#' }}"></a>{{ $pasantia->formulario_inscripcion ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pasantias.inputs.observaciones')
                        </h5>
                        <span>{{ $pasantia->observaciones ?? '-' }}</span>
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ route('admin.pasantias.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\Pasantia::class)
                    <a href="{{ route('admin.pasantias.create') }}" class="button">
                        <i class="mr-1 icon ion-md-add"></i>
                        @lang('crud.common.create')
                    </a>
                    @endcan
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>
