@php $editing = isset($pasantia) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.text
            name="organismo_solicitante"
            label="Organismo Solicitante"
            value="{{ old('organismo_solicitante', ($editing ? $pasantia->organismo_solicitante : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.number
            name="cantidad"
            label="Cantidad de pasantias"
            value="{{ old('cantidad', ($editing ? $pasantia->cantidad : '')) }}"
            maxlength="255"
            required
        ></x-inputs.number>
    </x-inputs.group>
    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.number
        name="duracion"
        label="Tiempo de duración (meses)"
        value="{{ old('duracion', ($editing ? $pasantia->duracion : '')) }}"
        maxlength="255"
        required
    ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="destinatario"
            label="Destinado a"
            value="{{ old('destinatario', ($editing ? $pasantia->destinatario : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.datetime
            name="inicio_inscripcion"
            label="Fecha de inicio de inscripción"
            value="{{ old('inicio_inscripcion', ($editing ? $pasantia->inicio_inscripcion->format('Y-m-d\TH:i:s') : '')) }}"
            maxlength="255"
            required
        ></x-inputs.datetime>
    </x-inputs.group>
    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.datetime
            name="fin_inscripcion"
            label="Fecha de fin de inscripción"
            value="{{ old('fin_inscripcion', ($editing ? $pasantia->fin_inscripcion->format('Y-m-d\TH:i:s') : '')) }}"
            maxlength="255"
            required
        ></x-inputs.datetime>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.list
            name="requisitos"
            label="Requisitos del perfil"
            value="{{ (null !== old('requisitos')) ? json_encode(old('requisitos')) : ($editing ? json_encode($pasantia->requisitos)  : '[]') }}"
            required
        ></x-inputs.list>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.list
            name="tareas"
            label="Tareas a desarrollar"
            value="{{ ( null !== old('tareas') ) ? json_encode(old('tareas')) : ($editing ? json_encode($pasantia->tareas)  : '[]') }}"
            required
        ></x-inputs.list>
    </x-inputs.group>

    
    <x-inputs.group class="w-full">
        <x-inputs.draganddropfiles
        name="documentacion_obligatoria"
        label="Documentacion Obligatoria"
        archivos="{{ ( null !== old('documentacion_obligatoria') ) ? json_encode(old('documentacion_obligatoria')) : ($editing ? json_encode($pasantia->documentacion_obligatoria)  : '[]') }}"
        required
        ></x-inputs.draganddropfiles>
    </x-inputs.group>
    
    <x-inputs.group class="w-full">
        <x-inputs.text
            name="formulario_inscripcion"
            label="Formulario de inscripción (Link)"
            value="{{ old('formulario_inscripcion', ($editing ? $pasantia->formulario_inscripcion : '')) }}"
            required
        ></x-inputs.text>
    </x-inputs.group>
    
    <x-inputs.group class="w-full">
        <x-inputs.richtext
            id='observaciones'
            name="observaciones"
            label="Observaciones"
        >{{ old('observaciones', ($editing ? $pasantia->observaciones : '')) }}</x-inputs.richtext>
    </x-inputs.group>

    <!--<x-inputs.group class="w-full">
        <x-inputs.checkbox
            name="active"
            label="Activo"
            :checked="old('active', ($editing ? $pasantia->active : 0))"
            value='false'
        ></x-inputs.checkbox>
    </x-inputs.group>-->

</div>
