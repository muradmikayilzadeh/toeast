@extends('layouts.const')
		
		<link rel="stylesheet" href="{{url('assets/css/gallery.css')}}">

@section('content')
		<section id="page-address" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<p>gallery</p>

				<div class="address pull-right">
					<a href="index.html">home</a>
					<span> | </span>
					<a href="gallery.html">gallery</a>
				</div>


			</div>

		</section>
		


		<section id="gallery" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

			
			<div class="container text-center">

	
				@if(Auth::user())

					<h2 class="heading text-left">Add Picture(s)</h2>
					
					<form action="{{url('/gallery/picture-upload')}}" enctype="multipart/form-data" class="text-left" method="post">
						
						{{csrf_field()}}
						<input type="hidden" value="{{Auth::user()->id}}" name="author">
						<input type="file" name="pictures[]" multiple class="form-control">
						<br>
						<button type="submit" class="main-button" style="font-size: 1em; padding: 5px 20px;">add all</button>

					</form>

				@endif
				
				<h4 class="section-heading">-gallery-</h4>

				@if(count($imgs) != 0)
					
					<h2 class="heading">WATCH OUR SUMMER EVENTS</h2>

					@else

					<h2 class="heading">no pictures, come back later :)</h2>
					
				@endif

				<div id="imgs">
					
					@foreach($imgs as $img)
					
						<div class="img">
								
							<img src="{{$img->src}}" class="img img-responsive" title="{{$img->title}}">

						</div>

					@endforeach

				</div>
				

				<div class="great-img hidden col-md-12 col-sm-12 col-xs-12">
					
					<img src="" height="600px" width="100%" class="img img-responsive">
					
					<br>
					<button class="main-button back">go back</button>

				</div>

			</div>

		</section>

		{{-- <section id="twitter" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<div class="content col-md-12 col-sm-12 col-xs-12 col-lg-12">
					
					<i class="fa fa-twitter"></i>

					<p>@SummerC70217968 If you are looking for a simple yet unique solution for your kids and summer camp website, you are welcome to check @SummerC70217968 !@SummerC70217968 SummerCamp is one of the most powerful and user-friendly </p>

				</div>


			</div>

		</section> --}}

		<script src="{{url('assets/js/picture.js')}}"></script>

		
@endsection