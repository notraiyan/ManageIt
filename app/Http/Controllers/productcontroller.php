<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productcontroller extends Controller
{
    //
    function index()
    {
        $data= product::all();
        return view('product',['products'=>$data]);
    }
    function add()
    {
        return view('addproduct');
    }
    function search(Request $req)
    {
        $data= product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function edit($id)
    {
        $data= product::where('id',$id)->get();
        return view('editproduct',['products'=>$data]);
    }
}
