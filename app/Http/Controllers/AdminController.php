<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Alluser;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class AdminController extends Controller
{
    public function ShowAllCustomer() {
        $all_customers = Customer::orderBy('id','DESC')->paginate(10);
        $all_emails = Alluser::where('role','=', 1)->orderBy('id','DESC')->get();
        return View('Admin.customers',['customers'=>$all_customers], ['emails' => $all_emails]);
    }
    public function ShowRecentCustomer() {
        // $all_customers = Customer::latest(5);
        $all_customers = Customer::latest()->take(5)->get();
        $all_emails = Alluser::where('role','=', 1)->orderBy('id','DESC')->get();
        $all_products = Product::latest()->take(5)->get();
        return View('Admin.dashboard',['customer'=>$all_customers], ['emails' => $all_emails])->with('products', $all_products);
    }
    public function AddProduct(Request $request){
    $request->validate([
        'name'=> ['required','regex:/^[\pL\s]+$/u'],
        'quantity' => ['required'],
        'price' => ['required'],
        'description' => ['required'],
        'img' => ['required','mimes:jpeg, png, jpg, gif, svg']
    ]);
        $new_product = new Product;
        $new_product->name = $request->name;
        $new_product->quantity = $request->quantity;
        $new_product->price = $request->price;
        $new_product->description = $request->description;
        $new_product->categore = $request->category;
        $product_img_name = time(). '.' . $request->img->extension();
        $product_img_path = "/products/" . $product_img_name;
        $request->img->move(public_path('products'), $product_img_name);
        $new_product->image = $product_img_path;

        $new_product->save();
        return redirect()->route('all.products');
    }

    public function ShowProduct() {
        $products = Product::orderBy('id','DESC')->paginate(4);
        return view('Admin.products', ['products'=>$products]);

    }

    // public function ShowRecentProducts() {
    //     $all_products = Product::latest()->take(10)->get();
    //     return view('Admin.dashboard', ['allproducts'=>$all_products]);
    // }

}
