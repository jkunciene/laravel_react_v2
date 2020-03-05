<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function productForm(){
        $categories = Category::all();
        return view('skateboards.pages.add_product', compact('categories'));
    }

    public function storeProduct(Request $request){
        $validateData = $request->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'mimes:jfif,jpeg,jpg,png,gif|required|max:1000',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $path = $request->file('image')->store('public/images');
        $fileName = str_replace('public/', "", $path);

        $product = Product::create([
            'catId' => request('category'),
            'name' => request('name'),
            'description' => request('description'),
            'img' => $fileName,
            'price' => request('price'),
            'quantity' => request('quantity'),
            'userId' => Auth::id()
        ]);

        return redirect('/product_management');
    }

    public function productManagement(){
        $products = Product::all();
        return view('skateboards.pages.product_management', compact('products'));
    }

    public static function productDelete(Product $product){
        $product->delete();
        return redirect('/product_management');
    }

    public function productUpdate(Product $product){
        $products = Product::all();
        return view('skateboards.pages.product_update', compact('product'));
    }

    public function error(){
        return view('skateboards.pages.error');
    }

    public function productUdpdate2(Product $product, Request $request){
        $validateData = $request->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'mimes:jfif,jpeg,jpg,png,gif|max:1000',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        Product::where('id', request('id'))->update(
            ['catId' => request('category'),
                'name' => request('name'),
                'description' => request('description'),
                'price' => request('price'),
                'quantity' => request('quantity')
            ]);

        if($request->hasFile('image')){
            File::delete('../storage/app/public/'.$product->img);
            $path = $request->file('image')->store('public/images');
            $fileName = str_replace('public/', "", $path);
            Product::where('id', $product->id)->update([
                'image' => $fileName
            ]);
        }

        return redirect('/product_management');
    }
}
