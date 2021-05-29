@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                <div class="card-body">
                    <a  href="/products/{{$product->id}}/edit" class="btn btn-warning">Edit</a> 
                        <br>
                        Name: {{ $product->name }} <br>
                        Brand: {{ $product->brand }} <br>
                        Image: <br>
                            <img src="{{ asset('/storage/image/'.$product->img) }}"> <br>
                        Category: {{ $product->category }} <br> 
                        Description: {{ $product->description }} <br>  
                        Price: {{ $product->price }} <br> 
                        Stock: {{ $product->countInStock }} <br> 
                        Created at: {{ $product->created_at }}             
                </div>
            </div>
        </div>
    </div>
</div>

@endsection  