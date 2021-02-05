

<!DOCTYPE html>
<html lang="en">

<head>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<link rel="stylesheet" href="assets/css/bootstrap.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="assets/vendors/quill/quill.bubble.css">
    <link rel="stylesheet" href="assets/vendors/quill/quill.snow.css">
	
	<link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="{{url('/')}}/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="{{url('/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/app.css">
    <link rel="shortcut icon" href="{{url('/')}}/assets/images/favicon.svg" type="image/x-icon">
	
	
	
	
	
	<link rel="shortcut icon" href="{{url('/')}}/assets/js/image.js">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
. btn btn-primary{
.btn btn-primary.active, .btn btn-primary.focus, .btn btn-primary:active, .btn btn-primary:focus, .btn btn-primary:hover, .open>.dropdown-toggle.btn btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;   
}	

.preview-images-zone {
    width: 100%;
    border: 1px solid #ddd;
    min-height: 180px;
    /* display: flex; */
    padding: 5px 5px 0px 5px;
    position: relative;
    overflow:auto;
}
.preview-images-zone > .preview-image:first-child {
    height: 185px;
    width: 185px;
    position: relative;
    margin-right: 5px;
}
.preview-images-zone > .preview-image {
    height: 90px;
    width: 90px;
    position: relative;
    margin-right: 5px;
    float: left;
    margin-bottom: 5px;
}
.preview-images-zone > .preview-image > .image-zone {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .image-zone > img {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .tools-edit-image {
    position: absolute;
    z-index: 100;
    color: #fff;
    bottom: 0;
    width: 100%;
    text-align: center;
    margin-bottom: 10px;
    display: none;
}
.preview-images-zone > .preview-image > .image-cancel {
    font-size: 18px;
    position: absolute;
    top: 0;
    right: 0;
    font-weight: bold;
    margin-right: 10px;
    cursor: pointer;
    display: none;
    z-index: 100;
}
.preview-image:hover > .image-zone {
    cursor: move;
    opacity: .5;
}
.preview-image:hover > .tools-edit-image,
.preview-image:hover > .image-cancel {
    display: block;
}
.ui-sortable-helper {
    width: 90px !important;
    height: 90px !important;
}

.container {
    padding-top: 50px;
}
</style>
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
            
            
            
                <li class="sidebar-item  ">
                    <a href="index.html" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>
                    
                </li>

            
            
            
                
				<li class="sidebar-item active ">
                    <a href="{{url('/')}}/blog-table" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Blog</span>
                    </a>
                    
                </li>
				<li class="sidebar-item active ">
                    <a href="{{url('/')}}/contact-table" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Contact</span>
                    </a>
                    
                </li>
				<li class="sidebar-item active ">
                    <a href="{{url('/')}}/newsletter-table" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Newsletter</span>
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
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Ravali</div>
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
<section >
<div class="container"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding: 20px;">
<div class="row">
<form>
	<div class="row" style="text-align:center;">
            <div style="display:inline-block; float:none; text-align:left; margin-right:auto;">
                <div class="input-group">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="radio" name="options" > Sale
                        </label>

                        <label class="btn btn-primary">
                            <input type="radio" name="options"> Rent
                        </label>
                    </div>
                </div>
            </div>
        </div><br>
<div class="container">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Bedrooms</label>
      <select id="inputState" class="form-control">
        <option selected>Select Bedrooms</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	<div class="form-group col-md-4">
      <label for="inputState">Balconies</label>
      <select id="inputState" class="form-control">
        <option selected>Select Balconies</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	<div class="form-group col-md-4">
      <label for="inputState">Bathrooms</label>
      <select id="inputState" class="form-control">
        <option selected>Select Bathrooms</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	</div>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Total Area</label>
	  <input type="text" class="form-control" id="inputCity">
	</div>
	  <div class="form-group col-md-2">
      <label for="inputState"></label>
      <select id="inputState" class="form-control"style="margin:8px 0px 0px 0px;">
        <option selected>sqyard</option>
        <option>sqft</option>
		
      </select>
    
	 </div>
	 <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Carpet Area</label>
	  <input type="text" class="form-control" id="inputCity">
	</div>
	  <div class="form-group col-md-2">
      <label for="inputState"></label>
      <select id="inputState" class="form-control"style="margin:8px 0px 0px 0px;">
        <option selected>sqft</option>
		<option>sqyard</option>
		
      </select>
    
	 </div>
	 <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Buildup Area</label>
	  <input type="text" class="form-control" id="inputCity">
	</div>
	  <div class="form-group col-md-2">
      <label for="inputState"></label>
      <select id="inputState" class="form-control"style="margin:8px 0px 0px 0px;">
        <option selected>sqft</option>
		<option>sqyard</option>
		
      </select>
    
	 </div>
	</div>
</div>
<div class="container">
	<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Additional Rooms</label>
	 </div>
	 </div>
	 <div class="form-row">
      <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Servent Room
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Study Room
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Store Room
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Pooja Room
      </label>
    </div>
  </div>
    </div>
	</div>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Sales price</label>
	  <input type="text" class="form-control" id="inputCity">
	</div>
	  <div class="form-group col-md-2">
      <label for="inputState"></label>
      <select id="inputState" class="form-control"style="margin:8px 0px 0px 0px;">
        <option selected>sqyard/sqft</option>
		<option>sqyard</option>
        <option>sqft</option>
		
      </select>
    
	 </div>
	 <div class="form-group col-md-4">
      <label for="inputState">Negotiatible</label>
      <select id="inputState" class="form-control">
        <option selected>Yes</option>
		<option>Yes</option>
        <option>No</option>
		
      </select>
    
	 </div>
	</div>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Rent price</label>
	  <input type="text" class="form-control" id="inputCity">
	</div>
	  <div class="form-group col-md-2">
      <label for="inputState"></label>
      <select id="inputState" class="form-control"style="margin:8px 0px 0px 0px;">
        <option selected>sqyard/sqft</option>
		<option>sqyard</option>
        <option>sqft</option>
		
      </select>
    
	 </div>
	 <div class="form-group col-md-4">
      <label for="inputState">Negotiatible</label>
      <select id="inputState" class="form-control">
        <option selected>Yes</option>
		<option>Yes</option>
        <option>No</option>
		
      </select>
    
	 </div>
	 <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Security Deposit</label>
	  <input type="text" class="form-control" id="inputCity">
	</div>
	<div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Available from</label>
	  <input type="date" class="form-control" id="birthday" name="birthday">
	</div>
	</div>
</div>

<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Price Include</label>
	 </div>
	 </div>
	 <div class="form-row">
      <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Car Parking
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Club Membership
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Registartion
      </label>
    </div>
  </div>
  <div class="form-group col-md-3 input-group-addon"style="margin: -33px 0px 7px -80px;">
    
      <label for="inputPassword4"style="color:black;">Booking Amount</label>
	  <input type="text" class="form-control" id="inputCity">
	
  </div>
    </div>
</div>
<div class="container">
<div class="form-row">	
	<div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Property Status</label>
	 </div>
	 </div>
	 <div class="form-row">
      <div class="form-group col-md-2">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1">
      <label class="form-check-label" for="gridRadios1">
        Ready to move
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2">
      <label class="form-check-label" for="gridRadios2">
        Under Construction
      </label>
    </div>
  </div>
  <div class="form-group col-md-4"style="margin: -40px 0px 0px 0px;">
      <label for="inputPassword4"style="color:black;">Possession Date</label>
	  <input type="date" class="form-control" id="birthday" name="birthday">
	</div>
  </div>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Age</label>
      <select id="inputState" class="form-control">
        <option selected>Select Property Age</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	  <div class="form-group col-md-4">
      <label for="inputState">Transaction Type</label>
      <select id="inputState" class="form-control">
        <option selected>Type</option>
		<option>New</option>
        <option>Resale</option>
		
      </select>
    
	 </div>
	</div>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">Description</label>

                            <div class="form-group has-icon-left">
                                <div class="position-relative">
									<div class="card-body"style="padding:4px;">
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

<h3 style="color:black;"><b>Property Features</b></h3><br>
<div class="container">
	<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Furnishing Status</label>
	 </div>
	 </div>
	 <div class="form-row">
      <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1">
      <label class="form-check-label" for="gridRadios1">
        Unfurnished
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2">
      <label class="form-check-label" for="gridRadios2">
        Fully Furnished
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3">
      <label class="form-check-label" for="gridRadios3">
        Semi Furnished
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4">
      <label class="form-check-label" for="gridRadios4">
        No field
      </label>
    </div>
  </div>
  </div>
</div>

<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputState">Fully Furnished Fields</label>
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-3">
      <select id="inputState" class="form-control">
        <option selected>Bed Room no</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	<div class="form-group col-md-3">
      <select id="inputState" class="form-control">
        <option selected>Tv's</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	<div class="form-group col-md-3">
      <select id="inputState" class="form-control">
        <option selected>Greesar</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	<div class="form-group col-md-3">
      <select id="inputState" class="form-control">
        <option selected>Ac's</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	</div>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Additional Furnishing</label>
	</div>
</div>
	<div class="form-row">
    <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Sofa
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Refrigirator
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Gas Connection
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Dining Table
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Micro Wave
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Wshing Machine
      </label>
    </div>
  </div>
    </div>
	</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Amities</label>
	</div>
</div>
	<div class="form-row">
    <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Car parking
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Lift
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Power backup
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Security 24*7
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       Swimming pool
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Gym
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Landscope garden
      </label>
    </div>
  </div>
    </div>
	</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Car Parking</label>
      <select id="inputState" class="form-control">
        <option selected>Covered</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	<div class="form-group col-md-4">
      <label for="inputState">Opened</label>
      <select id="inputState" class="form-control">
        <option selected>Opened</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	</div>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputState">Property Details</label>
	</div>
</div>
<div class="form-row">
	
	<div class="form-group col-md-3">
      <select id="inputState" class="form-control">
        <option selected>Open side</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	<div class="form-group col-md-3">
      <select id="inputState" class="form-control">
        <option selected>Total floor</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	<div class="form-group col-md-3">
      <select id="inputState" class="form-control">
        <option selected>Facing</option>
		<option>1</option>
        <option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
      </select>
    </div>
	</div>
</div>
<h3 style="color:black;"><b>Additional Details</b></h3><br>
	
<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Over looking</label>
	</div>
</div>
	<div class="form-row">
    <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Corner Property
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Road
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Park
      </label>
    </div>
  </div>
    </div>
	</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Owner Type</label>
	</div>
</div>
	<div class="form-row">
    <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Free hold
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Power Of Attomey
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Co-operative Society
      </label>
    </div>
  </div>
    </div>
	</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputState">Flooring Type</label>
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-2">
      <select id="inputState" class="form-control">
        <option selected>Living Room</option>
		<option>Ceramic Porciline Tiles</option>
        <option>Vitrified Tiles</option>
		<option>Anti Skid Tiles</option>
		<option>Marble granet Tiles</option>
		<option>Wooden Flooring</option>
		<option>Laminated Wooden Flooring</option>
		<option>Wood Finish Vinvi Flooring</option>

      </select>
    </div>
	<div class="form-group col-md-2">
      <select id="inputState" class="form-control">
        <option selected>Kitchen</option>
		<option>Ceramic Porciline Tiles</option>
        <option>Vitrified Tiles</option>
		<option>Anti Skid Tiles</option>
		<option>Marble granet Tiles</option>
		<option>Wooden Flooring</option>
		<option>Laminated Wooden Flooring</option>
		<option>Wood Finish Vinvi Flooring</option>

      </select>
    </div>
	<div class="form-group col-md-2">
      <select id="inputState" class="form-control">
        <option selected>Bath Room</option>
		<option>Ceramic Porciline Tiles</option>
        <option>Vitrified Tiles</option>
		<option>Anti Skid Tiles</option>
		<option>Marble granet Tiles</option>
		<option>Wooden Flooring</option>
		<option>Laminated Wooden Flooring</option>
		<option>Wood Finish Vinvi Flooring</option>

      </select>
    </div>
	<div class="form-group col-md-2">
      <select id="inputState" class="form-control">
        <option selected>Bed Room</option>
		<option>Ceramic Porciline Tiles</option>
        <option>Vitrified Tiles</option>
		<option>Anti Skid Tiles</option>
		<option>Marble granet Tiles</option>
		<option>Wooden Flooring</option>
		<option>Laminated Wooden Flooring</option>
		<option>Wood Finish Vinvi Flooring</option>

      </select>
    </div>
	<div class="form-group col-md-2">
      <select id="inputState" class="form-control">
        <option selected>Balcony</option>
		<option>Ceramic Porciline Tiles</option>
        <option>Vitrified Tiles</option>
		<option>Anti Skid Tiles</option>
		<option>Marble granet Tiles</option>
		<option>Wooden Flooring</option>
		<option>Laminated Wooden Flooring</option>
		<option>Wood Finish Vinvi Flooring</option>

      </select>
    </div>
	<div class="form-group col-md-2">
      <select id="inputState" class="form-control">
        <option selected>Other Room</option>
		<option>Ceramic Porciline Tiles</option>
        <option>Vitrified Tiles</option>
		<option>Anti Skid Tiles</option>
		<option>Marble granet Tiles</option>
		<option>Wooden Flooring</option>
		<option>Laminated Wooden Flooring</option>
		<option>Wood Finish Vinvi Flooring</option>

      </select>
    </div>
	</div>
</div>	




<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputState">Images</label>
	  <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <!--<input type="title" id="title9" name="title9" class="form-control" placeholder="Title" id="first-name-icon">
									<label class="font-weight-bold" for="logo">Logo (png,
                                                        Jpg,jpeg,gif - 2MB
                                                        max)</label>-->

<input type="file" class="form-control" id="logo" name="logo">
									
                                <strong id="logo-error"></strong>
                                    <div class="form-control-icon">
                                        <i data-feather="image"></i>
                                    </div>
                                </div>
                            </div>
	</div>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Posted By:</label>
	</div>
</div>
	<div class="form-row">
    <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Owner
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Agent
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Others
      </label>
    </div>
  </div>
    </div>
	</div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</section>
<script>
    $(document).ready(function () {

        $("#watch-me").click(function () {
            $("#show-me:hidden").show('slow');

            $("#show-me-two").hide();

            $("#show-me-three").hide();

        });

        $("#watch-me").click(function () {

            if ($('watch-me').prop('checked') === false) {

                $('#show-me').hide();

            }

        });




        $("#see-me").click(function () {
            $("#show-me-two:hidden").show('slow');
            $("#show-me").hide();
            $("#show-me-three").hide();
        });
        $("#see-me").click(function () {
            if ($('see-me-two').prop('checked') === false) {
                $('#show-me-two').hide();
            }
        });







        $("#look-me").click(function () {
            $("#show-me-three:hidden").show('slow');
            $("#show-me").hide();
            $("#show-me-two").hide();
        });
        $("#look-me").click(function () {
            if ($('see-me-three').prop('checked') === false) {
                $('#show-me-three').hide();
            }
        });

    });

</script>



                       <!--for rent apartment>
			    <div class="container">
					<div class="row">
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group input-group-addon">MonthlyRent</span>
                                    <input  type="number" class="form-control"placeholder="Enter Amount in Rs" />
                                </div>
								<div class="checkbox" style="padding-left: 10px; margin:0px;">
                                        <label>
                                            <input type="checkbox" value="on"
                                                style="position: absolute;visibility: visible;" name="p_negotiable">  
                                            Negotiable
                                        </label>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                  <span class="input-group-addon">SecurityDeposit</span>
                                    <select class="form-control" id="type">
                                        <option value="" disabled selected>SecurityDeposit</option>
                                        <option value="1">00 Month</option>
                                        <option value="1">01 Month</option>
                                        <option value="1">02 Month</option>
                                        <option value="1">03 Month</option>
                                        <option value="1">04 Month</option>
                                        <option value="1">05 Month</option>
                                        <option value="1">06 Month</option>
							            <option value="2">07 Month</option>
							            <option value="2">08 Month</option>
							                            
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3" >
                                <div class="input-group">
                                    <span class="input-group-addon">Maintainance</span>
                                    <input type="text" class="form-control" placeholder="Enter Amount in Rs">
                                    
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                                <span class="input-group-addon">Available From</span>
												<input type="date" id="start" style="height:34px"name="trip-start" value="2018-07-22" min="2020-10-01" max="2020-12-31">
                                            </div>
                            </div>
                        </div>
                    </div>
				</div>
					
					<!-- end for rent apartment-->


















											
											
											
											
											
											
											
											
											
											
											
											
											
											
											
											
											
		
											
											
											 <!-- end Villa Code-->
											









































<script>


 $(function() {
   $("input[name='optradio']").click(function() {
     if ($("#unfurnished").is(":checked")) {
	   $("#furnishinghide").hide();
     } else {
              $("#furnishinghide").show();

     }
   });
 });

</script>



</body>




<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/vendors.js"></script>
    <script src="assets/js/pages/form-editor.js"></script>
	<script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/vendors/quill/quill.min.js"></script>
    <script src="assets/js/pages/form-editor.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</html>