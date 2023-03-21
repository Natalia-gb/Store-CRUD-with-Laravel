<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $productList = Product::all();
        return view('products/all', ['productList' => $productList]);
    }

    public function show($id){
        $product = Product::find($id);
        $data['product'] = $product;
        return view('products/show', $data);
    }

    public function create(){
        return view('products/form');
    }

    public function store(Request $r){
        Product::create($r->all());
        return redirect()->route('product.index');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products/form', array('product' => $product));
    }

    public function update($id, Request $r){
        $product = Product::find($id);
        $product->name = $r->name;
        $product->description = $r->description;
        $product->price = $r->price;
        $product->save();
        return redirect()->route('product.index');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
