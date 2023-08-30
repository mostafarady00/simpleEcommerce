<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=Order::all();
        return view("admin.orders.index",compact("orders"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.orders.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order=new Order;
        $order->order_name=$request->order_name;
        $order->order_title=$request->order_title;
        $order->order_price=$request->order_price;
        $order->order_desc=$request->order_desc;
        $order->save();
        return redirect("/orders");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order= Order::find($id);
        return view("admin.orders.view",compact("order"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order=Order::find($id);
        return view("admin.orders.edit",compact("order"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order=Order::find($id);
        $order->order_name=$request->order_name;
        $order->order_title=$request->order_title;
        $order->order_price=$request->order_price;
        $order->order_desc=$request->order_desc;
        $order->save();
        return redirect("/orders");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        order::destroy($id);
        return redirect("/orders");
    }
}
