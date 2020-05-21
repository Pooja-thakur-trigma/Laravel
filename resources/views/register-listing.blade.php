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