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
                        <span class="text-justify font-weight-bold">Pasantía</span><br><br>
                        La pasantía educativa es una práctica profesional que pueden hacer las/os estudiantes mayores de 18 años en organismos o empresas públicas o privadas para ejercitar sus conocimientos. La pasantía puede durar entre 2 y 12 meses como máximo. Puede renovarse por 6 meses más firmando un nuevo convenio. La/el pasante recibe un estímulo por las tareas realizadas. La pasantía no implica una relación laboral.<br><br> 
                        Las pasantías educativas están reguladas a través de la <a href="http://www.saij.gob.ar/26427-nacional-creacion-sistema-pasantias-educativas-marco-sistema-educativo-nacional-lns0005473-2008-11-26/123456789-0abc-defg-g37-45000scanyel?q=%20tema%3Aley%3Fde%3Fpasant%EDas&o=0&f=Total%7CTipo%20de%20Documento/Legislaci%F3n/Ley%7CFecha%7COrganismo%7CPublicaci%F3n%7CTema%7CEstado%20de%20Vigencia%7CAutor%7CJurisdicci%F3n/Nacional&t=2" target="_blank"> Ley 26.427</a><br>
                        Más información sobre pasantías, convenios y marco regulatorio en la UNLPam, véase:<br> 
                        Resoluciones: 
                        <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2009_130_atXm3KK.pdf" target="_blank">130-CS-2009</a>, 
                        <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2012_34_gT2i5Zm.pdf" target="_blank">034-CS-2012</a>, y 
                        <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2013_331_lwWLYmJ.pdf" target="_blank">331-CS-2013</a><br><br>
                    </p>
                    <hr>
                    <h3>Pasantías y Becas Vigentes</h3>
                    <!--<h4 class="text-danger py-5"><em>No se encuentran pasantías vigentes</em></h4>-->
                    
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
                    <!-- Pasantía encabezado -->
                    <p class="text-justify">
                        La Facultad de Ciencias Humanas informa que del <b>23 y hasta el 30 de marzo</b> del corriente, estará abierta la inscripción para las y los estudiantes del Departamento de Ciencias de la Educación, Comunicación Social, Historia y Geografía de la Facultad de Ciencias Humanas de la UNLPam.
                    </p>
                    <!-- Pasantía 1 -->
                    <div class="card px-3 py-3">
                        <p class="text-justify">
                            <b>
                                Un/a (1) estudiante de la Licenciatura y/o Profesorado en Ciencias de la Educación, para cubrir una (1) pasantía rentada en CORPICO. <br>
                                Duración: 6 meses.<br> 
                                Carga horaria: 4 horas de dedicación diaria.<br>
                            </b>
                            <br><br>
                            <button class="btn float-right col-12 my-1 btn-pasantia"><a href="https://drive.google.com/file/d/1ll5Gsqr9MgGRmIXcp-fDkhM-1JCdCga0/view?usp=share_link" target="_blank" class=" text-light">Requisitos, tareas a desarrollar y documentación a presentar</a></button><br>
                            <button class="btn float-right col-12 btn-inscripcion"><a href="https://forms.gle/4Ln11Dt8n3yVYt6M7" target="_blank" class=" text-light">Formulario de Inscripción</a></button><br>
                        </p>
                    </div>
                    <!-- Pasantía 1 -->
                    <hr class="my-4">
                    <!-- Pasantía 2 -->
                    <div class="card px-3 py-3">
                        <p class="text-justify">
                            <b>
                                Un/a (1) estudiante de la Licenciatura y/o Profesorado en Historia o Geografía para cubrir una (1) pasantía rentada en el marco de la firma del Convenio Específico firmado con la Facultad de Ciencias Económicas y Jurídicas y el HONORABLE CONCEJO DELIBERANTE DE SANTA ROSA, para el desarrollo de actividades de investigación y extensión vinculadas con la conmemoración de los 40 años de democracia.<br>
                                Duración: 12 meses, con opción de renovación por 6 meses.<br> 
                                Carga horaria: 20 horas semanales, de lunes a viernes.<br>
                            </b>
                            <br><br>
                            <button class="btn float-right col-12 my-1 btn-pasantia"><a href="https://drive.google.com/file/d/1ll5Gsqr9MgGRmIXcp-fDkhM-1JCdCga0/view?usp=share_link" target="_blank" class=" text-light">Requisitos, tareas a desarrollar y documentación a presentar</a></button><br>
                            <button class="btn float-right col-12 btn-inscripcion"><a href="https://forms.gle/bpbhm6fk7s8hhFNM9" target="_blank" class=" text-light">Formulario de Inscripción</a></button><br>
                        </p>
                    </div>
                    <!-- Pasantía 2 -->
                    <hr class="my-4">                    
                    <!-- Pasantía 3 -->
                    <div class="card px-3 py-3">
                        <p class="text-justify">
                            <b>
                                Dos (2) estudiantes de la Licenciatura en Comunicación Social, para cubrir dos (2) pasantías rentadas en la SECRETARÍA DE TURISMO del Gobierno de la Provincia de La Pampa.<br>
                                Duración: 12 meses, con opción de renovación por 6 meses.<br> 
                                Carga horaria: 20 horas semanales,  de lunes a viernes.<br>
                            </b>
                            <br><br>
                            <button class="btn float-right col-12 my-1 btn-pasantia"><a href="https://drive.google.com/file/d/1ll5Gsqr9MgGRmIXcp-fDkhM-1JCdCga0/view?usp=share_link" target="_blank" class=" text-light">Requisitos, tareas a desarrollar y documentación a presentar</a></button><br>
                            <button class="btn float-right col-12 btn-inscripcion"><a href="https://forms.gle/nUraDLmsAEHZijSR7" target="_blank" class=" text-light">Formulario de Inscripción</a></button><br>
                        </p>
                    </div>
                    <!-- Pasantía 3 -->
                    <hr class="my-4">                    
                    <!-- Pasantía 4 -->
                    <div class="card px-3 py-3">
                        <p class="text-justify">
                            <b>
                                Un/a (1) estudiante de la Licenciatura en Comunicación Social, para cubrir una (1) pasantía rentada en la SUBSECRETARÍA DE ECONOMÍA SOCIAL, dependiente del Ministerio de Desarrollo Social del Gobierno de la Provincia de La Pampa. <br>
                                Duración: 12 meses, con opción de renovación por 6 meses.<br> 
                                Carga horaria: 20 horas semanales,  de lunes a viernes.<br>
                            </b>
                            <br><br>
                            <button class="btn float-right col-12 my-1 btn-pasantia"><a href="https://drive.google.com/file/d/1ll5Gsqr9MgGRmIXcp-fDkhM-1JCdCga0/view?usp=share_link" target="_blank" class=" text-light">Requisitos, tareas a desarrollar y documentación a presentar</a></button><br>
                            <button class="btn float-right col-12 btn-inscripcion"><a href="https://forms.gle/KBbjpD4c3sYeZ3xC7" target="_blank" class=" text-light">Formulario de Inscripción</a></button><br>
                        </p>
                    </div>
                    <!-- Pasantía 4 -->
                    <hr class="my-4">                    
                    <!-- Pasantía 5 -->
                    <div class="card px-3 py-3">
                        <p class="text-justify">
                            <b>
                                Un/a (1) estudiante de la Licenciatura en Comunicación Social, para cubrir una (1) pasantía rentada en el área de Tecnologías digitales Educativas de la DIRECCIÓN DE TECNOLOGÍAS PARA LA GESTIÓN EDUCATIVA, dependiente del Ministerio de Educación del Gobierno de la Provincia de La Pampa. <br>
                                Duración: 12 meses, con opción de renovación por 6 meses.<br> 
                                Carga horaria: 20 horas semanales,  de lunes a viernes.<br>
                            </b>
                            <br><br>
                            <button class="btn float-right col-12 my-1 btn-pasantia"><a href="https://drive.google.com/file/d/1ll5Gsqr9MgGRmIXcp-fDkhM-1JCdCga0/view?usp=share_link" target="_blank" class=" text-light">Requisitos, tareas a desarrollar y documentación a presentar</a></button><br>
                            <button class="btn float-right col-12 btn-inscripcion"><a href="https://forms.gle/Y7Up22Y9GwrEFqGRA" target="_blank" class=" text-light">Formulario de Inscripción</a></button><br>
                        </p>
                    </div>
                    <!-- Pasantía 5 --> 
                    <hr class="my-4">                                                                               
                    <!-- Pasantía 6 -->
                    <div class="card px-3 py-3">
                        <p class="text-justify">
                            <b>
                                Dos (2) estudiantes de la Licenciatura en Comunicación Social, para cubrir dos (2) pasantías rentadas en el área de comunicaciones de IPAV.<br>
                                Duración: 12 meses, con opción de renovación por 6 meses.<br> 
                                Carga horaria: 20 horas semanales,  de lunes a viernes.<br>
                            </b>
                            <br><br>
                            <button class="btn float-right col-12 my-1 btn-pasantia"><a href="https://drive.google.com/file/d/1ll5Gsqr9MgGRmIXcp-fDkhM-1JCdCga0/view?usp=share_link" target="_blank" class=" text-light">Requisitos, tareas a desarrollar y documentación a presentar</a></button><br>
                            <button class="btn float-right col-12 btn-inscripcion"><a href="https://forms.gle/LjhVUgJDEoUvh8Nt6" target="_blank" class=" text-light">Formulario de Inscripción</a></button><br>
                        </p>
                    </div>
                    <!-- Pasantía 6 -->
                    <hr class="my-4">                                                                                
                    <!-- Pasantía 7 -->
                    <div class="card px-3 py-3">
                        <p class="text-justify">
                            <b>
                                Un/a (1) estudiante de la Licenciatura en Comunicación Social, para cubrir una (1) pasantía rentada en el área de Prensa y Comunicación del MINISTERIO DE CONCECTIVIDAD Y MODERNIZACIÓN del Gobierno de la Provincia de La Pampa.<br>
                                Duración: 12 meses, con opción de renovación por 6 meses.<br> 
                                Carga horaria: 20 horas semanales,  de lunes a viernes.<br>
                            </b>
                            <br><br>
                            <button class="btn float-right col-12 my-1 btn-pasantia"><a href="https://drive.google.com/file/d/1ll5Gsqr9MgGRmIXcp-fDkhM-1JCdCga0/view?usp=share_link" target="_blank" class=" text-light">Requisitos, tareas a desarrollar y documentación a presentar</a></button><br>
                            <button class="btn float-right col-12 btn-inscripcion"><a href="https://forms.gle/PjRb4fxag5tDyboK8" target="_blank" class=" text-light">Formulario de Inscripción</a></button><br>
                        </p>
                    </div>
                    <!-- Pasantía 7 -->                    
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
