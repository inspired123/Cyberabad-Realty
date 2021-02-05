@include('header')


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
             background-color:  #006FB7;
              border: 1px solid green;
            padding: 9px 15px 10px 15px;
            border-radius: 5px;
         }
		 
		 /**** BASE ****/
body {
    color: #30caa0; 

}
a {
    color: #03a1d1;
    text-decoration: none!important;
}

.

/**** LAYOUT ****/
.list-inline>li {
    padding: 0 10px 0 0;
}
.container-pad {
    padding: 30px 15px;
}


/**** MODULE ****/
.bgc-fff {
    background-color: #fff!important;
}
.box-shad {
    -webkit-box-shadow: 1px 1px 0 rgba(0,0,0,.2);
    box-shadow: 1px 1px 0 rgba(0,0,0,.2);
}
.brdr {
    border: 1px solid #ededed;
}

.padd-0 {
    padding: 0;
}

.upperc {
    text-transform: uppercase;
}

/* Font changes */
.fnt-smaller {
    font-size: .9em;
}
.fnt-lighter {
    color: #bbb;
}

/* Padding - Margins */
.pad-10 {
    padding: 10px!important;
}
.mrg-0 {
    margin: 0!important;
}
.btm-mrg-10 {
    margin-bottom: 10px!important;
}
.btm-mrg-20 {
    margin-bottom: 20px!important;
}

/* Color  */
.clr-535353 {
    color: #535353;
}

.coralbg {
    background-color: #FA396F;
} 

.coral {
    color: #FA396f;
}

.turqbg {
    background-color: #46D8D2;
}

.turq {
    color: #46D8D2;
}

.wb-red-bg {
    background-color: #30caa0;
}
.wb-red {
    color: #822433;
}

.white {
    color: #fff!important;
}

/* Custom Layout */
.view {
    display: inline-block;
    width: 33.0%;
    overflow:hidden;
}

.view p {
    margin-top: 20px;
    margin-bottom: 0;
}
 
.caption {
    position:absolute;
    top:0;
    left:0;
    background: rgba(98, 98, 98, 0.44);
    width:33%;
    height:100%;
    padding:2%;
    display: none;
    text-align:center;
    color:#fff !important;
    z-index:2;
}

.caption h3 {
    padding-top: 20px;
}

.caption a {
    padding: 0 20px;
    color: #fff;
}

.detail {
    display: inline-block;
    width: 66%;
    overflow:hidden;
}

.propertyType {
    color: #ffffff;
    
    height: 20px;
    padding: 0 10px;
    position: absolute;
    text-align: center;
    top: 0px;
    width: 100px;
}

.propertyType.house { background-color: red; }
.propertyType.land { background-color: orange; }
.propertyType.unit { background-color: green; }
.propertyType.commercial { background-color: blue; }

.info {
    display: block;
    padding: 10px;
    background: #eee;
    height: 104px;
    font-weight: 300;
}

.info p, .stats p {
    margin-bottom: 0;
}

.stats {
    display: block;
    padding: 10px;
    color: white;
}

.wb {
    display: inline-block;
    color: #675c53;
    font-family: "wiseberry-icons" !important;
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    position: relative;
    top: -35px;
}

.wb.pull-right {
    margin-left: .3em;
    margin-right: .3em;
}

.share-links {
    border: 1px solid #eee;
    padding: 15px;
    margin-top: 15px;
}

.square, .btn {
    border-radius: 0px!important;
}


/**** MEDIA QUERIES ****/
@media only screen and (max-width: 991px) {
    #property-listings .property-listing {
        padding: 5px!important;
    }
    #property-listings .property-listing a {
        margin: 0;
    }
    #property-listings .property-listing .media-body {
        padding: 10px;
    }
}

@media only screen and (min-width: 992px) {
    #property-listings .property-listing img {
        max-width: 180px;
    }
}
.sticky-container {
/*background-color: #333;*/
padding: 0px;
margin: 0px;
margin: 358px 0px 0px 0px;
position: fixed;
right: -119px;
top: 130px;
    width: 163px;
z-index: 4;
}
.sticky li {
list-style-type: none;
background-color: #333;
color: #efefef;
height: 43px;
padding: 0px;
background-color: #30caa0;
margin: 0px 0px 1px 0px;
-webkit-transition: all 0.25s ease-in-out;
-moz-transition: all 0.25s ease-in-out;
-o-transition: all 0.25s ease-in-out;
transition: all 0.25s ease-in-out;
cursor: pointer;
filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
filter: gray;
-webkit-filter: grayscale(100%);
}
.sticky li:hover {
margin-left: -115px;
/*-webkit-transform: translateX(-115px);
		-moz-transform: translateX(-115px);
		-o-transform: translateX(-115px);
		-ms-transform: translateX(-115px);
		transform:translateX(-115px);*/
		/*background-color: #8e44ad;*/
filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");
-webkit-filter: grayscale(0%);
}
.sticky li img {
float: left;
margin: 5px 5px;
margin-right: 10px;

}
.sticky li p {
padding: 0px;
margin: 0px;
text-transform: uppercase;
line-height: 43px;
background-color: #30caa0;
}
		 
		 
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

		 
		 
			::-webkit-scrollbar{width:8px;height:10px!important}::-webkit-scrollbar-thumb{border-radius:2px;background:#c1c1c1}::-webkit-scrollbar-track{background-color:#fff;border-radius:2px}body{font-family:poppins!important;background: #00000005 !important;overflow-x:hidden}.reg_data{width:98%;margin-left:1%;margin-top:3%;padding:15px 0 30px 0;border-radius:3px;background-color:#fff;box-shadow:0 1px 7px rgba(0,0,0,.10) , 0 0 0 rgba(0,0,0,.23)!important}.floating-form{width:320px}.floating-label{position:relative;margin-bottom:20px}.floating-input,.floating-select{font-size:14px;padding:4px 8px;display:block;width:100%;height:40px;background-color:transparent;border:none;border:.5px solid #ccc;letter-spacing:.4px;border-radius:3px;color:#585858}.floating-input:focus,.floating-select:focus{outline:none;border:1px solid #0168be}label{letter-spacing:.4px;color:#999;font-size:14px;font-weight:normal;position:absolute;pointer-events:none;left:5px;top:9px;transition:.2s ease all;-moz-transition:.2s ease all;-webkit-transition:.2s ease all}.floating-input:focus ~ label, .floating-input:not(:placeholder-shown) ~ label {top:-10px;font-size:13px;color:#b3b3b3;background:#fff;padding:0% 1% 0% 1%}.floating-select:focus ~ label , .floating-select:not([value=""]):valid ~ label {top:-10px;font-size:13px;color:#b3b3b3;background:#fff;padding:0% 1% 0% 1%}.floating-input:focus ~ .bar:before, .floating-input:focus ~ .bar:after, .floating-select:focus ~ .bar:before, .floating-select:focus ~ .bar:after {width:50%}.floating-textarea{min-height:65px;max-height:260px;overflow:hidden;overflow-x:hidden}.highlight{position:absolute;height:50%;width:100%;top:15%;left:0;pointer-events:none;opacity:.5}.floating-input:focus ~ .highlight , .floating-select:focus ~ .highlight {-webkit-animation:inputHighlighter .3s ease;-moz-animation:inputHighlighter .3s ease;animation:inputHighlighter .3s ease}@-webkit-keyframes inputHighlighter {
			from { background:#5264AE; }
			to 	{ width:0; background:transparent; }
			}@-moz-keyframes inputHighlighter {
			from { background:#5264AE; }
			to 	{ width:0; background:transparent; }
			}@keyframes inputHighlighter {
			from { background:#5264AE; }
			to 	{ width:0; background:transparent; }
			}.floating-credit{position:fixed;bottom:10px;right:10px;color:#aaa;font-size:13px;font-family:arial,sans-serif}.floating-credit a{text-decoration:none;color:#000;font-weight:bold}.floating-credit a:hover{border-bottom:1px dotted #f8f8f8}.floating-heading{position:fixed;color:#aaa;font-size:20px;font-family:arial,sans-serif}.head_txt{text-align:center;font-size:25px;letter-spacing:.4px;text-transform:uppercase;font-weight:500;color:#000;margin-bottom:2%;margin-top:1%}
		
		 
		 
		 
		 
		 
    </style>


	


<body>
	<!-- Page Preloder -->
	
	<div class="sticky-container" style="color:#30caa0;">
<ul class="sticky">
<li> <img   src="img/facebook1.jpg" href="indexproperty.html"width="32" height="32" title="" alt="" />
<a>Facebook</a>
</li>
<li> <img width="32" height="32" title="" alt="" src="img/twitter.png" />
<a>Twitter</a>
</li>
<li> <img width="32" height="32" title="" alt="" src="img/gmail.png" />
<a>gmail</a>
</li>
<li> <img width="32" height="32" title="" alt="" src="img/whatsup.jpg" />
<a>whatsapp</a>
</li>


</ul>
</div>
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info  ">
							<i class="fa fa-phone"></i>
							9786543120
						</div>
						<!--div class="top-info  ">
							<i class="fa fa-envelope"></i>
							info@gmail.com
						</div-->
						
						<div class="top-info ">
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
						
						<div class="user-panel">
<!--						    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--  Launch demo modal-->
<!--</button>-->
							
							<a href="#"  id="createproperty" ><i class="fa fa-plus"></i> Create Property</a>
							<a href="#"  id="createproperty" ><i class="fa fa-plus"></i> Send Enquiry</a>
							
							<a href="register.html" target="_blank"><i class="fa fa-user-circle"></i> Register</a>
							
							<a href="login.html" target="_blank"><i class="fa fa-sign-in"></i> Login</a>

                               

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><img src="img/logo.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="categories.html">FEATURED LISTING</a></li>
							<li><a href="categories.html">Rental property</a></li>
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
	<section class="hero-section set-bg"  data-setbg="img/photo-1600992450680-7ea101248d56.jpg">
		<div class="container hero-text text-white">
			
		</div>
		<div class="container" style="margin-top: -151px;">
		<div class="row" >
		</div>
     <div class="container ">
	 <h1 style="color:white; text-align:center;">Hyderabad's No.1 Property Site</h1>
                    <div class="col-sm-8 offset-2 col-12" style="padding-top: 50px;">
                        <form action='search_result.php' method='post' id='search_form1'>
                            <div class="input-group">
                                <select name="property_type" style="font-family: Sans-Serif !important; font-size: 13px; font-weight: 500; text-align: center; width: 20%;
    height: auto;
    border: none;
    padding: 9px;
    color: #787878;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    background-color: #006FB7;
    color: white;">
                                    <option disabled="disabled" value="" selected="selected">Property Type</option>
                                    <option value="plot">Plot</option>
                                    <option value="villa">Villa</option>
                                    <option value="independent house">Independent House</option>
                                    <option value="farm house">Farm House</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="office">Office</option>
                                    <option value="godown">Godown</option>
                                    <option value="sheds">Sheds</option>
                                    <option value="industrial properties">Industrial Properties</option>
                                    <option value="farm land">Farm Land (AGRICULTURAL)</option>
                                    <option value="development land">Development Land</option>
                                </select>
                                <input type="text" placeholder="Search address, area, zipcode, city etc.." name="pac-input" style="font-family: Sans-Serif !important;padding: 5px 256px 5px 7px; font-size: 14px; font-weight: 500; flex: 1 1 auto; padding: 7px; padding-left: 12px;  border: none;color:#787878;">
                                
                                <button style="padding: 7px; font-family: Sans-Serif !important; font-size: 18px; font-weight: 500; background: white; border:none; border-top-right-radius: 5px; border-bottom-right-radius: 5px;"><i class="fa fa-search mr-4 ml-4"></i></button>
                            </div>
                        </form>

                         
      </div>
    </div>
	</section>
	
	<!-- Hero section end -->


	
	
	

	
	
	
	
		
		<h3>Contact Form</h3>
		
		<div class="container">
		   
			<form action="{{ url('Enquiry-form')}}"  name="form" method="post"  id="edituser" class="search-property">
			    	 {{ csrf_field() }}
                <div class="row reg_data">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head_txt">Send Enquiry</div>
                        <div class="head_txt"><span id="super2" style="color:green;font-size: 23px;font-weight: 700;"></span></div> 
					</div>
					
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="floating-label">
                            <input class="floating-input" id="name" name="name" type="text" placeholder=" " >
                             <span class="text-danger">
                                <strong id="name-error"></strong>
                            </span>
                            <label>Your Name</label>
						</div>
						
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="floating-label">
                            <input class="floating-input" id="email" name="email" type="email" placeholder=" " name="pclientmail">
                             <span class="text-danger">
                                <strong id="email-error"></strong>
                            </span>
                            <label>Your Email</label>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="floating-label">
                            <input class="floating-input" id="phone" name="phone" type="text" placeholder=" " name="pclientcontact">
                             <span class="text-danger">
                                <strong id="phone-error"></strong>
                            </span>
                            <label>Contact Number</label>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="floating-label">
                            <input class="floating-input" id="PropertyLocation" name="PropertyLocation" type="text" placeholder=" " name="plocation">
                             <span class="text-danger">
                                <strong id="PropertyLocation-error"></strong>
                            </span>
                            <label>Desired Property Location</label>
						</div>
						
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="floating-label">
                            <select class="floating-select" onclick="this.setAttribute('value', this.value);" id="PropertyType" name="PropertyType" value="" name="ptype">
                                <option value=""></option>
                                <option value="plot">PLOT</option>
                                <option value="villa">VILLA</option>
                                <option value="apartment">APARTMENT</option>
                                <option value="independent house">INDEPENDENT HOUSE</option>
                                <option value="commercial">COMMERCIAL</option>
                                <option value="office">OFFICE</option>
                                <option value="godown">GODOWN</option>
                                <option value="sheds">SHEDS</option>
                                <option value="industrial properties">INDUSTRIAL PROPERTIES</option>
                                <option value="farm land">FARM LAND (AGRICULTURAL)</option>
                                <option value="development land">DEVELOPMENT LAND</option>
							</select>
                             <span class="text-danger">
                                <strong id="PropertyType-error"></strong>
                            </span>
                            <label>Property Type</label>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="floating-label">
                            <select class="floating-select" onclick="this.setAttribute('value', this.value);" id="PropertyPurpose" name="PropertyPurpose" value="" name="ppurpose">
                                <option value=""></option>
                                <option value="Buy">Buy</option>
                                <option value="Sale">Sell</option>
                                <option value="Rent">Rent</option>
                                <option value="Lease">Lease</option>
							</select>
                             <span class="text-danger">
                                <strong id="PropertyPurpose-error"></strong>
                            </span>
                            <label>Property Purpose</label>
						</div>
					</div>
					
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="floating-label">
                            <input class="floating-input" id="Agent" name="Agent" type="text" placeholder=" " name="pagent" value="">
                             <span class="text-danger">
                                <strong id="Agent-error"></strong>
                            </span>
                            <label>Agent</label>
						</div>
						
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb_p">
                                <div class="floating-label">
									<input class="floating-input" id="MinBeds" name="MinBeds" type="text" placeholder=" " name="pminbed" value="">
									
									<!--  <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="" name="pminbed">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
									</select>-->
                                     <span class="text-danger">
                                <strong id="MinBeds-error"></strong>
                            </span>
                                    <label>Min Beds</label>
								</div>
							</div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb_p">
                                <div class="floating-label">
									<input class="floating-input" id="MinBathrooms" name="MinBathrooms" type="text" placeholder=" " name="pminbath" value="">
									 <span class="text-danger">
                                <strong id="MinBathrooms-error"></strong>
                            </span>
									<!-- <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="" name="pminbath">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
									</select>-->
                                    
                                    <label>Min Bathrooms</label>
								</div></div>
						</div>
						
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb_p">
                                <div class="floating-label">
									<input class="floating-input" id="MinPrice" name="MinPrice" type="text" placeholder=" " name="pminprice" value="">
									 <span class="text-danger">
                                <strong id="MinPrice-error"></strong>
                            </span>
									<!-- <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="" name="pminprice">
                                        <option value=""></option>
                                        <option value="">Min Price</option>
                                        <option value="1,000">1,000</option>
                                        <option value="5,000">5,000</option>
                                        <option value="10,000">10,000</option>
                                        <option value="50,000">50,000</option>
                                        <option value="100,000">100,000</option>
                                        <option value="200,000">200,000</option>
                                        <option value="300,000">300,000</option>
                                        <option value="400,000">400,000</option>
                                        <option value="500,000">500,000</option>
                                        <option value="600,000">600,000</option>
                                        <option value="700,000">700,000</option>
                                        <option value="800,000">800,000</option>
                                        <option value="900,000">900,000</option>
                                        <option value="1,000,000">1,000,000</option>
									</select>-->
                                    
                                    <label>Min Price</label>
								</div>
							</div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb_p">
                                <div class="floating-label">
									<input class="floating-input" id="MaxPrice" name="MaxPrice" type="text" placeholder=" " name="pmaxprice" value="">
									 <span class="text-danger">
                                <strong id="MaxPrice-error"></strong>
                            </span>
									<!--     <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="" name="pmaxprice">
                                        <option value=""></option>
                                        <option value="100,000">100,000</option>
                                        <option value="200,000">200,000</option>
                                        <option value="400,000">400,000</option>
                                        <option value="600,000">600,000</option>
                                        <option value="800,000">800,000</option>
                                        <option value="10,00,000">10,00,000</option>
                                        <option value="15,00,000">15,00,000</option>
                                        <option value="20,00,000">20,00,000</option>
                                        <option value="25,00,000">25,00,000</option>
                                        <option value="50,00,000">50,00,000</option>
                                        <option value="75,00,000">75,00,000</option>
                                        <option value="1,0,000,000">1,0,000,000</option>
                                        <option value="1,50,00,000">1,50,000,000</option>
                                        <option value="2,00,000,000">2,00,000,000</option>
									</select>-->
                                    
                                    <label>Max Price</label>
								</div></div>
						</div>
						
						
					</div>
					
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb_p">
                                <div class="floating-label">
                                    <input class="floating-input" id="MinArea" name="MinArea" type="text" placeholder=" " name="pminarea">
                                     <span class="text-danger">
                                <strong id="MinArea-error"></strong>
                            </span>
                                    <label>Min Area (sq ft)</label>
								</div>
								
							</div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb_p">
                                <div class="floating-label">
                                    <input class="floating-input" id="MaxArea" name="MaxArea" type="text" placeholder=" " name="pmaxarea">
                                     <span class="text-danger">
                                <strong id="MaxArea-error"></strong>
                            </span>
                                    <label>Max Area (sq ft) </label>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="floating-label">
                            <input class="floating-input" id="PropertyID" name="PropertyID" type="text" placeholder=" " name="propertyid">
                             <span class="text-danger">
                                <strong id="PropertyID-error"></strong>
                            </span>
                            <label>Property ID</label>
						</div>
					</div>
					
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						
						
					</div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="floating-label">
                            <textarea class="floating-input floating-textarea" id="AdditionalDetails" name="AdditionalDetails" rows="4" cols="4" placeholder=" " name="pcomments"></textarea>
                             <span class="text-danger">
                                <strong id="AdditionalDetails-error"></strong>
                            </span>
                            <label>Additional Details</label>
						</div>
						
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <input type="submit" class="btn btn-default1" name="submit" id="submit" value="Submit">
                        <style>.btn-default1{background:#0168be;width:50%;text-align:center;color:#fff;font-size:15px;letter-spacing:.4px;float:right;margin-top:10%}</style>
					</div>
					
				</div>
			</form>
		</div>
	
	
		@include('footer')
	<!-- Footer section end -->
    

	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">


    $(document).ready(function() {
		    
 $('#edituser').on('submit', function(e){
            e.preventDefault();


        $( '#name-error' ).html( "" );
    	$( '#email-error' ).html( "" );
		$( '#phone-error' ).html( "" );
		$( '#PropertyLocation-error' ).html( "" );
		$( '#PropertyType-error' ).html( "" );
		$( '#PropertyPurpose-error' ).html( "" );
		$( '#Agent-error' ).html( "" );
		$( '#MinBeds-error' ).html( "" );
		$( '#MinBathrooms-error' ).html( "" );
		$( '#MinPrice-error' ).html( "" );
		$( '#MaxPrice-error' ).html( "" );
		$( '#MinArea-error' ).html( "" );
		$( '#MaxArea-error' ).html( "" );
		$( '#PropertyID-error' ).html( "" );
		$( '#AdditionalDetails-error' ).html( "" );
	 var website = '<?php echo $_SERVER["SERVER_NAME"]; ?>';
		
		
            var _token            = $("input[name='_token']").val();
            var name              = $("input[name='name']").val();
            var email             = $("input[name='email']").val();
            var phone            = $("input[name='phone']").val();
            var PropertyLocation  = $("input[name='PropertyLocation']").val();
            var PropertyType      = $("#PropertyType").val();
            var PropertyPurpose   = $("#PropertyPurpose").val();
            var Agent             = $("input[name='Agent']").val();
            var MinBeds           = $("input[name='MinBeds']").val();
            var MinBathrooms      = $("input[name='MinBathrooms']").val();
            var MinPrice          = $("input[name='MinPrice']").val();
            var MaxPrice          = $("input[name='MaxPrice']").val();
            var MinArea           = $("input[name='MinArea']").val();
            var MaxArea           = $("input[name='MaxArea']").val();
            var PropertyID        = $("input[name='PropertyID']").val();
            var AdditionalDetails = $("textarea[name='AdditionalDetails']").val();
            
            
            $.ajax({
                url: "{{ url('Enquiry-form') }}",
                type:'POST',
                data: {_token:_token, name:name, email:email, phone:phone, PropertyLocation:PropertyLocation, PropertyType:PropertyType , PropertyPurpose:PropertyPurpose, Agent:Agent, MinBeds:MinBeds , MinBathrooms:MinBathrooms , MinPrice:MinPrice , MaxPrice:MaxPrice , MinArea:MinArea , MaxArea:MaxArea , PropertyID:PropertyID , AdditionalDetails:AdditionalDetails},
                success: function(data) {

                       if(data.error) {
           
                    if(data.error.name){
                        $( '#name-error').html( data.error.name[0] );
                    }
                    if(data.error.email){
                        $( '#email-error').html( data.error.email[0] );
                    }
                    if(data.error.phone){
                        $( '#phone-error').html( data.error.phone[0] );
                    }
                    
               		if(data.error.PropertyLocation){
                        $( '#PropertyLocation-error').html( data.error.PropertyLocation[0] );
                    }
                    
					
						if(data.error.PropertyType){
                        $( '#PropertyType-error').html( data.error.PropertyType[0] );
                    }
                    	if(data.error.PropertyPurpose){
                        $( '#PropertyPurpose-error').html( data.error.PropertyPurpose[0] );
                    }
                    	if(data.error.Agent){
                        $( '#Agent-error').html( data.error.Agent[0] );
                    }
                    	if(data.error.MinBeds){
                        $( '#MinBeds-error').html( data.error.MinBeds[0] );
                    }
                    	if(data.error.MinBathrooms){
                        $( '#MinBathrooms-error').html( data.error.MinBathrooms[0] );
                    }
                    	if(data.error.MinPrice){
                        $( '#MinPrice-error').html( data.error.MinPrice[0] );
                    }
                    	if(data.error.MaxPrice){
                        $( '#MaxPrice-error').html( data.error.MaxPrice[0] );
                    }
                    	if(data.error.MinArea){
                        $( '#MinArea-error').html( data.error.MinArea[0] );
                    }
                    	if(data.error.MaxArea){
                        $( '#MaxArea-error').html( data.error.MaxArea[0] );
                    }
                    	if(data.error.PropertyID){
                        $( '#PropertyID-error').html( data.error.PropertyID[0] );
                    }
                    	if(data.error.AdditionalDetails){
                        $( '#AdditionalDetails-error').html( data.error.AdditionalDetails[0] );
                    }
                    
                    }
                    if(data.error == '0') {
                    $('#super2').text('Thank You');
                
                    $("#edituser")[0].reset(0);

                }
                
            }


        }); 



    });

  });
</script>

	
</body>
