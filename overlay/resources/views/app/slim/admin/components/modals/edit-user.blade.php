<form id="editUser" action="{{siteUrl('/admin/forms/users/edit')}}" method="POST">
    <input type="hidden" name="modal-edit-user-id" value="{{$user_edit->id}}"">
    <div class=" modal-header">
    <h5 class="modal-title mt-0">Editar usuario</h5>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body" id="modal-edit-user-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="modal-edit-user-name">Nombre</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$user_edit->name}}" id="modal-edit-user-name" name="modal-edit-user-name" placeholder="Nombre del usuario" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="modal-edit-user-email">Email</label>
            <div class="col-sm-10">
                <input class="form-control" type="email" value="{{$user_edit->email}}" id="modal-edit-user-email" name="modal-edit-user-email" placeholder="nombre@ejemplo.com" parsley-type="email" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="modal-edit-user-role">Contraseña</label>
            <div class="col-sm-10">
                <input class="form-control" type="password" value="" id="modal-edit-user-pass" name="modal-edit-user-pass" placeholder="Ingrese contraseña nueva si desea cambiarla">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="modal-edit-user-role">Repetir contraseña</label>
            <div class="col-sm-10">
                <input class="form-control" type="password" value="" id="modal-edit-user-repeat-pass" placeholder="Repetir contraseña" data-parsley-equalto="#modal-edit-user-pass">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="modal-edit-user-role">Reenviar mail</label>
            <div class="col-sm-10">
                <input id="resend-switch" type="checkbox" class="iswitch iswitch-primary pull-left" name="resend-data">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="modal-edit-user-role">Rol</label>
            <div class="col-sm-5">
                <select id="modal-edit-user-role" name="modal-edit-user-role" class="form-control select2" required>
                    <option value="2" @if($user_edit->role==2) selected @endif>Expositor</option>
                    <option value="1" @if($user_edit->role==1) selected @endif>Administrador ARS</option>
                </select>
            </div>
            <div class="col-sm-5">
                <select id="modal-edit-user-company-id" name="modal-edit-user-company-id" class="form-control select2">
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar cambios</button>
    </div>
</form>
<script>
    $(".select2").select2();
    var userSelect = $("#modal-edit-user-company-id").select2({
        placeholder: "Seleccione un expositor",
        language: "es",
        ajax: {
            url: "{{siteUrl('/admin/selects/company')}}",
            dataType: 'json'
        }
    });
    @if($user_edit->role!=1)
    var option = new Option('{{$user_edit->company->name}}', {{$user_edit->company_id}}, true, true);
    userSelect.append(option).trigger('change');
    userSelect.trigger({type: 'select2:select'});
    @else
    userSelect.prop('disabled',true);
    @endif
    $("#modal-edit-user-role").on('select2:selecting', function (e) {
        $("#modal-edit-user-company-id").prop('disabled', (e.params.args.data.id == 1));
    });
    $('form#editUser').on("submit", function(e) {
        console.log("pasó por acá");
        return $(this).parsley().validate();
    });
    $('#resend-switch').change(function() {
        $("#modal-edit-user-pass").prop('required',this.checked);
        $("#modal-edit-user-repeat-pass").prop('required',this.checked);
        // $("#editUser").parsley();
    });
</script>