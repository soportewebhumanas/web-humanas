@extends('app.slim.layouts.home')
@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<p class="pt-2"><span><a href="{{route('index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Autoridades</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>
<!-- Teachers Area section -->
<section class="teachers-area pt-0">
	<div class="container">
	<h3>Autoridades</h3>
	<div class="row">

<!-- Decanato -->
		<!-- Decano -->
		<div class="col-12 font-weight-bold text-center">Decanato</div>	
		<div class="row d-flex justify-content-center mx-1">		
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/auth/eric.jpg" alt="Autoridades">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#exampleModal">Dr. Eric Morales Schmuker</a></h5>
				<p class="card-text text-center" style="font-size: 0.9rem;">DECANO</p>
			</div>
			</div>
		</div>
		<!-- Modal decano -->	
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
					<i class="fa fa-phone"></i> 02954-451606<br>
					<i class="fa fa-envelope"></i> decanato@humanas.unlpam.edu.ar<br>
					<i class="fa fa-map-marker"></i>  Cnel. Gil Nº 353, 2do. Piso, Santa Rosa
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>
		<!-- Modal decano -->

		<!--Vicedecana-->
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/auth/delgado.jpg" alt="Autoridades">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#viceDecana">Esp. Verónica Delgado</a></h5>			
				<p class="card-text text-center" style="font-size: 0.9rem;">VICEDECANA</p>
			</div>
			</div>
		</div>
		</div>

		<!-- Modal vicedecana -->	
		<div class="modal fade" id="viceDecana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<i class="fa fa-phone"></i><!--02954-451606--> 02302-421041 (int. 6611)<br>
				<i class="fa fa-envelope"></i> vicedecanato@humanas.unlpam.edu.ar<br>
				<i class="fa fa-map-marker"></i> Calle 7 esq. 110, General Pico
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>
		<!-- Modal vicedecana -->
