@include('header')


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->




	<!-- Page top section -->
	<section class="page-top-section single-blog set-bg " data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<div class="row">
				<div class="col-xl-8 offset-lg-2">
					
					<h2>Housing confidence hits record high as prices skyrocket</h2>
					<a href=""><i class="fa fa-user"></i>Amanda Seyfried</a>
					<a href=""><i class="fa fa-clock-o"></i>25 Jun 2018</a>
				</div>
			</div>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Blog Details</span>
		</div>
	</div>

	<!-- page -->
	<section class="page-section single-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-1 blog-share">
					<h5>Share</h5>
					<div class="share-links">
						<a href="https://www.facebook.com/pg/Cyberabad-Realty-279689088743322/community/?ref=page_internal" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/RealtyCyberabad" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="https://www.linkedin.com/groups/10542287/" class="instagram"><i class="fa fa-linkedin"></i></a>
						<a href="https://www.youtube.com/channel/UCQmNfP5pkjoPsHnPD71TsSA" class="pin"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
				<div class="col-md-10 singel-blog-content">
				@foreach($blog as $bl)
					<img src="{{$bl->logo}}" alt="">
					<p>Housing Trends
There may be no more universal topic for your potential audience than that of real estate. Whether you’re trying to reach sellers or buyers, discussing trends in home sales, mortgage rates, and lending restrictions is a good place to invest energy.

Tip: Create Google Alerts around specific housing trends to get timely info you can use for your content.</p>
					<p>Local Events
Who doesn’t want to know about events in the community you spend most of your time? From festivals to community projects and estate sales to charity 5Ks, let readers know about any upcoming, notable events in your real estate market.

Tip: Subscribe to event updates from local websites and newspaper sites to keep tabs on what’s going on.</p>
					<blockquote>
						Whether it’s the best gym to get in shape or the ideal place for that hike with the dog, providing some great places to get some exercise is a fabulous idea for blog content.
					</blockquote>
					<p>Unfortunately, it can be tough for residents to know where the best place to take their pets is. From dog groomers to dog-friendly restaurants, provide a list of recommended places for dog lovers to check out.

Tip: Encourage folks to share pics of their own four-legged friends. Great for getting engagement on your blog.</p>
					@endforeach
					<!--<div class="blog-tags">-->
					<!--	<p>Tag:</p>-->
					<!--	<a href="#">#news,</a>-->
					<!--	<a href="#">#realestate,</a>-->
					<!--	<a href="#">#investment,</a>-->
					<!--	<a href="#"> #price,</a>-->
					<!--	<a href="#">#market</a>-->
					<!--</div>-->
					<!--<div class="post-author">-->
					<!--	<div class="pa-thumb set-bg" data-setbg="img/blog/author.jpg"></div>-->
					<!--	<div class="pa-content">-->
					<!--		<h4>AMANDA SEYFIRED</h4>-->
					<!--		<p>Mauris lectus justo, tempor ac auctor at, congue id erat. Pellentesque et massa odio. Fusce vel fermentum tortor, nec gravida ligula. Vivamus at malesuada tortor, in posuere ex.</p>-->
					<!--	</div>-->
					<!--</div>-->
					<!--<div class="comment-warp">-->
					<!--	<h4 class="comment-title">3 Comments</h4>-->
					<!--	<ul class="comment-list">-->
					<!--		<li>-->
					<!--			<div class="comment">-->
					<!--				<div class="comment-avator set-bg" data-setbg="img/blog/comment/1.jpg"></div>-->
					<!--				<div class="comment-content">-->
					<!--					<h5>Lucia Mendes <span>24 Mar 2018</span></h5>-->
					<!--					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. finibus eros eget purus vulputate, sit amet ornare ipsum. Ut enim ad minim veniam. Donec tincidunt sem non odio congue.</p>-->
					<!--					<a href="" class="c-btn">Like</a>-->
					<!--					<a href="" class="c-btn">Reply</a>-->
					<!--				</div>-->
					<!--			</div>-->
					<!--			<ul class="replay-comment-list">-->
					<!--				<li>-->
					<!--					<div class="comment">-->
					<!--						<div class="comment-avator set-bg" data-setbg="img/blog/comment/2.jpg"></div>-->
					<!--						<div class="comment-content">-->
					<!--							<h5>Peter Simon<span>25 Jun 2018</span></h5>-->
					<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore iron man dolore magna aliqua. fpurus vulputate, sit amet ornare ipsum. Ut enim ad minim veniam. Donec tincidunt sem non odio congue.</p>-->
					<!--							<a href="" class="c-btn">Like</a>-->
					<!--							<a href="" class="c-btn">Reply</a>-->
					<!--						</div>-->
					<!--					</div>-->
					<!--				</li>-->
					<!--			</ul>-->
					<!--		</li>-->
					<!--		<li>-->
					<!--			<div class="comment">-->
					<!--				<div class="comment-avator set-bg" data-setbg="img/blog/comment/3.jpg"></div>-->
					<!--				<div class="comment-content">-->
					<!--					<h5>Gina Haspel<span>25 Jun 2018</span></h5>-->
					<!--					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. finibus eros eget purus vulputate, sit amet ornare ipsum. Ut enim ad minim veniam. Donec tincidunt sem non odio congue.</p>-->
					<!--					<a href="" class="c-btn">Like</a>-->
					<!--					<a href="" class="c-btn">Reply</a>-->
					<!--				</div>-->
					<!--			</div>-->
					<!--		</li>-->
					<!--	</ul>-->
						<div class="comment-form-warp">
							<h4 class="comment-title">Leave Your Comment</h4>
							<form action="{{url('blogcontact-submit')}}" class="comment-form" method="POST" id="edituser">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-md-6">
										<input id="name" name="name" class="name" type="text" placeholder="Your Name">
										<strong id="name-error"></strong>
									</div>
									<div class="col-md-6">
										<input id="email" name="email" class="email" type="email" placeholder="Your Email">
										<strong id="email-error"></strong>
									</div>
									<div class="col-lg-9">
										<textarea id="message" name="message" class="message" placeholder="Your Message"></textarea>
										<strong id="message-error"></strong>
										<button name="submit" id="submit" class="site-btn">SEND COMMENT</button>
									</div>
								</div>
							</form>
						</div>
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

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page end-->
       

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


	@include('footer')
	<script type="text/javascript">


    $(document).ready(function() {
	
		    
 $('#edituser').on('submit', function(e){
 alert();
 
            e.preventDefault();


        $( '#name-error' ).html( "" );
        $( '#email-error' ).html( "" );
		$( '#message-error' ).html( "" );

            var _token = $("input[name='_token']").val();
        
			
            $.ajax({
			
                url: "{{ url('blogcontact-submit') }}",
                type:'POST',
				 method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
                success: function(data) {

                       if(data.errors) {
           
                    if(data.errors.name){
                        $( '#name-error' ).html( data.errors.name[0] );
                    }
                    if(data.errors.title){
                        $( '#email-error' ).html( data.errors.title[0] );
                    }
					if(data.errors.title){
                        $( '#message-error' ).html( data.errors.title[0] );
                    }
					
               
					

                    }
                                    if(data.success) {
                    $('#super').text('contact Added successfully');
                
                    $("#edituser")[0].reset();

                }
                
            }


        }); 



    });

  });
</script>
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
