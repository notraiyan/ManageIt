@extends('master')
@section("content")
<h3 style="color:grey;padding-left:15px;">Add Product</h3>
<p style="background-color:grey;">.</p>
<form class="form-horizontal" action="addproduct" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="form-group ">
                <label>Product Name</label>
            
                <input type="text" class="form-control" name="name" placeholder="Product Name">
            </div>
            <div class="form-group">
                <label>Price</label>
            
                <input type="number" class="form-control" name="price" placeholder="Price">
            </div>
            <div class="form-group">
                <label>Image Link</label>
            
                <input type="text" class="form-control" name="image" placeholder="Image Link">
            </div>
            <div class="form-group">
                <label>Expiry Date</label>
        
                <input type="text" class="form-control" name="expdate" placeholder="YYYY-MM-DD">
            </div>
            <button type="submit" class="btn btn-default col-sm-2 col-sm-offset-5">Add</button>
        </div>
    </div>
</form>
@endsection