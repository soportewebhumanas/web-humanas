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
                <button type="submit">Agregar evento</button>
            </form> --}}
            <h4 class="page-title"> <i class="fa fa-address-book"></i> Agenda de eventos</h4>
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

                    <h4 class="mt-0 header-title">Listado de eventos</h4>

                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Fecha</th>
                                <th>Lugar</th>
                                <th>Tipo</th>
                                <th>Modalidad</th>
                                <th>Nivel evento</th>
                                <th>Activo</th>
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


                                        <div id="modal-edit-event" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div id="modal-edit-event-content" class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0">Editar evento</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body" id="modal-edit-event-body">
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar cambios</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="modal-add-event" class="modal fade" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div id="modal-add-event-content" class="modal-content">
                                                    <form id="addEvent" action="{{siteUrl('/admin/forms/events/add')}}" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">Agregar Evento</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body" id="modal-add-event-body">
                                                            <!-- Titulo -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="title" >Titulo</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" value="" id="title" name="title" placeholder="Título del evento">
                                                                </div>
                                                            </div>
                                                            <!-- Contenido -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="content" >Contenido</label>
                                                                <div class="col-sm-10  input-group">
                                                                    <!--<input class="form-control" type="text" value="" id="content" name="content" placeholder="Contenido">-->
                                                                    <textarea class="summernote" id="content-create" name="content"></textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Modalidad -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="modality" >Modalidad</label>
                                                                <div class="col-sm-10  input-group">
                                                                    <select id="modality" name="modality" class="form-control select2">
                                                                        <option value="1">Distancia</option>
                                                                        <option value="0">Presencial</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- Nivel -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="level" >Nivel</label>
                                                                <div class="col-sm-10  input-group">
                                                                    <select id="level" name="level" class="form-control select2">
                                                                        <option value="1">Posgrado</option>
                                                                        <option value="0">Extracurricular</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- Programa -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="program" >Programa</label>
                                                                <div class="col-sm-10">
                                                                    <input name="program" id="program" type="file"  data-allowed-file-extensions=".pdf"/>
                                                                </div>
                                                            </div>
                                                            <!-- Carga horario -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="workload" >Carga horaria</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" value="" id="workload" name="workload" placeholder="Carga horaria del evento. Ej: 15hs">
                                                                </div>
                                                            </div>
                                                            <!-- Tarifa -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="tariff" >Tarifa</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" value="" id="tariff" name="tariff" placeholder="Tarifa del evento. Ej: $500">
                                                                </div>
                                                            </div>
                                                            <!-- Inscripción -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="inscription" >Inscripción</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" value="" id="inscription" name="inscription" placeholder="Inscripción al evento.">
                                                                </div>
                                                            </div>
                                                            <!-- Contacto -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="contact" >Contacto</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="email" value="" id="contact" name="contact" placeholder="Contacto personal del evento.">
                                                                </div>
                                                            </div>
                                                            <!-- Lugar -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="place" >Lugar</label>
                                                                <div class="col-sm-10  input-group">
                                                                    <select id="place" name="place" class="form-control select2">
                                                                       @foreach($places as $place)
                                                                       <option value="{{$place->id}}">{{$place->name}}</option>
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
                                                                       <option value="{{$type->id}}">{{$type->name}}</option>
                                                                       @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- Imagen -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-labeventfor="event_image" >
                                                                    Imagen de portada<br>
                                                                    <small>Medida sugerida: 781x450 px</small>
                                                                </label>
                                                                <div class="col-sm-10">
                                                                <input name="event_image" id="event_image" type="file" class="dropify" data-height="300" data-allowed-file-extensions="jpg png jpeg" required/>
                                                                </div>
                                                            </div>
                                                            <!--<div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="detail" >Detalle</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" value="" id="detail" name="detail" placeholder="Detalle">
                                                                </div>
                                                            </div>-->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" for="date" >Fecha</label>
                                                                <div class="col-sm-10  input-group">
                                                                    <input class="form-control" type="datetime-local" value="" id="date" name="date">
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
<script src="{{siteUrl('adm_assets/plugins/dropzone/dist.5.2/dropzone.js')}}" type="text/javascript"></script>

