<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\product;

class addproductcontroller extends Controller
{
    //
    function addproduct(Request $req)
    {
        if($req->session()->has('user'))
        {
            $product= new product;
            $product->name=$req->name;
            $product->price=intval($req->price);
            $product->image=$req->image;
            $product->expdate=$req->expdate;
            $product->save();
            return redirect('login');
        }
        else{
            return redirect('/');
        }
    }
}
