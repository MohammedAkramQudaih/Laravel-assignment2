<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ReadProductController extends Controller
{
    public function index()
    {
        $products=Product::with('category')->with('discount')->get();
      
        return view('admin.showProducts',compact('products'));
    }
}
