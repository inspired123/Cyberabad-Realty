<?php $users = Auth::User(); ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
            <img src="{{url('/')}}/public/{{$users->profile_pic}}" alt="">
            <p class="name">{{$users->first}}</p>
			<p class="name">{{$users->role}}</p>
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
		<!--form body-->
		<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px; font-size: 15px;">
    <div class="card p-3">
      
    </div>
  </div>

  <div class="col" style=" font-size: 15px;">
    <div class="row">
      <div class="col mb-3">
        <div class="card" style="border:none;">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                
              </div>
              
              <div class="col-xl-12 order-xl-1">
                    <div class="card  shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">My account</h3>
                                </div>
                                <div class="col-4 text-right">
                                   <button type="button" class="btn  dropdown-toggle" style="background-color:#18a8f2; color:white;" data-toggle="dropdown">settings
                                    </button>
                                   <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit Profile</a>
                                        <a class="dropdown-item" href="#">Logout</a>

                                   </div>

                                </div>
                            </div>
                        </div>
                         
                        <form action="#" id="profile"  method="POST" enctype="multipart/form-data">
                             {{ csrf_field() }}
                            
                            <div class="card-body">
                           
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="pl-lg-4">
                                     <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-first-name">First
                                                    name</label>
                                                <input type="text" 
                                                    class="form-control form-control-alternative"
                                                    placeholder="First name" value="{{ $users->first }}" name="first" id="first">
                                                     <span class="text-danger">
                                <strong id="first-error"></strong>
                            </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-last-name">Last
                                                    name</label>
                                                <input type="text" 
                                                    class="form-control form-control-alternative"
                                                    placeholder="Last name" value="{{ $users->last }}" name="last" id="last">
                                                     <span class="text-danger">
                                <strong id="last-error"></strong>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="row">
                                        
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Email
                                                    address</label>
                                                <input type="email" 
                                                    class="form-control form-control-alternative"
                                                    placeholder="jesse@example.com" name="email" id="email" value="{{ $users->email }}">
                                                     <span class="text-danger">
                                <strong id="email-error"></strong>
                            </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-username">Mobile No</label>
                                                <input type="text" 
                                                    class="form-control form-control-alternative" name="Mobileno" id="Mobileno" placeholder="Mobile No"
                                                    value="{{ $users->Mobileno }}">
                                                    <span class="text-danger">
                                <strong id="Mobileno-error"></strong>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    						<div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-username">Password</label>
                                                <input type="password" id="input-username"
                                                    class="form-control form-control-alternative" name="password" id="password"
                                                    value="" placeholder="****************">
                                                     <span class="text-danger">
                                <strong id="password-error"></strong>
                            </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">ConfirmPassword
                                                    </label>
                                                <input type="password" id="input-email"
                                                    class="form-control form-control-alternative"
                                                    placeholder="****************" name="confirm_password" id="confirm_password" value="confirmpassword">
                                                     <span class="text-danger">
                                <strong id="confirm_password-error"></strong>
                            </span>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-first-name">Change Profilepic
                                                    </label>
                                                                    <input type="file" style="padding: 13px 0px 0px 18px;"class="form-control form-input form-style-base"  name="profile_pic" id="profile_pic">
                    <h4 id="fake-btn" class="form-input fake-styled-btn text-center truncate" ><span class="margin"></span></h4>
                     <span class="text-danger">
                         <input type="hidden" name="old_profile_pic" value="{{ $users->profile_pic  }}">

                                <strong id="profile_pic-error"></strong>
                            </span>
                                            </div>
                                        </div>
									
                               
								<!--<div class="col-lg-6">-->
        <!--                                    <div class="form-group focused">-->
        <!--                                        <label class="form-control-label" for="input-last-name">ChangeUsertype-->
        <!--                                           </label>-->
								<!--				   <input type="email" id="input-email"-->
        <!--                                            class="form-control form-control-alternative"-->
        <!--                                            placeholder=" ">-->
												 
                    

                                                
        <!--                                    </div>-->
        <!--                                </div>-->
										 </div>
                                <hr class="my-4">
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-address">Address</label>
                                                <input  class="form-control form-control-alternative"
                                                    placeholder="Home Address"
                                                    value="{{ $users->address }}" name="address" id="address"
                                                    type="text">
                                                     <span class="text-danger">
                                <strong id="address-error"></strong>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-city">City</label>
                                                <input type="text" 
                                                    class="form-control form-control-alternative" placeholder="City"
                                                    value="{{ $users->city }}" id="city" name="city">
                                                     <span class="text-danger">
                                <strong id="city-error"></strong>
                            </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-country">Country</label>
                                                <input type="text" 
                                                    class="form-control form-control-alternative" placeholder="Country"
                                                    value="{{ $users->country }}" name="country" id="country">
                                                     <span class="text-danger">
                                <strong id="country-error"></strong>
                            </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-country">Postal
                                                    code</label>
                                                <input type="number" 
                                                    class="form-control form-control-alternative"
                                                    placeholder="Postal code" name="postal_code" id="postal_code" value="{{ $users->postal_code }}">
                                                     <span class="text-danger">
                                <strong id="postal_code-error"></strong>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Description -->
                                <div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">Description</label>

                            <div class="form-group has-icon-left">
                                <div class="position-relative">
									<div class="card-body"style="padding:4px;background-color:white;">
									<div id="full"style="padding: 0px 0px 70px 0px;">
										
									</div>
									</div>
                                    <!--<div class="form-control-icon">
                                        <i data-feather="lock"></i>
                                    </div>-->
                                </div>
                            </div>
                            <textarea id="description" name="description" style="display:none;"></textarea>
						 <span class="text-danger"><strong id="description-error"></strong></span>
                        </div>    
