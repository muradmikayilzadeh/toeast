@extends('layouts.const')

		<link rel="stylesheet" href="{{url('assets/css/news.css')}}">
		<script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>

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
		
		@if(Auth::user())
			<section id="add-blog" class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				
				<div class="container">
					
					<h2 class="heading">Add Blog</h2>

					@if ($message = Session::get('success'))
		                 <b>{{ $message }}</b>
		            @endif

					<form action="{{url('/create-news')}}" method="post" enctype="multipart/form-data">
						
						{{csrf_field()}}
						<input type="hidden" value="{{Auth::user()->id}}" name="author">

						<input type="text" name="title" class="form-control" placeholder="Title">

						<br>

						<textarea name="content" cols="30" rows="10" placeholder="Content..."></textarea>
						<script>CKEDITOR.replace( 'content' )</script>

						<br>

						<input type="file" name="picture" class="form-control">

						<br>

						<button class="main-button pull-right" type="submit" style="font-size: 1em; padding: 5px 20px;">Add</button>

					</form>

				</div>

			</section>
		@endif

		<section id="blogs" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container text-center">
				
				<h4 class="section-heading">-news-</h4>
				
				@if(count($blogs) != 0)
					
					@foreach($blogs as $blog)
						<div class="blog" class="col-md-12 col-xs-12 col-sm-12 text-center">
							
							<h2 class="heading">{{$blog->title}}</h2>

							<div class="date">
								{{$blog->created_at->diffForHumans()}} | 
								By {{$blog->user->name}}
							</div>

							<img src="{{$blog->imgs->src}}" class="img img-responsive">

							<br>
							<a href="{{url('/news',$blog->slug)}}" class="main-button">read</a>
							<br><br><br>

						</div>	
					@endforeach	

					@else
					
					<h2 class="heading">no information, come back later! :)</h2>

				@endif

			</div>

		</section>

@endsection