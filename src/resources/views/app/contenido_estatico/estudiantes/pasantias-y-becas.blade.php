                    <!-- Tarjeta Pasantias-->
                    <style>
                        .btn-pasantia{
                            background-color: #17a2b8 !important;
                        }
                        .btn-pasantia:hover {
                            background-color: #107585 !important;
                        }
                        .btn-inscripcion{
                            background-color: #28a745 !important;
                        }
                        .btn-inscripcion:hover {
                            background-color: #1C7330 !important;
                        }
                        
                    </style>

@extends('app.slim.layouts.home')

@section('content')
<br>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="intro-text ">
                    <p>
                        <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                        <span><a href="{{ route('estudiantes.inicio') }}">Estudiantes <i class='fa fa-angle-right'></i></a></span> 
                        <span class="b-active">Pasantias y Becas</span>
                    </p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center become-title">
                    <h3 class="text-justify">Pasantías y Becas</h3>
                    <p class="text-justify">
                        Las y los estudiantes tienen derecho a participar en docencia, investigación y extensión universitaria, de acuerdo a la reglamentación vigente.<br><br>
                        <span class="text-justify font-weight-bold" style="color: #1b365d">Pasantía</span><br><br>
                        La pasantía educativa es una práctica profesional que pueden hacer las/os estudiantes mayores de 18 años en organismos o empresas públicas o privadas para ejercitar sus conocimientos. La pasantía puede durar entre 2 y 12 meses como máximo. Puede renovarse por 6 meses más firmando un nuevo convenio. La/el pasante recibe un estímulo por las tareas realizadas. La pasantía no implica una relación laboral.<br><br> 
                        Las pasantías educativas están reguladas a través de la <a href="http://www.saij.gob.ar/26427-nacional-creacion-sistema-pasantias-educativas-marco-sistema-educativo-nacional-lns0005473-2008-11-26/123456789-0abc-defg-g37-45000scanyel?q=%20tema%3Aley%3Fde%3Fpasant%EDas&o=0&f=Total%7CTipo%20de%20Documento/Legislaci%F3n/Ley%7CFecha%7COrganismo%7CPublicaci%F3n%7CTema%7CEstado%20de%20Vigencia%7CAutor%7CJurisdicci%F3n/Nacional&t=2" target="_blank"> Ley 26.427</a><br>
                        Más información sobre pasantías, convenios y marco regulatorio en la UNLPam, véase:<br> 
                        <br> 
                        <b style="color: #1b365d">Resoluciones:</b>
                        <br> 
                        <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2009_130_atXm3KK.pdf" target="_blank">130-CS-2009</a><br> 
                        <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2012_34_gT2i5Zm.pdf" target="_blank">034-CS-2012</a><br>  
                        <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2013_331_lwWLYmJ.pdf" target="_blank">331-CS-2013</a><br><br>
                        
                        <b style="color: #1b365d">Reglamento para la gestión del Sistema de pasantías educativas de la FCH</b><br> 
                        <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2023_99.pdf" target="_blank">Ord-99-2023</a><br>
                        <br>
                        
                        <b style="color: #1b365d">Plan de Trabajo de Pasantía Educativa:</b><br>
                        <i class="fa fa-file-word-o text-primary" aria-hidden="true"></i> <a href="../slim/estudiantes/Plan de Trabajo de Pasantía Educativa.docx" download>Descargar</a><br>
                        <br>

                        <b style="color: #1b365d">Informe de Cumplimiento del Plan de Trabajo de Pasantía Educativa:</b><br>
                        <i class="fa fa-file-word-o text-primary" aria-hidden="true"></i> <a href="../slim/estudiantes/Informe de Cumplimiento del Plan de Trabajo de Pasantía Educativa.docx" download>Descargar</a><br><br>

                        <span class="font-weight-bold">Por consultas, podrán dirigirse al correo electrónico:</span><br> 
                        <a href="mailto:convenios@humanas.unlpam.edu.ar" target="_blank">convenios@humanas.unlpam.edu.ar</a><br><br>
                        </p>                        
                        
                    </p>
                    <style type="text/css">ol{margin:0;padding:0}table td,table th{padding:0}.c12{-webkit-text-decoration-skip:none;color:#000000;text-decoration:underline;vertical-align:baseline;text-decoration-skip-ink:none;font-family:"Arial";font-style:normal}.c14{padding-top:0pt;padding-bottom:0pt;line-height:1.15;orphans:2;widows:2;text-align:left;height:11pt}.c1{padding-top:12pt;padding-bottom:0pt;line-height:1.15;orphans:2;widows:2;text-align:justify}.c13{padding-top:12pt;padding-bottom:0pt;line-height:1.15;orphans:2;widows:2;text-align:left}.c8{padding-top:0pt;padding-bottom:0pt;line-height:1.15;orphans:2;widows:2;text-align:justify}.c3{color:#000000;font-weight:400;text-decoration:none;vertical-align:baseline;font-family:"Arial";font-style:normal}.c4{padding-top:12pt;padding-bottom:12pt;line-height:1.15;orphans:2;widows:2;text-align:justify}.c5{padding-top:12pt;padding-bottom:0pt;line-height:1.15;orphans:2;widows:2;text-align:center}.c11{color:#000000;text-decoration:none;vertical-align:baseline;font-family:"Arial";font-style:normal}.c10{text-decoration-skip-ink:none;-webkit-text-decoration-skip:none;color:#1155cc;text-decoration:underline}.c15{background-color:#ffffff;max-width:451.4pt;padding:72pt 72pt 72pt 72pt}.c17{color:inherit;text-decoration:inherit}.c0{font-size:10pt}.c2{font-size:7pt}.c9{font-weight:700}.c16{font-weight:400}.c6{font-size:11pt}.c7{font-style:italic}.title{padding-top:0pt;color:#000000;font-size:26pt;padding-bottom:3pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}.subtitle{padding-top:0pt;color:#666666;font-size:15pt;padding-bottom:16pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}li{color:#000000;font-size:11pt;font-family:"Arial"}p{margin:0;color:#000000;font-size:11pt;font-family:"Arial"}h1{padding-top:20pt;color:#000000;font-size:20pt;padding-bottom:6pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h2{padding-top:18pt;color:#000000;font-size:16pt;padding-bottom:6pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h3{padding-top:16pt;color:#434343;font-size:14pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h4{padding-top:14pt;color:#666666;font-size:12pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h5{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h6{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;font-style:italic;orphans:2;widows:2;text-align:left}</style>
                                        <!--El segundo período de inscripción 2025 para la realización de pasantías de estudiantes de Comunicación Social de la Facultad de Ciencias Humanas tendrá lugar entre el <span class="text-danger"> 20 y el 26 de agosto </span>del corriente.<br> -->
                                        <!--La Facultad de Ciencias Humanas informa que desde <span class="text-danger">el 23 de junio y hasta el 1 de julio</span> del corriente, estará abierta la inscripción para las y los estudiantes de las carreras Licenciatura en Ciencias de la Educación (Modalidad a Distancia), Profesorado y Licenciatura en Geografía de la Facultad de Ciencias Humanas de la UNLPam.<br>-->                    
                        
                    <hr>

                    <h3 class="text-info text-center" id="vigentes">Pasantías y Becas Vigentes</h3>
                    <!-- script para mostrar u ocultar las pasantías -->
                    @php
						use Carbon\Carbon;
						$fechaInicio = Carbon::create(2026, 10, 6, 0, 0, 0);
						$fechaFin = Carbon::create(2026, 10, 18, 23, 59, 59);
						$ahora = now();
					@endphp

					@if ($ahora->between($fechaInicio, $fechaFin))
                    <br>                        
                    <div class="row">
                        
                        <!-- card -->
                        <!-- Pasantia Cs. Educación 13/10 a 18/10-->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-dark text-justify">
                                        CONVOCATORIA ESPECÍFICA A PASANTÍAS - CIENCIAS DE LA EDUCACIÓN
                                    </h5>
                                    <p class="text-justify">
                                        La Facultad de Ciencias Humanas informa que del <span class="text-danger">13 de octubre y hasta las 23:59:59 hs. del 18 de octubre </span>del corriente, estará abierta la inscripción para las y los estudiantes de las carreras Profesorado y/o Licenciatura en Ciencias de la Educación de la Facultad de Ciencias Humanas de la UNLPam.
                                        <br><br>
                                    </p>
                                    <p class="text-left">
                                        <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1HyBF7wh9mlMns5-wPe6oMxpUXIVoYneN/view?usp=drive_link" target="_blank">Requisitos, tareas a Desarrollar y Documentación OBLIGATORIA a presentar</a>
                                        <br><br>
                                        </p>
                                    </p>
                                    <a href="https://forms.gle/vjiMgbx8sozkCu13A" target="_blank" class="btn text-right" style="background-color: #1b365d; color: #FFF;">Formulario de inscripción</a>
                                </div>
                            </div>
                        </div>
                        <!-- card -->

                        <!--<div class="col-12">
                            <hr style="border: none; height: 1px; background: #EDEDED; margin: 20px 0;">
                        </div>-->
                        @else
							<h3 class="text-center vh-100"><i>No se encuentran Pasantías o Becas vigentes</i></h3>
						@endif
                    </div>
                    <br>

                </div>
            </div>
        </div>
</div>

@endsection


<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
	$('body').addClass('become_teachers');
});
</script>
