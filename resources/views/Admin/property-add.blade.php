<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Group - Voler Admin Dashboard</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">

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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<title>Document</title>
    <style>
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
            width: 100%;
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

        #progressbar #step1_active:before {
            font-family: FontAwesome;
            content: "\f023"
        }

        #progressbar #step2_active:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #step3_active:before {
            font-family: FontAwesome;
            content: "\f09d"
        }

        #progressbar #step4_active:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

  #progressbar #step5_active:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

  #progressbar #step6_active:before {
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
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0" style="margin-top:12px">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3" >
                    <h2><strong>Sign Up Your User Account</strong></h2>
                    <p>Fill all form field to go to next step</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="{{ url('admin/submit-property') }}" method="POST" class="forms-sample"  enctype="multipart/form-data" >
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="step1_active"><strong>Property Type</strong></li>
                                    <li id="step2_active"><strong>Property Details</strong></li>
                                    <li id="step3_active"><strong>Property Features</strong></li>
                                    <li id="step4_active"><strong>Additional Information</strong></li>
									<li id="step5_active"><strong>Location</strong></li>
                                    <li id="step6_active"><strong>Finish</strong></li>

                                </ul> <!-- fieldsets -->

                                <fieldset id="step1">
                                    <div class="form-card">
                                        <!-- <h2 class="fs-title">Payment Information</h2> -->
                                        <div class="radio-group">
<div class='radio' data-value="apartment" onclick="javascript:property_type('apartment')"><img src="{{url('/')}}/img/aprtment.jpg" width="200px" height="80px">
</div>
<div class='radio' data-value="villa" onclick="javascript:property_type('villa')"><img src="{{url('/')}}/img/villa.jpg" width="200px" height="80px">
</div>
<div class='radio' data-value="independent" onclick="javascript:property_type('independent')"><img src="{{url('/')}}/img/independent.jpg" width="200px" height="80px">
</div>
<div class='radio' data-value="farmhouse" onclick="javascript:property_type('farmhouse')"><img src="{{url('/')}}/img/farmhouse.jpg" width="200px" height="80px">
</div>
<div class='radio' data-value="farmlands" onclick="javascript:property_type('farmlands')"><img src="{{url('/')}}/img/farmlands.jpg" width="200px" height="80px">
</div>
<div class='radio' data-value="warehouse" onclick="javascript:property_type('warehouse')"><img src="{{url('/')}}/img/warehouse.jpg" width="200px" height="80px">
</div>
<input type="text" name="property_type" id="property_type" >
	<br>
									                                         <span class="text-danger"><strong id="property_type-error"></strong></span>

                                        </div>

                                    </div> <input type="button" id="step1_next" name="next" class="next action-button"
                                        value="Next Step" />
                                </fieldset>
                                <fieldset id="step2">
                                    <div class="form-card">
                                        <h2 class="fs-title">Property Details</h2>
                                 	 {{ csrf_field() }}
                                        <div>
                                            <div class="submit-property__block">
                                                

                                                <div class="row">
            <div class="form-group col-md-12">
                <div class="input-group">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="radio" name="property_for" value="1" id="sale_for" checked> Sale
                        </label>
                        

                        <label class="btn btn-primary">
                            <input type="radio" name="property_for" id="rent_for" value="2"  > Rent
                        </label>
                    </div>
                </div>
            </div>
        </div><br><!-- .submit-property__group -->
        <div id="without_farmlands_page" style="display:none;">
<div class="container">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Bedrooms</label>
      <select id="bedrooms" class="form-control"style="border-radius: 50px !important;" name="bedrooms" >
        <option value="" selected>Select Bedrooms</option>
        <option value="0" >0</option>
		<option value="1" >1</option>
        <option value="2" >2</option>
		<option value="3" >3</option>
		<option value="4" >4</option>
		<option value="5" >5</option>
      </select>
        <span class="text-danger"><strong id="bedrooms-error"></strong></span>
    </div>
	<div class="form-group col-md-4">
      <label for="inputState">Balconies</label>
      <select id="balconies" class="form-control"style="border-radius: 50px !important;" name="balconies">
        <option   value="" selected>Select Balconies</option>
        <option value="0" >0</option>
		<option value="1" >1</option>
        <option value="2" >2</option>
		<option value="3" >3</option>
		<option value="4" >4</option>
		<option value="5" >5</option>
      </select>
        <span class="text-danger"><strong id="balconies-error"></strong></span>
    </div>
	<div class="form-group col-md-4">
      <label for="inputState">Bathrooms</label>
      <select id="bathrooms" class="form-control"style="border-radius: 50px !important;" name="bathrooms">
        <option value="" selected>Select Bathrooms</option>
        <option value="0" >0</option>
		<option value="1" >1</option>
        <option value="2" >2</option>
		<option value="3" >3</option>
		<option value="4" >4</option>
		<option value="5" >5</option>
      </select>
       <span class="text-danger"><strong id="bathrooms-error"></strong></span>
    </div>
	</div>
</div>
<div class="container-fluid">
	<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Area</label>
      
	 </div>
	 </div>
<div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Total Area</label>
	  <input type="text" class="form-control" id="total_area" style="border: 1px solid #ccc;border-radius: 50px !important;" name="total_area"> 
	         <span class="text-danger"><strong id="total_area-error"></strong></span>

	</div>
	  <div class="form-group col-md-2" >
      <label for="inputState"></label>
      <select id="total_area_measurement" class="form-control" style="margin: 30px 0px 0px 0px;" name="total_area_measurement">
        <option value="1" selected>sqyard</option>
		<option value="2">sqft</option>
        
		
      </select>
           <span class="text-danger"><strong id="total_area_measurement-error"></strong></span>

	 </div>
	 <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Carpet Area</label>
	  <input type="text" class="form-control" id="carpet_area" style="border: 1px solid #ccc;border-radius: 50px !important;" name="carpet_area">
	  	         <span class="text-danger"><strong id="carpet_area-error"></strong></span>

	</div>
	  <div class="form-group col-md-2" >
      <label for="inputState"></label>
      <select id="carpet_area_measurement" class="form-control"style="margin: 30px 0px 0px 0px;" name="carpet_area_measurement">
        <option value="1" selected>sqyard</option>
		
        <option value="2">sqft</option>
		
      </select>
       <span class="text-danger"><strong id="carpet_area_measurement-error"></strong></span>
    
	 </div>
	 <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Buildup Area</label>
	  <input type="text" class="form-control" id="buildup_area" style="border: 1px solid #ccc;border-radius: 50px !important;" name="buildup_area">
	  <span class="text-danger"><strong id="buildup_area-error"></strong></span>
	</div>
	  <div class="form-group col-md-2" >
      <label for="inputState"></label>
      <select id="buildup_area_measurement" class="form-control"style="margin: 30px 0px 0px 0px;" name="buildup_area_measurement">
        <option value="1" selected>sqyard</option>
		
        <option value="2">sqft</option>
		
      </select>
       <span class="text-danger"><strong id="buildup_area_measurement-error"></strong></span>
    
	 </div>
	</div>
</div>
<div class="container">
	<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Additional Rooms</label>
	 </div>
	 </div>
	 <div class="form-row"style="
    padding-left: 20px;">
      <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="servent_room" name="additional_rooms[]" value="1">
      <label class="form-check-label" for="gridCheck">
        Servent Room
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="study_room" name="additional_rooms[]" value="2">
      <label class="form-check-label" for="gridCheck">
        Study Room
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="store_room" name="additional_rooms[]" value="3">
      <label class="form-check-label" for="gridCheck">
        Store Room
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="pooja_room" name="additional_rooms[]" value="4">
      <label class="form-check-label" for="gridCheck">
        Pooja Room
      </label>
    </div>
  </div>
  
   <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="none" name="additional_rooms[]" value="5">
      <label class="form-check-label" for="gridCheck">
        None
      </label>
    </div>
  </div>
  
    </div>
     <span class="text-danger"><strong id="additional_rooms-error"></strong></span>
	</div>

