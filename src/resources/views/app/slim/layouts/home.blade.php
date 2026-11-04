<!doctype html>
<html class="no-js" lang="zxx" >
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Facultad de Ciencias Humanas - Universidad Nacional de La Pampa">
	<meta name="keywords" content="college, education, institute, responsive, school, teacher, template, university">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Facultad de Ciencias Humanas</title> 
	<!--<link rel="shortcut icon" href="{{asset('slim/images/humanas.png')}}" type="image/x-icon">-->
    <link rel="shortcut icon" href="{{asset('pin.ico')}}" type="image/x-icon">
    
    <!-- Open Graph data -->
    <meta property="og:title" content="Facultad de Ciencias Humanas - Universidad Nacional de La Pampa" />
    <meta property="og:type" content="web" />
    <meta property="og:url" content=" http://www.humanas.unlpam.edu.ar.com" />
    <meta property="og:image" content="https://www.humanas.unlpam.edu.ar/slim/images/index/posgrado-carousel-0001.png" />
    <meta property="og:description" content="Página web de la Facultad de Ciencias Humanas de la Universidad Nacional de La Pampa" />
    <meta property="og:site_name" content="Facultad de Ciencias Humanas UNLPam">

	<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('slim/css/assets/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('slim/css/assets/font-awesome.min.css')}}">
	

    <!-- Incluir DataTables CSS con integración Bootstrap 4 -->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">     

	<!-- Full calendar	 -->
	{{-- <link href="{{asset('slim/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet"> --}}
	<link href="{{asset('slim/fullcalendar/prueba/main.css')}}" rel="stylesheet">  
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


	<!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('slim/css/cards.css')}}">

	<!-- CSS Personalizado Index-->
    <link rel="stylesheet" href="{{asset('slim/css/estilos-index-personalizados.css')}}">    

    <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-8018264-2');
    </script>

    @yield('styles')
	<link rel="stylesheet" href="{{asset('slim/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('slim/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('slim/css/style2.css')}}">
    <style>
        /*Chatbot*/
        /*#chatbase-bubble-button{
            background-color: #1b365d !important;
        }*/
        /*Chatbot*/
    </style>
</head>  
<body>

        <div class="boxed">
            <div class="preloader">
                <span class="loader">
                    <span class="loader-inner"></span>
                </span>
            </div>

            @include('app.slim.layouts.components.header')
            
            @yield('content')
            
            @include('app.slim.layouts.components.footer')

            <a id="scroll-top"></a>
        </div>

        <!-- Chatbot -->
        <!--<script>
            (function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="ZjIqeXdjtJ1GJ4fnXjN2f";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
        </script>-->
        <!-- Chatbot -->

  <!-- ============================
    JavaScript Files
    ============================= -->
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('slim/js/assets/bootstrap.min.js')}}"></script>

    
    <!-- Incluir DataTables JS y el adaptador para Bootstrap 4 -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <!-- Inicializar DataTables -->
    <script>
        $(document).ready(function() {
            $('#miTabla').DataTable({
                "order": [[1, "desc"]], // Ordenar la segunda columna (índice 1) en orden descendente
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                }
            });
        });
    </script>



	<!--<script src="{{asset('slim/template_admin/assets/plugins/moment/moment-with-locales.js')}}"></script>-->
	
	<!-- Full calendar -->
	<!--<script src="{{asset('slim/template_admin/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>-->
	<!--<script src="{{asset('slim/template_admin/assets/plugins/moment/moment-with-locales.js')}}"></script>-->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{asset('slim/fullcalendar/prueba/main.js')}}"></script>
	<script src="{{asset('slim/fullcalendar/prueba/locales-all.js')}}"></script>
	<!-- <script src="{{asset('slim/fullcalendar/js/fullcalendar.min.js')}}"></script>
	<script src="{{asset('slim/fullcalendar/js/locales-all.js')}}"></script>
	<script src="{{asset('slim/fullcalendar/js/locales/es.js')}}"></script>
	<script src="{{asset('slim/fullcalendar/calendar-init.js')}}"></script> -->
    <!-- Main Menu -->
	

	<!-- Pagination js -->
	<script type="text/javascript" src="{{asset('slim/js/assets/pagination.js')}}"></script>
    <script type="text/javascript" src="{{asset('slim/js/assets/custom.js')}}"></script>




</body>
</html>
