@extends('layouts.app')
@section('content')

<div class="panel panel-primary">


    
<ul class="list-group">
  

<table>
<thead>
  <tr>
    <th>name</th><th>email</th><th>role</th><th>action</th>
  </tr>
</thead>

<li class="list-group-item">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @foreach($users as $users)
  @php
    //echo $users;
    //var_dump($users) ;
    //die();
  @endphp
    <tbody>
      
        <tr>
          <td>{{ $users->name }}</td> 
          <td>{{ $users->email }}</td>  
          <td>{{ $users->rolename }}</td> 
          <td>
          <a href='{{ URL('roleuser/edit') }}/{{ $users->id}}'>Update Priviledge</a>
          <a href='{{ URL('user/delete') }}/{{ $users->id}}'>Delete</a>
          </td>
        </tr>
    </tbody>
  @endforeach
</li>
</table>
</ul>

</div>

@endsection