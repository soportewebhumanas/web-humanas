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
                                <span><a href="{{route('nodocentes.inicio')}}">NoDocentes <i class='fa fa-angle-right'></i></a></span> 
                                <span class="b-active">Convenio Colectivo de Trabajo</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Convenio Colectivo de Trabajo</h3>
                            <p class="text-justify">
                                El <a href="https://www.fatun.org.ar/convenio" target="_blank">Convenio Colectivo de Trabajo</a> para el Sector No Docente de las Instituciones Universitarias Nacionales fue celebrado por el Consejo Interuniversitario Nacional y la Federación Argentina de Trabajadores de las Universidades Nacionales en el año 2005. 
                                Las/os trabajadoras/es nodocentes de las Instituciones Universitarias nacionales tienen los siguientes derechos:
                            </p>
                            <ol type="a" class="text-justify text-secondary">
                                <li>Estabilidad.</li>
                                <li>Retribución por sus servicios.</li>
                                <li>Igualdad de oportunidades en la carrera.</li>
                                <li>Capacitación permanente.</li>
                                <li>Libre agremiación y negociación colectiva.</li>
                                <li>Licencias, justificaciones y franquicias.</li>
                                <li>Renuncia.</li>
                                <li>Jubilación o retiro.</li>
                                <li>Condiciones adecuadas que aseguren la higiene y seguridad en el trabajo.</li>
                                <li>Derecho a la información de conformidad con lo establecido por la Recomendación número 163 de la OIT.</li>
                                <li>Asistencia Social para sí y su familia, de acuerdo a la legislación vigente.</li>
                                <li>Compensaciones e indemnizaciones.</li>
                                <li>Interposición de recursos.</li>
                                <li>Participación por intermedio de las Organizaciones Gremiales, de acuerdo al presente Convenio.</li>
                            </ol>    
                            <p class="text-justify">
                                La presente enumeración no es taxativa, y se enuncia sin perjuicio de los acuerdos paritarios locales.
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
