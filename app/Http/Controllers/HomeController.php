<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search(Request $request) {
        $request->validate([
            'product_name' => 'required'
        ]);

        $results = Product::where('name','=', $request->product_name)->get();
        return view('Customer.results')->with('products', $results);

    }

    // public function filter(Request $request) {
    //     if($request->filter_value == "high") {
    //         // $results = Product::where('name','=', $request->product_name)->get();
    //         $results = Product::orderBy('price', 'DESC')->get();
    //         // return $results;
    //         // return view('Customer.results')->with('products', $results);
    //     }
    // }
}
