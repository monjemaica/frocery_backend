@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <a href="{{route('seller')}}" class="btn btn-secondary">Back</a>
            <h2> Orders </h2>    
                <table class="styled-table-wide">
                    <thead>
                      <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Supplier ID</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Item's Price</th>
                        <th scope="col">Shipping Price</th>
                        <th scope="col">Tax Price</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Is Paid</th>
                        <th scope="col">Paid Time</th>
                        <th scope="col">Is Delivered</th>
                        <th scope="col">Delivered Time</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                        <tr>
                            {{-- <th> </th> --}}
                            <td> {{ $item['user_id'] }} </td>
                            <td> {{ $item['spplr_id'] }} </td>
                            <td> {{ $item['paymentMethod'] }} </td>
                            <td> {{ $item['itemsPrice'] }} </td>
                            <td> {{ $item['shippingPrice'] }} </td>
                            <td> {{ $item['taxPrice'] }} </td>
                            <td> {{ $item['totalPrice'] }} </td>
                            <td> {{ $item['isPaid'] }} </td>
                            <td> {{ $item['paidAt'] }} </td>
                            <td> {{ $item['isDelivered'] }} </td>
                            <td> {{ $item['deliveredAt'] }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                
            {{-- </div> --}}
        {{-- </div>
    </div> --}}
</div>
@endsection