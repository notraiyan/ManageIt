@extends('mister')
@section("content")

<div class="container">
    <p style="font-family: Brush Script MT; font-size: 200px; text-align: center;">ManageIt</p>
    <div class="row" style="padding-top:60px; ">
        <div class="col-sm-6 col-sm-offset-3">
            <form class="form-horizontal" action="login" method="POST">
                <div class="form-group">
                    @csrf
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                     </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection