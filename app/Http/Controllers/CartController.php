<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    public function add_cart(Request $request, $id)
    {
        $user = Auth::user()->Customer;
        $product = product::find($id);
        // dd($user);
        dd($product);
        return redirect()->back();
    }
}
