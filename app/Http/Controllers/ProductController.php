<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
        dd($request);
        $data = $request->input();
        dd($data);

    }
}
