@php $editing = isset($programa) @endphp
<div class="flex flex-wrap">
    <x-inputs.group class="w-full lg:w-10/12">
        <x-inputs.text
            name="nombre"
            label="Nombre"
            value="{{ old('nombre', ($editing ? $programa->nombre : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="w-full lg:w-2/12">
        <x-inputs.number
            name="orden"
            label="Orden"
            value="{{ old('orden', ($editing ? $programa->orden : 0)) }}"
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-10/12">
        <x-inputs.select name="tipo" label="Organización" required>
            @php $selected = old('tipo', ($editing ? $programa->tipo : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Seleccione tipo</option>

            <option value="Programa institucional" {{ $selected == "Programa institucional" ? 'selected' : '' }} >Programa institucional</option>
            <option value="Cátedra libre" {{ $selected == "Cátedra libre" ? 'selected' : '' }} >Cátedra libre</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="w-full lg:w-2/12">
        <x-inputs.color
            name="color"
            label="Color"
            value="{{ old('color', ($editing ? $programa->color : '')) }}"
            maxlength="255"
        ></x-inputs.color>
    </x-inputs.group>
    <x-inputs.group class="w-full">
        <x-inputs.list
            name="responsables"
            label="Responsables"
            value="{{ ( null !== old('responsables') ) ? json_encode(old('responsables')) : ($editing ? json_encode($programa->responsables)  : '[]') }}"
            required
        ></x-inputs.list>
    </x-inputs.group>
    <x-inputs.group class="w-full ">
        <x-inputs.basic
            name="email"
            label="Dirección Electrónica"
            type='email'
            value="{{ old('email', ($editing ? $programa->email : '')) }}"
            required
        ></x-inputs.basic>
    </x-inputs.group>
    <x-inputs.group class="w-full">
        <x-inputs.richtext
            id='reseña'
            name="reseña"
            label="Reseña"
        >{{ old('reseña', ($editing ? $programa->reseña : '')) }}</x-inputs.richtext>
    </x-inputs.group>
    <x-inputs.group class="w-full ">
        <x-inputs.basic
            name="imagen"
            label="Imagen"
            type='file'
            value="{{ old('imagen', ($editing ? $programa->imagen : '')) }}"
        ></x-inputs.basic>
        @if ($editing)
            @isset($programa->imagen)
                <div>
                    <label>Imagen cargada previamente: </label>
                    @php $src = '/files/'.$programa->imagen @endphp
                    <img src="{{$src}}" height="300px" width="300px" alt="">
                </div>
            @endisset
        @endif
    </x-inputs.group>
</div>
