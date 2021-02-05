@include('header')
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
            background-image: linear-gradient(120deg, #FF4081, #81D4FA)
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
            width: 20%;
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
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
        }

        .radio.selected {
			opacity:0.5;
			border:3px solid red;
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
			
			
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
    </style>
</head>

<body>
    	

    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1"style="margin-top: 160px;">
        <div class="row justify-content-center mt-0" style="margin-top:12px">
            <div class="col-11 col-sm-9 col-md-7 col-lg-12 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3" style="box-shadow:none;">
                    <h2><strong>Post Your Property</strong></h2>
                    <p>Fill all form field to go to next step</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                       <form id="msform" action="{{ url('admin/submit-property') }}" method="POST" class="forms-sample"  enctype="multipart/form-data" >
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Property Type</strong></li>
                                    <li id="personal"><strong>Property Details</strong></li>
                                    <li id="payment"><strong>Property Features</strong></li>
                                    <li id="confirm"><strong>Additional Information</strong></li>
									<li id="payment"><strong>Location</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>

                                </ul> <!-- fieldsets -->

                                <fieldset>
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
									<input type="text" name="property_type" id="property_type" value="">		<br>
                                        </div>

                                    </div> <input type="button" id="submit" name="next" class="next action-button"
                                        value="Next Step" />
                                         <span class="text-danger"><strong id="image-error"></strong></span>
                                </fieldset>
                                <fieldset>
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
<div class="container">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Bedrooms</label>
      <select id="bedrooms" class="form-control"style="border-radius: 50px !important;" name="bedrooms" >
        <option value="" selected>Select Bedrooms</option>
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
      <select id="bedrooms" class="form-control"style="border-radius: 50px !important;" name="bathrooms">
        <option value="" selected>Select Bathrooms</option>
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
	</div>
	  <div class="form-group col-md-2" >
      <label for="inputState"></label>
      <select id="total_area_measurement" class="form-control" style="margin: 30px 0px 0px 0px;" name="total_area_measurement">
        <option selected>sqyard</option>
		<option>sqft</option>
        
		
      </select>
       <span class="text-danger"><strong id="total_area-error"></strong></span>
    
	 </div>
	 <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Carpet Area</label>
	  <input type="text" class="form-control" id="carpet_area" style="border: 1px solid #ccc;border-radius: 50px !important;" name="carpet_area">
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
	</div>
	  <div class="form-group col-md-2" >
      <label for="inputState"></label>
      <select id="buildup_area_measurement" class="form-control"style="margin: 30px 0px 0px 0px;" name="buildup_area_measurement">
        <option value="1" selected>sqyard</option>
		
        <option value="2">sqft</option>
		
      </select>
       <span class="text-danger"><strong id="buildup_area-error"></strong></span>
    
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
      <input class="form-check-input" type="checkbox" id="servent_room" name="additional_rooms" value="1">
      <label class="form-check-label" for="gridCheck">
        Servent Room
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="study_room" name="additional_rooms" value="2">
      <label class="form-check-label" for="gridCheck">
        Study Room
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="store_room" name="additional_rooms" value="3">
      <label class="form-check-label" for="gridCheck">
        Store Room
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="pooja_room" name="additional_rooms" value="4">
      <label class="form-check-label" for="gridCheck">
        Pooja Room
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
	
	<div class="container">
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">price</label>
	  <input type="text" class="form-control" id="sale_price"style="border: 1px solid #ccc;border-radius: 50px !important;" name="sale_price" value="">
	   <span class="text-danger"><strong id="sale_price-error"></strong></span>
	</div>
	  <div class="form-group col-md-3" >
      <label for="inputState"></label>
      <select id="inputState" class="form-control"style="margin: 30px 0px 0px 0px;" name="sale_price_measurement" >
        <option value="1" selected>Rs/Sqyard</option>
        <option value="2">Rs/Sqft</option>
		
      </select>
    
	 </div>
	 <div class="form-group col-md-3">
      <label for="inputState">Negotiatible</label>
      <select id="inputState" class="form-control" name="sale_negotiatible" >
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


<div class="container">
<div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputPassword4"style="color:black;">Price</label>
	  <input type="text" class="form-control" id="rent_price" style="border: 1px solid #ccc;border-radius: 50px !important;" name="rent_price" value="">
	   <span class="text-danger"><strong id="bedrooms-error"></strong></span>
	</div>
	  <div class="form-group col-md-2" >
      <label for="inputState"></label>
      <select id="rent_price_measurement" class="form-control"style="margin: 30px 0px 0px 0px;" name="rent_price_measurement" >
        <option value="1" selected>Rs/Sqyard</option>
        <option value="2">Rs/Sqft</option>
		
      </select>
    
	 </div>
	 <div class="form-group col-md-3">
      <label for="inputState">Negotiatible</label>
      <select id="rent_negotiatible" class="form-control" name="rent_negotiatible">
        <option value="1" selected>Yes</option>
        <option value="0">No</option>
		
      </select>
       <span class="text-danger"><strong id="bedrooms-error"></strong></span>
    
	 </div>
	 <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Security Deposit</label>
	  <input type="text" class="form-control" placeholder="Rs/-" id="rent_booking_amount" style="border: 1px solid #ccc;border-radius: 50px !important;" name="rent_booking_amount" value="">
 <span class="text-danger"><strong id="bedrooms-error"></strong></span>
	</div>
	</div>
	<div class="form-row">
	<div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Monthly maintenance</label>
	 
	  <input type="text" class="form-control" placeholder="Rs/-" id="rent_monthly_maintenance"style="border: 1px solid #ccc;border-radius: 50px !important;" name="rent_monthly_maintenance">
 <span class="text-danger"><strong id="bedrooms-error"></strong></span>
	</div>
	<div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Available from</label>
	  <input type="date" class="form-control" id="available_from" name="available_from"style="border: 1px solid #ccc;border-radius: 50px !important;">
	 <span class="text-danger"><strong id="bedrooms-error"></strong></span>
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
      <input class="form-check-input" type="checkbox" id="car_parking" name="include_price">
      <label class="form-check-label" for="gridCheck">
        Car parking
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="club_membership" name="include_price">
      <label class="form-check-label" for="gridCheck">
        Club membership
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="registration" name="include_price">
      <label class="form-check-label" for="gridCheck">
        Registration
      </label>
    </div>
  </div>
  
    </div>
     <span class="text-danger"><strong id="bedrooms-error"></strong></span>
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
      <input class="form-check-input" type="radio" name="property_status" id="rm">
      <label class="form-check-label" for="property_status1">
        Ready to move
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="property_status" id="uc">
      <label class="form-check-label" for="property_status2">
        Under Construction
      </label>
    </div>
  </div>
  
  
  </div>
   <span class="text-danger"><strong id="bedrooms-error"></strong></span>
</div>

<div class="container">
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Age</label>
      <select id="age" class="form-control" name="age">
        <option value="0" selected>Select Property Age</option>
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
        <option value="0"  selected>Type</option>
		<option value="1">New</option>
        <option value="2">Resale</option>
		
      </select>
     <span class="text-danger"><strong id="rm_transaction_type-error"></strong></span>
	 </div>
	</div>
</div>
<div class="container">
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
						<textarea id="description" name="description"></textarea>
						 <span class="text-danger"><strong id="description-error"></strong></span>
</div>

</div>








	
</div>


                                            

                                        </div>




                                    </div> <input type="button" name="previous"  class="previous action-button-previous"
                                        value="Previous" /> <input type="button" name="make_payment"
                                        class="next action-button" id="submit"  value="Next Step" />
                                </fieldset>
                                <fieldset>
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
      <input class="form-check-input" type="radio" name="furnishing_status" id="unf" value="0">
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
		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="bedrooms-error"></strong></span>
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
      <input class="form-check-input" type="checkbox" id="sofa" value="0" name="additional_furnishing">
      <label class="form-check-label" for="gridCheck">
        Sofa
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="rf" value="0"  name="additional_furnishing">
      <label class="form-check-label" for="gridCheck">
        Refrigirator
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gc" value="0" name="additional_furnishing">
      <label class="form-check-label" for="gridCheck">
        Gas Connection
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="dt" value="0" name="additional_furnishing">
      <label class="form-check-label" for="gridCheck">
        Dining Table
      </label>
    </div>
  </div>
  
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="mw" value="0" name="additional_furnishing">
      <label class="form-check-label" for="gridCheck">
        Micro Wave
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="wm" value="0" name="additional_furnishing">
      <label class="form-check-label" for="gridCheck">
        Washing Machine
      </label>
    </div>
  </div>
    </div>
     <span class="text-danger"><strong id="acs-error"></strong></span>
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
      <input class="form-check-input" type="checkbox" id="cp" value="0" name="amenities">
      <label class="form-check-label" for="gridCheck">
        Car parking
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="lt" value="0" name="amenities">
      <label class="form-check-label" for="gridCheck">
        Lift
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="pb" value="0" name="amenities">
      <label class="form-check-label" for="gridCheck">
        Power backup
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="sq" value="0" name="amenities">
      <label class="form-check-label" for="gridCheck">
        Security 24*7
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="sp" value="0" name="amenities">
      <label class="form-check-label" for="gridCheck">
       Swimming pool
      </label>
    </div>
  </div>
  
  
  
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gym" value="0" name="amenities">
      <label class="form-check-label" for="gridCheck">
        Gym
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="lg" value="0" name="amenities">
      <label class="form-check-label" for="gridCheck">
        Landscope garden
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
		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="bedrooms-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
      <select id="total_floor" class="form-control" name="total_floor">
        <option  value="" selected>Total floor</option>
		<option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
      </select>
       <span class="text-danger"><strong id="floor_no-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
      <select id="open_side"  name="open_side"class="form-control">
        <option value="" selected>Open side</option>
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
                                                class="previous action-button-previous" value="Previous" /> <input
                                                type="button" name="next"  id="submit" class="next action-button"
                                                value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    
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
      <input class="form-check-input" type="checkbox" id="cp" value="0" name="over_looking">
      <label class="form-check-label" for="gridCheck">
        Corner Property
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="road" value="0"  name="over_looking">
      <label class="form-check-label" for="gridCheck">
        Road
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="park" value="0"  name="over_looking">
      <label class="form-check-label" for="gridCheck">
        Park
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
      <input class="form-check-input" type="checkbox" id="fh" name="owner_type" value="0">
      <label class="form-check-label" for="gridCheck">
        Free hold
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="poa" name="owner_type" value="0">
      <label class="form-check-label" for="gridCheck">
        Power Of Attomey
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="cos" name="owner_type" value="0">
      <label class="form-check-label" for="gridCheck">
        Co-operative Society
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
		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">>Vitrified Tiles</option>
		<option value="3">>Anti Skid Tiles</option>
		<option value="4">>Marble granet Tiles</option>
		<option value="5">>Wooden Flooring</option>
		<option value="6">>Laminated Wooden Flooring</option>
		<option value="7">>Wood Finish Vinvi Flooring</option>

      </select>
       <span class="text-danger"><strong id="living_room_flooring-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
      <select id="kitchen_flooring" name="kitchen_flooring" class="form-control">
        <option value="" selected>Kitchen</option>
		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">>Vitrified Tiles</option>
		<option value="3">>Anti Skid Tiles</option>
		<option value="4">>Marble granet Tiles</option>
		<option value="5">>Wooden Flooring</option>
		<option value="6">>Laminated Wooden Flooring</option>
		<option value="7">>Wood Finish Vinvi Flooring</option>


      </select>
       <span class="text-danger"><strong id="kitchen_flooring-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
      <select id="bathroom_flooring	" name="bathroom_flooring" class="form-control">
        <option  value=""selected>Bath Room</option>
		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">>Vitrified Tiles</option>
		<option value="3">>Anti Skid Tiles</option>
		<option value="4">>Marble granet Tiles</option>
		<option value="5">>Wooden Flooring</option>
		<option value="6">>Laminated Wooden Flooring</option>
		<option value="7">>Wood Finish Vinvi Flooring</option>


      </select>
       <span class="text-danger"><strong id="bathroom_flooring-error"></strong></span>
    </div>
	</div>
	<div class="form-row">
	<div class="form-group col-md-3">
      <select id="bed_room_flooring	" name="bed_room_flooring" class="form-control">
        <option  value=""selected>Bed Room</option>
		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">>Vitrified Tiles</option>
		<option value="3">>Anti Skid Tiles</option>
		<option value="4">>Marble granet Tiles</option>
		<option value="5">>Wooden Flooring</option>
		<option value="6">>Laminated Wooden Flooring</option>
		<option value="7">>Wood Finish Vinvi Flooring</option>
      </select>
       <span class="text-danger"><strong id="bed_room_flooring-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
      <select id="balcony_flooring"name="balcony_flooring"class="form-control">
        <option value="" selected>Balcony</option>
		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">>Vitrified Tiles</option>
		<option value="3">>Anti Skid Tiles</option>
		<option value="4">>Marble granet Tiles</option>
		<option value="5">>Wooden Flooring</option>
		<option value="6">>Laminated Wooden Flooring</option>
		<option value="7">>Wood Finish Vinvi Flooring</option>
      </select>
       <span class="text-danger"><strong id="balcony_flooring-error"></strong></span>
    </div>
	<div class="form-group col-md-3">
      <select id="other_flooring" name="other_flooring"class="form-control">
        <option value="" selected>Other Room</option>
		<option value="1">Ceramic Porciline Tiles</option>
        <option value="2">>Vitrified Tiles</option>
		<option value="3">>Anti Skid Tiles</option>
		<option value="4">>Marble granet Tiles</option>
		<option value="5">>Wooden Flooring</option>
		<option value="6">>Laminated Wooden Flooring</option>
		<option value="7">>Wood Finish Vinvi Flooring</option>

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
      <label for="inputState">Flooring Type</label>
	</div>
</div>

                                            <div class="submit-property__group">
                                                <div class="submit-property__upload submit-property__upload-multi2"style="
    width: 833px;
">
                                                    <div id="plan-img-area"></div>
                                                    <input id="image_file" type="file" name="image_file">
                                                    <div class="submit-property__upload-inner">
                                                        <span class="ion-ios-plus-outline submit-property__icon"></span>
                                                        <span class="submit-property__upload-desc">Drop all
                                                            images
                                                            here or click to upload</span>
															<input type="text" class="img" id="multi_images" name="multi_images	">
                                                    </div>
                                                </div><!-- .submit-proeprty__upload -->
                                            </div><!-- .submit-property__group -->
											
                                            <div class="submit-property__group">
                                                <div class="submit-property__upload submit-property__upload-multi2"style="
    width: 833px;
">
                                                    <div id="plan-img-area"></div>
                                                    <input id="plan-img" type="file" multiple>
                                                    <div class="submit-property__upload-inner">
                                                        <span class="ion-ios-plus-outline submit-property__icon"></span>
                                                        <span class="submit-property__upload-desc">Drop all
                                                            images
                                                            here or click to upload</span>
															<input type="text" class="img" id="multi_images" name="multi_images[]">
                                                    </div>
                                                </div><!-- .submit-proeprty__upload -->
                                            </div><!-- .submit-property__group -->
                                        </div><!-- .submit-property__block -->
                                         <span class="text-danger"><strong id="bedrooms-error"></strong></span>
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
      <input class="form-check-input" type="radio" id="gridCheck" value="3">
      <label class="form-check-label" for="gridCheck">
        Owner
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="gridCheck" value="3">
      <label class="form-check-label" for="gridCheck">
        Agent
      </label>
    </div>
  </div>
  <div class="form-group col-md-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="gridCheck" value="3">
      <label class="form-check-label" for="gridCheck">
        Builder
      </label>
    </div>
  </div>
    </div>
     <span class="text-danger"><strong id="bedrooms-error"></strong></span>
	</div> 
									</div>
									</div>
									<input type="button" name="previous"
                                                class="previous action-button-previous" value="Previous" /> <input
                                                type="button" name="next" id="submit"  class="next action-button"
                                                value="Next Step" />
                                </fieldset>
								<fieldset>
                                    <div class="form-card">

                                        <div class="submit-property__block">

                                            <div class="submit-property__block">
                                
												<div class="col-md-4">
                                                        <div class="submit-property__group">
                                                            <label for="property-region"
                                                                class="submit-property__label">Country</label>
                                                            <select id="country" name="country" class="ht-field">
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
                                        </div> <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" /> <input type="submit"   id="confirm_submit" name="make_payment"
                                        class="next action-button" value="next" />
                                </fieldset>
								
                              
  <fieldset>
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
									 <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" /> <input type="submit"   id="confirm_submit" name="make_payment"
                                        class="next action-button" value="next" />
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

        var current_fs, next_fs, previous_fs; //fieldsets
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
        });

        $('.radio-group .radio').click(function () {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

   

    });
	
	
	function property_type(type){

		$("#property_type").val(type);
	}
</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">


    $(document).ready(function() {
 $('#confirm_submit').on('click', function(){
		 alert();	    



		            var formData = $("#msform").serialize();

            
            $.ajax({
                url: "{{ url('admin/submit-property') }}",
                type:'POST',
                data: formData,
                success: function(data) {

                    
                    
                    
                    
                    
                    
                    
                    
                    }
  
                



        }); 



    });

  });
</script>
<script src="{{url('/')}}/css2/js/plugins.js"></script>
<script src="{{url('/')}}/css2/js/jquery-1.12.4.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<script src="{{url('/')}}/css2/js/infobox.js"></script>
<script src="{{url('/')}}/css2/js/custom.js"></script>


@include('footer')