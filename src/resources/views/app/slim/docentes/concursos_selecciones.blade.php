@extends('layouts.home')

@section('content')
</header>
			<section class="become-teachers-01">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center become-title">
							<h2>Secretaría Académica - Llamado a selección</h2>
							<h3>Llamado a selección de aspirantes para cubrir cargos docentes interinos</h3>
							<span class="line"></span>
			            </div>
			        	<section>
							@foreach($llamadosSeleccion as $llamadoSeleccion)
							@if ($llamadoSeleccion->activo)
								<div class="col-sm-12 content_body" style=" padding-left:15vw; padding-right: 15vw;">
									  <div class="panel panel-primary">
									  	<center class="panel-heading">
									  		<h4 style="padding: 0;">{{$llamadoSeleccion->asignatura ." - ". $llamadoSeleccion->cargo}}</h4>
									  	</center>
										<div class="panel-body">
										  	<table class="table table-hover" style="width:100%;">
												<tbody style="color:black;">
													<tr class="row">
														<th class="col-sm-4">Cargo Interino</th>
														<td class="col-sm-6 text-right">{{ $llamadoSeleccion->cargo ?? '-' }}</td>
													</tr>
													<tr class="row">
													   	<th class="col-sm-4">Dedicación /HS</th>
													   	<td class="col-sm-6 text-right">{{ $llamadoSeleccion->dedicacion ?? '-' }}</td>
												    </tr>
													<tr class="row">
														<th class="col-sm-4">Asignatura</th>
														<td class="col-sm-6 text-right">{{ $llamadoSeleccion->asignatura ?? '-' }}</td>
													</tr>
													<tr class="row">
												    	<th class="col-sm-4">Dept./Carrera</th>
												    	<td class="col-sm-6 text-right">{{$llamadoSeleccion->departamento." - " .$llamadoSeleccion->carrera ?? '-' }}</td>
													</tr>
													<tr class="row">
													    <th class="col-sm-4">Plan</th>
													    <td class="col-sm-6 text-right">{{ $llamadoSeleccion->plan ?? '-' }}</td>
													</tr>
													<tr class="row">
													    <th class="col-sm-4">Observación</th>
													    <td class="col-sm-6 text-right">{{ $llamadoSeleccion->observacion ?? '-' }}</td>
													</tr>
												</tbody>
											</table>
								  	  		<?php 
												$fechaInicio=new DateTime($llamadoSeleccion->inicio_inscripcion);
												$inicioStr = $fechaInicio->format("d/m/Y H:i")."hs";

												$fechaFin=new DateTime($llamadoSeleccion->fin_inscripcion);
												$finStr = $fechaFin->format("d/m/Y H:i")."hs";
											?>
											<div>
												<h5 style="text-align: left;">Inscripción</h5>
												<ul>
													<li style="text-align: left;"><b>Desde:</b> {{$inicioStr}}</li>
													<li style="text-align: left;"><b>Hasta:</b> {{$finStr}}</li>
												</ul>
											</div>
									  	</div>

										
										@php $url = $llamadoSeleccion->enlace_inscripcion @endphp
										<center><a href="{{$url ?? '#' }}"><button type="button" class="btn btn-primary" style="margin:10px;">Enlace de inscripción</button></a></center>
									</div>
								</div>
							@endif
							@endforeach
						</section>		
        </div>
       
	</div>
</section>
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