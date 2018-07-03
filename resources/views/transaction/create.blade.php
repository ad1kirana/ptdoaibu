

@extends('layouts.app')
@section('content')
<form action='{{ URL('transaction') }}' method='POST'>
    <div class="row">
        <div class="col-md-8">
            <h4>Create New Transaction</h4>
            <input type="hidden" name='_token' value='{{csrf_token()}}'>
          
        
            <input type="text" name='items' value=''>
            <input type="number" name='qty' value=''>
            <input type="varchar" name='price' value=''>
        <button type='submit'>submit</button>   
        </div>
    </div>
</form>
@endsection