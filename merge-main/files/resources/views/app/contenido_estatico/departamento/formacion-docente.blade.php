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
                                <span>
                                    <a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a>
                                </span> 
                                <span><a href="{{ route('footer.contacto') }}">Contactos <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Formación Docente</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <!-- Inicio Contenido Central -->
                <div class="container mb-4">
                    <h3>Formación Docente</h3>
                    <div class="container">
                        <div class="row border border-dark">
                            <div class="col-12 py-2 bg-light border border-dark border-right-0 border-left-0 border-top-0"><span class="font-weight-bold">Contacto</span></div>
                            <div class="col-12 py-2">
                                Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br>
                                Tel: 02954-451655<br>
                                <a class="d-none d-sm-none d-md-block d-lg-block" href="mailto:formaciondocente@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> formaciondocente@humanas.unlpam.edu.ar</a>
			                    <a class="d-block d-sm-block d-md-none d-lg-none" href="mailto:formaciondocente@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> formaciondocente<br>@humanas.unlpam.edu.ar</a>
                            </div>
                            <div class="col-12 py-2 bg-light border border-dark border-right-0 border-left-0"><span class="font-weight-bold">Consejo Departamental</span></div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Director: </span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                NICOLETTI, Verónica de los Angeles
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Profesores:</span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                <span class="font-weight-bold">Titular: </span>Franco, Juan Carlos <br>
                                <span class="font-weight-bold">Suplente: </span>
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Auxiliares:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                <span class="font-weight-bold">Titular: </span>Alfageme Balza, Valeria<br>
                                <span class="font-weight-bold">Suplente: </span>Corniglione, Marla Silvia 
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Graduados:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Nosei, María Cristina <br>
                                <span class="font-weight-bold">Suplente: </span>Di Franco, Maria Graciela
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Estudiantes:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Hernández, Lionel<br>
                                <span class="font-weight-bold">Suplente: </span>Caballero Valentina
                            </div>                                
                            </div>            
                        </div>
                    </div>
                </div>
                <!-- Fin Contenido Central-->
                </div>
            </section>
        </div>
    </section>


@endsection