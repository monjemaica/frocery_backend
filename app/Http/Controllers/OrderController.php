<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orders;
use App\Models\PaymentResult;
use App\Models\ShippingAddress;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Order $order, ShippingAddress $ship)
    {
        $order->user_id = auth()->user()->id;
        $order->paymentMethod = $request->paymentMethod;
        $order->itemsPrice = $request->itemsPrice;
        $order->shippingPrice = $request->shippingPrice;
        $order->taxPrice = $request->taxPrice;
        $order->totalPrice = $request->totalPrice;
        $order->isPaid = $request->isPaid;
        $order->paidAt = $request->paidAt;
        $order->isDelivered = $request->isDelivered;
        $order->deliveredAt = $request->deliveredAt;
        $order->save();
        dd($order);
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
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'paymentMethod' => 'required',
            'itemsPrice' => 'required',
            'shippingPrice' => 'required',
            'taxPrice' => 'required',
            'totalPrice' => 'required',
            'isPaid' => 'required',
            'paidAt' => 'required',
            'isDelivered' => 'required',
            'deliveredAt' => 'required'
        ]);

        $input = new Order();
        $input->fill($request->all());
        $input->user_id = auth()->user()->id;
        $input->save();


        //return response
        return response()->json($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */

    public function show() //(Order $order)
    {
        $data = Orders::all();
        return view('seller/viewOrders', ['orders'=>$data]);
        
    }

    public function showUserOrders($user_id)
    {
        $orders = Order::where('user_id', '=', $user_id)->get();
        return response()->json($orders);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
