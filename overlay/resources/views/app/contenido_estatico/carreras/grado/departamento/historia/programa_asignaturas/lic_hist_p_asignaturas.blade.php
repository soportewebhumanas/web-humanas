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
                                <a href="{{route('carreras.grado.departamento.historia')}}">Historia <i class='fa fa-angle-right'></i></a>
                            </span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.historia.carrera_lic_historia')}}">Licenciatura en Historia <i class='fa fa-angle-right'></i></a>
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
    <div class="col-6 py-2">Filosofía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1V-_VZwAADwEv3Zw8RWplr_JrlTZVWips/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Fundamentos de Antropología</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/15k_KigqWdaYeZjpiW_JSrM2JE-IfwAsx/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia de los Procesos Sociales</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13L0zsAcczNuoI1b4VLPd92Nm1Nuj3dL4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Fundamentos de Sociología y Ciencia Política</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1QU6z4wk9Ga2exPfhLfHe5dN_TiNFDubs/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Prehistoria General</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qLAkTV_n7gGuwDhqq_DVKm9HkUD5NTIB/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Introducción a la Geografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RROZM0uVZJR2QMaOTBZTKkycXKdSSytT/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
    <div class="col-6 py-2">Fundamentos de Economía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1EkplqifmIO1NiRvmAGjCpsgq1hnkoFoR/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Problemas del Conocimiento Histórico</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CCyLiiqv5zsiHxNvHRd0nu93eqiUw1mq/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Antigua I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1UpN3xwbFeU8rA1o2udTwIg8nupgV3DwR/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia de América I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Mq9IGCFv9GgbYjxSLwPgyw0WSnRTvhhj/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Historia Antigua II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hDO-L1_xdtoNmfMCIiUZEy0-N4zcIZns/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Taller de Comprensión y Producción de Textos</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13MpoAv8OPmIOO1jQOkUMlcfTXr3P6_sn/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
    <div class="col-6 py-2">Historia de América II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RlYYiVYNvyh_ttcswWLvy_GemMGCfxmU/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Medieval</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/178IhsnqBoemhYZdlHMdOcE0_3-yTjpMf/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Metodología de la Investigación Histórica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sJGSWaZySPGHT_gRW8hQHy5EBMZBGy1H/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Argentina I</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12jVgHmP_8MMii3x6qUPKq4W1-kHS7jUW/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Moderna</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1v38M2EOlXykn--tYn-phWdleUXF-ynln/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Esp. Curricular I - Esp. Curricular II - Silvia Crochetti - Juan Cruz López Rasch</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rrPczh37ImqR3T5GZ6Jpf_FxTvYEF-eJ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Esp. Curricular I - Esp. Curricular II - María Lanzillotta – Ana María T. Rodríguez</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1r_nwHrZQRXMKuUpdrsTVHYcAC4maki_B/view?usp=sharing" target="_blank">Descargar Programa</a></div>            
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
    <div class="col-6 py-2">Historia Argentina II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1jJ99ghcsWTiqt_Xev2TfnZ2vbxc53h0p/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia de América III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CrOZUBRPLd3uEnIL3sIS-pkABUgiLUTG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia Contemporánea</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1uuegHJACddUMxPxqhGot_rw9upCEhep6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Pasantía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>    
    <div class="col-6 py-2">Historia Argentina III</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1xIuJjq_-DrkBQtjUxUdsXbGHnxA6tlYw/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Historia del Siglo XX</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bz0oPNJmhlTvJLWPzgJ0ygqwCaCz3rY4/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Epistemología e Historiografía</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1W6nC2FgAVYrbW_QfLSaGlMMH33_2mXgu/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario Optativo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1aipDZtdHblh5dDnYhoevUBi8t-OVXDvg/view?usp=sharing" target="_blank">Descargar Programa</a></div>    
    
    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Quinto Año</div>
    <div class="col-6 py-2">Seminario de Investigación en Historia Regional</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1C425G0TlwbzBpG-ix87X0r2l6cYIy6W6/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Historia I - Prof. Cantera</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_rWPyXpaGk8Ol7wpliz7oRTSEaI1YhGf/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Historia I - Prof. Justo</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ZYbXJjrHBU-1eY8AN856d9rZ2rhRUQTa/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Teoría y Metodología de la Investigación Historiográfica</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/10O6ykBLmK8crtzryN29lvNiEdV4QhHWE/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Tesis Orientado</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Sem. de Historia I - Sem. de Historia II - Silvia Crochetti - Juan Cruz López Rasch</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CT5v4PErFzOOyJRtko7ASjukkOHqL8B5/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Sem. de Historia I - Sem. de Historia II - María Lanzillotta – Ana María T. Rodríguez</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1euzoyBHtQxdqfVmYJaxy1-_qnDj3X7zG/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Seminario de Historia II</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1_sQZx5Lg9BsaXGicPEU2rz329tDq7XEm/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">Tesis</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="#" target="_blank">Descargar Programa</a></div>

    <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Nivel de Idioma</div>
    <div class="col-6 py-2">I Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1je-sEp80lVTlSFT-e6v2mD1juqUXutNM/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/102-MHeie7ToOTwUB4ggtO8JhoHYlPw5f/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">III Nivel de Idioma (Francés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1qx-YYbcf5xKh5q4TjPV1vQ-Cofe9JsIp/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">I Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1GzELl9xFBxIQEJhLZXWSEFhAmQHUp8bt/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">II Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1mPh6UCukSUKWBDuT_y8xhLYTcUG6hdHQ/view?usp=sharing" target="_blank">Descargar Programa</a></div>
    <div class="col-6 py-2">III Nivel de Idioma (Inglés)</div><div class="col-6 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1i1001_ltAfhg-Srw-MsNbM9oWslLepKH/view?usp=sharing" target="_blank">Descargar Programa</a></div>
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