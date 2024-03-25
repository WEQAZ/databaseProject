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
        // $user = Auth::user()->Customer;
        $user = Auth::user();
        $product = product::find($id);

        $cart = Cart::create([
            'product_id' => $product->id,
            'user_id' => $user->id,
            'pic' => $product->pic,
            'product_name' => $product->name,
            'description' => $product->description,
            'quantity' => $request->quantity,
            'price' => $product->price,
            
        ]);
        return redirect()->back();
    }

    public function delete_cart($id)
    {    
        $cart = Cart::find($id);
        $cart->delete();
        
        return redirect()->back();
    }

    

    public function show_cart(){
        $id = Auth::user()->id;
        $cart = cart::where('user_id', '=', $id)->get();
        return view('Cart',compact('cart'));
    }
}
