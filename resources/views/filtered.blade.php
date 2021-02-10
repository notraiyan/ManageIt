@extends('master')
@section("content")
<h3 style="color:grey;padding-left:15px;">Filter Products</h3>
<p style="background-color:grey;">.</p>
<form class="form-horizontal" action="filtered" method="post">
<div class="products">
    <div class="row">
        <div class="thumbnail col-sm-4 col-sm-offset-4">
            @csrf
            <div class="form-group col-md-6">
                <label>Min</label>
                <input type="number" class="form-control" name="min" placeholder="$0">
            </div>
            <div class="form-group col-md-6 text-right">
                <label>Max</label>
                <input type="number" class="form-control" name="max" placeholder="$1,0000">
            </div>
            <button type="submit" class="btn btn-primary col-sm-2 col-sm-offset-5">Filter</button>
        </div>
    </div>
</div>
</form>
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
                    <p><a href="/edit/{{$item['id']}}" class="btn btn-primary" role="button">Edit</a> <a href="#" class="btn btn-default" role="button">Delete</a></p>
                </div>
             </div>
         </div>
    </div>
    @endforeach
</div>
@endsection
