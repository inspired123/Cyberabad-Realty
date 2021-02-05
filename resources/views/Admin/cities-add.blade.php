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
                        <li class="breadcrumb-item active" aria-current="page">Add cities</li>
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
            <h4 class="card-title">Add cities</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal">
                <div class="form-body">
                    <div class="row">
                        <!--<div class="col-md-4">
                            <label>Name</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Name" id="first-name-icon">
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-md-4">
                            <label>City name</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="city name" class="form-control" placeholder="City name" id="first-name-icon">
                                    <div class="form-control-icon">
                                        <i data-feather="tag"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
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
                    <div class="form-group col-md-8 offset-md-4">
                        <div class='form-check'>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox2" class='form-check-input' checked>
                                <label for="checkbox2">Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end ">
                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
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

              @include('Admin.footer')
