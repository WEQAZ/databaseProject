<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
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
            'address' => $request->address,
            'province' => $request->province,
            'country' => $request->country,
            'postalcode' => $request->postalcode,
            'phonenumber' => $request->phonenumber,
        ]);

        // Get the newly created order's ID
        $orderId = $order->id;

        Payment::create([
            'order_id' => $orderId, // Use the retrieved ID
            'payment_method' => $request->payment_method,
            'amount' => $total_amount,
        ]);

        return redirect()->back();
    }

    public function show_summary()
    {
        $user = Auth::user();
        $orders = Order::where('customer_id', $user->id)->first();
        $payments = Payment::whereIn('order_id', $orders->pluck('id'))->get();
        $carts = Cart::where('user_id', $user->id)->get();

        return view('Summary', compact('orders', 'payments', 'carts'));
    }

   
}
