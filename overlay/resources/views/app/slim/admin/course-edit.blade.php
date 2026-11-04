@extends('layouts.admin')

@section('styles')
    <link href="{{siteUrl('adm_assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/alertify/css/alertify.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" />
    <link href="{{siteUrl('adm_assets/plugins/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" />
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
            <h4 class="page-title"> <i class="fa fa-gear"></i> Configurar curso: {{$course->title}}</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
@endsection



@section('content')
<form id="saveForm" action="{{siteUrl('/admin/forms/article')}}" enctype="multipart/form-data">
    <input class="form-control" type="hidden" id="article_id1" name="article_id" value="{{$article->id}}">
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">


                <hr>
                
                    <h4 class="mt-0 header-title">Información del Artículo</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="company-header-title" >Título</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$article->title}}" id="article-title" name="article-title" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="company-header-subtitle" >Bajada</label>
                        <div class="col-sm-10">
                            <textarea id="article-subtitle" name="article-subtitle"  class="form-control" rows="5">{{br2nl($article->page->subtitle)}}</textarea>
                        </div>
                    </div>
                    

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="article-date" >Fecha</label>
                        <div class="col-sm-10  input-group">
                            <input class="form-control" type="datetime-local" value="{{date('Y-m-d',strtotime($article->date)).'T'.date('H:i:s',strtotime($article->date))}}" id="article-date" name="article-date">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="article-page-header-desc" >
                            Previsualización<br>
                            <small>Medida sugerida: 500x310 px</small>
                        </label>
                        <div class="col-sm-10">
                        <input name="article-header-preview" id="article-header-preview" type="file" class="dropify" data-height="220" data-allowed-file-extensions="jpg png jpeg" data-default-file="{{siteUrl($article_page->preview)}}"/>
                        </div>
                    </div>


                <hr>
                    <h4 class="mt-0 header-title">Contenido</h4>
                    <small class="m-b-60">Modifique y ordene los componentes de contenido para personalizar su stand</small>

                    
                    <div class="form-group m-t-30">
                        <button id="btnAdd" type="button" data-toggle="modal" data-target="#modal-add-component" class="btn">
                            + Agregar componente
                        </button>
                    </div>
                            

                    <div class="form-group row m-t-30" style="overflow:auto;" id="components">

                        <ul id="sortable" class="col-12">
                        
                        </ul>
                    </div>

                    <div class="form-group pull-right">
                        <div>
                            <button id="btnSave" type="submit" class="btn btn-primary waves-effect waves-light">
                                Guardar cambios
                            </button>
                        </div>
                    </div>
                    
            </div>
        </div>
           
    </div>
</div>
</form>

                                        <div id="modal-edit-component" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div id="modal-edit-component-content" class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0">Editar componente</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body" id="modal-edit-component-body">
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar cambios</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="modal-add-component" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div id="modal-add-component-content" class="modal-content">
                                                    <form id="addComponent" action="{{siteUrl('/admin/forms/article/component/add')}}" method="POST">
                                                    <input class="form-control" type="hidden" id="article_id" name="article_id" value="{{$article->id}}">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">Agregar componente</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body" id="modal-add-component-body">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="type" >Tipo de componente</label>
                                                                <div class="col-sm-10">
                                                                    <select id="modal-add-component-type" name="type" class="form-control select2">
                                                                        <option value="5">Título con breve descripción</option>
                                                                        <option value="8">Párrafo</option>
                                                                        <option value="1">Imagen</option>
                                                                        <option value="2">Imagen con link</option>
                                                                        <option value="7">Galería</option>
                                                                        <option value="4">Video</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div id="modal-add-component-fields">
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

<script src="{{siteUrl('adm_assets/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
<script src="{{siteUrl('adm_assets/plugins/select2/js/i18n/es.js')}}" type="text/javascript"></script>

