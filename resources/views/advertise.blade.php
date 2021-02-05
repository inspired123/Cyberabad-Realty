@include('header')
<link rel="stylesheet" href="{{url('/')}}/assets/vendors/quill/quill.bubble.css">
<link rel="stylesheet" href="{{url('/')}}/assets/vendors/quill/quill.snow.css">
<link rel="shortcut icon" href="{{url('/')}}/assets/images/favicon.svg" type="image/x-icon">
<!-- FORM LINKS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- END FORM LINKS-->
<!-- Hero section -->
<section class="hero-section set-bg"  data-setbg="{{url('/')}}/img/page-top-bg.jpg" style="height: 334px;">
	<div class="container hero-text text-white">
		
	</div>
	<div class="container" style="margin-top: -151px;">
		<div class="row" >
		</div>
		
	</section>
	<div class="container">
	    <div class="row">
			<div class="col-sm-2"></div>
			
			<div class="col-sm-8" style="margin-top:70px; font-size: 13.9px; font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";">
			<h1 style="text-align:center;">Advertise With Us</h1>
			<p  style="font-size:16px; ">
			As we work towards making our sites provide a more robust and statisfying user experience,
			we are adding a lot of features and functionality to our portal of Hyderabad related
			sites, including <a href="http://www.hellohyderabad.com/" target="_blank"><span style="color:navy;">hellohyderabad.com</span></a>, <a href="http://www.cyberabadrealty.com" target="_blank"><span style="color:Navy;">cyberabadrealty.com</span></a>, 
			<a href="http://www.hyderabadtalent.com" target="_blank"><span style="color:Navy;">hyderabadtalent.com</span></a>, <a href="http://www.hellohyderabad.org" target="_blank"><span style="color:Navy;">hyderabadparents.com</span></a>,
			<a href="#" target="_blank"><span style="color:Navy;">hellohyderabad.org</span></a>
			We have been getting a lot of queries for advertizing on our
			sites. We should have the marketing plans in place shortly along with a Marketing
		Kit.</p>
		<p style="font-size:16px; "> If you are interested to advertize on our site(s) please feel free to contact
			us with where and how you want to place your ads on our portal of site(s) and the
			budget you have in mind.
			Our marketing team would be glad to work with you on what
			you want. We can also work with you to design your ads incoporating your logos,
			slogans and other images you want included. Our aim is not just to facilitate banner
			ads but to work and align with suitable companies and professionals to provide a
		quality mix of avenues in sync with their marketing strategies. </p>
		
		
	</div>
	<div class="col-sm-2"></div>
</div>
</div>

</div>

