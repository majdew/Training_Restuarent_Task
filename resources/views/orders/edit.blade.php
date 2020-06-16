@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order</div>

                <div class="card-body">
                    {!! Form::open( ['route' => ['orders.update' , $order->id] , 'method' => 'put'])!!}
                    <div class="form-group row">
                        {!! Form::label('product', 'Product' , ['class'=>"col-md-4 col-form-label text-md-right"]) !!}
                        <div class="col-md-6">
                            {!! Form::select('product_id',$products->pluck('name', 'id') , $order->product_id ,[ 'class'=>"form-control"] )!!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ordered_qauntity" class="col-md-4 col-form-label text-md-right">Quantity</label>

                        <div class="col-md-6">
                            <input id="ordered_quantity" class="form-control @error('ordered_quantity') is-invalid @enderror" name='ordered_quantity' value="{{$order->ordered_quantity}}" required autofocus>

                            @error('ordered_quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection