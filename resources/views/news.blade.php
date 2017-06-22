@extends('layouts.const')

		<link rel="stylesheet" href="{{url('assets/css/news.css')}}">

@section('content')

		<section id="page-address" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<p>news</p>

				<div class="address pull-right">
					<a href="index.html">home</a>
					<span> | </span>
					<a href="news.html">news</a>
				</div>


			</div>

		</section>

		<section id="blogs" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container text-center">
				
				<h4 class="section-heading">-news-</h4>
				
				@foreach($blogs as $blog)
				<div class="blog" class="col-md-12 col-xs-12 col-sm-12 text-center">
					
					<h2 class="heading">{{$blog->title}}</h2>

					<div class="date">
						{{$blog->created_at}} | 
						By {{$blog->user->name}}
					</div>

					<img src="assets/images/blog/4.jpg" class="img img-responsive">

					<br>

					<div class="description">
						{{substr($blog->content,0,100)}}
					</div>
					<br>
					<a href="" class="main-button">read more</a>
					<br><br><br>

				</div>	
				@endforeach	

			</div>

		</section>

@endsection