@extends('layouts.app')

@section('content')

<div class="container">

    <button class="btn btn-secondary float-right" type="button" onclick="window.location='{{ url('viewOrders') }}' ">View Orders</button>
    <button class="btn btn-secondary float-right" style="margin-right:15px;" type="button" onclick="window.location='{{ url('productIndex') }}'">Products</button>

    <br>
    
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">    
                <div class="card-header">{{ __('SELLER PAGEEEEEE') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
