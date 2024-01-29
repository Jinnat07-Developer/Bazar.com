<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class BazarController extends Controller
{
    public function index()
    {

        return view('website.home.index',[
            'categories'=>Category::all(),
            'products'  =>Product::orderBy('id','desc')->take(9)->get()
        ]);
    }

    public function category($id)
    {
        return view('website.category.index',[
            'products'  =>Product::where('category_id',$id)->orderBy('id','asc')->take(9)->get()
        ]);
    }

    public function subCategory($id)
    {
        return view('website.category.index',[
            'products'  =>Product::where('sub_category_id',$id)->orderBy('id','asc')->take(9)->get()
        ]);
    }

    public function detail($id)
    {
        return view('website.detail.index',['product'=>Product::find($id)]);
    }

}
