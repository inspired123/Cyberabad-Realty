<!DOCTYPE html>
<html lang="en">
<head>
	<title>Realestate</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Landing Page Template">
	<meta name="keywords" content=" unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{url('/')}}/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/animate.css"/>
	<link rel="stylesheet" href="{{url('/')}}/css/owl.carousel.css"/>  
	<link rel="stylesheet" href="{{url('/')}}/css/style.css"/>
	<!-- css3 Styles -->
    <link rel="stylesheet" href="{{url('/')}}/css3/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/style.css" type="text/css">
	<style>
        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
        #createproperty{
            border: 1px solid green;
            padding: 9px 15px 10px 15px;
            border-radius: 5px;
            background-color: #30caa0;
        }
         #createproperty:hover{
             background-color: #d64521;
              border: 1px solid green;
            padding: 9px 15px 10px 15px;
            border-radius: 5px;
         }
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
							<a href="register.html" target="_blank"><i class="fa fa-user-circle"></i> Register</a>
							<a href="login.html" target="_blank"><i class="fa fa-sign-in"></i> Login</a>
							<a href="#"  id="createproperty" ><i class="fa fa-plus"></i> Create Property</a>

                               

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><img src="{{url('/')}}/img/logo.png" alt=""></a>
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
<!--	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--  Launch demo modal-->
<!--</button>-->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="container register">
        <div class="row">
           
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
                <input type="submit" name="" value="Login" /><br />
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Agent</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a Employee</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        value="" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone"
                                        class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Please select your Sequrity Question
                                        </option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Answer *"
                                        value="" />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Apply as a Hirer</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" minlength="10" class="form-control"
                                        placeholder="Phone *" value="" />
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Please select your Sequrity Question
                                        </option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg"  data-setbg="{{url('/')}}/img/photo-1600992450680-7ea101248d56.jpg">
		<div class="container hero-text text-white">
			
		</div>
		<div class="container" style="margin-top: -151px;">
		<div class="row" >
		</div>
      <div class="col-12">
        <h1 class="text-white text-center mb-2">Create lasting wealth through Real Villa</h1>
        <p class="lead text-center text-white mb-4 font-weight-normal">Take a step to realizing your dream. #TimeToMove</p>
        
      </div>
    </div>
	</section>
	
	<!-- Hero section end -->
	<!-- user search filter-->
	
		<body>
    



    <!-- Property Details Section Begin -->
    <section class="property-details-section spad">
        <div class="container">
            <div class="row">
			 <div class="col-lg-3" style="border:1px solid black; border-radius: 12px;">
                    <div class="property-sidebar">
                        <h4>Search Property</h4>
                        <form action="#" class="sidebar-search">
                            <div class="sidebar-btn">
                                <div class="bt-item">
                                    <input type="radio" name="st-buy" id="st-buy"  checked>
                                    <label for="st-buy" style="border-radius: 13px;">Buy</label>
                                </div>
                                <div class="bt-item">
                                    <input type="radio" name="st-rent" id="st-rent">
                                    <label for="st-rent" style="border-radius: 13px; padding-left:10px;">Rent</label>
                                </div>

                            </div>
                            <select>
                                <option value="" style="border-radius: 13px;">Location</option>
								<option value="">Hyderabad</option>
								<option value="">Vizag</option>
                            </select>
                            <select>
                                <option value="">Property Type</option>
								<option value="villas">Villas</option>
								<option value="apartment">Apartments/Flats</option>
								<option value="independentHouses">IndependentHouses</option>
								<option value="plots">Plots</option>
								<option value="FarmHouse">FarmHouse</option>
								<option value="Farmlands">Farmlands/AgriLands</option>
								<option value="WareHouses">WareHouses</option>
                            </select>
                            <select>
                                <option value="">No of Bedroom</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
                            </select>
                            <select>
                                <option value="">No of Bathrooms</option>
									<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
                            </select>
                            <select>
                                <option value="">No of Guest</option>
									<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
                            </select>
							<select>
                                <option value="">Year Built</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
                            </select>
                            <div class="room-size-range">
                                <div class="price-text">
                                    <label for="roomsizeRangeP">Size:</label>
                                    <input type="text" id="roomsizeRangeP" >
                                </div>
                                <div id="roomsize-range-P" class="slider"></div>
                            </div>
                            <div class="price-range-wrap">
                                <div class="price-text">
                                    <label for="priceRangeP">Price:</label>
                                    <input type="text" id="priceRangeP" readonly>
                                </div>
                                <div id="price-range-P" class="slider"></div>
                            </div>
                            <button type="submit" style="border-radius: 13px;" class="search-btn">Search Property</button>
                        </form>
						<div class="best-agents">
                            <h4>Featured properties</h4>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{url('/')}}/img/properties/Untitled design.png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Renovated Apartment</h5>
                                    
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{url('/')}}/img/properties/Untitled design (1).png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Villa</h5>
                                   
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{url('/')}}/img/properties/Untitled design (2).png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>IndependentHouse</h5>
                                   
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                        </div>
						<div class="best-agents">
                            <h4>Top Properties</h4>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{url('/')}}/img/properties/Untitled design (3).png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Villa</h5>
                                    
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{url('/')}}/img/properties/Untitled design (4).png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>FarmHouse</h5>
                                    
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{url('/')}}/img/properties/Untitled design (5).png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>FarmLand</h5>
                                    
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                        </div>
                        <div class="best-agents">
                            <h4>Best Agents</h4>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{url('/')}}/img/properties/best-agent-1.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Lester Bradley</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{url('/')}}/img/properties/best-agent-2.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Janie Blair</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{url('/')}}/img/properties/best-agent-3.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Sophia Cole</h5>
                                    <span>Marketing & Ceo</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9" >
                    <div class="pd-details-text">
                        <div class="pd-details-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-send"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-print"></i></a>
                            <a href="#"><i class="fa fa-cloud-download"></i></a>
                        </div>
						<div class="row" style="border:1px solid black; border-radius: 12px;padding: 11px 6px 6px 7px;margin: 0px 0px 6px -10px;">
						
						            <div class="col-lg-3 col-md-3">
									<p><span id="count"></span> Search results</p>
									</div>
									<!--div class="col-lg-3 col-md-3">
									<select>
									
                                <option value="" >status</option>
								<option value="">Sale</option>
								<option value="">Rent</option>
								
                            </select>
									</div-->
									<!--div class="col-lg- col-md-3">
									<select>
                                <option value="" style="border-radius: 13px;">Featured</option>
								<option value="">TopRating</option>
								<option value="">Average</option>
                            </select>
									</div-->
									<!--div class="col-lg-3 col-md-3">
									<select>
                                <option value="" style="border-radius: 13px;">Transaction</option>
								<option value="">New</option>
								<option value="">Old</option>
                            </select>
									</div-->
								
						
						
						
						
						
						</div>
				    </div>
						
		{{ csrf_field() }}
			<div class="row" id="load-data">
				
				
				
			</div>
  </div>
                        

