<?php

namespace App\Http\Controllers;

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
}
