@include('header')



	<!-- Hero section -->
	<section class="hero-section set-bg"  data-setbg="img/photo-1600992450680-7ea101248d56.jpg" style="height:167px;">
		
	</section>
    <div class="container register" style="margin-top:170px;">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="img/image.jpg" alt="" />
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
                <a href="{{ url('/') }}/registration"><input type="submit" name="" value="Register" /><br /></a>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Social Login</h3>
                        <div class="row register-form">
                            <div class="col-md-2">
                                
                            </div>
							
                                        <span id="super" style="color:green;"></span>
 <span id="sms_errors_wrong" style="color:red;"></span>


                            <div class="col-md-8">
                            
                            <div style="margin: 0px 0px 0px 82px;">
							 <a href="#"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="{{ url('/auth/redirect/twitter') }}"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="{{ url('/auth/redirect/google') }}"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="{{ url('/auth/redirect/facebook') }}"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
               
</div><br>

<div>
<span  style="margin: 0px 62px 0px 41px;">-------------------------<span style="padding: 15px;/* border: 1px solid; */border: 1px solid lightblue;border-radius: 50%;">or</span>-------------------------------</span><br>
<div style="text-align:center;">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="mobile" value="option1" checked>
  <label class="form-check-label" for="inlineRadio1" >Mobile</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="email" value="option2">
  <label class="form-check-label" for="inlineRadio2">Email</label>
</div>
</div>
                      

									<div id="mobile1">
									
									<form action="#" method="post" name="form"  id="sms_mobile">
										 @csrf
										 
										   <h3 style="text-align: center;">Login With Mobile Number</h3><br>
                                <div class="form-group" id="mobile_section">
                                    <input type="text" id="mobile_no" name="mobile_no" class="form-control" placeholder="Mobile no"  value="" />
									<span class="text-danger">
                                <strong id="mobile_no-error"></strong>
                            </span>
							
		
							                                  <input type="submit" class="btnRegister"  id="sms_submit" value="Submit" />

                                </div>
               
                            
                                 </form>
								 
								 <form action="#" method="post" name="form"  id="sms_verify" style="display:none;">
										 @csrf
                   
							
							    <div class="form-group" id="otp_section">
                                    <input type="text" id="otp" name="otp" class="form-control" placeholder="Enter OTP"  value="" />
									<span class="text-danger">
                                <strong id="otp-error"></strong>
                            </span>
                                </div>
							                                  <input type="submit" class="btnRegister"  id="mobile_submit" value="Submit" />
															  
															  </form>
								</div>
                                </div>

                            
                                
								 </div>
								 <br>
								  <div class="col-md-8" style="margin: 33px 0px 0px 109px;">

								 
								  <span id="errors_wrong" style="color:red;"></span>
								  <div id="Email1">
									<form action="{{ url('login')}}" method="post" name="form"  id="login">
										 @csrf
										   <h3 style="text-align: center;">Login With Email</h3><br>
                                <div class="form-group">
                                    <input type="text" id="username" name="username" class="form-control" placeholder="User Name"  value="" />
									<span class="text-danger">
                                <strong id="username-error"></strong>
                            </span>
                                </div>
                               
                                <div class="form-group">
                                    <input type="password" id="password" name="password"  class="form-control" placeholder="Password " value="" />
									<span class="text-danger">
                                <strong id="password-error"></strong>
                            </span>
                                </div>
                               <input type="submit" class="btnRegister"  id="submit" value="Login" />
                               	    <div id="message" class="alert-msg"></div>
                                 </form>
                            </div>
						

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>

</body><br>
	<!-- Footer section -->
	<footer class="footer-section set-bg" style="background: black;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<h5 class="fw-title">REALESTATE</h5>
					<p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>Reliance cyber villae </p>
						<p><i class="fa fa-phone"></i>Madhapur</p>
						<p><i class="fa fa-envelope"></i>info.@gmail.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">POPULAR PLACES</h5>
						<ul>
							<li><a href="">Hitech</a></li>
							<li><a href="">Madhapur</a></li>
							<li><a href="">Kondapur</a></li>
							<li><a href="">Gawchibowli</a></li>
							<li><a href="">Patancheruvu</a></li>
						</ul>
						<ul>
							<li><a href="">Kukatapally</a></li>
							<li><a href="">Jubilli Hills</a></li>
							<li><a href="">Sr nagar</a></li>
							<li><a href="">Secunderabad</a></li>
							<li><a href="">Bachupalli</a></li>
						</ul>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				
				<div class="copyright">
					<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="123.com" target="_blank">123.com</a>
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
                                        
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">


    $(document).ready(function() {
		    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
 $('#login').on('submit', function(e){
            e.preventDefault();


        $( '#username-error' ).html( "" );
        $( '#password-error' ).html( "" );
       
		

            var _token = $("input[name='_token']").val();
            var username = $("input[name='username']").val();
            var password = $("input[name='password']").val();

            $.ajax({
                url: "{{ url('login') }}",
                type:'POST',
                data: {_token:_token, username:username,  password:password},
                success: function(data) {

                       if(data.errors) {
           
                    if(data.errors.username){
                        $( '#username-error' ).html( data.errors.username[0] );
                    }
               
                    if(data.errors.password){
                        $( '#password-error' ).html( data.errors.password[0] );
                    }
					

					

                    }
					
					                                    if(data.errors_wrong) {
                    $('#errors_wrong').text(data.errors_wrong);
                


                }
                                    if(data.success) {
                    window.location.href="{{url('/')}}/user-panel";
                
                    $("#login")[0].reset();

                }
                
            }


        }); 



    });
    
    
    $('#sms_mobile').on('submit', function(e){
            e.preventDefault();


        $( '#mobile_no-error' ).html( "" );

            var _token = $("input[name='_token']").val();
            var mobile_no = $("input[name='mobile_no']").val();

            $.ajax({
                url: "{{ url('sms-login') }}",
                type:'POST',
                data: {_token:_token, mobile_no:mobile_no},
                success: function(data) {

                       if(data.errors) {
           
                    if(data.errors.mobile_no){
                        $( '#mobile_no-error' ).html( data.errors.mobile_no[0] );
                    }
                
           
					}
					     if(data.error){
                        $( '#mobile_no-error' ).html( data.error );
                    }

                                    if(data.verify) {
										  $('#sms_mobile').css('display','none');
  $('#sms_verify').css('display','block');
$('#otp').val(data.otp);
                }
                
            }


        }); 



    });






	
	$('#sms_verify').on('submit', function(e){
            e.preventDefault();


        $( '#otp-error' ).html( "" );

            var _token = $("input[name='_token']").val();
            var otp = $("input[name='otp']").val();

            $.ajax({
                url: "{{ url('otp-verify') }}",
                type:'POST',
                data: {_token:_token, otp:otp},
                success: function(data) {

                       if(data.errors) {
           
                    if(data.errors.otp){
                        $( '#otp-error' ).html( data.errors.otp[0] );
                    }
                
           
					}
					     if(data.error){
                        $( '#otp-error' ).html( data.error );
                    }

                          if(data.success) {
                    window.location.href="{{url('/')}}/user-panel";
                

                }
                
            }


        }); 



    });

  });
  
    $(document).ready(function() { 
  
  $('#Email1').hide();
  $("#mobile").click(function() {
	
$('#mobile1').show();
$('#Email1').hide();

 

});


$("#email").click(function() {
	
$('#Email1').show();
$('#mobile1').hide();

});
});
</script>

</html>