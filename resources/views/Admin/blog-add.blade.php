  @include('Admin.header')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin-panel')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add blog</li>
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
            <h4 class="card-title">Add Blog</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
			<span id="super"style="color:green;"></span>
                <form action="{{ url('blog-submit')}}" id='edituser' method="post" class="form form-horizontal" enctype="multipart/form-data">
					{{ csrf_field() }}
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Name</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" >
									
                                <strong id="name-error"></strong>
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="col-md-4">
                            <label>Title</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Title" >
									
                                <strong id="title-error"></strong>
                                    <div class="form-control-icon">
                                        <i data-feather="tag"></i>
                                    </div>
                                </div>
                            </div> 
                        </div><br>
						<div class="col-md-4">
                            <label>Image</label>
                        </div>
                        <div class="col-md-8">
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
						<br>
                        
                        <div class="col-md-4">
                            <label>Description</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
									<div class="card-body"style="padding:4px;">
									<div id="full">
										
									</div>
									</div>
                                    <!--<div class="form-control-icon">
                                        <i data-feather="lock"></i>
                                    </div>-->
                                </div>
                            </div>
                        </div>
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


	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">


    $(document).ready(function() {
		    
 $('#edituser').on('submit', function(e){
 
            e.preventDefault();


        $( '#name-error' ).html( "" );
        $( '#title-error' ).html( "" );
		

            var _token = $("input[name='_token']").val();
        

            $.ajax({
                url: "{{ url('blog-submit') }}",
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
                    if(data.errors.title){
                        $( '#title-error' ).html( data.errors.title[0] );
                    }
					
               
					

                    }
                                    if(data.success) {
                    $('#super').text('Blog Added successfully');
                
                    $("#edituser")[0].reset();

                }
                
            }


        }); 



    });

  });
</script>
  @include('Admin.footer')

