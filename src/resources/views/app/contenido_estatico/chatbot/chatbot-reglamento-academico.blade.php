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
                                    Reglamento Académico de la Facultad de Ciencias Humanas
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
                            Reglamento Académico de la Facultad de Ciencias Humanas - Ordenanza 106-CD-25
                        </h3>
                        <a href="https://actosresolutivos.unlpam.edu.ar/static_ecs/media/uploads/pdf/7_8_2025_106.pdf" target="_blank">
                            <i class="fas fa-file-pdf text-danger" style="color: red !important"></i> Texto completo
                        </a>
                        <br>
                        <a href="https://www.youtube.com/watch?v=6C5iWjPr9b0" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" style="height: 1.2rem;">
                                <path fill="#e00000" d="M581.7 188.1C575.5 164.4 556.9 145.8 533.4 139.5C490.9 128 320.1 128 320.1 128C320.1 128 149.3 128 106.7 139.5C83.2 145.8 64.7 164.4 58.4 188.1C47 231 47 320.4 47 320.4C47 320.4 47 409.8 58.4 452.7C64.7 476.3 83.2 494.2 106.7 500.5C149.3 512 320.1 512 320.1 512C320.1 512 490.9 512 533.5 500.5C557 494.2 575.5 476.3 581.8 452.7C593.2 409.8 593.2 320.4 593.2 320.4C593.2 320.4 593.2 231 581.8 188.1zM264.2 401.6L264.2 239.2L406.9 320.4L264.2 401.6z"/>
                            </svg> 
                            Video explicativo en el canal de Youtube
                        </a>
                        <br>                        
                        <br>
                        <h3>
                            Chatbot
                        </h3>
                            <!--src="https://www.chatbase.co/chatbot-iframe/ZjIqeXdjtJ1GJ4fnXjN2f" Original-->
                            <iframe
                                src="https://www.chatbase.co/chatbot-iframe/RSJPbRrpl-FMq05k7QLT4"
                                width="100%"
                                height="600"
                                frameborder="0">
                            </iframe>
                    </div>
                    <!--Fin Contenido-->


                    </div>
                </div>
            </section>
        </div>
    </section>


@endsection

<!-- Widget chatbot-->
<!--<script>
  window.chatbaseConfig = {
    chatbotId: "ZjIqeXdjtJ1GJ4fnXjN2f",
  };
</script>
<script
  src="https://www.chatbase.co/embed.min.js"
  chatbotId="ZjIqeXdjtJ1GJ4fnXjN2f"
  defer>
</script>-->
<!-- Widget chatbot-->
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