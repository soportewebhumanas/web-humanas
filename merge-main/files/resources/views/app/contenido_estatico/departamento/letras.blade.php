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
                                <span class="b-active">Letras</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <!--Inicio Contenido-->
                <div class="container mb-4">
                    <h3>Letras</h3>
                    <div class="container">
                        <div class="row border border-dark">
                            <div class="col-12 py-2 px-2 bg-light border border-dark border-right-0 border-left-0 border-top-0"><span class="font-weight-bold">Contacto</span></div>
                            <div class="col-12 py-2">
                                Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br>
                                Tel: 02954-451630<br>
                                <a class="d-none d-sm-none d-md-block d-lg-block" href="mailto:departamentoletras@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> departamentoletras@humanas.unlpam.edu.ar</a>
			                    <a class="d-block d-sm-block d-md-none d-lg-none" href="mailto:departamentoletras@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> departamentoletras<br>@humanas.unlpam.edu.ar</a>                                
                            </div>
                            <div class="col-12 py-2 bg-light border border-dark border-right-0 border-left-0"><span class="font-weight-bold">Consejo Departamental</span></div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Directora: </span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                ELIZALDE, Marisa Eugenia
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Profesores:</span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                <span class="font-weight-bold">Titular: </span>Domínguez, María Carolina<br>
                                <span class="font-weight-bold">Suplente: </span>Conchez Silva, Eugenio
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Auxiliares:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Pérez, Laura<br>
                                <span class="font-weight-bold">Suplente: </span>Arias, Aída
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Graduados:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Alvarez Masi, Pilar<br>
                                <span class="font-weight-bold">Suplente: </span>Ricard, Patricia Belén
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Estudiantes:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Meder, María Guadalupe<br>
                                <span class="font-weight-bold">Suplente: </span>Laborde, Jeremías Emanuel
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
