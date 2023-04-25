<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


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
       $userId= Session::get('user')['id'];

     $data =  DB::table('cart')
       ->join('products','cart.product_id','products.id')
       ->select('products.*','cart.id as cart_id')
       ->where('cart.user_id', $userId)
       ->get();

       return view('cartlist',compact('data'));



    }

     public function romoveCart($id){
        // dd($catr);
         Cart::destroy($id);

    //   dd($catr);


        return redirect('cartlist');
    }
    function orderNow()
    {
        // Get the user ID from the session
        $userId = Session::get('user')['id'];

        // Query the cart and products table to calculate the total sum of prices
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        // Return the total sum
        return  view("order", compact('total')); ;
    }

    function orderPlace(Request $request){
        $userId= Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach ($allCart as $cart){
            $order = New Order;

            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$request->address;
            $order->status="pending";
            $order->payment_method=$request->payment;
            $order->payment_status="pending";
            $order->save();

        }

        $allCart=Cart::where('user_id',$userId)->delete();
        return redirect('/');

        //  $request->input();
    }
    function myOrder(){
        $userId= Session::get('user')['id'];

            $data =  DB::table('orders')
          ->join('products','orders.product_id','products.id')
          ->where('orders.user_id',$userId)
          ->get();

          return view('myorder',compact('data'));
    }




}
