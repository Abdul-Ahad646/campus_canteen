<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderListController extends Controller
{
    public function list(){
        $order_lists=DB::table('orders')
        ->join('order_details', 'order_details.transaction_id', '=', 'orders.transaction_id')
        ->select('orders.*','order_details.product_id','order_details.quantity')
        ->get();
        return view('admin.order-list.index',compact('order_lists'));
      
    }
}