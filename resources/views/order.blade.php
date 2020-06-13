@extends('layouts.app')

@section('content')
<div class="p-4">
    <div class="d-flex justify-content-between">
        <p class="p-1 font-weight-bold">Orders</p>
        {!! Form::open( ['route' => ['orders.create'] , 'method' => 'get'])!!}
        <button class="img-rounded btn-lg btn-primary">+</button>
        {!! Form::close() !!}
    </div>
    <table class="table table-dark table-striped col-md-6">
        <th>
            Product Name
        </th>

        <th>
            Time Created
        </th>
        <th>Ordered quantity</th>
        <th class="">
            Options
        </th>
        @foreach($orders as $order)
        <tr class="">
            <td>{{$order->product->name}}</td>
            <td>{{$order->created_at}}</td>
            <td>{{$order->ordered_quantity}}</td>


            <td>


                <div class="d-flex flex-row justify-content-between">
                    {!! Form::open( ['route' => ['orders.destroy' , $order->id] , 'method' => 'delete'])!!}
                    <button class="btn btn-danger">delete</button>
                    {!! Form::close() !!}
                    {!! Form::open( ['route' => ['orders.edit' , $order->id] , 'method' => 'get'])!!}
                    <button class="btn btn-primary">Update</button>
                    {!! Form::close() !!}
                </div>
            </td>

        </tr>
        @endforeach
    </table>
    @if (session('success'))
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
</div>
@endsection