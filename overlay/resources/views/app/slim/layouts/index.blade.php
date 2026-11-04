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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('slim/css/assets/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('slim/css/assets/font-awesome.min.css')}}">
	

    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">     

	<!-- Full calendar	 -->
	{{-- <link href="{{asset('slim/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet"> --}}
	<link href="{{asset('slim/fullcalendar/prueba/main.css')}}" rel="stylesheet">  
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
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

  <!-- ============================
    JavaScript Files
    ============================= -->
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('slim/js/assets/bootstrap.min.js')}}"></script>
	
	<!-- Full calendar -->
	<!--<script src="{{asset('slim/template_admin/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>-->
	<!--<script src="{{asset('slim/template_admin/assets/plugins/moment/moment.js')}}"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{asset('slim/fullcalendar/prueba/main.js')}}"></script>
	<script src="{{asset('slim/fullcalendar/prueba/locales-all.js')}}"></script>
	<!-- <script src="{{asset('slim/fullcalendar/js/fullcalendar.min.js')}}"></script>
	<script src="{{asset('slim/fullcalendar/js/locales-all.js')}}"></script>
	<script src="{{asset('slim/fullcalendar/js/locales/es.js')}}"></script>
	<script src="{{asset('slim/fullcalendar/calendar-init.js')}}"></script> -->
    <!-- Main Menu -->
		
</body>
</html>
