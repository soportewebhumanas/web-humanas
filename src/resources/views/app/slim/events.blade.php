@extends('layouts.home')

@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Eventos</h1>
						<p><span><a href="/index">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Eventos</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>
<section class="events-list-03">
	<div class="container">
		<div class="row event-body-content">
		@foreach($events as $event)
			@if($loop->even)
			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="{{$event->file_path}}" alt="" class="img-responsive">
						</div>
						
						<div class="col-sm-7 event-info">
							<h3>{{ $event->title }}</h3>
							<p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									<?php echo date('d-m-Y', strtotime($event->date)) ?>
								</span>
								<span>
									<i class="fa fa-clock-o event-icon"></i>
									<?php echo date('H:i',strtotime($event->date)) ?> hs
								</span>
								<span>
									<i class="fa fa-map-marker event-icon"></i>
									{{$event->place['name']}}										
								</span>
								<span>
									<i class="fa fa-thumb-tack"></i>
									{{$event->type['name']}}										
								</span>
							</p>

							<p><?php echo substr($event->content,0,25);?>...</p>

							<a class="event-btn" href="{{siteUrl('/eventos/'.$event->id.'')}}">Ver mas<i class="fa fa-long-arrow-right events-btn-icon"></i></a>
						</div>
					</div>
				</div>	
			</div>
			@endif
			@if($loop->odd)
			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">						
						<div class="col-sm-7 event-info">
							<h3>{{$event->title}}</h3>
							<p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									<?php echo date('d-m-Y', strtotime($event->date)) ?>
								</span>
								<span>
									<i class="fa fa-clock-o event-icon"></i>
									<?php echo date('H:i',strtotime($event->date)) ?> hs
								</span>
								<span>
									<i class="fa fa-map-marker event-icon"></i>
									{{$event->place['name']}}										
								</span>
								<span>
									<i class="fa fa-thumb-tack"></i>
									{{$event->type['name']}}										
								</span>
							</p>

							<p><?php echo substr($event->content,0,25); ?></p>

							<a class="event-btn" href="{{siteUrl('/eventos/'.$event->id.'')}}">Ver mas<i class="fa fa-long-arrow-right events-btn-icon"></i></a>
						</div>
						<div class="col-sm-5">
							<img src="{{$event->file_path}}" alt="" class="img-responsive">
						</div>							
					</div>
				</div>	
			</div>
			@endif
		@endforeach
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="event-bottom-btn">
					<a href="{{siteUrl('/eventos/all')}}" class="view-more-item">Ver más</a>
				</div>
			</div>
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
    $('body').addClass('event-01');
});
</script>