<!--<div class="container">
	<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Additional Rooms</label>
	 </div>
	 </div>
	 <div class="form-row">
      <div class="form-group col-md-2">
    <div class="form-check">
      <input type="checkbox" id="cb1" />
                                    <label for="cb1">
									<p>StudyRoom</p>
									<img src="E:\admin-panel\admin-panel\docs\img\icons8-study-100.png" /></label>
    </div>
  </div>
  <div class="form-group col-md-2">
    <div class="form-check">
      <input type="checkbox" id="cb2" />
                                    <label for="cb2">
									<p>StudyRoom</p>
									<img src="E:\admin-panel\admin-panel\docs\img\icons8-study-100.png" /></label>
    </div>
  </div>
  <div class="form-group col-md-2">
    <div class="form-check">
      <input type="checkbox" id="cb3" />
                                    <label for="cb3">
									<p>StudyRoom</p>
									<img src="E:\admin-panel\admin-panel\docs\img\icons8-study-100.png" /></label>
    </div>
  </div>
  <div class="form-group col-md-2">
    <div class="form-check">
      <input type="checkbox" id="cb4" />
                                    <label for="cb4">
									<p>StudyRoom</p>
									<img src="E:\admin-panel\admin-panel\docs\img\icons8-study-100.png" /></label>
    </div>
  </div>
    </div>
	</div>-->
	
	<div class="container" id="sale_price_section">
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Sale Price</label>
	  <input type="text" class="form-control" id="sale_price"style="border: 1px solid #ccc;border-radius: 50px !important;" name="sale_price" value="">
	   <span class="text-danger"><strong id="sale_price-error"></strong></span>
	</div>
	  <div class="form-group col-md-3" >
      <label for="inputState"></label>
      <select id="sale_price_measurement" class="form-control"style="margin: 30px 0px 0px 0px;" name="sale_price_measurement" >
        <option value="1" selected>Rs/Sqyard</option>
        <option value="2">Rs/Sqft</option>
		
      </select>
    
	 </div>
	 <div class="form-group col-md-3">
      <label for="inputState">Negotiatible</label>
      <select id="sale_negotiatible" class="form-control" name="sale_negotiatible" >
        <option value="1" selected>Yes</option>
        <option value="2">No</option>
		
      </select>
       <span class="text-danger"><strong id="sale_negotiatible-error"></strong></span>
    
	 </div>
	 <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Booking Amount</label>
	  <input type="text" class="form-control" placeholder="Rs/-" id="sale_booking_amount" style="border: 1px solid #ccc;border-radius: 50px !important;" name="sale_booking_amount" value="">
	   <span class="text-danger"><strong id="sale_booking_amount-error"></strong></span>
	</div>
	</div>
</div>


<div class="container" id="rent_price_section">
<div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Rent Price</label>
	  <input type="text" class="form-control" id="rent_price" style="border: 1px solid #ccc;border-radius: 50px !important;" name="rent_price" value="">
	   <span class="text-danger"><strong id="rent_price-error"></strong></span>
	</div>
	  <div class="form-group col-md-2" >
      <label for="inputState"></label>
      <select id="rent_price_measurement" class="form-control"style="margin: 30px 0px 0px 0px;" name="rent_price_measurement" >
        <option value="1" selected>Rs/Sqyard</option>
        <option value="2">Rs/Sqft</option>
		
      </select>
    	   <span class="text-danger"><strong id="rent_price_measurement-error"></strong></span>
	 </div>
	 <div class="form-group col-md-3">
      <label for="inputState">Negotiatible</label>
      <select id="rent_negotiatible" class="form-control" name="rent_negotiatible">
        <option value="1" selected>Yes</option>
        <option value="0">No</option>
		
      </select>
       <span class="text-danger"><strong id="rent_negotiatible-error"></strong></span>
    
	 </div>
	 <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Security Deposit</label>
	  <input type="text" class="form-control" placeholder="Rs/-" id="rent_booking_amount" style="border: 1px solid #ccc;border-radius: 50px !important;" name="rent_booking_amount" value="">
 <span class="text-danger"><strong id="rent_booking_amount-error"></strong></span>
	</div>
	</div>
	<div class="form-row">
	<div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Monthly maintenance</label>
	 
	  <input type="text" class="form-control" placeholder="Rs/-" id="rent_monthly_maintenance"style="border: 1px solid #ccc;border-radius: 50px !important;" name="rent_monthly_maintenance">
 <span class="text-danger"><strong id="rent_monthly_maintenance-error"></strong></span>
	</div>
	<div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Available from</label>
	  <input type="date" class="form-control" id="available_from" name="available_from"style="border: 1px solid #ccc;border-radius: 50px !important;">
	 <span class="text-danger"><strong id="available_from-error"></strong></span>
	</div>
	</div>
</div>

<div class="container">
	<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Price Include</label>
	 </div>
	 </div>
	 <div class="form-row"style="
    padding-left: 20px;">
      <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="car_parking" name="include_price[]" value="0">
      <label class="form-check-label" for="gridCheck">
        Car parking
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="club_membership" name="include_price[]" value="1">
      <label class="form-check-label" for="gridCheck">
        Club membership
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="registration" name="include_price[]" value="2">
      <label class="form-check-label" for="gridCheck">
        Registration
      </label>
    </div>
  </div>
  
   <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="none1" name="include_price[]" value="3">
      <label class="form-check-label" for="gridCheck">
        None
      </label>
    </div>
  </div>
  
    </div>
     <span class="text-danger"><strong id="include_price-error"></strong></span>
	</div>

<div class="container">
<div class="form-row">	
	<div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Property Status</label>
	 </div>
	 </div>
	 <div class="form-row"style="
    padding-left: 20px;">
      <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="property_status" id="rm" value="1" checked>
      <label class="form-check-label" for="property_status1">
        Ready to move
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="property_status" id="uc" value="2">
      <label class="form-check-label" for="property_status2">
        Under Construction
      </label>
    </div>
  </div>
  
  
  </div>
   <span class="text-danger"><strong id="property_status-error"></strong></span>
</div>

<div class="container" id="rm_section">
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Age</label>
      <select id="age" class="form-control" name="age">
        <option value="" selected>Select Property Age</option>
        <option value="0">New</option>

		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="age-error"></strong></span>
    </div>
	  <div class="form-group col-md-4">
      <label for="inputState">Transaction Type</label>
      <select id="rm_transaction_type" class="form-control" name="rm_transaction_type">
        <option value=""  selected>Type</option>
		<option value="1">New</option>
        <option value="2">Resale</option>
		
      </select>
     <span class="text-danger"><strong id="rm_transaction_type-error"></strong></span>
	 </div>
	</div>
</div>
<div class="container" id="uc_section">
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4"style="color:black;">Possession Date</label>
	  <input type="date" class="form-control" id="possession_date" name="possession_date"style="
	  border: 1px solid #ccc;
    border-radius: 50px !important;">
     <span class="text-danger"><strong id="possession_date-error"></strong></span>
	</div>
	  <div class="form-group col-md-4">
      <label for="inputState">Transaction Type</label>
      <select id="uc_transaction_type" class="form-control" name="uc_transaction_type">
        <option value="" selected>Type</option>
			<option value="1">New</option>
        <option value="2">Resale</option>
		
      </select>
     <span class="text-danger"><strong id="uc_transaction_type-error"></strong></span>
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
						<textarea id="description" name="description" style="display:none;"></textarea>
						 <span class="text-danger"><strong id="description-error"></strong></span>
</div>

</div>

</div>
</div>

<div id="formlands_page" style="display:none;">
<!-- for farmlands code-->
<div class="container">
<div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Land Area</label>
	  <input type="text" class="form-control" id="land_area" name="land_area" value=""style="
    border: 1px solid #ccc;
    border-radius: 50px !important;">
    	<span class="text-danger"><strong id="land_area-error"></strong></span>

	</div>
	  <div class="form-group col-md-2" >
      <label for="inputState"></label>
      <select id="land_area_measurement" name="land_area_measurement" value="" class="form-control"style="margin: 30px 0px 0px 0px;">
        <option  value="1"selected>sqyard</option>
		<option  value="2">sqft</option>
</div>
        
		
      </select>
          	<span class="text-danger"><strong id="land_area_measurement-error"></strong></span>

    
	 </div>
	 <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">length of plot</label>
	  <input type="text" class="form-control" id="length_area" name="length_area" value="" style="
    border: 1px solid #ccc;
    border-radius: 50px !important;">
              	<span class="text-danger"><strong id="length_area-error"></strong></span>

	</div>
	  <div class="form-group col-md-3" >
      <label for="inputState"></label>
      <select id="length_area_measurement" name="length_area_measurement" value="" class="form-control"style="margin: 30px 0px 0px 0px;">
        <option  value="1"selected>yards</option>
		<option  value="2">feet</option>
        
      </select>
                	<span class="text-danger"><strong id="length_area_measurement-error"></strong></span>

    
	 </div>
	<div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">breadth of plot</label>
	  <input type="text" class="form-control" id="breadth_area" name="breadth_area" value="" style="
    border: 1px solid #ccc;
    border-radius: 50px !important;">
                <span class="text-danger"><strong id="breadth_area-error"></strong></span>

	</div>
	  <div class="form-group col-md-3" >
      <label for="inputState"></label>
      <select id="breadth_area_measurement" name="breadth_area_measurement" value="" class="form-control"style="margin: 30px 0px 0px 0px;">
        <option  value="1"selected>yards</option>
		<option  value="2">feet</option>
        
      </select>
                      	<span class="text-danger"><strong id="breadth_area_measurement-error"></strong></span>

    
	 </div>
	 
	</div>
	
	
</div>
<div class="container">
    <div class="form-row">
        <div class="form-group col-md-3" >
      <label for="inputState">Soil</label>
      <select id="soil_typeselect" name="soil_typeselect" value="" class="form-control"style="margin: 30px 0px 0px 0px;">
        <option  value=""selected>soil</option>
        <option  value="1">red</option>
		<option  value="2">black</option>
		<option  value="3">sandy</option>
      </select>
                            	<span class="text-danger"><strong id="soil_typeselect-error"></strong></span>

    
	 </div>
        </div>
    
