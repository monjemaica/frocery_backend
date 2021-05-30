@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
        
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <a class="btn button btn-info" href="/products/create">Create Product</a>
            <br><br>
            <div class="card">  
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> Image </th>
                                <th> Brand </th>
                                <th> Category </th>
                                <th> Description </th>
                                <th> Price </th>
                                <th> Stock </th>
                                <th> Date Created </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $products)
                                <tr>
                                    <td> {{ $products->id }} </td>
                                    <td> {{ $products->name }} </td>
                                    <td> <img src="{{ asset('/storage/image/'.$products->img) }}"> </td>
                                    <td> {{ $products->brand }} </td>
                                    <td> {{ $products->category }} </td>
                                    <td> {{ $products->description }} </td>
                                    <td> {{ $products->price }} </td>
                                    <td> {{ $products->countInStock }} </td>
                                    <td> {{ $products->created_at }} </td>
                                    <td> <a  href="/products/{{$products->id}}" class="btn btn-info"> View </a> </td>
                                    <td> <a  href="/products/{{$products->id}}/edit" class="btn btn-warning"> Edit </a> </td>
                                    <td> 
                                    <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete </button>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection      