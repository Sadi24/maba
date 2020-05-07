<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('products')->with('products' , Product::get());
    }

    public function show($id)
    {
        return view('product')->with('product' , Product::find($id));
    }

    public function about()
    {
        return view('about');
    }

    public function search(Request $request){
        $products = Product::where('name' , 'like' , '%'. $request->text .'%')->get();
        return view('_products')->with('products' , $products);
    }

}
