@extends('app.slim.layouts.home')


@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <p> 
                                <span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                <span><a href="{{route('ingresantes.inicio')}}">Ingresantes <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">¿Qué estudiar?</span><br>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
<!--Modal-->
<!-- Button trigger modal -->

<!--Modals-->
<!-- Modal Prof Cs Educacion-->
<div class="modal fade" id="profcsed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/prof_cs_educacion.png" class="img-fluid p-1" alt="Profesorado en Ciencias de la Educación">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Prof Cs Educacion-->
<!-- Modal Prof Ed Inicial-->
<div class="modal fade" id="profedini" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/prof_ed_inicial.png" class="img-fluid p-1" alt="Profesorado Educación Inicial">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Prof Ed Inicial-->
<!-- Modal Prof Ed Primaria-->
<div class="modal fade" id="profedprim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/prof_ed_primaria.png" class="img-fluid p-1" alt="Profesorado Educación Primaria">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Prof Ed Primaria-->
<!-- Modal Prof Geografia-->
<div class="modal fade" id="profgeo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/prof_geografia.png" class="img-fluid p-1" alt="Profesorado en Geografía">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Prof Geografia-->
<!-- Modal Prof Historia-->
<div class="modal fade" id="profhist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/prof_historia.png" class="img-fluid p-1" alt="Profesorado en Historia">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Prof Historia-->

<!-- Modal Prof Ingles-->
<div class="modal fade" id="profingles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/prof_ingles.png" class="img-fluid p-1" alt="Profesorado en Ingles">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Prof Ingles-->
<!-- Modal Prof Letras-->
<div class="modal fade" id="profletras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/prof_letras.png" class="img-fluid p-1" alt="Profesorado en Letras">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Prof Letras-->

<!-- Modal Lic Cs Ed-->
<div class="modal fade" id="liccsed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/lic_cs_educacion.png" class="img-fluid p-1" alt="Licenciatura en Ciencias de la Educación">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Lic Cs Ed-->

<!-- Modal Lic Com Social-->
<div class="modal fade" id="liccsoc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/lic_com_social.png" class="img-fluid p-1" alt="Licenciatura en Comunicación Social">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Lic Com Social-->
<!-- Modal Lic Geografía-->
<div class="modal fade" id="licgeo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/lic_geografia.png" class="img-fluid p-1" alt="Licenciatura en Geografía">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Lic Geografía-->
<!-- Modal Lic Historia-->
<div class="modal fade" id="lichist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/lic_historia.png" class="img-fluid p-1" alt="Licenciatura en Historia">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Lic Historia-->
<!-- Modal Lic Ingles-->
<div class="modal fade" id="licingles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/lic_ingles.png" class="img-fluid p-1" alt="Licenciatura en Ingles">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Lic Ingles-->
<!-- Modal Lic Letras-->
<div class="modal fade" id="licletras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../slim/planes-estudio-images/lic_letras.png" class="img-fluid p-1" alt="Licenciatura en Letras">
      </div>
    </div>
  </div>
