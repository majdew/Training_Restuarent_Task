@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pay</div>

                <div class="card-body">
                    {!! Form::open( ['route' => 'payments.store' , 'files' => true])!!}
                    <div class="form-group row">
                        {!! Form::label('Paid', 'Pay' , ['class'=>"col-md-4 col-form-label text-md-right"]) !!}
                        <div class="col-md-6">
                            {!! Form::text('paid','' ,[ 'class'=>"form-control"]
                            )!!}
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Pay
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