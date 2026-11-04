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
@endsection

@section('top-content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            {{-- <form class="float-right">
                <button type="submit">Agregar Noticia</button>
            </form> --}}
            <h4 class="page-title"> <i class="fa fa-gear"></i> Configurar Noticias</h4>
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

                    <h4 class="mt-0 header-title">Listado de Noticias</h4>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Fecha</th>
                                    <th>Activo</th>
                                    <th>Imagen</th>
                                    <th>Tiene cita</th>
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
</div>


                                        <div id="modal-edit-new" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div id="modal-edit-new-content" class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0">Editar noticia</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body" id="modal-edit-new-body">
                                                            
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar cambios</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="modal-add-new" class="modal fade" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div id="modal-add-new-content" class="modal-content">
                                                    <form id="addNew" action="{{siteUrl('/admin/forms/noticias/add')}}" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">Agregar Noticia</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body" id="modal-add-new-body">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="title" >Titulo</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" value="" id="title" name="title" placeholder="Título de la noticia">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="date" >Fecha</label>
                                                                <div class="col-sm-10  input-group">
                                                                    <input class="form-control" type="date" value="" id="date" name="date">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="active" >Activo</label>
                                                                <div class="col-sm-10  input-group">
                                                                    <select id="active" name="active" class="form-control select2">
                                                                        <option value="1">Si</option>
                                                                        <option value="0">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="value" >Contenido</label>
                                                                <div class="col-sm-10  input-group">
                                                                    <!--<input class="form-control" type="text" value="" id="content" name="content" placeholder="Contenido">-->
                                                                    <textarea class="summernote" id="content-create" name="content"></textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Imagen -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="news_image" >
                                                                    Imagen de portada<br>
                                                                    <small>Medida sugerida: 781x450 px</small>
                                                                </label>
                                                                <div class="col-sm-10">
                                                                <input name="news_image" id="news_image" type="file" class="dropify" data-height="300" data-allowed-file-extensions="jpg png jpeg" required/>
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
                                                                <label class="col-sm-2 col-form-label" for="has_quote" >¿Tiene cita?</label>
                                                                <div class="col-sm-10  input-group">
                                                                    <select id="has_quote" name="has_quote" class="form-control select2">
                                                                        <option value="1">Si</option>
                                                                        <option value="0">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="quote" >Cita</label>
                                                                <div class="col-sm-10  input-group">
                                                                    <!--<input class="form-control" type="text" value="" id="content" name="content" placeholder="Contenido">-->
                                                                    <textarea class="summernote" id="quote" name="quote"></textarea>
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
<script src="{{siteUrl('adm_assets/plugins/dropzone/dist.5.2/dropzone.js')}}" type="text/javascript"></script>




    <script>
        function toogleEditModal(new_id){
            $("#modal-edit-new").modal('toggle');

            $.ajax({
                url: "{{siteUrl('/admin/forms/noticias/edit')}}",
                type: "GET",
                data: {id:new_id},
                cache: false,
                success: function (data) {
                    $("#modal-edit-new-content").html(data);
                    $("#editNew").submit(function(e) {
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
                                $("#modal-edit-new").modal('toggle');
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

        function deleteNew(new_id){

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
                                    url: "{{siteUrl('/admin/forms/noticias')}}/"+new_id,
                                    success: function(data) {
                                        $('#datatable').DataTable().ajax.reload(); 
                                        fireSuccess('Eliminado exitoso');
                                    }
                                });
                            }
                        
                    })
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
                                    url: "{{siteUrl('/admin/forms/noticias')}}/"+$(this).data('news-id'),
                                    success: function(data) {
                                        
                                        fireSuccess('Eliminado exitoso');
                                    }
                                });
                            }
                        
                    })
            });
            $(".switch-active").change(function() {
                var value = this.checked ? 1 : 0;

                if($(this).attr('data-id') == 'active'){//if switch changed it is news active option
                    $.ajax({
                            type: 'post',
                            data: {id:$(this).data("news-id"),value:value},
                            url: "{{siteUrl('/admin/forms/noticias/active')}}",
                            success: function(data) {
                                fireSuccess('Cambio aplicado');
                                
                            }
                        });
                }else{//if switch changed is has_quote 
                    $.ajax({
                        type: 'post',
                        data: {id:$(this).data("news-id"),value:value},
                        url: "{{siteUrl('/admin/forms/noticias/has_quote')}}",
                        success: function(data) {
                            fireSuccess('Cambio aplicado');
                        }
                    });
                }
            });
            
        }


        Dropzone.prototype.defaultOptions.dictDefaultMessage = "Suelte aquí los archivos o haga clic";
        Dropzone.prototype.defaultOptions.addRemoveLinks = true;
        Dropzone.prototype.defaultOptions.dictRemoveFile = "Borrar";
        Dropzone.prototype.defaultOptions.acceptedFiles =  "image/*";

        $(document).ready(function() {
            
            var table = $('#datatable').DataTable({
                "dom": "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>><'row'<'col-sm-12't>><'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",
                "processing": true,
                "serverSide": true,
                "ordering": false,
                "responsive": true,
                buttons: [{
                    text: 'Agregar Noticia',
                    action: function ( e, dt, node, config ) {
                        $("#modal-add-new").modal('toggle');
                    }
                }],
                "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                },
                "ajax":{
                    'url': "{{siteUrl('/admin/tables/noticias')}}",
                    complete: function() {
                        initComponents()
                    },
                }
            });
            $('.dropify').dropify({
                messages: {
                    'default': 'Arrastre imagen o haga click para seleccionar',
                    'replace': 'Reemplazar la imagen',
                    'remove':  'Eliminar',
                    'error':   'Hubo un error, intentelo de nuevo'
                }
            });

            // table.buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
            
            
            // $(".select2").select2();
            // $("#modal-add-user-company-id").select2({
            //     placeholder: "Seleccione un expositor",
            //     language: "es",
            //     ajax: {
            //         url: "{{siteUrl('/admin/selects/company')}}",
            //         dataType: 'json'
            //     }
            // });
            // $("#modal-add-user-role").on('select2:selecting', function(e) {
            //     $("#modal-add-user-company-id").prop('disabled', (e.params.args.data.id == 1));
            // });
            
            

            // $("#addCompany").submit(function(e) {
            //             e.preventDefault();
            //             var fd = new FormData(this);
            //             $.ajax({
            //                 url: $(this).attr('action'),
            //                 type: "POST",
            //                 data: fd,
            //                 cache: false,
            //                 async: true,
            //                 scroll:true,
            //                 contentType: false,
            //                 processData: false,
            //                 success: function (data) {
            //                     $("#modal-add-company").modal('toggle');
            //                     $("#modal-add-company-title").val('');
            //                     $('#datatable').DataTable().ajax.reload(); 
            //                     fireSuccess('Creado con éxito');
            //                 }
            //             });
            //         });

            // $("#category").select2({
            //     placeholder: "Seleccione una categoría",
            //     language: "es",
            //     ajax: {
            //         url: "{{siteUrl('/admin/selects/categories')}}",
            //         dataType: 'json'
            //     }
            // });

        });
    </script>
@endsection