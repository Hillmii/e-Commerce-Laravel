<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $limit = Product::with('categorys')->limit(5)->get();
        $product = Product::with('categorys')->paginate(15);
        $category = Category::latest()->get();
        
        return view('page.semuaProduk', compact('product', 'limit', 'category'));
    }
    
    public function category($slug){
        $category = Category::latest()->get();
        $name = strtoupper($slug);
        $categorys = Category::where('name', $name)->get()->first();
        $product = $categorys->products;
        
        return view('page.category', compact('product', 'category', 'name'));
    }
    
    public function search(Request $request){
        $limit = Product::with('categorys')->limit(5)->get();
        $product = Product::where('name', 'like', '%'. $request->search.'%')->get();
        $category = Category::latest()->get();

        if ($product->isNotEmpty()) {
            return view('page.search', compact('product', 'category', 'limit'));
        } else {
            return response()->json([
                'status' => 'gagal'
            ]);
        }
    }

}
