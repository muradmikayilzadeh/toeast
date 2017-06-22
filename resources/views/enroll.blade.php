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

					<form action="" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
						
						<input type="text" placeholder="Name">

						<br><br>

						<input type="text" placeholder="Surname">

						<br><br>

						<input type="email" placeholder="E-mail">

						<br><br>

						<input type="phone" placeholder="Phone Number">

						<br><br>

						<input type="date">

						<br><br>

						<button type="submit" class="main-button">Submit</button>

					</form>

				</div>

			</div>

		</section>
		
@endsection