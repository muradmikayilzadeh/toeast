@extends('layouts.const')
		<link rel="stylesheet" href="{{url('assets/css/alumni.css')}}">
@section('content')
		<section id="page-address" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<p>alumni</p>

				<div class="address pull-right">
					<a href="index.html">home</a>
					<span> | </span>
					<a href="alumni.html">alumni</a>
				</div>


			</div>

		</section>

		<section id="alumnies" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container text-center">

				@if(Auth::user())

					<h2 class="heading text-left">add alumni</h2>

					<form action="{{url('/alumni/add-alumni')}}" enctype="multipart/form-data" method="post" class="text-left">

						{{csrf_field()}}
						<input type="text" class="form-control" placeholder="Name" name="name">
						<br>
						<input type="text" class="form-control" placeholder="Surname" name="surname">
						<br>
						<input type="file" class="form-control" name="picture">
						<br>
						<button type="submit" class="main-button" style="font-size: 1em; padding: 5px 20px;">add</button>
						
					</form>

				@endif
				
				<h4 class="section-heading">-alumnies-</h4>

				@if(count($alumnies) != 0)
					<h2 class="heading">alumnies of campus</h2>
				@else
					<h2 class="heading">no alumnies, come back later :)</h2>
				@endif
			
				@foreach($alumnies as $alumni)
				<div class="alumni col-md-4 col-sm-6 col-xs-12">
							
					<img src="{{$alumni->img}}" class="img img-responsive img-circle">

					<h3><a href="#">{{$alumni->name.' '.$alumni->surname}}</a></h3>
					<p>Alumni</p>

					@if(Auth::user())
						
						<form action="{{url('/alumni/delete-alumni')}}" method="post">
							
							{{csrf_field()}}
							<input type="hidden" value="{{$alumni->id}}" name="id">
							<button type="submit" class="main-button" style="font-size: 1em; padding: 5px 20px;">delete</button>

						</form>

					@endif

				</div>
				@endforeach

			</div>

		</section>

{{-- 		<section id="twitter" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<div class="content col-md-12 col-sm-12 col-xs-12 col-lg-12">
					
					<i class="fa fa-twitter"></i>

					<p>@SummerC70217968 If you are looking for a simple yet unique solution for your kids and summer camp website, you are welcome to check @SummerC70217968 !@SummerC70217968 SummerCamp is one of the most powerful and user-friendly </p>

				</div>


			</div>

		</section> --}}

@endsection