</div>                  
<!-- Modal Lic Letras-->
<!--Modals-->
                <!--Inicio Contenido-->
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                          <div>
                            <audio style="height: 2rem;" controls=""><source src="../slim/audios-web/que-estudiar.wav" type="audio/wav">Tu navegador no soporta audio HTML5.</audio><br>
                          </div>
                        </div>                      
                        <div class="col-12">
                        <h3 class="text-justify">¿Qué estudiar?</h3>
                            <p class="text-justify">
                                Con medio siglo de historia, la Facultad de Ciencias Humanas se ha posicionado como una de las principales instituciones académicas de la región dedicada a la formación de docentes y profesionales de las Ciencias Sociales, Humanas y de la Comunicación, con una perspectiva interdisciplinaria, crítica y comprometida con la sociedad local. 
                                Nuestra Facultad cuenta con nueve departamentos: Ciencias de la Educación, Comunicación Social, Educación Inicial, Educación Primaria, Formación Docente, Geografía, Historia, Lenguas Extranjeras y Letras. Posee una oferta académica amplia, que incluye 15 carreras de grado y 2 carreras a término -la Licenciatura en Turismo y el Profesorado de Nivel Secundario en Lengua y Literatura-.
                            </p>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto pb-2">
                        <div class="col-12 px-3 py-2 bg-light">
                            <span class="font-weight-bold">PROFESORADOS</span>
                        </div>

                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#profcsed">
                                        <img src="../slim/planes-estudio-images/prof_cs_educacion.png" class="img-fluid p-1" alt="Profesorado en Ciencias de la Educación">
                                    </a>
                                    <a href="{{route('carreras.grado.departamento.cs_de_la_educacion.carrera_prof_en_cs_de_la_eduacion')}}">
                                        <h5 class="card-title" style="color: #1b365d;">PROFESORADO <br>EN CIENCIAS DE LA EDUCACIÓN</h5>
                                    </a>
                                    <p class="card-text">Sede General Pico</p>
                                </div>
                            </div>
                        </div>  

                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#profedini">
                                        <img src="../slim/planes-estudio-images/prof_ed_inicial.png" class="img-fluid p-1" alt="Profesorado en Ciencias de la Educación">
                                    </a>                                    
                                                                        
                                    <a href="{{route('carreras.grado.departamento.ed_inicial.carrera_ed_inicial')}}">
                                        <h5 class="card-title" style="color: #1b365d;">PROFESORADO <br>EN EDUCACIÓN INICIAL</h5>
                                    </a>
                                    <p class="card-text">Sede General Pico</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#profedprim">
                                        <img src="../slim/planes-estudio-images/prof_ed_primaria.png" class="img-fluid p-1" alt="Profesorado en Educación Primaria">
                                    </a>                                    
                                    
                                    <a href="{{route('carreras.grado.departamento.ed_primaria.carrera_ed_primaria')}}">
                                        <h5 class="card-title" style="color: #1b365d;">PROFESORADO <br>EN EDUCACIÓN PRIMARIA</h5>
                                    </a>
                                    <p class="card-text">Sede General Pico</p>
                                </div>
                            </div>
                        </div>      

                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#profgeo">
                                        <img src="../slim/planes-estudio-images/prof_geografia.png" class="img-fluid p-1" alt="Profesorado en Geografía">                                    
                                    </a>                                    

                                    <a href="{{route('carreras.grado.departamento.geografia.carrera_prof_geografia')}}">
                                        <h5 class="card-title" style="color: #1b365d;">PROFESORADO <br>EN GEOGRAFÍA</h5>
                                    </a>
                                    <p class="card-text">Sede Santa Rosa</p>
                                </div>
                            </div>
                        </div>		
                        
                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#profhist">
                                        <img src="../slim/planes-estudio-images/prof_historia.png" class="img-fluid p-1" alt="Profesorado en Historia">
                                    </a>                                    
                                   
                                    <a href="{{route('carreras.grado.departamento.historia.carrera_prof_historia')}}">
                                        <h5 class="card-title" style="color: #1b365d;">PROFESORADO <br>EN HISTORIA</h5>
                                    </a>
                                    <p class="card-text">Sede Santa Rosa</p>
                                </div>
                            </div>
                        </div>		
                        
                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#profingles">
                                        <img src="../slim/planes-estudio-images/prof_ingles.png" class="img-fluid p-1" alt="Profesorado en Ingles">
                                    </a>                                    
                                    <a href="{{route('carreras.grado.departamento.lenguas_extranjeras.carrera_prof_en_ingles')}}">
                                        <h5 class="card-title" style="color: #1b365d;">PROFESORADO <br>EN INGLÉS</h5>
                                    </a>
                                    <p class="card-text">Sede Santa Rosa</p>
                                </div>
                            </div>
                        </div>		
                        
                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#profletras">
                                        <img src="../slim/planes-estudio-images/prof_letras.png" class="img-fluid p-1" alt="Profesorado en Letras">
                                    </a>
                                    <a href="{{route('carreras.grado.departamento.letras.carrera_prof_en_letras')}}">
                                        <h5 class="card-title" style="color: #1b365d;">PROFESORADO <br>EN LETRAS</h5>
                                    </a>
                                    <p class="card-text">Sede Santa Rosa</p>
                                </div>
                            </div>
                        </div>		
                        

                        

                        <!--<div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a href="{{route('carreras.grado.departamento.letras.carrera_prof_de_nivel_secundario_en_lengua_y_literatura')}}">
                                        <h5 class="card-title" style="color: #1b365d;">PROFESORADO DE NIVEL<br>SECUNDARIO EN LENGUA Y LITERATURA</h5>
                                    </a>
                                    <p class="card-text">Sede G. Pico y G. Acha</p>
                                </div>
                            </div>
                        </div>-->

                        <div class="col-12 px-3 py-2 bg-light">
                            <span class="font-weight-bold">LICENCIATURAS</span>
                        </div>
                        
                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#liccsed">
                                        <img src="../slim/planes-estudio-images/lic_cs_educacion.png" class="img-fluid p-1" alt="Licenciatura en Ciencias de la Educación">
                                    </a>
                                    
                                    <a href="{{route('carreras.grado.departamento.cs_de_la_educacion.carrera_lic_en_cs_de_la_educacion')}}">
                                        <h5 class="card-title" style="color: #1b365d;">LICENCIATURA<br> EN CIENCIAS DE LA EDUCACIÓN</h5>
                                    </a>
                                    <p class="card-text">Sede General Pico</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#liccsed">
                                        <img src="../slim/planes-estudio-images/lic_cs_educacion.png" class="img-fluid p-1" alt="Licenciatura en Ciencias de la Educación">
                                    </a>
                                    <a href="{{route('carreras.grado.departamento.cs_de_la_educacion.carrera_lic_en_cs_de_la_educacion_a_distancia')}}">
                                        <h5 class="card-title" style="color: #1b365d;">LICENCIATURA EN CIENCIAS <br>DE LA EDUCACIÓN</h5>
                                    </a>
                                    <p class="card-text">Sede General Pico - A Distancia</p>
                                </div>
                            </div>
                        </div>                        
                        
                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#liccsoc">
                                        <img src="../slim/planes-estudio-images/lic_com_social.png" class="img-fluid p-1" alt="Licenciatura en Comunicación Social">
                                    </a>
                                    
                                    <a href="{{route('carreras.grado.departamento.comunicacion_social.carrera_com_social')}}">
                                        <h5 class="card-title" style="color: #1b365d;">LICENCIATURA<br> EN COMUNICACIÓN SOCIAL</h5>
                                    </a>
                                    <p class="card-text">Sede Santa Rosa</p>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a href="{{route('carreras.grado.departamento.geografia.carrera_lic_turismo')}}">
                                        <h5 class="card-title" style="color: #1b365d;">LICENCIATURA<br> EN TURISMO/GUÍA UNIV. EN TURISMO</h5>
                                    </a>
                                    <p class="card-text">Sede Santa Rosa</p>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#licgeo">
                                        <img src="../slim/planes-estudio-images/lic_geografia.png" class="img-fluid p-1" alt="Licenciatura en Geografía">
                                    </a>
                                    
                                    <a href="{{route('carreras.grado.departamento.geografia.carrera_lic_geografia')}}">
                                        <h5 class="card-title" style="color: #1b365d;">LICENCIATURA<br> EN GEOGRAFÍA</h5>
                                    </a>
                                    <p class="card-text">Sede Santa Rosa</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#lichist">
                                        <img src="../slim/planes-estudio-images/lic_historia.png" class="img-fluid p-1" alt="Licenciatura en Historia">
                                    </a>                                    
                                    <a href="{{route('carreras.grado.departamento.historia.carrera_lic_historia')}}">
                                        <h5 class="card-title" style="color: #1b365d;">LICENCIATURA<br> EN HISTORIA</h5>
                                    </a>
                                    <p class="card-text">Sede Santa Rosa</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#licingles">
                                        <img src="../slim/planes-estudio-images/lic_ingles.png" class="img-fluid p-1" alt="Licenciatura en Ingles">
                                    </a>                                    
                                    
                                    <a href="{{route('carreras.grado.departamento.lenguas_extranjeras.carrera_lic_ingles_oel')}}">
                                        <h5 class="card-title" style="color: #1b365d;">LICENCIATURA EN INGLÉS CON <br>ORIENTACIÓN EN ESTUDIOS LITERARIOS</h5>
                                    </a>
                                    <p class="card-text">Sede Santa Rosa</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#licingles">
                                        <img src="../slim/planes-estudio-images/lic_ingles.png" class="img-fluid p-1" alt="Licenciatura en Ingles">
                                    </a>
                                    <a href="{{route('carreras.grado.departamento.lenguas_extranjeras.carrera_lic_ingles_ola')}}">
                                        <h5 class="card-title" style="color: #1b365d;">LICENCIATURA EN INGLÉS CON <br>ORIENTACIÓN EN LINGÜÍSTICA APLICADA</h5>
                                    </a>
                                    <p class="card-text">Sede Santa Rosa</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-4 px-2 py-3 mb-1">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                    <a data-toggle="modal" data-target="#licletras">
                                        <img src="../slim/planes-estudio-images/lic_letras.png" class="img-fluid p-1" alt="Licenciatura en Letras">
                                    </a>                                    
                                    <a href="{{route('carreras.grado.departamento.letras.carrera_lic_letras')}}">
                                        <h5 class="card-title" style="color: #1b365d;">LICENCIATURA <br>EN LETRAS</h5>
                                    </a>
                                    <p class="card-text">Sede Santa Rosa</p>
                                </div>
                            </div>
                        </div>						
														
                    </div>
                </div>

                <!--Fin Contenido-->
                </div>
            </section>
        </div>
    </section>


@endsection