<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;

class OperationsOfProductController extends Controller
{
    
    public function create()
    {
        // $products = Product::with('category')->with('discount')->get();


        $categories=Category::with('products')->get();
        $discounts=Discount::with('products')->get();
        return view('admin.create', compact('categories','discounts'));
    }

    public function store(Request $request)
    {
        Product::create([
            // 'user_id'=> 1,  ///from Auth
            'category_id'=>$request->category_id,
            'discount_id'=>$request->discount_id,
            'name'=>$request->name,
            'peice'=>$request->price    ,
            'quantity'=>$request->quantity,
            'serial_number'=>$request->serial_number
        ]);
        return redirect()->route('product.index');
    }


    public function edit($id)

    {
        $discounts=Discount::all();
        $categories=Category::all();
        $products=Product::with('category')->with('discount')->findOrFail($id);
        return view('admin.edit',compact('discounts','categories','products'));

    }
   
    public function update(Request $request ,$id )
    {
        Product::findOrfail($id)->update([
            
            // 'user_id'=> $id,
            'category_id'=>$request->category_id,
            'discount_id'=>$request->discount_id,
            'name'=>$request->name,
            'peice'=>$request->peice,
            'quantity'=>$request->quantity,
            'serial_number'=>$request->serial_number
            ]);
            return redirect()->route('product.index');
    }
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('product.index');
    }
 
}
