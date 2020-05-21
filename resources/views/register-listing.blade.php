@extends('frontend.layouts.frontend-app')

@section('content')
<div class="login-form-bg h-100">
    <div class="container h-100">
         <div class="row justify-content-center h-100">
             <div class="col-xl-8">
                 <div class="form-input-content">
                     <div class="card login-form mb-0">
                         <div class="card-body pt-5">                              
                            <h4 class="text-center mb-4">Register Users List</h4>
                            <table border = "1">
                                <tr>
                                    <td><strong>Id</strong></td>
                                    <td><strong>Name</strong></td>
                                    <td><strong>Phone</strong></td>
                                    <td><strong>Action</strong></td>
                                </tr>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name  }}</td>
                                    <td>{{ $user->email  }}</td>
                                    <td><a href="./register-edit/user-{{ $user->id }}">Edit</a>|
                                    <a href="./register-listing/user-{{ $user->id }}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection