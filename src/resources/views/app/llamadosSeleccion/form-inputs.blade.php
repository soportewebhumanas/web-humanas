@php $editing = isset($llamadoSeleccion) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.number
            name="cantidad"
            label="Cantidad"
            value="{{ old('cantidad', ($editing ? $llamadoSeleccion->cantidad : '')) }}"
            required autofocus
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="cargo"
            label="Cargo"
            value="{{ old('cargo', ($editing ? $llamadoSeleccion->cargo : '')) }}" 
            maxlength="255"
            required 
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="dedicacion"
            label="Dedicación"
            value="{{ old('dedicacion', ($editing ? $llamadoSeleccion->dedicacion : '')) }}" 
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-3/12">
        <x-inputs.text
            name="asignatura"
            label="Asignatura"
            value="{{ old('asignatura', ($editing ? $llamadoSeleccion->asignatura : '')) }}" 
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

     <x-inputs.group class="w-full lg:w-3/12">
        <x-inputs.text
            name="departamento"
            label="Departamento"
            value="{{ old('departamento', ($editing ? $llamadoSeleccion->departamento: '')) }}" 
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

     <x-inputs.group class="w-full lg:w-3/12">
        <x-inputs.text
            name="carrera"
            label="Carrera"
            value="{{ old('carrera', ($editing ? $llamadoSeleccion->carrera : '')) }}" 
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-3/12">
        <x-inputs.number
            name="plan"
            label="Plan"
            value="{{ old('plan', ($editing ? $llamadoSeleccion->plan : '')) }}" 
            maxlength="255"
            required
        ></x-inputs.number>
    </x-inputs.group>
    
    <x-inputs.group class="w-full">
        <x-inputs.richtext
            id='observacion'
            name="observacion"
            label="Observación"    
        >{{ old('observacion', ($editing ? $llamadoSeleccion->observacion : '')) }}</x-inputs.richtext>
    </x-inputs.group>


    <x-inputs.group class="w-full lg:w-3/12">
        <x-inputs.datetime
            name="inicio_inscripcion"
            label="Inicio de inscripción"
           value="{{ old('inicio_inscripcion', ($editing ? optional($llamadoSeleccion->inicio_inscripcion)->format('Y-m-d\TH:i:s')  : '')) }}" 
            max="255"
            required
        ></x-inputs.datetime>   
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-3/12">
        <x-inputs.datetime
            name="fin_inscripcion"
            label="Fin de inscripción"
            value="{{ old('fin_inscripcion', ($editing ? optional($llamadoSeleccion->fin_inscripcion)->format('Y-m-d\TH:i:s')  : '')) }}" 
            max="255"
            required
        ></x-inputs.datetime>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="enlace_inscripcion"
            label="Enlace de inscripción"
            value="{{ old('enlace_inscripcion', ($editing ? $llamadoSeleccion->enlace_inscripcion : '')) }}" 
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-12/12">
        <x-inputs.checkbox
            name="activo"
            label="Activo"
            :checked="old('activo', ($editing ? $llamadoSeleccion->activo : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>
    
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
         @if($editing && $llamadoSeleccion->resolucion)
            @php $src = '/storage/'.$llamadoSeleccion->resolucion @endphp
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
    <div class="w-full flex flex-wrap" style=" border-top: 1px solid grey; padding-top: 2vh; padding-bottom: 2vh;">
        <x-inputs.group class="w-full lg:w-6/12" >
            <x-inputs.partials.label
                name="acta_final"
                label="Acta Final"
            ></x-inputs.partials.label
            ><br />
            <input
                type="file"
                name="acta_final"
                id="acta_final"
                class="form-control-file"
            />
            @error('acta_final') @include('components.inputs.partials.error')
            @enderror
        </x-inputs.group>
         @if($editing && $llamadoSeleccion->acta_final)
            @php $src = '/storage/'.$llamadoSeleccion->acta_final @endphp
            <x-inputs.group class="w-full lg:w-6/12">
                <iframe class="w-full" name="previewPDF2" id="previewPDF2" height="300" src="{{$src}}" frameborder="0"></iframe>
                <h1 name="previewMsg2" id="previewMsg2" class="text-blue-600 hidden"><br/><b><i>La vista previa estará disponible después de guardar.</i></b></h1>
            </x-inputs.group>
        @else
            <x-inputs.group class="w-full lg:w-6/12">
                <h1 name="previewMsg2" id="previewMsg2" class="text-blue-600 hidden"><br/><b><i>La vista previa estará disponible después de guardar.</i></b></h1>
            </x-inputs.group>
        @endif 
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#resolucion").change(function(){
    $("#previewPDF").hide();  
    $("#previewMsg").removeClass("hidden");
  });
   $("#acta_final").change(function(){
    $("#previewPDF2").hide();  
    $("#previewMsg2").removeClass("hidden");
  });
});
</script>