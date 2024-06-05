<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $category = Category::latest()->get();
        $produk = Product::with('categorys')->latest()->limit(3)->get();
        
        return view('welcome', compact('produk', 'category'));
    }
}
