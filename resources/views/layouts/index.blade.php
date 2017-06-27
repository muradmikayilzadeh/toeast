<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>toeast.org</title>

	<!-- Links -->
	<link rel="stylesheet" href="{{url('assets/vendor/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Damion" rel="stylesheet">

</head>
<body>

<div class="container-fluid">
	

	<div class="row">
		
		<section id="header" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="row">

				<section id="menu" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					
					<div class="container">
						
						<div class="col-md-4">

							<img src="assets/images/logo/logo.png" class="img img-responsive">
							<i class="fa fa-bars hidden-md hidden-lg pull-right"></i>

						</div>

						<div class="col-md-8 hidden-sm hidden-xs">
							
							<div id="top" class="col-md-12 text-right">

								<span>Follow Us</span>

								<a href="" class="fa fa-facebook"></a>
								<a href="" class="fa fa-twitter"></a>
								<a href="" class="fa fa-google-plus"></a>
								<a href="" class="fa fa-instagram"></a>

							</div>

							<div id="bottom" class="col-md-12 text-right">
								
								<ul class="list list-inline">
									
									<li>
										<a href="{{url('/')}}">home</a>
									</li>

									<li>
										<a href="{{url('/about')}}">about</a>
									</li>

									<li>
										<a href="{{url('/alumni')}}">alumni</a>
									</li>

									<li>
										<a href="{{url('/gallery')}}">gallery</a>
									</li>

									<li>
										<a href="{{url('/news')}}">news</a>
									</li>

									<li>
										<a href="{{url('/contacts')}}">contacts</a>
									</li>

									<li>
										<a href="{{url('/enroll')}}">enroll now</a>
									</li>

								</ul>

							</div>

						</div>

					</div>

				</section>

				<section id="mobile-menu" class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
					
					<div class="container">
						
						<ul class="list list-inline">
									
							<li>
								<a href="{{url('/')}}">home</a>
							</li>

							<li>
								<a href="{{url('/about')}}">about</a>
							</li>

							<li>
								<a href="{{url('/alumni')}}">alumni</a>
							</li>

							<li>
								<a href="{{url('/gallery')}}">gallery</a>
							</li>

							<li>
								<a href="{{url('/news')}}">news</a>
							</li>

							<li>
								<a href="{{url('/contacts')}}">contacts</a>
							</li>

							<li>
								<a href="{{url('/enroll')}}">enroll now</a>
							</li>

						</ul>


					</div>

				</section>

				<section id="banner" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					
					<div class="container text-center">
						
						<div class="caption text-center col-md-12 col-sm-12 col-xs-12">
							
							<h1>make your summer</h1>

							<p>unforgotable!</p>
							
							<br class="hidden-xs">
							<a href="" class="main-button">request info</a>

						</div>

					</div>

				</section>

			</div>

		</section>
		
		@yield('content')

		<section id="footer" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<div id="about" class="col-md-3 col-sm-12 col-xs-12">
					
					<img src="assets/images/logo/logo.png" class="img img-responsive">

					<div class="description">
						7Hills is a New Hampshire summer camp with a heritage that dates back to 1926.
					</div>

					<a href="" class="fa fa-facebook"></a>
					<a href="" class="fa fa-twitter"></a>
					<a href="" class="fa fa-google-plus"></a>
					<a href="" class="fa fa-instagram"></a>

				</div>

				<div id="links" class="col-md-3 col-sm-12 col-xs-12">
					
					<h3 class="heading-footer">Usefull Links</h3>

					<ul class="list">
						
						<li>
							<a href="">- Welcome Message</a>
						</li>

						<li>
							<a href="">- Why Choose Us</a>
						</li>

						<li>
							<a href="">- Dates & Tuition</a>
						</li>

						<li>
							<a href="">- Our Virtual Tour</a>
						</li>

						<li>
							<a href="">- Watch the Video</a>
						</li>

						<li>
							<a href="">- Camp Activities</a>
						</li>

						<li>
							<a href="">- Cabins & Facilities</a>
						</li>

						<li>
							<a href="">- Summer Tutoring</a>
						</li>

						<li>
							<a href="">- Our Directors</a>
						</li>

					</ul>

				</div>

				@php
					use App\Blogs;

					$blogs = Blogs::orderBy('created_at','desc')->get();
				@endphp

				<div id="posts" class="col-md-3 col-sm-12 col-xs-12">
					
					<h3 class="heading-footer">recent posts</h3>
					
					@foreach($blogs as $blog)
					<div class="blog">

						<h4><a href="">{{$blog->title}}</a></h4>

						<div class="date">{{$blog->created_at->diffForHumans()}}</div>

						<div class="content">{!! substr($blog->content, 0,50)!!}</div>

					</div>
					@endforeach

				</div>

				<div id="gallery" class="col-md-3 col-sm-12 col-xs-12">
					
					<h3 class="heading-footer">from the gallery</h3>

					<div class="imgs">
						
						<img src="assets/images/footer/gallery/1.jpg" class="first img img-responsive">

						<img src="assets/images/footer/gallery/2.jpg" class="img img-responsive">

						<img src="assets/images/footer/gallery/3.jpg" class="img img-responsive">

						<img src="assets/images/footer/gallery/4.jpg" class="first img img-responsive">

						<img src="assets/images/footer/gallery/5.jpg" class="img img-responsive">

						<img src="assets/images/footer/gallery/6.jpg" class="img img-responsive">



					</div>


				</div>

			</div>

		</section>

		<section id="end" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				Toest.org © 2017 All Rights Reserved

				<a href="">
					<img src="assets/images/logo/mm.png" class="img img-responsive img-circle">
				</a>

			</div>

		</section>

	</div>
	

</div>

</body>
</html>
<!-- Scripts -->
<script src="assets/vendor/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/menu.js"></script>