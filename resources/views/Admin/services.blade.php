<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>
    
    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="{{url('/')}}/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="{{url('/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/app.css">
    <link rel="shortcut icon" href="{{url('/')}}/assets/images/favicon.svg" type="image/x-icon">
	<style>
 
		.section-pad-t30 {
    padding-top: 40px;
    padding-bottom: 20px;
}
.our-services .single-services {
    border: 1px solid #dafcef;
    padding: 20px 0;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -o-transition: .4s;
    transition: .4s;
}
.mb-30 {
    margin-bottom: 30px;
} 
</style>
<!-- premium services-->
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="assets/images/logo.svg" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
            
                <li class='sidebar-title'>Main Menu</li>
            
            
            
                <li class="sidebar-item active ">
                    <a href="index.html" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>
                    
                </li>

            
            
            
                				
				
				<li class="sidebar-item  ">
                    <a href="{{url('/')}}/ApartmentSaleRent1" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Add Property</span>
                    </a>
                    
                </li>
				<li class="sidebar-item  ">
                    <a href="{{url('/')}}/userdetails" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>User Details</span>
                    </a>
                    
                </li>
				<li class="sidebar-item  ">
                    <a href="{{url('/')}}/cities" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Cities</span>
                    </a>
                    
                </li>
				<li class="sidebar-item  ">
                    <a href="{{url('/')}}/propertytype" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Property Type</span>
                    </a>
                    
                </li>
				<li class="sidebar-item  ">
                    <a href="{{url('/')}}/slides" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Slides</span>
                    </a>
                    
                </li>
				<li class="sidebar-item  ">
                    <a href="{{url('/')}}/services" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Services</span>
                    </a>
                    
                </li>
				
				<li class="sidebar-item  ">
                    <a href="{{url('/')}}/blog-table" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Blog</span>
                    </a>
                    
					
                </li>
				
				<li class="sidebar-item  ">
                    <a href="{{url('/')}}/contact-table" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Contact</span>
                    </a>
                    
                </li>
				<li class="sidebar-item  ">
                    <a href="{{url('/')}}/newsletter-table" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Newsletter</span>
                    </a>
                    
                </li>
				<li class="sidebar-item  ">
                    <a href="{{url('/')}}/enquiries" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Enquiries</span>
                    </a>
                    
                </li>

            
            
            
                

            
            
         
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <!--<li class="dropdown nav-icon">
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
                        </li>-->
                        <!--<li class="dropdown nav-icon mr-2">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Saugi</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
<div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row" >
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2> premium services</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center" style="margin-top:50px">
				
				
				                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/program (1).svg" alt="" style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="{{url('/')}}/electrical">Electricals</a></h5>
															   <h6><a href="{{url('/')}}/electrical-table"style="border:1px solid black;padding:3px;background-color:green;color:white;">View</a></h6>
                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-design (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/design (1).svg" alt=""style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_525">Furniture
</a></h5>
															   <h6><a href="{{url('/')}}/furniture-table"style="border:1px solid black;padding:3px;background-color:green;color:white;">View</a></h6>

                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-devops.svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/devops.svg" alt=""style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                   
                                <h5><a href="#load-data_538">Plumbing</a></h5>
                                															   <h6><a href="{{url('/')}}/interior-service-table"style="border:1px solid black;padding:3px;background-color:green;color:white;">View</a></h6>

                                                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-technical (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/technical (1).svg" alt=""style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_530">Interior design</a></h5>
                                                               															   <h6><a href="{{url('/')}}/interior-service-table"style="border:1px solid black;padding:3px;background-color:green;color:white;">View</a></h6>

                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-digital.svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/digital.svg" alt=""style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_531">Facilities</a></h5>
                                                               															   <h6><a href="{{url('/')}}/interior-service-table"style="border:1px solid black;padding:3px;background-color:green;color:white;">View</a></h6>

                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-recruit (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/recruit (1).svg" alt=""style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_532">Sanitry/Tiles
</a></h5>
															   <h6><a href="{{url('/')}}/interior-service-table"style="border:1px solid black;padding:3px;background-color:green;color:white;">View</a></h6>

                                                               <span></span>
                            </div>
                        </div>
                    </div>
					<div class="row d-flex justify-contnet-center" style="margin-top:50px">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-conten.svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/conten.svg" alt=""style="height:100px;">
                                
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_533">ManPower
</a></h5>
															   <h6><a href="{{url('/')}}/interior-service-table"style="border:1px solid black;padding:3px;background-color:green;color:white;">View</a></h6>

                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    
					</div>

                </div>
                <!-- More Btn -->
                <!-- Section Button -->

            </div>
			<div class="container">
  <div class="row">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0;  margin-top: 89px;color:white;">Load More</button>
    </div>
  </div>
</div>
        </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2020 &copy; Cyberabad</p>
                    </div>
                    
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</html>
















	
	
	
	
	