</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>



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
	<script src="{{url('/')}}/js/jquery-3.2.1.min.js"></script>
	<script src="{{url('/')}}/js/bootstrap.min.js"></script>
	<script src="{{url('/')}}/js/owl.carousel.min.js"></script>
	<script src="{{url('/')}}/js/masonry.pkgd.min.js"></script>
	<script src="{{url('/')}}/js/magnific-popup.min.js"></script>
	<script src="{{url('/')}}/js/main.js"></script>
	<!-- js3 Plugins -->
    <script src="{{url('/')}}/js3/jquery-3.3.1.min.js"></script>
    <script src="{{url('/')}}/js3/bootstrap.min.js"></script>
    <script src="{{url('/')}}/js3/jquery.magnific-popup.min.js"></script>
    <script src="{{url('/')}}/js3/jquery.nice-select.min.js"></script>
    <script src="{{url('/')}}/js3/jquery.slicknav.js"></script>
    <script src="{{url('/')}}/js3/jquery-ui.min.js"></script>
    <script src="{{url('/')}}/js3/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/js3/main.js"></script>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>

$(document).ready(function(){
var _token = $('input[name="_token"]').val();


load_data('', _token);
       
  function load_data(id="", _token)
 {
 var property_type='{{ request()->segment(2)}}';
		var location='{{ request()->segment(3)}}';
  $.ajax({
   url:'{{url("home-properties1")}}/'+property_type+'/'+location,
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#remove-row').remove();
    $('#load-data').append(data);
   }
  })
    $.ajax({
   url:'{{url("home-properties1_count")}}/'+property_type+'/'+location,
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#count').text(data);
   }
  })
 }
 
   function adv_load_data(id="", _token)
 {
 var property_type='{{ request()->segment(2)}}';
		var location='{{ request()->segment(3)}}';
  $.ajax({
   url:'{{url("home-properties1")}}/'+property_type+'/'+location,
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#remove-row').remove();
    $('#load-data').append(data);
   }
  })
    $.ajax({
   url:'{{url("home-properties1_count")}}/'+property_type+'/'+location,
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#count').text(data);
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
	
</body>
</html>
