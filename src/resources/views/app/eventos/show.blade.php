<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.eventos.show_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('admin.eventos.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>

                <div class="mt-4 px-4">
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.eventos.inputs.titulo')
                        </h5>
                        <span>{{ $evento->titulo ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.eventos.inputs.content')
                        </h5>
                        <pre>{{ htmlspecialchars_decode($evento->content) ?? '-' }}</pre>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.eventos.inputs.fecha_inicio')
                        </h5>
                        <span>{{ $evento->fecha_inicio ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.eventos.inputs.fecha_fin')
                        </h5>
                        <span>{{ $evento->fecha_fin ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.eventos.inputs.carga_horaria')
                        </h5>
                        <span>{{ $evento->carga_horaria ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.eventos.inputs.active')
                        </h5>
                        <span>{{ $evento->active ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.eventos.inputs.tarifa')
                        </h5>
                        <span>{{ $evento->tarifa ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.eventos.inputs.lugar_id')
                        </h5>
                        <span
                            >{{ optional($evento->lugar)->nombre ?? '-' }}</span
                        >
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.eventos.inputs.modalidad_id')
                        </h5>
                        <span
                            >{{ optional($evento->modalidad)->id ?? '-' }}</span
                        >
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.eventos.inputs.tipo_id')
                        </h5>
                        <span
                            >{{ optional($evento->tipo)->nombre ?? '-' }}</span
                        >
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ route('admin.eventos.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\Evento::class)
                    <a href="{{ route('admin.eventos.create') }}" class="button">
                        <i class="mr-1 icon ion-md-add"></i>
                        @lang('crud.common.create')
                    </a>
                    @endcan
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>
