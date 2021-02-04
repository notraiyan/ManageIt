@extends('master')
@section("content")
<h3 style="color:grey;padding-left:15px;">Searched Products</h3>
<p style="background-color:grey;">.</p>
<div class="products">
    @foreach($products as $item)
    <div class="row">
        <div class="col-sm-4 col-md-4 col-sm-offset-4">
            <div class="thumbnail">
                <img src="{{$item['image']}}" alt="...">
                <div class="caption">
                    <h3>{{$item['name']}}</h3>
                    <h4>Price:{{$item['price']}}tk</h4>
                    <h4>Expiry Date:{{$item['expdate']}}</h4>
                    <p><a href="#" class="btn btn-primary" role="button">Edit</a> <a href="#" class="btn btn-default" role="button">Delete</a></p>
                </div>
             </div>
         </div>
    </div>
    @endforeach
</div>
@endsection
