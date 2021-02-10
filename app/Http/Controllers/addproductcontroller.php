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
            $product->price=$req->price;
            $product->image=$req->image;
            $product->expdate=$req->expdate;
            $product->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    function editproduct(Request $req)
    {
        if($req->session()->has('user'))
        {
            //$product= product::where('id',$req->input('id'))->get();
            $product= product::find($req->input('id'));
            $product->name=$req->input('name');
            $product->price=$req->input('price');
            $product->image=$req->image;
            $product->expdate=$req->expdate;
            $product->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    
}
