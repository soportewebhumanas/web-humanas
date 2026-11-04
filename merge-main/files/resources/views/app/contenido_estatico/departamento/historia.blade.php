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
                                <span class="b-active">Historia</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <!--Inicio Contenido-->
                <div class="container mb-4">
                    <h3>Historia</h3>
                    <div class="container">
                        <div class="row border border-dark">
                            <div class="col-12 py-2 px-2 bg-light border border-dark border-top-0 border-left-0 border-right-0"><span class="font-weight-bold">Contacto</span></div>
                            <div class="col-12 py-2">
                                Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br>
                                Tel: 02954-451617<br>
                                <a class="d-none d-sm-none d-md-block d-lg-block" href="mailto:departamentohistoria@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> departamentohistoria@humanas.unlpam.edu.ar</a>
			                    <a class="d-block d-sm-block d-md-none d-lg-none" href="mailto:departamentohistoria@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> departamentohistoria<br>@humanas.unlpam.edu.ar</a>
                            </div>
                            <div class="col-12 py-2 bg-light border border-dark border-right-0 border-left-0"><span class="font-weight-bold">Consejo Departamental</span></div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Directora: </span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                CORNELIS, Stella Maris
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Profesores:</span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                <span class="font-weight-bold">Titular: </span>Sánchez, Rocío Guadalupe<br>
                                <span class="font-weight-bold">Suplente: </span>Alonso, Aldo Fabio
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Auxiliares:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Monasterolo, Elvio<br>
                                <span class="font-weight-bold">Suplente: </span>Arrizabalaga, Dolores 
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Graduados:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Sol, José lgnacio<br>
                                <span class="font-weight-bold">Suplente: </span>Fernández Lambrecht, Micaela 
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Estudiantes:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Mauricio Andrés Alberca<br>
                                <span class="font-weight-bold">Suplente: </span>María Florencia Juárez Aciar
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
