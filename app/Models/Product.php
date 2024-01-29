<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $image, $imageName,$imageUrl,$directory,$extension,$product;

    public static function newProduct($request)
    {
        if($request->file('image'))
        {
            self::$image           =$request->file('image');
            self::$extension       =self::$image->getClientOriginalExtension();
            self::$imageName       =time().'.'.self::$extension;
            self::$directory       ='upload/product-images/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl        =self::$directory.self::$imageName;
        }
        else
        {
            self::$imageUrl        ='upload/download (1).png';
        }

        self::$product                    =new Product();
        self::$product->category_id       =$request->category_id;
        self::$product->sub_category_id   =$request->sub_category_id;
        self::$product->brand_id          =$request->brand_id;
        self::$product->unit_id           =$request->unit_id;
        self::$product->name              =$request->name;
        self::$product->code              =$request->code;
        self::$product->stock_amount      =$request->stock_amount;
        self::$product->regular_price     =$request->regular_price;
        self::$product->selling_price     =$request->selling_price;
        self::$product->long_description  =$request->long_description;
        self::$product->short_description =$request->short_description;
        self::$product->image             =self::$imageUrl;
        self::$product->status            =$request->status;
        self::$product->save();
        return self::$product;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function otherImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public static function updateProduct($request, $id)
    {
        self::$product                    =Product::find($id);

        if($request->file('image'))
        {
            self::$image           =$request->file('image');
            self::$extension       =self::$image->getClientOriginalExtension();
            self::$imageName       =time().'.'.self::$extension;
            self::$directory       ='upload/product-images/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl        =self::$directory.self::$imageName;
        }
        else
        {
            self::$imageUrl        ='upload/download (1).png';
        }
        self::$product->category_id       =$request->category_id;
        self::$product->sub_category_id   =$request->sub_category_id;
        self::$product->brand_id          =$request->brand_id;
        self::$product->unit_id           =$request->unit_id;
        self::$product->name              =$request->name;
        self::$product->code              =$request->code;
        self::$product->stock_amount      =$request->stock_amount;
        self::$product->regular_price     =$request->regular_price;
        self::$product->selling_price     =$request->selling_price;
        self::$product->long_description  =$request->long_description;
        self::$product->short_description =$request->short_description;
        self::$product->image             =self::$imageUrl;
        self::$product->status            =$request->status;
        self::$product->save();
    }

    public static function deleteProduct($id)
    {
        self::$product          =Product::find($id);
        self::$product->delete();

    }



}
