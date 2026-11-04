<form id="editCompany" action="{{siteUrl('/admin/forms/expositores/edit')}}" method="POST">
<input type="hidden" value="{{$company->id}}" name="company-id">
    <div class="modal-header">
        <h5 class="modal-title mt-0">Editar Expositor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body" id="modal-add-company-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="name" >Nombre</label>
            <div class="col-sm-10">
            <input class="form-control" type="text" value="{{$company->name}}" id="name" name="name" placeholder="Título del expositor">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="value" >Dirección</label>
            <div class="col-sm-10  input-group">
                <span class=" bootstrap-touchspin-prefix input-group-prepend"><span class="input-group-text">expo.ruralsalliquelo.com/</span></span>
                <input class="form-control" type="text" value="{{$company->pretty_url}}" id="pretty_url" name="pretty_url" placeholder="ejemplo">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="whatsapp" >WhatsApp</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$company->whatsapp}}" id="whatsapp" name="whatsapp" placeholder="5492392445566">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="category" >Categoría</label>
            <div class="col-sm-10  input-group">
                <select id="category" name="category" class="form-control select2">
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="type" >Tipo de expositor</label>
            <div class="col-sm-10  input-group">
                <select id="type" name="type" class="form-control select2">
                    <option value="1" @if($company->type==1) selected @endif>Común</option>
                    <option value="2" @if($company->type==2) selected @endif>Destacado en categoría</option>
                    <option value="3" @if($company->type==3) selected @endif>Destacado de la Expo</option>
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
    </div>
</form>
<script>
    $(".select2").select2();

    var userSelect = $("#category").select2({
                placeholder: "Seleccione una categoría",
                language: "es",
                ajax: {
                    url: "{{siteUrl('/admin/selects/categories')}}",
                    dataType: 'json'
                }
            });
    var text = '';
    @if($company->category)
    var option = new Option('{{$company->category->name}}', {{$company->category_id}}, true, true);
    userSelect.append(option).trigger('change');
    userSelect.trigger({type: 'select2:select'});
    @endif
</script>
