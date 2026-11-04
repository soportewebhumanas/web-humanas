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
                                <span class="b-active">Boletín de Prensa</span>
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <section class="become-teachers">
                <div class="container">
                    <!-- Acordeon -->
                    <style>
                        .card-header{
                            background-color: #1b365d !important;
                        }
                        .card-header button{
                            font-weight: bold !important;
                            color: white !important;
                        }
                        iframe .flip-entry-last-writer{
                            display: none !important;
                        }
                    </style>
                    <div id="accordion">
                        <!-- 2026 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#anio2026" aria-expanded="false" aria-controls="anio2024">
                                    Año 2026
                                </button>
                            </h5>
                            </div>
                            <div id="anio2026" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <!--
                                <h3>Diciembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/..." target="_blank">Boletín de prensa: ...</a><br>
                                <br>
                                <h3>Noviembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/..." target="_blank">Boletín de prensa: ...</a><br>
                                <br>-->
                                <h3>Octubre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1uUgdnoaIS9LTQoY2bQP6yCcGrs4W8AU0/view?usp=drive_link" target="_blank">Boletín de prensa: 30/10/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1o5Og0DY7OKOrnX4wG9SEiraq87TsAkdT/view?usp=drive_link" target="_blank">Boletín de prensa: 23/10/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1A5chE8_YdJmhPMaMfET5zt8DMn24z-vF/view?usp=drive_link" target="_blank">Boletín de prensa: 21/10/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Frle4O6Kmz-Ofwh_ffO7ad8_eq-lg0sx/view?usp=drive_link" target="_blank">Boletín de prensa: 16/10/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/14ZiF-_czBZzp7zxas9Eg4Axy8SvHdsue/view?usp=drive_link" target="_blank">Boletín de prensa: 14/10/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1J5t5FASEIP6PO2vsWtgg4uLBdKLZ1Ksu/view?usp=drive_link" target="_blank">Boletín de prensa: 09/10/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/12iBfhttU8-rEXKGW7yeef3fRJSI5IwX3/view?usp=drive_link" target="_blank">Boletín de prensa: 07/10/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1J9VH3xs9Gl3wljdPkgKcMYtOEdYTUADH/view?usp=drive_link" target="_blank">Boletín de prensa: 02/10/2026</a><br>
                                <br>
                                <h3>Septiembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1bqg-gJ-5w_zXpAK6eCchaJqwqNHPXQVy/view?usp=drive_link" target="_blank">Boletín de prensa: 30/09/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1txdhYSTs_g1jOy0_pFhcOAOXWa8T72_F/view?usp=drive_link" target="_blank">Boletín de prensa: 25/09/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1aYU_SHkf7Et_GZ3y2o1FMYt0wx3t4qLu/view?usp=drive_link" target="_blank">Boletín de prensa: 16/09/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19rdrNOF06AhLReVR4yOy_VChLdVK3VF9/view?usp=drive_link" target="_blank">Boletín de prensa: 11/09/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1eQYAMAWzRXb_zCvOiDBJwt4ucpkIwBGX/view?usp=drive_link" target="_blank">Boletín de prensa: 09/09/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ePPIG1C1jEE4HbpJX87hsDm8QkqYO_WZ/view?usp=drive_link" target="_blank">Boletín de prensa: 03/09/2026</a><br>
                                <br>
                                <h3>Agosto</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Ie2RfkcdCTW29d2vZukOo7HRRfHUaX5R/view?usp=drive_link" target="_blank">Boletín de prensa: 26/08/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1AfRzlRI6qonzcYXTzhqY40WQUhPdYY1a/view?usp=drive_link" target="_blank">Boletín de prensa: 21/08/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1IwnpyLdcOsH74xm0I1nRFzOAvcfLK34e/view?usp=drive_link" target="_blank">Boletín de prensa: 19/08/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1sWB7GL1bBOkzAnDdKgmEnNKQT1B2JJM1/view?usp=drive_link" target="_blank">Boletín de prensa: 14/08/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1klMEqMPwcb93H7utonFLVMDl8EPmkS4f/view?usp=drive_link" target="_blank">Boletín de prensa: 12/08/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vwhJCB6zVUaBSeRULdBluaFjRKa5ZQ99/view?usp=drive_link" target="_blank">Boletín de prensa: 07/08/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zgSp52nZU2ZEdPdVKoqMUjPQxDNPq8p5/view?usp=drive_link" target="_blank">Boletín de prensa: 05/08/2026</a><br>
                                <br>
                                <h3>Julio</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1hp3PvtiSYEjsr-3vAKxAxo8vSCVaRPHv/view?usp=drive_link" target="_blank">Boletín de prensa: 31/07/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pjygbLmKpORqFm61S2RtW_WpJnWSHmQU/view?usp=drive_link" target="_blank">Boletín de prensa: 29/07/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1CYQkyTZtF8JJdM4I9w6a4PNuUM0zZJ0U/view?usp=drive_link" target="_blank">Boletín de prensa: 08/07/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1pFwkK7vEVCzQ_dqZNYde7cCDmS_V3tRL/view?usp=drive_link" target="_blank">Boletín de prensa: 03/07/2026</a><br>
                                <br>
                                <h3>Junio</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1c9hRhAEYKHwDJOMGFjNSLP84fdOaYTgf/view?usp=drive_link" target="_blank">Boletín de prensa: 26/06/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1VR8vwATNXXxULeWBIc3xbrRuPEvmBao7/view?usp=drive_link" target="_blank">Boletín de prensa: 24/06/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Cle0wE2yK7125IWMPu-9KHw-XGZ_HiiV/view?usp=drive_link" target="_blank">Boletín de prensa: 19/06/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1aU-t-FI0XqEIvAqoNIxeJzpANx9Qb4_-/view?usp=drive_link" target="_blank">Boletín de prensa: 17/06/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19fTJaHGi5QTyGkwfPIhuHC4akkN4Vvkh/view?usp=drive_link" target="_blank">Boletín de prensa: 12/06/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/17VCKHcansrKZEuDJ-iSo53I1rVrz6Mz5/view?usp=drive_link" target="_blank">Boletín de prensa: 10/06/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1RqwfNgz2LeObKfO-82CmQNU7KIP62ML-/view?usp=drive_link" target="_blank">Boletín de prensa: 05/06/2026</a><br>
                                <br>
                                <h3>Mayo</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LcHgQcbfY26Br3g9ll3_PMgin18g4bUX/view?usp=drive_link" target="_blank">Boletín de prensa: 29/05/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/13qLH2G6On7svmupla5W6gca5fwtok-mo/view?usp=drive_link" target="_blank">Boletín de prensa: 27/05/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/19C84H5i46s3Tf-Tsp44vHNIYU1pedGED/view?usp=drive_link" target="_blank">Boletín de prensa: 20/05/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1LzbEYo0BH4bE-i2X-mZqcOcrznB7kirw/view?usp=drive_link" target="_blank">Boletín de prensa: 13/05/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Fe-w7xH8x4QCojEVyBdvwsn4rVx1AX9F/view?usp=drive_link" target="_blank">Boletín de prensa: 08/05/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1YaT4vxZ1BeRFv_plvMU4hTLbGjwxIspZ/view?usp=drive_link" target="_blank">Boletín de prensa: 06/05/2026</a><br>
                                <br>
                                <h3>Abril</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1cLDHNfiF5whM1AfO-KSPEnDuqi61_niF/view?usp=drive_link" target="_blank">Boletín de prensa: 29/04/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1plJlOQDgWqFs1czI9W314rsli9GmGfqR/view?usp=drive_link" target="_blank">Boletín de prensa: 24/04/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/188a0pKrv5y4x1g2JpAggcQa4jKAK0zDf/view?usp=drive_link" target="_blank">Boletín de prensa: 17/04/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1Q1l0qRPCr4YViu7HKltiR7MX9nJCaGGi/view?usp=drive_link" target="_blank">Boletín de prensa: 15/04/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1WGVUO6nwLQ05NsVawSm0IuPQFhYg_97v/view?usp=drive_link" target="_blank">Boletín de prensa: 13/04/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/183TD9RymXAXgrBD3wjjon8zuGeXjcYZs/view?usp=drive_link" target="_blank">Boletín de prensa: 10/04/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1JQd2mRgSoWXG154shsPE9lTX3azdC_fe/view?usp=drive_link" target="_blank">Boletín de prensa: 08/04/2026</a><br>
                                <br>
                                <h3>Marzo</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1lCmyWVOJ7UVMb43IYcIoZP44sJ4s2qCW/view?usp=drive_link" target="_blank">Boletín de prensa: 27/03/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/130YH28nizNjyeDV2aEzUT_7uWsVGkebe/view?usp=drive_link" target="_blank">Boletín de prensa: 25/03/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1ImJLFrDsNabYs9076_zXNdkldBdVo3Jj/view?usp=drive_link" target="_blank">Boletín de prensa: 20/03/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1aInnQuuwlG5r06-LqlH_DkgTGw2aod_X/view?usp=drive_link" target="_blank">Boletín de prensa: 18/03/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1zJ33fsN08m_rX-QzxM1jQMFqbeQqcIDw/view?usp=drive_link" target="_blank">Boletín de prensa: 13/03/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1vzCcpPEfwILsYx5WCYtZ2a9CGEqCXSXP/view?usp=drive_link" target="_blank">Boletín de prensa: 11/03/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1uzsIH1IGthcZDK0HmU_Q3zLeDQIjyi6b/view?usp=drive_link" target="_blank">Boletín de prensa: 06/03/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1N3OXFMfQBoLXJYIvnALOhGOCcxZczfSr/view?usp=drive_link" target="_blank">Boletín de prensa: 04/03/2026</a><br>
                                <br>
                                <h3>Febrero</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1KDJmyLBbIua25iqBq6dgCmRhErLiisVv/view?usp=drive_link" target="_blank">Boletín de prensa: 27/02/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1COONlOG6H1AxEhqDYgxTPxm59wm-upNi/view?usp=drive_link" target="_blank">Boletín de prensa: 25/02/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1rPej_u2Bi_AVtXr21wRg4HyBjdL-p7mm/view?usp=drive_link" target="_blank">Boletín de prensa: 20/02/2026</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="https://drive.google.com/file/d/1PBlskXZl6q_93ys5DQFtSRUwbMnve9ED/view?usp=drive_link" target="_blank">Boletín de prensa: 13/02/2026</a><br>
                                <br>
                            </div>
                            </div>
                        </div>
                        <!-- 2026-->

                    
                        <!-- 2025 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#anio2025" aria-expanded="false" aria-controls="anio2024">
                                    Año 2025
                                </button>
                            </h5>
                            </div>
                            <div id="anio2025" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <h3>Diciembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Lunes 29 de diciembre de 2025.pdf" target="_blank">Boletín de prensa: 29/12/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Martes 23 de diciembre de 2025.pdf" target="_blank">Boletín de prensa: 23/12/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 19 de diciembre de 2025.pdf" target="_blank">Boletín de prensa: 19/12/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Miércoles 17 de diciembre de 2025.pdf" target="_blank">Boletín de prensa: 17/12/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Miércoles 10 de diciembre de 2025.pdf" target="_blank">Boletín de prensa: 10/12/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Viernes 5 de diciembre de 2025.pdf" target="_blank">Boletín de prensa: 05/12/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Miércoles 3 de diciembre de 2025.pdf" target="_blank">Boletín de prensa: 03/12/2025</a><br>
                                <br>                                
                                <h3>Noviembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Viernes 14 de noviembre de 2025.pdf" target="_blank">Boletín de prensa: 14/11/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Miércoles 12 de noviembre de 2025.pdf" target="_blank">Boletín de prensa: 12/11/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Viernes 7 de noviembre de 2025.pdf" target="_blank">Boletín de prensa: 07/11/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 5 de noviembre.pdf" target="_blank">Boletín de prensa: 05/11/2025</a><br>
                                <br>
                                <h3>Octubre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 29 de octubre.pdf" target="_blank">Boletín de prensa: 29/10/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Miércoles 22 de octubre de 2025.pdf" target="_blank">Boletín de prensa: 22/10/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 15 de octubre.pdf" target="_blank">Boletín de prensa: 15/10/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 8 de octubre.pdf" target="_blank">Boletín de prensa: 08/10/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Viernes 3 de octubre de 2025.pdf" target="_blank">Boletín de prensa: 03/10/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 1 de octubre de 2025.pdf" target="_blank">Boletín de prensa: 01/10/2025</a><br>
                                <br>
                                <h3>Septiembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 26 de septiembre.pdf" target="_blank">Boletín de prensa: 26/09/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 19 de septiembre.pdf" target="_blank">Boletín de prensa: 19/09/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 17 de septiembre.pdf" target="_blank">Boletín de prensa: 17/09/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Lunes 15 de septiembre.pdf" target="_blank">Boletín de prensa: 15/09/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 10 de septiembre.pdf" target="_blank">Boletín de prensa: 10/09/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 5 de septiembre.pdf" target="_blank">Boletín de prensa: 05/09/2025</a><br><br>
                                
                                <h3>Agosto</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 27 de agosto.pdf" target="_blank">Boletín de prensa: 27/08/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 22 de agosto.pdf" target="_blank">Boletín de prensa: 22/08/2025</a><br>

                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 20 de agosto de 2025.pdf" target="_blank">Boletín de prensa: 20/08/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 13 de agosto de 2025.pdf" target="_blank">Boletín de prensa: 13/08/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 8 de agosto de 2025.pdf" target="_blank">Boletín de prensa: 08/08/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 6 de agosto.pdf" target="_blank">Boletín de prensa: 06/08/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 1 de agosto.pdf" target="_blank">Boletín de prensa: 01/08/2025</a><br>
                                <br>
                                <h3>Julio</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 30 de julio .pdf" target="_blank">Boletín de prensa: 30/07/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 11 de julio.pdf" target="_blank">Boletín de prensa: 11/07/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 2 de julio.pdf" target="_blank">Boletín de prensa: 02/07/2025</a><br>
                                <br>
                                <h3>Junio</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 25 de junio de 2025.pdf" target="_blank">Boletín de prensa: 25/06/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 18 de junio.pdf" target="_blank">Boletín de prensa: 18/06/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 11 de junio.pdf" target="_blank">Boletín de prensa: 11/06/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 4 de junio de 2025.pdf" target="_blank">Boletín de prensa: 04/06/2025</a><br>
                                <br>
                                <h3>Mayo</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 30 de mayo.pdf" target="_blank">Boletín de prensa: 30/05/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 28 de mayo de 2025.pdf" target="_blank">Boletín de prensa: 28/05/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 23 de mayo.pdf" target="_blank">Boletín de prensa: 23/05/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 21 de mayo.pdf" target="_blank">Boletín de prensa: 21/05/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 14 de mayo .pdf" target="_blank">Boletín de prensa: 14/05/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 9 de mayo.pdf" target="_blank">Boletín de prensa: 09/05/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 7 de mayo.pdf" target="_blank">Boletín de prensa: 07/05/2025</a><br>
                                <br>
                                <h3>Abril</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 25 de abril.pdf" target="_blank">Boletín de prensa: 25/04/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 23 de abril.pdf" target="_blank">Boletín de prensa: 23/04/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas - Miércoles 16 de abril de 2025.pdf" target="_blank">Boletín de prensa: 16/04/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Jueves 9 de abril.pdf" target="_blank">Boletín de prensa: 09/04/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Jueves 3 de abril.pdf" target="_blank">Boletín de prensa: 03/04/2025</a><br>
                                <br>
                                
                                <h3>Marzo</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 28 de marzo.pdf" target="_blank">Boletín de prensa: 28/03/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 26 de marzo.pdf" target="_blank">Boletín de prensa: 26/03/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 21 de marzo.pdf" target="_blank">Boletín de prensa: 21/03/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 19 de marzo.pdf" target="_blank">Boletín de prensa: 19/03/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 14 de marzo.pdf" target="_blank">Boletín de prensa: 14/03/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 12 de marzo.pdf" target="_blank">Boletín de prensa: 12/03/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Viernes 07 de marzo.pdf" target="_blank">Boletín de prensa: 07/03/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Jueves 06 de marzo.pdf" target="_blank">Boletín de prensa: 06/03/2025</a><br>
                                <br>

                                <h3>Febrero</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 26 de febrero.pdf" target="_blank">Boletín de prensa: 26/02/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 19 de febrero.pdf" target="_blank">Boletín de prensa: 19/02/2025</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2025/Boletín Humanas 2025 - Miércoles 12 de febrero.pdf" target="_blank">Boletín de prensa: 12/02/2025</a><br>
                                <br>
                            </div>
                            </div>
                        </div>
                        <!-- 2025 -->
                        <!-- 2024 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#anio2024" aria-expanded="false" aria-controls="anio2024">
                                    Año 2024
                                </button>
                            </h5>
                            </div>
                            <div id="anio2024" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <h3>Diciembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 20 de diciembre.pdf" target="_blank">Boletín de prensa: 20/12/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 18 de diciembre.pdf" target="_blank">Boletín de prensa: 18/12/2024</a><br>                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 6 de diciembre.pdf" target="_blank">Boletín de prensa: 06/12/2024</a><br>
                                <br>                                
                                <h3>Noviembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 27 de noviembre-.pdf" target="_blank">Boletín de prensa: 27/11/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 22 de noviembre.pdf" target="_blank">Boletín de prensa: 22/11/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 20 de noviembre.pdf" target="_blank">Boletín de prensa: 20/11/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 13 de noviembre.pdf" target="_blank">Boletín de prensa: 13/11/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 8 de noviembre.pdf" target="_blank">Boletín de prensa: 08/11/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 6 de noviembre.pdf" target="_blank">Boletín de prensa: 06/11/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 ___ Viernes 1° de noviembre.pdf" target="_blank">Boletín de prensa: 01/11/2024</a><br>
                                <br>

                                <h3>Octubre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 30 de octubre.pdf" target="_blank">Boletín de prensa: 30/10/2024</a><br>                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 23 de octubre.pdf" target="_blank">Boletín de prensa: 23/10/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 18 de octubre.pdf" target="_blank">Boletín de prensa: 18/10/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 9 de octubre.pdf" target="_blank">Boletín de prensa: 09/10/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 4 de octubre.pdf" target="_blank">Boletín de prensa: 04/10/2024</a><br>                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 2 de octubre.pdf" target="_blank">Boletín de prensa: 02/10/2024</a><br>
                                <br>

                                <h3>Septiembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 25 de septiembre_1.pdf" target="_blank">Boletín de prensa: 25/09/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 18 de septiembre.pdf" target="_blank">Boletín de prensa: 18/09/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 13 de septiembre.pdf" target="_blank">Boletín de prensa: 13/09/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 11 de septiembre.pdf" target="_blank">Boletín de prensa: 11/09/2024</a><br>                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 6 de septiembre.pdf" target="_blank">Boletín de prensa: 06/09/2024</a><br>
                                <br>
                                
                                <h3>Agosto</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 28 de agosto de 2024.pdf" target="_blank">Boletín de prensa: 28/08/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 23 de agosto.pdf" target="_blank">Boletín de prensa: 23/08/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 14 de agosto.pdf" target="_blank">Boletín de prensa: 14/08/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 9 de agosto.pdf" target="_blank">Boletín de prensa: 09/08/2024</a><br>                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 7 de agosto.pdf" target="_blank">Boletín de prensa: 07/08/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Lunes 5 de agosto.pdf" target="_blank">Boletín de prensa: 05/08/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 2 de agosto.pdf" target="_blank">Boletín de prensa: 02/08/2024</a><br>
                                <br>
                            
                                <h3>Julio</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 31 de julio.pdf" target="_blank">Boletín de prensa: 31/07/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 24 de julio.pdf" target="_blank">Boletín de prensa: 24/07/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 3 de julio .pdf" target="_blank">Boletín de prensa: 03/07/2024</a><br>
                                <br>

                                <h3>Junio</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 26 de junio.pdf" target="_blank">Boletín de prensa: 26/06/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 19 de junio.pdf" target="_blank">Boletín de prensa: 19/06/2024</a><br>                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 5 de junio.pdf" target="_blank">Boletín de prensa: 05/06/2024</a><br>                                
                                <br>

                                <h3>Mayo</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 31 de mayo .pdf" target="_blank">Boletín de prensa: 31/05/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 29 de mayo.pdf" target="_blank">Boletín de prensa: 29/05/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 24 de mayo.pdf" target="_blank">Boletín de prensa: 24/05/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 22 de mayo.pdf" target="_blank">Boletín de prensa: 22/05/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 15 de mayo.pdf" target="_blank">Boletín de prensa: 15/05/2024</a><br>                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 10 de mayo.pdf" target="_blank">Boletín de prensa: 10/05/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 8 de mayo.pdf" target="_blank">Boletín de prensa: 08/05/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 3 de Mayo.pdf" target="_blank">Boletín de prensa: 03/05/2024</a><br>
                                <br>

                                <h3>Abril</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 26 de abril.pdf" target="_blank">Boletín de prensa: 26/04/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 17 de abril.pdf" target="_blank">Boletín de prensa: 17/04/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 10 de abril.pdf" target="_blank">Boletín de prensa: 10/04/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 5 de abril.pdf" target="_blank">Boletín de prensa: 05/04/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 3 de abril.pdf" target="_blank">Boletín de prensa: 03/04/2024</a><br>
                                <br>                                
                                <h3>Marzo</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 27 de marzo.pdf" target="_blank">Boletín de prensa: 27/03/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 22 de marzo.pdf" target="_blank">Boletín de prensa: 22/03/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 20 de marzo.pdf" target="_blank">Boletín de prensa: 20/03/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 13 de marzo.pdf" target="_blank">Boletín de prensa: 13/03/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 8 de marzo.pdf" target="_blank">Boletín de prensa: 08/03/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 6 de marzo.pdf" target="_blank">Boletín de prensa: 06/03/2024</a><br>
                                <br>
                                <h3>Febrero</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 28 de febrero.pdf" target="_blank">Boletín de prensa: 28/02/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Miércoles 21 de febrero.pdf" target="_blank">Boletín de prensa: 21/02/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 16 de febrero.pdf" target="_blank">Boletín de prensa: 16/02/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas 2024 - Viernes 9 de febrero.pdf" target="_blank">Boletín de prensa: 09/02/2024</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2024/Boletín Humanas - 07 de febrero de 2024.pdf" target="_blank">Boletín de prensa: 07/02/2024</a><br>
                                <br>
                            </div>
                            </div>
                        </div>
                        <!-- 2024 -->
                        <!-- 2023 -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Año 2023
                                </button>
                            </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <h3>Diciembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 20 de diciembre.pdf" target="_blank">Boletín de Prensa:  20/12/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 13 de diciembre.pdf" target="_blank">Boletín de Prensa:  13/12/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 6 de diciembre.pdf" target="_blank">Boletín de Prensa:  06/12/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 1 de diciembre.pdf" target="_blank">Boletín de Prensa:  01/12/2023</a><br>
                                <br>
                                <h3>Noviembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 29 de noviembre - fe de erratas.pdf" target="_blank">Boletín de Prensa:  29/11/2023 - Fe de erratas</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 29 de noviembre.pdf" target="_blank">Boletín de Prensa:  29/11/2023</a><br>                                                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 10 de noviembre de 2023.pdf" target="_blank">Boletín de Prensa:  10/11/2023</a><br>                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 8 de noviembre.pdf" target="_blank">Boletín de Prensa:  08/11/2023</a><br>                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 1 de noviembre.pdf" target="_blank">Boletín de Prensa:  01/11/2023</a><br>
                                <br>
                                <h3>Octubre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 25 de octubre.pdf" target="_blank">Boletín de Prensa:  25/10/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 20 de octubre.pdf" target="_blank">Boletín de Prensa:  20/10/2023</a><br>                                                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 18 de octubre.pdf" target="_blank">Boletín de Prensa:  18/10/2023</a><br>                                
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 11 de octubre.pdf" target="_blank">Boletín de Prensa:  11/10/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 6 de octubre.pdf" target="_blank">Boletín de Prensa:  06/10/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 4 de octubre.pdf" target="_blank">Boletín de Prensa:  04/10/2023</a><br>
                                <br>                                
                                <h3>Septiembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 27 de septiembre.pdf" target="_blank">Boletín de Prensa:  27/09/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 22 de septiembre.pdf" target="_blank">Boletín de Prensa:  22/09/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 20 de septiembre.pdf" target="_blank">Boletín de Prensa:  20/09/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 13 de septiembre.pdf" target="_blank">Boletín de Prensa:  13/09/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 8 de septiembre.pdf" target="_blank">Boletín de Prensa:  08/09/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 6 de septiembre.pdf" target="_blank">Boletín de Prensa:  06/09/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 1 de septiembre.pdf" target="_blank">Boletín de Prensa:  01/09/2023</a><br>
                                <br>                                
                                <h3>Agosto</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 25 de Agosto.pdf" target="_blank">Boletín de Prensa:  25/8/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 23 de agosto.pdf" target="_blank">Boletín de Prensa:  23/8/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 18 de agosto.pdf" target="_blank">Boletín de Prensa:  18/8/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 16 de agosto.pdf" target="_blank">Boletín de Prensa:  16/8/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 11 de agosto - Fe de erratas.pdf" target="_blank">Boletín de Prensa:  11/8/2023 - Fe de erratas</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 11 de agosto.pdf" target="_blank">Boletín de Prensa:  11/8/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 9 de agosto.pdf" target="_blank">Boletín de Prensa:  9/8/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 4 de agosto.pdf" target="_blank">Boletín de Prensa:  4/8/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Jueves 3 de agosto.pdf" target="_blank">Boletín de Prensa:  3/8/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 2 de agosto.pdf" target="_blank">Boletín de Prensa:  2/8/2023</a><br>
                                <br>
                                <h3>Julio</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 28 de julio_.pdf" target="_blank">Boletín de Prensa:  28/7/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 26 de julio de 2023.pdf" target="_blank">Boletín de Prensa:  26/7/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 5 de julio.pdf" target="_blank">Boletín de Prensa:  5/7/2023</a><br>
                                <br>
                                <h3>Junio</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 28 de junio.pdf" target="_blank">Boletín de Prensa:  28/6/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 21 de junio.pdf" target="_blank">Boletín de Prensa:  21/6/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 16 de junio.pdf" target="_blank">Boletín de Prensa:  16/6/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 14 de junio.pdf" target="_blank">Boletín de Prensa:  14/6/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 7 de junio_.pdf" target="_blank">Boletín de Prensa:  7/6/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 2 de junio.pdf" target="_blank">Boletín de Prensa:  2/6/2023</a><br>
                                <br>
                                <h3>Mayo</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 31 de mayo.pdf" target="_blank">Boletín de Prensa:  31/5/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 24 de mayo.pdf" target="_blank">Boletín de Prensa:  24/5/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 19 de mayo.pdf" target="_blank">Boletín de Prensa:  19/5/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 17 de mayo.pdf" target="_blank">Boletín de Prensa:  17/5/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 12 de mayo.pdf" target="_blank">Boletín de Prensa:  12/5/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 10 de mayo.pdf" target="_blank">Boletín de Prensa:  10/5/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 5 de mayo.pdf" target="_blank">Boletín de Prensa:  5/5/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 3 de mayo.pdf" target="_blank">Boletín de Prensa:  3/5/2023</a><br>
                                <br>
                                <h3>Abril</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 26 de abril - Fe de Erratas.pdf" target="_blank">Boletín de Prensa:  26/4/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 26 de abril.pdf" target="_blank">Boletín de Prensa:  26/4/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 21 de abril_.pdf" target="_blank">Boletín de Prensa:  21/4/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 19 de abril.pdf" target="_blank">Boletín de Prensa:  19/4/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 14 de abril.pdf" target="_blank">Boletín de Prensa:  14/4/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 12 de abril.pdf" target="_blank">Boletín de Prensa:  12/4/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 5 de abril.pdf" target="_blank">Boletín de Prensa:  5/4/2023</a><br>
                                <br>
                                <h3>Marzo</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 29 de marzo_.pdf" target="_blank">Boletín de Prensa:  29/3/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 24 de marzo.pdf" target="_blank">Boletín de Prensa:  24/3/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 22 de marzo.pdf" target="_blank">Boletín de Prensa:  22/3/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 17 de marzo.pdf" target="_blank">Boletín de Prensa:  17/3/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 15 de marzo.pdf" target="_blank">Boletín de Prensa:  15/3/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 10 de marzo.pdf" target="_blank">Boletín de Prensa:  10/3/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Miércoles 8 de marzo.pdf" target="_blank">Boletín de Prensa:  8/3/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - Viernes 3 de marzo.pdf" target="_blank">Boletín de Prensa:  3/3/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 1 de marzo de 2023.pdf" target="_blank">Boletín de Prensa:  1/3/2023</a><br>
                                <br>
                                <h3>Febrero</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas 2023 - 22 de febrero _.pdf" target="_blank">Boletín de Prensa:  22/2/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas  2023- 15 de febrero.pdf" target="_blank">Boletín de Prensa:  15/2/2023</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2023/Boletín Humanas  2023 - 8 de febrero 2023.pdf" target="_blank">Boletín de Prensa: 8/2/2023</a><br>
                                <!--<iframe src="https://drive.google.com/embeddedfolderview?id=11ArDZMqhJ0Y46wP7ZaaPxPvYOBTGfwjI#list" style="width:100%; height: 300px; border:0;"></iframe>-->
                            </div>
                            </div>
                        </div>
                        <!-- 2023 -->

                        <!-- 2022 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Año 2022
                                </button>
                            </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <h3>Diciembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-21-12-2022.pdf" target="_blank">Boletín de prensa: 21/12/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-07-12-2022.pdf" target="_blank">Boletín de prensa: 7/12/2022</a><br>
                                <br>
                                <h3>Noviembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-30-11-2022.pdf" target="_blank">Boletín de prensa: 30/11/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-29-11-2022.pdf" target="_blank">Boletín de prensa: 29/11/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-21-11-2022.pdf" target="_blank">Boletín de prensa: 21/11/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-18-11-2022.pdf" target="_blank">Boletín de prensa: 18/11/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-16-11-2022.pdf" target="_blank">Boletín de prensa: 16/11/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-11-11-2022-Fe-de-erratas.pdf" target="_blank">Boletín de prensa: 11/11/2022 Fe de erratas</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-11-11-2022.pdf" target="_blank">Boletín de prensa: 11/11/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-09-11-2022.pdf" target="_blank">Boletín de prensa: 9/11/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-02-11-2022.pdf" target="_blank">Boletín de prensa: 2/11/2022</a><br>
                                <br>
                                <h3>Octubre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-26-10-2022.pdf" target="_blank">Boletín de prensa: 26/10/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-21-10-2022.pdf" target="_blank">Boletín de prensa: 21/10/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-19-10-2022.pdf" target="_blank">Boletín de prensa: 19/10/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-14-10-2022.pdf" target="_blank">Boletín de prensa: 14/10/2022</a><br>
                                <br>
                                <h3>Septiembre</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-30-09-2022.pdf" target="_blank">Boletín de prensa: 30/9/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-28-09-2022.pdf" target="_blank">Boletín de prensa: 28/9/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-23-09-2022.pdf" target="_blank">Boletín de prensa: 23/9/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-16-09-2022.pdf" target="_blank">Boletín de prensa: 16/9/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-14-09-2022.pdf" target="_blank">Boletín de prensa: 14/9/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-09-09-2022.pdf" target="_blank">Boletín de prensa: 9/9/2022</a><br>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-07-09-2022.pdf" target="_blank">Boletín de prensa: 7/9/2022</a><br>
                                <br>
                                <h3>Agosto</h3>
                                <i class="fas fa-file-pdf text-danger"></i> <a href="./slim/boletin-de-prensa/2022/Boletín-FCH-19-08-2022.pdf" target="_blank">Boletín de prensa: 19/8/2022</a><br>
                                <!--<iframe src="https://drive.google.com/embeddedfolderview?id=1m8no7Tqgqsd-togo_mXRYwWp4piCCsVI#list" style="width:100%; height: 300px; border:0;"></iframe>-->
                            </div>
                            </div>
                        </div>
                        <!-- 2022 -->
                    </div>
                    <!-- Acordeon -->
                </div>
            </section>
        </div>
    </section>


@endsection