<script>
     jQuery(document).ready(function(){
            $('#content-create').summernote({
                    height: 300,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: true                 // set focus to editable area after initializing summernote
            });

            //getPlaces();


            });
            
</script>



    <script>
    function getPlaces() {
        $.ajax({
            url: "{{siteUrl('/admin/forms/events/places')}}",
            type: "GET",
            data: {},
            cache: false,
            success: function (data) {
                console.log(data);
                // $("#modal-edit-event-content").html(data);
                // $("#editEvent").submit(function(e) {
                //     e.preventDefault();
                //     var fd = new FormData(this);
                //     $.ajax({
                //         url: $(this).attr('action'),
                //         type: "POST",
                //         data: fd,
                //         cache: false,
                //         async: true,
                //         scroll:true,
                //         contentType: false,
                //         processData: false,
                //         success: function (data) {
                //             $("#modal-edit-event").modal('toggle');
                //             $('#datatable').DataTable().ajax.reload(); 
                            
                //             fireSuccess('Guardado con éxito');
                //         }
                //     });
                // });
            }
        });
    }




    function toogleEditModal(event_id){
        $("#modal-edit-event").modal('toggle');

        $.ajax({
            url: "{{siteUrl('/admin/forms/events/edit')}}",
            type: "GET",
            data: {id:event_id},
            cache: false,
            success: function (data) {
                $("#modal-edit-event-content").html(data);
                $("#editEvent").submit(function(e) {
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
                            $("#modal-edit-event").modal('toggle');
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
    function deleteEvent(event_id){

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
                            url: "{{siteUrl('/admin/forms/events')}}/"+event_id,
                            success: function(data) {
                                $('#datatable').DataTable().ajax.reload(); 
                                fireSuccess('Eliminado exitoso');
                            }
                        });
                    }
                    
                })
    }
    Dropzone.prototype.defaultOptions.dictDefaultMessage = "Suelte aquí los archivos o haga click";
    Dropzone.prototype.defaultOptions.addRemoveLinks = true;
    Dropzone.prototype.defaultOptions.dictRemoveFile = "Borrar";
    Dropzone.prototype.defaultOptions.acceptedFiles =  "image/*";
    $(document).ready(function() {
        initDatatable();
    });
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
            if($(this).attr('data-id') == 'active'){//if switch changed it is news active option
                $.ajax({
                    type: 'post',
                    data: {id:$(this).data("event-id"),value:value},
                    url: "{{siteUrl('/admin/forms/events/active')}}",
                    success: function(data) {
                        fireSuccess('Cambio aplicado');
                    }
                });
            }else if($(this).attr('data-id') == 'level'){
                $.ajax({
                    type: 'post',
                    data: {id:$(this).data("event-id"),value:value},
                    url: "{{siteUrl('/admin/forms/events/level')}}",
                    success: function(data) {
                        fireSuccess('Cambio aplicado');
                        initDatatable();
                    }
                });
            }else { //if switch changed is modality
                $.ajax({
                    type: 'post',
                    data: {id:$(this).data("event-id"),value:value},
                    url: "{{siteUrl('/admin/forms/events/modality')}}",
                    success: function(data) {
                        fireSuccess('Cambio aplicado');
                        initDatatable();
                    }
                });
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
    }
    function initDatatable(){
            $('#datatable').DataTable().destroy()
            var table = $('#datatable').DataTable({
                "dom": "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>><'row'<'col-sm-12't>><'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",
                "processing": true,
                "serverSide": true,
                "ordering": false,
                buttons: [{
                    text: 'Agregar evento',
                    action: function ( e, dt, node, config ) {
                        $("#modal-add-event").modal('toggle');
                        getPlaces();
                    }
                }],
                "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                },
                "ajax":{
                    'url': "{{siteUrl('/admin/tables/events')}}",
                    complete: function() {
                        initComponents()
                    },
                }
            });
    }
    </script>
@endsection