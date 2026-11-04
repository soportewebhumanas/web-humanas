<form id="editProduct" action="{{siteUrl('/admin/forms/producto/edit')}}" method="POST">
    <input type="hidden" name="product-id" value="{{$product->id}}"">
    <div class=" modal-header">
    <h5 class="modal-title mt-0">Editar representante</h5>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body" id="modal-edit-person-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="name" >Nombre</label>
            <div class="col-sm-10">
            <input class="form-control" type="text" value="{{$product->name}}" id="name" name="name" placeholder="Nombre de la persona">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="description" >Descripción</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$product->description}}" id="description" name="description" placeholder="Breve descripción">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="price" >Precio</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" step=".01" value="{{$product->price}}" id="price" name="price" placeholder="100">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="sale_price" >Precio oferta<br><small>Opcional</small></label>
            <div class="col-sm-10">
                <input class="form-control" type="number" step=".01" value="{{$product->sale_price}}" id="sale_price" name="sale_price" placeholder="90">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="mercadopago" >Link a MercadoPago<br>
                <small><a href="https://www.mercadopago.com.ar/developers/es/guides/online-payments/payment-link/create-button/" target="_blank">Como crear link de pago</a></small></label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$product->mercadopago}}" id="mercadopago" name="mercadopago" placeholder="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=150205031-e0769374-3e3b-4265-a8ff-04a6eebbd411">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="picture" >Imagen</label>
            <div class="col-sm-10">
                <input name="picture" id="picture" type="file" class="dropify" data-height="200" data-allowed-file-extensions="jpg png jpeg"  data-default-file="{{siteUrl($product->picture)}}"/>
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