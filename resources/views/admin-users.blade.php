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
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./admin-users">All Users</a></li>
                        </ul>
                    </li>
                   
             </div>
         </div>

         <div class="content-body">

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
 

                 <div class="form-input-content">
                     <div class="card login-form mb-0">
                         <div class="card-body pt-5">                               
                            <h4 class="text-center mb-4">Register Users List</h4>
                            <table border = "1">
                                <tr>
                                    <td><strong>Id</strong></td>
                                    <td><strong>Name</strong></td>
                                    <td><strong>Email</strong></td>
                                    <td><strong>Action</strong></td>
                                </tr>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
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
<!-- #/ container -->
</div>


@endsection