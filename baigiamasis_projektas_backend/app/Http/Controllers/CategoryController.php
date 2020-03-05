<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function categoryForm(){
        return view('skateboards.pages.add_category');
    }

    public function storeCategory(Request $request){
        $validateData = $request->validate([
            'name' => 'required'
        ]);
        $category = Category::create([
            'name' => request('name')
        ]);
        return redirect('/category_management');
    }

    public function categoryManagement(){
        $categories = Category::all();
        return view('skateboards.pages.category_management', compact('categories'));
    }

    public static function categoryDelete(Category $category){
        $category->delete();
        return redirect('/category_management');
    }
}
