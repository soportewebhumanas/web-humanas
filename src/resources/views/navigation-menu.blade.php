<style> 
.bg-indigo-200{
    background-color: #1b365d !important;
    color: #FFF !important;
}
.bg-indigo-200 h2{
    color: #FFF !important;
    display: flex; 
    justify-content: left; 
    text-transform: uppercase; 
    font-size: 1rem;
}
.bg-indigo-700{
    background-color: #1b365d !important;    
}
.bg-indigo-700:hover{
    background-color: #1B4A5C !important;    
}
.button-primary:hover{
    background-color: #1B4A5C !important;    
}
.button-primary:hover, .button.button-primary:active, .button.button-primary:focus {
  --tw-bg-opacity: 1 !important;
  background-color: #1B4A5C !important;
}
header div{
    padding: 10px !important;
}
</style>
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                
                <!-- Logo -->

                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img class="block h-9 w-auto" src="{{asset('slim/images/navbar/pin.png') }}" />
                    </a>
                    <!--<a href="{{ route('dashboard') }}">
                        <x-jet.application-mark class="block h-9 w-auto" />
                        {{-- <img class="block h-9 w-auto" src="{{asset('favicon.ico') }}" /> --}}
                    </a>-->                    
                </div>


                <!-- Navigation Links -->
                <!--<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet.nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">

                        Panel de Administración

                    </x-jet.nav-link>
                </div>-->

                @if (Auth::user()->can('view-any', App\Models\Evento::class) || 
                Auth::user()->can('view-any', App\Models\TiposEvento::class) ||
                Auth::user()->can('view-any', App\Models\Modalidades::class)
                )
                    <x-nav-dropdown title="Eventos" align="right" width="48">
                        @can('view-any', App\Models\Evento::class)
                            <x-dropdown-link href="{{ route('admin.eventos.index') }}">Eventos</x-dropdown-link>
                        @endcan
                        @can('view-any', App\Models\TiposEvento::class)
                            <x-dropdown-link href="{{ route('admin.tiposEvento.index') }}">Tipos de evento</x-dropdown-link>
                        @endcan
                        @can('view-any', App\Models\Modalidades::class)
                            <x-dropdown-link href="{{ route('admin.modalidades.index') }}">Modalidades</x-dropdown-link>
                        @endcan
                    </x-nav-dropdown>
                @endif
                @can('view-any', App\Models\Publicacion::class)
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet.nav-link href="{{ route('admin.publicaciones.index') }}" :active="request()->routeIs('publicaciones.*')">
                        Publicaciones
                    </x-jet.nav-link>
                </div>
                @endcan
                @can('view-any', App\Models\Noticia::class)
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet.nav-link href="{{ route('admin.noticias.index') }}" :active="request()->routeIs('noticias.*')">
                        Noticias
                    </x-jet.nav-link>
                </div>
                @endcan
                @can('view-any', App\Models\ProgramasInstitucionales::class)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet.nav-link href="{{ route('admin.programas.index') }}" :active="request()->routeIs('programas.*')">
                            Programas
                        </x-jet.nav-link>
                    </div>
                @endcan

                @can('view-any', App\Models\Pasantia::class)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet.nav-link href="{{ route('admin.pasantias.index') }}" :active="request()->routeIs('pasantias.*')">
                            Pasantias
                        </x-jet.nav-link>
                    </div>
                @endcan

                @if (Auth::user()->can('view-any', Spatie\Permission\Models\Role::class) || 
                    Auth::user()->can('view-any', Spatie\Permission\Models\Permission::class) ||
                    Auth::user()->can('view-any', Spatie\Permission\Models\User::class))
                    <x-nav-dropdown title="Gestión de accesos" align="right" width="48">
                        @can('view-any', Spatie\Permission\Models\User::class)
                        <x-dropdown-link href="{{ route('admin.users.index') }}">Usuarios</x-dropdown-link>
                        @endcan
                        @can('view-any', Spatie\Permission\Models\Role::class)
                        <x-dropdown-link href="{{ route('admin.roles.index') }}">Perfiles</x-dropdown-link>
                       @endcan

                      @can('view-any', Spatie\Permission\Models\Permission::class)
                      <x-dropdown-link href="{{ route('admin.permissions.index') }}">Permisos</x-dropdown-link>
                     @endcan  
                </x-nav-dropdown>
                @endif

                @can('view-any', App\Models\LlamadoSeleccion::class)
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet.nav-link href="{{ route('admin.llamadosSeleccion.index') }}">Llamados a selección
                    </x-jet.nav-link>
                </div>
                @endcan
                
                @can('view-any', App\Models\LlamadoSeleccion::class)
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet.nav-link href="{{ route('admin.docentes.index') }}">Planta docente
                    </x-jet.nav-link>
                </div>
                @endcan                 
                        
                <!--@if (Auth::user()->can('view-any',App\Models\Parametro::class))
                    <x-nav-dropdown title="Configuración" align="right" width="48">
                        @can('view-any', App\Models\Parametro::class)
                            <x-dropdown-link href="{{ route('admin.parametros.index') }}"> Parámetros
                            </x-dropdown-link>
                        @endcan                          
                    </x-nav-dropdown>
                @endif-->
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet.dropdown align="right" width="48">
                        <x-slot name="trigger">
                            
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet.dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet.dropdown-link>

                            

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf

                                <x-jet.dropdown-link href="{{ route('admin.logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet.dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet.dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet.responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet.responsive-nav-link>
    
                @can('view-any', App\Models\Evento::class)
                <x-jet.responsive-nav-link href="{{ route('admin.eventos.index') }}">
                Eventos
                </x-jet.responsive-nav-link>
                @endcan
                
                <!-- noticias -->
                @can('view-any', App\Models\Noticia::class)
                <x-jet.responsive-nav-link href="{{ route('admin.noticias.index') }}">
                Noticias
                </x-jet.responsive-nav-link>
                @endcan

                @if (Auth::user()->can('view-any', Spatie\Permission\Models\Role::class) || 
                    Auth::user()->can('view-any', Spatie\Permission\Models\Permission::class))
                    
                    @can('view-any', Spatie\Permission\Models\User::class)
                    <x-jet.responsive-nav-link href="{{ route('admin.users.index') }}">Usuarios</x-jet.responsive-nav-link>
                    @endcan

                    @can('view-any', Spatie\Permission\Models\Role::class)
                    <x-jet.responsive-nav-link href="{{ route('admin.roles.index') }}">Roles</x-jet.responsive-nav-link>
                    @endcan

                    @can('view-any', Spatie\Permission\Models\Permission::class)
                    <x-jet.responsive-nav-link href="{{ route('admin.permissions.index') }}">Permisos</x-jet.responsive-nav-link>
                    @endcan
                    
                @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet.responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet.responsive-nav-link>

                

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet.responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet.responsive-nav-link>
                </form>

                <!-- Team Management -->
                
            </div>
        </div>
    </div>
</nav>