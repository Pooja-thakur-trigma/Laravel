@extends('frontend.layouts.frontend-app')

@section('content')
<div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">                               
                                <h4 class="text-center">Register</h4>
                                <form class="mb-5 login-input" method="POST" action="http://localhost/quixlab/public/register" enctype="multipart/form-data">
                                   {{ csrf_field() }}
                                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                                        <input type="text" class="form-control"  name="name" id="name" placeholder="Name">
                                        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                                    </div>
                                    <div class="form-group">
                                    <span class="form-control" >
                                         Profile Image <input type="file" name="avatar" id="avatar" style="margin-left: 12px;">
                                    </span>
                                    </div>
                                    <div class="form-group @if ($errors->has('email')) has-error @endif">
                                        <input type="email" class="form-control"  name="email" id="email" placeholder="Email">
                                        @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                                    </div>
                                    <div class="form-group @if ($errors->has('password')) has-error @endif ">
                                        <input type="password" class="form-control"  name="password" id="password" placeholder="Password">
                                        @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                                    </div>
                                    @if ($alert = Session::get('alert-success'))
	                                     <div class="alert alert-success">
	                                         	{{ $alert }}
	                                      </div>
                                    @endif
                                    <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                    <input type="hidden" name="remember_token" value="<?php echo csrf_token(); ?>">
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="http://localhost/quixlab/public" class="text-primary">Sign Up </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        @endsection