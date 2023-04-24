@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{ $data['gallery'] }}" class="detail-img"  >
        </div>
        <div class="col-sm-6">
             <a href="/" class="ancer mt-5">
                Go Back
             </a><br>
             <h2>Name :-{{ $data['name'] }}</h2>
             <h3>Price :- {{ $data['price'] }}</h3>
             <h4>Category :- {{ $data['category'] }}</h4>
             <h5>Description :-{{ $data['description'] }}</h5>
             <br><br>

             <br><br>

             <form action="/add_to_cart" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$data['id'] }}">

                <button class="btn btn-success">Add to Cart</button>
             </form><br><br>

             <button class="btn btn-info">Buy Now</button>

        </div>

    </div>
</div>

@endsection()

