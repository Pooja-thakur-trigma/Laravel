@extends('frontend.layouts.frontend-app')

@section('content')
<div class="login-form-bg h-100">
     <div class="container h-100">
         <div class="row justify-content-center h-100">
             <div class="col-xl-6">
                 <div class="form-input-content">
                     <div class="card login-form mb-0">
                         <div class="card-body pt-5">                              
                             <h4 class="text-center mb-4">Edit Your Account</h4>       
                                <form class="mt-5 mb-5 login-input" method="POST" action="./user-<?php echo $users[0]->id; ?>">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                                        <input type="text" class="form-control"  name="name" id="name" value="<?php echo $users[0]->name; ?>" placeholder="Name">
                                        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                                    </div>
                                    <div class="form-group @if ($errors->has('email')) has-error @endif">
                                         <input type="email" class="form-control"  name="email" id="email" value="<?php echo $users[0]->email; ?>" placeholder="Email">
                                         @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                                    </div>
                                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                                         <input type="password" class="form-control"  name="password" id="password" value="<?php echo $users[0]->password; ?>"  placeholder="Password" required>
                                         @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Update</button>
                                </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection