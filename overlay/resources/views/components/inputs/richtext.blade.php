@props([
    'name',
    'id',
    'label',
])

@if($label ?? null)
    @include('components.inputs.partials.label')
@endif

<div x-data={} x-init='() => {
        let editor;
        let editorInstance;
      
        ClassicEditor
        .create( document.querySelector( "{{"#".$id}}" ),{
            language: "es",
            defaultLanguage: "es",
            toolbar: [ "heading", "|", "bold", "italic", "bulletedList", "numberedList", "link",  "blockQuote", "insertTable","alignment"],
            heading: {
                options: [
                    { model: "paragraph", title: "Párrafo", class: "ck-heading_paragraph" },
                    { model: "heading3", view: "h3", title: "Título", class: "ck-heading_heading3" },
                     { model: "heading5", view: "h5", title: "Subtítulo", class: "ck-heading_heading5" }
                ]
            },
            alignment: {
              options: ["left", "right", "center", "justify"]
            },
            table: {
                maxColumns: 4,
                maxRows: 8
            }
        } )
        
        .then( newEditor => {
            editor = newEditor;
            

        } )
        .catch( error => {
            console.error( error );
        } );    
}'>
    <textarea 
        id="{{ $id }}"
        name="{{ $name }}" 
        rows="3" 
        {{ ($required ?? false) ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'block appearance-none w-full py-1 px-2 text-base leading-normal text-gray-800 border border-gray-200 rounded']) }}
        autocomplete="off"
    >{{ $slot }}</textarea>
</div>

@error($name)
    @include('components.inputs.partials.error')
@enderror
