@extends('app.slim.layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-3">
                            <span>
                                <a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a>
                            </span>
							<span><a href="#">Departamentos <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="#">Carreras <i class='fa fa-angle-right'></i></a></span>
                            <span><a href="#">Grado <i class='fa fa-angle-right'></i></a></span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.letras')}}">Letras</a> <i class='fa fa-angle-right text-primary'></i>
                            </span>
                            <span>
                                <a href="{{route('carreras.grado.departamento.letras.carrera_prof_de_nivel_secundario_en_lengua_y_literatura')}}">Profesorado de Nivel Secundario en Lengua y Literatura</a> <i class='fa fa-angle-right text-primary'></i>
                            </span>							
                            <span class="b-active">Programa Asignaturas</span>
						</p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>
<!--Inicio Contenido-->
<div class="container  mb-4">
    <div class="row border border-dark">
        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-0">Primer Año</div>
        <div class="col-6 py-2 bg-light font-weight-bold border border-dark border-right-0 border-left-0  border-top-0">Asignatura</div>
        <div class="col-3 py-2 font-weight-bold bg-light border border-dark border-right-0 border-left-0  border-top-0">Sede G. Acha</div>
        <div class="col-3 py-2 font-weight-bold bg-light border border-dark border-right-0 border-left-0  border-top-0">Sede G. Pico</div>
        
        <div class="col-6 py-2">Psicología Educativa</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1IEoZyjJPgDbq3aQp025md4bwQ_xm2zF_/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1zs4l-4T5etYsH8bhNoWtQ4VXDRGCPQMz/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    
        
        <div class="col-6 py-2">Taller de Prácticas Comunicativas Escritas y Orales I</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1KMaLpn28zIwVkB4b7-MD0L6iMONWKwlC/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1K3ZVBtNnDs2DHASHlxKrMrNVkhtiRjOD/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    
        
        <div class="col-6 py-2">Panorama y Contexto de Tendencias Estéticas</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1kc9Y99t-_CMGaMm81mpF-KQ5o7ZFjmwV/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/11KaOBNBKpp2J8q-M-CiWMq1n9Ol3_sHw/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Problemas Filosóficos</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/10mq4FQx9DWmtJgmLWqKJTrongk0BDv8k/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1BqsYMw3E9BKLxrpqvMkZt42GG-kP6YxO/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Gramática del Español I</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1VaZenJ8jc0MzIRiE8Kx8S1R92h2v2juU/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1yE1CoP220PWJPgRzMIuu8gmYCm6FowC6/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Introducción a la Literatura</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1TxgGZdg98hqenrXByeQ9Gw9rXHtN8ifJ/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1gtUUd_JjvJi6jGJdsnMcxeYK9x7kg-CT/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Práctica I: Sujetos de la Educación</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1EzYjaHMt9ipbXEUNKMkrbab4ibcQQhsV/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1BSYbmwrUKKwRgAIF1j2IEiJ1U_OsBwYu/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    
        
        <div class="col-6 py-2">Pedagogía</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1HRMn8fgfjHPME1yu34oWZMLD2Z97AVpv/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1XFamSX4-2v6Ho0K_wPoeJ4Iy_9fpbz-0/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>            

        <!--Segundo Año -->
        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Segundo Año</div>
        <div class="col-6 py-2">Culturas y Tradiciones Literarias</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1Nbh2dZHVnjuoN1v-WBzf90Jr1Dyu06YL/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1Bvtln4m6jCN-duPtJkyY8JW35UmHEHKK/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Gramática del Español II</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1hjHvFaRvB54F_PPIRM6GXM2m-tOVbsmE/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/19kmmQamNXbPZwk2Uss6-TuN3TAoSqSDQ/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Lingüística General</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1VY6ionynMYRu9udvswJ-LK9YmxYoWhZO/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1tyeQ9_8fZ54geefA_ez-pR-cCaEdzHsy/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Taller de Prácticas Comunicativas Escritas y Orales II</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1KbZ291OK-fwamKATPjeGMh_C1_YlWUYR/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1aw7w2ElSSwBz-bgBhXb5UjiT5ibV2T2-/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Literatura en Lenguas Romances</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1sq-m1nq2SLS3YQPfsJ7Cn2GbOR4ythzQ/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1AEmtcg8F6mRfUXgAmLPG_UtT7P6zRcXo/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Gramática del Español III</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/15DrMKA8OB8zku3VsMNe0wjsWosDueMqM/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1Xlf_wC77xBmwuZ6Sr7EAmfznU82m5-BM/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Teoría Literaria</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1Sz5t7mWwHVkaOs6R9AZhUeJY7j5jVawq/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1JW9N0bEoM3axHq7Uh-hC_rEwNLLa4SBV/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Didáctica General</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1m74vUlhOYbm2C18T0uTO5AxzTdihNyD6/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1G8XyOShnOYA691tq4PmrOI9rx_alLQ-e/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Práctica II: Curriculum y Enseñanza</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1VBuSIE5eSykUGq2fDjbWUGEMSeX7T49s/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1zZv_L9A4rXmXVAtZsx2P75Ej1gtQKgVT/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>

        <!-- Tercer Año -->
        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Tercer Año</div>
        <div class="col-6 py-2">Sociolingüística</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1lAy71mRGmi_a01gCsgeJGGkfixKZi-XU/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1X6MLW4-pst-PHIxtXZy23SOPyMJFACJE/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Didáctica de la Lengua y la Literatura I</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/19h-dskmGDUuRFKjYh63y7_mha1rqWw5U/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1R3wEThxkmOJ_AzwrFlq9LEv0DKi-AlSt/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>        

        <div class="col-6 py-2">Historia Latinoamericana y Argentina</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/10nPzudub5s7ojMS5rqT38f2QNcXix8os/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1p9yJYJPs-6GaF0azOyIJTkvWpM0Ix-C3/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Literatura Latinoamericana I</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1ieDb09ZaE31XTQAve2BXTPQtzTltrsp7/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1vbv_ztvmcUX34WjKQb_1EMUmaJulhZks/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Literatura en Lenguas Anglosajonas Germanas y Eslavas</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1ruKLG2WIl1ewAU8keCKzuM1cZaBChk2i/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1F_qDBcR4fbCsAp3f2iXpDCNFQuljfOsb/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Didáctica de la Lengua y la Literatura II</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1l0AcUdd2RBoHEmDBf3QNGoWcL1K8FRjv/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1o9K7U2KNPK-UJQd-qgmOlfCXgPWtVY5J/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>

        <div class="col-6 py-2">Taller de Escritura Creativa y Animación Cultural</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1m4uiipBMeCPOBhftJGHTkGtLAMeYUrSU/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1zSA36YyTh4McHsSqhFLdswjk1Wu7YiAP/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>
        <div class="col-6 py-2">Práctica III: Instituciones y Contextos</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/14NRWCPaUTfqBAvVzTQyb8UH9F1laMwZ_/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1iMquEE_9uk8kWlVIy-SKNoeBFgNeYbLq/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    
        
        <!-- Cuarto Año -->
        <div class="col-12 font-weight-bold py-2 bg-light text-dark border border-dark border-right-0 border-left-0  border-top-1">Cuarto Año</div>
        
        <div class="col-6 py-2">Literatura Española</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1vseR4RaxBnrnCR8vcAv6YTD2DD3LZ9Gz/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1A8cxEVwQjEhYe-SOK8NeJi1x4MDTHZia/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>    

        <div class="col-6 py-2">Literatura Latinoamericana II</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1l_j0af6LX8Fwq71IYSgdo9x1OYVIQflD/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1S4jMeaHM4zjCc6kykSkqUMq6gFL7zCvW/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>
        
        <div class="col-6 py-2">Residencia I Ciclo Basico de la Ed. Secundaria</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1U-iqSP2VcyugP0QT8diSJ-NmOsTxJqzF/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1ZWH__aDZ-asWCyTevna12EC-9lIbWAYE/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>
        
        <div class="col-6 py-2">Literatura Argentina I</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1bLQS54koo7EgjbFqtAhou_263gZsnwgE/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1IXpB_bDO9iUaEVXARtahDydVkdxOHJgg/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div> 

        <div class="col-6 py-2">Política y Legislación Escolar</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1ReHgFqyKJUE4l-hmu0_cG-bIVxJ4GpiQ/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1NvXJdgNstoN8qt0pbnS02loZHaLxYCN7/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>

        <div class="col-6 py-2">Literatura Regional</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1MFZ7q5StjLtLAmxxASRzOscFjAKE1FVx/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/18alidMHYTAgYANHGPaw_OCWXUb3EDTU-/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>

        <div class="col-6 py-2">Literatura Argentina II</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1JfQCFTmEyQyLTb_U3S4Nnp7DO066MlBs/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1rYq-wX6YlAinmLL9zDAla50-ESX_72Ji/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>

        <div class="col-6 py-2">Residencia II Ciclo Orientado de la Ed. Secundaria</div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1K35oB1zpz7sSdYjsrT8BLku9xsqpKfUH/view?usp=sharing">Descargar Programa</a><!--G. Acha -->
        </div>
        <div class="col-3 py-2">
            <i class="fas fa-file-pdf text-danger"></i> 
            <a href="https://drive.google.com/file/d/1rC3uTC6vMnyZVEZ7YIJaQ32g7OZjb3O9/view?usp=sharing">Descargar Programa</a><!--G. Pico -->
        </div>
    </div>
</div>
<!--Fin Contenido-->		

@endsection

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
	$('body').addClass('become_teachers');
});
</script>