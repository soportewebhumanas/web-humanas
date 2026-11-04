<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Sitio Facultad - Admin</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/revert-ckeditor.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

        <style>
            /* CHECKBOX TOGGLE SWITCH */
            /* @apply rules for documentation, these do not work as inline style */
            .toggle-checkbox:checked {
              @apply: right-0 border-green-400;
              right: 0;
              border-color: #68D391;
            }
            .toggle-checkbox:checked + .toggle-label {
              @apply: bg-green-400;
              background-color: #68D391;
            }
        </style>

        <!-- Icons -->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link  rel="icon"   href="{{ asset('slim/images/humanas.png') }}" type="image/png" />
        

        <!-- Scripts -->
    </head>

    <body class="font-sans antialiased  bg-gradient-to-l from-indigo-500 to-indigo-800">
        
        <div class="min-h-screen bg-gray-100">
            
            @include('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-indigo-200 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 text-center sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        

        @stack('scripts')

        <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

        @if (session()->has('success')) 
        <script>
            const notyf = new Notyf({dismissible: true})
            notyf.success('{{ session('success') }}')        
        </script>
        @endif
        @if(session()->has('message'))
            <script>
                const notyf = new Notyf({dismissible: true})
                notyf.success('{{ session('message') }}')
            </script>
        @endif

        <script>
            /* Simple function to retrieve data url from file */
            function fileToDataUrl(event, callback) {
                if (! event.target.files.length) return
                        
                let file = event.target.files[0], 
                    reader = new FileReader()
                
                reader.readAsDataURL(file)
                reader.onload = e => callback(e.target.result)
            }
        </script>
    </body>

</html>
