

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
	
	
	
	
	<link rel="stylesheet" href="css2/style.css">
    <link rel="stylesheet" href="css2/plugins.css">
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
input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.submit-property__upload {
    position: relative;
    border: 2px dashed #dddddd;
    text-align: center;
    padding-top: 15px;
    padding-bottom: 15px;
    color: #888888;
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
<form action="{{url('interior-service_submit')}}" id="edituser" method="post">
	{{ csrf_field() }}
	<!--<div class="row" style="text-align:center;">-->
 <!--           <div style="display:inline-block; float:none; text-align:left; margin-right:auto;">-->
 <!--               <div class="input-group">-->
 <!--                   <div class="btn-group" data-toggle="buttons">-->
 <!--                       <label class="btn btn-primary" id='sale'>-->
 <!--                           <input type="radio"  name="options" value="sales" checked> Sales-->
 <!--                       </label>-->

 <!--                       <label class="btn btn-primary" id='repair' >-->
 <!--                           <input type="radio" name="options" value="repair"> Repairs&installation-->
 <!--                       </label>-->
 <!--                   </div>-->
 <!--               </div>-->
 <!--           </div>-->
 <!--       </div><br>-->


<div class="container">
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Name</label>
	  <input type="text" id="name" name="name" class="form-control" id="inputCity">
	  <strong id="name-error"></strong>
	</div>
	  
	 <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Enterprise name</label>
	  <input type="text" id="enterprise_name" name="enterprise_name" class="form-control" id="inputCity">
	  <strong id="enterprise_name-error"></strong>
	</div>
	  
	 <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Phone </label>
	  <input type="text" id="phone" name="phone" class="form-control" placeholder="+91 9876543210" id="inputCity">
	  <strong id="phone-error"></strong>
	</div>
	<div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Email </label>
	  <input type="text" id="mail" name="mail" class="form-control" placeholder="example@gmail.com" id="inputCity">
	  <strong id="mail-error"></strong>
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
<div class="container">
<!--<div class="form-row">-->
    
      
<!--	  <div class="form-group col-md-6">-->
<!--	  <label for="inputCity">Licence document pdf</label>-->
<!--      <div class="input-group">-->
<!--          <span class="input-group-btn"style="-->
<!--    border: 1px solid #c4c8cc;">-->
<!--            <div class="btn btn-default browse-button">-->
<!--                <span class="browse-button-text">-->
<!--                <i class="fa fa-folder-open"></i> Browse</span>-->
<!--                <input type="file" id="licence_document" name="licence_document" accept=".pdf" name="attachment"/>-->
				
<!--            </div>-->
<!--			<strong id="licence_document-error"></strong>-->
<!--            <button type="button" class="btn btn-default clear-button" style="display:none;">-->
<!--              <span class="fa fa-times"></span> Clear-->
<!--            </button>-->
<!--          </span>-->
          <!--<input type="text" class="form-control filename" disabled="disabled" placeholder="Please click on browse button and select a pdf file">
<!--          <span class="input-group-btn">-->
<!--            <button class="btn btn-primary upload-button" type="button">-->
<!--                <i class="fa fa-upload"></i>-->
<!--                Upload-->
<!--              </button>-->
<!--          </span>-->
<!--        </div>-->
<!--    </div>-->
<!--	</div>-->
<!--	<div class="form-row" id="sale_1" style="display:none">-->
<!--		  <div class="form-group col-md-6">-->
<!--	  <label for="inputCity">material rate chart</label>-->
<!--      <div class="input-group">-->
<!--          <span class="input-group-btn"style="-->
<!--    border: 1px solid #c4c8cc;-->

<!--            <div class="btn btn-default browse-button">-->
<!--                <span class="browse-button-text">-->
<!--                <i class="fa fa-folder-open"></i> Browse</span>-->
<!--                <input type="file" id="material_rate_chart" name="material_rate_chart" accept=".pdf" name="attachment"/>-->
				
<!--            </div>-->
<!--			<strong id="material_rate_chart-error"></strong>-->
<!--            <button type="button" class="btn btn-default clear-button" style="display:none;">-->
<!--              <span class="fa fa-times"></span> Clear-->
<!--            </button>-->
<!--          </span>-->
          <!--<input type="text" class="form-control filename" disabled="disabled" placeholder="Please click on browse button and select a pdf file">
<!--          <span class="input-group-btn">-->
<!--            <button class="btn btn-primary upload-button" type="button">-->
<!--                <i class="fa fa-upload"></i>-->
<!--                Upload-->
<!--              </button>-->
<!--          </span>-->
<!--        </div>-->
<!--    </div>-->
<!--	<div class="form-group col-md-6">-->
<!--      <label for="inputPassword4"style="color:black;">Branch</label>-->
<!--	  <input type="text" id="branch" name="branch" class="form-control">-->
<!--	  <strong id="branch-error"></strong>-->
<!--	</div>-->
<!--</div>-->
<div class="form-row" style="display:none">
		 <!-- <div class="form-group col-md-6">-->
	  <!--<label for="inputCity">exp</label>-->
   <!--   <input type="text" id="exp" name="exp" class="form-control">-->
	  <!--<strong id="exp-error"></strong>-->
   <!-- </div>-->
	<div class="form-group col-md-6">
      <label for="inputPassword4"style="color:black;">service areas</label>
	  <input type="text" id="service" name="service" class="form-control">
	  <strong id="service-error"></strong>
	  
	</div>
</div>
</div>
<div class="container">
                                        <div class="submit-property__block">
                                            <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputState">Shop Images</label>
	</div>
</div>
                                            <div class="submit-property__group">
                                                <div class="submit-property__upload submit-property__upload-multi2"style="width: 833px;">
                                                    <div id="plan-img-area"></div>
                                                    <input id="plan-img" id="logo" name="logo" type="file" multiple>
													<strong id="logo-error"></strong>
                                                    <div class="submit-property__upload-inner">
                                                        <span class="ion-ios-plus-outline submit-property__icon"></span>
                                                        <span class="submit-property__upload-desc">Drop all
                                                            images
                                                            here or click to upload</span>
                                                    </div>
                                                </div><!-- .submit-proeprty__upload -->
                                            </div><!-- .submit-property__group -->
                                        </div><!-- .submit-property__block -->
                                    </div>
<div class="container">
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Address</label>
	  <input type="text" id="address" name="address" class="form-control" id="inputCity">
	  <strong id="address-error"></strong>
	</div>
	  
	 
	  
	 <div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Year of Establish </label>
	  <select id="inputState" id="year" name="year" class="form-control">
        <option selected>Year of Establish</option>
		<option value="2015">2015</option>
        <option value="2016">2016</option>
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
      </select>
	</div>
	<div class="form-group col-md-3">
      <label for="inputPassword4"style="color:black;">Website link </label>
	  <input type="text" id="websitelink" name="websitelink" class="form-control" placeholder="cyberabad realty.com" id="inputCity">
	  <strong id="websitelink-error"></strong>
	</div>
	  
	</div>
</div>




  
  
  <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
 </div>
 
 
</form>
</div>
</div>
</section>
<script>
        const realFileBtn = document.getElementById("licence_document");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});
    </script>
	<script>
        const realFileBtn = document.getElementById("material_rate_chart");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});
    </script>
	<script>
        const realFileBtn = document.getElementById("logo");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});
    </script>
<script>
$(document).ready(function () 
 { 
  $("#sale_1").show();
  $("#sale").click(function()
  {
    $("#sale_1").show();
   $("#repair_1").hide();
   
   });
   $("#repair").click(function()
  {

    $("#sale_1").hide();
   $("#repair_1").show();
  });
  
  
  
  
  
  
  $("#see-me").click(function()
  {
    $("#show-me-two").show('slow');
   $("#show-me").hide();
   
   });
   $("#see-me").click(function()
  {
    if($('see-me').prop('checked')===false)
   {
    $('#see-me').hide();
   }
  });
  
  
  
  
  
  
  
  
  
 });
 </script>

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

        $(".submit").click(function () {
            return false;
        })

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
<script>
$(".browse-button input:file").change(function (){
  $("input[name='attachment']").each(function() {
    var fileName = $(this).val().split('/').pop().split('\\').pop();
    $(".filename").val(fileName);
    $(".browse-button-text").html('<i class="fa fa-refresh"></i> Change');
    $(".clear-button").show();
  });
});

//actions happening when the button is clicked
$('.clear-button').click(function(){
    $('.filename').val("");
    $('.clear-button').hide();
    $('.browse-button input:file').val("");
    $(".browse-button-text").html('<i class="fa fa-folder-open"></i> Browse'); 
}); 
</script>

