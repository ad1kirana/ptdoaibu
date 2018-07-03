@extends('layouts.app')
@section('content')

<div class="row">
<div class="col-md-8">
  

    
<table class="table">


<thead>
  <tr>
    <th>items</th>
    <th>qty</th>
    <th>price</th>
    <th>admin</th>
    <th>time</th>
  </tr>
</thead>


  <meta name="csrf-token" content="{{ csrf_token() }}">
  @foreach($transactions as $transactions)
    <tbody>
      
        <tr>
          <td>{{ $transactions->items }}</td> 
          <td>{{ $transactions->qty }}</td>  
          <td>{{ $transactions->price }}</td> 
          <td>{{ $transactions->name }}</td> 
          <td>{{ $transactions->created_at }}</td> 
        </tr>
      
    </tbody>
  @endforeach

</table>

</div>




</div>

@endsection