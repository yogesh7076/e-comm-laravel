@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-4">
        <a href="">Filter</a>
    </div>
    <div class="col-sm-4 offset-lg-4">
        <div class="trending-wrapper">
            <h4>Result for  Product</h4>
            <div class="">
                @foreach ($data as $item)
                <div class="searched-item">
                    <a href="detail/{{ $item['id'] }}">
                    <img class="tredining-img" src="{{$item['gallery']}}">

                    <div class="">
                        <h2>{{ $item['name'] }}</h2>
                        <h5>{{ $item['description'] }}</h5>
                    </div>
                </a>
                  </div>
                @endforeach


            </div>
        </div>

    </div>
</div>

@endsection()


