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