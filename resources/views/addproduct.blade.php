@extends('master')
@section("content")
<h3 style="color:grey;padding-left:15px;">Add Product</h3>
<p style="background-color:grey;">.</p>
<form>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
  <div class="form-group ">
    <label>Product Name</label>
    <input type="text" class="form-control" id="name" placeholder="Product Name">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" id="price" placeholder="Price">
  </div>
  <div class="form-group">
    <label>Image Link</label>
    <input type="text" class="form-control" id="image" placeholder="Image Link">
  </div>
  <div class="form-group">
    <label>Expiry Date</label>
    <input type="text" class="form-control" id="expdate" placeholder="YYYY-MM-DD">
  </div>
  <button type="submit" class="btn btn-default col-sm-2 col-sm-offset-5">Add</button>
  </div>
  </div>
</form>
@endsection