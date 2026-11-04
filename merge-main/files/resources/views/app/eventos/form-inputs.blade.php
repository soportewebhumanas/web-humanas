@php $editing = isset($evento) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.text
            name="titulo"
            label="Titulo"
            value="{{ old('titulo', ($editing ? $evento->titulo : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.select name="grado" label="Grado" required>
            @php $selected = old('grado', ($editing ? $evento->grado : '')) @endphp
            <option {{empty($selected) ? 'selected' : '' }}>No especificado</option>
            <option value="grado" {{ $selected == "grado" ? 'selected' : '' }} >Grado</option>
            <option value="posgrado" {{ $selected == "posgrado" ? 'selected' : '' }} >Posgrado</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.select name="curricular" label="Curricularidad" required>
            @php $selected = old('curricular', ($editing ? $evento->curricular : '')) @endphp
            <option {{ empty($selected) ? 'selected' : '' }}>No especificada</option>
            <option value="curricular" {{ $selected == "curricular" ? 'selected' : '' }} >Curricular</option>
            <option value="extracurricular" {{ $selected == "extracurricular" ? 'selected' : '' }} >Extracurricular</option>

        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-4/12">
        <x-inputs.datetime
            name="fecha_inicio"
            label="Fecha Inicio"
            value="{{ old('fecha_inicio', ($editing && $evento->fecha_inicio ? $evento->fecha_inicio->format('Y-m-d\TH:i:s') : '')) }}"
            max="255"
            required
        ></x-inputs.datetime>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-4/12">
        <x-inputs.datetime
            name="fecha_fin"
            label="Fecha Fin"
            value="{{ old('fecha_fin', ($editing && $evento->fecha_fin ? $evento->fecha_fin->format('Y-m-d\TH:i:s') : '')) }}"
            max="255"
            required            
        ></x-inputs.datetime>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-4/12">
        <x-inputs.number
            name="carga_horaria"
            label="Carga Horaria"
            value="{{ old('carga_horaria', ($editing ? $evento->carga_horaria : '')) }}"
            max="255"
        ></x-inputs.number>
    </x-inputs.group>
    <div x-data = "{ show: false }" class="w-full">

        <x-inputs.group class="w-full">
            <x-inputs.select x-on:change="$event.target.value === '1' ? show = true : show = false; console.log($event.target.value)" name="modalidad_id" label="Modalidad" required>
                @php $selected = old('modalidad_id', ($editing ? $evento->modalidad_id : '')) @endphp
                <option disabled {{ empty($selected) ? 'selected' : '' }}>Seleccione Modalidad</option>
                @foreach($modalidades as $value => $label)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label}}</option>
                @endforeach
            </x-inputs.select>
        </x-inputs.group>
        
        <x-inputs.group class="w-full" x-show='show'>
            <x-inputs.select name="lugar_id" label="Lugar" required>
                @php $selected = old('lugar_id', ($editing ? $evento->lugar_id : '')) @endphp
                <option disabled {{ empty($selected) ? 'selected' : '' }}>Seleccione Lugar</option>
                @foreach($lugares as $value => $label)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
                @endforeach
            </x-inputs.select>
        </x-inputs.group>

    </div>

    <x-inputs.group class="w-full">
        <x-inputs.select name="tipo_id" label="Tipo de evento" required>
            @php $selected = old('tipo_id', ($editing ? $evento->tipo_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Seleccione Evento</option>
            @foreach($tiposEventos as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.select name="programa_id" label="Organización" >
            @php $selected = old('programa_id', ($editing ? $evento->programa_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Seleccione Programa Institucional/Catedra Libre</option>
            @foreach($programas as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.list
            name="responsables"
            label="Responsables"
            value="{{ (null !== old('responsables')) ? json_encode(old('responsables')) : ($editing ? json_encode($evento->responsables)  : '[]') }}"
            required
        ></x-inputs.list>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.list
            name="colaboradores"
            label="Colaboradoras/es"
            value="{{ (null !== old('colaboradores')) ? json_encode(old('colaboradores')) : ($editing && $evento->colaboradores ? json_encode($evento->colaboradores)  : '[]') }}"
            
        ></x-inputs.list>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.list
            name="destinatarios"
            label="Destinatarias/os"
            value="{{ (null !== old('destinatarios')) ? json_encode(old('destinatarios')) : ($editing && $evento->destinatarios ? json_encode($evento->destinatarios)  : '[]') }}"
            
        ></x-inputs.list>
    </x-inputs.group>

    <!--<x-inputs.group class="w-full ">
        <x-inputs.basic
            name="resolucion"
            label="Resolución"
            type='file'
            value="{{ old('resolucion', ($editing ? $evento->resolucion : '')) }}"
        ></x-inputs.basic>
    </x-inputs.group>-->


<!-- resolución -->
    <div class="w-full flex flex-wrap" style=" border-top: 1px solid grey; padding-top: 2vh; padding-bottom: 2vh;">
        <x-inputs.group class="w-full lg:w-6/12">
            <x-inputs.partials.label
                name="resolucion"
                label="Resolución"
            ></x-inputs.partials.label
            ><br />
            <input
                type="file"
                name="resolucion"
                id="resolucion"
                class="form-control-file"
            />
            @error('resolucion') @include('components.inputs.partials.error')
            @enderror
        </x-inputs.group>
         @if($editing && $evento->resolucion)
            @php $src = '/storage/'.$evento->resolucion @endphp
            <x-inputs.group class="w-full lg:w-6/12">
                <iframe class="w-full" name="previewPDF" id="previewPDF" height="300" src="{{$src}}" frameborder="0"></iframe>
                <h1 name="previewMsg" id="previewMsg" class="text-blue-600 hidden"><br/><b><i>La vista previa estará disponible después de guardar.</i></b></h1>
            </x-inputs.group>
        @else
            <x-inputs.group class="w-full lg:w-6/12">
                <h1 name="previewMsg" id="previewMsg" class="text-blue-600 hidden"><br/><b><i>La vista previa estará disponible después de guardar.</i></b></h1>
            </x-inputs.group>
        @endif 
    </div>
<!-- resolución -->


    <x-inputs.group class="w-full ">
        <x-inputs.basic
            name="imagen"
            label="Imagen"
            type='file'
            value="{{ old('imagen', ($editing ? $evento->imagen : '')) }}"
        ></x-inputs.basic>
        @if($editing && $evento->imagen)
        @php $src = '/storage/'.$evento->imagen @endphp
        <x-inputs.group class="w-full lg:w-6/12">
            <iframe class="w-full" name="previewPDF" id="previewPDF" height="300" src="{{$src}}" frameborder="0"></iframe>
            <h1 name="previewMsg" id="previewMsg" class="text-blue-600 hidden"><br/><b><i>La vista previa estará disponible después de guardar.</i></b></h1>
            </x-inputs.group>
        @else
            <x-inputs.group class="w-full lg:w-6/12">
                <h1 name="previewMsg" id="previewMsg" class="text-blue-600 hidden"><br/><b><i>La vista previa estará disponible después de guardar.</i></b></h1>
            </x-inputs.group>
        @endif 

    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="enlace_inscripcion"
            label="Enlace de inscripción"
            value="{{ old('enlace_inscripcion', ($editing ? $evento->enlace_inscripcion : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.checkbox
            name="active"
            label="Activo"
            :checked="old('active', ($editing ? $evento->active : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.richtext
            name="observaciones"
            id="editor"
            label="Observaciones"
            maxlength="255"
            
            >{{ old('observaciones', ($editing ? $evento->observaciones : '')) }}</x-inputs.richtext>
    </x-inputs.group>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    alert("hola");
});
</script> -->