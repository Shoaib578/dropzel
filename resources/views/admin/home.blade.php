@extends('admin.layout')

@section('content')


<br>
<br>
<br>
<center>
<table class="table" style="width:80%">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Category</th>
      <th scope="col">Actions</th>

      
    </tr>
  </thead>
  
  <tbody>
      @foreach($users as $user)
        <tr>
        <th scope="row">{{$user->name}}</th>
        <td>{{$user->email}}</td>
        @if($user->is_admin == 0)
            <td>Normal User</td>

        @else
        <td>Admin</td>

        @endif 
        <td>
            <a href="/admin/user/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
            <a href="/admin/user/{{$user->id}}/delete" class="btn btn-danger">Delete</a>

        </td>
        @endforeach
     
    </tr>
   
  </tbody>
</table>

</center>

@endsection