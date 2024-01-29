<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $product;

    public function index()
    {
        return view('website.cart.index');
    }

    public function addToCart(Request $request, $id)
    {
        $this->product  =Product::find($id);

        Cart::add([
            'id'      =>$this->product->id,
            'name'    =>$this->product->name,
            'qty'     =>$request->qty,
            'price'   =>$this->product->selling_price,
            'options' =>[
                'image'   =>$this->product->image,
                'category'=>$this->product->category->name,
                'brand'   =>$this->product->brand->name,
               ]]);
        return redirect('cart/show');
    }


}
