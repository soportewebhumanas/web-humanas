@switch($type)
    @case(1)
        {{-- @include('layouts.components.image') --}}
           
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="modal-add-component-image" >
                Imagen
            </label>
            <div class="col-sm-10">
            <input name="modal-add-component-image" id="modal-add-component-image" type="file" class="dropify" data-height="300" data-allowed-file-extensions="jpg png jpeg" data-default-file=""/>
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
                <input class="form-control" type="text" value="" id="modal-add-component-link" name="modal-add-component-link" placeholder="Link que contendrá la imagen">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="modal-add-component-image" >
                Imagen
            </label>
            <div class="col-sm-10">
            <input name="modal-add-component-image" id="modal-add-component-image" type="file" class="dropify" data-height="300" data-allowed-file-extensions="jpg png jpeg"/>
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
                <input class="form-control" type="text" value="" id="modal-add-component-title" name="modal-add-component-title" placeholder="Título">
            </div>
        </div>
    
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="value" >Contenido</label>
            <div class="col-sm-10">
                <textarea id="modal-add-component-value" name="modal-add-component-value"  class="form-control" rows="6"></textarea>
            </div>
        </div>
        @break
    @case(4)
        {{-- @include('layouts.components.video') --}}

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title" >Link a YouTube</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="" id="modal-add-component-link" name="modal-add-component-link" placeholder="https://www.youtube.com/watch?v=xxxxxxxxxx">
            </div>
        </div>

        @break
        
    @case(5)
        {{-- @include('layouts.components.title') --}}

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title" >Título</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="" id="modal-add-component-title" name="modal-add-component-title" placeholder="Título">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="value" >Bajada</label>
            <div class="col-sm-10">
                <textarea id="modal-add-component-value" name="modal-add-component-value"  class="form-control" rows="2"></textarea>
            </div>
        </div>
        @break
        

    @case(7)
        {{-- @include('layouts.components.title') --}}
        @php
            $js_arr = '[';
            if(isset($component)){
                foreach($artist->contract->files as $file){
                    
                    $js_arr .= '{ name: "'.str_replace("/uploads/","",siteUrl($file->path)).'", size: "'.$file->size.'",thumb: "'.siteUrl($file->path).'" },'; 
                
                }
                if(strlen($js_arr)>1){
                    $js_arr = substr($js_arr, 0, -1);
                }
            }
            $js_arr .= ']';
            $rand_id = random_int(1000,999999);
        @endphp
    
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title" >Título</label>
            <div class="col-sm-10">
                <input name="temp-id" type="hidden" value="{{$rand_id}}">
                <input class="form-control" type="text" value="" id="modal-add-component-title" name="modal-add-component-title" placeholder="Título">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="value" >Imagenes</label>
            <div class="col-sm-10">
                <form id="my-dropzone" action="{{siteUrl('/admin/forms/article/galery/files')}}" enctype="multipart/form-data" class="dropzone">
                    <div class="fallback">
                        <input name="temp-id" type="hidden" value="{{$rand_id}}">
                        <input name="file" type="file" multiple="multiple">
                    </div>
                </form>
            </div>
        </div>
        <script>

        Dropzone.prototype.defaultOptions.dictDefaultMessage = "Suelte aquí los archivos o haga clic";
        Dropzone.prototype.defaultOptions.addRemoveLinks = true;
        Dropzone.prototype.defaultOptions.dictRemoveFile = "Borrar";
        Dropzone.prototype.defaultOptions.acceptedFiles =  "image/*";
        
        new Dropzone("#my-dropzone", {
            init: function() {
                this.on("sending", function(file, xhr, formData){
                        formData.append("temp-id", {{$rand_id}});
                });
            },
                removedfile: function (file) {
                    var fileID = file.previewElement.id;
                    
                    $.ajax({
                        type: 'post',
                        url: '{{siteUrl("/admin/forms/article/galery/files/delete")}}',
                        data: "name=" + fileID + "&component-id={{$rand_id}}"
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
            <label class="col-sm-2 col-form-label" for="value" >Contenido</label>
            <div class="col-sm-10">
                <textarea id="modal-add-component-value" name="modal-add-component-value"  class="form-control summernote" rows="6"></textarea>
            </div>
        </div>
        @break
    @default

@endswitch

<script src="{{siteUrl('adm_assets/plugins/summernote/summernote-bs4.min.js')}}" type="text/javascript"></script>

    <script>
        jQuery(document).ready(function(){
            if(<?php echo $type;?> == 8){
                   $('#modal-add-component-value').summernote({
                       height: 300,                 // set editor height
                       minHeight: null,             // set minimum height of editor
                       maxHeight: null,             // set maximum height of editor
                       focus: true                 // set focus to editable area after initializing summernote
                   });
               
        }else{
            $('.summernote').each(function( index ) {
                $(this).summernote('destroy');
                });
        }

    });
               
   </script>