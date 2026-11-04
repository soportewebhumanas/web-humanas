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
<form id="editEvent" action="{{siteUrl('/admin/forms/events/edit')}}" method="POST">
    <input type="hidden" value="{{$event->id}}" name="event_id">
        <div class="modal-header">
            <h5 class="modal-title mt-0">Editar Evento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body" id="modal-add-event-body">
            <!-- Titulo -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="title" >Titulo</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$event->title}}" id="title" name="title" placeholder="Título del evento">
                </div>
            </div>
            <!-- Contenido -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="value" >Contenido</label>
                <div class="col-sm-10  input-group">
                    <textarea class="summernote" id="content-edit" name="content">{{$event->content}}</textarea>
                    <!--<input class="form-control" type="text" value="{{$event->content}}" id="content" name="content" placeholder="Contenido">-->
                </div>
            </div>
            <!-- Imagen -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-labeventfor="event_image" >
                    Imagen de portada<br>
                    <small>Medida sugerida: 781x450 px</small>
                </label>
                <div class="col-sm-10">
                    <input name="event_image" id="event_image" type="file" class="dropify" data-show-remove="false" data-default-file="{{siteUrl($event->file_path)}}" data-height="300" data-allowed-file-extensions="jpg png jpeg" />
                    <input type="hidden" value="{{siteUrl($event->file_path)}}" name="has_file">
                </div>
            </div>
            <!-- Fecha -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="date" >Fecha</label>
                <div class="col-sm-10  input-group">
                <input class="form-control" type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($event->date)); ?>" id="date" name="date">
                </div>
            </div>
            <!-- Programa -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="program" >Programa</label>
                <div class="col-sm-10">
                    <input name="program" id="program" data-default-file="{{siteUrl($event->program)}}" type="file" data-allowed-file-extensions=".pdf"/>
                    <p class="text-muted"><?php if($event->program != '') {echo ("Actualmente tiene un archivo: ".$event->program);} ?></p>
                    <input type="hidden" value="{{siteUrl($event->program)}}" name="has_program">
                </div>
            </div>
            <!-- Carga horario -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="workload" >Carga horaria</label>
                <div class="col-sm-10">
                    <input class="form-control" value="{{$event->workload}}" type="text" value="" id="workload" name="workload" placeholder="Carga horaria del evento. Ej: 15hs">
                </div>
            </div>
            <!-- Tarifa -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="tariff" >Tarifa</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$event->tariff}}" id="tariff" name="tariff" placeholder="Tarifa del evento. Ej: $500">
                </div>
            </div>
            <!-- Inscripción -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="inscription" >Inscripción</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$event->inscription}}" id="inscription" name="inscription" placeholder="Inscripción al evento.">
                </div>
            </div>
            <!-- Contacto -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="contact" >Contacto</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" value="{{$event->contact}}" id="contact" name="contact" placeholder="Contacto personal del evento.">
                </div>
            </div>
            <!-- Lugar -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="place" >Lugar</label>
                <div class="col-sm-10  input-group">
                    <select id="place" name="place" class="form-control select2">
                        @foreach($places as $place)
                        <option value="{{$place->id}}" <?php if($place->id == $event->id_place){ echo("selected");} ?>>{{$place->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Tipo -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="type" >Tipo</label>
                <div class="col-sm-10  input-group">
                    <select id="type" name="type" class="form-control select2">
                    @foreach($types as $type)
                        <option value="{{$type->id}}" <?php if($type->id == $event->id_type){ echo("selected");} ?>>{{$type->name}}</option>
                        @endforeach
                    </select>
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
                   $('#content-edit').summernote({
                       height: 300,                 // set editor height
                       minHeight: null,             // set minimum height of editor
                       maxHeight: null,             // set maximum height of editor
                       focus: true                 // set focus to editable area after initializing summernote
                   });
               });
               
   </script>
   <script>
  
    
    $(document).ready(function() {
        Dropzone.prototype.defaultOptions.dictDefaultMessage = "Suelte aquí los archivos o haga clic";
        Dropzone.prototype.defaultOptions.addRemoveLinks = true;
        Dropzone.prototype.defaultOptions.dictRemoveFile = "Borrar";
        Dropzone.prototype.defaultOptions.acceptedFiles =  "image/*";
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


  
    
    