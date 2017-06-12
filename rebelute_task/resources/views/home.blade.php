@extends('layouts.app')

@section('content')

@include('messages')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p><a href="{{route('vendor.list')}}">Vendors Information</a></p>
                    
                    <p><a href="{{route('customer.list')}}">Customer Information</a></p>

                    <p><a href="{{route('add.customer')}}">Add New Customer Information</a></p>


                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
