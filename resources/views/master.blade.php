<!doctype html>
<html lang="en">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-comm Project</title>
  </head>
  <body>
    {{ View::make('header') }}
    @yield('content')

    {{ View::make('footer') }}
  </body>

  {{-- <script>
     $(document).ready(function() {
        $("button").click(function(){
           alert("all done")
        });

     });
  </script> --}}
  <style>
    .custom-login{
        height: 500px;
        padding-top:100px
    }
    img.slider-img{
        width: 100%;
        height: 600px !important;

    }
    .custom-product{
        height: 600PX ;
    }
    .slider-text{
        background-color: #24465454 !important;
    }
    .tredining-img{
        height: 100px;
    }
    .tredining-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper {
    width: 100%;
    margin: 20px;
}
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important;
    }
  </style>
</html>
