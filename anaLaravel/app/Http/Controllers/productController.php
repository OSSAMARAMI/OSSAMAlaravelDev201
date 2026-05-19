<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        $productlist=[
            ['id'=>1,'name'=>'product1','price'=>100],
            ['id'=>2,'name'=>'product2','price'=>200],
            ['id'=>3,'name'=>'product3','price'=>300],
        ];
        return view('products',compact('productlist'));
    }
}
