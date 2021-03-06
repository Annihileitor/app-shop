<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products')); //listado
    }
    public function create(){
        return view('admin.products.create'); //formulario
    }
    public function store(Request $request){
        //registrar producto
        
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save(); //Insert

        return redirect('/admin/products');
        
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product')); //formulario
    }
    public function update(Request $request, $id){
        //registrar producto
        
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save(); //Update

        return redirect('/admin/products');
        
    }

    public function destroy($id){
        //registrar producto
        
        $product = Product::find($id);
        $product->delete(); //Delete

        return back();
        
    }

    


}
