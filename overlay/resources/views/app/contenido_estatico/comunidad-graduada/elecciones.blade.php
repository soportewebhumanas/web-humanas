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
                                <span class="b-active">Elecciones</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row row-cols-1">
                    <!--Inicio Contenido-->
                            <div class="container mb-4 my-2">
                                <h3>Elecciones Generales 2026</h3>
                                <p class="text-justify text-dark">
                                    La UNLPam acerca a la comunidad de graduados información sobre las elecciones generales 2026, como canales de difusión, consultas y participación.<br> 
                                    La fecha para la realización del acto comicial es el miércoles 22 de Abril de 2026 en el horario de 8:00 a 18:00, en cada una de las Unidades Académicas y en el Rectorado de la UNLPam con la modalidad del voto tradicional.<br>
                                    En ese acto se elegirán los cargos de los siguientes órganos de gobierno:<br><br>
                                    •	Rector y Vicerrector<br>
                                    •	Decano y Vicedecano<br>
                                    •	Representantes en el Consejo Superior y los Consejos Directivos en los Claustros de:<br>
                                    &nbsp -	DOCENTES<br>
                                    &nbsp -	ESTUDIANTES<br>
                                    &nbsp -	GRADUADOS<br>
                                    &nbsp -	PERSONAL NODOCENTE<br>
                                    <br>
                                    Se establecen para los distintos actos correspondientes al proceso electoral, cronogramas, sitios y accesos para consultar y participar. <br>
                                    Ante cualquier duda los contactos a los cuales dirigirse son:<br> 
                                    
                                    Junta Electoral de la Sede Santa Rosa: <a href="mailto:juntaelectoralsr@humanas.unlpam.edu.ar">juntaelectoralsr@humanas.unlpam.edu.ar</a><br>
                                    Junta Electoral de la Sede General Pico: <a href="mailto:juntaelectoralgp@humanas.unlpam.edu.ar">juntaelectoralgp@humanas.unlpam.edu.ar</a><br>
                                    <br>
                                    Para consultas de:<br> 
                                    •	Normativa<br>
                                    •	Boletas<br>
                                    •	Resultados<br>
                                    •	Listas<br>
                                    •	Actas<br>
                                    •	Padrones<br>
                                    •	Formularios<br>
                                    •	Elecciones Anteriores<br>
                                    <br>
                                        El acceso es <a href="https://www.unlpam.edu.ar/elecciones-unlpam" target="_blank">sitio web UNLPam</a><br>
                                    <br>
                                </p>
                                
                                <h5>PARA ELECTORES:</h5>
                                <p class="text-justify text-dark">
                                    Si no estás en Padrones y querés votar o elegir y/o cambiar Sede, se encuentra el formulario correspondiente.  Una vez completo debes enviar el mismo a la Junta/Sede que hayas elegido para votar (Santa Rosa – General Pico).<br>
                                    <br>
                                    Para inclusión en el padrón: 
                                    <a href="https://www.unlpam.edu.ar/images/elecciones/formularios/electores/GRADUADOS_-_formulario_solicitud_de_inclusion_en_padron_.docx" target="_blank">Aquí</a><br>
                                    <br>
                                    Para opción de padrón: 
                                    <a href="https://www.unlpam.edu.ar/images/elecciones/formularios/electores/OPCION_DE_PADRON_.doc" target="_blank">Aquí</a><br>
                                    <br>
                                    Para reclamos por modificaciones al padrón: 
                                    <a href="https://www.unlpam.edu.ar/images/elecciones/formularios/electores/Reclamos_por_modificaciones_al_Padron_.doc" target="_blank">Aquí</a><br>
                                </p>
                            </div>
                    <!--Fin Contenido-->


                    </div>
                </div>
            </section>
        </div>
    </section>


@endsection


<script src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('body').addClass('become_teachers');
        moment.locale('es');
        $('.fecha').each(function() {
            var fecha = $(this).text();
            var fecha_formateada = moment(fecha).fromNow()
            $(this).text(fecha_formateada);
        });
        
    });
</script>