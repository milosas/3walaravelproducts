<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function main(){
      $products = Product::all()->take(3);
      return view('welcome', compact('products'));
    }
    public function allproducts(){
      $products = Product::all();
      return view('products.products', compact('products'));
    }
    public function oneproduct(){
      $products = Product::all()->take(1);
      return view('products.products', compact('products'));
    }
    public function show($id){ // atvaizduoja viena produkta //
      $product = Product::find($id);
      return view('products.singleproduct', compact('product'));
    }
    public function addproduct(){
      return view('products.create');
    }
}
