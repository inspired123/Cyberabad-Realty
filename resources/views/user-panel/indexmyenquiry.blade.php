<?php $users = Auth::User(); ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>Star Admin</title>
  <link rel="stylesheet" href="{{url('/')}}/usercss/node_modules/font-awesome/css/font-awesome.min.css" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{url('/')}}/usercss/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="{{url('/')}}/usercss/node_modules/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="{{url('/')}}/usercss/css/style.css" />
  <link rel="shortcut icon" href="{{url('/')}}/usercss/images/favicon.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="assets/vendors/quill/quill.bubble.css">
    <link rel="stylesheet" href="assets/vendors/quill/quill.snow.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/animate.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/owl.carousel.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/style.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/form.css"/>
  <link rel="stylesheet" href="{{url('/')}}/node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="{{url('/')}}/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="{{url('/')}}/node_modules/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="{{url('/')}}/css/style.css" />
  <link rel="shortcut icon" href="{{url('/')}}/images/favicon.png" />
  
  

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/animate.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/owl.carousel.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/style.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/form.css"/>
	<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>
	



</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							9786543120
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							info@gmail.com
						</div>
						<div class="top-info">
							<div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true !important;">
      Dropdown button
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </div>
						</div>
					</div>
					
					<div class="col-lg-6 ">
					
							<a href="" style="color: white;padding: 8px;font-size: 18px;"><i class="fa fa-facebook"></i></a>
							<a href="" style="color: white;padding: 8px;font-size: 18px;"><i class="fa fa-twitter"></i></a>
							<a href="" style="color: white;padding: 8px;font-size: 18px;"><i class="fa fa-instagram"></i></a>
							
								@if(isset(Auth::user()->first))
		<a href="#" style="color: white;padding: 8px;font-size: 18px;"><i class="fa fa-sign-in"></i> {{ Auth::user()->first }}</a>
	<a href="{{url('user_logout')}}" style="color: white;padding: 10px;font-size: 18px;"><i class="fa fa-sign-in"></i> Signout</a>
								<a class="profile-pic" href="#" ><img class="rounded-circle" src="{{url('/')}}/public/{{$users->profile_pic}}" alt="" height="40px" width="40px"></a>

							<a href="{{ url('/') }}/addproperty"  id="createproperty" style="color: white;padding: 8px;font-size: 18px;"><i class="fa fa-plus"></i> Create Property</a>
	
		   @else
			   
		   <a href="#"  id="createproperty" ><i class="fa fa-plus"></i> Create Property</a>
							<a href="#"  id="createproperty" ><i class="fa fa-plus"></i> Send Enquiry</a>
							
					   <a href="{{ url('/') }}/registration" target="_blank"><i class="fa fa-user-circle"></i> Register</a>
							<a href="{{ url('/') }}/logins" target="_blank"><i class="fa fa-sign-in"></i> Login</a>
		   
				@endif
							
							
					
					
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><img src="images/logo.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="categories.html">FEATURED LISTING</a></li>
							<li><a href="about.html">ABOUT US</a></li>
							<li><a href="single-list.html">Pages</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header end-->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{url('/')}}/img/banner.jpg" style="height:180px">
		
	</section>
	<!--  Page top end -->
  <!--div class=" container">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0  d-flex flex-row" >
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{url('/')}}/usercss/images/logo_star_black.png" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{url('/')}}/usercss/simages/logo_star_mini.jpg" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <!--<a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="{{url('/')}}/usercss/images/face.jpg" alt=""></a>-->
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid" style="padding:1px">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="{{url('/')}}/usercss/images/face.jpg" alt="">
            <p class="name">{{$users->first}}</p>
            <p class="designation">{{$users->role}}</p>
            <span class="online"></span>
		
          </div>
        <ul class="nav">
            
            <li class="nav-item active">
              <a class="nav-link" href="{{url('indexmyprofile')}}">
                <img src="{{url('/')}}/usercss/images/icons/2.png" alt="">
                <span class="menu-title"  style="font-size:15px;">Myprofile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('addproperty')}}">
                <img src="{{url('/')}}/usercss/images/icons/005-forms.png" alt="">
                <span class="menu-title"  style="font-size:15px;">Add Property</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{url('indexmyproperty')}}">
                <img src="{{url('/')}}/usercss/images/icons/7 (2).png" alt="">
                <span class="menu-title"  style="font-size:15px;">My Property</span>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link" href="summaryindex.html">
                <img src="{{url('/')}}/usercss/images/icons/1.png" alt="">
                <span class="menu-title" style="font-size:15px;">Dashboard</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{url('indexmyenquiry')}}">
                <img src="{{url('/')}}/usercss/images/icons/5.png" alt="">
                <span class="menu-title"  style="font-size:15px;">Enquires</span>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="{{url('indexmysearches')}}">
                <img src="{{url('/')}}/usercss/images/icons/6 (2).png" alt="">
                <span class="menu-title"  style="font-size:15px;">MySearches </span>
              </a>
			  
            </li>
			
            <li class="nav-item">
              <a class="nav-link" href="{{url('indexmyservices')}}">
                <img src="{{url('/')}}/usercss/images/icons/4.png" alt="">
                <span class="menu-title"  style="font-size:15px;">MyServices</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{url('indexmysearchesaved')}}">
                <img src="{{url('/')}}/usercss/images/icons/4.png" alt="">
                <span class="menu-title"  style="font-size:15px;">MySavedProperties</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('advertisewithus')}}">
                <img src="{{url('/')}}/usercss/images/icons/4.png" alt="">
                <span class="menu-title"  style="font-size:15px;">Advertise With Us</span>
              </a>
            </li>
		 </ul>



            
            
            
           
                  
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">My Properties</h3>
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-12">
              

    <div class="container">
    	
    	<div class="row">
            
            <div class="col-lg-8 col-md-10 ml-auto mr-auto">
            
                
    
                
               
    
            </div>
            
            
            
            <div class="col-lg-12 col-md-12 ml-auto mr-auto">
                <div class="table-responsive">
                <table class="table table-shopping">
                    <thead>
                        <tr>
                          
                            <th>S.NO</th>
							 <th>Property</th>
                            <th >Name</th>
                            <th >phno</th>
                            <th >message</th>
                           
                            <th></th>
                        </tr>
                    </thead>
                   <tbody>
                                           @foreach($propertyenquiry as $enquiry)

                        <tr>
						<td >
						{{$enquiry->id}}</td>
                           
							 <td>
                                <div class="img-container">
                                    <img src="{{url('/')}}/usercss/images/apartments.jpg" alt="..." width="20%"><br>
									<p >{{$enquiry->id}}</p>
                                </div>
                                  

                               
                            </td>
                            
                            <td >
                                {{$enquiry->name}}
                            </td>
                            
                            <td >
                                {{$enquiry->email}}
                            </td>
							  <td>
                              <button class="btn btn-round btn-info btn-sm" style="/* margin: 44px 0px 0px 46px; */" data-toggle="modal" data-target="#exampleModal" onclick="javascript:getdata({{$enquiry->id}})"> <i class="material-icons">View</i> </button>
                            </td>
                           
                            
                            
                        </tr>
						   @endforeach  
                            
    
                        </tr>
                    </tbody>
                </table>
               
                </div>
    
            </div>
        </div>
    </div>
    