</div>
<div class="container">
	<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Water resources</label>
	 </div>
	 </div>
	 <div class="form-row"style="
    padding-left: 20px;">
      <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="Water_resources" name="Water_resources" value="">
      
      <label class="form-check-label" for="gridCheck">
        Bore
      </label>

    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="Water_resources" name="Water_resources" value="">
      <label class="form-check-label" for="gridCheck">
       Well
      </label>
    </div>
           

  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="Water_resources" name="Water_resources" value="">
      <label class="form-check-label" for="gridCheck">
        Canal
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="Water_resources" name="Water_resources" value="">
      <label class="form-check-label" for="gridCheck">
        others
      </label>
    </div>
  </div>
  
    </div>
	</div>
	     <span class="text-danger"><strong id="Water_resources-error"></strong></span>

	
<div class="container">
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">floors allowed for construction</label>
	  <input type="text" class="form-control"  id="floor_allowed" name="floor_allowed" value=""style="
    border: 1px solid #ccc;
    border-radius: 50px !important;">
         <span class="text-danger"><strong id="floor_allowed-error"></strong></span>

	</div>
  
  
  </div>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4"style="color:black;">Boundary wall around property</label>
      <select id="boundary_typeselect" name="boundary_typeselect" value="" class="form-control"style="margin: 30px 0px 0px 0px;">
        <option  value=""selected>select</option>
        <option  value="1"selected>yes</option>
		<option  value="0"selected>no</option>
		
      </select>
               <span class="text-danger"><strong id="boundary_typeselect-error"></strong></span>

    
	 </div>
   <div class="form-group col-md-4" style="margin: 16px 0px 0px 0px;">
      <label for="inputPassword4"style="color:black;">Possession Date</label>
	  <input type="date" class="form-control" id="possession_date1" name="possession_date1" value=""style="
	  border: 1px solid #ccc;
    border-radius: 50px !important;">
    <span class="text-danger"><strong id="possession_date1-error"></strong></span>

	</div>
  </div>
  
 
  

</div>
	

</div>



<!--  end of farmlands code-->	
<!--   farmlands code-->	
<div class="container">
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Sale price</label>
	  <input type="text" class="form-control" id="sale_price1" name="sale_price1" value="" style="
    border: 1px solid #ccc;
    border-radius: 50px !important;">
        <span class="text-danger"><strong id="sale_price1-error"></strong></span>

	</div>
	  <div class="form-group col-md-3" >
      <label for="inputState"></label>
      <select id="sale_price_measurement1" name="sale_price_measurement1" value="" class="form-control"style="margin: 30px 0px 0px 0px;">
        <option  value="1"selected>Rs/Sqyard</option>
        <option value="2">Rs/Sqft</option>
		
      </select>
              <span class="text-danger"><strong id="sale_price_measurement1-error"></strong></span>

    
	 </div>
	 <div class="form-group col-md-3">
      <label for="inputState">Negotiatible</label>
      <select id="sale_negotiatible1" name="sale_negotiatible1" value="" class="form-control">
        <option  value="1"selected>Yes</option>
        <option value="0">No</option>
		
      </select>
                    <span class="text-danger"><strong id="sale_negotiatible1-error"></strong></span>

    
	 </div>
	 <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Booking Amount</label>
	  <input type="text" class="form-control" placeholder="Rs/-" id="sale_booking_amount1" name="sale_booking_amount1" value=""style="
    border: 1px solid #ccc;
    border-radius: 50px !important;">
                        <span class="text-danger"><strong id="sale_booking_amount1-error"></strong></span>

	</div>
	</div>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Monthly Rent</label>
	  <input type="text" class="form-control" id="rent_monthly1" name="rent_monthly1" value=""style="
    border: 1px solid #ccc;
    border-radius: 50px !important;">
                            <span class="text-danger"><strong id="rent_monthly1-error"></strong></span>

	</div>
	  <div class="form-group col-md-2" >
      <label for="inputState"></label>
      <select id="rent_price_measurement1" name="rent_price_measurement1" value="" class="form-control"style="margin: 30px 0px 0px 0px;">
        <option selected>Rs/Sqyard</option>
        <option>Rs/Sqft</option>
		
      </select>
                                  <span class="text-danger"><strong id="rent_price_measurement1-error"></strong></span>

    
	 </div>
	 <div class="form-group col-md-3">
      <label for="inputState">Negotiatible</label>
      <select id="rent_negotiatible1" name="rent_negotiatible1" value="" class="form-control">
        <option  value="1"selected>Yes</option>
        <option value="0">No</option>
		
      </select>
                                        <span class="text-danger"><strong id="rent_negotiatible1-error"></strong></span>

    
	 </div>
	 <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Security Deposit</label>
	  <input type="text" class="form-control" placeholder="Rs/-" id="rent_booking_amount1" name="rent_booking_amount1" value=""style="
    border: 1px solid #ccc;
    border-radius: 50px !important;">
                                            <span class="text-danger"><strong id="rent_booking_amount1-error"></strong></span>

	</div>
	</div>
	<div class="form-row">
	<div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Monthly maintenance</label>
	  <input type="text" class="form-control" placeholder="Rs/-" id="rent_monthly_maintenance1"name="rent_monthly_maintenance1" value="" style="
    border: 1px solid #ccc;
    border-radius: 50px !important;">
                                                <span class="text-danger"><strong id="rent_monthly_maintenance1-error"></strong></span>

	</div>
	<div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Available from</label>
	  <input type="date" class="form-control" id="available_from1" name="available_from1" value=""style="
    border: 1px solid #ccc;
    border-radius: 50px !important;">
                                                    <span class="text-danger"><strong id="available_from1-error"></strong></span>

	</div>
	<div class="form-group col-md-3">
      <label for="inputState">Lease  in years</label>
      <select id="lease_in_years1" name="lease_in_years1" value="" class="form-control">
        <option  value="1"selected>1 year</option>
        <option value="2">2 years</option>
		<option value="3">3 years</option>
		<option value="4">4 years</option>
		<option value="5">5 years</option>
		<option value="6">6 years</option>
		<option value="7">7 years</option>
		<option value="8">8 years</option>
		<option value="9">9 years</option>
		<option value="10">10 years</option>
		
      </select>
                                                          <span class="text-danger"><strong id="lease_in_years1-error"></strong></span>

    
	 </div>
	</div>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Additional facilities</label>
	 
	</div>
</div>
	<div class="form-row">
    <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="amenities1" name="amenities1" value="">
      <label class="form-check-label" for="gridCheck">
        Road
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="amenities1" name="amenities1" value="">
      <label class="form-check-label" for="gridCheck">
        compound wall
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="amenities1" name="amenities1" value="">
      <label class="form-check-label" for="gridCheck">
        Irrigation facilities
      </label>
    </div>
  </div>
  
  
  
  
  
  
  
    </div>
	</div>
	  <span class="text-danger"><strong id="amenities1-error"></strong></span>

	<!--  end of farmlands code-->	 


                                            

                                        </div>
 </div>
  



                                    </div> <input type="button" name="previous"  id="step2_previous" class="previous action-button-previous"
                                        value="Previous" /> <input type="button" name="make_payment"
                                        class="next action-button" id="step2_next"  value="Next Step" />
                                </fieldset>
                                <fieldset id="step3">
                                    <div class="form-card">

                                        <div class="submit-property__block">
                                            <h3 class="submit-property__headline">Property Features</h3>
											<div class="container">
	<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;" id="furnishing_status" name="furnishing_status">Furnishing Status</label>
	 </div>
	 </div>
	 <div class="form-row">
      <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="furnishing_status" id="unf" value="0" checked>
      <label class="form-check-label" for="furnishing_status">
        Unfurnished
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check"style="
    padding-left: 20px;">
      <input class="form-check-input" type="radio" name="furnishing_status" id="fully" value="1">
      <label class="form-check-label" for="furnishing_status">
        Fully Furnished
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="furnishing_status" id="sf" value="2">
      <label class="form-check-label" for="furnishing_status">
        Semi Furnished
      </label>
    </div>
  </div>
  
  </div>
   <span class="text-danger"><strong id="furnishing_status-error"></strong></span>
</div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputState"style="color:black;">Fully Furnished Fields</label>
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-3">
	<label for="inputState">Bed no's</label>
      <select id="bed_no"  name="bed_no"class="form-control">
        <option  value=""selected>Bed no's</option>
				<option value="0">0</option>

		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="bed_no-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
	<label for="inputState">Tv's</label>
      <select id="tvs" name="tvs"  class="form-control">
        <option value="" selected>Tv's</option>
        				<option value="0">0</option>

		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="tvs-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
	<label for="inputState">Greesar</label>
      <select id="greesar" name="greesar" class="form-control">
        <option  value="" selected>Greesar</option>
        				<option value="0">0</option>

		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="greesar-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
	<label for="inputState">Ac's</label>
      <select id="acs" name="acs" class="form-control">
        <option value="" selected>Ac's</option>
        				<option value="0">0</option>

		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="acs-error"></strong></span>
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
      <input class="form-check-input" type="checkbox" id="sofa" value="0" name="additional_furnishing[]">
      <label class="form-check-label" for="gridCheck">
        Sofa
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="rf" value="1"  name="additional_furnishing[]">
      <label class="form-check-label" for="gridCheck">
        Refrigirator
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gc" value="2" name="additional_furnishing[]">
      <label class="form-check-label" for="gridCheck">
        Gas Connection
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="dt" value="3" name="additional_furnishing[]">
      <label class="form-check-label" for="gridCheck">
        Dining Table
      </label>
    </div>
  </div>
  
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="mw" value="4" name="additional_furnishing[]">
      <label class="form-check-label" for="gridCheck">
        Micro Wave
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="wm" value="5" name="additional_furnishing[]">
      <label class="form-check-label" for="gridCheck">
        Washing Machine
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="wm" value="6" name="additional_furnishing[]">
      <label class="form-check-label" for="gridCheck">
        None
      </label>
    </div>
  </div>
    </div>
     <span class="text-danger"><strong id="additional_furnishing-error"></strong></span>
	</div>
	<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4" id="amenities" style="color:black;">Amities</label>
	</div>
