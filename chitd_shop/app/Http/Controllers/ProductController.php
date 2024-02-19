<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('layout.create');
    }

    public function save(Request $request)
    {
        $title=$request->title;
        $img=$request->img;
        $detail=$request->detail;
        $price=$request->price;

        $validation=$request->validate([
            'title' => 'required',
            'img' => 'required',
            'detail' => 'required',
            'price' => 'required'
        ]);
        $data=Product::create($validation);
        if($data){
            session()->flash('success', 'Product Add Successfully');
            return redirect(route('welcome'));
        }else{
            session()->flash('error', 'Some problem occure');
            return redirect(url('/create'));
        }

    }
}
