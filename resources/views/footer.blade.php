	 

<!-- Footer section -->
	<footer class="footer-section set-bg" style="background: black;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<h5 class="fw-title">REALESTATE</h5>
					<p>We are the fastest growing company in the online real estate space. Born out of the need to simplify the search for a home, free of fake listings and endless site visits, we created a unique property search platform that filled the gaps left by others in the market. </p>
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
						
					  <div class="alert alert-danger print-error-msgs" style="display:none">
     
    </div> <div class="alert alert-danger print-success-msgs" style="display:none">
        
    </div>
						<form class="footer-newslatter-form" action="{{ url('subscribe') }}" method="post">
						 {{ csrf_field() }}
							<input type="email" class="email" name="subscribe_email" placeholder="Enter Your Email" >
					<input type="hidden" class="" name="status" placeholder="Enter Your Email" value="1">
							<button  type="submit"  class="btn-submits"><i class="fa fa-send"></i></button>
						</form>
						
						<!--<p>If you dont want to receive emails please unsubscribe us  <a href=""> Click here </a> </p>-->
					</div>
				</div>
			</div>
			<div class="row footer-widget">
			    	<h5 class="fw-title">Useful Links</h5>
			</div>
			<div class="row footer-widget">
			    
			    <div class="col-lg-2 col-md-6 footer-widget">
			       <a href="{{url('faq')}} " style="color: #ccc;" target="_blank">Realty FAQ</a> 
			    </div>
			    <div class="col-lg-2 col-md-6 footer-widget">
			       <a href="{{url('legaldocuments')}}" style="color: #ccc;" target="_blank">Legal Documents</a> 
			    </div>
			    <div class="col-lg-2 col-md-6 footer-widget">
			       <a href="{{url('homefinance')}}" style="color: #ccc;" target="_blank">Home Finance</a> 
			    </div>
			    <div class="col-lg-2 col-md-6 footer-widget">
			       <a href="{{url('advertise')}}" style="color: #ccc;" target="_blank">Advertise With us</a> 
			    </div>
			    <div class="col-lg-2 col-md-6 footer-widget">
			       <a href="{{url('/')}}/privacy-policy" style="color: #ccc;" target="_blank">Privacy policy</a> 
			    </div>
			    <div class="col-lg-2 col-md-6 footer-widget">
			       <a href="{{url('/')}}/terms-conditions" style="color: #ccc;" target="_blank">Terms & Conditions</a> 
			    </div>
			    
			 </div>
			 <div class="row footer-widget" style="padding: 28px 0px 0px 0px;">
			     <div class="col-lg-2 col-md-6 footer-widget">
			       <a href="{{url('vastu')}}" style="color: #ccc;" target="_blank">Vastu</a> 
			    </div>
			    <div class="col-lg-2 col-md-6 footer-widget">
			       <a href="{{url('governmentbodies')}}" style="color: #ccc;" target="_blank">Government Bodies</a> 
			    </div>
			    <div class="col-lg-2 col-md-6 footer-widget">
			       <a href="https://www.nrievents.com/" style="color: #ccc;" target="_blank">Nri Events</a> 
			    </div>
			 </div>
			    
			    
			</div>
			<div class="footer-bottom">
				
				<div class="copyright">
					<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://cyberabadrealty.com" target="_blank">cyberabadrealty</a>
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">


    $(document).ready(function() {
        $(".btn-submits").click(function(e){
            e.preventDefault();


            var _token = $("input[name='_token']").val();
            var subscribe_email = $("input[name='subscribe_email']").val();
            var status = $("input[name='status']").val();


            $.ajax({
                url: "{{ url('subscribe') }}",
                type:'POST',
                data: {_token:_token, subscribe_email:subscribe_email, status:status},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                       // alert(data.success);
                                                    $(".print-success-msgs").css('display','block');

                        $(".print-success-msgs").html(data.success);
                             $(".print-error-msgs").css('display','none');
                    }else{
                        printErrorMsgs(data.error);
                    }
                }
            });


        }); 


        function printErrorMsgs (msg) {
            $(".print-error-msgs").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msgs").html(value);
            });
        }
    });


</script>
    <script>
$(document).ready(function() {
    var $btnSets = $('#responsive'),
    $btnLinks = $btnSets.find('a');
 
    $btnLinks.click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.user-menu>div.user-menu-content").removeClass("active");
        $("div.user-menu>div.user-menu-content").eq(index).addClass("active");
    });
});

$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.view').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});
</script>	
	<!--====== Javascripts & Jquery ======-->
	<script src="{{url('/')}}/js/jquery-3.2.1.min.js"></script>
	<script src="{{url('/')}}/js/bootstrap.min.js"></script>
	<script src="{{url('/')}}/js/owl.carousel.min.js"></script>
	<script src="{{url('/')}}/js/masonry.pkgd.min.js"></script>
	<script src="{{url('/')}}/js/magnific-popup.min.js"></script>
	<script src="{{url('/')}}/js/main.js"></script>
	
	
	<script src="{{url('/')}}/js5/jquery-3.3.1.min.js"></script>
    
    <script src="{{url('/')}}/js5/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/js5/main.js"></script>
	
	
</body>
</html>

