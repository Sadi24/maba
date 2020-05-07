<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Gate;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('accessAdmin')){
            return redirect ('home');
        }
        return view('admin.products')->with('products' , Product::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('accessAdmin')){
            return redirect ('home');
        }
        return view("admin.addProduct");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path =   $request->image->store('products');
        $product = new Product();
        $product->name = $request->name;
        $product->title = $request->title;
        $product->subTitle = $request->subTitle;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $path;
        $product->save();

        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)

    {
        if(Gate::denies('accessAdmin')){
            return redirect ('home');
        }
        return view("admin.editProduct")->with("product", $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $product->name = $request->name;
        $product->title = $request->title;
        $product->subTitle = $request->subTitle;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->save();

        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    // public function destroy(Product $product)
    // {
    //     $product->delete();
    //     return redirect('/admin/products');
    // }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/admin/products');
    }

    public function pdf(){
       $pdf = PDF::loadview('pdf.products' , ['products' => Product::get()]);
       return $pdf->download('products.pdf');
    }
}
