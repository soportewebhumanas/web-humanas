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
                                    <span class="b-active">Derechos de Estudiantes</span>
                                </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Derechos estudiantiles</h3>
                            <p class="text-justify">    
                                En nuestra Universidad los derechos y deberes de las y los estudiantes están reglamentados en la Resolución 139 del año 2001, cristalizando ahí años de luchas y resistencias de varias generaciones estudiantiles. Es un compromiso de les estudiantes conocerlos para defenderlos, y también repensarlos y actualizarlos a los tiempos que corren.
                                El estudiantado de la UNLPam goza de los siguientes derechos:
                                <ol class="text-justify text-secondary">
                                    <li>Participar en los órganos de gobierno y en las funciones académicas previstas en el Estatuto de la Universidad.</li>
                                    <li>Recibir los servicios estudiantiles, de salud, asistenciales, académicos, culturales y deportivos que la Universidad y legislación vigente brinden.</li>
                                    <li>Ser tratados conforme a la dignidad de toda persona por el resto de la comunidad universitaria.</li>
                                    <li>Participar en docencia, investigación y extensión universitaria, de acuerdo a la reglamentación vigente.</li>
                                    <li>Recibir becas, ayudas, subvenciones, aportes y créditos que la Universidad disponga.</li>
                                    <li>Reunirse en las dependencias de la Universidad.</li>
                                    <li>A la libertad de expresión, de asociación y de prensa dentro del ámbito universitario,</li>
                                    <li>A la confidencialidad de los datos de su expediente académico, estableciéndose en cada Unidad Académica, un mecanismo rápido de corrección, supresión o actualización de información que no sea correcta o verdadera; debiendo respetarse en todo momento el derecho a la intimidad o privacidad del estudiante. Para las/os estudiantes menores de 21 años, esta privacidad podrá ser alterada por pedido de padres o tutoras/es. Asimismo, no se dejará constancia en el legajo estudiante acusada/o de haber realizado un acto pasible de sanción, si luego de las audiencias respectivas no resulta sancionada/o.</li>
                                    <li>A que se expidan títulos, certificados y constancias, que acrediten su historia académica institucional, los que serán de carácter gratuito hasta una cantidad razonable, a determinar por cada Consejo Directivo.</li>
                                    <li>A peticionar ante los Consejos Directivos respectivos.</li>
                                    <li>A solicitar audiencia ante la/el Rector/a, Decana/o y demás Autoridades Universitarias.</li>
                                    <li>Los derechos enumerados en la presente no deben entenderse en el sentido de negar a aquellos que no estén expresamente establecidos, y que nacen del principio republicano de gobierno, de los valores democráticos, de la gratuidad de la educación en el grado universitario y de la dignidad inherente a todo ser humano.</li>
                                </ol>
                            </p>
                            <p class="text-justify">
                                Más información sobre los derechos y deberes del estudiantado, veáse la <br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2001_139_iGbUmUu.pdf" target="_blank">Resolución 139-CS-01</a><br><br>
                                Sobre el Reglamento General de Licencias Estudiantiles, veáse la <br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/4_7_2016_15.pdf" target="_blank">Resolución 015-CS-2016</a><br><br>
                                Reglamento Académico de la Facultad de Ciencias Humanas <br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2025_106.pdf" target="_blank">Ordenanza 106-CD-25</a>
                                
                            </p>    
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
