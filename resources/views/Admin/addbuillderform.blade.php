<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Input Group - Voler Admin Dashboard</title>
		
		<link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.css">
		
		<link rel="stylesheet" href="{{url('/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/css/app.css">
		<link rel="shortcut icon" href="{{url('/')}}/assets/images/favicon.svg" type="image/x-icon">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:400,700,800|Roboto:400,500,700"
        rel="stylesheet">
		<link rel="stylesheet" href="{{url('/')}}/assets/css2/style.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/css2/plugins.css">
		
		
		
		
		
		
		<link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.css">
		
		<link rel="stylesheet" href="{{url('/')}}/assets/vendors/quill/quill.bubble.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/vendors/quill/quill.snow.css">
		
		<link rel="stylesheet" href="{{url('/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/css/app.css">
		<link rel="shortcut icon" href="{{url('/')}}/assets/images/favicon.svg" type="image/x-icon">
		<title>Document</title>
		<style>
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
				
				* {
				margin: 0;
				padding: 0
				}
				
				html {
				height: 100%
				}
				
				#grad1 {
				background-color: : #9C27B0;
				
				}
				
				#msform {
				text-align: center;
				position: relative;
				margin-top: 20px
				}
				
				#msform fieldset .form-card {
				background: white;
				border: 0 none;
				border-radius: 0px;
				box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
				padding: 20px 40px 30px 40px;
				box-sizing: border-box;
				width: 94%;
				margin: 0 3% 20px 3%;
				position: relative
				}
				
				#msform fieldset {
				background: white;
				border: 0 none;
				border-radius: 0.5rem;
				box-sizing: border-box;
				width: 100%;
				margin: 0;
				padding-bottom: 20px;
				position: relative
				}
				
				#msform fieldset:not(:first-of-type) {
				display: none
				}
				
				#msform fieldset .form-card {
				text-align: left;
				color: #9E9E9E
				}
				
				#msform input,
				#msform textarea {
				padding: 0px 8px 4px 8px;
				border: none;
				border-bottom: 1px solid #ccc;
				border-radius: 0px;
				margin-bottom: 25px;
				margin-top: 2px;
				
				box-sizing: border-box;
				font-family: montserrat;
				color: #2C3E50;
				font-size: 16px;
				letter-spacing: 1px
				}
				
				#msform input:focus,
				#msform textarea:focus {
				-moz-box-shadow: none !important;
				-webkit-box-shadow: none !important;
				box-shadow: none !important;
				border: none;
				font-weight: bold;
				border-bottom: 2px solid skyblue;
				outline-width: 0
				}
				
				#msform .action-button {
				width: 100px;
				background: skyblue;
				font-weight: bold;
				color: white;
				border: 0 none;
				border-radius: 0px;
				cursor: pointer;
				padding: 10px 5px;
				margin: 10px 5px
				}
				
				#msform .action-button:hover,
				#msform .action-button:focus {
				box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
				}
				
				#msform .action-button-previous {
				width: 100px;
				background: #616161;
				font-weight: bold;
				color: white;
				border: 0 none;
				border-radius: 0px;
				cursor: pointer;
				padding: 10px 5px;
				margin: 10px 5px
				}
				
				#msform .action-button-previous:hover,
				#msform .action-button-previous:focus {
				box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
				}
				
				select.list-dt {
				border: none;
				outline: 0;
				border-bottom: 1px solid #ccc;
				padding: 2px 5px 3px 5px;
				margin: 2px
				}
				
				select.list-dt:focus {
				border-bottom: 2px solid skyblue
				}
				
				.card {
				z-index: 0;
				border: none;
				border-radius: 0.5rem;
				position: relative
				}
				
				.fs-title {
				font-size: 25px;
				color: #2C3E50;
				margin-bottom: 10px;
				font-weight: bold;
				text-align: left
				}
				
				#progressbar {
				margin-bottom: 30px;
				overflow: hidden;
				color: lightgrey
				}
				
				#progressbar .active {
				color: #000000
				}
				
				#progressbar li {
				list-style-type: none;
				font-size: 12px;
				width: 16.6%;
				float: left;
				position: relative
				}
				
				#progressbar #account:before {
				font-family: FontAwesome;
				content: "\f023"
				}
				
				#progressbar #personal:before {
				font-family: FontAwesome;
				content: "\f007"
				}
				
				#progressbar #payment:before {
				font-family: FontAwesome;
				content: "\f09d"
				}
				
				#progressbar #confirm:before {
				font-family: FontAwesome;
				content: "\f00c"
				}
				
				#progressbar li:before {
				width: 50px;
				height: 50px;
				line-height: 45px;
				display: block;
				font-size: 18px;
				color: #ffffff;
				background: lightgray;
				border-radius: 50%;
				margin: 0 auto 10px auto;
				padding: 2px
				}
				
				#progressbar li:after {
				content: '';
				width: 100%;
				height: 2px;
				background: lightgray;
				position: absolute;
				left: 0;
				top: 25px;
				z-index: -1
				}
				
				#progressbar li.active:before,
				#progressbar li.active:after {
				background: skyblue
				}
				
				.radio-group {
				position: relative;
				margin-bottom: 25px
				}
				
				.radio {
				display: inline-block;
				width: 204;
				height: 104;
				border-radius: 0;
				background: lightblue;
				box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
				box-sizing: border-box;
				cursor: pointer;
				margin: 8px 2px
				}
				
				.radio:hover {
				box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2)
				}
				
				.radio.selected {
				opacity:0.5;
				border:1px solid red;
				box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.8)
				
				}
				
				.fit-image {
				width: 100%;
				object-fit: cover
				}
				input[type="checkbox"][id^="cb"] {
				display: none;
				}
				
				label {
				border: 1px solid #fff;
				
				display: block;
				position: relative;
				margin: 10px;
				cursor: pointer;
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				}
				
				label::before {
				background-color: white;
				color: white;
				content: " ";
				display: block;
				border-radius: 50%;
				border: 1px solid grey;
				position: absolute;
				top: -5px;
				left: -5px;
				width: 25px;
				height: 25px;
				text-align: center;
				line-height: 28px;
				transition-duration: 0.4s;
				transform: scale(0);
				}
				
				label img {
				height: 100px;
				width: 100px;
				transition-duration: 0.2s;
				transform-origin: 50% 50%;
				}
				
				
				
				
				
				:checked+label img {
				transform: scale(0.9);
				box-shadow: 0 0 5px #333;
				z-index: -1;
				}	
				.form-check-input {
				width: 1.25em !important;
				height: 1.25em !important;
				margin-top: 0.125em !important;
				vertical-align: top !important;
				
				background-repeat: no-repeat !important;
				background-position: center !important;
				background-size: contain !important;
				border: 1px solid rgba(0, 0, 0, 0.25) !important;
				-webkit-appearance: none !important;
				-moz-appearance: none !important;
				appearance: none !important;
				-webkit-print-color-adjust: exact !important;
				color-adjust: exact !important;
				transition: background-color 0.15s ease-in-out, background-position 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
				}
			</style>
			
			
		</style>
	</head>
	<body>
		<div id="app">
			@include('Admin.sidebar')
			<div id="main">
				<nav class="navbar navbar-header navbar-expand navbar-light">
					<a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
					<button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
							<li class="dropdown nav-icon">
								<a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
									<div class="d-lg-inline-block">
										<i data-feather="bell"></i>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
									<h6 class='py-2 px-4'>Notifications</h6>
									<ul class="list-group rounded-none">
										<li class="list-group-item border-0 align-items-start">
											<div class="avatar bg-success mr-3">
												<span class="avatar-content"><i data-feather="shopping-cart"></i></span>
											</div>
											<div>
												<h6 class='text-bold'>New Order</h6>
												<p class='text-xs'>
													An order made by Ahmad Saugi for product Samsung Galaxy S69
												</p>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown nav-icon mr-2">
								<a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
									<div class="d-lg-inline-block">
										<i data-feather="mail"></i>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
									<a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
									<a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ url('/')}}/logout"><i data-feather="log-out"></i> Logout</a>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
									<div class="avatar mr-1">
										<img src="{{url('/')}}/assets/images/avatar/avatar-s-1.png" alt="" srcset="">
									</div>
									<div class="d-none d-md-block d-lg-inline-block">Hi, {{ $user->name }}</div>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
									<a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
									<a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ url('/')}}/logout"><i data-feather="log-out"></i> Logout</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
				
				<!-- MultiStep Form -->
				<div class="container">
					<div class="row flex-lg-nowrap">
						
						
						<div class="col" style=" font-size: 15px;">
							<div class="row">
								<div class="col mb-3">
									<div class="card" style="border:none;">
										<div class="card-body">
											<div class="e-profile">
												<div class="row">
													
												</div>
												
												<div class="container-fluid" id="grad1">
													<div class="row justify-content-center mt-0" style="margin-top:12px">
														<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center p-0 mt-3 mb-2">
															<div class="card px-0 pt-4 pb-0 mt-3 mb-3" >
																<h2><strong>Builder Account</strong></h2>
																<p>Fill all form field to go to next step</p>
																 <div class="head_txt"><span id="super2" style="color:green;font-size: 23px;font-weight: 700;"></span></div> 
																<div class="row">
																	<div class="col-md-12 mx-0">
																		<form action="{{ url('Admin.addbuillder_form')}}"  name="form" method="post"  id="edituser" enctype="multipart/form-data">
																			<!-- progressbar -->
																			
																			{{ csrf_field() }}
																			
																		
																				<div class="form-card">
																					
																					<div>
																						<div class="submit-property__block">
																							
																							
																							<div class="row">
																								
																							</div><br><!-- .submit-property__group -->
																							<div class="container">
																								<div class="form-row">
																									<div class="form-group col-md-4">
																										<label for="inputPassword4"style="color:black;">Builder name</label>
																										<input type="text" class="form-control" id="name" name="name" value=""style="
																										border: 1px solid #ccc;
																										border-radius: 50px !important;">
																										<span class="text-danger"><strong id="name-error"></strong></span>
																										
																									</div>
																									<div class="form-group col-md-4">
																										<label for="inputPassword4"style="color:black;">Phone Number</label>
																										<input type="text" class="form-control" placeholder="" id="phone" name="phone" value=""style="
																										border: 1px solid #ccc;
																										border-radius: 50px !important;">
																										<span class="text-danger"><strong id="phone-error"></strong></span>
																									</div>
																									<div class="form-group col-md-4">
																										<label for="inputPassword4"style="color:black;">Email</label>
																										<input type="text" class="form-control" placeholder="" id="email" name="email" value=""style="
																										border: 1px solid #ccc;
																										border-radius: 50px !important;">
																										<span class="text-danger"><strong id="email-error"></strong></span>
																									</div>
																								</div>
																							</div>
																							<div class="container">
																								<div class="form-row">
																									<div class="form-group col-md-4">
																										<label for="inputPassword4"style="color:black;">Construction name</label>
																										<input type="text" class="form-control" id="construction_name" name="construction_name" value=""style="
																										border: 1px solid #ccc;
																										border-radius: 50px !important;">
																										<span class="text-danger"><strong id="construction_name-error"></strong></span>
																									</div>
																									<div class="form-group col-md-4">
																										<label for="inputPassword4"style="color:black;">Project  name</label>
																										<input type="text" class="form-control" placeholder="" id="project_name" name="project_name" value=""style="
																										border: 1px solid #ccc;
																										border-radius: 50px !important;">
																										<span class="text-danger"><strong id="project_name-error"></strong></span>
																									</div>
																								
																								</div>
																							</div>
																							<div class="container">
																								<div class="form-row">
																									<div class="form-group col-md-4">
																										<label for="inputPassword4"style="color:black;">Country</label>
																										<input type="text" class="form-control" id="country" name="country" value=""style="
																										border: 1px solid #ccc;
																										border-radius: 50px !important;">
																										<span class="text-danger"><strong id="country-error"></strong></span>
																										
																									</div>
																									<div class="form-group col-md-4">
																										<label for="inputPassword4"style="color:black;">State</label>
																										<input type="text" class="form-control" placeholder="" id="state" name="state" value=""style="
																										border: 1px solid #ccc;
																										border-radius: 50px !important;">
																										<span class="text-danger"><strong id="state-error"></strong></span>
																									</div>
																									<div class="form-group col-md-4">
																										<label for="inputPassword4"style="color:black;">City</label>
																										<input type="text" class="form-control" placeholder="" id="city" name="city" value=""style="
																										border: 1px solid #ccc;
																										border-radius: 50px !important;">
																										<span class="text-danger"><strong id="city-error"></strong></span>
																									</div>
																								</div>
																							</div>
																							<div class="container">
																								<div class="form-row">
																									<div class="form-group col-md-4">
																										<label for="inputPassword4"style="color:black;">Area</label>
																										<input type="text" class="form-control" id="area" name="area" value=""style="
																										border: 1px solid #ccc;
																										border-radius: 50px !important;">
																										<span class="text-danger"><strong id="area-error"></strong></span>
																										
																									</div>
																									<div class="form-group col-md-4">
																										<label for="inputPassword4"style="color:black;">Address</label>
																										<input type="text" class="form-control" placeholder="" id="address" name="address" value=""style="
																										border: 1px solid #ccc;
																										border-radius: 50px !important;">
																										<span class="text-danger"><strong id="address-error"></strong></span>
																									</div>
																									<div class="form-group col-md-4">
																										<label for="inputPassword4"style="color:black;">Pincode</label>
																										<input type="text" class="form-control" placeholder="" id="pincode" name="pincode" value=""style="
																										border: 1px solid #ccc;
																										border-radius: 50px !important;">
																										<span class="text-danger"><strong id="pincode-error"></strong></span>
																									</div>
																								</div>
																							</div>
																							<div class="container">
																								<div class="form-row">
																									<div class="form-group col-md-12">
																										<label for="inputCity">About</label>
																										
																										
																										<div class="form-group has-icon-left">
																											<div class="position-relative">
																												<div class="card-body"style="padding:4px;">
																													
																													<input id="about" name="about" style="padding: 0px 0px 70px 0px; width: 100%;">
																															
																													</div>
																												<span class="text-danger"><strong id="about-error"></strong></span>
																												</div>
																												<!--<div class="form-control-icon">
																													<i data-feather="lock"></i>
																												</div>-->
																											</div>
																										</div>
																										
																									</div>    
																								</div>
																								
																							</div>
																								</div>
																					</div>
																					
																					<div class="form-group col-md-12">
																					    <div class="col-md-3">
																					        <label for="cars">Project Type:</label>
																					    </div>
																					    <div class="col-md-3">
																					        <select name="project_type" id="project_type" style="border: 1px solid;">
																					       <option  value="" selected>Select project type</option>
                                                                                              <option value="ongoing">ongoing</option>
                                                                                               <option value="completed">completed</option>
   
                                                                                             </select>
                                                                                             <span class="text-danger"><strong id="project_type-error"></strong></span>
																					    </div>
																					    
																					 </div>
																					 <div class="container">
																								<div class="form-row">
																									<div class="form-group col-md-12">
																										<label for="inputCity">About Project </label>
																										
																										
																										<div class="form-group has-icon-left">
																											<div class="position-relative">
																												<div class="card-body"style="padding:4px;">
																													
																													<input id="about_project" name="about_project" style="padding: 0px 0px 70px 0px; width: 100%;">
																												
																													</div>
																													<span class="text-danger"><strong id="about_project-error"></strong></span>	
																												</div>
																												<!--<div class="form-control-icon">
																													<i data-feather="lock"></i>
																												</div>-->
																											</div>
																										</div>
																										
																									</div>    
																								</div>
																								
																							</div>
																					<div class="submit-property__block">
																						
																						<div class="container">
																							<div class="form-row">
																								<div class="form-group col-md-12">
																									
																								</div>
																							</div>
																							<div class="form-row">
																								<div class="submit-property__group col-md-12">
																									<label>Brochure</label>
																									<div class="submit-property__upload submit-property__upload-multi2">
																										
																										<div id="brochure-area"></div>
																										<input id="brochure" name="brochure" type="file" multiple>
																										<div class="submit-property__upload-inner">
																											<span class="ion-ios-plus-outline submit-property__icon"></span>
																											<span class="submit-property__upload-desc">pdf
																											here or click to upload</span>
																										</div>
																									</div><!-- .submit-proeprty__upload -->
																									<span class="text-danger"><strong id="brochure-error"></strong></span>
																								</div>
																								
																								
																								
																								
																							</div>
																							<div class="form-row">
																								<div class="submit-property__group col-md-12">
																									<label>Layout</label>
																									<div class="submit-property__upload submit-property__upload-multi2">
																										
																										<div id="layoutl"></div>
																										<input id="layout" name="layout" type="file" multiple>
																										<div class="submit-property__upload-inner">
																											<span class="ion-ios-plus-outline submit-property__icon"></span>
																											<span class="submit-property__upload-desc">pdf
																											here or click to upload</span>
																										</div>
																									</div><!-- .submit-proeprty__upload -->
																									<span class="text-danger"><strong id="layout-error"></strong></span>
																								</div>
																								
																								
																								
																								
																							</div>
																							
																							
																							<div class="form-row">
																								<div class="submit-property__group col-md-12">
																									<label>Property Images</label>
																									<div class="submit-property__upload submit-property__upload-multi2">
																										
																									
																										<input id="property_images"  name="property_images[]"  type="file" multiple="" >
																									
																										<div class="submit-property__upload-inner">
																											<span class="ion-ios-plus-outline submit-property__icon"></span>
																											<span class="submit-property__upload-desc">Drop all
																												images
																											here or click to upload</span>
																										</div>
																									</div><!-- .submit-proeprty__upload -->
																									<span class="text-danger"><strong id="property_images-error"></strong></span>
																								</div>
																								
																								
																								
																								
																							</div>
																							<div class="form-row">
																								<div class="form-group col-md-12">
																									<label for="inputPassword4"style="color:black;">Location</label>
																									<input type="text" class="form-control" placeholder="" id="location" name="location" value=""style="
																									border: 1px solid #ccc;
																									border-radius: 50px !important;">
																									<span class="text-danger"><strong id="location-error"></strong></span>
																								</div>
																								
																							</div>
																							<div class="form-row">
																								<label>RouteMap</label>
																								<div id="submit-property-map"></div>
																							</div>
																							<div class="form-row">
																								<div class="form-group col-md-2" style="margin: 30px 0px 0px 0px;">
																									<label for="inputPassword4"style="color:black;">Possession Date</label>
																									<input type="date" class="form-control" id="possession_date" name="possession_date" value=""style="
																									border: 1px solid #ccc;
																									border-radius: 50px !important;">
																										<span class="text-danger"><strong id="possession_date-error"></strong></span>
																								</div>
																							
																							</div>
																							
																						</div>
																						
																						
																						
																						
																						
																						
																						
																						
																						
																					</div>
																				</div>
																				
																				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
																					<input type="submit" class="btn btn-default1" name="submit" id="submit" value="Submit">
																					<style>.btn-default1{background:#0168be;width:50%;text-align:center;color:#fff;font-size:15px;letter-spacing:.4px;float:right;margin-top:10%}</style>
																				</div>
																			
																		</form>			
																	</div>
																</div>
															</div>
														</div>
													</div>
												</body>
												
											
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
			
		</body>
		
		
		

		<script type="text/javascript">


    $(document).ready(function() {
		    
 $('#edituser').on('submit', function(e){
            e.preventDefault();


        $( '#name-error' ).html( "" );
    	$( '#phone-error' ).html( "" );
		$( '#email-error' ).html( "" );
		$( '#construction_name-error' ).html( "" );
		$( '#project_name-error' ).html( "" );
		$( '#address-error' ).html( "" );
		$( '#country-error' ).html( "" );
		$( '#state-error' ).html( "" );
		$( '#city-error' ).html( "" );
		$( '#area-error' ).html( "" );
		$( '#pincode-error' ).html( "" );
		$( '#about-error' ).html( "" );
		$( '#about_project-error' ).html( "" );
		$( '#project_type-error' ).html( "" );
		$( '#brochure-error' ).html( "" );
    	$( '#layout-error' ).html( "" );
		$( '#location-error' ).html( "" );	
		$( '#property_images-error' ).html( "" );
		$( '#possession_date-error' ).html( "" );	
	
		
		
            var _token            = $("input[name='_token']").val();
            
            
            
          
               
            $.ajax({
                url: "{{ url('addbuillderform') }}",
                type:'POST',
				 method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
                success: function(data) {

                       if(data.error) {
           
                    if(data.error.name){
                        $( '#name-error').html( data.error.name[0] );
                    }
                    if(data.error.phone){
                        $( '#phone-error').html( data.error.phone[0] );
                    }
                    if(data.error.email){
                        $( '#email-error').html( data.error.email[0] );
                    }
                    
               		if(data.error.construction_name){
                        $( '#construction_name-error').html( data.error.construction_name[0] );
                    }
                    
					
						if(data.error.project_name){
                        $( '#project_name-error').html( data.error.project_name[0] );
                    }
                    	if(data.error.address){
                        $( '#address-error').html( data.error.address[0] );
                    }
                    	if(data.error.country){
                        $( '#country-error').html( data.error.country[0] );
                    }
                    	if(data.error.state){
                        $( '#state-error').html( data.error.state[0] );
                    }
                    	if(data.error.city){
                        $( '#city-error').html( data.error.city[0] );
                    }
                    	if(data.error.area){
                        $( '#area-error').html( data.error.area[0] );
                    }
                    	if(data.error.pincode){
                        $( '#pincode-error').html( data.error.pincode[0] );
                    }
                    	if(data.error.about){
                        $( '#about-error').html( data.error.about[0] );
                    }
                    	if(data.error.about_project){
                        $( '#about_project-error').html( data.error.about_project[0] );
                    }
                    	if(data.error.brochure){
                        $( '#brochure-error').html( data.error.brochure[0] );
                    }
                    	if(data.error.layout){
                        $( '#layout-error').html( data.error.layout[0] );
                    }
                    	if(data.error.location){
                        $( '#location-error').html( data.error.location[0] );
                    }
                    	if(data.error.property_images){
                        $( '#property_images-error').html( data.error.property_images[0] );
                    }
                    	if(data.error.possession_date){
                        $( '#possession_date-error').html( data.error.possession_date[0] );
                    }
                    
                    	if(data.error.project_type){
                        $( '#project_type-error').html( data.error.project_type[0] );
                    }
                    }
                    if(data.error == '0') {
                    $('#super2').text('Thank You');
                
                    $("#edituser")[0].reset();

                }
                
            }


        }); 



    });

  });
</script>
		
	</div>
	<script src="{{url('/')}}/assets/css2/js/plugins.js"></script>
	<script src="{{url('/')}}/assets/css2/js/jquery-1.12.4.min.js"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
	<script src="{{url('/')}}/assets/css2/js/infobox.js"></script>
	<script src="{{url('/')}}/assets/css2/js/custom.js"></script>
	
    <script src="{{url('/')}}/assets/js/feather-icons/feather.min.js"></script>
    <script src="{{url('/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{url('/')}}/assets/js/app.js"></script>
    
    <script src="{{url('/')}}/assets/js/main.js"></script>
	
	
	
	
	<script src="{{url('/')}}/assets/js/feather-icons/feather.min.js"></script>
    <script src="{{url('/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{url('/')}}/assets/js/app.js"></script>
    
    <script src="{{url('/')}}/assets/vendors/quill/quill.min.js"></script>
    <script src="{{url('/')}}/assets/js/pages/form-editor.js"></script>
</body>
</html>
