@props([
    'name',
    'label',
    'value',
])

<div x-data='{hide: true, elements: {{htmlspecialchars_decode($value)}}}'>
    <div class="mb-1">
        @if($label ?? null)
            @include('components.inputs.partials.label')
        @endif
        <button type="button" class="button button-primary ring-0 ml-3" @click="elements.push('')">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
            </svg>
        </button>    
        </div>
    <div class="table w-full ">
        <template x-for="(element, index) in elements" :key="index">
            <div class="table-row">
                <div class="table-cell font-light subpixel-antialiased tabular-nums text-xl" x-text="(index+1)+')'"></div>
                <div class="table-cell ml-8 w-10/12">
                    <input type="text"
                        id= {{$name}}'-index' 
                        class="form-input mb-2 block appearance-none w-full py-1 px-2 text-base leading-normal text-gray-800 border border-gray-200 rounded"
                        x-model="elements[index]"
                        name = {{$name.'[]'}}
                        autocomplete="off"
                        required>
                </div>
                <div class="table-cell ">
                    <button type="button" class="button ring-2 ring-yellow-500 ring-opacity-50 ml-3" x-model='index' @click="elements.splice(index, 1)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                            <path d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z"/>
                          </svg>
                    </button> 
                </div>
            </div>   
        </template>
    </div>
    @error($name)
    @include('components.inputs.partials.error')
    @enderror
</div>

