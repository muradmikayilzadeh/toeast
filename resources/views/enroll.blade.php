@extends('layouts.const')
		
		<link rel="stylesheet" href="{{url('assets/css/enroll.css')}}">

@section('content')
		<section id="page-address" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<p>enroll now</p>

				<div class="address pull-right">
					<a href="index.html">home</a>
					<span> | </span>
					<a href="enroll.html">enroll now</a>
				</div>

			</div>

		</section>

		<section id="enroll" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container text-center">
				
				<h4 class="section-heading">-enroll now-</h4>

				<h2 class="heading">Hurry Up!</h2>

				<!-- Display the countdown timer in an element -->
				
				<div id="timer">
					
					<p class="days"></p>
					<p class="hours"></p>
					<p class="minutes"></p>
					<p class="seconds"></p>

				</div>

				<script src="assets/js/timer.js"></script>


				<div id="form">
					
					<h2 class="heading">Fill out this form</h2>


					@if ($message = Session::get('success'))
				        <p><b>{{ $message }}</b></p>
				   	@endif

					<form action="{{url('/enroll/submit')}}" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3" method="post">
						
						{{csrf_field()}}
						<input type="text" placeholder="@if($errors->has('name')) Name field is required @else Name @endif" name="name">

						<br><br>

						<input type="text" placeholder="@if($errors->has('surname')) Surname field is required @else Surname @endif" name="surname">

						<br><br>

						<input type="email" placeholder="@if($errors->has('name')) E-mail field has a problem @else E-mail @endif" name="email">

						<br><br>

						<input type="phone" placeholder="@if($errors->has('name')) Phone field is required @else Phone @endif" name="phone">

						<br><br>

						<input type="date" name="date">

						<br><br>

						<button type="submit" class="main-button">Submit</button>

					</form>

				</div>

			</div>

		</section>
		
@endsection