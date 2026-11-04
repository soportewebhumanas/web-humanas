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
                                <span class="b-active">
                                    Convocatoria: Selección de Director/a y Codirector/a del IELES
                                    <!-- Título del conetnido a difundir -->
                                    <!--
                                        ...
                                    -->
                                </span>
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
                        <h3>
                            Convocatoria: Selección de Director/a y Codirector/a del IELES
                            <!-- Título del conetenido a difundir para mostrar en el cuerpo-->
                            <!--
                                ...
                            -->
                        </h3>
                        <p>
                            Desde la Secretaría de Investigación y Posgrado de la Facultad de Ciencias Humanas les informamos que el 19 de junio de 2026, el Consejo Directivo de nuestra Facultad aprobó la Resolución N° 212.<br>
                            <br>
                            Mediante este acto administrativo, se aprobó la convocatoria para la realización del llamado a selección de antecedentes de aspirantes para cubrir los cargos de Director/a y, en forma opcional, de Codirector/a, del Instituto para la Educación, el Lenguaje y la Sociedad (IELES) de esta Unidad Académica.<br>
                            <br>
                            Asimismo, les comunicamos que se han designado a las y los integrantes de la Comisión de especialistas encargadas/os de evaluar las presentaciones de las/os aspirantes, la cual quedó conformada de la siguiente manera:<br>
                            Miembros Titulares: Dr. José Rivas Flores (Universidad de Málaga); Dr. Juan Franco (UNLPam); Dra. Hebe Roig (UBA)<br>
                            Miembros Suplentes: Dr. Luis Porta (UNMdP); Dra. Graciela Di Franco (UNLPam); Mg. Rita de Pascuale (UNComa)<br>
                            <br>
                            Agradecemos la colaboración en la máxima difusión de este llamado entre sus equipos docentes, de investigación y graduados/as, cuyos plazos y condiciones se detallan a continuación:<br>
                            <br>
                            Cronograma de la Convocatoria<br>
                            Período de publicación y difusión: Del 22 de junio al 3 de julio de 2026 (a través de la página web de la Facultad de Ciencias Humanas y demás medios de comunicación institucional).<br>
                            <br>
                            Plazo de presentación de antecedentes: Desde el 6 de julio hasta el 19 de agosto de 2026.<br>
                            Modalidad de entrega: en formato digital, a través de las Mesas de Entradas de ambas sedes de nuestra Facultad.<br>
                            <!-- Desarrollo del contenido -->
                            <!--
                                ...
                            -->
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