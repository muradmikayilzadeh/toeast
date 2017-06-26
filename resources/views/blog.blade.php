@extends('layouts.const')
		
		<link rel="stylesheet" href="{{url('assets/css/blog.css')}}">
		<script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>


@section('content')

		<section id="page-address" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			
			<div class="container">
				
				<p>{{$blog->title}} | {{$blog->user->name}}</p>

				<div class="address pull-right">
					<a href="index.html">home</a>
					<span> | </span>
					<a href="news.html">news</a>
				</div>


			</div>

		</section>
		
		<div class="container">
			
			@if(Auth::user())
				@if(Auth::user()->id == $blog->author)
					<p style="color:red;padding-top: 20px"><b>*it is editable</b></p>
				@endif
			@endif
			
			@if ($message = Session::get('success'))
		        <p><b>{{ $message }}</b></p>
		   	@endif

			<section id="blogs" class="col-md-8 col-xs-12 col-sm-12 col-lg-8">
				
				<div class="row text-left">
					

					<div class="blog" class="col-md-12 col-xs-12 col-sm-12 text-left">
						
						@if(Auth::user())

							@if(Auth::user()->id == $blog->author)

							<h2 class="heading">{{$blog->title}}</h2>

							<br>

							<form action="{{url('/news/delete')}}" method="post">
								
								{{csrf_field()}}
								<input type="hidden" name="id" value="{{$blog->id}}">
								<button type="submit" class="main-button">delete</button>

							</form>

						
							<form action="{{url('/news/update-title')}}" id="title-update" method="post" class="hidden">
								
								{{csrf_field()}}
								<input type="hidden" value="{{$blog->id}}" name="id">

								<input type="text" name="title" class="form-control" value="{{$blog->title}}">

								<br>

								<a href="#" class="main-button goback" style="font-size: 1em; padding: 5px 20px;">Back</a>

								<button type="submit" class="main-button" style="font-size: 1em; padding: 5px 20px;">Update</button>

							</form>

							<script>
								$(".heading").click(function(event) {
									$(this).addClass('hidden');
									$('#title-update').removeClass('hidden');
								});
								$(".goback").click(function(event) {
									$('.heading').removeClass('hidden');
									$('#title-update').addClass('hidden');
								});
							</script>

			{{-- ============================================================= --}}
							<br>
			{{-- ============================================================= --}}			
							<form action="{{url('/news/update-img')}}" method="post" class="update-picture" enctype="multipart/form-data">
								
								{{csrf_field()}}
								<input type="hidden" value="{{$blog->imgs->id}}" name="id">

								<label for="picture">
									<img src="../{{$blog->imgs->src}}" class="img img-responsive">
								</label>	
								<input type="file" id="picture" name="picture" class="hidden">	

							</form>

							<script>
								
								$('#picture').change(function(event) {
									$(".update-picture").submit();
								});

							</script>

			{{-- ============================================================= --}}
							<br>
			{{-- ============================================================= --}}

							<div class="description">{!!$blog->content!!}</div>

							<form action="{{url('/news/update-content')}}" id="content-update" method="post" class="hidden">
								
								{{csrf_field()}}
								<input type="hidden" value="{{$blog->id}}" name="id">

								<textarea name="content" id="" cols="30" rows="10">{{$blog->content}}</textarea>
								<script>CKEDITOR.replace( 'content' )</script>
								
								<br>

								<a href="#" class="main-button back" style="font-size: 1em; padding: 5px 20px;">Back</a>

								<button type="submit" class="main-button" style="font-size: 1em; padding: 5px 20px;">Update</button>

							</form>

							<script>
								$(".description").click(function(event) {
									$(this).addClass('hidden');
									$('#content-update').removeClass('hidden');
								});
								$(".back").click(function(event) {
									$('.description').removeClass('hidden');
									$('#content-update').addClass('hidden');
								});
							</script>

			{{-- ============================================================= --}}
							@endif

							@else

							<h2 class="heading">{{$blog->title}}</h2>

							<br>

							<img src="../{{$blog->imgs->src}}" class="img img-responsive">

							<br>

							<div class="description">{!!$blog->content!!}</div>

						@endif
												

					</div>		

					<div id="comments" class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-left">
						
						<div class="row">
							
							<h2 class="heading">comments</h2>


							<div id="disqus_thread"></div>
							<script>
							(function() {
							var d = document, s = d.createElement('script');
							s.src = 'https://toeast-org-1.disqus.com/embed.js';
							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
							})();
							</script>
							<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


						</div>

					</div>

				</div>

			</section>

			<section id="sidebar" class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
				
				<div class="sidebar-list ">
					
					<div id="search">

						<h2>Search</h2>
						<input type="text" class="search" placeholder="Keyword...">

						<hr>

					</div>

					<div class="result">
						
						<div class="row">
							
						</div>

					</div>

					<script>
						
						$('.search').keypress(function(event) {
							var keyword=$('.search').val()
							if(keyword!=' ' || keyword!=''){
								$.ajax({
									url: '{{url('/search/')}}',
									type: 'GET',
									dataType:'text',
									data: {keyword: keyword},
								})
								.done(function(data) {
									$('.result .row').html(data)
								})
								.fail(function() {
									console.log("error");
									})
								.always(function() {
									console.log("complete");
								});
							}
								
						});

					</script>

				</div>

			</section>

		</div>

@endsection