@extends('layouts.app')

@section('content')

  <div class="card3">
    <div class="card2">
      <div class="card-image2"></div>
        <div class="card-text2">
          <h2>View List of Orders</h2>
          <button class="btn btn-secondary" type="button" onclick="window.location='{{ url('viewOrders') }}' ">View Orders</button><!-- <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod deserunt eligendi dolor</p> -->
        </div>
      </div>

      <div class="card2">
        <div class="card-image2"></div>
          <div class="card-text2">
            <h2>View Products</h2>
            <button class="btn btn-secondary" style="margin-right:15px;" type="button" onclick="window.location='{{ url('products') }}'">Products</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

