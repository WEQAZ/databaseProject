<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class SummaryController extends Controller
{
    public function add_address_payment(Request $request)
    {
        // $customer = Auth::user()->customer;
        $user = Auth::user();
        $cartItems = Cart::where('user_id', $user->id)->get();
        
        // Calculate the total quantity
        $total_quantity = 0;
        foreach ($cartItems as $item) {
            $total_quantity += $item->quantity;
        }

        // Calculate the total amount
        $total_amount = 0;
        foreach ($cartItems as $item) {
            $total_amount += $item->price;
        }

        $order = Order::create([
            'customer_id' => $user->id,
            'total_quantity' => $total_quantity,
            'quantity'=> $cartItems->quantity ,
            'name' => $cartItems->product_name,
            'price' => $cartItems->price,
            'address' => $request->address,
            'province' => $request->province,
            'country' => $request->country,
            'postalcode' => $request->postalcode,
            'phonenumber' => $request->phonenumber,
        ]);

        // Get the newly created order's ID
        $orderId = $order->id;

        
        return redirect()->back();
    }

    public function show_summary()
    {
        
        $user = Auth::user();
      
        $orders = Order::where('customer_id', $user->id)->first();
        
        $carts = Order::where('customer_id',$user->id)->get();
        if ($carts->isEmpty()) {
           
            return redirect()->route('cart');  
        }
        return view('Summary', compact('orders', 'carts'));
    }

    public function post_summary(Request $request)
    {
        $user = Auth::user();
        $userid=$user->id; 

        $data = Cart::where('user_id', $userid)->get();

        foreach($data as $data){
            $order = new Order;
            $order->customer_id =$data->user_id;
            $order->name = $data->product_name;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->address = $request->address;
            $order->province = $request->province;
            $order->country = $request->country;
            $order->postalcode = $request->postalcode;
            $order->phonenumber = $request->phonenumber;
            $order->payment_method = $request->payment_method;
            $order -> save();

            $cart_id = $data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
        }
        
        

        return redirect()->back()->with('message','We received your order');
    }

   
}
