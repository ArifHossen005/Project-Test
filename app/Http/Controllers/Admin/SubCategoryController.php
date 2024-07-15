<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{


    private $subCategory;

    public  function create()

    {
        return view('backend.subCategory.add', [
            'categories' => Category::where('status', 1)->get()
        ]);
    }

    public function store(Request $request)
    {
        SubCategory::createSubCategory($request);
        return redirect()->route('subCategory.add')->with('success', ' Sub-Category Created Successfully');
    }

    public  function manage()

    {
        return view('backend.subCategory.manage', [
            'subCategories' => SubCategory::all()
        ]);
    }



    public function edit($id)
    {
        return view('backend.subCategory.edit', [
            'subCategory' => SubCategory::find($id),
            'categories' => Category::where('status', 1)->get(),
        ]);
    }


    public function update(Request $request, $id)
    {

        SubCategory::updateSubCategory($request, $id);
        return redirect()->route('subCategory.manage')->with('success', 'Sub-Category Update Successfully');
    }





    public function delete($id)
    {

        $this->subCategory = SubCategory::find($id);
        $this->subCategory->delete();
        return redirect()->route('subCategory.manage')->with('success', 'Sub-Category Delete Successfully');
    }
}
