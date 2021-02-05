<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatable - Voler Admin Dashboard</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
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
                    <a href="{{url('/')}}/ApartmentSaleRent" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Add Property</span>
                    </a>
                    
                </li>
				<li class="sidebar-item  ">
                    <a href="{{url('/')}}/ApartmentSaleRent1" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Add Property1</span>
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
            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Slides</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Slides</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Slides
			<a href="{{url('/')}}/add-slides"><span class="badge bg-danger float-right" style="padding:12px;"><i class="fa fa-plus"></i>Add Slides</span></a>

            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Image</th>
							<th>Start date</th>
							<th>End date</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slides as $sli)
					 
                        <tr id="row{{$sli->id}}">
                            
                            <td>{{$sli->title}}</td>
							<td><img src="{{url('/public/')}}/{{$sli->logo}}" style="width:50px; height:50px;"></td>
                            <td>{{$sli->created_at}}</td>
					                            <td>{{$sli->updated_at}}</td>

							
                           
                        </tr>
                       @endforeach
                         
                    </tbody>
                </table>
            </div>
        </div>

    </section>
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
    
<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/vendors.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</html>
