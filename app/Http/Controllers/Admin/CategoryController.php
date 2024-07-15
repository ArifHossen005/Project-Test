<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;

    public  function create()

    {
        return view('backend.category.add');
    }

    public function store(Request $request)
    {
        Category::createCategory($request);
        return redirect()->route('category.add')->with('success', 'Category and Sub-Category Created Successfully');
    }

    public  function manage()

    {
        return view('backend.category.manage',[
            'categories' =>Category::all()
        ]);
    }

    public function edit($id){

        $this->category=Category::find($id);
        return view('backend.category.edit',['category'=>$this->category]);
    }

    public function update(Request $request,$id){

        Category::updateCategory($request,$id);
        return redirect()->route('category.manage')->with('success', 'Category and Sub-Category Update Successfully');
    }

    public function delete($id){

        $this->category =Category::find($id);
        $this->category->delete();
        return redirect()->route('category.manage')->with('success', 'Category and Sub-Category Delete Successfully');
    }


}
