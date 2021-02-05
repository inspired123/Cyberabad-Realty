
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
    </style>
</head>

<body>
   
	
	<!-- Header section -->
	<header class="header-section" style="background-image: url(img/photo-1600992450680-7ea101248d56.jpg);">
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
							<a href="{{ url('/') }}/registration" target="_blank"><i class="fa fa-user-circle"></i> Register</a>
							<a href="{{ url('/') }}/logins"><i class="fa fa-sign-in"></i> Login</a>
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
						<a href="#" class="site-logo"><img src="img/logo.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="{{ url('/') }}/">Home</a></li>
							<li><a href="{{ url('/') }}/categories">FEATURED LISTING</a></li>
							<li><a href="{{ url('/') }}/about">ABOUT US</a></li>
							<li><a href="single-list.html">Pages</a></li>
							<li><a href="{{ url('/') }}/blog">Blog</a></li>
							<li><a href="{{ url('/') }}/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header><br>
	<!--<div class="container register" style="margin:150px 0px 0px 150px">-->

    <div class="container register" style="margin-top:170px;">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="img/image.jpg alt="" />
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
               <a href="{{ url('/') }}/logins"> <input type="submit" name="" value="Login" /><br /></a>
            </div>
            <div class="col-md-9 register-right">
               
                <div class="tab-content" id="myTabContent">
                
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a User</h3>
                        <div id="success-msg" style="display:none;">
                    <div class="alert alert-info alert-dismissible in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <strong>user registered successfully</strong>
                    </div>
                </div>
                        <form action="#" id="Register"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="first" id="first" placeholder="First Name *" value="" />
                                    <span class="text-danger">
                                <strong id="first-error"></strong>
                            </span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email *" value="" />
                                    <span class="text-danger">
                                <strong id="email-error"></strong>
                            </span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password *" value="" />
                                    <span class="text-danger">
                                <strong id="password-error"></strong>
                            </span>
                                </div>
                               
                                
                            </div>
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" name="last" id="last" placeholder="Last Name *" value="" />
                                    <span class="text-danger">
                                <strong id="last-error"></strong>
                            </span>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="Mobileno" id="Mobileno"
                                        class="form-control" placeholder="Your Phone *" value="" />
                                        <span class="text-danger">
                                <strong id="Mobileno-error"></strong>
                            </span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password *"
                                        value="" />
                                        <span class="text-danger">
                                <strong id="confirm_password-error"></strong>
                            </span>
                                </div>

                                
                            </div>
                            <div class="form-group">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="Owner" checked>
                              <label class="form-check-label" for="inlineRadio1" >Owner</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="Agent">
                              <label class="form-check-label" for="inlineRadio2">Agent</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="Builder">
                              <label class="form-check-label" for="inlineRadio2">Builder</label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="Investor">
                              <label class="form-check-label" for="inlineRadio2">Investor</label>
                           </div> </div><br><br>

                            
                            <input type="submit" value="Register" id="submitForm" class="btnRegister"  style="width:101px"  />

                            
                           
                        </div>
                        
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>

</body><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<script type="text/javascript">
		

		
		
		$(document).ready(function(){
		   
 $('#Register').on('submit', function(event){
    
	 
  event.preventDefault();
  

        $( '#first-error' ).html( "" );
        $( '#last-error' ).html( "" );
        $( '#email-error' ).html( "" );
		$( '#Mobileno-error' ).html( "" );
		$( '#password-error' ).html( "" );
		$( '#confirm_password-error' ).html( "" );
       
		
        $.ajax({
            

            url:'{{ url('/')}}/register',
            type:'POST',
            method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
            success:function(data) {
                console.log(data);
                if(data.errors) {
                    if(data.errors.first){
                        $( '#first-error' ).html( data.errors.first[0] );
                    }
                    if(data.errors.last){
                        $( '#last-error' ).html( data.errors.last[0] );
                    }
                    if(data.errors.email){
                        $( '#email-error' ).html( data.errors.email[0] );
                    }
					
					
					   if(data.errors.Mobileno){
                        $( '#Mobileno-error' ).html( data.errors.Mobileno[0] );
                    }
					
					   if(data.errors.password){
                        $( '#password-error' ).html( data.errors.password[0] );
                    }
					
					   if(data.errors.confirm_password){
                        $( '#confirm_password-error' ).html( data.errors.confirm_password[0] );
                    }
		
                }
                if(data.success) {
                    $('#success-msg').css('display','block');
                    setInterval(function(){ 
             window.location.href="{{ url('logins') }}";
                    }, 3000);
                }
            },
        });
    });
});
    
    
    
    
    
    
    
    
     
	  
	  
	 
 
</script>
	@include('footer')