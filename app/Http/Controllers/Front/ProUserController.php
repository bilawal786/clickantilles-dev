<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Products;
use App\ProSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;

class ProUserController extends Controller
{
    public function proSubscription(){
        Stripe::setApiKey(env("STRIPE_SECRET_KEY"));

        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => "EUR",
                    'unit_amount' => round(50, 2) * 100,
                    'product_data' => [
                        'name' => "Click Antilles",
                        'images' => [asset('frontend/assets/images/logo.png'), asset('frontend/assets/images/logo.png')],
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('subscription.payment.success'),
            'cancel_url' => url()->previous(),
        ]);
        return redirect($checkout_session->url);
    }
    public function paymentSuccess(){
        $user = Auth::user();
        $proSubscribed = new ProSubscription();
        $proSubscribed->user_id = $user->id;
        $proSubscribed->price = 50;
        $proSubscribed->save();
        $user->pro_subscribed = 1;
        $user->update();
        $notification = array(
            'messege' => 'Abonnement activé avec succès !',
            'alert-type' => 'success'
        );
        return redirect()->route('front.pro.products')->with($notification);
    }
    public function filterProPrducts($section){
        $title = "Produits professionnels";
        $products = Products::latest()->where('product_section', 'Click Pro')->where('pro_category', $section)->paginate(15);
        return view('website.pages.pro-products-listing', compact('title', 'products'));
    }
}
