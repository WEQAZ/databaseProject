<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function add_cart(Request $request, $id)
    {
        $user = Auth::user()->Customer;
        $product = product::find($id);

        $cart = Cart::create([
            'product_id' => $product->id,
            'user_id' => $user->id,
            'pic' => $product->pic,
            'description' => $product->description,
            'quantity' => $request->quantity,
            'price' => $product->price,
            
        ]);
        // dd($user);
        // dd($product);
        return redirect()->back();
    }
}
