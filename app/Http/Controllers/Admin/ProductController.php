<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $product;

    public  function create()

    {
        return view('backend.product.add', [
            'categories'    => Category::where('status', 1)->get(),
            'subCategories' => SubCategory::where('status', 1)->get(),
        ]);
    }

    public function store(Request $request)
    {
        Product::createProduct($request);
        return redirect()->route('product.add')->with('success', ' Product Created Successfully');
    }

    public  function manage()

    {
        return view('backend.product.manage', [
            'products' => Product::all()
        ]);
    }



    public function edit($id)
    {
        return view('backend.product.edit', [
            'subCategory' => SubCategory::find($id),
            'categories' => Category::where('status', 1)->get(),
        ]);
    }


    public function update(Request $request, $id)
    {

        Product::updateProduct($request, $id);
        return redirect()->route('product.manage')->with('success', 'Product Update Successfully');
    }





    public function delete($id)
    {

        $this->product = Product::find($id);
        $this->product->delete();
        return redirect()->route('product.manage')->with('success', 'Product Delete Successfully');
    }
}
