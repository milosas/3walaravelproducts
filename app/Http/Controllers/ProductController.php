<?php

namespace App\Http\Controllers;
use App\Product;
use App\Company;
use App\Category;
use App\Http\Requests\StoreProductRequest;


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

      $this->authorize('create',Product::class);

      $companies = Company::all();
      $categories = Category::all();
      return view('products.create', compact('companies', 'categories'));
    }
    public function store(StoreProductRequest $request){

      // Product::create($request->all()); tas pats kas apacioje, bet visi laukai turi buti tokie patys
      // $this->validate($require, [    // validacija, kad praeitu iki submit
      //   'name' => 'required'
      // ]);

      // $request->validate([
      //   'name' => 'required',
      //   'description' => 'required',
      //   'photo' => 'required',
      //   'price' => 'required',
      //   'quantity' => 'required'
      //
      // ]);
      $this->authorize('create',Product::class);

      Product::create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'photo' => $request->input('photo'),
        'price' => $request->input('price'),
        'quantity' => $request->input('quantity'),
        'category_id' => $request->input('category_id'),
        'company_id' => $request->input('company_id')
      ]);

      return redirect()->route('products.page')->with('ZINUTE', 'PRODUKTAS ISSAUGOTAS');
    }
    public function delete(Product $product){

      $this->authorize('delete',Product::class);

      Product::findOrFail($product->id)->delete();
      return redirect()->route('products.page')->with('ZINUTE','Sekmingai istrinta');
    }

    public function edit(Product $product){
      $this->authorize('update',Product::class);

      $companies = Company::all();
      $categories = Company::all();
      return view('products.edit', compact ('product', 'companies', 'categories'))->with('ZINUTE','Sekmingas update!');
    }

public function update(StoreProductRequest $request,Product $product){

  $this->authorize('update',Product::class);


  $product->update([
    'name' => $request->input('name'),
    'description' => $request->input('description'),
    'photo' => $request->input('photo'),
    'price' => $request->input('price'),
    'quantity' => $request->input('quantity'),
    'category_id' => $request->input('category_id'),
    'company_id' => $request->input('company_id')
  ]);
  return redirect()->route('products.store')->with('ZINUTE','Sekmingas update!');
}
}
