
<form id="editComponent" action="{{siteUrl('/admin/forms/article/component/edit')}}" method="POST">
    <input type="hidden" name="component-id" value="{{$component->id}}"">
    <div class=" modal-header">
        <h5 class="modal-title mt-0">Editar componente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body" id="modal-edit-component-body">
            
@switch($component->type)
    @case(1)
        {{-- @include('layouts.components.image') --}}
           
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="modal-edit-component-image" >
                Imagen
            </label>
            <div class="col-sm-10">
            <input name="modal-edit-component-image" id="modal-edit-component-image" type="file" class="dropify" data-height="300" data-allowed-file-extensions="jpg png jpeg" data-default-file="{{siteUrl($component->content)}}"/>
            </div>
        </div>
        <script>
            $('.dropify').dropify({
                messages: {
                    'default': 'Arrastre imagen o haga click para seleccionar',
                    'replace': 'Reemplazar la imagen',
                    'remove':  'Eliminar',
                    'error':   'Hubo un error, intentelo de nuevo'
                }
            });
        </script>
        @break
    @case(2)
        {{-- @include('layouts.components.image-link') --}}
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title" >Link</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$component->link}}" id="modal-edit-component-link" name="modal-edit-component-link" placeholder="Link que contendrá la imagen">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="modal-edit-component-image" >
                Imagen
            </label>
            <div class="col-sm-10">
            <input name="modal-edit-component-image" id="modal-edit-component-image" type="file" class="dropify" data-height="300" data-allowed-file-extensions="jpg png jpeg" data-default-file="{{siteUrl($component->content)}}"/>
            </div>
        </div>
        <script>
            $('.dropify').dropify({
                messages: {
                    'default': 'Arrastre imagen o haga click para seleccionar',
                    'replace': 'Reemplazar la imagen',
                    'remove':  'Eliminar',
                    'error':   'Hubo un error, intentelo de nuevo'
                }
            });
        </script>
        @break
    @case(3)
        {{-- @include('layouts.components.text') --}}
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title" >Título</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$component->title}}" id="modal-edit-component-title" name="modal-edit-component-title" placeholder="Título">
            </div>
        </div>
    
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="value" >Contenido</label>
            <div class="col-sm-10">
                <textarea id="modal-edit-component-value" name="modal-edit-component-value"  class="form-control" rows="6">{!! $component->content !!}</textarea>
            </div>
        </div>
        @break
    @case(4)
        {{-- @include('layouts.components.video') --}}

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title" >Link a YouTube</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="https://www.youtube.com/watch?v={{$component->link}}" id="modal-edit-component-link" name="modal-edit-component-link" placeholder="https://www.youtube.com/watch?v=xxxxxxxxxx">
            </div>
        </div>

        @break
        
    @case(5)
        {{-- @include('layouts.components.title') --}}

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title" >Título</label>
            <div class="col-sm-10">
            <input class="form-control" type="text" value="{{$component->title}}" id="modal-edit-component-title" name="modal-edit-component-title" placeholder="Título">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="value" >Bajada</label>
            <div class="col-sm-10">
                <textarea id="modal-edit-component-value" name="modal-edit-component-value"  class="form-control" rows="2">{!! $component->content !!}</textarea>
            </div>
        </div>
        @break
    
    @case(7)
        {{-- @include('layouts.components.galery') --}}

        @php
            $js_arr = '[';
            
                foreach($component->galery as $file){
                    
                    $js_arr .= '{ name: "'.str_replace("/","",str_replace("images/expositores/","",siteUrl($file->path))).'", size: '.$file->size.',thumb: "'.siteUrl($file->path).'" },'; 
                
                }
                if(strlen($js_arr)>1){
                    $js_arr = substr($js_arr, 0, -1);
                }
                
            $js_arr .= ']';
            $rand_id = random_int(1000,999999);
        @endphp
    
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title" >Título</label>
            <div class="col-sm-10">
                <input name="component-id" type="hidden" value="{{$component->id}}">
                <input class="form-control" type="text" value="{{$component->title}}" id="modal-edit-component-title" name="modal-edit-component-title" placeholder="Título">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="value" >Imagenes</label>
            <div class="col-sm-10">
                <div id="edit-dropzone" class="dropzone">
                    <div class="fallback">
                        <input name="article-id" type="hidden" value="{{$component->article_id}}">
                        <input name="component-id" type="hidden" value="{{$component->id}}">
                        <input name="file" type="file" multiple="multiple">
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" >
        
        Dropzone.prototype.defaultOptions.dictDefaultMessage = "Suelte aquí los archivos o haga clic";
        Dropzone.prototype.defaultOptions.addRemoveLinks = true;
        Dropzone.prototype.defaultOptions.dictRemoveFile = "Borrar";
        Dropzone.prototype.defaultOptions.acceptedFiles =  "image/*";
        
        new Dropzone("#edit-dropzone", {
            url:'{{siteUrl('/admin/forms/article/galery/files')}}',
            init: function() {
                this.on("sending", function(file, xhr, formData){
                        formData.append("component-id", {{$component->id}});
                });
                    
                var thisDropzone = this;
                    
                    var data = {!! $js_arr !!};
                    $.each(data, function (key, value) { //loop through it

                        var mockFile = {
                            name: value.name,
                            size: value.size,
                            id:  value.name
                        }; // here we get the file name and size as response

                        thisDropzone.options.addedfile.call(thisDropzone, mockFile);
                        thisDropzone.options.thumbnail.call(thisDropzone, mockFile, value.thumb); //uploadsfolder is the folder where you have all those uploaded files
                        thisDropzone.emit("complete", mockFile);
                    });
            },
                removedfile: function (file) {
                    var fileID = file.previewElement.id;
                    if(fileID.length <1 ){
                        fileID=file.name;
                    }
                    $.ajax({
                        type: 'post',
                        url: '{{siteUrl("/admin/forms/article/galery/files/delete")}}',
                        data: "name=" + fileID + "&component-id={{$component->id}}"
                    });
                    var _ref;
                    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                },
                success: function( file, response ) {
                    file.previewElement.id = response.filename;
                    return response
                },
                renameFile: function (file) {
                    let newName = new Date().getTime() + '_' + file.name;
                    return newName;
                }
            });
        </script>
        @break
    @case(8)

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="modal-edit-component-value" >Contenido</label>
        <div class="col-sm-10">
            <textarea id="modal-edit-component-value" name="modal-edit-component-value"  class="form-control summernote" rows="6">{!! nl2br($component->content)!!}</textarea>
        </div>
    </div>
    
    <script>
        jQuery(document).ready(function(){
                   $('#modal-edit-component-value').summernote({
                       height: 300,                 // set editor height
                       minHeight: null,             // set minimum height of editor
                       maxHeight: null,             // set maximum height of editor
                       focus: true                 // set focus to editable area after initializing summernote
                   });
               });
               
   </script>
    @break
    @default

@endswitch
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar cambios</button>
    </div>
</form>
