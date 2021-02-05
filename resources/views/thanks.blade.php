@include('header')
	<section class="page-top-section set-bg" data-setbg="{{ url('/') }}/img/page-top-bg.jpg">
		<div class="container text-white">
			<h2></h2>
		</div>
	</section>
<!-- Thankyou  page-->
<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
 
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="{{ url('/') }}/" role="button">Continue to homepage</a>
  </p>
</div>
<!-- Thankyou  page-->
@include('footer')

