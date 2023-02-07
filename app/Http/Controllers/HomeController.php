<?php

namespace App\Http\Controllers;

use App\ClickConcept;
use App\Order;
use App\Products;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all()->count();
        $products = Products::all()->count();
        $click_concept = ClickConcept::all()->count();
        $neworders = Order::latest()->where('admin_status', 1)->where('status', 1)->get()->count();
        $complete_orders = Order::latest()->where('admin_status', 2)->where('status', 1)->get();
        return view('home', compact('neworders', 'complete_orders','products', 'users', 'click_concept'));
    }
}
