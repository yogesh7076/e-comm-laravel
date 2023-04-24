<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
$total = ProductController::cartItem();
}
?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="">E-Comm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Orders</a>
            </li>
        </ul>
        <form action="/search" class="navbar-form navbar-left">
            <input class="form-control search-box" type="text" name="query" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <ul class="nav navbar-nav navbar-rigth">
            <li><a  href="#">Cart Item({{ $total }})</a></li>
             @if(Session::has('user'))
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">{{ Session::get('user')['name']}}
                         <span class="caret"></span></a>
                <ul class="dropdown-menu">
                         <li><a href="/logout">Logout</a></li>
                 </ul>
            </li>
            @else
            <li><a href="/login">Login</a></li>
            @endif
        </ul>
      </div>
    </div>
  </nav>
