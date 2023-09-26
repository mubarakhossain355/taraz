<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $category = Category::all();
        $products = Product::all();
        return view('frontend.home.index',['category' => $category,'products' => $products]);
    }

    public function viewCategory($id){
        if(Category::where('id',$id)->exists()){
           $category = Category::where('id',$id)->first();
           $products = Product::where('Category_id',$category->id)->get();
           return view('frontend.product.index',compact('category','products'));
        }else{
            return back();
        }

    }
}
