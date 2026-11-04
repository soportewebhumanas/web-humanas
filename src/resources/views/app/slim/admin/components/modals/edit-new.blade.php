<link href="{{siteUrl('adm_assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet" />
<link href="{{siteUrl('adm_assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet" />
<link href="{{siteUrl('adm_assets/plugins/dropzone/dist.5.2/dropzone.css')}}" rel="stylesheet" />
<style>
        .dropzone .dz-preview .dz-error-message {
            top: 150px!important;
        }
        .dropzone .dz-preview .dz-image img {
            object-fit: fill !important;
            width: 100% !important;
        }
</style>
<form id="editNew" action="{{siteUrl('/admin/forms/noticias/edit')}}" method="POST">
<input type="hidden" value="{{$new->id}}" name="new-id">
    <div class="modal-header">
        <h5 class="modal-title mt-0">Editar Noticia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body" id="modal-add-company-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title" >Titulo</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$new->title}}" id="title" name="title" placeholder="Título de la noticia">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="date" >Fecha</label>
            <div class="col-sm-10  input-group">
                <input class="form-control" type="date" value="{{$new->date}}" id="date" name="date">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="value" >Contenido</label>
            <div class="col-sm-10  input-group">
                <!--<input class="form-control" type="text" value="" id="content" name="content" placeholder="Contenido">-->
                <textarea class="summernote" id="content-create" name="content">{{$new->content}}</textarea>
            </div>
        </div>
        <!-- Imagen -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="news_image" >
                Imagen de portada<br>
                <small>Medida sugerida: 781x450 px</small>
            </label>
            <div class="col-sm-10">
                <input name="news_image" id="news_image" type="file" class="dropify" data-show-remove="false" data-default-file="{{siteUrl($new->file_path)}}" data-height="300" data-allowed-file-extensions="jpg png jpeg" />
                <input type="hidden" value="{{siteUrl($new->file_path)}}" name="has_file">
            </div>
        </div>
        
        <!-- <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="category" >Categoría</label>
            <div class="col-sm-10  input-group">
                <select id="category" name="category" class="form-control select2">
                </select>
            </div>
        </div> -->
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="quote" >Cita</label>
            <div class="col-sm-10  input-group">
                <!--<input class="form-control" type="text" value="" id="content" name="content" placeholder="Contenido">-->
                <textarea class="summernote" id="quote" name="quote">{{$new->quote}}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
    </div>
</form>
<script src="{{siteUrl('adm_assets/plugins/summernote/summernote-bs4.min.js')}}" type="text/javascript"></script>
<script src="{{siteUrl('adm_assets/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/dropzone/dist.5.2/dropzone.js')}}" type="text/javascript"></script>
<script>
    jQuery(document).ready(function(){
        $('.summernote').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                 // set focus to editable area after initializing summernote
        });
    });
</script>
<script>
    Dropzone.prototype.defaultOptions.dictDefaultMessage = "Suelte aquí los archivos o haga clic";
    Dropzone.prototype.defaultOptions.addRemoveLinks = true;
    Dropzone.prototype.defaultOptions.dictRemoveFile = "Borrar";
    Dropzone.prototype.defaultOptions.acceptedFiles =  "image/*";
    $(document).ready(function() {
    
        $('.dropify').dropify({
            messages: {
                'default': 'Arrastre imagen o haga click para seleccionar',
                'replace': 'Reemplazar la imagen',
                'remove':  'Eliminar',
                'error':   'Hubo un error, intentelo de nuevo'
            }
        });
    });
</script>