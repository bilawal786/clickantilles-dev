<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
   public function newOrders(){
       $title = "Nouvelles commandes";
       $orders = Order::latest()->where('admin_status', 0)->where('status', 1)->paginate(15);
       return view('admin.orders.index', compact('orders', 'title'));
   }
   public function completeOrders(){
       $title = "Commandes complètes";
       $orders = Order::latest()->where('admin_status', 1)->where('status', 1)->paginate(15);
       return view('admin.orders.index', compact('orders', 'title'));
   }
   public function orderView($id){
       $order = Order::find($id);
       return view('admin.orders.view', compact('order'));
   }
   public function orderStatus($id){
       $order = Order::find($id);
       $order->admin_status = 1;
       $order->update();
       $notification = array(
           'messege' => 'Ajouté avec succès!',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
   }
}
