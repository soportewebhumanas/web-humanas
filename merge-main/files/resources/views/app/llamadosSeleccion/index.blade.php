<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              @lang('crud.llamadosSeleccion.index_title')
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
                            @can('create', App\Models\LlamadoSeleccion::class)
                            <a
                                href="{{ route('admin.llamadosSeleccion.create') }}"
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
                                    @lang('crud.llamadosSeleccion.inputs.cargo')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.llamadosSeleccion.inputs.asignatura')
                                </th>
                                <th class="px-4 py-3 text-left hidden md:table-cell">
                                    @lang('crud.llamadosSeleccion.inputs.departamento')
                                </th>
                                <th class="px-4 py-3 text-left hidden md:table-cell">
                                    @lang('crud.llamadosSeleccion.inputs.inicio_inscripcion')
                                </th>
                                <th class="px-4 py-3 text-left hidden md:table-cell">
                                    @lang('crud.llamadosSeleccion.inputs.fin_inscripcion')
                                </th>
                                <th class="px-4 py-3 text-left hidden md:table-cell">
                                    Activo
                                </th>
                                 <th class="px-4 py-3 text-left hidden md:table-cell">
                                    
                                </th>
                                <th class="px-4 py-3 text-left hidden md:table-cell">
                                    Eliminar acta
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            @forelse($llamadosSeleccion as $llamadoSeleccion)
                            <tr class="hover:bg-gray-50 {{$llamadoSeleccion->fin_inscripcion < $hoy ? 'text-red-600' : 'text-gray-600'}}">
                                <td class="px-4 py-3 text-left">
                                    {{ $llamadoSeleccion->cargo ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    {{ $llamadoSeleccion->asignatura ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left hidden md:table-cell">
                                    {{ $llamadoSeleccion->departamento ?? '-' }}
                                </td>
                                <!--<td class="px-4 py-3 text-left hidden md:table-cell">
                                    {{ $llamadoSeleccion->carrera ?? '-' }}
                                </td>-->
                                <?php
                                $fechaIn=new DateTime($llamadoSeleccion->inicio_inscripcion);
                                $inStr = $fechaIn->format("d/m/Y H:i")."hs";
                                ?>
                                <td class="px-4 py-3 text-left hidden md:table-cell">
                                    {{ $inStr ?? '-' }}
                                </td>                                
                                <?php
                                $fechaFin=new DateTime($llamadoSeleccion->fin_inscripcion);
                                $finStr = $fechaFin->format("d/m/Y H:i")."hs";
                                ?>
                                <td class="px-4 py-3 text-left hidden md:table-cell">
                                    {{ $finStr ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left hidden md:table-cell">
                                    <x-inputs.switch 
                                    id="{{$llamadoSeleccion->id}}" 
                                    name="activo" 
                                    label="hola"
                                    url="{{route('admin.llamadosSeleccion.cambiarEstado', $llamadoSeleccion)}}"
                                    checked='{{$llamadoSeleccion->activo}}' 
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

                                   

                                        @can('update', $llamadoSeleccion)
                                        <a
                                            href="{{ route('admin.llamadosSeleccion.edit', $llamadoSeleccion) }}"
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
                                        @endcan  @can('view', $llamadoSeleccion)
                                        <a
                                            href="{{ route('admin.llamadosSeleccion.show', $llamadoSeleccion) }}"
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
                                        @endcan @can('delete', $llamadoSeleccion)
                                        <form
                                            action="{{ route('admin.llamadosSeleccion.destroy', $llamadoSeleccion) }}"
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
                                 <td class="px-4 py-3 text-center">

                                        <form
                                            action="{{ route('admin.llamadosSeleccion.eliminarActa', $llamadoSeleccion) }}"
                                            method="GET"
                                            onsubmit="return confirm('La acción es irreversible. ¿Realmente desea eliminar el acta?')"
                                        >
                                            <a
                                                class="mr-1"
                                                alt="x"
                                                title="Eliminar acta"
                                            >
                                                @if($llamadoSeleccion->acta_final != null)
                                                    <button
                                                        type="submit"
                                                        class="button"
                                                        style="background-color:orangered; color:white"
                                                        title="Eliminar acta"
                                                    >
                                                @else
                                                     <button
                                                        type="submit"
                                                        class="button"
                                                        style="background-color:grey; color:black"
                                                        title="No hay acta asociada"
                                                        disabled
                                                    >
                                                @endif
                                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </form>
                                   
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
                                        {!! $llamadosSeleccion->render() !!}
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