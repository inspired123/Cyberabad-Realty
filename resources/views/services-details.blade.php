@include('header')



<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="{{url("img/page-top-bg.jpg")}}">
<div class="container text-white">
<h2>SINGLE LISTING</h2>
</div>
</section>
<!--  Page top end -->

<!-- Breadcrumb -->
<div class="site-breadcrumb">
<div class="container">
<a href=""><i class="fa fa-home"></i>Home</a>
<span><i class="fa fa-angle-right"></i>Service Listing</span>
</div>
</div>

		    <!-- NEW Properties section -->
		<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Newly listed services</h2>
          <p>Find your dream home from our Newly added properties</p>
        </div>
      </div>
    </div>
{{ csrf_field() }}
			<div class="row" id="load-data20">
				
				
				
			</div>
  </div>
</section>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>

$(document).ready(function(){
var _token = $('input[name="_token"]').val();


load_data20('', _token);    

function load_data20(id="", _token)
 {

  $.ajax({
   url:'{{url("services-details")}}',
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#remove-row20').remove();
    $('#load-data20').append(data);
   }
  })
 }
 
 $(document).on('click', '#btn-more20', function(){
  var id = $(this).data('id');

  
  $('#btn-more20').html('<b>Loading...</b>');
  load_data20(id, _token);
 });
});
 </script>
		


	@include('footer')