<!-- Decanato -->

	<!-- Secretarias -->
	<div class="col-12 font-weight-bold text-center"><br>Secretarías</div>
	<div class="row d-flex justify-content-center mx-1">
	

		<!--Secretaria Académica -->
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/auth/nicoletti-web.jpg" alt="Autoridades">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#secAcademica">Mg. Verónica Nicoletti</a></h5>			
				<p class="card-text text-center" style="font-size: 0.9rem;">SECRETARIA <br>ACADÉMICA</p>
			</div>
			</div>
		</div>
		<!-- Modal Secretaría académica -->	
		<div class="modal fade" id="secAcademica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<i class="fa fa-phone"></i> 02954-451662<br>
				<i class="fa fa-envelope"></i> secretariaacademica@humanas.unlpam.edu.ar<br>
				<i class="fa fa-map-marker"></i> Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>
		<!-- Modal Secretaría académica -->
		
		<!--Subsecretaria Académica -->
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/auth/zuchini-web.jpg" alt="Autoridades">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#subsecAcademica">Prof. Verónica Zucchini</a></h5>			
				<p class="card-text text-center" style="font-size: 0.9rem;">SUBSECRETARIA <br>ACADÉMICA</p>
			</div>
			</div>
		</div>
		<!-- Modal Subsecretaría académica -->	
		<div class="modal fade" id="subsecAcademica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!--<i class="fa fa-phone"></i> 02954-451662<br>-->
				<i class="fa fa-envelope"></i> subacademica@humanas.unlpam.edu.ar<br>
				<i class="fa fa-map-marker"></i> Cnel. Gil Nº 353, 2do. Piso, Santa Rosa<br><br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>
		<!-- Modal Subecretaría académica -->		

		
		<!-- Secretaria Posgrado -->
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/ledesma_web.png" alt="Autoridades">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#secPosgrado">Dr. Leonardo Ledesma</a></h5>			
				<p class="card-text text-center" style="font-size: 0.9rem;">SECRETARIO INVESTIGACIÓN Y POSGRADO</p>
			</div>
			</div>
		</div>
		
		<!-- Modal Secretaria Posgrado -->	
		<div class="modal fade" id="secPosgrado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<i class="fa fa-phone"></i> 451661<br>
				<i class="fa fa-envelope"></i> secretariaposgrado@humanas.unlpam.edu.ar<br>
				<i class="fa fa-map-marker"></i> Dirección: Cnel. Gil Nº 353, 2do. Piso, Santa Rosa
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>
		<!-- Modal Secretaria Posgrado -->
		<!--Secretaria Economica -->
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/auth/ussei-web.jpg" alt="Martín Alejandro Ussei">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#secEco">CPN Martín Alejandro Ussei</a></h5>
				<p class="card-text text-center" style="font-size: 0.9rem;">SECRETARIO ECONÓMICO-ADMINISTRATIVO</p>
			</div>
			</div>
		</div>
		<!-- Modal Secretaria Economica -->	
		<div class="modal fade" id="secEco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<i class="fa fa-phone"></i> 02954-451654<br>
				<i class="fa fa-envelope"></i> sadm@humanas.unlpam.edu.ar<br>
				<i class="fa fa-map-marker"></i> Cnel. Gil Nº 353, 2do. Piso, Santa Rosa
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>
		<!-- Modal Secretaria Economica -->
	</div>
	<div class="row d-flex justify-content-center mx-1">
		<!--Secretaria Consejo Directivo-->
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/auth/dukart-web.jpg" alt="Maria Marta Dukart">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#secCon">Prof. Maria Marta Dukart</a></h5>			
				<p class="card-text text-center" style="font-size: 0.9rem;">SECRETARIA CONSEJO DIRECTIVO</p>
			</div>
			</div>
		</div>
		<!-- Modal Secretaria Consejo -->	
		<!-- Modal -->
		<div class="modal fade" id="secCon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<i class="fa fa-phone"></i> 02954-451656<br>
				<i class="fa fa-envelope"></i> secretariaconsejo@humanas.unlpam.edu.ar<br>
				<i class="fa fa-map-marker"></i> Dirección: Cnel. Gil Nº 353, 2do. Piso, Santa Rosa
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>
		<!-- Modal Secretaria Consejo -->		
		<!-- Secretaria Extensión -->
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/auth/alainez-web.jpg" alt="Carlos Alainez">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#secExt">Prof. Carlos Alainez</a></h5>			
				<p class="card-text text-center" style="font-size: 0.9rem;">SECRETARIO DE EXTENSIÓN</p>
			</div>
			</div>
		</div>
		<!-- Modal Secretaria  Extensión -->	
		<div class="modal fade" id="secExt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!--<i class="fa fa-phone"></i> 02954-451656<br>-->
				<i class="fa fa-envelope"></i>  secretariaextension@humanas.unlpam.edu.ar <br>
				<i class="fa fa-map-marker"></i> Dirección: Calle 7 esq. 110, General Pico
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>
		<!-- Modal Secretaria Extensión -->	

		<!--PROSECRETARIO PRIVADO DEL DECANATO-->
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/auth/heredia-web.jpg" alt="Autoridades">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#proSec">Prof. Tomás Heredia</a></h5>
				<p class="card-text text-center" style="font-size: 0.8rem;">PROSECRETARIO PRIVADO DEL DECANATO</p>
			</div>
			</div>
		</div>

		<!-- Modal Prosecretario/Secretario Académico -->	
		<div class="modal fade" id="proSec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<i class="fa fa-phone"></i> 02954-451606<br>
				<i class="fa fa-envelope"></i> prosecretaria@humanas.unlpam.edu.ar<br>
				<i class="fa fa-map-marker"></i> Cnel. Gil Nº 353, 2do. Piso, Santa Rosa
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>
		<!-- Modal Prosecretario/Secretario Académico -->		
	</div>
	<!--Secretarias-->

		<!-- Rectora -->
		<div class="col-12 font-weight-bold text-center"><br>Colegio de la UNLPam</div>
		<div class="row d-flex justify-content-center mx-1">	
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/auth/acosta-web.jpg" alt="Autoridades">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#recCol">Esp. Melina Acosta</a></h5>
				<p class="card-text text-center" style="font-size: 0.9rem;">RECTORA COLEGIO DE LA UNLPAM</p>
			</div>
			</div>
		</div>
		<!-- Modal Rectora -->	
		<div class="modal fade" id="recCol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<i class="fa fa-phone"></i> 02954-437744<br>
				<i class="fa fa-envelope"></i> rectoriacolegiounlpam@humanas.unlpam.edu.ar<br>
				<i class="fa fa-map-marker"></i> 9 de Julio N° 149, Santa Rosa
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>

		<!-- Vicerector -->	
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/auth/marusich-web.jpg" alt="Autoridades">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#viceRec">Mg. Martín Marusich</a></h5>			
				<p class="card-text text-center" style="font-size: 0.9rem;">VICERRECTOR COLEGIO DE LA UNLPAM</p>
			</div>
			</div>
		</div>
		<!-- Modal ViceRector -->	
		<div class="modal fade" id="viceRec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<i class="fa fa-phone"></i> 02954-437744<br>
				<i class="fa fa-envelope"></i> rectoriacolegiounlpam@humanas.unlpam.edu.ar<br>
				<i class="fa fa-map-marker"></i> 9 de Julio N° 149, Santa Rosa
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>

		<!-- Secretaría Colegio-->	
		<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1">	
			<div class="card h-100">
			<img class="card-img-top" src="slim/images/teachars/auth/morales-web.jpg" alt="Autoridades">
			<div class="card-body">
				<h5 class="card-title text-center"><a href="" data-toggle="modal" data-target="#secCol">Esp. Tamara Morales</a></h5>
				<p class="card-text text-center" style="font-size: 0.9rem;">SECRETARIA COLEGIO DE LA UNLPAM</p>
			</div>
			</div>
		</div>

		<!-- Modal Secretaria -->
		<!-- Modal -->
		<div class="modal fade" id="secCol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<i class="fa fa-phone"></i> 02954-437744<br>
				<i class="fa fa-envelope"></i> secretariacolegiounlpam@humanas.unlpam.edu.ar<br>
				<i class="fa fa-map-marker"></i> 9 de Julio N° 149, Santa Rosa
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
		</div>
		</div>
	
	<!-- PROSECRETARIA COLEGIO DE LA UNLPAM -->	
	<div class="col-12 col-sm-6 col-md-4 col-lg-2 px-2 py-3 mb-1" id="proseccol">	
		<div class="card h-100">
		<img class="card-img-top" src="slim/images/teachars/auth/cantera-web.jpg" alt="...">
		<div class="card-body">
			<h5 class="card-title text-center text-center"><a href="#proseccol">Prof. Paula Cantera</a></h5>
			<p class="card-text text-center" style="font-size: 0.9rem;">PROSECRETARIA COLEGIO DE LA UNLPAM</p>
		</div>
		</div>
	</div>
	</div>
	<!-- PROSECRETARIA COLEGIO DE LA UNLPAM -->
	



	</div>	
    </div>
</section>
<!-- ./ End Teachers Area section -->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
    $('body').addClass('teachers-01');
});
</script>
@endsection
