<div class="container">

    @extends('layouts.app')

    @section('content')
    <p>Payments :</p>

    @foreach($payments as $payment)

    product : {{$payment->order->product->name}}
    , Ordered : {{$payment->order->ordered_quantity}}
    , Total price : {{$payment->order->product->price * $payment->order->ordered_quantity}}
    , Paid : {{$payment->paid}}
    , User : {{$payment->order->user->name}}
    <br>
    @endforeach

    @endsection
</div>