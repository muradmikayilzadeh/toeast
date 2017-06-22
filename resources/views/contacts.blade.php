@extends('layouts.const')
		
		<link rel="stylesheet" href="{{url('assets/css/contacts.css')}}">

@section('content')
		<section id="page-address" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<p>contacts</p>

				<div class="address pull-right">
					<a href="index.html">home</a>
					<span> | </span>
					<a href="contacts.html">contacts</a>
				</div>


			</div>

		</section>

		<section id="map" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="row">
				
				<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d3039.0927132543015!2d49.828265910648504!3d40.38463774253919!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x40307d9bdc0dad95%3A0xe756231dabeb0aab!2sCaspian+Plaza!3m2!1d40.3846091!2d49.8286521!4m0!5e0!3m2!1sen!2s!4v1497952718812" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>

		</section>


		<section id="contact" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<div id="message" class="col-md-5 col-md-offset-2">
					
					<div class="row">
						
						<h4 class="section-heading">-contact form-</h4>

						<h2 class="heading">get in touch</h2>

						<form action="">
							
							<input type="text" placeholder="Name">
							<br><br>
							<input type="email" placeholder="E-mail">
							<br><br>
							<textarea placeholder="Message"></textarea>

							<button type="submit" class="main-button">submit</button>

						</form>

					</div>

				</div>

				<div id="contacts" class="col-md-3 col-md-offset-1">
					
					<div class="row">
						
						<h4 class="section-heading">-contact info-</h4>

						<h2 class="heading">contacts</h2>

						<div class="address">
							<h4>address</h4>
							<p>123, New Lenox Chicago, IL 60606</p>
						</div>

						<div class="phone">
							<h4>phone</h4>
							<p>123-456-7890</p>
						</div>

						<div class="email">
							<h4>email</h4>
							<p>info@yoursite.com</p>
						</div>

					</div>

				</div>

			</div>

		</section>
@endsection