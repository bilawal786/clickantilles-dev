<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
   public function orderType(Request $request){
       if($request->order_type){
       $orderType = $request->order_type;
       }else{
           $orderType = 0;
       }
       $orders = Order::latest()->where('admin_status', $orderType)->where('status', 1)->paginate(15);
       return view('admin.orders.index', compact('orders','orderType'));
   }
   public function orderView($id){
       $order = Order::find($id);
       return view('admin.orders.view', compact('order'));
   }
   public function orderStatus(Request $request){
       $order = Order::find($request->id);
       $order->admin_status = $request->status;
       $order->update();
       return response()->json(['success' => 'success']);

   }
}
