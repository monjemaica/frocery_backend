<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, OrderItems $orderItems)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $orderItems->user_id = auth()->user()->id;
        $orderItems->name = $request->name;
        $orderItems->image = $request->image;
        $orderItems->price = $request->price;
        $orderItems->quantity = $request->quantity;
        $orderItems->save();
        //return response
        return response()->json($orderItems);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderItems  $orderItems
     * @return \Illuminate\Http\Response
     */
    public function show(OrderItems $orderItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderItems  $orderItems
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderItems $orderItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderItems  $orderItems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderItems $orderItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderItems  $orderItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderItems $orderItems)
    {
        //
    }
}
