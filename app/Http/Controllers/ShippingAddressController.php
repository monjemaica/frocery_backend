<?php

namespace App\Http\Controllers;

use App\Models\ShippingAddress;
use Illuminate\Http\Request;

class ShippingAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ShippingAddress $ship)
    {
        dd($ship->id);
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
    public function store(Request $request, ShippingAddress $ship)
    {
        // Validation
        $request->validate([
            'fullName' => 'required',
            'street' => 'required',
            'barangay' => 'required',
            'city' => 'required',
            'mobileNumber' => 'required'
        ]);



        $ship->user_id = auth()->user()->id;
        $ship->fullName = $request->fullName;
        $ship->street = $request->street;
        $ship->barangay = $request->barangay;
        $ship->city = $request->city;
        $ship->mobileNumber = $request->mobileNumber;
        $ship->save();
        //return response
        return response()->json($ship);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingAddress  $shippingAddress
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingAddress $shippingAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingAddress  $shippingAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingAddress $shippingAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShippingAddress  $shippingAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShippingAddress $shippingAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingAddress  $shippingAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingAddress $shippingAddress)
    {
        //
    }
}
