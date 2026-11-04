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
                            <span class="b-active">Comunicación Social</span>
                        </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <!--Inicio Contenido-->
                <div class="container mb-4">
                    <h3>Comunicación Social</h3>
                    <div class="container">
                        <div class="row border border-dark">
                            <div class="col-12 py-2 px-2 bg-light border border-dark border-top-0 border-right-0 border-left-0"><span class="font-weight-bold">Contacto</span></div>
                            <div class="col-12 py-2">
                                Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br>
                                Tel: 02954-451651<br>
                                <a class="d-none d-sm-none d-md-block d-lg-block" href="mailto:comunicacion@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> comunicacion@humanas.unlpam.edu.ar</a>
			                    <a class="d-block d-sm-block d-md-none d-lg-none" href="mailto:comunicacion@humanas.unlpam.edu.ar"><i class="far fa-envelope"></i> comunicacion<br>@humanas.unlpam.edu.ar</a>                                
                            </div>
                            <div class="col-12 py-2 bg-light border border-dark border-right-0 border-left-0"><span class="font-weight-bold">Consejo Departamental</span></div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Directora: </span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                MARTINEZ, Silvina Cora
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Profesores:</span>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                <span class="font-weight-bold">Titular: </span>D'Atri, Andrea <br>
                                <span class="font-weight-bold">Suplente: </span>Pulleiro, Adrián
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Auxiliares:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                <span class="font-weight-bold">Titular: </span>García, María Soledad<br>
                                <span class="font-weight-bold">Suplente: </span>Hartwig Acosta, Virginia 
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Graduados:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">
                                <span class="font-weight-bold">Titular: </span>Toffoni, Aixa<br>
                                <span class="font-weight-bold">Suplente: </span>Servetto, Micaela
                            </div>
                            <div class="col-12 col-lg-6 py-2 bg-light">
                                <span class="font-weight-bold">Estudiantes:</span>
                            </div>                            
                            <div class="col-12 col-sm-6 col-lg-6 py-2">                                
                                <span class="font-weight-bold">Titular: </span>Noguera, María de los Ángeles <br>
                                <span class="font-weight-bold">Suplente: </span>Medina, Ignacio Ezequiel
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
