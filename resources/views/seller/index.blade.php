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
            <br> <br> <br>
            <a class="btn btn-success float-right" href="/products/create">Create Product</a>
            <br><br>
            <!-- <div class="card">  
                <div class="card-body"> -->
                    <table class="styled-table-wide">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> Image </th>
                                <th> Brand </th>
                                <th> Category </th>
                                <!-- <th> Description </th> -->
                                <th> Price </th>
                                <th> Stock </th>
                                <th> Date Created </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $products)
                                <tr>
                                    <td> {{ $products->id }} </td>
                                    <td><b> {{ $products->name }} </b></td>
                                    <td> <img src="{{ asset('/storage/image/'.$products->img) }}" class= "cart-img"> </td>
                                    <td> {{ $products->brand }} </td>
                                    <td> {{ $products->category }} </td>
                                    <!-- <td> {{ $products->description }} </td> -->
                                    <td> {{ $products->price }} </td>
                                    <td> {{ $products->countInStock }} </td>
                                    <td> {{ $products->created_at }} </td>
                                    <td> <a  href="/products/{{$products->id}}" class="btn btn-info"> View </a> </td>
                                    <td> <a  href="/products/{{$products->id}}/edit" class="btn btn-primary"> Edit </a> </td>
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
                </div></div>
    </div>
</div> 
@endsection      