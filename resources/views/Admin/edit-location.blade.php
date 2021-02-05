<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Layout - Voler Admin Dashboard</title>
    
    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="{{url('/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/app.css">
    <link rel="shortcut icon" href="{{url('/')}}/assets/images/favicon.svg" type="image/x-icon">
	
	
	
	<link rel="stylesheet" href="{{url('/')}}/assets/vendors/quill/quill.bubble.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/vendors/quill/quill.snow.css">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="{{url('/')}}/assets/images/logo.svg" alt="" srcset="">
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

            
            
            
                
            
            
            
                <li class="sidebar-item ">
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
                    <a href="{{url('/')}}/addbuillderform" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>add buillderform</span>
                    </a>
                    
                </li>
               	<li class="sidebar-item  ">
                    <a href="{{url('/')}}/location-table" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>location</span>
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
                                    <img src="{{url('/')}}/assets/images/avatar/avatar-s-1.png" alt="" srcset="">
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
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add location</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
    <div class="row match-height">
        
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Add locaton</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
			<span id="super"style="color:green;"></span>
			
                <form action="{{ url('location-submit')}}" id='edituser' method="post" class="form form-horizontal" enctype="multipart/form-data">
					{{ csrf_field() }}
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Name</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{$location->name}}">
									
                                <strong id="name-error"></strong>
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                       
                       <br>
						<div class="col-md-4">
                            <label>Image</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                  

<input type="file" class="form-control" id="image" name="image"value="{{ $location->image }}">
									
                               
                                    <div class="form-control-icon">
                                        <i data-feather="image"></i>
                                    </div>
                                </div>
                            </div> 
                        </div>
						<br>
                        
                      
                     
                    <div class="form-group col-md-8 offset-md-4">
                        <div class='form-check'>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox2" class='form-check-input' checked>
                                <label for="checkbox2">Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end ">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                    </div>
                    </div>
                </div>
                </form>
				
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->

    
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
    <script src="assets/vendors/quill/quill.min.js"></script>
    <script src="assets/js/pages/form-editor.js"></script>
    <script src="assets/js/main.js"></script>
	
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">


    $(document).ready(function() {
		    
 $('#edituser').on('submit', function(e){
 
            e.preventDefault();


        $( '#name-error' ).html( "" );
         $( '#image-error' ).html( "" );
	

            var _token = $("input[name='_token']").val();
        

            $.ajax({
                url: "{{ url('location-update') }}",
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
                    if(data.errors.image){
                        $( '#image-error' ).html( data.errors.image[0] );
                    }
				
               
					

                    }
                                    if(data.success) {
                    $('#super').text('location Added successfully');
                
                    $("#edituser")[0].reset();

                }
                
            }


        }); 



    });

  });
</script>
</body>
</html>
