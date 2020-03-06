<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function allProducts(){
        $products = Product:: select(
            'products.*',
            'categories.name as category_name'
        )->join('categories', 'categories.id', '=', 'products.catid')
            ->get();
        return $products;
    }

    public function get_posts_by_id($id){
        return Product::find($id);

    }
    public function storeOrder(Request $request){

        Order::create([
            'buyerName' => request('buyerName'),
            'buyerSurname' => request('buyerSurname'),
            'buyerAddress' => request('buyerAddress'),
            'productId' => request('productId'),
            'productQty' => request('productQty'),
            'OrderSum' => request('OrderSum')
        ]);
        return response($request);

    }
    public function allCategories(){
        $categories = Category::all();

        return $categories;
    }

}
