<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class mainpageController extends Controller
{
    public function index()
    {
        $categories = category::with('products')->get();

         $products=product::with('category')-> get();


        return view('index',['categories'=>$categories,'products'=>$products]);

    }


    public function getProductByCategory(category $category)
    {
        $categories = category::with('products')->get();


       return view('men',['category'=>$category,'allcat'=>$categories]);
    }
}
