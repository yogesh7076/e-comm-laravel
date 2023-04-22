@extends('master')
@section('content')

<div class="custom-product">
    <div class="row">

        <!DOCTYPE html>
        <html lang="en">
        <head>
          <title>Bootstrap Example</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>
        <body>


          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($data as $item)
                <div class="item {{ $item['id']==1? 'active':'' }}">
                    <a href="detail/{{ $item['id'] }}">
                         <img class="slider-img" src="{{$item['gallery']}}" alt="Los Angeles">
                        <div class="carousel-caption">
                                     <h3>{{ $item['name'] }}</h3>
                                <p>{{ $item['description'] }}</p>
                        </div>
                    </a>
                </div>
                @endforeach


            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
            <div class="trending-wrapper">
                <h1>Trending Product</h1>
                <div class="">
                    @foreach ($data as $item)
                    <div class="tredining-item">
                        <a href="detail/{{ $item['id'] }}">
                        <img class="tredining-img" src="{{$item['gallery'],$item['name']}}">
                        <div class="carousel-caption">
                        </div>
                    </a>
                      </div>
                    @endforeach


                </div>
            </div>
        </body>
        </html>
            </div>
</div>

@endsection()

