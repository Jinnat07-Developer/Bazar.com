<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    private static $image,$imageName,$imageUrl,$directory,$extension,$sub_Category;

    public static function newSubCategory($request)
    {
        self::$image                   =$request->file('image');
        self::$extension               = self::$image->getClientOriginalExtension();
        self::$imageName               =time().'.'.self::$extension;
        self::$directory               ='upload/sub-category-images/';
        self::$image->move( self::$directory,self::$imageName);
        self::$imageUrl                =self::$directory.self::$imageName;

        self::$sub_Category              =new SubCategory();
        self::$sub_Category->category_id =$request->category_id;
        self::$sub_Category->name        =$request->name;
        self::$sub_Category->description =$request->description;
        self::$sub_Category->image       =self::$imageUrl;
        self::$sub_Category->status      =$request->status;
        self::$sub_Category->save();
    }

    public  function category()
    {
       return $this->belongsTo(Category::class);
    }

    public static function updateSubCategory($request,$id)
    {
        self::$sub_Category              =SubCategory::find($id);

        if($request->file('image'))
        {
           if(file_exists(self::$sub_Category->image))
           {
               unlink(self::$sub_Category->image);
           }
            self::$image                   =$request->file('image');
            self::$extension               = self::$image->getClientOriginalExtension();
            self::$imageName               =time().'.'.self::$extension;
            self::$directory               ='upload/sub-category-images/';
            self::$image->move( self::$directory,self::$imageName);
            self::$imageUrl                =self::$directory.self::$imageName;
        }
        else
            {
                self::$imageUrl              =self::$sub_Category->image;
            }
            self::$sub_Category->category_id =$request->category_id;
            self::$sub_Category->name        =$request->name;
            self::$sub_Category->description =$request->description;
            self::$sub_Category->image       =self::$imageUrl;
            self::$sub_Category->status      =$request->status;
            self::$sub_Category->save();
    }

    public static function deleteSubCategory($id)
    {
        self::$sub_Category =SubCategory::find($id);
        self::$sub_Category->delete();
    }
}
