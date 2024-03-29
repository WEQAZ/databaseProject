<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function showVIPinfo()
    {
        $customer = Auth::user()->customer;
        $user = Auth::user();
        $isEmpty = DB::table('customers')->doesntExist();
        if ($isEmpty) {
            return view('vip_register');
        }

        $customer = DB::table('customers')->where('user_id', $user->id)->first();
        $member = DB::table('members')->where('user_id', $user->id)->first();
        $memberEmpty = DB::table('members')->doesntExist();
        if ($memberEmpty) {
            return view('vip_register');
        }
        return view('vip_member', compact('customer', 'member'));

    }


    public function registerCust(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;
        // Create a new customer
        $customer = Customer::create([
            'username' => $request->username,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'age' => $request->age,
            'user_id' => $userId,
        ]);

        // Create a related member record
        $member = Member::create([
            'name' => $request->username, // Assuming username corresponds to the name field in Member
            'point' => 1000, // Set default point value or as per your requirements
            'customer_id' => $customer->id, // Associate member with the newly created customer
            'user_id' => $user->id,
        ]);

        return redirect('/vip_register')->with('message', 'Registration successful!');
    }



}
