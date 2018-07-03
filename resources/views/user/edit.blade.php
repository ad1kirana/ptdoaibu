@extends('layouts.app')
@section('content')



<form action='{{ URL('roleuser') }}' method='POST'>

<input type="hidden" name='_token' value='{{csrf_token()}}'>


  <input type="hidden" name='id' value='{{$roleuserdata->user_id}}'>

 <h3>{{$roleuserdata->name}}</h3>
  <!--<input type="text" name='role_id' value='{{$roleuserdata->role_id}}'>-->

  <select name="role_id" class="form-control">
    <option value="5">Other</option>
    <option value="1">Super Admin</option>
    <option value="2">Administrator</option>
    <option value="3">Admin Bengkel</option>
    <option value="4">Direksi</option>

</select>

    <button type='submit'>submit</button>

</form>

@endsection