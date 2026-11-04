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
                                <span><a href="{{route('carreras.posgrado.carreras-posgrado')}}">Carreras Posgrado <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Especializaciones</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                <!-- Contenido -->
                <div class="container mb-4 border border-dark">
                    <div class="row overflow-auto">
                        <!--Especialización en Docencia en Educación Superior-->
                        <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 border-top-0">
                            <span class="font-weight-bold"><a href="{{route('carreras.posgrado.especializacion.esp_doc_ed_superior')}}">Especialización en Docencia en Educación Superior</a></span><br>
                        </div>
                            <!--<div class="col-3 py-2 font-weight-bold bg-light my-0">Directora</div>
                            <div class="col-9 py-2">...</div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Cordinadora</div>
                            <div class="col-9 py-2">...</div>-->
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Consejo Académico</div>
                            <div class="col-9 py-2">Dra. Lía Norberto, Dra. Sonia Alzamora, Dra. Graciela Di Franco</div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Acreditación CONEAU</div>
                            <div class="col-9 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1-znHP1IRGkNeLBOGV59hG51yksi55cXn/view?usp=sharing" target="_blank">Res. Ministerial 561/17 - Categorizada B</a></div>
                            <div class="col-3 py-2 font-weight-bold bg-light my-0">Reconocimiento Oficial:</div>
                            <div class="col-9 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1S6NadZPJNYNItUngP0nbZniOOmb_m6cx/view?usp=sharing" target="_blank">Res. Ministerial Nº 1592/19</a></div>
                            <!--<div class="col-3 py-2 font-weight-bold bg-light my-0">Contacto</div>
                            <div class="col-9 py-2"><i class="far fa-envelope"></i> <a href="mailto:maestriayespdocenciaes@humanas.unlpam.edu.ar">maestriayespdocenciaes@humanas.unlpam.edu.ar</a></div>-->
                        <!--Especialización en Docencia en Educación Superior-->

                        <!--Especialización en Historia Regional-->
                        <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0">
                            <span class="font-weight-bold"><a href="{{route('carreras.posgrado.especializacion.esp_historia_regional')}}">Especialización en Historia Regional</a></span><br>
                        </div>		
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Directora</div>
                        <div class="col-9 py-2">Andrea Lluch</div>
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Cordinadora</div>
                        <div class="col-9 py-2">Ana Rodríguez</div>
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Consejo Académico</div>
                        <div class="col-9 py-2">María Silvia Di Liscia, Enrique Mases, Jorge Mitre Saab</div>
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Acreditación CONEAU</div>
                        <div class="col-9 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17BBdteL92l7C_Jjy3SoHl3lNFnDBNfMF/view?usp=sharing" target="_blank">Acta Nº 456/17</a></div>
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Reconocimiento Oficial:</div>
                        <div class="col-9 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1dpjeAHwr47Ia3ISWmvtA3DXiS--jqLsQ/view?usp=sharing" target="_blank">Res. Nº 111/19 del Min. de Ed. de la Nación</a></div>                        
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Contacto</div>
                        <div class="col-9 py-2"><i class="far fa-envelope"></i> <a href="mailto:especializacionhistoria@humanas.unlpam.edu.ar">especializacionhistoria@humanas.unlpam.edu.ar</a></div>
                        <!--Especialización en Historia Regional-->  

                        <!--Especialización en Enseñanza de la Lengua y la Literatura-->
                        <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0">
                            <span class="font-weight-bold"><a href="{{route('carreras.posgrado.especializacion.esp_ens_lengua_y_literatura')}}">Especialización en Enseñanza de la Lengua y la Literatura</a></span><br>
                        </div>		
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Directora</div>
                        <div class="col-9 py-2">Diana Moro</div>
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Cordinadora</div>
                        <div class="col-9 py-2">Nora Forte</div>
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Consejo Académico</div>
                        <div class="col-9 py-2">Silvia Spínelli, María Carolina Domínguez, Graciela Salto</div>
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Acreditación CONEAU</div>
                        <div class="col-9 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sFaDS8T_Kez9SYsODbGOwN5-b_XMZ4PD/view?usp=sharing" target="_blank">Acta Nº 449/16</a></div>
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Reconocimiento Oficial:</div>
                        <div class="col-9 py-2"><i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/16yqkKrarCF9PiKgC7aHuJP2h6IqIEV_n/view?usp=sharing" target="_blank">Res. Nº 2856-ME - Reconocimiento Provisorio del Título</a></div>                        
                        <div class="col-3 py-2 font-weight-bold bg-light my-0">Contacto</div>
                        <div class="col-9 py-2"><i class="far fa-envelope"></i> <a href="mailto:esp.ens.lenguayliteratura@humanas.unlpam.edu.ar">esp.ens.lenguayliteratura@humanas.unlpam.edu.ar</a></div>                        
                        <!--Especialización en Enseñanza de la Lengua y la Literatura-->

                        <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0">
                            <span class="font-weight-bold text-primary">Aranceles para carreras de Posgrado</span><br>
                        </div>
                        <div class="col-12 py-2 text-justify">
                            <a href="{{route('carreras.posgrado.aranceles.aranceles')}}">2022</a><br>
                        </div>                        
                        
                        <div class="col-12 py-2 text-justify bg-light border border-dark border-right-0 border-left-0 font-weight-bold">
                            Secretaría de Investigación y Posgrado
                        </div>
                        <div class="col-10 py-2 px-5">
                            <i class="fas fa-university"></i> Cnel. Gil 353, 2º Piso<br>
                            <i class="fas fa-phone"></i> (+54) 02954-451661<br>
                            <i class="far fa-envelope"></i> <a href="mailto:posgrado@humanas.unlpam.edu.ar">posgrado@humanas.unlpam.edu.ar</a><br>
                        </div>
                    </div>
                </div>
                <!-- Fin Contenido-->
                </div>
            </section>
        </div>
    </section>


@endsection
