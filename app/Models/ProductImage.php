<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    private static $image, $imageName,$imageUrl,$directory,$extension,$otherImages, $productImage;

      public static function newProductImages($otherImages, $id)
      {
          foreach($otherImages as $otherImage)
          {
              self::$extension       =$otherImage->getClientOriginalExtension();
              self::$imageName       =rand(10000,50000).'.'.self::$extension;
              self::$directory       ='upload/product--other-images/';
              $otherImage->move(self::$directory,self::$imageName);
              self::$imageUrl        =self::$directory.self::$imageName;

                 self::$productImage             =new ProductImage();
                 self::$productImage->product_id =$id;
                 self::$productImage->image      = self::$imageUrl ;
                 self::$productImage->save();

          }
      }

      public static function updateProductImage($otherImages, $id)
      {
              ProductImage::deleteProductImage($id);
              ProductImage::newProductImages($otherImages, $id);

      }

      public static function deleteProductImage($id)
      {
              self::$otherImages            =ProductImage::find($id);

              if(file_exists(self::$otherImages->image))
              {
                  unlink(self::$otherImages->image);
              }

              self::$otherImages ->delete();
      }
}
