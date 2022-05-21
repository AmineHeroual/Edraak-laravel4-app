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


    public function main(){
      return view('home');
    }
    public function index()
    {
        //
        //$product = Product::all();
        $product = Product::latest()->paginate(10);
        return view('products.index', compact('product'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');

    }

    ////////////////////////////////////////
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);
        $product = Product::create($request->all());
        return redirect()->route('products.index')
        ->with('success','product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('products.edit', compact('product'));
    }

    /////////////////////////////////
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('success','product updated successfully');
    }

    //////////////////////////////////////
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('products.index')
        ->with('success','product removed successfully');
    }

    public function softDelete($id)
    {
        //
        $product = Product::find($id)->delete();
        ;
        return redirect()->route('products.index')
        ->with('success','product removed successfully');
    }

    public function trashedProducts()
    {
        //
        //$product = Product::all();
        // $product = Product::withTrashed()->latest()->paginate(4);
        $product = Product::onlyTrashed()->latest()->paginate(4);
        return view('products.trash', compact('product'));

    }

    public function backProduct($id)
    {
        //

        $product = Product::onlyTrashed()->where('id', $id)->first()->restore();
        return redirect()->route('products.index')
        ->with('success','product back successfully');

    }

    public function forEverDelete($id)
    {
        //

        $product = Product::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('product.trash')
        ->with('success','product deleted successfully');

    }


    public function search()
    {

        $search_text = $_GET['query'];
        $product = Product::where('name','LIKE', '%' . $search_text . "%")->get();

        return view('products.amine', compact('product'));

        //$search = request('search');
        //return view('products.welcome', ['search' => $search ]);
    }
}
