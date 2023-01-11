<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('website.user.dashboard');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('website.user.profile', compact('user'));
    }

    public function orders()
    {
        $orders = Order::latest()->where('user_id', Auth::user()->id)->where('status', 1)->get();
        return view('website.user.orders', compact('orders'));
    }

    public function orderView($id)
    {
        $order = Order::find($id);
        return view('website.pages.payment_success', compact('order'));
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
