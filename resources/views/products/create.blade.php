@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Product</div>
                @if(count($errors) > 0 )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="p-0 m-0" style="list-style: none;">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card-body">
                    {!! Form::open( ['route' => 'products.store' , 'files' => true])!!}
                    <div class="form-group row">
                        {!! Form::label('name', 'Name' , ['class'=>"col-md-4 col-form-label text-md-right"]) !!}
                        <div class="col-md-6">
                            {!! Form::text('name'," ",[ 'class'=>"form-control"] )!!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('quantity', 'Quantity' , ['class'=>"col-md-4 col-form-label text-md-right"]) !!}
                        <div class="col-md-6">
                            {!! Form::number('quantity', '1000' , ['class'=>"form-control"])
                            !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('price', 'Price' , ['class'=>"col-md-4 col-form-label text-md-right"]) !!}
                        <div class="col-md-6">
                            {!! Form::text('price'," ",[ 'class'=>"form-control"]) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('images', 'Images' , ['class'=>"col-md-4 col-form-label text-md-right"]) !!}
                        <div class="col-md-6">
                            {!! Form::file('images' , ['multiple'=>'true'])!!}
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Add Product
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