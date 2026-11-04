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
            <h4 class="page-title"> <i class="mdi mdi-message-text"></i> Mensajes</h4>
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

                    <h4 class="mt-0 header-title">Listado de Mensajes</h4>

                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Estado</th>
                                <th>Nombre</th>
                                <th>Email</th>
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

                                        <div id="modal-message" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div id="modal-message-content" class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0">Detalle de mensaje</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body" id="modal-message-body">
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar cambios</button>
                                                    </div>
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
        function toogleModal(message_id){
            $("#modal-message").modal('toggle');

            $.ajax({
                url: "{{siteUrl('/admin/message/modal')}}",
                type: "GET",
                data: {id:message_id},
                cache: false,
                success: function (data) {
                    $("#modal-message-content").html(data);
                }
            });
        }

        $(document).ready(function() {
            var table = $('#datatable').DataTable({
                "dom": "<'row'<'col-sm-12 col-md-6'><'col-sm-12 col-md-6'f>><'row'<'col-sm-12't>><'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",
                "processing": true,
                "serverSide": true,
                "ordering": false,
                "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                },
                "ajax":{
                    'url': "{{siteUrl('/admin/tables/messages')}}"
                }
            });
        });
    </script>
@endsection