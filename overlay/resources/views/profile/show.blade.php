<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Perfil
        </h2>
    </x-slot>
     <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <!--Cambio de datos Personales-->
        <x-partials.card>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="text-align: center">
                Editar datos personales
            </h2>
        </x-partials.card>

        <hr/>
        <x-partials.card>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Nombre y correo electrónico
                </h2>
            <x-form
                method="PUT"
                action="{{ route('admin.updateDatosPersonales') }}"
                class="mt-4"
                >
               
                <x-inputs.hidden
                    name="id"
                    value="{{ $user['id']}}" 
                    maxlength="255"
                    hidden="true"
                    required autofocus autocomplete="name"
                ></x-inputs.hidden>

               
                <x-inputs.group class="w-full lg:w-6/12">
                    <x-inputs.text
                        name="name"
                        label="Nombre"
                        value="{{ $user['name']}}" 
                        maxlength="255"
                        required autofocus autocomplete="name"
                    ></x-inputs.text>
                </x-inputs.group>

                <x-inputs.group class="w-full lg:w-6/12">
                    <x-inputs.email
                        name="email" 
                        label="Correo electrónico"
                        value="{{ $user['email']}}" 
                        required
                    ></x-inputs.email>
                </x-inputs.group>


                <div class="mt-10">
                    <button
                        type="submit"
                        class="button button-primary float-right"
                    >
                        <i class="mr-1 icon ion-md-save"></i>
                        Actualizar datos
                    </button>
                </div>
            </x-form>
        </x-partials.card>

        <hr/>
        <!--Cambio de contraseña-->
        <x-partials.card>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editar contraseña
            </h2>
            <x-form
                method="PUT"
                action="{{ route('admin.updatePassword') }}"
                class="mt-4"
                >
               
                <x-inputs.hidden
                    name="id"
                    value="{{ $user['id']}}" 
                    maxlength="255"
                    hidden="true"
                    required autofocus autocomplete="name"
                ></x-inputs.hidden>

                <x-inputs.group class="w-full lg:w-6/12">
                    <x-inputs.text
                        name="password" 
                        label="Contraseña"
                        value="" 
                        required
                    ></x-inputs.text>
                </x-inputs.group>
                <input
                    name="redirect"
                    value="profile.show"
                    style="display:none"
                ></input>
                    
                    <button
                        type="submit"
                        class="button button-primary float-right"
                    >
                        <i class="mr-1 icon ion-md-save"></i>
                        Actualizar contraseña
                    </button>
                </div>
            </x-form>
        </x-partials.card>
        </div>
    </div>
</x-app-layout>
