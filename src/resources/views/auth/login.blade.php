<title>{{'Facultad Cs. Humanas'}}</title>
<link rel="shortcut icon" href="https://www.humanas.unlpam.edu.ar/slim/images/humanas.png" type="image/x-icon">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}
</style>

<x-guest-layout>
        <div class="relative px-4 mx-auto bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                    {{-- <x-jet.authentication-card-logo /> --}}
                    <div class="divide-y divide-gray-900">
                        <div class="text-center mb-4 ">
                            <p class="text-green-900 text-3xl font-semibold" style="display: flex !important; align-items: center !important;">
                                <img src="https://www.humanas.unlpam.edu.ar/slim/images/navbar/pin.png" style="max-width: 50px !important;" class="img-fluid" alt="Facultad de Ciencias Humanas - UNLPam">    
                                Acceso autorizado
                            </p>
                            <p class="text-green-800 font-medium" style="display: flex; align-items: center; justify-content: center;">
                                <span class="material-symbols-outlined">home</span>
                                <a href="{{route('index')}}">Facultad de Ciencias Humanas</a>
                            </p>
                        </div>
                        
                    </div>

            
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    
                    <x-jet.validation-errors class="mb-4" />
                    @csrf

                    <div>
                        <x-jet.label for="email" value="{{ __('Email') }}" />
                        <x-jet.input id="email" class="block mt-4 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet.label for="password" value="{{ __('Password') }}" />
                        <x-jet.input id="password" class=" block mt-4 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet.checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-jet.button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet.button>
                    </div>
                </form>
            </div>
        </div>
</x-guest-layout>

