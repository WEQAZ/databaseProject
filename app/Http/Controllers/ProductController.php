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

    public function fetch()
    {
        $productAll = Product::all();
        return view('productPage', compact('productAll'));
    }

    public function fetchPublic()
    {
        $productAll = Product::all();
        return view('welcome', compact('productAll'));
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
            $extension = $file->getClientOriginalExtension(); 
            $filename = time() . '.' . $extension;

            $file->move('product_data/images/', $filename);
            $product->pic = $filename;
        }

        $product->save();

        return redirect()->back()->with('status', 'Product image Added Successfully');
    }

}
