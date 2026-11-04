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
                                    <span class="b-active">Centros de Estudiantes</span>
                                </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center become-title">
                        <h3 class="text-justify">Centros de Estudiantes</h3>                            
                            <p class="text-justify">
                                La Facultad de Ciencias Humanas tiene 2 Centros de Estudiantes: uno en la Sede General Pico (CEUCH) y otro en la Sede Santa Rosa (CEFCHu) y están integrados por todas/os las/os estudiantes de la institución.<br>
                                <!--El Centro de Estudiantes está integrado por todas/os las/os estudiantes de la institución.<br><br>--> 
                                Sus principios rectores son bregar por la unión y cooperación del estudiantado; garantizar la defensa de sus derechos; bregar por la formación integral, de calidad y fuertemente comprometida con la realidad social a través del fomento de la extensión universitaria y trabajando mancomunadamente con los claustros de docentes, nodocentes y graduados; bregar por el libre accionar del movimiento estudiantil y el reconocimiento de los organismos que el claustro estudiantil genere; garantizar acciones que tiendan al mejoramiento de las condiciones académicas, de estudio y de vida del estudiantado; luchar y defender la Universidad pública, gratuita, laica, de calidad, autonoma, de ingreso irrestricto, democrática, feminista, y al servicio de los sectores más desfavorecidos para la resolución de sus problemas; promover un ambiente libre de violencia, discriminación y en consonancia con la aplicación de los Derechos Humanos en todos los ámbitos; fomentar la igualdad de género y adherir al Protocolo de intervención institucional ante situaciones de violencia de género, acoso sexual y discriminación de género en la UNLPam; fomentar la participación estudiantil en la democracia interna de la Universidad y los procesos políticos sociales con responsabilidad y compromiso.<br><br>
                                La Facultad cuenta con Centros de Estudiantes en las sedes de Santa Rosa y General Pico.<br><br>
                                <span class="font-weight-bold">Centro de Estudiantes Sede Santa Rosa</span><br>
                                <a href="mailto:cefchu@humanas.unlpam.edu.ar">cefchu@humanas.unlpam.edu.ar </a><br>
                                <a href="mailto:patrimonioestudiantilfch@humanas.unlpam.edu.ar">patrimonioestudiantilfch@humanas.unlpam.edu.ar </a><br><br>
                                <span class="font-weight-bold">Centro de Estudiantes Sede General Pico</span><br>
                                <a href="mailto:ceuch@humanas.unlpam.edu.ar">ceuch@humanas.unlpam.edu.ar</a>
                            </p>
                        </div>
                    </div>
                    
                    <br><br>
                </div>
            </section>
        </div>
    </section>


@endsection