<script src="{{siteUrl('adm_assets/plugins/dropzone/dist.5.2/dropzone.js')}}" type="text/javascript"></script>


    <script>
         function getComponents(){
            $.ajax({
                    url: "{{siteUrl('/admin/forms/article/component/'.$article->pretty_url)}}",
                    type: "GET",
                    cache: false,
                    success: function (data) {
                        $("#components").html(data);
                        initComponents();
                    }
                });
        }

        function toogleEditModal(component_id){
            $("#modal-edit-component").modal('toggle');
            // console.log(component_id);
            $.ajax({
                url: "{{siteUrl('/admin/forms/article/component/edit/'.$article->pretty_url)}}",
                type: "GET",
                data: {id:component_id},
                cache: false,
                success: function (data) {
                    $("#modal-edit-component-content").html(data);
                    $("#editComponent").submit(function(e) {
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
                                $("#modal-edit-component").modal('toggle');
                                $.ajax({
                                    url: "{{siteUrl('/admin/forms/article/component/'.$article->pretty_url)}}",
                                    type: "GET",
                                    cache: false,
                                    success: function (data) {
                                        $("#components").html(data);
                                        initComponents();
                                    }
                                });
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
            $( "#sortable" ).sortable({
                change: function(event, ui) {
                                                // console.log("Change: ");
                                                // console.log(event);
                                                // console.log(ui);
                },
                update: function(event, ui) {
                    var arr = $("#sortable").sortable("toArray");
                    $.ajax({
                        type: 'post',
                        data: {events:arr},
                        url: "{{siteUrl('/admin/forms/article/events/sort/'.$article->pretty_url)}}",
                        success: function(data) {
                            fireSuccess('Reordenado exitoso');
                            }
                        });
                }
            });
            
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
                                url: "{{siteUrl('/admin/forms/article/component/'.$article->pretty_url)}}/"+$(this).data('component-id'),
                                success: function(data) {

                                    $.ajax({
                                        url: "{{siteUrl('/admin/forms/article/component/'.$article->pretty_url)}}",
                                        type: "GET",
                                        cache: false,
                                        success: function (data) {
                                            $("#components").html(data);
                                            initComponents();
                                            fireSuccess('Eliminado exitoso');
                                        }
                                    });
                                }
                            });
                            }
                    })
            });
        }


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
            

            $('#colorpicker-color-pattern').colorpicker({
                customClass: 'colorpicker-2x',
                align: 'left',
                sliders: {
                    saturation: {
                        maxLeft: 200,
                        maxTop: 200
                    },
                    hue: {
                        maxTop: 200
                    },
                    alpha: {
                        maxTop: 200
                    }
                }
            });
            $("#saveForm").submit(function(e) {
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
                        fireSuccess('Guardado exitoso');
                    }
                });
            });

            $( "#sortable" ).sortable({
                change: function(event, ui) {
                    // console.log("Change: ");
                    // console.log(event);
                    // console.log(ui);
                },
                update: function(event, ui) {
                    var arr = $( "#sortable" ).sortable("toArray");
                    // console.log(arr);
                    $.ajax({
                        type: 'post',
                        data: {events:arr},
                        // contentType: "application/x-www-form-urlencoded",
                        url: "{{siteUrl('/admin/forms/article/events/sort/'.$article->pretty_url)}}",
                        success: function(data) {
                            fireSuccess('Reordenado exitoso');
                        }
                    });
                }
            });

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
                                    url: "{{siteUrl('/admin/forms/article/component')}}/"+$(this).data('component-id'),
                                    success: function(data) {

                                        $.ajax({
                                            url: "{{siteUrl('/admin/forms/article/component')}}",
                                            type: "GET",
                                            cache: false,
                                            success: function (data) {
                                                $("#components").html(data);
                                                initComponents();
                                        fireSuccess('Eliminado exitoso');
                                            }
                                        });
                                    }
                                });
                            }
                    })
            });
            
            $("#addComponent").submit(function(e) {
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
                                $("#modal-add-component").modal('toggle');
                                $("#modal-add-component-title").val('');
                                $("#modal-add-component-value").val('');
                                $.ajax({
                                    url: "{{siteUrl('/admin/forms/article/component/'.$article->pretty_url)}}",
                                    type: "GET",
                                    cache: false,
                                    success: function (data) {
                                        $("#components").html(data);
                                        initComponents();
                                    }
                                });
                                fireSuccess('Creado con éxito');
                            }
                        });
                    });

            $(".select2").select2();
            
            $("#modal-add-component-type").on('select2:selecting', function(e) {
                
                $.ajax({
                        type: 'get',
                        data: {type:e.params.args.data.id},
                        url: "{{siteUrl('/admin/forms/stand/component/add')}}",
                        success: function(data) {
                            // console.log(data);
                            $("#modal-add-component-fields").html(data);

                            }
                        });
                // $("#modal-add-user-article-id").prop('disabled', (e.params.args.data.id == 1));
            });
            getComponents();

            //var drEvent = $('.dropify').dropify();

/*drEvent.on('dropify.beforeClear', function(event, element){
    return confirm("Do you really want to delete \"" + element.filename + "\" ?");
    this.val('')
});*/

        });
    </script>
@endsection