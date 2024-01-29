<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class Sub_CategoryController extends Controller
{
    public function index()
    {
        return view('admin.sub_category.index',['categories'=>Category::all()]);
    }

    public function manage()
    {
        return view('admin.sub_category.manage',['sub_categories'=>SubCategory::all()]);
    }

    public function store(Request $request)
    {
        SubCategory::newSubCategory($request);
        return redirect('/sub-category/manage')->with('message','create new sub_category successfully.');
    }

    public function edit($id)
    {
        return view('admin.sub_category.edit',[
            'sub_category'=>SubCategory::find($id),
            'categories'=>Category::all(),
        ]);
    }

    public function update(Request $request ,$id)
    {
        SubCategory::updateSubCategory($request,$id);
        return back()->with('message','update successful.');
    }

    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return back()->with('message','deleted successful.......');
    }





}