</div>

</div>
                                   
								
                                <hr class="my-4">
                                <!-- Description -->

                            </form>
							
                        </div>
						<div class="col-12 text-right" style="padding: 0px 32px 27px 0px;">
                                 
                                    <input type="submit" value="Save" id="submitForm" class="btn btn-primary  py-2 px-5"
                                                        style="background-color:#18a8f2; font-size: 18px;
    padding: 8px 26px 10px 22px;color:white;">
                                
                            
                </div>
						
                    </div>
                        </form>
                        <div id="success-msg" style="display:none">
                    <div class="alert alert-info alert-dismissible in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <strong >Success!</strong>
                    </div>
                </div>
					</div>



      <!--div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
          <div class="card-body">
            <div class="px-xl-3">
              <button class="btn btn-block btn-secondary">
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Support</h6>
            <p class="card-text">Get fast, free help from our friendly assistants.</p>
            <button type="button" class="btn btn-primary">Contact Us</button>
          </div>
        </div>
      </div-->
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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      
<script type="text/javascript">
		

		
		
		$(document).ready(function(){
		     
		    $('#profile').on('submit', function(event){
		      
		       
  event.preventDefault();
    
		      
 
       
        $( '#first-error' ).html( "" );
		$( '#last-error' ).html( "" );
		 $( '#email-error' ).html( "" );
		$( '#Mobileno-error' ).html( "" );
		
		$( '#password-error' ).html( "" );
		$( '#confirm_password-error' ).html( "" );
	
		$( '#profile_pic-error' ).html( "" );
		$( '#address-error' ).html( "" );
	    $( '#city-error' ).html( "" );
	    
	      $( '#country-error' ).html( "" );
	        $( '#postal_code-error' ).html( "" );
	         $( '#description-error' ).html( "" );
	         
        $.ajax({
            url:'{{ url('/')}}/update-user',
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
                  
                    if(data.errors.first){
                        $( '#first-error' ).html( data.errors.first[0] );
                    }
					
					
					   if(data.errors.last){
                        $( '#last-error' ).html( data.errors.last[0] );
                    }
                     
                    if(data.errors.emial){
                        $( '#emial-error' ).html( data.errors.emial[0] );
                    }
                     if(data.errors.Mobileno){
                        $( '#Mobileno-error' ).html( data.errors.Mobileno[0] );
                    }
					
					   if(data.errors.password){
                        $( '#password-error' ).html( data.errors.password[0] );
                    }
					
					   if(data.errors.confirm_password){
                        $( '#confirm_password-error' ).html( data.errors.confirm_password[0] );
                    }
					
					
						   if(data.errors.address){
                        $( '#address-error' ).html( data.errors.address[0] );
                    }
					
					
					   if(data.errors.city){
                        $( '#city-error' ).html( data.errors.city[0] );
                    }
                    
                    			   if(data.errors.country){
                        $( '#country-error' ).html( data.errors.country[0] );
                    }
                    
                    
                        if(data.errors.postal_code){
                        $( '#postal_code-error' ).html( data.errors.postal_code[0] );
                    }
                    
                    	   if(data.errors.description){
                        $( '#description-error' ).html( data.errors.description[0] );
                    }
                    
                    
                    
                   	   if(data.errors.profile_pic){
                        $( '#profile_pic-error' ).html( data.errors.profile_pic[0] );
                    }
                }
                if(data.success) {
                    $('#success-msg').css('display','block');
                    setInterval(function(){ 
           // window.location.href="{{ url('/') }}";
                    }, 3000);
                }
            },
        });
    });
		    
		    
		});
	  
		    
	$(document).ready(function(){
 
  $(".ql-editor").keydown(function(){
 $("#description").text($(".ql-editor").html());

  });
  $(".ql-editor").keyup(function(){
 $("#description").text($(".ql-editor").html());

  });	    
		    
	});		    
</script>		    
		    
		    
	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="{{url('/')}}/img/footer-bg.jpg">
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
  <script src="{{url('/')}}/js/off-canvas.js"></script>
  <script src="{{url('/')}}/js/hoverable-collapse.js"></script>
  <script src="{{url('/')}}/js/misc.js"></script>
  <script src="{{url('/')}}/js/chart.js"></script>
  <script src="{{url('/')}}/js/maps.js"></script>
  
                                          
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
  
  
  
  
  <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/vendors/quill/quill.min.js"></script>
    <script src="assets/js/pages/form-editor.js"></script>

    <script src="assets/js/main.js"></script>
  
</body>

</html>
