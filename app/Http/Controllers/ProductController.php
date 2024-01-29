<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;

    public function index()
    {
        return view('admin.product.index',[
            'categories'    =>Category::all(),
            'sub_categories'=>SubCategory::all(),
            'units'         =>Unit::all(),
            'brands'        =>Brand::all(),
        ]);
    }

    private $categoryId,$subcategories;

    public function getSubCategoryByCategory()
    {
        $this->categoryId        =$_GET['id'];
        $this->subcategories     =SubCategory::where('category_id', $this->categoryId)->get();
        return response()->json($this->subcategories);
    }

    public function manage()
    {
        return view('admin.product.manage',['products'=>Product::all()]);
    }

    public function edit($id)
    {
        return view('admin.product.edit',[
            'product'         =>Product::find($id),
            'categories'      =>Category::all(),
            'sub_categories'  =>SubCategory::all(),
            'brands'          =>Brand::all(),
            'units'           =>Unit::all(),

        ]);
    }

    public function detail($id)
    {
        return view('admin.product.detail',['product'=>Product::find($id)]);
    }

    public function store(Request $request)
    {
        $this->product      = Product::newProduct($request);
        ProductImage::newProductImages($request->other_image,$this->product->id);
        return back()->with('message','Product info save.....');
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request,$id);
        ProductImage::updateProductImage($otherImages,$id);
        return back()->with('message','Product info updated..');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        ProductImage::deleteProductImage($id);
        return back()->with('message','Product info deleted..');
    }


}
