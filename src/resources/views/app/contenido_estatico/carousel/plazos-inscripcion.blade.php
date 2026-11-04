@extends('app.slim.layouts.home')
@section('content')
    <br>
    <section class="become-teachers-01">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <p><span><a href="{{ route('index') }}">Inicio <i class='fa fa-angle-right'></i></a></span>
                                <span class="b-active">Especialización y Maestría en Docencia en Educación Superior, carreras de posgrado a distancia.</span>
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
	<div class="row text-left border border-dark border-bottom-1">
        <div style="background-color: #26406C;" class="col-12 font-weight-bold py-2 border border-dark border-right-0 border-top-0 border-bottom-1 border-left-0 text-light">Especialización y Maestría en Docencia en Educación Superior, carreras de posgrado a distancia</div>
        <h5 class="text-center"><i>Inicio de actividades sujeto a firma de la Resolución Ministerial.</i></h5>                    
        <p>
            ️Se extiende plazo para inscripción hasta el 17/05/24
            <br><br>
            ️La Secretaría de Investigación y Posgrado de la Facultad de Ciencias Humanas informa que se ha extendido hasta el 17 de mayo inclusive la inscripción a las carreras de posgrado Especialización y Maestría en Docencia en Educación Superior; ambas carreras se dictarán bajo modalidad a distancia, con inicio durante el mes de junio.
            <br><br>
            ️La inscripción para la cohorte 2024 se realiza mediante el SIU (Sistema de Información Universitaria) de la Facultad de Ciencias Humanas, a través del siguiente: <a href="https://g3.unlpam.edu.ar/preinscripcion/ua5/?__o=" target="_blank">link</a>
            <br><br>
            Para más información: 
            <a href="mailto:posgradogp@humanas.unlpam.edu.ar">posgradogp@humanas.unlpam.edu.ar</a>


        </p>
        </div>                
	</div>

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