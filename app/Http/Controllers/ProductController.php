<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products=Product::all();
      return view("admin.products.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view("admin.products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product=new Product;
        $product->img=$request->img;
        $product->title=$request->title;
        $product->desc=$request->desc;
        $product->price=$request->price;
        $product->save();
        return redirect("/products");
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product= product::find($id);
        return view("admin.products.view",compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=Product::find($id);
        return view("admin.products.edit",compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product= Product::find($id);
        $product->img=$request->img;
        $product->title=$request->title;
        $product->desc=$request->desc;
        $product->price=$request->price;
        $product->save();
        return redirect("/products");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::destroy($id);
        return redirect("/products");
    }
}
