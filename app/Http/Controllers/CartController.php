<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class CartController extends Controller
{
    public function add_to_cart($id){
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id];
        }  else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "image" => $product->image,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('message', 'Product add to cart successfully!');
    }

    public function add_to_wish($id){

        $product = Product::findOrFail($id);

        $wish = session()->get('wish', []);

        if(isset($wish[$id])) {
            $wish[$id];
        }  else {
            $wish[$id] = [
                "product_name" => $product->product_name,
                "image" => $product->image,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('wish', $wish);
        return redirect()->back()->with('message', 'Product add to Wishlist is successfully!');
    }
    }





