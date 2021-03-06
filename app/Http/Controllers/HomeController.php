<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function seller()
    {
        return view('seller/dashboard');
    }

    public function buyer()
    {
        return view('buyer/dashboard');
    }

    // public function viewOrders()
    // {
    //     return view('seller/viewOrders');
    // }
}
