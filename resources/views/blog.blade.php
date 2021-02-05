@include('header')


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>Blog grid</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Blog Grid</span>
		</div>
	</div>

	<!-- page -->
	<section class="page-section blog-page">
		<div class="container">
			<div class="row">
			    @foreach($blog as $bl)
				<!-- blog post -->
				<div class="col-lg-4 col-md-6 blog-item">
				
					<img src="{{$bl->logo}}" alt="">
					<h5><a href="{{url('blog-details')}}">{{$bl->title}}</a></h5>
					<div class="blog-meta">
						<span><i class="fa fa-user"></i>{{$bl->name}}</span>
						<span><i class="fa fa-clock-o"></i>{{$bl->created_at}}</span>
					</div>
					<p>Housing Trends
There may be no more universal topic for your potential audience than that of real estate. Whether you’re trying to reach sellers or buyers, discussing trends in home sales, mortgage rates, and lending restrictions is a good place to invest energy.

Tip: Create Google Alerts around specific housing trends to get timely info you can use for your content..</p>
				
				</div>
				<!-- blog post -->
				<!--<div class="col-lg-4 col-md-6 blog-item">-->
				<!--	<img src="img/blog/2.jpg" alt="">-->
				<!--	<h5><a href="#">Taylor Swift is selling her $2.95 million Beverly Hills mansion</a></h5>-->
				<!--	<div class="blog-meta">-->
				<!--		<span><i class="fa fa-user"></i>Amanda Seyfried</span>-->
				<!--		<span><i class="fa fa-clock-o"></i>25 Jun 201</span>-->
				<!--	</div>-->
				<!--	<p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>-->
				<!--</div>-->
				<!-- blog post -->
				@endforeach
				
			</div>
			<!--<div class="site-pagination">-->
			<!--	<span>1</span>-->
			<!--	<a href="#">2</a>-->
			<!--	<a href="#">3</a>-->
			<!--	<a href="#"><i class="fa fa-angle-right"></i></a>-->
			<!--</div>-->
		</div>
	</section>
	<!-- page end -->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Newly listed properties</h2>
          <p>Find your dream home from our Newly added properties</p>
        </div>
      </div>
    </div>
{{ csrf_field() }}
			<div class="row" id="load-data">
				
				
				
			</div>
  </div>
</section>

	<!-- Clients section -->
	<div class="clients-section">
		<div class="container">
			<div class="clients-slider owl-carousel">
				<a href="#">
					<img src="img/partner/1.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/2.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/3.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/4.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/5.png" alt="">
				</a>
			</div>
		</div>
	</div>
	<!-- Clients section end -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

$(document).ready(function(){
var _token = $('input[name="_token"]').val();


load_data('', _token);

 function load_data(id="", _token)
 {

  $.ajax({
   url:'{{url("home-properties")}}',
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#remove-row').remove();
    $('#load-data').append(data);
	 $('#load-data2').append(data);
   }
  })
 }

     $(document).on('click', '#btn-more', function(){
  var id = $(this).data('id');

  
  $('#btn-more').html('<b>Loading...</b>');
  load_data(id, _token);
 });
});
</script>

	@include('footer')