<!-- for popup-->

<form action="#" id="reply"  method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 672px;
    height: 500px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Message:</label>
           <textarea class="form-control" rows="5" id="comment">{{$enquiry->id}}</textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Reply:</label>
            <textarea class="form-control" id="reply" name="reply"></textarea>
            <span class="text-danger">
                                <strong id="reply-error"></strong>
                            </span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" value="Reply" id="submitForm" class="btn btn-primary  py-2 px-5"
                                                        style="padding: 21px !important;border-radius: 5px;">
      </div>
    </div>
  </div>
</div>
    
</form>
    
<!-- end for popup-->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  
</body>		
					
                </div>
    
            </div>
				</div>
				
				
				
          </div>
          
        </div>
        <!-- partial:partials/_footer.html -->


        <!-- partial -->
      </div>
    </div>

  </div>

	<!-- Footer section -->
	<footer class="footer-section set-bg" style="margin-top:2px;" data-setbg="{{url('/')}}/img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="img/logo.png" alt="">
					<p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>3711-2880 Nulla St, Mankato, Mississippi </p>
						<p><i class="fa fa-phone"></i>(+88) 666 121 4321</p>
						<p><i class="fa fa-envelope"></i>info.leramiz@colorlib.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">POPULAR PLACES</h5>
						<ul>
							<li><a href="">Florida</a></li>
							<li><a href="">New York</a></li>
							<li><a href="">Washington</a></li>
							<li><a href="">Los Angeles</a></li>
							<li><a href="">Chicago</a></li>
						</ul>
						<ul>
							<li><a href="">St Louis</a></li>
							<li><a href="">Jacksonville</a></li>
							<li><a href="">San Jose</a></li>
							<li><a href="">San Diego</a></li>
							<li><a href="">Houston</a></li>
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
				<div class="footer-nav">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Featured Listing</a></li>
						<li><a href="">About us</a></li>
						<li><a href="">Pages</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Contact</a></li>
					</ul>
				</div>
				<div class="copyright">
					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="#" target="_blank">me</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>
  <script src="{{url('/')}}/usercss/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="{{url('/')}}/usercss/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="{{url('/')}}/usercss/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="{{url('/')}}/usercss/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="{{url('/')}}/usercss/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="{{url('/')}}/usercss/js/off-canvas.js"></script>
  <script src="{{url('/')}}/usercss/js/hoverable-collapse.js"></script>
  <script src="{{url('/')}}/usercss/js/misc.js"></script>
  <script src="{{url('/')}}/usercss/js/chart.js"></script>
  <script src="{{url('/')}}/usercss/js/maps.js"></script>
  
                                          
	<!--====== Javascripts & Jquery ======-->
	<script src="{{url('/')}}/js/jquery-3.2.1.min.js"></script>
	<script src="{{url('/')}}/js/bootstrap.min.js"></script>
	<script src="{{url('/')}}/js/owl.carousel.min.js"></script>
	<script src="{{url('/')}}/js/masonry.pkgd.min.js"></script>
	<script src="{{url('/')}}/js/magnific-popup.min.js"></script>
	<script src="{{url('/')}}/js/main.js"></script>

	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="{{url('/')}}/js/map.js"></script>

	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="../js/map.js"></script>
	<script>
	$(document).ready(function() {
    $('body').bootstrapMaterialDesign();
    $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();
 
});

    function getdata(id){
    var _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
   url:"{{ url('/')}}/getdata ",
   method:'POST',
   data:{_token:_token,id:id},
   
    success:function(data)
   {
       
    $('#comment').text(data);
   }
  })
}

    	$(document).ready(function(){
		    
		    
		    $('#reply').on('submit', function(event){
		         
		       
		       
  event.preventDefault();

        $( '#name-error' ).html( "" );
		$( '#email-error' ).html( "" );
		 $( '#question-error' ).html( "" );
		$( '#message-error' ).html( "" );
		
		$( '#reply-error' ).html( "" );
		alert();
	
        $.ajax({
            url:'{{ url('/')}}/reply_enquiry',
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
                     if(data.errors.message){
                        $( '#message-error' ).html( data.errors.message[0] );
                    }
					
					   if(data.errors.reply){
                        $( '#reply-error' ).html( data.errors.reply[0] );
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
  
  
</body>

</html>
