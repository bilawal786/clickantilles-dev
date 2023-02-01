<?php

namespace App\Http\Controllers\API;

use App\ClickConcept;
use App\Http\Controllers\Controller;
use App\Http\Resources\ClickConcept\StoresResource;
use App\Http\Resources\Product\ProductResource;
use App\Jobs\SendInvoice;
use App\MobileCart;
use App\Order;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;

class WebsiteController extends Controller
{
    public function clickConceptStores()
    {
        $stores = ClickConcept::latest()->paginate(10);
        return StoresResource::collection($stores);
    }

    public function storeProducts($id)
    {
        $products = Products::where('click_concept', $id)->paginate(10);
        return ProductResource::collection($products);
    }

    public function checkoutSubmit(Request $request)
    {
        $cartItems = MobileCart::where('user_id', Auth::user()->id)->get();
        foreach ($cartItems as $cartItem) {
            \Cart::add($cartItem->product_id, $cartItem->product->title, $cartItem->price, $cartItem->quantity, array(
                    'type' => $cartItem->product->product_section,
                    'image' => $cartItem->product->photo1,
                    'optimize_image' => $signature_img ?? "",
                    'color' => $cartItem->color,
                    'size' => $cartItem->size,
                )
            );
        }
        $products = \Cart::getContent();

        $order = new Order();
        $order->ip = request()->ip();
        $order->user_id = Auth::user()->id;
        $order->name = $request->fname . ' ' . $request->lname;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->notes = $request->notes;
        $order->country = $request->country;
        $order->total = $request->total;
        $order->postal_code = $request->postal_code;
        $order->payment_method = "Stripe";
        $order->products = $products;
        $order->order_number = "ON-" . rand(100000000, 900000000);
        $order->save();
        Stripe::setApiKey(env("STRIPE_SECRET_KEY"));

        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => "EUR",
                    'unit_amount' => round($request->total, 2) * 100,
                    'product_data' => [
                        'name' => "Click Antilles",
                        'images' => [asset('frontend/assets/images/logo.png')],
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success.mobile', ['id' => $order->id, 'user_id'=> $order->user_id]),
            'cancel_url' => route('payment.fail.mobile'),
        ]);

        return response($checkout_session->url);
    }

    public function paymentSuccessMobile($id, $user_id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json(['error'=> 'Something went wrong'], 404);
        }
        $order->status = 1;
        $order->invoice_number = rand(100000000, 900000000);
        $order->update();
        $cartItems = MobileCart::where('user_id', $user_id);
        $cartItems->delete();
        dispatch(new SendInvoice($order));
        return view('mobile_checkout.success', compact('order'));
    }

    public function paymentFailMobile(){
        return view('mobile_checkout.fail');
    }
}
