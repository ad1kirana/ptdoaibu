@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                   
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You don't have any priviledge, call your Administrator or Superadmin for approval
                </div>
                <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          
        
       
        </div>
            </div>
        </div>
    </div>
</div>
@endsection