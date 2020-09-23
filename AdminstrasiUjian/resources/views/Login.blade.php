<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrasi Ujian IT Del - Login</title>
	<link href=" {{ asset ('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/styles.css ') }}" rel="stylesheet">
	<link rel="{{ asset('/css/bootstrap-grid.min.css') }}" type="text/css">
	
</head>
	<body  style="background: white" class="container">
		<div class="row">
			<div class="container" style="background-color:none;display: flex;justify-content: center;padding: 1%;">
			<div class="login-box" style="width: 45%;">
				
    <div class="login-box-body" style="border: 2px solid #eee;padding: 7%;background-color: #86DBE5;border:black 1px solid;">
    	<div class="col-lg-12" style="display: flex;justify-content: center;background-color: none;text-align: center;height: 200px;background-color: #86DBE5; ">
    		<div class="col-lg-12" style="background-color: none;height: 90%;">
    			<p class="login-box-msg"><img src="gambar/baru.png" class="logoLogin" width="70px"><br>Biro Administrasi Akademik IT Del</p><hr>
    		</div>
        
        <hr>
        </div>
		<form action="{{url('/postlogin')}}"  method="POST">
			@csrf      
				<div class="form-group	">
             		<div class="form-group required">
						<label class=""><em class="fa fa-user"></em> Username</label>
						<input type="text" name="username"  class="form-control" aria-required="true" aria-invalid="false" placeholder="Username">
						@if($errors->has('username'))
							<p class="alert alert-danger" role="alert" style="height: 2%">{{ $errors->first('username') }}</p>
						@endif
						@if(Session::has('alert2'))
							<div class="alert alert-danger">
							<div>{{Session::get('alert2')}}</div>
							</div>
            		@endif
					 </div>
					                 
					<div>
					<label class="control-label" for="loginform-password"><em class="fa fa-key"></em> Password</label>
					<input type="password" name="password" id="loginform-password" class="form-control" placeholder="Password"  aria-required="true" aria-invalid="false">
					@if($errors->has('password'))
							<p class="alert alert-danger" role="alert" style="height: 2%">{{ $errors->first('password') }}</p>
						@endif
						@if(Session::has('alert1'))
							<div class="alert alert-danger">
							<div>{{Session::get('alert1')}}</div>
							</div>
            		@endif

			</div>            
		</div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <div class="form-group field-loginform-rememberme">
                            	<label class="mt-5">
                            		<div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                            			<input type="checkbox" name="">
                            		</div> Remember Me
                            	
			</div>              
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                	<a href="">
                    <button type="submit" class="btn btn-primary mt-5 btn-block btn-flat">Sign In</button>
                    </a>
                </div>
        </form>    
    </div>
</div>

<script src="{{asset('/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script>
		@if(Session::has('message'))
		 var type = "{{ Session::get('alert-type', 'success') }}";
		 switch(type){
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
		 
	   @endif    
   </script>
</body>
</html>
