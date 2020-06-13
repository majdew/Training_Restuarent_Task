<div class="container">
    @extends('layouts.app')

    @section('content')
    <p>This is order page</p>

    @foreach($user_orders as $order)
    <p>{{$order->payment}}</p>
    <p>{{$order->created_at}}</p>
    <p>{{$order->product->name}}</p>
    @endforeach
    @endsection

</div>