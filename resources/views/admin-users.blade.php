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
                <table border = "1">
<tr>
<td>Id</td>
<td>Name</td>
<td>Email</td>
</tr>
@foreach ($register_users as $register_user)
<tr>
<td>{{ $register_user->register_id }}</td>
<td>{{ $register_user->register_name  }}</td>
<td>{{ $register_user->register_email  }}</td>
</tr>
@endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
</div>


@endsection