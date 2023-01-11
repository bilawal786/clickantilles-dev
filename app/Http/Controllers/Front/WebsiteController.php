<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Order;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;

class WebsiteController extends Controller
{
    public function index()
    {
        $products = Products::latest()->where('product_section', 'Discounted Product')->take(10)->get();
        $categories = Category::latest()->take(10)->get();
        return view('website.pages.index', compact('categories', 'products'));
    }

    public function discountedProducts()
    {
        $title = "Produits à prix réduit";
        $products = Products::latest()->where('product_section', 'Discounted Product')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }

    public function proProducts()
    {
        $title = "Produits professionnels";
        $products = Products::latest()->where('product_section', 'Click Pro')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }

    public function sourcingProducts()
    {
        $title = "Produits Sourcing";
        $products = Products::latest()->where('product_section', 'Sourcing Product')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }

    public function goodiesProducts()
    {
        $title = "Click Goodies";
        $products = Products::latest()->where('product_section', 'Click Goodies')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }

    public function emballagesProducts()
    {
        $title = "CLick Emballages";
        $products = Products::latest()->where('product_section', 'CLick Emballages')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }

    public function conceptProducts()
    {
        $title = "Click Concept";
        $products = Products::latest()->where('product_section', 'Click Concept')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }


    public function filterProducts($id)
    {
        $title = "Produits liés à la catégorie sélectionnée";
        $products = Products::latest()->where('category_id', $id)->where('product_section', 'Discounted Product')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }

    public function productSearch(Request $request)
    {
        $title = "Produits liés à la catégorie sélectionnée";
        $products = Products::latest()->where('category_id', $request->product_category)->where('title', 'like', '%' . $request->search . '%')->where('product_section', 'Discounted Product')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }

    public function singleProduct($slug, $id)
    {
        $product = Products::find($id);
        return view('website.pages.single-product', compact('product'));
    }

    public function trackOrder()
    {
        return view('website.pages.track-order');
    }

    public function cart()
    {
        $cartitems = \Cart::getContent();
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        return view('website.pages.cart', compact('cartitems', 'cartTotalQuantity', 'total'));
    }

    public function addtocart(Request $request)
    {
        $cartitems = \Cart::getContent();
        foreach ($cartitems as $item) {
            if ($item->id == $request->product_id) {
                return response()->json(['error' => 'Already added'], 400);
            }
        }
        $product = Products::where('id', $request->product_id)->first();
        \Cart::add($product->id, $product->title, $product->price, $request->quantity, array('type' => $product->product_section, 'image' => $product->photo1));
        return response()->json($product);
    }

    public function cartitems()
    {
        $cartitems = \Cart::getContent();
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        return response()->json([
            'data' => $cartitems,
            'quantity' => $cartTotalQuantity,
            'total' => $total
        ]);
    }

    public function removecart(Request $request)
    {
        \Cart::remove($request->id);
        return response()->json(['success' => 'success']);
    }

    public function removecartweb($id)
    {
        \Cart::remove($id);
        $notification = array(
            'messege' => 'Retirer du panier avec succès',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function checkout()
    {
        $cartitems = \Cart::getContent();
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        return view('website.pages.checkout', compact('cartitems', 'cartTotalQuantity', 'total'));
    }

    public function checkoutSubmit(Request $request)
    {
        $cartitems = \Cart::getContent();
        $order = new Order();
        $order->ip = request()->ip();
        $order->user_id = Auth::user()->id;
        $order->name = $request->fname .' '.$request->lname;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->notes = $request->notes;
        $order->country = $request->billing_country;
        $order->total = $request->total;
        $order->postal_code = $request->postal_code;
        $order->payment_method = "Stripe";
        $order->products = $cartitems;
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
            'success_url' => route('payment.success', ['id' => $order->id]),
            'cancel_url' => url()->previous(),
        ]);
       return redirect($checkout_session->url);

    }
    public function paymentSuccess($id){
        $order = Order::find($id);
        if (!$order){
            return  redirect()->back();
        }
        $order->status = 1;
        $order->update();
        \Cart::clear();
        return view('website.pages.payment_success', compact('order'));
    }

}
