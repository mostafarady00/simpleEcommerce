<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Categorie::all();
        return view("admin.categorie.index",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.categorie.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie=new Categorie;
        $categorie->categorie_name=$request->categorie_name;
        $categorie->categorie_type=$request->categorie_type;
        $categorie->categorie_price=$request->categorie_price;
        $categorie->save();
        return redirect("/categories");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie= Categorie::find($id);
        return view("admin.categorie.view",compact("categorie"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorie= Categorie::find($id);
        return view("admin.categorie.edit",compact("categorie"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categorie= Categorie::find($id);
        $categorie->categorie_name=$request->categorie_name;
        $categorie->categorie_type=$request->categorie_type;
        $categorie->categorie_price=$request->categorie_price;
        $categorie->save();
        return redirect("/categories");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categorie::destroy($id);
        return redirect("/categories");
    }
}
