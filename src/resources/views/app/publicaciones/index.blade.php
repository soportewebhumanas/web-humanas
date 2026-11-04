<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              @lang('crud.publicaciones.index_title')
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
                            @can('create', App\Models\Publicacion::class)
                            <a
                                href="{{ route('admin.publicaciones.create') }}"
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
                                    @lang('crud.publicaciones.inputs.titulo')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.publicaciones.inputs.editorial')
                                </th>
                                <th class="px-4 py-3 text-left hidden md:table-cell">
                                    @lang('crud.publicaciones.inputs.esPeriodica')
                                </th>
                                <th class="px-4 py-3 text-left hidden md:table-cell">
                                    @lang('crud.publicaciones.inputs.activo')
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            @forelse($publicaciones as $publicacion)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-left">
                                    {{ $publicacion->titulo ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    {{ $publicacion->editorial ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left hidden md:table-cell">
                                    {{ $publicacion->esPeriodica ?? '-' }}
                                </td>

                                <td class="px-4 py-3 text-left hidden md:table-cell">
                                    <x-inputs.switch 
                                    id="{{$publicacion->id}}" 
                                    name="activo" 
                                    label="hola"
                                    url="{{route('admin.publicaciones.cambiarEstado', $publicacion)}}"
                                    checked='{{$publicacion->activo}}' 
                                    >
                                    </x-inputs.switch>
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
                                        @can('update', $publicacion)
                                        <a
                                            href="{{ route('admin.publicaciones.edit', $publicacion) }}"
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
                                        @endcan @can('view', $publicacion)
                                        <a
                                            href="{{ route('admin.publicaciones.show', $publicacion) }}"
                                            class="mr-1"
                                        >
                                            <button
                                                type="button"
                                                class="button"
                                            >
                                                <i class="icon ion-md-eye"></i>
                                            </button>
                                        </a>
                                        @endcan @can('delete', $publicacion)
                                        <form
                                            action="{{ route('admin.publicaciones.destroy', $publicacion) }}"
                                            method="POST"
                                            onsubmit="return confirm('La acción es irreversible. ¿Realmente desea eliminar el registro?')"
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
                                        {!! $publicaciones->render() !!}
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