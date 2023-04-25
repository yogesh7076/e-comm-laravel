@extends('master')
@section('content')
<div class="custom-product">
   <div class="row">
      <div class="clo-sm-10">
         <div class="trending-wrapper">
            <h2>Order List</h2>
            {{-- <a href="/odernow" class="btn btn-outline-success">Oder Now</a><br><br> --}}
            <div class="">
               @foreach ($data as $item)
               <?php
                    // print_r($item);
               ?>
               <div class="row searched-item cart-list-devider">
                  <div class="col-sm-3">
                     <a href="detail/{{ $item->id }}">
                     <img class="tredining-img" src="{{$item->gallery}}">
                     </a>
                  </div>
                  <div class="col-sm-3">
                     <div class="">
                        <h2>{{ $item->name}}</h2>
                        <h5>Delivery Status :-{{ $item->status }}</h5>
                        <h5>Payment Status  :-{{ $item->payment_status }}</h5>
                        <h5>Payment Method  :-{{ $item->payment_method }}</h5>
                        <h5>Delivery Address  :-{{ $item->address }}</h5>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     {{-- <a href="romovecart/{{ $item->cart_id }}" class="btn btn-warning">Remove From Cart </a> --}}
                  </div>
               </div>
               <!-- Add the closing tag here -->
               @endforeach
               {{-- <a href="/odernow" class="btn btn-outline-success">Oder Now</a><br><br> --}}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
