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
                                <span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                <span><a href="{{route('carreras.posgrado.carreras-posgrado')}}">Carreras de Posgrado <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Aranceles</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <!--<h3 class="text-justify pb-0">Aranceles para carreras de posgrado de Maestría y Especialización que se dictan en el ámbito de esta unidad académica</h3>-->
                            <h3 class="text-justify" style="color: #1B365D">
                                Aranceles de Carreras y Seminarios de Posgrado 2026
                            </h3>
                            <!--<p class="text-justify"><i class="fas fa-file-pdf text-danger"></i><a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2025_21.pdf" target="_blank"> Res. 21-CD-2025</a></p>-->
                            <p class="text-justify"><i class="fas fa-file-pdf text-danger"></i><a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2026_396.pdf" target="_blank"> Res. 396-CD-2026</a></p>
                            <p class="text-justify">
                                ACTUALIZACIÓN ARANCELES DE LA OFERTA DE POSGRADO 2026
                                <br><br>
                                Aranceles para estudiantes que realicen un seminario de manera vocacional de carrera de Especialización y Maestría Modalidad presencial, a distancia o combinada.
                                <br><br>
                                Arancel: $100.000 (pesos cien mil) – Personas extranjeras: USD 100 (dólares cien)<br>
                                Docentes, nodocentes y personas graduadas de la FCH: 10 % de descuento
                                <br><br>
                                Carreras de posgrado con sistema de pago en cuotas<br>
                                Especializaciones a distancia y presencial<br>
                                Cuota mensual: $90.000 (pesos noventa mil) – Personas extranjeras: USD 90 (dólares noventa)<br>
                                Docentes, nodocentes y personas graduadas de la FCH: 10 % de descuento<br>
                                <br><br>
                                Maestrías a distancia y presencial<br>
                                Cuota mensual: $90.000 (pesos noventa mil) – Personas extranjeras: USD 90 (dólares noventa)<br>
                                Docentes, nodocentes y personas graduadas de la FCH: 10 % de descuento<br>
                                Defensa de: Trabajo Final de Especialización y Tesis<br>
                                TFE: $100.000 (pesos cien mil)<br>
                                TESIS: $100.000 (pesos cien mil)<br>
                                <br><br>
                                Acreditación de idioma extranjero nivel posgrado<br>
                                Curso de acreditación de idioma extranjero nivel posgrado: $120.000 (pesos ciento veinte mil) –<br>
                                Personas extranjeras: USD 120 (dólares ciento veinte)<br>
                                Examen libre de acreditación de idioma extranjero nivel posgrado: $110.000 (pesos ciento diez<br>
                                mil) – Personas extranjeras: USD 110 (dólares ciento diez)<br>
                                <br><br>
                                Seminarios de posgrado extracurriculares arancelados<br>
                                Modalidad presencial, a distancia o combinada.<br>
                                Arancel: $110.000 (pesos ciento diez mil) – Personas extranjeras: USD 110 (dólares ciento diez)<br>
                                Docentes, nodocentes y personas graduadas de la FCH: 10 % de descuento.<br>

                                <!--
                                ACTUALIZACIÓN ARANCELES DE LA OFERTA DE POSGRADO 2025
                                <br><br>
                                Aranceles para estudiantes de carrera de Especialización<br>
                                Seminarios<br>
                                Carga horaria mínima: 40 hs.<br>
                                Cupo mínimo: 10 estudiantes<br>
                                Modalidad presencial, a distancia o combinada.<br>
                                Arancel: $40.000 (cuarenta mil)<br>
                                Docentes y personas graduadas de la FCH: 10 % de descuento
                                <br><br>
                                Aranceles para estudiantes de carrera de Maestría<br>
                                Seminarios<br>
                                Carga horaria mínima: 40 hs.<br>
                                Cupo mínimo: 10 estudiantes<br>
                                Modalidad presencial, a distancia o combinada<br>
                                Arancel: $40.000 (cuarenta mil)<br>
                                Docentes y personas graduadas de la FCH: 10 % de descuento
                                <br><br>
                                Carreras de posgrado con sistema de pago en cuotas<br>
                                Especialización en Docencia en Educación Superior, a distancia<br>
                                Cuota mensual: $ 30.000 (treinta mil)<br>
                                Docentes de la FCH y personas graduadas de la UNLPam: 10% de descuento
                                <br><br>
                                Maestría en Docencia en Educación Superior, a distancia<br>
                                Cuota mensual: $ 30.000 (treinta mil)<br>
                                Docentes de la FCH y personas graduadas de la UNLPam: 10% de descuento
                                <br><br>
                                Defensa de Tesis de Maestría y de Trabajos Finales de Especialización<br>
                                Arancel: $ 50.000 (cincuenta mil)<br>
                                Acreditación de idioma extranjero nivel posgrado<br>
                                Curso de acreditación de idioma extranjero nivel posgrado: $60.000 (sesenta mil)<br>
                                Examen libre de acreditación de idioma extranjero nivel posgrado: $60.000 (sesenta mil)
                                <br><br>
                                Seminarios de posgrado arancelados/ Seminarios que cursan estudiantes vocacionales<br>
                                de todas las carreras de posgrado vigentes<br>
                                Carga horaria mínima: 40 hs.<br>
                                Cupo mínimo para seminarios de posgrado: 10 estudiantes<br>
                                Modalidad presencial, a distancia o combinada.<br>
                                Arancel: $60.000 (sesenta mil)<br>
                                Docentes y personas graduadas de la FCH: 15 % de descuento<br><br>
                                -->
                            </p>
                            <!--<h4 class="text-justify" style="color: #1B365D">Carreras aprobadas por CONEAU que pueden abrir cohorte durante 2024</h4>
                            <p class="text-justify">
                                <b class="font-weight-bold" style="color: #1B365D">ESPECIALIZACIÓN EN DOCENCIA EN EDUCACIÓN SUPERIOR, modalidad a distancia</b><br>
                                •&emsp;Matrícula: $ 30.000 (se puede abonar en dos cuotas).<br>
                                •&emsp;Valor de la cuota: $20.000 valor sujeto a revisión cada 3 meses.<br>
                                •&emsp;Cantidad: 18 cuotas.<br>
                                •&emsp;Graduadas/os de la UNLPam y docentes de la FCH: 10 % de descuento en el valor
                                de la cuota.<br>
                                •&emsp;Estudiantes vocacionales: $45.000.<br><br>
                                
                                <b class="font-weight-bold" style="color: #1B365D">MAESTRÍA EN DOCENCIA EN EDUCACIÓN SUPERIOR, modalidad a distancia</b><br>
                                •&emsp;Matrícula: $ 40.000 (se puede abonar en dos cuotas).<br>
                                •&emsp;Valor de la cuota: $ 20.000 valor sujeto a revisión cada 3 meses.<br>
                                •&emsp;Cantidad de cuotas: 24.<br>
                                •&emsp;Graduadas/os de la UNLPam y docentes de la FCH: 10 % de descuento en el valor
                                de la cuota.<br>
                                •&emsp;Estudiantes vocacionales: $ 45.000.<br><br>
                                Para las personas que se inscriban en ambas carreras, se cobra de la siguiente manera: Valor de las dos matrículas: ($ 70.000 en dos pagos) y las cuotas mensuales correspondientes a los valores establecidos para la Maestría.<br><br>
                                
                                <b class="font-weight-bold" style="color: #1B365D">ESPECIALIZACIÓN EN ENSEÑANZA DE LA LENGUA Y LA LITERATURA, modalidad presencial</b><br>
                                •&emsp;Matrícula: $ 30.000 (se puede abonar en dos cuotas).<br>
                                •&emsp;Valor de la cuota: $ 20.000 valor sujeto a revisión cada 3 meses.<br>
                                •&emsp;Cantidad: 24 cuotas.<br>
                                •&emsp;Graduadas/os de la UNLPam y docentes de la FCH: 10 % de descuento en el valor
                                de la cuota.<br><br>
                            </p>

                            <h4 class="text-justify" style="color: #1B365D">Carreras de posgrado con cohortes vigentes en 2024</h4>
                            <p class="text-justify">
                                
                                <b class="font-weight-bold" style="color: #1B365D">ESPECIALIZACIÓN, modalidad a distancia</b><br>
                                •&emsp;Defensa de tesis: $ 40.000.<br><br>
                                
                                <b class="font-weight-bold" style="color: #1B365D">ESPECIALIZACIÓN, modalidad presencial</b><br>
                                Seminarios de Especialización<br>
                                •&emsp;Estudiantes de la carrera: $ 30.000.<br>
                                •&emsp;Estudiantes vocacionales: $ 40.000.<br>
                                •&emsp;Estudiantes vocacionales graduadas/os de la UNLPam y docentes de la FCH: 5% de descuento sobre el valor establecido para estudiantes vocacionales.<br>
                                •&emsp;Defensa de tesis: $ 40.000.<br><br>
                                
                                <b class="font-weight-bold" style="color: #1B365D">MAESTRÍA, modalidad presencial</b><br>
                                Seminarios de Maestría<br>
                                •&emsp;Estudiantes de la carrera: $ 30.000.<br>
                                •&emsp;Estudiantes vocacionales: $ 40.000.<br>
                                •&emsp;Estudiantes vocacionales graduadas/os de la UNLPam y docentes de la FCH: 5% de descuento sobre el valor establecido para estudiantes vocacionales.<br>
                                •&emsp;Defensa de tesis: $ 40.000.<br><br>
                                
                                <b class="font-weight-bold" style="color: #1B365D">Para todas las carreras que así lo establezcan<br>
                                Acreditación de idioma extranjero</b><br>
                                •&emsp;Examen libre de acreditación de nivel extranjero: $ 40.000.<br>
                                •&emsp;Seminario de acreditación de nivel extranjero: $ 40.000.<br><br>
                            </p>-->
                            <!--<p class="text-justify text-dark">
                                <i class="fas fa-file-pdf text-danger"></i><a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2023_455.pdf" target="_blank"> Res. 455-CD-2023</a><br>
                                <br>
                                <b>Maestría modalidad presencial</b><br>
                                Matrícula: $27.000, 00 a pagar en hasta dos cuotas de $ 13.500, 00<br>
                                Seminario: $ 13.500, 00<br>
                                Defensa de tesis: $ 27.000, 00<br>

                                <br>
                                <b>Acreditación de idioma nivel posgrado</b><br>
                                Curso-taller de idioma: $ 13.500, 00<br>
                                Examen de idioma: $ 13.500, 00<br>

                                <br>
                                <b>Especialización modalidad presencial</b><br>
                                Matrícula: $24.000, 00<br>
                                Seminario: $12.000, 00<br>
                                Defensa de tesis/trabajo final: $27.000, 00<br>

                                <br>
                                <b>Especialización modalidad a distancia</b><br>
                                Matrícula: $30.000,00 a pagar en hasta dos cuotas de $ 15.000,00<br>
                                Seminario: $ 16.500,00<br>
                                Defensa de trabajo final: $27.000, 00<br>

                                <br>
                                <b>Estudiantes vocacionales (carreras a distancia y presenciales)</b><br>
                                Seminarios de Maestría: $ 15.000, 00<br>	
                                Seminarios de Especialización: $ 13.500,00<br> 
                                Seminarios de Especialización a distancia: $ 18.000, 00<br>

                            </p>-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>


@endsection