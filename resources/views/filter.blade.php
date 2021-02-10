@extends('master')
@section("content")
<h3 style="color:grey;padding-left:15px;">Filter Products</h3>
<p style="background-color:grey;">.</p>
<form class="form-horizontal" action="filtered" method="POST">
@csrf
<div class="products">
    <div class="row">
        <div class="thumbnail col-sm-4 col-sm-offset-4">
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
@endsection
