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
                                <span><a href="{{ route('estudiantes.inicio') }}">Estudiantes <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Biblioteca</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Biblioteca</h3>
                            <p class="text-justify">
                                Las bibliotecas constituyen puertas de acceso a los conocimientos y a la cultura, desempeñan una función fundamental en la sociedad. Los recursos y los servicios que ofrecen dan la oportunidad de aprender, sirven como apoyo a la alfabetización y a la educación, y ayudan a dar forma a las nuevas ideas y perspectivas que son vitales dentro de una sociedad creativa e innovadora. Asimismo, garantizan la existencia de un registro auténtico de los saberes creados y acumulados por las generaciones pasadas. Si no existieran las bibliotecas, sería difícil avanzar en la investigación, en la preservación de los conocimientos acumulados y en el resguardo del patrimonio cultural para las generaciones futuras.<br><br>
                                Para ser usuario de la Biblioteca de la UNLPam deberás gestionar una credencial que es única e intransferible, con ella podrás tener acceso a todos sus servicios.<br>
                                En la Biblioteca de la UNLPam podés consultar diferentes bases de datos y catálogos:<br>
                                PAMPA: Libros en Biblioteca (contiene los registros de Documentos (libros, folletos, actas de congresos, tesis, seminarios, videos y títulos de artículos de publicaciones periódicas) existentes en las Bibliotecas y otras dependencias de la Universidad.<br>
                                KARDEX: reúne títulos de publicaciones periódicas disponibles en las Biblioteca.<br>
                                TAVERA: Colección Clásicos Tavera: colección de CD-ROM que reproduce en formato facsimilar, aproximadamente, 1530 títulos de obras clásicas, la mayoría de los cuales fueron editados antes de 1900 y cubren diversos temas y períodos de la historia de Iberoamérica y la Península Ibérica. La colección está estructurada en series, cada una integrada por un número variable de volúmenes (CD-Rom).<br>
                                También, podés encontrar materiales en las bibliotecas de los diferentes Institutos de Investigación y de los Departamentos de las Facultades de la UNLPam.<br>
                                <ul class="text-justify" style="color: #727272">
                                    <li>Instituto de Ciencias de la Educación para la Investigación Interdisciplinaria; Instituto de Estudios Americanos y Europeos; Instituto de Estudios Clásicos; Instituto de Estudios Socio-Históricos;  Instituto de Geografía; Instituto de Investigaciones Literarias y Discursivas; Instituto de Lingüística;  Instituto Interdisciplinario de Estudios de la Mujer; Instituto para el Estudio de la Educación, el Lenguaje y la Sociedad.</li>
                                    <li>Departamento de Lenguas Extranjeras, Departamento de Formación Docente y Departamento de Geografía, todos en la Facultad de Ciencias Humanas.</li>
                                </ul>
                            </p>
                            <p class="text-justify">
                                Entre otros servicios de la Biblioteca de la UNLPam se incluyen videoteca, hemeroteca, centro multimedial. 
                                Para más información podés dirigirte a la Biblioteca Central o consultar en la página web <a href="http://www.biblioteca.unlpam.edu.ar/">Biblioteca UNLPam</a><br>
                                Acceso al Catálogo y Gestión en línea de Bibliotecas UNLPam: <a href="https://koha.unlpam.edu.ar/"> Koha</a>                                  
                            </p>                            
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection