<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categories = Category::all();
        return view('backend.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',

        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->category_id   = $request->category_id;
        $product->price   = $request->price;
        $product->desc   = $request->desc;

        $image = $request->image;
        if($image){
            $imageName = 'products'.rand().time().'.'.$image->extension();
            $image ->move('database-images/product-images/',$imageName);
            $product->image = 'database-images/product-images/'.$imageName;
        }

        $product->save();
        Toastr::success('Product Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('backend.product.edit',['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',

        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id   = $request->category_id;
        $product->price   = $request->price;
        $product->desc   = $request->desc;

        $image = $request->image;
        if($image){
            if(file_exists($product->image)){
                unlink($product->image);
            }
            $imageName = 'products'.rand().time().'.'.$image->extension();
            $image ->move('database-images/product-images/',$imageName);
            $product->image = 'database-images/product-images/'.$imageName;
        }

        $product->save();
        Toastr::success('Product Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if(file_exists($product->image)){
            unlink($product->image);
        }
        $product->delete();
        Toastr::success('Product Deleted Successfully');
        return back();
    }
}
