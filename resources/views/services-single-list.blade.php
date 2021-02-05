@include('header')


<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="{{url('/')}}/img/page-top-bg.jpg">
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

<!-- Page -->
<section class="page-section">
<div class="container">
<div class="row">
<div class="col-lg-8 single-list-page">
<div class="single-list-slider owl-carousel" id="sl-slider">
    
<div class="sl-item set-bg" data-setbg="{{url('/')}}/img/page-top-bg.jpg">
<div class="sale-notic">Service Name</div>
</div>

</div>
 
<div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">

<div class="sl-thumb set-bg" data-setbg="{{url('/')}}/img/page-top-bg.jpg"></div>
</div>
<div class="single-list-content">
<div class="row">
<div class="col-xl-8 sl-title">
<h2>305 North Palm Drive</h2>
<p><i class="fa fa-map-marker"></i>Beverly Hills, CA 90210</p>
</div>
<!--div class="col-xl-4">
<a href="#" class="price-btn">$4,500,000</a>
</div-->
</div>
<h3 class="sl-sp-title">Service Details</h3>
<div class="row property-details-list">
    
<div class="col-md-4 col-sm-6">
<p><i class="fa fa-user"></i>name</p>
<p><i class="fa fa-envelope"></i>email</p>
<p><i class="fa fa-clock-o"></i> year</p>
</div>
<div class="col-md-4 col-sm-6">
<p><i class="fa fa-user"></i>enterprise_name</p>
<p><i class="fa fa-building-o"></i>branch</p>
<p><i class="fa fa-envelope"></i>websitelink</p>
</div>
<div class="col-md-4">
<p><i class="fa fa-phone"></i>phone</p>
<p><i class="fa fa-map-marker"></i>address</p>
</div>

</div>
<h3 class="sl-sp-title">Description</h3>
<div class="description">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus egestas fermentum ornareste. Donec index lorem. Vestibulum  aliquet odio, eget tempor libero. Cras congue cursus tincidunt. Nullam venenatis dui id orci egestas tincidunt id elit. Nullam ut vuputate justo. Integer lacnia pharetra pretium. Casan ante ipsum primis in faucibus orci luctus et ultrice.</p>
</div>
<h3 class="sl-sp-title">Additional Details</h3>
<div class="row property-details-list">
<div class="col-md-4 col-sm-6">
<p><i class="fa fa-folder" aria-hidden="true"></i><a href="#"> Licence Document </a></p>
<p><i class="fa fa-folder" aria-hidden="true"></i>  <a href="#">Material Chart</a> </p>

</div>


</div>






</div>
</div>
<!-- sidebar -->
<div class="col-lg-4 col-md-7 sidebar">
<div class="author-card">
<div class="author-img set-bg" data-setbg="img/author.jpg"></div>
<div class="author-info">
<h5>Gina Wesley</h5>
<p>Service agent</p>
</div>
<div class="author-contact">
<p><i class="fa fa-phone"></i>(567) 666 121 2233</p>
<p><i class="fa fa-envelope"></i>ginawesley26@gmail.com</p>
</div>
</div>
<div class="contact-form-card">
<h5>Do you have any question?</h5>
<form action="{{url('single_list_enquiry')}}" method="post" id="edituser">
    {{ csrf_field() }}
<input type="text" id="name" name="name" placeholder="Your name">
<span id="name-error"></span>
<input type="text" id="email" name="email" placeholder="Your email">
<textarea id="question" name="question" placeholder="Your question"></textarea>
<button id="submit">SEND</button>
</form>
</div>
<div class="related-properties">
<h2>Related Services</h2>
<div class="rp-item">
<div class="rp-pic set-bg" data-setbg="img/feature/1.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="rp-info">
<h5>1963 S Crescent Heights Blvd</h5>
<p><i class="fa fa-map-marker"></i>Los Angeles, CA 90034</p>
</div>

</div>
<div class="rp-item">
<div class="rp-pic set-bg" data-setbg="img/feature/2.jpg">
<div class="rent-notic">FOR SALE</div>
</div>
<div class="rp-info">
<h5>17 Sturges Road, Wokingham</h5>
<p><i class="fa fa-map-marker"></i> Newtown, CT 06470</p>
</div>

</div>
<div class="rp-item">
<div class="rp-pic set-bg" data-setbg="img/feature/4.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="rp-info">
<h5>28 Quaker Ridge Road, Manhasset</h5>
<p><i class="fa fa-map-marker"></i>28 Quaker Ridge Road, Manhasset</p>
</div>

</div>
<div class="rp-item">
<div class="rp-pic set-bg" data-setbg="img/feature/5.jpg">
<div class="rent-notic">FOR Rent</div>
</div>
<div class="rp-info">
<h5>Sofi Berryessa 750 N King Road</h5>
<p><i class="fa fa-map-marker"></i>Sofi Berryessa 750 N King Road</p>
</div>

</div>
</div>
</div>
</div>
</div>
</section>
<!-- Page end -->


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

	
	<script type="text/javascript">
		

		
		
		$(document).ready(function(){
		    
		    
		    $('#edituser').on('submit', function(event){
		       
  event.preventDefault();
  
  alert();

        $( '#name-error' ).html( "" );
        $( '#email-error' ).html( "" );
        $( '#question-error' ).html( "" );
	
		

        $.ajax({
            url:'{{ url('/')}}/single_list_enquiry',
            type:'POST',
            method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
            success:function(data) {
                console.log(data);
                if(data.errors) {
                    if(data.errors.name){
                        $( '#name-error' ).html( data.errors.name[0] );
                    }
                    if(data.errors.email){
                        $( '#email-error' ).html( data.errors.email[0] );
                    }
                    if(data.errors.question){
                        $( '#question-error' ).html( data.errors.question[0] );
                    }
                     
                   
					

                }
                if(data.success) {
                    $('#success3-msg').css('display','block');
                    setInterval(function(){ 
           // window.location.href="{{ url('/') }}";
                    }, 3000);
                }
            },
        });
    });
		    
		    
		    
		});
		
		</script>


	@include('footer')