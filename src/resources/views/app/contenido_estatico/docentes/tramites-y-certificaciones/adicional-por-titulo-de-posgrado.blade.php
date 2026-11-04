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
                                <span><a href="{{route('docentes.inicio')}}">Docentes <i class='fa fa-angle-right'></i></a></span> 
                                <span><a href="{{route('docentes.tramites_y_certificaciones')}}">Trámites y Certificaciones <i class='fa fa-angle-right'></i></a></span>  
                                <span class="b-active">Adicional por Título de Posgrado</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Adicional por Título de Posgrado</h3>
                            <p class="text-justify">
                            Se informa a los docentes universitarios y/o preuniversitarios de la UNLPam que se encuentra abierta la convocatoria para adherirse al beneficio del adicional por: Títulos de Especialización, Maestría y Doctorado. Dicho adicional remunerativo no bonificable equivale al 5%; 8% y 18% respectivamente sobre el sueldo básico que se pagará a partir del 1º de diciembre de 2016, una vez que el interesado acredite el cumplimiento de la documentación correspondiente. Este adicional se pagará por cada cargo de revista y solamente por un título, no siendo acumulables.<br>
                            <br>
                            DOCUMENTACIÓN DIGITAL A PRESENTAR<br>
                            1.	Nota de solicitud del beneficio, presentada por el docente por Mesa de Entradas de la Facultad, en la cual deberá indicar:-CUIL/CUIT, -Apellido y nombre, Descripción del título de posgrado, -País de la Entidad Otorgante, -Entidad Otorgante, -Fecha de Emisión del Título, -N° De Resolución de Acreditación de la Carrera de posgrado emitido por la CONEAU, -N° De Resolución Ministerial, -Firma del docente solicitante.<br>
                            2.	Título de posgrado correspondiente, legalizado por el Ministerio de Educación. En caso de poseer un título de educación extranjero, deberá contar con la debida acreditación de un organismo equivalente a la Comisión Nacional de Evaluación y Acreditación Universitaria. En caso de no existir organismo similar, se deberá dejar constancia del cumplimiento de los mecanismos de validación vigentes en el país otorgante del título. Finalmente, deberá encontrarse legalizado con Apostillado de La Haya o equivalente. <br>
                            3.	Resolución de Acreditación de la Carrera de posgrado, emitido por la CONEAU.<br>
                            4.	Resolución Ministerial de la Carrera de posgrado.<br>
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
