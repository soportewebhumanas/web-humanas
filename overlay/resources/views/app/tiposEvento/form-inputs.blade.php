@php $editing = isset($tiposEvento) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.text
            name="nombre"
            label="Nombre"
            value="{{ old('nombre', ($editing ? $tiposEvento->nombre : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>

