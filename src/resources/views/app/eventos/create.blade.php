<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.eventos.create_title')
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full py-2" id="button">
                <input type="number" id="modalType" hidden/>
                <button id="btnModalidad" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mx-auto transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm" onclick="modalHandler(true,1)"> 
                    <p> <i class="mr-1 icon ion-md-add"></i>Modalidad</p>
                </button>
                <button id="btnTipoEvento" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mx-auto transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm" onclick="modalHandler(true,2)"> 
                    <p> <i class="mr-1 icon ion-md-add"></i>Tipo de evento</p>
                </button>
            </div>
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('admin.eventos.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>

                <x-form
                    method="POST"
                    action="{{ route('admin.eventos.store') }}"
                    class="mt-4"
                    hasFiles
                >
                    @include('app.eventos.form-inputs')

                    <div class="mt-10">
                        <a href="{{ route('admin.eventos.index') }}" class="button">
                            <i
                                class="mr-1 icon ion-md-return-left text-primary"
                            ></i>
                            @lang('crud.common.back')
                        </a>

                        <button
                            type="submit"
                            class="button button-primary float-right"
                        >
                            <i class="mr-1 icon ion-md-save"></i>
                            @lang('crud.common.create')
                        </button>
                    </div>
                </x-form>
            </x-partials.card>
        </div>
    </div>
        <!-- Code block starts -->
        <dh-component>
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        <div class="py-12 bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0" id="modal" style="opacity:1; display:none">
            <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                    <h1 class="text-gray-800 text-center font-lg font-bold tracking-normal leading-tight mb-4" id="titleModal">Nuevo tipo de evento</h1>
                        <div class="flex flex-wrap">
                            <x-inputs.group class="w-full">
                                <x-inputs.text
                                    name="nombre"
                                    label="Nombre"
                                    value=""
                                    maxlength="255"
                                    required
                                ></x-inputs.text>
                            </x-inputs.group>
                        </div>
                        <small id="errorMsg" style="color:red"></small>
                        <div class="flex items-center justify-center w-full">
                            <button id="envio" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"> <i class="mr-1 icon ion-md-save"></i> Crear</button>
                            <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler()">Cancelar</button>
                        </div>
                </div>
            </div>
        </div>
        <script>
            let modal = document.getElementById("modal");
            function modalHandler(val, buttonPressed) {
                document.getElementById("modalType").value = buttonPressed;         
                if (val) {
                    fadeIn(modal);
                } else {
                    fadeOut(modal);
                }
            }
            function fadeIn(el, display) {
                if(document.getElementById("modalType").value == 1){
                    $("#titleModal").html("Nueva modalidad");
                }else{
                    $("#titleModal").html("Nuevo tipo de evento");
                }     
                el.style.opacity = 0;
                el.style.display = display || "flex";
                (function fade() {
                    let val = parseFloat(el.style.opacity);
                    if (!((val += 0.2) > 1)) {
                        el.style.opacity = val;
                        requestAnimationFrame(fade);
                    }
                })();
            }
            function fadeOut(el) {
                $("#nombre").val("");
                $("#errorMsg").html('');
                el.style.opacity = 1;
                (function fade() {
                    if ((el.style.opacity -= 0.1) < 0) {
                        el.style.display = "none";
                    } else {
                        requestAnimationFrame(fade);
                    }
                })();
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
            $('#envio').click(function(){
                $("#errorMsg").html('');
                var nombre = $("#nombre").val();
                if($("#modalType").val() == 1){
                    $.ajax({
                        url:'{{route("admin.modalidadStorePopup")}}',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data:{'nombre':nombre},
                        type:'post',
                        success: function (response) {
                            fadeOut(modal)
                            $("#modalidad_id").append($('<option>', { 
                                value: response,
                                text : nombre,
                                selected: true,
                            }));
                        },
                        statusCode: {
                            404: function() {
                                $("#errorMsg").html('404- No se encuentra el servicio.');
                            },
                            422: function() {
                                $("#errorMsg").html('Error: No se puede crear la modalidad "'+nombre+'", ya existe una con el mismo nombre.');
                            }
                        }
                    });
                
                }else{  //$("#modalType").val() == 2)       (Tipo de evento)
                    $.ajax({
                        url:'{{route("admin.tipoEventoStorePopup")}}',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data:{'nombre':nombre},
                        type:'post',
                        success: function (response) {
                            fadeOut(modal)
                            $("#tipo_id").append($('<option>', { 
                                value: response,
                                text : nombre,
                                selected: true,
                            }));
                        },
                        statusCode: {
                            404: function() {
                                $("#errorMsg").html('404- No se encuentra el servicio.');
                            },
                            422: function() {
                                $("#errorMsg").html('Error: No se puede crear el tipo de evento "'+nombre+'", ya existe uno con el mismo nombre.');
                            }
                        }
                    });
                }
            });
        });
        </script>
    </dh-component>
</x-app-layout>