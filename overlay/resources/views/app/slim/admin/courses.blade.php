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
    <link href="{{siteUrl('adm_assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet" />
@endsection

@section('top-content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            {{-- <form class="float-right">
                <button type="submit">Agregar evento</button>
            </form> --}}
            <h4 class="page-title"> <i class="fa fa-address-book"></i>Listado de cursos</h4>
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

                    <h4 class="mt-0 header-title">Listado de cursos</h4>

                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>URL</th>
                                <th>Fecha</th>
                                <th>Activo</th>
                                <th>Sede</th>
                                <th>Categoria</th>
                                <th>Opciones</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
            </div>
        </div>
           
    </div>
</div>


<!-- modal create course -->
<div id="modal-add-course" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div id="modal-add-course-content" class="modal-content">
            <form id="addEvent" action="{{siteUrl('/admin/course/add')}}" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Agregar curso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body" id="modal-add-course-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="title" >Titulo</label>
                        <div class="col-sm-10">
                            <input class="form-control" onblur="setPrettyUrl();" type="text" value="" id="title" name="title" placeholder="Título del curso">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="value" >Dirección</label>
                        <div class="col-sm-10  input-group">
                            <span class=" bootstrap-touchspin-prefix input-group-prepend"><span class="input-group-text">www.humanas.unlpam.edu.ar/</span></span>
                            <input class="form-control" type="text" value="" id="pretty_url" name="pretty_url" placeholder="ejemplo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="active" >Publicado</label>
                        <div class="col-sm-10  input-group">
                            <select id="active" name="active" class="form-control select2">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="type" >Tipo</label>
                        <div class="col-sm-10  input-group">
                            <select id="type" name="type" class="form-control select2">
                                <option value="3">Todos</option>
                                <option value="2">Graduadxs</option>
                                <option value="1">Docente</option>
                                <option value="0">No docente</option>
                            </select>
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
<script src="{{siteUrl('adm_assets/plugins/summernote/summernote-bs4.min.js')}}" type="text/javascript"></script>

<script>
     jQuery(document).ready(function(){
                $('#content-create').summernote({
                    height: 300,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: true                 // set focus to editable area after initializing summernote
                });
            });
            function setPrettyUrl(){
                title = $('#title').val();
                title = title.toLowerCase();
                title = title.split(' ').join('-')
                $('#pretty_url').val(title);
                }
            
</script>
<script>
        
        function setPrettyUrl(){
                title = $('#title').val();
                title = title.toLowerCase();
                title = title.split(' ').join('-')
                $('#pretty_url').val(title);
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
                        //     $.ajax({
                        //     type: 'delete',
                        //     url: "{{siteUrl('/admin/forms/channel/component')}}/"+$(this).data('component-id'),
                        //     success: function(data) {
                        //                 $("#components").html(data);
                        //                 initComponents();
                        //         fireSuccess('Eliminado exitoso');
                        //     }
                        // });
                    })
            });
            $(".switch-active").change(function() {
                var value = this.checked ? 1 : 0;

                if($(this).attr('data-id') == 'active'){//if switch changed is article active

                    $.ajax({
                            type: 'post',
                            data: {id:$(this).data("article-id"),value:value},
                            url: "{{siteUrl('/admin/forms/articles/active')}}",
                            success: function(data) {
                                fireSuccess('Cambio aplicado');
                                
                            }
                        });

                }else if($(this).attr('data-id') == 'featured'){//if switch changed is article active

                $.ajax({
                        type: 'post',
                        data: {id:$(this).data("article-id"),value:value},
                        url: "{{siteUrl('/admin/forms/articles/featured')}}",
                        success: function(data) {
                            fireSuccess('Cambio aplicado');
                            
                        }
                    });

                }else{//if switch changed is article type (noticia=1 o contenido fijo=0)
                    $.ajax({
                        type: 'post',
                        data: {id:$(this).data("article-id"),value:value},
                        url: "{{siteUrl('/admin/forms/articles/type')}}",
                        success: function(data) {

                            fireSuccess('Cambio aplicado');
                            initDatatable()
                        }
                    });
                }

            });

            
        }

        $(document).ready(function() {
            initDatatable();

        });


        function initDatatable(){
            $('#datatable').DataTable().destroy()
            var table = $('#datatable').DataTable({
                "dom": "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>><'row'<'col-sm-12't>><'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",
                "processing": true,
                "serverSide": true,
                "ordering": false,
                buttons: [{
                    text: 'Agregar curso',
                    action: function ( e, dt, node, config ) {
                        $("#modal-add-course").modal('toggle');
                        //onclick (window.location.href="{{siteUrl('admin/articles/create')}}")
                    }
                }],
                "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                },
                "ajax":{
                    'url': "{{siteUrl('/admin/tables/courses')}}",
                    complete: function() {
                        initComponents()
                    },
                }
            });
        }

        

    </script>


    
@endsection