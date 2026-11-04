@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
                            <span>
                                <a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a>
                            </span>
							<span><a href="#">Departamentos <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="#">Carreras <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="#">Grado <i class='fa fa-angle-right'></i></a></span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.geografia')}}">Geografía <i class='fa fa-angle-right'></i></a>
                            </span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.geografia.carrera_prof_geografia')}}">Profesorado en Geografía <i class='fa fa-angle-right'></i></a>
                            </span>							                             
                            <span class="b-active">Programa de Asignaturas</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>

<!--Inicio Contenido-->
<div class="container  mb-4">
    <div class="row border border-dark">
        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-0">Primer Año</div>
        <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-_LmO1Nv6aGgsjIMwIwa864iS5m-AKcj/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Introducción a la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UH-SWiBYlqO5KcDaLdQrLMfz0R-1bDnq/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Técnicas en Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vTLBrqh3BZVBwh_AqtElgkxqToUcTFf-/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Psicología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1tkEIcErGBhbQWJa7YG8a8dh9sZYDQlgS/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
        <div class="col-6 py-2">Geología y Geomorfología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1NpZdAsQi4NUf1FCth8E0Fra0nNwfNyn-/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
        <div class="col-6 py-2">Climatología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16vqj99UWx2kbJjoXVavWqba4VXZbKrtQ/view?usp=sharing" target="_blank">Descargar Programa</a></div>        

        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
        <div class="col-6 py-2">Fundamentos de Economía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1v5VB0TIM2uvgfhs4SVUudKOX671MV9P1/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Fundamentos de Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KX5q6h9wrSt6SDiUqIf8j6uT7QFb0Y4G/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Biogeografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1XnqE9ZFPVq5EGriAibLEXC5sOb9nwD6i/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Pedagogía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_VM7x2cHWFg1JCvRH_CqAz7g88UB4fj9/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Fundamentos de Sociología y Ciencia Política</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sQ6hZpZDFFJ6PktLgWovnBcupacsDK-V/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Hidrología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1lU4T3q6Lr-R00rH1IfA3GWJFSUQmPxYD/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Geografía de la Población</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Ea7LhPljbEwnBqfLrgElts1W1qyuugzT/view?usp=sharing" target="_blank">Descargar Programa</a></div>

        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
        <div class="col-6 py-2">Historia del Siglo XX</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12aKPSsbx6b_Z11TfnKQ2oWrNIZu7HIpY/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Geografía Urbana</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EmfcWDiGIhbinkjrWAxSpM_M1NJv8-nl/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Epistemología de la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bx1kcGQXkNzqY0ENdLXlZJTQ71zOL75J/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Didáctica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1f8WH79GL-hhSbGpbNyzAImBPO1AUSDau/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
        <div class="col-6 py-2">Historia Argentina Contemporánea (1853-2000)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WBsqHtI1t86xMkUUkMkJX2EaAumNYlA2/view?usp=sharing" target="_blank">Descargar Programa</a></div>        
        <div class="col-6 py-2">Geografía Política y Económica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RsSlPNubhJgUluTujNtMQM9Q5ENPFPVL/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Geografía Rural</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Pt2q3NdG7hjNMRDpRs14Qy78yz4Z5y9q/view?usp=sharing" target="_blank">Descargar Programa</a></div>

        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
        <div class="col-6 py-2">Geografía de América Latina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pEPVKKvSFLf3I0oydcreiwbdGVICNOEf/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Geografía de Europa y Oceanía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JmJmUm2bP8qivjioQLXndeoygOg7TWPO/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Geografía de Argentina</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1h66BqO0B6M4RR87Iqgu544GjdoQs2wwE/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Política y Legislación Escolar</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1N5VH0zt7wC6oxiq3fyLFLqNHWVyIZD8U/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Didáctica Especial de la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/119VeijP6yijldVCr8JH2Lqu3snRHJaE8/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Geografía de América Anglosajona</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1TD1ijth0K4q49bAMI0rsCOYXr6OVw7N3/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
        <div class="col-6 py-2">Geografía de Asia y Africa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Xd1T_OV_9BKEU26Z9ge0guD8qtjndyhi/view?usp=sharing" target="_blank">Descargar Programa</a></div>    

        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
        <div class="col-6 py-2">Residencia Docente</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vOQCm57atfPJnY2obWiitazM88EA847q/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Geografía de La Pampa</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17XE0b97zIFfNwDk8MM65Kr-uLsuVp37M/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">Metodología de la Investigación Geográfica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZRrLxfXuQc2JvxjSuzlMSheqQMagor5A/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        
        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Niveles de Idioma</div>
        <div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1n7pij5tO3ETHcJs66NsGiN-c7_vsEKCP/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZAioitDMv150iG1jIDW0Z9INGG3HT20p/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">III Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LIHwwGn671girXH37w_WFv5QNwp0-zgD/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1SePzZBc560FE9SO5D9mk3_dbe65gJW26/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1328tvkPLUI9FTRz4tAiSNYVEBcqghJxA/view?usp=sharing" target="_blank">Descargar Programa</a></div>
        <div class="col-6 py-2">III Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Kk60IEeCww-tmd8yxz--A2mLDhoaGGaF/view?usp=sharing" target="_blank">Descargar Programa</a></div>       
    </div>
</div>
<!--Fin Contenido-->			

@endsection

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
	$('body').addClass('become_teachers');
});
</script>