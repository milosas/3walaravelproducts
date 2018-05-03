<?php

namespace App\Http\Controllers;
use App\Product;
use App\Company;
use App\Category;
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
    public function show(Product $product){ // atvaizduoja viena produkta //
      // $product = Product::find();
      return view('products.singleproduct', compact('product'));
    }
    public function addproduct(){
      $companies = Company::all();
      $categories = Category::all();
      return view('products.create', compact('companies', 'categories'));
    }

}
