@php $editing = isset($publicacion) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full lg:w-12/12">
        <x-inputs.text
            label="Título"
            name="titulo"
            value="{{ old('titulo', ($editing ? $publicacion->titulo : '')) }}" 
            maxlength="255"
            required autofocus
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-4/12">
        @php $selected = old('esPeriodica', ($editing ? $publicacion->esPeriodica : '')) @endphp
        <x-inputs.select
            label="¿Es periódica?"
            name="esPeriodica"
            id="esPeriodica"
            maxlength="255"
            required  
        >
            <option value="SI" {{($selected=='SI' || empty($selected)) ? 'selected' : '' }}>SI</option>
            <option value="NO" {{($selected=='NO' || empty($selected)) ? 'selected' : '' }}>NO</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-4/12" id="tipoDePublicacionGroup">
        <x-inputs.text
            label="Tipo de publicación"
            name="tipoDePublicacion"
            id="tipoDePublicacion"
            value="{{ old('tipoDePublicacion', ($editing ? $publicacion->tipoDePublicacion : '')) }}" 
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-4/12">
        <x-inputs.number
            label="Año"
            name="anio"
            value="{{ old('anio', ($editing ? $publicacion->anio : '')) }}" 
            required  
        ></x-inputs.number>
    </x-inputs.group>

     <x-inputs.group class="w-full lg:w-12/12" id="editorialGroup">
        <x-inputs.text
            label="Editorial"
            name="editorial"
            id="editorial"
            value="{{ old('editorial', ($editing ? $publicacion->editorial : '')) }}" 
            maxlength="255"  
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full" id="autorGroup">
        <x-inputs.list
            name="autor"
            id="autor"
            label="Autor/a"
            value="{{ (null !== old('autor')) ? json_encode(old('autor')) : ($editing && $publicacion->esPeriodica == 'NO' ? json_encode($publicacion->autor)  : '[]') }}"
        ></x-inputs.list>
    </x-inputs.group>

     <x-inputs.group class="w-full" id="compiladorGroup">
        <x-inputs.list
            name="compilador"
            id="compilador"
            label="Compilador/a"
            value="{{ (null !== old('compilador')) ? json_encode(old('compilador')) : ($editing && $publicacion->esPeriodica == 'NO' ? json_encode($publicacion->compilador)  : '[]') }}"
        ></x-inputs.list>
    </x-inputs.group>

     <x-inputs.group class="w-full" id="coordinadorGroup">
        <x-inputs.list
            name="coordinador"
            id="coordinador"
            label="Coordinador/a"
            value="{{ (null !== old('coordinador')) ? json_encode(old('coordinador')) : ($editing && $publicacion->esPeriodica == 'NO' ? json_encode($publicacion->coordinador)  : '[]') }}"
        ></x-inputs.list>
    </x-inputs.group>

    <x-inputs.group class="w-full" id="editorGroup">
        <x-inputs.list
            name="editor"
            id="editor"
            label="Editor/a"
            value="{{ (null !== old('editor')) ? json_encode(old('editor')) : ($editing && $publicacion->esPeriodica == 'NO' ? json_encode($publicacion->editor)  : '[]') }}"
        ></x-inputs.list>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.richtext
            id='resumen'
            name="resumen"
            label="Resumen"    
        >{{ old('resumen', ($editing ? $publicacion->resumen : '')) }}</x-inputs.richtext>
    </x-inputs.group>

     <x-inputs.group class="w-full lg:w-12/12">
        <x-inputs.text
            label="Enlace"
            name="enlace"
            value="{{ old('enlace', ($editing ? $publicacion->enlace : '')) }}" 
            maxlength="255" 
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-12/12">
        <x-inputs.checkbox
            name="activo"
            label="Activo"
            :checked="old('activo', ($editing ? $publicacion->activo : 0))"
        ></x-inputs.checkbox>
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
     @if($editing && $publicacion->imagen)
        @php $src = '/files/'.$publicacion->imagen @endphp
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    //PREVIEW
    $("#imagen").change(function(){
        $("#previewPDF").hide();  
        $("#previewMsg").removeClass("hidden");
    });

    if( $( "#esPeriodica option:selected" ).text() === 'SI'){ 
            $("#tipoDePublicacionGroup").addClass("hidden");
            $("#editorialGroup").addClass("hidden") ;
            $("#autorGroup").addClass("hidden") ;
            $("#compiladorGroup").addClass("hidden") ;
            $("#coordinadorGroup").addClass("hidden") ;
            $("#editorGroup").addClass("hidden") ;
    }
    
    //Activa y desactiva tipoDePublicacion, dependiendo si es periódica o no.
    $("#esPeriodica").change(function(){
       if( $( "#esPeriodica option:selected" ).text() === 'NO'){ 
            $("#tipoDePublicacionGroup").removeClass("hidden") ;
            $("#editorialGroup").removeClass("hidden") ;
            $("#autorGroup").removeClass("hidden") ;
            $("#compiladorGroup").removeClass("hidden") ;
            $("#coordinadorGroup").removeClass("hidden") ;
            $("#editorGroup").removeClass("hidden") ;
        }else{
            $("#editorial").val("");
            $("#tipoDePublicacion").val("");

            $("#tipoDePublicacionGroup").addClass("hidden");
            $("#editorialGroup").addClass("hidden") ;
            $("#autorGroup").addClass("hidden") ;
            $("#compiladorGroup").addClass("hidden") ;
            $("#coordinadorGroup").addClass("hidden") ;
            $("#editorGroup").addClass("hidden") ;
        }
    });
});
</script>