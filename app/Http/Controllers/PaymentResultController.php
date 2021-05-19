<?php

namespace App\Http\Controllers;

use App\Models\PaymentResult;
use Illuminate\Http\Request;

class PaymentResultController extends Controller
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
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'status' => 'required',
            'emailAddress' => 'required'
        ]);

        $input = new PaymentResult();
        $input->fill($request->all());
        $input->user_id = auth()->user()->id;
        $input->save();
        //return response
        return response()->json($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentResult  $PaymentResult
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentResult $PaymentResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentResult  $PaymentResult
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentResult $PaymentResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentResult  $PaymentResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentResult $PaymentResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentResult  $PaymentResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentResult $PaymentResult)
    {
        //
    }
}
