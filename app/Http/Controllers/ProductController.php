<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('seller.dashboard', compact('product'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        //route to blade
        return view('seller.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
    //     // Validation
        $request->validate([
            'name' => 'required',
            'img' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'countInStock' => 'required'
        ]);
        
        if($request->hasFile('img')){

            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('img')->storeAs('public/image', $fileNameToStore);
        } else{
            $fileNameToStore = '';
        }

        
        // dd($request);
        $product = new Product();
        $product->fill($request->all());
        $product->img = $fileNameToStore;
        $product->save();

        //return response
        return redirect('/products');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Product $product)
    {
        $product = Product::find($product->id);
        return view('seller.show', compact('product'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('seller.edit', compact('product'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        // $product->img = $request->img;
        $product->brand = $request->brand;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->countInStock = $request->countInStock;
        $product->save();
        
        return redirect('/products');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
