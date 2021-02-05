@include('header')


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{ url('/') }}/img/page-top-bg.jpg">
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
			<div id="map-canvas"></div>
			<div class="contact-info-warp">
				<p><i class="fa fa-map-marker"></i>3711-2880 Nulla St, Mankato, Mississippi</p>
				<p><i class="fa fa-envelope"></i>info.leramiz@colorlib.com</p>
				<p><i class="fa fa-phone"></i>(+88) 666 121 4321</p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<img src="img/contact.jpg" alt="">
				</div>
				<div class="col-lg-6">
					<div class="contact-right">
						<div class="section-title">
							<h3>Get in touch</h3>
							<p>Browse houses and flats for sale and to rent in your area</p>
							   
						</div>
						 <span id="super" style="color:green;font-size: 23px;font-weight: 700;"></span>
						<form class="contact-form" action="{{ url('contact_submit')}}"  name="form" method="post"  id="edituser">
						 {{ csrf_field() }}
							<div class="row">
								<div class="col-md-6">
									<input type="text" id="name" name="name" placeholder="Your name">
									 <span class="text-danger">
                                <strong id="name-error"></strong>
                            </span>
								</div>
								<div class="col-md-6">
									<input type="text" id="email" name="email" placeholder="Your email">
									 <span class="text-danger">
                                <strong id="email-error"></strong>
                            </span>
								</div>
							
								<div class="col-md-6">
									<input type="text" id="phone" name="phone" placeholder="Your phone">
									 <span class="text-danger">
                                <strong id="phone-error"></strong>
                            </span>
								</div>
								<div class="col-md-6">
									<input type="text" id="subject" name="subject" placeholder="Your subject">
									 <span class="text-danger">
                                <strong id="subject-error"></strong>
                            </span>
								</div>
								<div class="col-md-12">
									<textarea  id="message" name="message" placeholder="Your message"></textarea>
									<span class="text-danger">
                                <strong id="message-error"></strong>
                            </span>
									<button class="site-btn" name="submit" id="submit">SUBMIT NOW</button>
								</div>
							</div>
								</div>
									</div>
										</div>
											</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page end -->


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


    $(document).ready(function() {
		    
 $('#edituser').on('submit', function(e){
            e.preventDefault();


        $( '#name-error' ).html( "" );
    	$( '#email-error' ).html( "" );
    	$( '#phone-error' ).html( "" );
    	$( '#subject-error' ).html( "" );
		$( '#message-error' ).html( "" );
		

            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            var phone = $("input[name='phone']").val();
            var subject = $("input[name='subject']").val();
            var email = $("input[name='email']").val();
            var message = $("textarea[name='message']").val();


            $.ajax({
                url: "{{ url('contact-submit') }}",
                type:'POST',
                data: {_token:_token, name:name, email:email, phone:phone, subject:subject, message:message},
                success: function(data) {

                       if(data.error) {
           
                    if(data.error.name){
                        $( '#name-error' ).html( data.error.name[0] );
                    }
                    if(data.error.email){
                        $( '#email-error' ).html( data.error.email[0] );
                    }
                     if(data.error.phone){
                        $( '#phone-error' ).html( data.error.phone[0] );
                    }
                    if(data.error.subject){
                        $( '#subject-error' ).html( data.error.subject[0] );
                    }
               		if(data.error.message){
                        $( '#message-error' ).html( data.error.message[0] );
                    }
					

                    }
                    if(data.error == '1') {
                    $('#super').text('Thank You For Contact Us');
                
                    $("#edituser")[0].reset();

                }
                
            }


        }); 



    });

  });
</script>

	@include('footer')
	
