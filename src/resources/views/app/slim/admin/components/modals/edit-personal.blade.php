<form id="editPerson" action="{{siteUrl('/admin/forms/personal/edit')}}" method="POST">
    <input type="hidden" name="person-id" value="{{$person->id}}"">
    <div class=" modal-header">
    <h5 class="modal-title mt-0">Editar representante</h5>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body" id="modal-edit-person-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="name" >Nombre</label>
            <div class="col-sm-10">
            <input class="form-control" type="text" value="{{$person->name}}" id="name" name="name" placeholder="Nombre de la persona">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="charge" >Cargo</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$person->charge}}" id="charge" name="charge" placeholder="Ej: Representante de ventas">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="whatsapp" >WhatsApp</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$person->whatsapp}}" id="whatsapp" name="whatsapp" placeholder="5492392445566">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="picture" >Imagen</label>
            <div class="col-sm-10">
                <input name="picture" id="picture" type="file" class="dropify" data-height="200" data-allowed-file-extensions="jpg png jpeg"  data-default-file="{{siteUrl($person->picture)}}"/>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar cambios</button>
    </div>
</form>
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