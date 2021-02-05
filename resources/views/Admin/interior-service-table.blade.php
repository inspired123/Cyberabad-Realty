<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatable - Voler Admin Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
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
            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Electrical</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Electrical</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Electrical
			<a href="{{url('/')}}/interior-service"><span class="badge bg-danger float-right" style="padding:8px; border-radius: 10px !important;"><i class="fa fa-plus"></i><b>Add Electrical</b></span></a>
<p id="success"></p>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Enterprise Name</th>
                            <th>phone</th>
                            <th>mail</th>
							<th>about</th>
							
							
							<th>service</th>
							<th>logo</th>
							<th>address</th>
							
							<th>year</th>
							<th>websitelink</th>
							<th>created_at</th>
							<th>updated_at</th>

                        </tr>
                    </thead>
                    <tbody>
					@foreach($interior_service as $interior)
					 
                        <tr>
                            <td>{{$interior->name}}</td>
                            <td>{{$interior->enterprise_name}}</td>
							<td>{{$interior->phone}}</td>
							<td>{{$interior->mail}}</td>
							<td>{{$interior->about}}</td>
							
							
							<td>{{$interior->service}}</td>
							<td><img src="{{url('/public/')}}/{{$interior->logo}}" style="width:50px; height:50px;"></td>
							<td>{{$interior->address}}</td>
							
							<td>{{$interior->year}}</td>
							<td>{{$interior->websitelink}}</td>
							<td>{{$interior->created_at}}</td>
							<td>{{$interior->updated_at}}</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus egestas fermentum ornareste.</td>
					
							<td>
                                <a href="{{url('/')}}/electrical-edit/{{$interior->id}}"><span class="badge bg-success">Edit</span>	</a>	
								
								<span href="#"class="badge bg-danger " onclick="javascript:deleted({{ $interior->id }})">Delete</span>
								@if($interior->status == '1')
                    <i class="fa fa-toggle-on status{{ $interior->id }}" style="font-size:23px;color:green" onclick="javascript:status({{ $interior->id }},{{ $interior->status }})"></i>

  @elseif($interior->status == '0')
                    <i class="fa fa-toggle-off status{{ $interior->id }}" style="font-size:23px;color:black" onclick="javascript:status({{ $interior->id }},{{ $interior->status }})"></i>
@endif

                            </td>
                           
                        </tr>
                       @endforeach
						<tr>
                            <td>Graiden</td>
                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus egestas fermentum ornareste.</td>
					
							<td>
                                <span class="badge bg-success">Edit</span>		
								
								<span class="badge bg-primary">Hide</span>
								<span class="badge bg-danger">Delete</span>

                            </td>
                           
                        </tr>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>

function deleted(id){
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: "electrical-table/"+id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            $('#row'+id).hide();
$('#success').replaceWith('<div id="success" class="alert alert-success" style="color:green;"><p>Deleted</p></div>');        
            
        }
    });
   
}
function status(id,status){

             var token = $("meta[name='{{ csrf_token() }}']").attr("content");

        $.ajax({
            type: "POST",
            dataType: "json",
            url: 'electrical-table/status',
            data: {'status': status, 'id': id, '_token': token,},
            success: function(data){
if(data.success == '1'){
                  $('.status'+id).replaceWith('<i class="fa fa-toggle-on status'+id+'" style="font-size:18px;color:green" onclick="javascript:status('+id+','+data.success+')"></i>');

}
else{
                      $('.status'+id).replaceWith('<i class="fa fa-toggle-off status'+id+'" style="font-size:18px;color:black" onclick="javascript:status('+id+','+data.success+')"></i>');


}
            }
        });

}
</script
</body>
</html>
