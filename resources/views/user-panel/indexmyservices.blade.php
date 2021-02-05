<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
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

	<style>
	.report-module {
  position: relative;
  margin: 32px 6px;
  z-index: 1;
  display: block;
  background: #ffffff;
  min-width: 270px;
  width: 300px\9;
  height: auto;
  -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  -webkit-transition: all 0.3s linear 0s;
  -moz-transition: all 0.3s linear 0s;
  -ms-transition: all 0.3s linear 0s;
  -o-transition: all 0.3s linear 0s;
  transition: all 0.3s linear 0s;
}
.report-module .thumbnail {
  background: #009775;
  height: 500px;
  overflow: hidden;
}
.thumbnail {
    padding: 0;
}
    
.report-module:hover {
  -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
}
.report-module:hover .thumbnail img {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  transform: scale(1.1);
  opacity: .9;
}
.report-module .thumbnail img {
  display: block;
  width: 120%;
  -webkit-transition: all 0.3s linear 0s;
  -moz-transition: all 0.3s linear 0s;
  -ms-transition: all 0.3s linear 0s;
  -o-transition: all 0.3s linear 0s;
  transition: all 0.3s linear 0s;
  opacity: .2;
}
.report-module .post-content {
  position: absolute;
  bottom: 0;
  background: #ffffff;
  width: 100%;
  padding: 20px;
  -webkti-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
}
.report-module .post-content .category {
  position: absolute;
  top: -34px;
  left: 0;
  background: #333;
  padding: 10px 15px;
  color: #ffffff;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
}
.report-module .post-content .title {
  margin: 0;
  padding: 0 0 10px;
  color: #333333;
  font-size: 18px;
    font-weight: 100;
}

.report-module .post-content .description {
  display:block;
  color: #666666;
  font-size: 14px;
  line-height: 1.8em;
}
.report-module .post-content .post-meta {
  margin: 30px 0 0;
  color: #999999;
}
.report-module .post-content .post-meta .timestamp {
  margin: 0 16px 0 0;
}
.btn-primary {
  color: #fff;
  text-decoration: none;
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
						<a href="#" class="site-logo"><img src="images\logo.png" alt=""></a>
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
  <!--div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0  d-flex flex-row"  style="position:0;">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo_star_black.png" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo_star_mini.jpg" alt=""></a>
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
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="images/face.jpg" alt=""></a>
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
            <img src="images/face.jpg" alt="">
            <p class="name">Richard V.Welsh</p>
            <p class="designation">Manager</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            
            <li class="nav-item active">
              <a class="nav-link" href="indexmyprofile.html">
                <img src="{{url('/')}}/usercss/images/icons/2.png" alt="">
                <span class="menu-title"  style="font-size:15px;">Myprofile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/addproperty">
                <img src="{{url('/')}}/usercss/images/icons/005-forms.png" alt="">
                <span class="menu-title"  style="font-size:15px;">Add Property</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/addproperty1">
                <img src="{{url('/')}}/usercss/images/icons/005-forms.png" alt="">
                <span class="menu-title"  style="font-size:15px;">Add Property</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/indexmyproperty">
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
              <a class="nav-link" href="{{url('/')}}/indexmyenquiry">
                <img src="{{url('/')}}/usercss/images/icons/5.png" alt="">
                <span class="menu-title"  style="font-size:15px;">Enquires</span>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/indexmysearches">
                <img src="{{url('/')}}/usercss/images/icons/6 (2).png" alt="">
                <span class="menu-title"  style="font-size:15px;">MySearches </span>
              </a>
			  
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/indexmysearchesaved">
                <img src="{{url('/')}}/usercss/images/icons/6 (2).png" alt="">
                <span class="menu-title"  style="font-size:15px;">MySearchesaved </span>
              </a>
			  
            </li>
			
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/indexmyservices">
                <img src="{{url('/')}}/usercss/images/icons/4.png" alt="">
                <span class="menu-title"  style="font-size:15px;">MyServices</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/indexmysavedproperties">
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
        <div class="content-wrapper" style="text-align:center;">
          <h3 class="page-heading mb-4">Dashboard</h3>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/program (1).svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="{{url('/')}}/indexuserserviceform">Electricals</a></h5>
                                                               <span></span>
                            </div>
                        
                    </div>
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/design (1).svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="">Furniture</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/devops.svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="">Plumbing</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/technical (1).svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="">Interior design</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                   
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
		            <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/digital.svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="">Facilities</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/recruit (1).svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="">Sanitry/Tiles</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/conten.svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="">ManPower</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/sysadmin.svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="">PestControl</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
		            <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/qa-automation.svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="">Water Proof</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/copywriting (2).svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="">Construction Chemicals</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                   
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/online (2).png" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="">CompoundWall Mesh</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                   
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                      <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/others.svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="">Window& Door Mesh</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
			<div class="container">
  <div class="row">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0;  margin-top: 89px;color:white;">Load More</button>
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
  
  
</body>

</html>
