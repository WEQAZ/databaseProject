<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{

    public function showRegistCust()
    {
        return view('vip_register');
    }

    public function showRegistMem()
    {
        return view('memberRegist');
    }


    public function registerCust(Request $request)
    {
        // Create a new customer
        $customer = Customer::create([
            'username' => $request->username,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'age' => $request->age,
        ]);

        // Create a related member record
        $member = Member::create([
            'name' => $request->username, // Assuming username corresponds to the name field in Member
            'point' => 1000, // Set default point value or as per your requirements
            'customer_id' => $customer->id, // Associate member with the newly created customer
        ]);

        return redirect('/vip_register')->with('message', 'Registration successful!');
    }



}
