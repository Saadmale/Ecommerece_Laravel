<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AddProduct;
use App\Models\Product;

class MainController extends Controller
{
    public function mylocation(){
        return view('home.location');
    }
    public function category(){
        return view('home.addcategory');
    }
    public function store(Request $request){
     $request->validate([
        'title' => 'required',
        'description' => 'required',
        'quantity' => 'required',
        'price' => 'required',
        'image' => 'required:mimes:png,jpg,jpeg,svg'
     ]);

     $data = new AddProduct;

     $data->title = $request->title;
     $data->description = $request->description;
     $data->quantity = $request->quantity;
     $data->price = $request->price;
     $image = $request->image;

     $imagename = time().'.'.$image->getClientOriginalName();
     $request->image->move('public/image', $imagename);

     $data->image = $imagename;

     $data->save();
     return redirect()->route('myorder')->with('message'.'Your Product is Successfully Created');

    }

    public function delete_product($id){

        $data = AddProduct::find($id);
        $data->delete();
        return redirect()->back()->with('message','Your Product has been deleted!');

    }
}
