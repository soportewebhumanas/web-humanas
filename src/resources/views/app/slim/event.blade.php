@extends('layouts.home')

@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Evento</h1>
						<p><span><a href="/index">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Evento</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>
<div class="event-details">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 post_left-side">
				<div class="row">
					<div class="col-sm-12 ">
						<div class="post-img-box">
							<img src="{{$event->file_path}}" alt="" class="img-responsive">
						</div>
						<div class="clock-countdown">
							<div class="site-config"></div>
							<div class="coundown-timer">
								<div class="single-counter"><span class="days" id="days"></span><span class="normal">Días</span></div>
								<div class="single-counter single-chag-color"><span class="hours" id="hours"></span><span class="normal">Horas</span></div>
								<div class="single-counter"><span class="minutes" id="minutes"></span><span class="normal">Minutos</span></div>
								<div class="single-counter single-chag-color"><span class="seconds" id="seconds"></span><span class="normal">Segundos</span></div>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="description-content">
							<div class="description-heading">
								<h3><a href="">{{$event->title}}</a></h3>
								<?php 
									$dia = date("Y-m-d H:i:s", strtotime($event->date));
									$year = date('Y', strtotime($event->date));
									$month = date('m',strtotime($event->date));
									$day = date('d',strtotime($event->date));
									$hour = date("H:i",strtotime($event->date));
									
								?>
								<p>
									<span><i class="fa fa-calendar"></i>{{$day}}-{{$month}}-{{$year}}, {{$hour}} hs</span>
									<span><i class="fa fa-map-marker"></i>{{$event->place['name']}}</span>
								</p>
							</div>
							<div class="description-text">
								<div class="row">
									<div class="col-sm-1">
										<div class="description-side-left">
											<ul class="pst-social-icon list-unstyled">
											  	<li><a href="" class="fa fa-facebook facebook"></a></li>
											 	<li><a href="" class="fa fa-linkedin linkedin"></a></li>
											 	<li><a href="" class="fa fa-instagram instagram"></a></li>
											 	<li><a href="" class="fa fa-youtube youtube"></a></li>
											 </ul>
										</div>
									</div>
									<div class="col-sm-11">
										<div class="description-text-right">
											<p>{!! $event->content !!}</p>
											<p class="description-speech">
											<i class="fa fa-quote-right"></i>
											Podemos poner algo fijo para que lean
											</p>
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>

					
				</div>	
			</div>


			<div class="col-sm-4">
				<div class="sidebar-text-post">							
					<div class="row">
						<div class="col-sm-12">
							<h3>Next Events</h3>
							<div class="categories-item-post">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-angle-right"></i>USA <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Norway<span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Russia<span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>London<span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Australia <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Singapur <span>(23)</span></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 blog-padding-none">
							<h3>Event tags</h3>
							<div class="populer-tags">		
								<div class="tagcloud">
									<a href="#">USA</a>
									<a href="#">Russia</a>
									<a href="#">Events</a>
									<a href="#">Learning</a>
									<a href="#">Norway</a>
									<a href="#">Australia</a>
									<a href="#">Speakers</a>
									<a href="#">Audio</a>
									<a href="#">Singapur</a>
								</div>
							</div>
						</div>	
					</div>		
				</div>						
			</div>
		</div>
	</div>	
</div>


@endsection
<script src="{{siteUrl('js/assets/count_down.js')}}"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
	$('body').addClass('event-details-1 timer');

});
</script>

<script>



// Set the date we're counting down to
var countDownDate = new Date("<?php echo $dia; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element 
  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;
  

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("days").innerHTML = 0;
  	document.getElementById("hours").innerHTML = 0;
  	document.getElementById("minutes").innerHTML = 0;
  	document.getElementById("seconds").innerHTML = 0;
  }
}, 1000);
</script>
