<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

use illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index(){
    $data = Product::all();

       return view('product',compact('data'));


    }

    public function detail($id){
       $data = Product::find($id);

       return view('detail', compact('data'));


    }

    public function search(Request $request){
        // dd($request);

        $data = Product::
        where('name' , 'like'  , '%'. $request->input('query').'%')
        ->get();
        return view('search',compact('data'));
        // dd($data);

    }

     function addToCart(Request $request){

        if($request->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
        }else
        {
            return redirect("/login");
        }
    }

    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cartList(){
        return "hello world";
    }


}