</div>
	<div class="form-row">
    <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="cp" value="0" name="amenities[]">
      <label class="form-check-label" for="gridCheck">
        Car parking
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="lt" value="1" name="amenities[]">
      <label class="form-check-label" for="gridCheck">
        Lift
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="pb" value="2" name="amenities[]">
      <label class="form-check-label" for="gridCheck">
        Power backup
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="sq" value="3" name="amenities[]">
      <label class="form-check-label" for="gridCheck">
        Security 24*7
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="sp" value="4" name="amenities[]">
      <label class="form-check-label" for="gridCheck">
       Swimming pool
      </label>
    </div>
  </div>
  
  
  
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gym" value="5" name="amenities[]">
      <label class="form-check-label" for="gridCheck">
        Gym
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="lg" value="6" name="amenities[]">
      <label class="form-check-label" for="gridCheck">
        Landscope garden
      </label>
    </div>
  </div>
  
   <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="lg" value="7" name="amenities[]">
      <label class="form-check-label" for="gridCheck">
        None
      </label>
    </div>
  </div>
    </div>
     <span class="text-danger"><strong id="amenities-error"></strong></span>
	</div>
	<div class="container">
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Car Parking</label>
      <select id="parking_covered" name="parking_covered"class="form-control">
        <option  value="" selected>Covered</option>
        		<option value="0">0</option>

		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="parking_covered-error"></strong></span>
    </div>
	<div class="form-group col-md-4">
      <label for="inputState">Opened</label>
      <select id="parking_opened" name="parking_opened" class="form-control">
        <option  value="" selected>Opened</option>
        	<option value="0">0</option>
		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="parking_opened-error"></strong></span>
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
      <select id="floor_no" name="floor_no" class="form-control">
        <option value="" selected>Floor no</option>
        	<option value="0">0</option>
		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="floor_no-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
      <select id="total_floor" class="form-control" name="total_floor">
        <option  value="" selected>Total floor</option>
        	<option value="0">0</option>
		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="total_floor-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
      <select id="open_side"  name="open_side"class="form-control">
        <option value="" selected>Open side</option>
        	<option value="0">0</option>
		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="open_side-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
      <select id="facing"  name="facing"class="form-control">
        <option  value="" selected>Facing</option>
		<option value="1" >East</option>
        <option value="2">West</option>
		<option value="3">North</option>
		<option value="4">South</option>
      </select>
       <span class="text-danger"><strong id="facing-error"></strong></span>
    </div>
	</div>
</div>




                                            



                                        </div>
                                         </div> <input type="button" name="previous" 
                                                class="previous action-button-previous" value="Previous" id="step3_previous"/> <input
                                                type="button" name="next"  id="step3_next" class="next action-button"
                                                value="Next Step" />
                                </fieldset>
                                <fieldset id="step4">
                                    
                                    <div class="form-card">
                                        <div class="submit-property__block">
                                            <h3 class="submit-property__headline">Additional Details</h3>
											<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4"style="color:black;">Over looking</label>
	</div>
</div>
	<div class="form-row">
    <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="cp" value="0" name="over_looking[]">
      <label class="form-check-label" for="gridCheck">
        Corner Property
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="road" value="1"  name="over_looking[]">
      <label class="form-check-label" for="gridCheck">
        Road
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="park" value="2"  name="over_looking[]">
      <label class="form-check-label" for="gridCheck">
        Park
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="Overlooking_none" value="3"  name="over_looking[]">
      <label class="form-check-label" for="gridCheck">
        None
      </label>
    </div>
  </div>
    </div>
     <span class="text-danger"><strong id="over_looking-error"></strong></span>
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
      <input class="form-check-input" type="checkbox" id="fh" name="owner_type[]" value="0">
      <label class="form-check-label" for="gridCheck">
        Free hold
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="poa" name="owner_type[]" value="1">
      <label class="form-check-label" for="gridCheck">
        Power Of Attomey
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="cos" name="owner_type[]" value="2">
      <label class="form-check-label" for="gridCheck">
        Co-operative Society
      </label>
    </div>
  </div>
    <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="cos" name="owner_type[]" value="2">
      <label class="form-check-label" for="gridCheck">
        Co-operative Society
      </label>
    </div>
  </div>
  
      <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="Owner_none" name="owner_type[]" value="2">
      <label class="form-check-label" for="gridCheck">
        None
      </label>
    </div>
  </div>


    </div>
     <span class="text-danger"><strong id="owner_type-error"></strong></span>
	</div>
	<div class="container">
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputState">Flooring Type</label>
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-3">
      <select id="living_room_flooring" name="living_room_flooring" class="form-control">
        <option value="" selected>Living Room</option>
        <option value="0" selected>None</option>

		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">Vitrified Tiles</option>
		<option value="3">Anti Skid Tiles</option>
		<option value="4">Marble granet Tiles</option>
		<option value="5">Wooden Flooring</option>
		<option value="6">Laminated Wooden Flooring</option>
		<option value="7">Wood Finish Vinvi Flooring</option>

      </select>
       <span class="text-danger"><strong id="living_room_flooring-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
      <select id="kitchen_flooring" name="kitchen_flooring" class="form-control">
        <option value="" selected>Kitchen</option>
                <option value="0" selected>None</option>

		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">Vitrified Tiles</option>
		<option value="3">Anti Skid Tiles</option>
		<option value="4">Marble granet Tiles</option>
		<option value="5">Wooden Flooring</option>
		<option value="6">Laminated Wooden Flooring</option>
		<option value="7">Wood Finish Vinvi Flooring</option>


      </select>
       <span class="text-danger"><strong id="kitchen_flooring-error"></strong></span>
    </div>
	
	
		<div class="form-group col-md-3">
      <select id="bathroom_flooring" name="bathroom_flooring" class="form-control">
        <option value="" selected>Bathroom</option>
                <option value="0" selected>None</option>

		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">Vitrified Tiles</option>
		<option value="3">Anti Skid Tiles</option>
		<option value="4">Marble granet Tiles</option>
		<option value="5">Wooden Flooring</option>
		<option value="6">Laminated Wooden Flooring</option>
		<option value="7">Wood Finish Vinvi Flooring</option>


      </select>
       <span class="text-danger"><strong id="bathroom_flooring-error"></strong></span>
    </div>
	
	
		<div class="form-group col-md-3">
      <select id="bed_room_flooring" name="bed_room_flooring" class="form-control">
        <option value="" selected>Bedroom</option>
        <option value="0" selected>None</option>

		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">Vitrified Tiles</option>
		<option value="3">Anti Skid Tiles</option>
		<option value="4">Marble granet Tiles</option>
		<option value="5">Wooden Flooring</option>
		<option value="6">Laminated Wooden Flooring</option>
		<option value="7">Wood Finish Vinvi Flooring</option>


      </select>
       <span class="text-danger"><strong id="bed_room_flooring-error"></strong></span>
    </div>
	
	
	
	
	
	
	
	<div class="form-group col-md-3">
      <select id="balcony_flooring"name="balcony_flooring"class="form-control">
        <option value="" selected>Balcony</option>
                <option value="0" selected>None</option>

		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">Vitrified Tiles</option>
		<option value="3">Anti Skid Tiles</option>
		<option value="4">Marble granet Tiles</option>
		<option value="5">Wooden Flooring</option>
		<option value="6">Laminated Wooden Flooring</option>
		<option value="7">Wood Finish Vinvi Flooring</option>
      </select>
       <span class="text-danger"><strong id="balcony_flooring-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
      <select id="other_flooring" name="other_flooring"class="form-control">
        <option value="" selected>Other Room</option>
                <option value="0" selected>None</option>

		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">Vitrified Tiles</option>
		<option value="3">Anti Skid Tiles</option>
		<option value="4">Marble granet Tiles</option>
		<option value="5">Wooden Flooring</option>
		<option value="6">Laminated Wooden Flooring</option>
		<option value="7">Wood Finish Vinvi Flooring</option>

      </select>
       <span class="text-danger"><strong id="other_flooring-error"></strong></span>
    </div>
	</div>
</div>	

                                            <!-- .row --
                                        </div><!-- .submit-property__block -->

                                        <div class="container">
                                        <div class="submit-property__block">
                                            <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputState">Images</label>
	</div>
</div>

                                            <div class="submit-property__group">
                                                <div class="submit-property__upload submit-property__upload-multi2"style="width: 833px;">
                                                    <div id="image_file-area"></div>
                                                    <input id="image_file" type="file" name="image_file">
                                                    <div class="submit-property__upload-inner">
                                                        <span class="ion-ios-plus-outline submit-property__icon"></span>
                                                        <span class="submit-property__upload-desc">Drop all
                                                            images
                                                            here or click to upload</span>
                                                    </div>
                                                </div><!-- .submit-proeprty__upload -->
                                            </div><!-- .submit-property__group -->
											                                         <span class="text-danger"><strong id="image_file-error"></strong></span>

                                            <div class="submit-property__group">
                                                <div class="submit-property__upload submit-property__upload-multi2"style="
    width: 833px;
