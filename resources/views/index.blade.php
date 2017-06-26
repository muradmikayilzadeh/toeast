@extends('layouts.index')
@section('content')
		<section id="cards" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<div class="card col-md-4 col-sm-6 col-xs-12">
					
					<div class="body text-center green">

						<img src="assets/images/cards/1.jpg" class="img img-responsive">
						<div class="heading">Photos</div>
						<p>visit gallery</p>

						<br>
						<a href="{{url('/gallery')}}" class="more">more</a>
						<br><br><br>

					</div>

				</div>

				<div class="card col-md-4 col-sm-6 col-xs-12">
					
					<div class="body text-center red">

						<img src="assets/images/cards/2.jpg" class="img img-responsive">
						<div class="heading">Alumni</div>
						<p>STAY IN TOUCH</p>

						<br>
						<a href="{{url('/alumni')}}" class="more">more</a>
						<br><br><br>

					</div>

				</div>

				<div class="card col-md-4 col-sm-6 col-xs-12">
					
					<div class="body text-center yellow">

						<img src="assets/images/cards/3.jpg" class="img img-responsive">
						<div class="heading">Staff Positions</div>
						<p>JOIN THE TEAM</p>

						<br>
						<a href="{{url('/about')}}" class="more">more</a>
						<br><br><br>

					</div>

				</div>

			</div>

		</section>

		<section id="about" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<div id="info" class="col-md-6 col-sm-12 col-xs-12">
					
					<h4 class="section-heading">-about us-</h4>
				
					<h2 class="heading">WE ARE THE BEST SUMMER CAMP!</h2>

					<div class="description">
						7Hills Camp is for Boys and Girls.
						Nestled on the sandy beaches of beautiful Lake Ossipee amidst the White Mountains of New Hampshire, Camp offers a summer experience rich in fun, friendship, learning and adventure. Campers range in age from seven to fifteen.
					</div>
					<br><br>
					<a href="{{url('/about')}}" class="main-button">find out more</a>

				</div>

				<div id="facilities" class="col-md-6 col-sm-12 col-xs-12">
					
					<h2 class="heading">facilities</h2>

					<ul class="list">
						
						<li>
							<i class="fa fa-check"></i>
							BOYS & GIRLS
						</li>

						<li>
							<i class="fa fa-check"></i>
							AGES 7-15
						</li>

						<li>
							<i class="fa fa-check"></i>
							TEAM & INDIVIDUAL SPORTS
						</li>

						<li>
							<i class="fa fa-check"></i>
							PERFORMING & CREATIVE ARTS
						</li>

						<li>
							<i class="fa fa-check"></i>
							WATERFRONT ACTIVITIES
						</li>

						<li>
							<i class="fa fa-check"></i>
							SPECIAL EVENTS & TRIPS
						</li>

						<li>
							<i class="fa fa-check"></i>
							PROFESSIONAL STAFF
						</li>

					</ul>


				</div>

			</div>

		</section>

		<section id="blogs" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container text-center">
				
				<h4 class="section-heading">-blog feed-</h4>
				
				<h2 class="heading">official blog updates</h2>
				
				<div id="blog" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					
					<div class="blog col-md-4 col-sm-6 col-xs-12">
						
						<div class="body">
							
							<img src="assets/images/blog/1.jpg" class="img img-responsive">

							<h2><a href="">We Teach Your Kids that Responsibility is</a></h2>

							<p class="date">FEB 29, 2017</p>

							<div class="text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nemo, culpa. Nemo, doloremque ducimus, quos autem modi, voluptate unde veritatis deleniti sint architecto, optio dignissimos nihil perspiciatis excepturi qui. Odio.
							</div>

							<div class="info">
							
								<span class="admin">by Admin</span>

							</div>

						</div>

					</div>

					<div class="blog col-md-4 col-sm-6 col-xs-12">
						
						<div class="body">
							
							<img src="assets/images/blog/2.jpg" class="img img-responsive">

							<h2><a href="">We Teach Your Kids that Responsibility is</a></h2>

							<p class="date">FEB 29, 2017</p>

							<div class="text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nemo, culpa. Nemo, doloremque ducimus, quos autem modi, voluptate unde veritatis deleniti sint architecto, optio dignissimos nihil perspiciatis excepturi qui. Odio.
							</div>

							<div class="info">

								<span class="admin">by Admin</span>

							</div>

						</div>

					</div>

					<div class="blog col-md-4 col-sm-6 col-xs-12">
						
						<div class="body">
							
							<img src="assets/images/blog/3.jpg" class="img img-responsive">

							<h2><a href="">We Teach Your Kids that Responsibility is</a></h2>

							<p class="date">FEB 29, 2017</p>

							<div class="text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nemo, culpa. Nemo, doloremque ducimus, quos autem modi, voluptate unde veritatis deleniti sint architecto, optio dignissimos nihil perspiciatis excepturi qui. Odio.
							</div>

							<div class="info">

								<span class="admin">by Admin</span>

							</div>

						</div>

					</div>

				</div>

				<div class="button-div col-md-12 col-sm-12 col-xs-12 col-lg-12">

					<br><br><br>
					<a href="{{url('/news')}}" class="main-button">view more</a>

				</div>

			</div>

		</section>


		<section id="staff" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container text-center">
				
				<h4 class="section-heading">-our staff-</h4>
				
				<h2 class="heading">meet our leadership</h2>

				<div id="team" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					
					<div class="row">
						
						<div class="staff col-md-4 col-sm-6 col-xs-12">
							
							<img src="assets/images/staff/1.jpg" class="img img-responsive img-circle">

							<h3><a href="">Daniel Green</a></h3>
							<p>CEO</p>

							<a href="" class="fa fa-facebook"></a>
							<a href="" class="fa fa-twitter"></a>
							<a href="" class="fa fa-google-plus"></a>

						</div>

						<div class="staff col-md-4 col-sm-6 col-xs-12">
							
							<img src="assets/images/staff/2.jpg" class="img img-responsive img-circle">

							<h3><a href="">Daniel Green</a></h3>
							<p>CEO</p>

							<a href="" class="fa fa-facebook"></a>
							<a href="" class="fa fa-twitter"></a>
							<a href="" class="fa fa-google-plus"></a>

						</div>

						<div class="staff col-md-4 col-sm-6 col-xs-12">
							
							<img src="assets/images/staff/3.jpg" class="img img-responsive img-circle">

							<h3><a href="">Daniel Green</a></h3>
							<p>CEO</p>

							<a href="" class="fa fa-facebook"></a>
							<a href="" class="fa fa-twitter"></a>
							<a href="" class="fa fa-google-plus"></a>

						</div>

					</div>

				</div>
				<div class="button-div col-md-12 col-sm-12 col-xs-12 col-lg-12">

					<br><br><br>
					<a href="{{url('/about')}}" class="main-button">view more</a>

				</div>


			</div>

		</section> 

		<section id="contact" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<div  id="message" class="col-md-4">
					
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

				<div class="col-md-3 col-md-offset-1">
					
					<div class="row">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3039.0614581024306!2d49.82919300452783!3d40.38533048138304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1496786288717" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

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

		</section>
 --}}
		
@endsection