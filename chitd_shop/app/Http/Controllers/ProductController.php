<?php

namespace App\Http\Controllers;

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
        dd($request->input());
    }
}
