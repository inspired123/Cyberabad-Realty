<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css">
	<style>
	.warning{
    color:red;
}
.error{
    color:red;
}
	</style>
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
						
                        <h2>Super Admin</h2>
                    </div>
					@if (\Session::has('incorrect'))
    <div class="warning">
        <ul>
            <li style="list-style: none;">{!! \Session::get('incorrect') !!}</li>
        </ul>
    </div>
@endif
                    <form action="{{url('admin-login')}}" method="POST" id="logForm">
					 
                 {{ csrf_field() }}
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="email" placeholder="Email" autofocus=""  value="{{ old('email') }}">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
										 @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif 
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                          
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
									@if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif  
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-left">
                                <input type="checkbox" id="checkbox1" class='form-check-input' name="remember" value="1">
                                <label for="checkbox1">Remember me</label>
                            </div>
               
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right" type="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
</body>

</html>
