@props([
    'id',
    'name',
    'label',
    'url',
    'value',
    'checked' => false,
    'addHiddenValue' => true,
    'hiddenValue' => 0,
])

<div class="flex justify-center items-center" x-data="{ toggle: @if($checked) '1' @else '0' @endif} ">
  
    <div class="relative rounded-full w-12 h-6 transition duration-200 ease-linear"
         :class="[toggle === '1' ? 'bg-green-400' : 'bg-gray-400']">
      <label for="{{ $id }}""
             class="absolute left-0 bg-white border-2 mb-2 w-6 h-6 rounded-full transition transform duration-100 ease-linear cursor-pointer"
             :class="[toggle === '1' ? 'translate-x-full border-green-400' : 'translate-x-0 border-gray-400']"></label>
      <input type="checkbox" id="{{ $id }}" name="{{ $name }}" 
             class=""
             style="display:none" 
             x-on:click = "{
                    url = '{{$url}}'
                    formData = {
                        _token: '{{ csrf_token() }}',
                        active: toggle === '0' ? toggle = '1' : toggle = '0',
                    }
                    console.log(formData);

                    fetch(url,{
                        method: 'PATCH',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(this.formData),
                        })
                        .then( response => response.json())
                        .then( console.log )

             }">
    </div>
</div>

<script type="text/javascript">
    function cambiarEstado(url, estado){

    }
</script>