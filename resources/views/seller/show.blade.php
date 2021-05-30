
@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                <div class="card-body">
                    <a href="/products/{{$product->id}}/edit"> </a>
                    <a href="{{route('products.index')}}" class="btn btn-secondary">Back</a>
                    <div class="cart__like">
                        <div class="image">
                            <img src="{{ asset('/storage/image/'.$product->img) }}">
                        </div>
                        <div class="cart__details">
                        <div>
                        <br> Product Name: 
                        {{ $product->name }}  </div>
                        <div><br>Brand: {{ $product->brand }} </div>
                        <div><br>Category: {{ $product->category }} </div>
                        <div><br>Description: {{ $product->description }} </div>
                        <div><br> Price: {{ $product->price }}</div>
                        <div><br>Stock: {{ $product->countInStock }} </div>
                        <div><br>Created at: {{ $product->created_at }} </div>
                    </div>
            </div>
        </div>
    </div></br>
</div>

@endsection  