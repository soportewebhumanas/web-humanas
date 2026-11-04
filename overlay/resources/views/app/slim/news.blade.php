@extends('layouts.home')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Noticias</h1>
						<p><span><a href="/index">Inicio <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Noticias</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>
<section class="events-list-03">
	<div class="container">
		<div class="row event-body-content">
		@foreach($news as $new)
			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="{{$new->file_path}}" alt="" class="img-responsive">
						</div>
						
						<div class="col-sm-7 event-info">
							<h3>{{ $new->title }}</h3>
							<p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									<?php echo date('d-m-Y', strtotime($new->date)) ?>
								</span>
								<span>
									<i class="fa fa-clock-o event-icon"></i>
									<?php echo date('H:i',strtotime($new->date)) ?> hs
								</span>
							</p>

							<p><?php echo substr($new->content,0,25);?>...</p>

							<a class="event-btn" href="{{siteUrl('/noticias/'.$new->id.'')}}">Ver mas<i class="fa fa-long-arrow-right events-btn-icon"></i></a>
						</div>
					</div>
				</div>	
			</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="event-bottom-btn">
					<a href="{{siteUrl('/noticias/all')}}" class="view-more-item">Ver más</a>
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
	// $('.pagination').jqPagination({
    // paged: function(page) {
    //     console.log(page);
    // }
	// });
	// let page = 1;
	// let currentscrollHeight: 0;
	// let lockScroll: false;

	// $(window).on("scroll", () => {
	// 	const scrollHeight = $(document).height() as number;
	// 	const scrollPos = Math.floor($(window).height() + $(window).scrollTop());
	// 	const isBottom = scrollHeight - 300 < scrollPos;

    // 	if (isBottom && currentscrollHeight < scrollHeight) {

    //     $.ajax({
    //         method: "POST",
    //         url: "{{siteUrl('/masNoticias')}}",
    //         dataType: "json",
    //         contentType: "application/json; charset=utf-8",
    //         data: JSON.stringify({ page: this.page })
    //     } as any)
    //     .done((posts: Post[]) => {
    //         this.page = this.page + 1;
    //         console.log(page);
    //     });

    //     currentscrollHeight = scrollHeight;
    // 	}
	// });
// });
	

	// var contador = 1;
	// $(".leer-mas").click(function(){
	// 	$.ajax({
	// 	type: 'get',
	// 	data: {},
	// 	url: "{{siteUrl('/masNoticias')}}",
	// 	success: function(data) {
	// 		}
	// 	});     
   	// });
	// console.log($(this).text());
	// contador = $(this).text();
});
</script>