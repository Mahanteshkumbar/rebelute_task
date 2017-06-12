@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
        <p><a href="{{route('vendor.list')}}">Vendors Information</a></p>
<table class="table table-bordered">
    <thead>
        <tr>
        <th>Name</th>
        <th>Phone</th>
    </tr>
    </thead>
    <tbody>
        @foreach($customers as $cust)
        <tr>
        <td>{{$cust->Name}}</td>
        <td>{{$cust->phone}}</td>
    </tr>
        @endforeach
    </tbody>
</table>
    </div>
  </div>
</div>

@endsection