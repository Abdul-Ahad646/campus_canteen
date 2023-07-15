<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AddCard;
use App\Models\Product;
use Cart;

class AddCardController extends Controller
{
   public function store(Request $request){
    $id=$request->product_id;
    $quantity= $request->quantity;
    $product=Product::where('id',$id)->first();
    $data['id']=$product->id;
    $data['quantity']=$quantity;
    $data['name']=$product->name;
    $data['price']=$product->price;
    
    
    Cart::add($data);
    arrayCard();
    return redirect()->back();
   }
   public function delete($id){
 
      Cart::remove($id);
      return redirect()->back();
   }
   public function checkout(){
    
      return view('product-order');
   }
}