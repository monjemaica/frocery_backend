<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        $user = User::find(Auth::id());
        // $order->user_id = auth()->user()->id;
        // $order->shipAddrs_id = $user->ship()->id;
        // dd($order);

        // $users = User::all();
        // $users_addresses = User::with('shippingAddress')->get();
        // $users_addresses_orders = User::with(['shippingAddress', 'orders'])->get();
        // dd($users_addresses_orders);

        $user = User::find(Auth::id());
        $order->user_id = auth()->user()->id;
        $shippingAddress = DB::table('shipping_address')->select('shipping_address.id')->where('user_id', '=', $order->user_id);
        $order->shipAddrs_id = $user->$shippingAddress;
        // $order->pay_id = $paymentResult->id;
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
    public function store(Request $request, Order $order, ShippingAddress $shippingAddress, PaymentResult $paymentResult)
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

        // $order->user_id = auth()->user()->id;
        // // $shippingAddress = DB::table('shipping_address')->select('shipping_address.id')->where('user_id', '=', $order->user_id);
        // $order->paymentMethod = $request->paymentMethod;
        // $order->itemsPrice = $request->itemsPrice;
        // $order->shippingPrice = $request->shippingPrice;
        // $order->taxPrice = $request->taxPrice;
        // $order->totalPrice = $request->totalPrice;
        // $order->isPaid = $request->isPaid;
        // $order->paidAt = $request->paidAt;
        // $order->isDelivered = $request->isDelivered;
        // $order->deliveredAt = $request->deliveredAt;
        // $order->save();
        // dd($order);

        $input = new Order();
        $input->fill($request->all());
        $input->orderItems_id = $request->orderItems_id;
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
    public function show(Order $order)
    {
        //
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
