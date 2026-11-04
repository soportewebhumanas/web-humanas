@php $editing = isset($docente) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            label="Nombre/s"
            name="nombre"
            value="{{ old('nombre', ($editing ? $docente->nombre : '')) }}" 
            maxlength="255"
            required autofocus
        ></x-inputs.text>
    </x-inputs.group>


    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            label="Apellido/s"
            name="apellido"
            value="{{ old('apellido', ($editing ? $docente->apellido : '')) }}" 
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            label="Título de grado/posgrado"
            name="titulo"
            value="{{ old('titulo', ($editing ? $docente->titulo : '')) }}" 
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full" id="asignaturasGroup">
        <x-inputs.list
            name="asignaturas"
            id="asignaturas"
            label="Asignatura/s"
            value="{{ (null !== old('asignaturas')) ? json_encode(old('asignaturas')) : ($editing ? json_encode($docente->asignaturas)  : '[]') }}"
        ></x-inputs.list>
    </x-inputs.group>

    <x-inputs.group class="w-full" id="especialidadGroup">
        <x-inputs.list
            name="especialidad"
            id="especialidad"
            label="Especialidad/es"
            value="{{ (null !== old('especialidad')) ? json_encode(old('especialidad')) : ($editing ? json_encode($docente->especialidad)  : '[]') }}"
        ></x-inputs.list>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            label="Enlace a CV"
            name="CVLink"
            value="{{ old('CVLink', ($editing ? $docente->CVLink : '')) }}" 
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.partials.label
            name="CVFile"
            label="Adjuntar CV"
        ></x-inputs.partials.label
        ><br />
        <input
            type="file"
            name="CVFile"
            id="CVFile"
            class="form-control-file"
        />
        @error('CVFile') @include('components.inputs.partials.error')
        @enderror
    </x-inputs.group>
    @if($editing && $docente->CVFile)
        @php $src = '/files/'.$docente->CVFile @endphp
        <x-inputs.group class="w-full lg:w-6/12">
            <iframe class="w-full" name="previewPDF" id="previewPDF" height="300" src="{{$src}}" frameborder="0"></iframe>
            <h1 name="previewMsg" id="previewMsg" class="text-blue-600 hidden"><br/><b><i>La vista previa del CV estará disponible después de guardar.</i></b></h1>
        </x-inputs.group>
    @else
        <x-inputs.group class="w-full lg:w-6/12">
            <h1 name="previewMsg" id="previewMsg" class="text-blue-600 hidden"><br/><b><i>La vista previa del CV estará disponible después de guardar.</i></b></h1>
        </x-inputs.group>
    @endif
   

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
     
    @if($editing && $docente->imagen)
        @php $src2 = '/files/'.$docente->imagen @endphp
        <x-inputs.group class="w-full lg:w-6/12">
            <iframe class="w-full" name="previewPDF2" id="previewPDF2" height="300" src="{{$src2}}" frameborder="0"></iframe>
            <h1 name="previewMsg2" id="previewMsg2" class="text-blue-600 hidden"><br/><b><i>La vista previa de la foto de perfil estará disponible después de guardar.</i></b></h1>
        </x-inputs.group>
    @else
        <x-inputs.group class="w-full lg:w-6/12">
            <h1 name="previewMsg2" id="previewMsg2" class="text-blue-600 hidden"><br/><b><i>La vista previa de la foto de perfil estará disponible después de guardar.</i></b></h1>
        </x-inputs.group>
    @endif 


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    //PREVIEW
    $("#imagen").change(function(){
        $("#previewPDF2").hide();  
        $("#previewMsg2").removeClass("hidden");
    });
    $("#CVFile").change(function(){
        $("#previewPDF").hide();  
        $("#previewMsg").removeClass("hidden");
    });

});
</script>