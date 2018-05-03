<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){ // atvaizduoti viska ekrane {SHOW- atvaizduoti 1} //
    $category = Category::all();
    return view ('categories.index', compact('category'));
    }
}
