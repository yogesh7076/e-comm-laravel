@extends('master')
@section('content')
<div class=" container custom-product">
    <div class="col-sm-10">
        <table class="table table-striped">
            <tbody>
              <tr>
                <td>price</td>
                <td>{{ $total }}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>0 Rupees</td>
              </tr>
              <tr>
                <td>Delivry</td>
                <td>100</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>{{ $total+100 }}</td>
              </tr>
            </tbody>
          </table><br><br><br><br>
          <form action="orderplace" method="post">
            @csrf
            <div class="form-group">
              <textarea name="address"  class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Payment Method</label>
              <p><input type="radio" value="cash" name="payment"> <span>Online Payment</span>
              </p>
              <p><input type="radio" value="cash" name="payment"> <span>EMI Payment</span>
              </p>
              <p><input type="radio" value="cash"  name="payment"> <span>Payment on Delivery</span>
              </p>
            </div>

            <button type="submit" class="btn btn-outline-warning">Oder Now</button>
          </form>
    </div>
</div>
@endsection
