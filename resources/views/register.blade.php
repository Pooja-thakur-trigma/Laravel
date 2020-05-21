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
        
                                <form class="mt-5 mb-5 login-input" method="POST" action="http://localhost/quixlab/public/register">
                                   {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" class="form-control"  name="register_name" id="register_name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"  name="register_email" id="register_email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"  name="register_password" id="register_password" placeholder="Password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="page-login.html" class="text-primary">Sign Up </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        @endsection