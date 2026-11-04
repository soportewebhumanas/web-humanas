@php $editing = isset($noticia) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.text
            name="titulo"
            label="Titulo"
            value="{{ old('titulo', ($editing ? $noticia->titulo : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.partials.label
            name="imagen"
            label="Imagen"
        ></x-inputs.partials.label
        ><br />
        <input
            type="file"
            name="imagen"
            id="imagen"
            class="form-control-file"
        />
        @error('imagen') @include('components.inputs.partials.error')
        @enderror
    </x-inputs.group>
    @if ($editing)
    @isset($noticia->imagen)
        <div>
            <label>Imagen cargada previamente: </label>
            <img src="{{asset('storage/'.$noticia->imagen)}}" height="300px" width="300px" alt="">
        </div>
    @endisset
    @endif

    <x-inputs.group class="w-full">
        <x-inputs.richtext
            name="resumen"
            id="resumen"
            label="Resumen"
            maxlength="255"
            
            >{{ old('resumen', ($editing ? $noticia->resumen : '')) }}</x-inputs.richtext>
    </x-inputs.group>
    
    <x-inputs.group class="w-full">
        <x-inputs.richtext
            name="descripcion"
            id="editor"
            label="Descripcion"
            maxlength="255"
            
            >{{ old('descripcion', ($editing ? $noticia->descripcion : '')) }}</x-inputs.richtext>
    </x-inputs.group>

</div>

