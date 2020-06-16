@extends('layouts.app')

@section('content')
<div class="p-3 container text-center">
    <div class="d-flex justify-content-between">
        <h5 class="font-weight-Italic">Orders</h5>
    </div>
    <table class="table table-dark table-striped col-md-12">
        <th>
            Product Name
        </th>

        <th>
            Time Created
        </th>
        <th>Ordered quantity</th>
        <th>
            Options
        </th>
        @foreach($orders as $order)
        <tr class="">
            <td>{{$order->product->name}}</td>
            <td>{{$order->created_at}}</td>
            <td>{{$order->ordered_quantity}}</td>
            <td >
                <div class="d-flex flex-row  justify-content-around">

                    {!! Form::open( ['route' => ['orders.destroy' , $order->id] , 'method' => 'delete'])!!}
                    <button class="btn btn-danger">delete</button>
                    {!! Form::close() !!}

                    {!! Form::open( ['route' => ['orders.edit' , $order->id] , 'method' => 'get'])!!}
                    <button class="btn btn-primary">Update</button>
                    {!! Form::close() !!}

                    {!! Form::open( ['route' => ['orders.show' , $order->id] , 'method' => 'get'])!!}
                    <button class="btn btn-warning">show</button>
                    {!! Form::close() !!}
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    {{$orders->links()}}
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