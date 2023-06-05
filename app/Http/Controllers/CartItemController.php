<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function addToCart(Request $request)
{
    $productId = $request->product_id;
    $quantity = $request->quantity;
    $price = $request->price;
    $discount = $request->discount;
    $image = $request->image;

    // Check if the item already exists in the cart
    $cartItem = CartItem::where('product_id', $productId)->first();

    if ($cartItem) {
        // If the item exists, update the quantity and price
        $cartItem->quantity += $quantity;
        $cartItem->discount += $discount;
        $cartItem->image = $image;
        $cartItem->save();
    } else {
        // If the item doesn't exist, create a new cart item
        $cartItem = new CartItem;
        $cartItem->product_id = $productId;
        $cartItem->title = $request->title;
        $cartItem->quantity = $quantity;
        $cartItem->price = $price; // Set the initial price here
        $cartItem->discount = $discount;
        $cartItem->image = $image;

        $cartItem->save();
    }

    return redirect()->route('cartItems');
}

    // public function showCart()
    // {
    //     $cartItems = CartItem::all();


    //     $totalPrices = $cartItems->sum('price');


    //     $totalPrice = number_format($totalPrices, 3, '.', '.');



    //     return view('products.cart', compact('cartItems', 'totalPrice'));
    // }
    public function showCart()
{
    $cartItems = CartItem::all();

    $totalPrice = 0;

    foreach ($cartItems as $item) {
        $itemTotalPrice = $item->price * $item->quantity;
        $totalPrice += $itemTotalPrice;
    }

    $formattedTotalPrice = number_format($totalPrice, 3, '.', '.');

    return view('products.cart', compact('cartItems', 'formattedTotalPrice'));
}

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


    public function increaseCartItem($id)
    {
        $cartItem = CartItem::findOrFail($id);


        $cartItem->quantity += 1;
        $cartItem->save();

        return redirect()->route('cartItems'); // Replace 'cart' with your actual cart route name
    }

    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartItem $cartItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

     public function deleteCartItem($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cartItems')->with('success', 'Item removed from cart successfully');
    }
    public function destroy(CartItem $cartItem)
    {
        //
    }
}
