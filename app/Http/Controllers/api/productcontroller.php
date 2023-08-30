<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class productcontroller extends Controller
{
public function index()
{
   $products=Product::all();
  return $products;
}

public function store(Request $request)
{
    $product=new Product;
    $product->img=$request->img;
    $product->title=$request->title;
    $product->desc=$request->desc;
    $product->price=$request->price;
    $product->save();

}
public function show(string $id)
{
    $product= product::find($id);
    return view("admin.products.view",compact("product"));
}
public function update(Request $request, string $id)
    {
        $product= Product::find($id);
        $product->img=$request->img;
        $product->title=$request->title;
        $product->desc=$request->desc;
        $product->price=$request->price;
        $product->save();
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::destroy($id);
        return "delete";
    }
}
