@extends('master')
@section('content')
<div class="custom-product">
   <div class="row">
      <div class="clo-sm-10">
         <div class="trending-wrapper">
            <h2>Cart List</h2>
            <div class="">
               @foreach ($data as $item)
               <div class="row searched-item cart-list-devider">
                  <div class="col-sm-3">
                     <a href="detail/{{ $item->id }}">
                        <img class="tredining-img" src="{{$item->gallery}}">
                     </a>
                  </div>

                  <div class="col-sm-3">


                       <div class="">
                          <h2>{{ $item->name}}</h2>
                          <h5>{{ $item->description }}</h5>
                       </div>

                 </div>

                 <div class="col-sm-3">

                          <button class="btn btn-warning">Remove From Cart </button>


                 </div>
               </div>
               <!-- Add the closing tag here -->
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
