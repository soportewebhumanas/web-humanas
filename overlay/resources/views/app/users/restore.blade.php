<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Restablecer contraseña
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-12">
            <x-partials.card>
                <p style="font-variant: small-caps; text-align: center" class="text-2xl mb-1">¿Seguro desea restablecer la contraseña?</p>
                <p style="font-variant: small-caps; text-align: center" class="text-2x1 mb-4">
                    Usuario:<i> {{$user->name}}</i></p>
                <x-slot name="title">
                    <a href="{{ route('admin.users.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>

                <x-form
                    method="PUT"
                    action="{{ route('admin.updatePassword') }}"
                    class="mt-4"
                >
                    @php $editing = isset($user) @endphp
                    <div class="flex flex-wrap">
                             <input
                                name="id"
                                value="{{$user->id}}"
                                style="display:none"
                            ></input>
                            <input
                                name="name"
                                value="{{$user->name}}"
                                style="display:none"
                            ></input>
                            <input
                                name="rol"
                                value="{{$user->rol}}"
                                style="display:none"
                            ></input>
                            <input
                                name="redirect"
                                value="admin.users.index"
                                style="display:none"
                            ></input>

                        <x-inputs.group class="w-full lg:w-6/12">
                            <x-inputs.email
                                name="email" 
                                label="Correo electrónico"
                                value="{{ old('email', ($editing ? $user->email : '')) }}"
                                readonly
                                required
                            ></x-inputs.email>
                        </x-inputs.group>

                        <x-inputs.group class="w-full lg:w-6/12">
                            <x-inputs.email
                                name="password" 
                                label="Nueva contraseña"
                                value="humanasAdmin"
                                readonly
                                required
                            ></x-inputs.email>
                        </x-inputs.group>
                    
                    </div>
                    <div class="mt-10">
                        <button
                            type="submit"
                            class="w-full px-6 py-3 mt-3 text-md text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-blue-500 hover:bg-blue-600 hover:shadow-lg focus:outline-none"
                        >
                            <i class="mr-1 icon ion-md-save"></i>
                            Restablecer contraseña
                        </button>
                    </div>
                </x-form>
            </x-partials.card>
        </div>
    </div>

</x-app-layout>