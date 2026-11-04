@extends('app.slim.layouts.home')


@section('content')
<br>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="intro-text ">
                    <p><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Pasantias</span></p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
    
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center become-title">
                    <h3 class="text-justify">Pasantías</h3>
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
                    <div class="pb-3"><span class="line"></span></div>
                </div>
            </div>
           
            @if($cantPasantias > 0)
            <p class="col-sm-8 offset-sm-2 text-center">
                La Facultad de Ciencias Humanas informa que estará abierta la inscripción para las y los estudiantes de la carrera Licenciatura en Comunicación Social de la Facultad de Ciencias Humanas de la UNLPam sobre las siguientes pasantías.
            </p>
            <div class=" text-center">
                <h3>Pasantías disponibles</h3>

                
                @foreach($pasantias->chunk(3) as $bloque)
                <div class="row" style="display:flex; flex-wrap: wrap;">
                    @foreach($bloque as $pasantia)
                    <div class="col-md-4" style="height:100%">
                        <div class="card text-center">
                          <div class="card-header text-white py-2" style="background-color:#26406C; font-size: 1.2em;">
                           {{$pasantia->organismo_solicitante}}
                          </div>
                          <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Destinada a:</b> {{$pasantia->destinatario}}</li>
                                <li class="list-group-item"><b>Duración: </b> {{$pasantia->duracion}} meses</li>
                                <li class="list-group-item"><b>Totalidad de lugares: </b> {{$pasantia->cantidad}}</li>
                                <li class="list-group-item"><b>Inscripción</b>
                                    <ul class="list-unstyled">
                                        <li><i> Desde:</i> {{$pasantia->inicio_inscripcion->format('d/m/Y h:i')}}</li>
                                        <li><i> Hasta:</i> {{$pasantia->fin_inscripcion->format('d/m/Y h:i')}}</li>
                                    </ul>
                                </li>
                              </ul>
                            <a href="{{route('pasantias.show', ['pasantia' => $pasantia->id])}}" class="btn btn-primary btn-block" style="background-color:#26406C">Ver más</a>
                          </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                @endforeach
            </div>
            @else
            <br><br>
            <center style="height: 10vh;">
               <i> <h3 style="color:royalblue">Actualmente, no hay pasantías disponibles</h3> </i>
            </center>
            @endif
            </div>
            <br><br>
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
