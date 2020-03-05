<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
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

}
