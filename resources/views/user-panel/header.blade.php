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

	
	
  
  
</head>
</body>
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
					
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							
							
						</div>
						<div class="user-panel">
<!--						    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--  Launch demo modal-->
<!--</button>-->
								@if(isset(Auth::user()->name))
		<a href="#" ><i class="fa fa-sign-in"></i> {{ Auth::user()->name }}</a>
	<a href="{{url('user_logout')}}" ><i class="fa fa-sign-in"></i> Signout</a>
							<a href="{{ url('/') }}/addproperty"  id="createproperty" ><i class="fa fa-plus"></i> Create Property</a>
	
		   @else
			   
		   <a href="#"  id="createproperty" ><i class="fa fa-plus"></i> Create Property</a>
							<a href="#"  id="createproperty" ><i class="fa fa-plus"></i> Send Enquiry</a>
							
							<a href="register.html" target="_blank"><i class="fa fa-user-circle"></i> Register</a>
							
							<a href="login.html" target="_blank"><i class="fa fa-sign-in"></i> Login</a>
		   
				@endif
                               

						</div>
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

</html>
