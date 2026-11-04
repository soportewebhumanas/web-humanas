@props([
    'name',
    'label',
    'value',
])

<x-inputs.basic type="color" class="form-input" :name="$name" label="{{ $label ?? ''}}" :value="$value" :attributes="$attributes"></x-inputs.basic>