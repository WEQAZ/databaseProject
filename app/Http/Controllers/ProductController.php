<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        return view('addProduct');
    }

    public function store(Request $request)
    {
        $product = new Product;

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');

        if ($request->hasFile('pic')) {

            $file = $request->file('pic');
            $extension = $file->getClientOriginalExtension(); // Corrected method name
            $filename = time() . '.' . $extension;

            $file->move('upload/product/', $filename);
            $product->pic = $filename;
        }

        $product->save();

        return redirect()->back()->with('status', 'Product image Added Successfully');
    }

}
