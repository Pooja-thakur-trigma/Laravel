@extends('backend.layouts.backend-app')

@section('content')

<div class="nk-sidebar">           
     <div class="nk-nav-scroll">
         <ul class="metismenu" id="menu">
             <li>
                 <a class="nav-label" href="./admin">
                     <span class="nav-text">Dashboard</span>
                 </a>
             </li>
             <li class="mega-menu mega-menu-sm">
                 <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                     <i class="icon-user menu-icon"></i><span class="nav-text">Users</span>
                 </a>
                 <ul aria-expanded="false">
                     <li><a href="./admin-users">All Users</a></li>
                 </ul>
             </li>
         </ul>      
     </div>
 </div>

 <div class="content-body">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-body row justify-content-center h-100"> 
                         <div class="col-10">
                             <div class="form-input-content mb-5">
                                 <div class="card login-form mb-0">
                                    <div class="card-body pt-5">                               
                                        <h4 class="text-center mb-4">Register Users List</h4>
                                        <table border = "1">
                                            <tr>
                                                <td><strong>Id</strong></td>
                                                <td><strong>Image</td>
                                                <td><strong>Name</strong></td>
                                                <td><strong>Email</strong></td>
                                                <td><strong>Action</strong></td>
                                            </tr>
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>@if (auth()->user()->image)
            <img src="{{ asset(auth()->user()->image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
        @endif</td>
                                                <td>{{ $user->name  }}</td>
                                                <td>{{ $user->email  }}</td>
                                                <td><a href="./register-edit/user-{{ $user->id }}">Edit</a>|
                                                <a href="./admin-users/user-{{ $user->id }}">Delete</a>
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
        </div>
    </div>
</div>

@endsection