">
                                                    <div id="plan-img-area"></div>
         <input type="file" class="img" id="multi_images" name="multi_images[]" multiple>

                                                    <div class="submit-property__upload-inner">
                                                        <span class="ion-ios-plus-outline submit-property__icon"></span>
                                                        <span class="submit-property__upload-desc">Drop all
                                                            images
                                                            here or click to upload</span>
                                                    </div>
                                                </div><!-- .submit-proeprty__upload -->
                                            </div><!-- .submit-property__group -->
                                        </div><!-- .submit-property__block -->
                                         <span class="text-danger"><strong id="multi_images-error"></strong></span>
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
      <input class="form-check-input" type="radio" id="Owner" value="3" name="posted_by" checked>
      <label class="form-check-label" for="Owner">
        Owner
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="Agent" value="3" name="posted_by">
      <label class="form-check-label" for="Agent">
        Agent
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="Builder" value="3" name="posted_by">
      <label class="form-check-label" for="Builder">
        Builder
      </label>
    </div>
  </div>
    </div>
    <!--    farmlands code-->	
   
    <!--  end of farmlands code-->	
     <span class="text-danger"><strong id="posted_by-error"></strong></span>
	</div> 
									</div>
									</div>
									<input type="button" name="previous"
                                                class="previous action-button-previous" id="step4_previous" value="Previous" /> <input
                                                type="button" name="next" id="step4_next"  class="next action-button"
                                                value="Next Step" />
                                </fieldset>
								<fieldset id="step5">
                                    <div class="form-card">

                                        <div class="submit-property__block">

                                            <div class="submit-property__block">
                                
												<div class="col-md-4">
                                                        <div class="submit-property__group">
                                                            <label for="property-region"
                                                                class="submit-property__label">Country</label>
                                                            <select id="country" name="country" class="ht-field">
															     <option value="" >select country</option>

                                                                <option value="AZ">Arizona</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="MT">Montana</option>
                                                                <option value="NE">Nebraska</option>
                                                                <option value="NM">New Mexico</option>
                                                                <option value="ND">North Dakota</option>
                                                                <option value="UT">Utah</option>
                                                                <option value="WY">Wyoming</option>
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA">Georgia</option>
                                                                <option value="IN">Indiana</option>
                                                                <option value="ME">Maine</option>
                                                                <option value="MD">Maryland</option>
                                                                <option value="MA">Massachusetts</option>
                                                                <option value="MI">Michigan</option>
                                                                <option value="NH">New Hampshire</option>
                                                                <option value="NJ">New Jersey</option>
                                                                <option value="NY">New York</option>
                                                                <option value="NC">North Carolina</option>
                                                                <option value="OH">Ohio</option>
                                                                <option value="PA">Pennsylvania</option>
                                                                <option value="RI">Rhode Island</option>
                                                                <option value="SC">South Carolina</option>
                                                                <option value="VT">Vermont</option>
                                                                <option value="VA">Virginia</option>
                                                                <option value="WV">West Virginia</option>
                                                            </select>
                                                              <span class="text-danger"><strong id="country-error"></strong></span>
                                                        </div><!-- .submit-property__group -->
                                                    </div>
													<div class="row">

                                                <div class="submit-property__group col-md-4">
                                                    <label for="property-map-address"
                                                        class="submit-property__label" >State*</label>
                                                    <input type="text" class="submit-property__field"
                                                        id="state" name="state" required>
                                                          <span class="text-danger"><strong id="state-error"></strong></span>
                                                </div><!-- .submit-property__group -->

                                                <div class="submit-property__group col-md-4">
                                                    <label for="property-address"
                                                        class="submit-property__label" >City*</label>
                                                    <input type="text" class="submit-property__field"
                                                        id="city" name="city">
                                                          <span class="text-danger"><strong id="city-error"></strong></span>
                                                </div>
												<!-- .submit-property__group -->
												<div class="submit-property__group col-md-4">
                                                    <label for="property-address"
                                                        class="submit-property__label" >Landmark*</label>
                                                    <input type="text" class="submit-property__field"
                                                        id="landmark" name="landmark">
                                                          <span class="text-danger"><strong id="landmark-error"></strong></span>
                                                </div>
												</div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="submit-property__group">
                                                            <label for="property-longtitude"
                                                                class="submit-property__label" >Area*</label>
                                                            <input type="text" class="submit-property__field"
                                                                id="area" name="area">
                                                                  <span class="text-danger"><strong id="area-error"></strong></span>
                                                        </div><!-- .submit-property__group -->
                                                    </div><!-- .col -->

                                                    <div class="col-md-4">
                                                        <div class="submit-property__group">
                                                            <label for="property-latitude"
                                                                class="submit-property__label" >Address*</label>
                                                            <input type="text" class="submit-property__field"
                                                                id="address" name="address" >
                                                                  <span class="text-danger"><strong id="address-error"></strong></span>
                                                        </div><!-- .submit-property__group -->
                                                    </div><!-- .col -->
													<div class="col-md-4">
                                                        <div class="submit-property__group">
                                                            <label for="property-latitude"
                                                                class="submit-property__label" >pincode*</label>
                                                            <input type="text" class="submit-property__field"
                                                                id="pincode" name="pincode">
                                                                  <span class="text-danger"><strong id="pincode-error"></strong></span>
                                                        </div><!-- .submit-property__group -->
                                                    </div>

                                                    
                                                </div><!-- .row -->
                                            </div><!-- .submit-property__block -->



                                        </div>
                                        </div> <input type="button" name="previous" class="previous action-button-previous" id="step5_previous" value="Previous" /> <input type="submit"  name="make_payment" id="step5_next"  class="next action-button btn" value="next" />
                                </fieldset>
								
                              
  <fieldset id="step6">
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img
                                                    src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                    class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
									
                                </fieldset>

</form>

                              
				   </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {

      /*   var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function () {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({ opacity: 0 }, {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({ 'opacity': opacity });
                },
                duration: 600
            });
        });

        $(".previous").click(function () {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({ opacity: 0 }, {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({ 'opacity': opacity });
                },
                duration: 600
            });
        }); */

        $('.radio-group .radio').click(function () {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

   

    });
	
	

</script>


<script type="text/javascript">


/*     $(document).ready(function() {
 $('#confirm_submit').on('click', function(){



		            var formData = $("#msform").serialize();

            
            $.ajax({
                url: "{{ url('admin/submit-property') }}",
                type:'POST',
                data: formData,
                success: function(data) {

                    }
  
                



        }); 



    });

  }); */
</script>
<script>
/*     jQuery("document").ready(function($) {
        // Full Ajax request
        $(".btn").click(function(e) {
            // Stops the form from reloading
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
            let image_upload = $("#msform").serialize();
            let TotalImages = $('#multi_images')[0].files.length; //Total Images
            let multi_images = $('#multi_images')[0];
            for (let i = 0; i < TotalImages; i++) {
                image_upload.append('multi_images' + i, multi_images.files[i]);
            }
            image_upload.append('TotalImages', TotalImages);
            $.ajax({
                url: "{{ url('admin/submit-property') }}",
				type: 'POST',
                contentType: false,
                processData: false,
                data: image_upload,
                success: function(result) {
    
                }
            });
        });
    }); */
	
		function property_type(type){

		$("#property_type").val(type);
		
	}
	
	$(document).ready(function() {
		
		

$("#step1_next").click(function() {
			
var property_type = $("#property_type").val();  //STEP1


// Checking for blank fields.
if (property_type == '') {

$('#property_type-error').text('Property type Required');

} else {
	if(property_type == 'farmlands'){
	    $('#formlands_page').css('display','block');
	       $('#without_farmlands_page').css('display','none');
	    
	}
	else{
	    $('#formlands_page').css('display','none');
	       $('#without_farmlands_page').css('display','block');
	    
	}
		
$('#step2_active').addClass('active');
$('#property_type-error').text('');

	$('#step1').hide();
	$('#step2').show();
	

	

}
});


$("#step2_previous").click(function() {
$('#step2_active').removeClass('active');	
$('#step1').show();
$('#step2').hide();
$('#step3').hide();
$('#step4').hide();
$('#step5').hide();
$('#step6').hide();
});

$("#step2_next").click(function() {
	

	
var property_type = $("#property_type").val(); 

if((property_type == 'farmlands')){
    
    
    //farm lands

var land_area = $("#land_area").val();
var land_area_measurement = $("#land_area_measurement").val();

var length_area = $("#length_area").val();

var length_area_measurement = $("#length_area_measurement").val();

var breadth_area = $("#breadth_area").val();

var breadth_area_measurement = $("#breadth_area_measurement").val();

var soil_typeselect = $("#soil_typeselect").val();
var Water_resources = $("#Water_resources").val();

var floor_allowed = $("#floor_allowed").val();

var boundary_typeselect = $("#boundary_typeselect").val();

var possession_date1 = $("#possession_date1").val();


	var sale_price1 = $("#sale_price1").val();
var sale_price_measurement1 = $("#sale_price_measurement1").val();
var sale_negotiatible1 = $("#sale_negotiatible1").val();
var sale_price_measurement1 = $("#sale_price_measurement1").val();
var sale_booking_amount1 = $("#sale_booking_amount1").val();
var rent_monthly1 = $("#rent_monthly1").val();
var rent_price_measurement1 = $("#rent_price_measurement1").val();
var rent_negotiatible1 = $("#rent_negotiatible1").val();
var rent_booking_amount1 = $("#rent_booking_amount1").val();
var rent_monthly_maintenance1 = $("#rent_monthly_maintenance1").val();
var lease_in_years1 = $("#lease_in_years1").val();
var amenities1 = $("#amenities1").val();
	
	if (land_area == '') {

$('#land_area-error').text('land_area Required');

} else {
$('#land_area-error').text('');

}


if (land_area_measurement == '') {

$('#land_area_measurement-error').text('land_area_measurement Required');

} else {
$('#land_area_measurement-error').text('');

}


if (length_area == '') {

$('#length_area-error').text('length_area Required');

} else {
$('#length_area-error').text('');

}


if (length_area_measurement == '') {

$('#length_area_measurement-error').text('length_area_measurement Required');

} else {
$('#length_area_measurement-error').text('');

}


if (breadth_area == '') {

$('#breadth_area-error').text('breadth_area Required');

} else {
$('#breadth_area-error').text('');

}

if (breadth_area_measurement == '') {

$('#breadth_area_measurement-error').text('breadth_area_measurement Required');

} else {
$('#breadth_area_measurement-error').text('');

}

if (soil_typeselect == '') {

$('#soil_typeselect-error').text('soil_typeselect Required');

} else {
$('#soil_typeselect-error').text('');

}


	
//  var Water_resources_checkbox= $('[name="Water_resources[]"]:checked').length;
//     if(Water_resources_checkbox <=0){
//       $('#Water_resources-error').text('Water_resources Required');
//     }else{
// $('#Water_resources-error').text('');
//     }
    
   
    
    
if (floor_allowed == '') {

$('#floor_allowed-error').text('floor_allowed Required');

} else {
$('#floor_allowed-error').text('');

}


if (boundary_typeselect == '') {

$('#boundary_typeselect-error').text('boundary_typeselect Required');

} else {
$('#boundary_typeselect-error').text('');

}


if (possession_date1 == '') {

$('#possession_date1-error').text('possession_date1 Required');

} else {
$('#possession_date1-error').text('');

}

if (sale_price1 == '') {

$('#sale_price1-error').text('sale_price1 Required');

} else {
$('#sale_price1-error').text('');

}


if (sale_price_measurement1 == '') {

$('#sale_price_measurement1-error').text('sale_price_measurement1 Required');

} else {
$('#sale_price_measurement1-error').text('');

}

if (sale_negotiatible1 == '') {

$('#sale_negotiatible1-error').text('sale_negotiatible1 Required');

} else {
$('#sale_negotiatible1-error').text('');

}


if (sale_booking_amount1 == '') {

$('#sale_booking_amount1-error').text('sale_booking_amount1 Required');

} else {
$('#sale_booking_amount1-error').text('');

}




if (rent_monthly1 == '') {

$('#rent_monthly1-error').text('rent_monthly1 Required');

} else {
$('#rent_monthly1-error').text('');

}



if (rent_price_measurement1 == '') {

$('#rent_price_measurement1-error').text('rent_price_measurement1 Required');

} else {
$('#rent_price_measurement1-error').text('');

}

if (rent_negotiatible1 == '') {

$('#rent_negotiatible1-error').text('rent_negotiatible1 Required');

} else {
$('#rent_negotiatible1-error').text('');

}

if (rent_booking_amount1 == '') {

$('#rent_booking_amount1-error').text('rent_booking_amount1 Required');

} else {
$('#rent_booking_amount1-error').text('');

}


if (rent_monthly_maintenance1 == '') {

$('#rent_monthly_maintenance1-error').text('rent_monthly_maintenance1 Required');

} else {
$('#rent_monthly_maintenance1-error').text('');

}
if (lease_in_years1 == '') {

$('#lease_in_years1-error').text('lease_in_years1 Required');

} else {
$('#lease_in_years1-error').text('');

}



	if (land_area !== '' && land_area_measurement !== '' && breadth_area !== ''
	&& breadth_area_measurement !== '' && soil_typeselect !== '' && floor_allowed !== '' 
	&& boundary_typeselect !== '' && possession_date1 !== '' && sale_price1 !== ''
	&& sale_price_measurement1 !== '' && sale_negotiatible1 !== ''
	&& sale_booking_amount1 !== '' && rent_monthly1 !== ''
	&& rent_price_measurement1 !== '' && rent_negotiatible1 !== '' && rent_booking_amount1 !== '' && rent_monthly_maintenance1 !== '' && lease_in_years1 !== '') {
		
					$('#step3_active').addClass('active');
					
								
		
		
		
	$('#step1').hide();
$('#step2').hide();
$('#step3').hide();
$('#step4').show();
$('#step5').hide();
$('#step6').hide();
}


}
	
	else{
	
		
var bedrooms = $("#bedrooms").val(); //STEP2 START
var balconies = $("#balconies").val();
var bathrooms = $("#bathrooms").val();
var total_area = $("#total_area").val();
var total_area_measurement = $("#total_area_measurement").val();
var carpet_area = $("#carpet_area").val();
var carpet_area_measurement = $("#carpet_area_measurement").val();
var buildup_area = $("#buildup_area").val();
var buildup_area_measurement = $("#buildup_area_measurement").val();
var additional_rooms = $("#additional_rooms").val();


var rent_monthly_maintenance = $("#rent_monthly_maintenance").val();
var available_from = $("#available_from").val();
var include_price = $("#include_price").val();
var property_status = $('input[name=property_status]:checked', '#msform').val();
var age = $("#age").val();
var rm_transaction_type = $("#rm_transaction_type").val();
var possession_date = $("#possession_date").val();
var uc_transaction_type = $("#uc_transaction_type").val();
var description = $("#description").val();




//STEP2 END
	
	
	
	

// Checking for blank fields.
if (bedrooms == '') {

$('#bedrooms-error').text('Bedrooms Required');

} else {
$('#bedrooms-error').text('');

}

if (bathrooms == '') {

$('#bathrooms-error').text('Bathrooms Required');

} else {
$('#bathrooms-error').text('');

}

if (balconies == '') {

$('#balconies-error').text('Balconies Required');

} else {
$('#balconies-error').text('');

}

if (total_area == '') {

$('#total_area-error').text('total area Required');

} else {
$('#total_area-error').text('');

}

if (total_area_measurement == '') {

$('#total_area_measurement-error').text('total_area_measurement Required');

} else {
$('#total_area_measurement-error').text('');

}

if (carpet_area == '') {

$('#carpet_area-error').text('carpet_area Required');

} else {
$('#carpet_area-error').text('');

}

if (carpet_area_measurement == '') {

$('#carpet_area_measurement-error').text('carpet_area_measurement Required');

} else {
$('#carpet_area_measurement-error').text('');

}
if (buildup_area == '') {

$('#buildup_area-error').text('buildup_area Required');

} else {
$('#buildup_area-error').text('');

}

if (buildup_area_measurement == '') {

$('#buildup_area_measurement-error').text('buildup_area_measurement Required');

} else {
$('#buildup_area_measurement-error').text('');

}




   var additional_rooms_checkbox= $('[name="additional_rooms[]"]:checked').length;
    if(additional_rooms_checkbox <=0){
       $('#additional_rooms-error').text('additional_rooms Required');
    }else{
$('#additional_rooms-error').text('');
    }
	
	
 var include_price_checkbox= $('[name="include_price[]"]:checked').length;
    if(include_price_checkbox <=0){
       $('#include_price-error').text('include_price Required');
    }else{
$('#include_price-error').text('');
    }



if (description == '') {

$('#description-error').text('description Required');

} else {
$('#description-error').text('');

}
	var prop_for = $('input[name=property_for]:checked', '#msform').val();
	    if (prop_for == '1')
    {
	$('#rent_price-error').text('');
$('#rent_price_measurement-error').text('');
$('#rent_negotiatible-error').text('');
$('#rent_booking_amount-error').text('');
$('#rent_monthly_maintenance-error').text('');	
$('#available_from-error').text('');
		  
		  var sale_price = $("#sale_price").val();
var sale_price_measurement = $("#sale_price_measurement").val();
var sale_negotiatible = $("#sale_negotiatible").val();

var sale_booking_amount = $("#sale_booking_amount").val();


//sale
if (sale_price == '') {

$('#sale_price-error').text('sale_price Required');

} else {
$('#sale_price-error').text('');

}
if (sale_price_measurement == '') {

$('#sale_price_measurement-error').text('sale_price_measurement Required');

} else {
$('#sale_price_measurement-error').text('');

}
if (sale_negotiatible == '') {

$('#sale_negotiatible-error').text('sale_negotiatible Required');

} else {
$('#sale_negotiatible-error').text('');

}
if (sale_booking_amount == '') {

$('#sale_booking_amount-error').text('sale_booking_amount Required');

} else {
$('#sale_booking_amount-error').text('');

}
	

	  
    }
	else{


$('#sale_price-error').text('');
$('#sale_price_measurement-error').text('');
$('#sale_negotiatible-error').text('');
$('#sale_booking_amount-error').text('');





		  var rent_price = $("#rent_price").val();
var rent_price_measurement = $("#rent_price_measurement").val();
var rent_negotiatible = $("#rent_negotiatible").val();
var rent_booking_amount = $("#rent_booking_amount").val();
		  
		  //rent
		  if (rent_price == '') {

$('#rent_price-error').text('rent_price Required');

} else {
$('#rent_price-error').text('');

}

if (rent_price_measurement == '') {

$('#rent_price_measurement-error').text('rent_price_measurement Required');

} else {
$('#rent_price_measurement-error').text('');

}
if (rent_negotiatible == '') {

$('#rent_negotiatible-error').text('rent_negotiatible Required');

} else {
$('#rent_negotiatible-error').text('');

}
if (rent_booking_amount == '') {

$('#rent_booking_amount-error').text('rent_booking_amount Required');

} else {
$('#rent_booking_amount-error').text('');

}
if (rent_monthly_maintenance == '') {

$('#rent_monthly_maintenance-error').text('rent_monthly_maintenance Required');

} else {
$('#rent_monthly_maintenance-error').text('');

}
if (available_from == '') {

$('#available_from-error').text('available_from Required');

} else {
$('#available_from-error').text('');

}




	if (bedrooms !== '' && balconies !== '' && bathrooms !== '' && total_area !== '' && total_area_measurement !== ''
	&& carpet_area !== '' && carpet_area_measurement !== '' && buildup_area !== '' && buildup_area_measurement !== '' && additional_rooms_checkbox !==0
	&& rent_price !== '' && rent_price_measurement !== '' && rent_negotiatible !== ''
	&& rent_booking_amount !== '' && rent_monthly_maintenance !== '' && available_from !== ''
	&& include_price_checkbox !==0 && property_status !== '' && age !== ''
	&& rm_transaction_type !== '' && possession_date !== '' && uc_transaction_type !== ''&& description !== '') {
		
		$('#step3_active').addClass('active');
	$('#step1').hide();
$('#step2').hide();
$('#step3').show();
$('#step4').hide();
$('#step5').hide();
$('#step6').hide();
}

	  }
	

	var prop_status = $('input[name=property_status]:checked', '#msform').val();

	  
	  	  if(prop_status == '1')
	  {
		   
		   if (age == '') {

$('#age-error').text('age Required');

} else {
$('#age-error').text('');

}

if (rm_transaction_type == '') {

$('#rm_transaction_type-error').text('rm_transaction_type Required');

} else {
$('#rm_transaction_type-error').text('');

}

		

		
		
      if (bedrooms !== '' && balconies !== '' && bathrooms !== '' && total_area !== '' && total_area_measurement !== ''
	&& carpet_area !== '' && carpet_area_measurement !== '' && buildup_area !== '' && buildup_area_measurement !== '' && additional_rooms_checkbox !==0
	&& sale_price !== '' && sale_price_measurement !== '' && sale_negotiatible !== '' && sale_booking_amount !== ''	
	&& include_price_checkbox !==0 && property_status !== '' && age !== ''
	&& rm_transaction_type !== '' && description !== '') {
		
		$('#step3_active').addClass('active');
	$('#step1').hide();
$('#step2').hide();
$('#step3').show();
$('#step4').hide();
$('#step5').hide();
$('#step6').hide();
}
	 
	  }else{
		  	 

if (possession_date == '') {

$('#possession_date-error').text('possession_date Required');

} else {
$('#possession_date-error').text('');

}
if (uc_transaction_type == '') {

$('#uc_transaction_type-error').text('uc_transaction_type Required');

} else {
$('#uc_transaction_type-error').text('');

}			 


	

		
		
      if (bedrooms !== '' && balconies !== '' && bathrooms !== '' && total_area !== '' && total_area_measurement !== ''
	&& carpet_area !== '' && carpet_area_measurement !== '' && buildup_area !== '' && buildup_area_measurement !== '' && additional_rooms_checkbox !==0
	&& sale_price !== '' && sale_price_measurement !== '' && sale_negotiatible !== '' && sale_booking_amount !== ''	
	&& include_price_checkbox !==0 && property_status !== '' && possession_date !== '' && uc_transaction_type !== ''&& description !== '') {
		
		$('#step3_active').addClass('active');
	$('#step1').hide();
$('#step2').hide();
$('#step3').show();
$('#step4').hide();
$('#step5').hide();
$('#step6').hide();
}
	  }
	
	
	
	
	

	
	
	
	
	
	
	
	
	
}





});


$("#step3_previous").click(function() {
			$('#step3_active').removeClass('active');
$('#step1').hide();
$('#step2').show();
$('#step3').hide();
$('#step4').hide();
$('#step5').hide();
$('#step6').hide();
});








$("#step3_next").click(function() {
	
	
var  bed_no= $("#bed_no").val();	
var  tvs= $("#tvs").val();
var  greesar= $("#greesar").val();
var  acs= $("#acs").val();
var additional_furnishing = $("#additional_furnishing").val();
var amenities = $("#amenities").val();
var parking_covered = $("#parking_covered").val();
var parking_opened = $("#parking_opened").val();
var floor_no = $("#floor_no").val();
var total_floor = $("#total_floor").val();
var open_side = $("#open_side").val();
var facing = $("#facing").val();
//farm lands



	

// Checking for blank fields.
if (bed_no == '') {

$('#bed_no-error').text('bed_no Required');

} else {
$('#bed_no-error').text('');

}

if (tvs == '') {

$('#tvs-error').text('tvs Required');

} else {
$('#tvs-error').text('');

}

if (greesar == '') {

$('#greesar-error').text('greesar Required');

} else {
$('#greesar-error').text('');

}

if (acs == '') {

$('#acs-error').text('acs Required');

} else {
$('#acs-error').text('');

}
   var additional_furnishing_checkbox= $('[name="additional_furnishing[]"]:checked').length;
    if(additional_furnishing_checkbox <=0){
       $('#additional_furnishing-error').text('additional_furnishing Required');
    }else{
$('#additional_furnishing-error').text('');
    }
	
	   var amenities_checkbox= $('[name="amenities[]"]:checked').length;
    if(amenities_checkbox <=0){
       $('#amenities-error').text('amenities Required');
    }else{
$('#amenities-error').text('');
    }
	

if (parking_covered == '') {

$('#parking_covered-error').text('parking_covered Required');

} else {
$('#parking_covered-error').text('');

}

if (parking_opened == '') {

$('#parking_opened-error').text('parking_opened Required');

} else {
$('#parking_opened-error').text('');

}
if (floor_no == '') {

$('#floor_no-error').text('floor_no Required');

} else {
$('#floor_no-error').text('');

}

if (total_floor == '') {

$('#total_floor-error').text('total_floor Required');

} else {
$('#total_floor-error').text('');

}


 
if (open_side == '') {

$('#open_side-error').text('open_side Required');

} else {
$('#open_side-error').text('');

}
if (facing == '') {

$('#facing-error').text('facing Required');

} else {
$('#facing-error').text('');

}







	
   
if (bed_no !== '' && tvs !== '' && greesar !== '' && acs !== '' && additional_furnishing !==0
	&& amenities !==0 && parking_covered !== '' && parking_opened !== '' && floor_no !== '' && total_floor !== '' && open_side !== '' && facing !== '') {
		
		$('#step4_active').addClass('active');
	$('#step1').hide();
$('#step2').hide();
$('#step3').hide();
$('#step4').show();
$('#step5').hide();
$('#step6').hide();
}



});







$("#step4_previous").click(function() {
    var property_type = $("#property_type").val(); 
    	if((property_type == 'farmlands')){
    	    				$('#step4_active').removeClass('active');	
$('#step1').hide();
$('#step2').show();
$('#step3').hide();
$('#step4').hide();
$('#step5').hide();
$('#step6').hide();
    	    
    	}else{
    	    				$('#step4_active').removeClass('active');	
$('#step1').hide();
$('#step2').hide();
$('#step3').show();
$('#step4').hide();
$('#step5').hide();
$('#step6').hide();
    	}

});








$("#step4_next").click(function() {
    var property_type = $("#property_type").val(); 
	if((property_type == 'farmlands')){
	    alert(property_type);
var over_looking = $("#over_looking").val();
var owner_type = $("#owner_type").val();
var living_room_flooring = $("#living_room_flooring").val();
var bathroom_flooring = $("#bathroom_flooring").val();
var bed_room_flooring = $("#bed_room_flooring").val();
var balcony_flooring = $("#balcony_flooring").val();
var kitchen_flooring = $("#kitchen_flooring").val();



var other_flooring = $("#other_flooring").val();
var multi_images = $("#multi_images").val();
var image_file = $("#image_file").val();
var posted_by = $("#posted_by").val();


// Checking for blank fields.
 var over_looking_checkbox= $('[name="over_looking[]"]:checked').length;
    if(over_looking_checkbox <=0){
       $('#over_looking-error').text('over_looking Required');
    }else{
$('#over_looking-error').text('');
    }
	
	 var owner_type_checkbox= $('[name="owner_type[]"]:checked').length;
    if(owner_type_checkbox <=0){
       $('#owner_type-error').text('owner_type Required');
    }else{
$('#owner_type-error').text('');
    }
	
if (living_room_flooring == '') {

$('#living_room_flooring-error').text('living_room_flooring Required');

} else {
$('#living_room_flooring-error').text('');

}

if (bathroom_flooring == '') {

$('#bathroom_flooring-error').text('bathroom_flooring Required');

} else {
$('#bathroom_flooring-error').text('');

}

if (bed_room_flooring == '') {

$('#bed_room_flooring-error').text('bed_room_flooring Required');

} else {
$('#bed_room_flooring-error').text('');

}

if (balcony_flooring == '') {

$('#balcony_flooring-error').text('balcony_flooring Required');

} else {
$('#balcony_flooring-error').text('');

}
if (kitchen_flooring == '') {

$('#kitchen_flooring-error').text('kitchen_flooring Required');

} else {
$('#kitchen_flooring-error').text('');

}

	

if (other_flooring == '') {

$('#other_flooring-error').text('other_flooring Required');

} else {
$('#other_flooring-error').text('');

}

	
   
if (over_looking_checkbox !==0 && owner_type_checkbox !==0 && living_room_flooring !== '' && bathroom_flooring !== '' && bed_room_flooring !== '' && balcony_flooring !== '' && kitchen_flooring !== '' && other_flooring !== '') {
				$('#step4_active').addClass('active');
				$('#step5_active').addClass('active');
	$('#step1').hide();
$('#step2').hide();
$('#step3').hide();
$('#step4').hide();
$('#step5').show();
$('#step6').hide();
}

}else{
	
var over_looking = $("#over_looking").val();
var owner_type = $("#owner_type").val();
var living_room_flooring = $("#living_room_flooring").val();
var bathroom_flooring = $("#bathroom_flooring").val();
var bed_room_flooring = $("#bed_room_flooring").val();
var balcony_flooring = $("#balcony_flooring").val();
var kitchen_flooring = $("#kitchen_flooring").val();



var other_flooring = $("#other_flooring").val();
var multi_images = $("#multi_images").val();
var image_file = $("#image_file").val();
var posted_by = $("#posted_by").val();


// Checking for blank fields.
 var over_looking_checkbox= $('[name="over_looking[]"]:checked').length;
    if(over_looking_checkbox <=0){
       $('#over_looking-error').text('over_looking Required');
    }else{
$('#over_looking-error').text('');
    }
	
	 var owner_type_checkbox= $('[name="owner_type[]"]:checked').length;
    if(owner_type_checkbox <=0){
       $('#owner_type-error').text('owner_type Required');
    }else{
$('#owner_type-error').text('');
    }
	
if (living_room_flooring == '') {

$('#living_room_flooring-error').text('living_room_flooring Required');

} else {
$('#living_room_flooring-error').text('');

}

if (bathroom_flooring == '') {

$('#bathroom_flooring-error').text('bathroom_flooring Required');

} else {
$('#bathroom_flooring-error').text('');

}

if (bed_room_flooring == '') {

$('#bed_room_flooring-error').text('bed_room_flooring Required');

} else {
$('#bed_room_flooring-error').text('');

}

if (balcony_flooring == '') {

$('#balcony_flooring-error').text('balcony_flooring Required');

} else {
$('#balcony_flooring-error').text('');

}
if (kitchen_flooring == '') {

$('#kitchen_flooring-error').text('kitchen_flooring Required');

} else {
$('#kitchen_flooring-error').text('');

}

	

if (other_flooring == '') {

$('#other_flooring-error').text('other_flooring Required');

} else {
$('#other_flooring-error').text('');

}

	
   
if (over_looking_checkbox !==0 && owner_type_checkbox !==0 && living_room_flooring !== '' && bathroom_flooring !== '' && bed_room_flooring !== '' && balcony_flooring !== '' && kitchen_flooring !== '' && other_flooring !== '') {
					$('#step4_active').addClass('active');
				$('#step5_active').addClass('active');
	$('#step1').hide();
$('#step2').hide();
$('#step3').hide();
$('#step4').hide();
$('#step5').show();
$('#step6').hide();
}

}

});



$("#step5_previous").click(function() {
					$('#step5_active').removeClass('active');
$('#step1').hide();
$('#step2').hide();
$('#step3').hide();
$('#step4').show();
$('#step5').hide();
$('#step6').hide();
});








$("#step5_next").click(function() {
    var property_type = $("#property_type").val(); 
		if((property_type == 'farmlands')){
		    var city = $("#city").val();
var state = $("#state").val();
var country = $("#country").val();
var address = $("#address").val();
var landmark = $("#landmark").val();
var area = $("#area").val();
var pincode = $("#pincode").val();
	
	

// Checking for blank fields.
	
if (city == '') {

$('#city-error').text('city Required');

} else {
$('#city-error').text('');

}

if (state == '') {

$('#state-error').text('state Required');

} else {
$('#state-error').text('');

}

if (country == '') {

$('#country-error').text('country Required');

} else {
$('#country-error').text('');

}

if (address == '') {

$('#address-error').text('address Required');

} else {
$('#address-error').text('');

}
if (landmark == '') {

$('#landmark-error').text('landmark Required');

} else {
$('#landmark-error').text('');

}

	

if (area == '') {

$('#area-error').text('area Required');

} else {
$('#area-error').text('');

}


if (pincode == '') {

$('#pincode-error').text('pincode Required');

} else {
$('#pincode-error').text('');

}

   
if (city !== '' && state !== '' && country !== '' && address !== '' && landmark !== '' && area !== '' && pincode !== '') {
    $('#step5_active').addClass('active');
				$('#step6_active').addClass('active');
	$('#step1').hide();
$('#step2').hide();
$('#step3').hide();
$('#step4').hide();
$('#step5').show();
//$('#step6').show();

  
  
}
		}else{
	
var city = $("#city").val();
var state = $("#state").val();
var country = $("#country").val();
var address = $("#address").val();
var landmark = $("#landmark").val();
var area = $("#area").val();
var pincode = $("#pincode").val();
	
	

// Checking for blank fields.
	
if (city == '') {

$('#city-error').text('city Required');

} else {
$('#city-error').text('');

}

if (state == '') {

$('#state-error').text('state Required');

} else {
$('#state-error').text('');

}

if (country == '') {

$('#country-error').text('country Required');

} else {
$('#country-error').text('');

}

if (address == '') {

$('#address-error').text('address Required');

} else {
$('#address-error').text('');

}
if (landmark == '') {

$('#landmark-error').text('landmark Required');

} else {
$('#landmark-error').text('');

}

	

if (area == '') {

$('#area-error').text('area Required');

} else {
$('#area-error').text('');

}


if (pincode == '') {

$('#pincode-error').text('pincode Required');

} else {
$('#pincode-error').text('');

}

   
if (city !== '' && state !== '' && country !== '' && address !== '' && landmark !== '' && area !== '' && pincode !== '') {
    $('#step5_active').addClass('active');
				$('#step6_active').addClass('active');
	$('#step1').hide();
$('#step2').hide();
$('#step3').hide();
$('#step4').hide();
$('#step5').show();
//$('#step6').show();

  
  
}

}

});







});











$(document).ready(function (e) {
  
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
 

        $('#msform').submit(function(e) {
            e.preventDefault();
 
            var formData = new FormData(this);
 
            $.ajax({
                type:'POST',
                url: "{{ url('admin/submit-property')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
           
					$('#step5').hide();
$('#step6').show();
                },
                error: function(data){
                    console.log(data);
                }
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
  

	  if($('#sale_for').is(':checked')) { 
	  $('#rent_price_section').hide();
	  $('#sale_price_section').show();
	  }
  	  if($('#rent_for').is(':checked')) { 
	 	  $('#rent_price_section').show();
	  $('#sale_price_section').hide();
	  }
	  
	  
	  

  $('input[name="property_for"]').click(function(){
    if ($(this).is(':checked'))
    {
      
	  if($(this).val() == '1')
	  {
		   $('#rent_price_section').hide();
	  $('#sale_price_section').show();
	  }else{
		  	 	  $('#rent_price_section').show();
	  $('#sale_price_section').hide();
	  }
	  
	  
    }
  });
  
  
  	  if($('#rm').is(':checked')) { 
	   $('#rm_section').show();
	  $('#uc_section').hide();
	  }
  	  if($('#uc').is(':checked')) { 
 $('#rm_section').hide();
	  $('#uc_section').show();
	  }
	  
	  
    $('input[name="property_status"]').click(function(){
    if ($(this).is(':checked'))
    {
      
	  if($(this).val() == '1')
	  {
		   $('#rm_section').show();
	  $('#uc_section').hide();
	  }else{
		  	 	  $('#rm_section').hide();
	  $('#uc_section').show();
	  }
	  
	  
    }
  });
  
  
  
});
</script>


    </div>
	<script src="{{url('/')}}assets/css2/js/plugins.js"></script>
   <script src="{{url('/')}}assets/css2/js/jquery-1.12.4.min.js"></script>

   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
   <script src="{{url('/')}}assets/css2/js/infobox.js"></script>
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
