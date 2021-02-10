@extends('master')
@section("content")
<h3 style="color:grey;padding-left:15px;">Edit Product</h3>
<p style="background-color:grey;">.</p>
<form class="form-horizontal" action="/editproduct" method="POST">
    @csrf
    @foreach($products as $item)
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="form-group ">
                <input type="hidden" class="form-control" name="id" placeholder="Product Id" value="{{$item['id']}}">
            </div>
            <div class="form-group ">
                <label>Product Name</label>
            
                <input type="text" class="form-control" name="name" placeholder="Product Name" value="{{$item['name']}}">
            </div>
            <div class="form-group">
                <label>Price</label>
            
                <input type="number" class="form-control" name="price" placeholder="Price" value="{{$item['price']}}">
            </div>
            <div class="form-group">
                <label>Image Link</label>
            
                <input type="text" class="form-control" name="image" placeholder="Image Link" value="{{$item['image']}}">
            </div>
            <div class="form-group">
                <label>Expiry Date</label>
        
                <input type="text" class="form-control" name="expdate" placeholder="YYYY-MM-DD" value="{{$item['expdate']}}">
            </div>
            <button type="submit" class="btn btn-default col-sm-2 col-sm-offset-5">Update</button>
        </div>
    </div>
    @endforeach
</form>
@endsection