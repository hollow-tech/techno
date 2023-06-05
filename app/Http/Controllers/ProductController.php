<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function home()
{
    $products = Product::all();



    return view('products.home', compact('products'));
}



    public function page($id)
    {
        $product = Product::findOrFail($id);

        // $imagePath = storage_path('app/public/products/' . $product->image);
        // if (!Storage::exists($imagePath)) {
        // abort(404);
        // }
        // $file = Storage::get($imagePath);
        // $type = Storage::mimeType($imagePath);


        return view('products.page', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
