@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card ">


        <h5 class="h5 card-header">Order :</h5>

        <div class="card-body">
            <h5 class="h5">{{$order->product->name}}</h5>
            <h5 class="h5">{{$order->created_at}}</h5>
        </div>
    </div>
</div>
@endsection