<script type="text/javascript">


    $(document).ready(function() {
        
		    
 $('#edituser').on('submit', function(e){
 
            e.preventDefault();


        $( '#name-error' ).html( "" );
        $( '#enterprise_name-error' ).html( "" );
		$( '#phone-error' ).html( "" );
		$( '#mail-error' ).html( "" );
		$( '#licence_document-error' ).html( "" );
		
		$( '#logo-error' ).html( "" );
		$( '#address-error' ).html( "" );
		
		$( '#year-error' ).html( "" );
		
		$( '#websitelink-error' ).html( "" );
	  $("input[name=options]:radio").click(function () {
        if ($('input[name=options]:checked').val() == "sales") {
	$( '#material_rate_chart-error' ).html( "" );
		
		$( '#branch-error' ).html( "" );

        } else if ($('input[name=options]:checked').val() == "repair") {
	$( '#exp-error' ).html( "" );
		
		$( '#service-error' ).html( "" );

        }
    });
	
            var _token = $("input[name='_token']").val();
        

            $.ajax({
                
                url: "{{ url('interior-service-submit') }}",
                type:'POST',
				 method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
                success: function(data) {

                       if(data.errors) {
           
                    if(data.errors.name){
                        $( '#name-error' ).html( data.errors.name[0] );
                    }
                    if(data.errors.enterprise_name){
                        $( '#enterprise_name-error' ).html( data.errors.enterprise_name[0] );
                    }
					if(data.errors.phone){
                        $( '#phone-error' ).html( data.errors.phone[0] );
                    }
					if(data.errors.mail){
                        $( '#mail-error' ).html( data.errors.mail[0] );
                    }
					if(data.errors.licence_document){
                        $( '#licence_document-error' ).html( data.errors.licence_document[0] );
                    }
				
					if(data.errors.logo){
                        $( '#logo-error' ).html( data.errors.logo[0] );
                    }
					if(data.errors.address){
                        $( '#address-error' ).html( data.errors.address[0] );
                    }
				
					if(data.errors.year){
                        $( '#year-error' ).html( data.errors.year[0] );
                    }
					if(data.errors.websitelink){
                        $( '#websitelink-error' ).html( data.errors.websitelink[0] );
                    }
					

        if ($('input[name=options]:checked').val() == "sales") {
	if(data.errors.material_rate_chart){
                        $( '#material_rate_chart-error' ).html( data.errors.material_rate_chart[0] );
                    }		
	if(data.errors.branch){
                        $( '#branch-error' ).html( data.errors.branch[0] );
                    }

        } else if ($('input[name=options]:checked').val() == "repair") {
		if(data.errors.exp){
                        $( '#exp-error' ).html( data.errors.exp[0] );
                    }
						if(data.errors.service){
                        $( '#service-error' ).html( data.errors.service[0] );
                    }

        }

					

                    }
                                    if(data.success) {
                    $('#super').text('sales Added successfully');
                
                    $("#edituser")[0].reset();

                }
                
            }


        }); 



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
<script src="css2/js/plugins.js"></script>
<script src="css2/js/jquery-1.12.4.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<script src="css2/js/infobox.js"></script>
<script src="css2/js/custom.js"></script>

    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
	
	
	
	
	<script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    
    
</html>