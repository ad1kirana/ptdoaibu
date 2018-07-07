

@extends('layouts.app')
@section('content')
<form action='{{ URL('transaction') }}' method='POST'>
    <div class="row">
        <div class="col-md-8">
            <h4>Create New Transaction</h4>
            <input type="hidden" name='_token' value='{{csrf_token()}}'>
            <table>
                
                <thead>
                     <tr>
                        <th>items</th>
                        <th>qty</th>
                        <th>price</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td> <input type="text" name='items' value=''></td> 
                      <td> <input type="number" name='qty' value=''></td>  
                      <td> <input type="varchar" name='price' value=''></td> 
                    </tr>
                </tbody>
            </table>
        
           
           
           
        <button type='submit'>submit</button>   
        </div>
    </div>
</form>
@endsection