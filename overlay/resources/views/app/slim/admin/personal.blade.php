@extends('layouts.admin')

@section('styles')
    <link href="{{siteUrl('adm_assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/alertify/css/alertify.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
@endsection

@section('top-content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            {{-- <form class="float-right">
                <button type="submit">Aggregar evento</button>
            </form> --}}
            <h4 class="page-title"> <i class="fa fa-user"></i> Representantes</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
@endsection



@section('content')

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                    <h4 class="mt-0 header-title">Listado de representantes</h4>

                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>WhatsApp</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
            </div>
        </div>
           
    </div>
</div>


                                        <div id="modal-edit-person" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div id="modal-edit-person-content" class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0">Editar representante</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body" id="modal-edit-person-body">
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar cambios</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="modal-add-person" class="modal fade" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div id="modal-add-person-content" class="modal-content">
                                                    <form id="addPerson" action="{{siteUrl('/admin/forms/person/add')}}" method="POST">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">Agregar Representante</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body" id="modal-add-person-body">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="name" >Nombre</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" value="" id="name" name="name" placeholder="Nombre de la persona">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="charge" >Cargo</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" value="" id="charge" name="charge" placeholder="Ej: Representante de ventas">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="whatsapp" >WhatsApp</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" value="" id="whatsapp" name="whatsapp" placeholder="5492392445566">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="picture" >Imagen</label>
                                                                <div class="col-sm-10">
                                                                    <input name="picture" id="picture" type="file" class="dropify" data-height="200" data-allowed-file-extensions="jpg png jpeg" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

@endsection


@section('js')

<script src="{{siteUrl('adm_assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
{{-- <script src="{{siteUrl('adm_assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}" type="text/javascript"></script> --}}
<script src="{{siteUrl('adm_assets/plugins/alertify/js/alertify.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<script src="{{siteUrl('adm_assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>

<script src="{{siteUrl('adm_assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{siteUrl('adm_assets/plugins/datatables/buttons.colVis.min.js')}}"></script>

<script src="{{siteUrl('adm_assets/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
<script src="{{siteUrl('adm_assets/plugins/select2/js/i18n/es.js')}}" type="text/javascript"></script>



    <script>
        function toogleEditModal(channel_id){
            $("#modal-edit-person").modal('toggle');

            $.ajax({
                url: "{{siteUrl('/admin/forms/person/edit')}}",
                type: "GET",
                data: {id:channel_id},
                cache: false,
                success: function (data) {
                    $("#modal-edit-person-content").html(data);
                    $("#editPerson").submit(function(e) {
                        e.preventDefault();
                        var fd = new FormData(this);
                        $.ajax({
                            url: $(this).attr('action'),
                            type: "POST",
                            data: fd,
                            cache: false,
                            async: true,
                            scroll:true,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                $("#modal-edit-person").modal('toggle');
                                $('#datatable').DataTable().ajax.reload(); 
                                
                                fireSuccess('Guardado con éxito');
                            }
                        });
                    });
                }
            });
        }

        function fireSuccess(title){
            Swal.mixin({
                                    toast: true,
                                    position: 'top',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: false,
                                    onOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                }).fire({
                                    icon: 'success',
                                    title: title
                                });
        }

        function initComponents(){
            
            $(".trash-component").click(function(){
                Swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: true,
                showCancelButton: true,
                timerProgressBar: false,
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
                }).fire({
                            icon: 'warning',
                            title: '¿Seguro que quiere eliminar?',
                            confirmButtonText: 'Si, eliminar',
                            cancelButtonText: 'Cancelar!'
                        }).then((result) => {
                            if(result.isConfirmed){
                                
                            $.ajax({
                                    type: 'delete',
                                    url: "{{siteUrl('/admin/forms/personal')}}/"+$(this).data('person-id'),
                                    success: function(data) {
                                        $('#datatable').DataTable().ajax.reload(); 
                                                    initComponents();
                                            fireSuccess('Eliminado exitoso');
                                    }
                                });
                            }
                    })
            });
            $(".switch-active").change(function() {
                var value = this.checked ? 1 : 0;
                $.ajax({
                        type: 'post',
                        data: {id:$(this).data("company-id"),value:value},
                        url: "{{siteUrl('/admin/forms/expositores/active')}}",
                        success: function(data) {
                            fireSuccess('Cambio aplicado');
                        }
                    });
            });
        }

        $(document).ready(function() {
            $('.dropify').dropify({
                messages: {
                    'default': 'Arrastre imagen o haga click para seleccionar',
                    'replace': 'Reemplazar la imagen',
                    'remove':  'Eliminar',
                    'error':   'Hubo un error, intentelo de nuevo'
                }
            });
            var table = $('#datatable').DataTable({
                "dom": "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>><'row'<'col-sm-12't>><'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",
                "processing": true,
                "serverSide": true,
                "ordering": false,
                buttons: [{
                    text: 'Agregar persona',
                    action: function ( e, dt, node, config ) {
                        $("#modal-add-person").modal('toggle');
                    }
                }],
                "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                },
                "ajax":{
                    'url': "{{siteUrl('/admin/tables/personal')}}",
                    complete: function() {
                        initComponents()
                    },
                }
            });

            // table.buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
            
            
            $("#addPerson").submit(function(e) {
                        e.preventDefault();
                        var fd = new FormData(this);
                        $.ajax({
                            url: $(this).attr('action'),
                            type: "POST",
                            data: fd,
                            cache: false,
                            async: true,
                            scroll:true,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                $("#modal-add-person").modal('toggle');
                                $("#name").val('');
                                $("#charge").val('');
                                $("#whatsapp").val('');
                                $("#picture").val('');
                                $('.dropify').dropify({
                                    messages: {
                                        'default': 'Arrastre imagen o haga click para seleccionar',
                                        'replace': 'Reemplazar la imagen',
                                        'remove':  'Eliminar',
                                        'error':   'Hubo un error, intentelo de nuevo'
                                    }
                                });
                                $('#datatable').DataTable().ajax.reload(); 
                                fireSuccess('Creado con éxito');
                            }
                        });
                    });

        });
    </script>
@endsection