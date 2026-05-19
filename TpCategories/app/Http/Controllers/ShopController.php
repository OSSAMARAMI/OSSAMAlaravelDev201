<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Category; 
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('shop', compact('categories'));
    }
    public function showProducts($id)
    {
        $category = Category::with('product')->findOrFail($id);
        return view('categories_products', compact('category'));
    }
}
