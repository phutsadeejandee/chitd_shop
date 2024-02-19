<?php

namespace App\Http\Controllers;

use App\Models\ProductV2;
use Illuminate\Http\Request;

class ProductV2Controller extends Controller
{
    public function index()
    {
        $product_v2_s=ProductV2::orderBy('id','desc')->get();
        return view('welcome',compact('product_v2_s'));
    }

    public function create()
    {
        return view('create');
    }

    public function save(Request $request)
    {
        $title=$request->title;
        $url_img=$request->url_img;
        $detail=$request->detail;
        $price=$request->price;

        $validation=$request->validate([
            'title' => 'required',
            'url_img' => 'required',
            'detail' => 'required',
            'price' => 'required'
        ]);
        $data=ProductV2::create($validation);
        if($data){
            session()->flash('success','Product Add Successfully');
            return redirect(route('welcome'));
        }else{
            session()->flash('fail','Some problem occure');
            return redirect(route('create'));
        }
    }
}
