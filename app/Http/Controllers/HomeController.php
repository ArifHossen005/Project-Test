<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    public function homePage()
    {
         $products = Product::with('category','subCategory')->get();
        return view('frontend.home',compact('products'));
    }
//
//    public function buyNow($id)
//    {
//        $product = Product::with('category', 'subCategory')->findOrFail($id);
//        return view('frontend.transactionModal', compact('product'));
//    }

    public function buyNow($id)
    {
        $product = Product::with('category', 'subCategory')->findOrFail($id);
        $transactionNumber = Str::uuid();
        return view('frontend.transactionModal', compact('product', 'transactionNumber'));
    }



}
