@php $editing = isset($parametro) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.text
            name="clave"
            label="Clave"
            value="{{ old('clave', ($editing ? $parametro->clave : '')) }}"
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="w-full">
        <x-inputs.text
            name="valor"
            label="Valor"
            value="{{ old('valor', ($editing ? $parametro->valor : '')) }}"
        ></x-inputs.text>
    </x-inputs.group>
</div>
