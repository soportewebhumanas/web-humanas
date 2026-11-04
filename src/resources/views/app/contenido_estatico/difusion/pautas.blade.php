@extends('app.slim.layouts.home')

@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-text ">
                                <p>
                                    <span>
                                        <a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a>
                                    </span>
                                    <span>
                                        <a href="https://www.humanas.unlpam.edu.ar/programas-institucionales/12">Formación Permanente para Graduadas y Graduados <i class='fa fa-angle-right'></i></a>
                                    </span>                                     
                                    <span class="b-active">Pautas para la presentación de propuestas</span>
                                </p>
                            </div>
                            <div class="col-12 text-justify">
                                <h3>Pautas para la presentación de propuestas</h3>
                                En los Programas de las propuestas que se presenten, se debe explicitar:<br><br>
                                1. Modalidad de dictado: virtual, presencial, híbrido, con detalle de la modalidad.<br>
                                2. Se sugiere que el dictado de las actividades y propuestas se realice a partir de las 18 hs, para asegurar la participación de la comunidad graduada y facilitar el pedido de licencias laborales.<br>
                                3. Requisito de aprobación: se debe explicitar en el Programa el tipo de evaluación que se solicitará para acreditar el curso/taller/seminario.<br>
                                4. Requisito de asistencia: se debe explicitar en el Programa la carga horaria para cumplir con este requisito.<br>
                                5. Plazos de entrega del trabajo final: 2 meses a partir de la fecha de último encuentro.<br>
                                6. Plazos de corrección del trabajo final: Las/os docentes tienen un mes para la corrección de los trabajos finales. Luego deben remitir a Secretaría de Investigación y Posgrado la nómina de quienes cumplan con el requisito de asistencia y estén habilitados para entregar el trabajo final. La Secretaría elaborará un acta. la cual deberá completarse con fecha y condición. Los trabajos se califican como “aprobados” o “desaprobados”.<br>
                                7. Certificaciones: La Secretaría de Investigación y Posgrado emite los certificados de asistencia y/o aprobación de los cursos/talleres/ seminarios que se dicten en el marco del Programa de Formación Permanente para graduadas/os de la Facultad de Ciencias Humanas.<br>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <br><br>
                </div>
            </section>
        </div>
    </section>
@endsection