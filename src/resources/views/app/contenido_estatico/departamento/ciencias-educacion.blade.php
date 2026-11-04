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
                                <span class="b-active">Ciencias de la Educación</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <!-- Contenido Principal -->
                <div class="container mb-4">
                    <h3>Ciencias de la Educación</h3>
                    <div class="container">
                        <div class="row border border-dark">
                            <div class="col-12 py-2 px-2 bg-light border border-dark border-top-0 border-right-0 border-left-0"><span class="font-weight-bold">Contacto</span></div>
                            <div class="col-12 py-2">
                                Calle 9 esq. 110, General Pico<br>
                                Tel: 02302-421041<br>
                                <a class="d-none d-sm-none d-md-block d-lg-block" href="mailto:deptocseduc@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> deptocseduc@humanas.unlpam.edu.ar</a>
			                    <a class="d-block d-sm-block d-md-none d-lg-none" href="mailto:deptocseduc@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> deptocseduc<br>@humanas.unlpam.edu.ar</a>

                            </div>
                            <div class="col-12 py-2 bg-light border border-dark border-right-0 border-left-0"><span class="font-weight-bold">Consejo Departamental</span></div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Directora: </span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                QUIPILDOR, Silvia Cristina
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Profesoras/es:</span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                <span class="font-weight-bold">Titular: </span>Martín, Sebastián<br>
                                <span class="font-weight-bold">Suplente: </span>Azcona, Laura Noemí
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Auxiliares:</span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Pizarro, Daniela de los Ángeles<br>
                                <span class="font-weight-bold">Suplente: </span>Moro, Erica Elizabeth
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Graduados:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Cortessi, Karina Vanesa<br>
                                <span class="font-weight-bold">Suplente: </span>Galdame, Fernando Emanuel
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Estudiantes:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Toranzo Montalbo, Andrea Silvia<br>
                                <span class="font-weight-bold">Suplente: </span>Ferreyra, Juan Ignacio
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contenido Principal -->
                </div>
            </section>
        </div>
    </section>


@endsection