<!--form body-->
<div class="container">
	
	<div class="row">
		
		<div class="row flex-lg-nowrap">
			<div class="col-12 col-lg-auto mb-3" style="width: 200px; font-size: 15px;">
				
			</div>
			
			<div class="col" style=" font-size: 15px;">
				<div class="row">
					<div class="col mb-3">
						<div class="card" style="border:none;">
							<div class="card-body">
								<div class="e-profile">
									<div class="row">
										
									</div>
									
									<div class="col-sm-8 ">
										<div class="card ">
											
											<div class="card-body" style="background-color: white;">
												<form action="#"  name="form" method="post"  id="edituser">
													{{ csrf_field() }}
													<h4>Advertise with us</h4>
													 <span id="super" style="color:green;font-size: 23px;font-weight: 700;"></span>
													<div class="pl-lg-4">
														<div class="row">
															<div class="col-lg-6" style="padding: 30px 12px 3px 16px;">
																<div class="input-group">
																	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
																	<input id="name" type="text" class="form-control" value="" name="name" placeholder="Name">
																
																</div>
																	<strong class="text-danger" id="name-error"></strong>
															</div>
															<div class="col-lg-6" style="padding: 30px 12px 3px 16px;" >
																<div class="input-group">
																	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
																	<input id="email" type="text" class="form-control" value="" name="email" placeholder="Email">
																		
																</div>
																<strong  class="text-danger" id="email-error"></strong>
															</div>
															
														</div>
														<div class="row">
															<div class="col-lg-6" style="padding: 24px 14px 0px 12px;">
																<div class="input-group">
																	<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
																	<input id="phone" type="text" class="form-control"value="" name="phone" placeholder="Phonenumber">
																		
																</div>
																<strong  class="text-danger" id="phone-error"></strong>
															</div>
															<div class="col-lg-6" style="padding: 24px 14px 0px 12px;">
																<div class="input-group">
																	<span class="input-group-addon"><i class="fa fa-address-book"></i></span>
																	<input id="state" type="text" class="form-control" name="state"value="" placeholder="State">
																	
																</div>
																<strong  class="text-danger" id="state-error"></strong>
															</div>
														</div>
														
														
														
														<div class="row">
															<div class="col-lg-6" style="padding: 24px 14px 0px 12px;">
																<div class="input-group">
																	<span class="input-group-addon"><i class="fa fa-building"></i></span>
																	<input id="city" type="text" class="form-control" name="city"  value=""placeholder="City">
																	
																</div>
																	<strong class="text-danger"  id="city-error"></strong>
															</div>
															<div class="col-lg-6" style="padding: 24px 14px 0px 12px;">
																<div class="input-group">
																	<span class="input-group-addon"><i class="fa fa-globe"></i></span>
																	<input id="country" type="text" class="form-control" name="country" value="" placeholder="Country">
																	
																</div>
																	<strong class="text-danger" id="country-error"></strong>
															</div>
															<div class="col-lg-6" style="padding: 24px 14px 0px 12px;">
																<div class="input-group">
																	<span class="input-group-addon"><i class="fa fa-globe"></i></span>
																	<input id="postal_code" type="text" class="form-control" name="postal_code" value="" placeholder="postalcode">
															
																</div>
																	<strong class="text-danger" id="postal_code-error"></strong>
															</div>
															<div class="col-lg-6" style="padding: 24px 14px 0px 12px;">
																<div class="input-group">
																	<span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
																		<input id="address" type="text" class="form-control" name="address" value="" placeholder="address">
																		
																</div>
																	<strong  class="text-danger"id="address-error"></strong>
															</div>
														</div>
														
													</div>
													
											
												
												
												
												<div class="pl-lg-4">
													<div class="form-group focused">
														<section class="section">
															<div class="card">
																<div class="card-header">
																	<h4 class="card-title">About Advertisement</h4>
																</div>
																<div class="card-body">
																	
																	<div id="full">
																		<p>Hello World!</p>
																		<p>Some initial <strong>bold</strong> text</p>
																		<p><br></p>
																	</div>
																		<strong  class="text-danger" id="full-error"></strong>
																</div>
															</div>
														</section>
													</div>
												</div>
												
												<div class="col-12 " style="padding: 0px 32px 27px 0px; text-align:center; margin: 12px;">
													
													<button class="site-btn" name="submit" id="submit">SUBMIT NOW</button>
													</div>
												</form>
											
												</div>
											
											
										</div>
										
									</div>
								</div>
								
								
								
								
							</div>
							
						</div>
					</div>
				</div>
				
				<!-- ends form body-->
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			
			
			<p style="font-size:16px; ">Please feel free
			to make suggestions as to what you think would work best for you.</b><br><br>
		Regards,</p>
		
		<p style="font-size:16px;">Marketing Team</p>
		<p style="font-size:16px;">HelloHyderabad.com.</p>
		<p style="font-size:16px;">Contact - marketing@HelloHyderabad.com</p>
	</div>
	<div class="col-sm-2"></div>
</div>
</div>
<script src="{{url('/')}}/assets/js/feather-icons/feather.min.js"></script>
<script src="{{url('/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{url('/')}}/assets/js/app.js"></script>

<script src="{{url('/')}}/assets/js/main.js"></script>




<script src="{{url('/')}}/assets/js/feather-icons/feather.min.js"></script>
<script src="{{url('/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{url('/')}}/assets/js/app.js"></script>

<script src="{{url('/')}}/assets/vendors/quill/quill.min.js"></script>
<script src="{{url('/')}}/assets/js/pages/form-editor.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script type="text/javascript">


    $(document).ready(function() {
		    
 $('#edituser').on('submit', function(e){
            e.preventDefault();


        $( '#name-error' ).html( "" );
    	$( '#email-error' ).html( "" );
    	$( '#phone-error' ).html( "" );
    	$( '#state-error' ).html( "" );
		$( '#city-error' ).html( "" );
		$( '#country-error' ).html( "" );
		$( '#postal_code-error' ).html( "" );
		$( '#address-error' ).html( "" );
	   // $( '#full-error' ).html( "" );

            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            var phone = $("input[name='phone']").val();
            var state = $("input[name='state']").val();
            var email = $("input[name='email']").val();
            var city = $("input[name='city']").val();
            var country = $("input[name='country']").val();
            var postal_code = $("input[name='postal_code']").val();
            var address = $("input[name='address']").val();
            //var full = $("#[name='full']").val();
            //var full   = $("#full").val();


            $.ajax({
                url: "{{ url('advertise-submit') }}",
                type:'POST',
                data: {_token:_token, name:name, email:email, phone:phone, state:state, city:city, country:country, postal_code:postal_code, address:address},
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
                    if(data.error.state){
                        $( '#state-error' ).html( data.error.state[0] );
                    }
               		if(data.error.city){
                        $( '#city-error' ).html( data.error.city[0] );
                    }
                    if(data.error.country){
                        $( '#country-error' ).html( data.error.country[0] );
                    }
                    if(data.error.postal_code){
                        $( '#postal_code-error' ).html( data.error.postal_code[0] );
                    }
                    if(data.error.address){
                        $( '#address-error' ).html( data.error.address[0] );
                    }
					//if(data.error.full){
                     //   $( '#full-error' ).html( data.error.full[0] );
                   // }

                    }
                    if(data.error == '1') {
                    $('#super').text('Thank You For advertising with Us');
                
                    $("#edituser")[0].reset();

                }
                
            }


        }); 



    });

  });
</script>
@include('footer')