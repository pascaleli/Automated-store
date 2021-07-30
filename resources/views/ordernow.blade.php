@extends('master') 
@section("content")

<div class="custom-product">

<div class="col-sm-10">

<div class="trending-wrapper">
  <h3>This is Your order list</h3>
   <a class = "btn btn-success" href="ordernow">Buy Now</a> <br/><br/>
   <!DOCTYPE html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px; 
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<table>
<tbody>
  <tr>
    <td>Amount</td>
    <td>$ {{$total}}</td>
  </tr>
  <tr>
    <td>Tax</td>
    <td>$ 0</td>
  </tr>
  <tr>
    <td>Delievery</td>
    <td>$ 10</td>
  </tr>
  <tr>
    <td>Total Amount</td>
    <td>$ {{ $total+10}}</td>
  </tr>
 </tbody>
</table><br>

<div>
<form action="/orderplace" method="POST">
    <div class="form-group">
      <textarea name="address" placeholder="Enter your address" class="form-control" id="email" placeholder="Enter email" name="email"></textarea>
    </div>
    <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
      <input type="radio" value="cash" name="payment"><span> Online Payment</span><br><br>
      <input type="radio" value="cash" name="payment"><span> EMI Payment</span><br><br>
      <input type="radio" value="cash" name="payment"><span> Payment on Delievery</span><br><br>

    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Order Now</button>
  </form>
</div>


</div>
</div>

</div>

@endsection