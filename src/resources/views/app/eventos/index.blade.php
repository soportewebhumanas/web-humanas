<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.eventos.index_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <div class="mb-5 mt-4">
                    <div class="flex flex-wrap justify-between">
                        <div class="md:w-1/2">
                            <form>
                                <div class="flex items-center w-full">
                                    <x-inputs.text
                                        name="search"
                                        value="{{ $search ?? '' }}"
                                        placeholder="{{ __('crud.common.search') }}"
                                        autocomplete="off"
                                    ></x-inputs.text>

                                    <div class="ml-1">
                                        <button
                                            type="submit"
                                            class="button button-primary"
                                        >
                                            <i class="icon ion-md-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="md:w-1/2 text-right">
                            @can('create', App\Models\Evento::class)
                            <a
                                href="{{ route('admin.eventos.create') }}"
                                class="button button-primary"
                            >
                                <i class="mr-1 icon ion-md-add"></i>
                                @lang('crud.common.create')
                            </a>
                            @endcan
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-auto scrolling-touch">
                    <table class="w-full max-w-full mb-4 bg-transparent">
                        <thead class="text-gray-700">
                            <tr>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.eventos.inputs.titulo')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.eventos.inputs.fecha_inicio')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.eventos.inputs.active')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.eventos.inputs.lugar_id')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.eventos.inputs.modalidad_id')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.eventos.inputs.tipo_id')
                                </th>
                                <th class="px-4 py-3 text-right">
                                    @lang('crud.common.actions')
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            @forelse($eventos as $evento)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-left">
                                    {{ $evento->titulo ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    {{ $evento->fecha_inicio ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    <x-inputs.switch 
                                    id="{{$evento->id}}" 
                                    name="active" 
                                    label="hola"
                                    url="{{route('admin.eventos.cambiarEstado', $evento)}}"
                                    checked='{{$evento->active}}' 
                                    >
                                    </x-inputs.switch>
                                   
                                </td>
                                <td class="px-4 py-3 text-left">
                                    {{ optional($evento->lugar)->nombre ?? '-'
                                    }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    {{ optional($evento->modalidad)->nombre ?? '-'
                                    }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    {{ optional($evento->tipo)->nombre ?? '-' }}
                                </td>
                                <td
                                    class="px-4 py-3 text-center"
                                    style="width: 134px;"
                                >
                                    <div
                                        role="group"
                                        aria-label="Row Actions"
                                        class="relative inline-flex align-middle"
                                    >
                                        @can('update', $evento)
                                        <a
                                            href="{{ route('admin.eventos.edit', $evento) }}"
                                            class="mr-1"
                                        >
                                            <button
                                                type="button"
                                                class="button"
                                            >
                                                <i
                                                    class="icon ion-md-create"
                                                ></i>
                                            </button>
                                        </a>
                                        @endcan @can('view', $evento)
                                        <a

                                            href="{{ route('eventos.show', $evento) }}"
                                            target="_blank"

                                            class="mr-1"
                                        >
                                            <button
                                                type="button"
                                                class="button"
                                            >
                                                <i class="icon ion-md-eye"></i>
                                            </button>
                                        </a>
                                        @endcan @can('delete', $evento)
                                        <form
                                            action="{{ route('admin.eventos.destroy', $evento) }}"
                                            method="POST"
                                            onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                        >
                                            @csrf @method('DELETE')
                                            <button
                                                type="submit"
                                                class="button"
                                            >
                                                <i
                                                    class="icon ion-md-trash text-red-600"
                                                ></i>
                                            </button>
                                        </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="11">
                                    @lang('crud.common.no_items_found')
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="11">
                                    <div class="mt-10 px-4">
                                        {!! $eventos->render() !!}
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>


