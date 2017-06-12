@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
        <p><a href="{{route('customer.list')}}">Customer Information</a></p>
        <table class="table table-dordered">
            <thead>
                <tr>
                <th>Name</th>
                <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vendors as $vend)
                <tr>
                <td>{{$vend->Name}}</td>
                <td>{{$vend->phone}}</td></tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>
@endsection