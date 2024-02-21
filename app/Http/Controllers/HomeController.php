<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\AddProduct;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home.index');
    }

    public function location()
    {
        return view('home.location');
    }

    public function myorder()
    {
        $data = AddProduct::all();
        return view('home.myorder',compact('data'));
    }
    public function cart(){
        return view('home.cart');
    }
    public function checkout(){
        return view('home.checkout');
    }
    public function wish(){
        return view('home.wish');
    }

    public function paymentmethod(Request $request){

        $payment = session()->get('payment');

        $request->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'mobilenumber' => 'required',
            'cardnumber' => 'required',
            'expirydate' => 'required',
            'code' => 'required',
        ]);

        $data = new Payment;

        $data->first = $request->first;
        $data->last = $request->last;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->mobilenumber = $request->mobilenumber;
        $data->cardnumber = $request->cardnumber;
        $data->expirydate = $request->expirydate;
        $data->code = $request->code;

        $data->save();
        session()->put('payment', $payment);
        return redirect()->back()->with('message', 'Your Orders Successfully Checkout Thank you!');

    }

}


