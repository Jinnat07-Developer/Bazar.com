<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Unit;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.index');
    }

    public function manage()
    {
        return view('admin.brand.manage',['brands'=>Brand::all()]);
    }

    public function store(Request $request)
    {
        Brand::newBrand($request);
        return redirect('brand/manage')->with('message','create new brand info successfully.');
    }

    public function edit($id)
    {
        return view('admin.brand.edit',['brand'=>Unit::find($id)]);
    }

    public function update(Request $request,$id)
    {
        Brand::updateBrand($request,$id);
        return back()->with('message','update brand info successfully.');

    }

    public function delete($id)
    {
        Brand::deleteBrand($id);
        return back()->with('message','delete brand info successfully.');
    }
}
