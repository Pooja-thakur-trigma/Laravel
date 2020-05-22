@extends('frontend.layouts.frontend-app')

@section('content')

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <h4 class="text-center">Log In</h4>
                                
                                <form method="POST"  class="mt-5 mb-5 login-input" action="http://localhost/quixlab/public/">
                                     {{ csrf_field() }}
                                     <div class="form-group @if ($errors->has('email')) has-error @endif">
                                        <input type="email" class="form-control"  name="email" id="email" placeholder="Email">
                                        @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                                    </div>
                                    <div class="form-group @if ($errors->has('password')) has-error @endif ">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                                    </div>
                                    @if ($alerterror = Session::get('alert-error'))
	                                     <div class="alert alert-warning">
	                                         	{{ $alerterror }}
	                                      </div>
                                    @endif
                                    @if ($alert = Session::get('alert-success'))
	                                     <div class="alert alert-success">
	                                         	{{ $alert }}
	                                      </div>
                                    @endif
                                    <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="register" class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
   
 
@endsection