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
                                <span><a href="{{route('comunidad-graduada.comunidad_graduada')}}">Comunidad Graduada <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Programa de Formación Permanente</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                            <h3 class="text-justify">Programa de Formación Permanente</h3>
                            <p class="text-justify">
                                El Estatuto de la UNLPam establece que  “La Universidad es una comunidad de docentes, estudiantes, graduados y personal no docente. Procura la formación integral y armónica de sus componentes e infunde en ellos rectitud moral, responsabilidad cívica y convicciones democráticas. Forma investigadores originales, profesionales idóneos y docentes de carrera, socialmente comprometidos y dispuestos a servir a un modelo de país políticamente libre, económicamente independiente y socialmente justo. Encauza a los graduados en la enseñanza y en las tareas de investigación y a través de ellos estrecha su relación con la sociedad. Desarrolla instancias de autoevaluación en procura de un mejoramiento de las actividades académicas.” Asimismo, en el Plan Estratégico y Plan de Desarrollo Institucional 2016-2020 de la UNLPam, se establece como objetivo “Estimular la participación de graduados en el ámbito académico”, justificado en lo siguiente: “Los graduados deben continuar siendo parte de la institución, tanto por su accionar político en el respectivo claustro, como a través de políticas específicas que incorporen su experiencia para, de esa manera, determinar parte de las estrategias de accionar futuro. La Universidad, además, debe continuar brindando capacitación para los graduados, detectando los límites y falencias de su formación y sus necesidades de actualización.”<br><br>
                                En efecto, la Facultad de Ciencias Humanas aprobó  por <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_4_2019_538.pdf" target="_blank">Resolución 538-CD-2019</a>  el “Programa de Formación Permanente para Graduadas/os de la Facultad de Ciencias Humanas” con los objetivos de brindar a su comunidad graduada una oferta de formación y capacitación actualizada y permanente; ofrecer a graduadas/os de otras instituciones del sistema de educación superior posibilidades de formación y actualización; generar propuestas innovadoras de enseñanza para todos los niveles del sistema educativo; coordinar la oferta de cursos, seminarios y talleres extracurriculares que brindan los Departamentos e Institutos de la Facultad, a fin de organizar los períodos y las modalidades de presentación; ampliar la oferta de actualización y de formación para graduadas/os, a los efectos de dar respuesta a las diversas necesidades planteadas en los últimos años, vinculadas con las profundas transformaciones en los contextos socioculturales, educativos y profesionales. 
                            </p>
                            <h3 class="text-justify">Cursos y Seminarios Extracurriculares</h3>
                            <ul class="text-primary text-justify">
                                <li><a href="{{route('cursos_2021')}}">2021</a></li>
                                <li><a href="{{route('cursos_2020')}}">2020</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
