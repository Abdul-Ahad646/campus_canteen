<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\AddCard;
use Illuminate\Support\Facades\Auth;

class FronEndCategoryController extends Controller
{
    public function index(){
        $categories=Category::Where('status',1)->get();
        return view('dashboard',compact('categories'));
    }
    public function seeProduct($id){
        $addCard=Addcard::where('user_id',Auth::user()->id)->get();  
        $products=Product::Where('status',1)->where('category_id',$id)->get();
        return view('category-product',compact('products','addCard'));
    }
}