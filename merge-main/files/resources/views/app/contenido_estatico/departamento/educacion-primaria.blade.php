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
                                <span><a href="{{ route('footer.contacto') }}">Contactos <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Educación Primaria</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <!--Inicio Contenido-->
                <div class="container mb-4">
                    <h3>Educación Primaria</h3>
                    <div class="container">
                        <div class="row border border-dark">
                            <div class="col-12 py-2 px-2 bg-light border border-dark border-top-0 border-right-0 border-left-0"><span class="font-weight-bold">Contacto</span></div>
                            <div class="col-12 py-2">
                                Calle 9 esq. 110, General Pico<br>
                                Tel: 02302-421041<br>
                                <a class="d-none d-sm-none d-md-block d-lg-block" href="mailto:deptoeducprimaria@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> deptoeducprimaria@humanas.unlpam.edu.ar</a>
			                    <a class="d-block d-sm-block d-md-none d-lg-none" href="mailto:deptoeducprimaria@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> deptoeducprimaria<br>@humanas.unlpam.edu.ar</a>                                
                            </div>
                            <div class="col-12 py-2 bg-light border border-dark border-right-0 border-left-0"><span class="font-weight-bold">Consejo Departamental</span></div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Directora: </span>
                            </div>


                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                DELGADO, María Verónica
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Profesores:</span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                <span class="font-weight-bold">Titular: </span>Suárez Vranken, César Roberto<br>
                                <span class="font-weight-bold">Suplente: </span>Garayo, Perla Viviana
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Auxiliares:</span>
                            </div>                            

                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Cisneros, Claudia Elisabet<br>
                                <span class="font-weight-bold">Suplente: </span>Sifón, Verónica Valeria
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Graduados:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Ortellado, María José<br>
                                <span class="font-weight-bold">Suplente: </span>Gómez, María Paula
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Estudiantes:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Godoy Gonzalo, Elias Gabriel<br>
                                <span class="font-weight-bold">Suplente: </span>Romero, Paula Elisabet
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
