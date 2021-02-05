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
		<!-- FORM LINKS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!-- END FORM LINKS-->
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
																	<h3  style="text-align:center;">Advertise With us</h3>
																	<span id="super" style="color:green;font-size: 23px;font-weight: 700;"></span>
																</div>
																
															</div>
														</div>
														
														<form action="#"  name="form" method="post"  id="edituser" enctype="multipart/form-data">
															{{ csrf_field() }}
															
															<div class="card-body">
																
																
																<div class="pl-lg-4">
																	<div class="row">
																		<div class="col-lg-6" style="padding: 30px 12px 3px 16px;" >
																			<div class="input-group" >
																				
																				<span class="input-group-addon" style="padding: 9px 27px 10px 19px;background-color: darkgray;"><i class="glyphicon  glyphicon-user"></i></span>
																				<input id="name" type="text" class="form-control" value="{{ $users->first }}" name="name" placeholder="Name">
																				
																			</div>
																			<span class="text-danger">
																					<strong id="name-error"></strong>
																				</span>
																		</div>
																		<div class="col-lg-6" style="padding: 30px 12px 3px 16px;" >
																			<div class="input-group" >
																				
																				<span class="input-group-addon" style="padding: 9px 27px 10px 19px;background-color: darkgray;"><i class="glyphicon glyphicon-envelope"></i></span>
																				<input id="email" type="text" class="form-control" value="{{ $users->email }}" name="email" placeholder="Email">
																				
																			</div>
																			<span class="text-danger">
																					<strong id="email-error"></strong>
																				</span>
																		</div>
																		
																	</div>
																	<div class="row">
																		
																		
																		<div class="col-lg-6" style="padding: 16px 11px 5px 14px;">
																			<div class="input-group">
																				<span class="input-group-addon" style="padding: 9px 27px 10px 19px;background-color: darkgray;"><i class="glyphicon glyphicon-earphone"></i></span>
																				<input id="phone" type="text" class="form-control"   value="{{ $users->Mobileno }}" name="phone" placeholder="Phonenumber">
																			
																			</div>
																				<span class="text-danger">
																					<strong id="phone-error"></strong>
																				</span>
																		</div> 
																		<div class="col-lg-6" style="padding: 16px 11px 5px 14px;">
																			<div class="input-group">
																				<span class="input-group-addon" style="padding: 9px 27px 10px 19px;background-color: darkgray;"><i class="fa fa-globe"></i></span>
																				<input id="city" type="text" class="form-control" name="city" value="" placeholder="City">
																				
																			</div>
																			<span class="text-danger">
																					<strong id="city-error"></strong>
																				</span>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-6" style="padding: 16px 11px 5px 14px;">
																			<div	<div class="input-group">
																				<span class="input-group-addon" style="padding: 9px 27px 10px 19px;background-color: darkgray;"><i class="fa fa-location-arrow"></i></span>
																				<input id="address" type="text" class="form-control" name="address"  value=""placeholder="Address">
																				
																			</div>
																			<span class="text-danger">
																					<strong id="address-error"></strong>
																				</span>
																		</div>
																		
																		<div class="col-lg-6" style="padding: 16px 11px 5px 14px;">
																			<div class="input-group">
																				<span class="input-group-addon" style="padding: 9px 27px 10px 19px;background-color: darkgray;" ><i class="fa fa-address-book"></i></span>
																				<input id="state" type="text" class="form-control" name="state"value="" placeholder="State">
																			
																			</div>
																				<span class="text-danger">
																					<strong id="state-error"></strong>
																				</span>
																		</div>
																	</div>
																	<div class="row">
																		
																		<div class="col-lg-6" style="padding: 16px 11px 5px 14px;">
																			<div class="input-group">
																				<span class="input-group-addon" style="padding: 9px 27px 10px 19px;background-color: darkgray;"><i class="fa fa-globe"></i></span>
																				<input id="country" type="text" class="form-control" name="country" value="" placeholder="Country">
																			
																				
																			</div>
																				<span class="text-danger">
																					<strong id="country-error"></strong>
																				</span>
																		</div>
																		<div class="col-lg-6" style="padding: 16px 11px 5px 14px;">
																			<div class="input-group">
																				<span class="input-group-addon" style="padding: 9px 27px 10px 19px;background-color: darkgray;"><i class="fa fa-globe"></i></span>
																				<input id="postal_code" type="text" class="form-control" name="postal_code" value="" placeholder="Pincode">
																			
																			</div>
																				<span class="text-danger">
																					<strong id="postal_code-error"></strong>
																				</span>
																		</div>
																	</div>
																	
																	
																	
																	<!-- Description -->
																	
																	<div class="form-row">
																		<div class="form-group col-md-12" style="padding: 15px 0px 0px 0px;">
																			<h6 class="heading-small text-muted mb-4">About Advertisement:</h6>
																			
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
																		</div>    
																	</div>
																	
																</div>
																
																
																<hr class="my-4">
																<!-- Description -->
																
																
																
															</div>
															<button class="site-btn" name="submit" style="float: right;" id="submit">SUBMIT NOW</button>
															
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
		
		<!-- Footer section -->
		<footer class="footer-section set-bg" data-setbg="{{url('/')}}/img/footer-bg.jpg" style="margin: 96px 0px 0px 0px;">
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
