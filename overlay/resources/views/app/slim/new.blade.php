@extends('layouts.home')

@section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Noticias</h1>
						<p><span><a href="{{siteUrl('/index')}}">Inicio <i class='fa fa-angle-right'></i></a></span> <span><a href="{{siteUrl('/noticias')}}">Noticias <i class='fa fa-angle-right'></i></a></span><span class="b-active">Noticia</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- header-top -->
</header>

<div class="post_1_area">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 post_left-side">
				<div class="row">
					<div class="col-sm-12">
						<div class="post-img-box">
							<img src="{{siteUrl($new->file_path)}}" alt="" class="img-responsive">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="description-content">
							<div class="description-heading">
								<div class="time">
								<?php
									$month = date('m',strtotime($new->date));
									$day = date('d',strtotime($new->date));
									$year = date('Y',strtotime($new->date));
								?>
									<span>{{$day}} - {{$month}}</span>
									<span>{{$year}}</span>
								</div>
								<h3>{{$new->title}}</h3>
							</div>
							<div class="description-text">
								<div class="row">
									<div class="col-sm-12">
										<div class="description-text-right">
											<p>{!! $new->content !!}</p>
											@if ($new->has_quote > 0)
												<div class="description-speech">
												<i class="fa fa-quote-right"></i>
												{!! $new->quote !!}
												</div>
											@endif
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-12 post_slider">
						<div class="row">
							<h3>Noticias relacionadas</h3>
							<div class="col-md-4 col-sm-6 blog-single-item">
							    <div class="blog-post">
									<figure>
										<div class="figure-img"><img src="{{siteUrl('images/blog/post-01.jpg')}}" alt="" class="img-responsive"></div>
										<figcaption>
											<div><a href="#" class="read_more-btn">Leer más</a></div>
										</figcaption>
									</figure>
									<div class="courses-content-box">
										<div class="courses-content">
											<h4><a href="#">Pellentesque Vitae Tort Sem Pulvinar</a></h4>
											<p><span>By John Ryan</span> | <span>22Aug, 2019</span></p>
										</div>

									</div>
								</div><!-- Ends: .single courses -->
							</div><!-- Ends: . -->


							<div class="col-md-4 col-sm-6 blog-single-item">
							    <div class="blog-post">
									<figure>
										<div class="figure-img"><img src="{{siteUrl('images/blog/post-02.jpg')}}" alt="" class="img-responsive"></div>
										<figcaption>
											<div><a href="#" class="read_more-btn">Leer más</a></div>
										</figcaption>
									</figure>
									<div class="courses-content-box">
										<div class="courses-content">
											<h4><a href="#">Pellentesque Vitae Tort Sem Pulvinar</a></h4>
											<p><span>By John Ryan</span> | <span>22Aug, 2019</span></p>
										</div>

									</div>
								</div><!-- Ends: .single courses -->
							</div><!-- Ends: . -->

							<div class="col-md-4 col-sm-6 blog-single-item">
							    <div class="blog-post">
									<figure>
										<div class="figure-img"><img src="{{siteUrl('images/blog/post-03.jpg')}}" alt="" class="img-responsive"></div>
										<figcaption>
											<div><a href="#" class="read_more-btn">Leer más</a></div>
										</figcaption>
									</figure>
									<div class="courses-content-box">
										<div class="courses-content">
											<h4><a href="#">Pellentesque Vitae Tort Sem Pulvinar</a></h4>
											<p><span>By John Ryan</span> | <span>22Aug, 2019</span></p>
										</div>

									</div>
								</div><!-- Ends: .single courses -->
							</div><!-- Ends: . -->
						</div>
					</div><!--End .row-->
				</div>	
			</div>


			<div class="col-sm-4">
				<div class="sidebar-text-post">							
					<div class="row">
						<div class="col-sm-12 recent-post">
							<h3>Noticias recientes</h3>
							<div class="row">
							@foreach($recents_news as $rn)
								<div class="col-sm-12 recent-single">
									<div class="recent-content-item">
										<div class="img-box"><a href=""><img src="{{siteUrl('images/blog/post-03.jpg')}}" alt=""></a></div>
										<div class="recent-text pull-right">
							                <a href="#">{{$rn->title}}</a>
							                <p>{{$rn->date}} <span class="content"><i class="fa fa-comments"></i>5</span></p>
							            </div>
									</div>
								</div><!-- /.recent-single-item -->
							@endforeach
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h3>Categorias</h3>
							<div class="categories-item-post">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-angle-right"></i>Branding <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Advices<span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Advices<span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Audio<span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Uncategorized <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Video <span>(23)</span></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 blog-padding-none">
							<h3>Tags populares</h3>
							<div class="populer-tags">		
								<div class="tagcloud">
									<a href="#">Course</a>
									<a href="#">Education</a>
									<a href="#">Events</a>
									<a href="#">Learning</a>
									<a href="#">Photoshop</a>
									<a href="#">Student</a>
									<a href="#">Teacher</a>
									<a href="#">Audio</a>
									<a href="#">Video</a>
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
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    $('body').removeClass();
    $('body').addClass('post-1');
});
</script>