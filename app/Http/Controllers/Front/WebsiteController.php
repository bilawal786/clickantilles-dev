<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\ClickConcept;
use App\Http\Controllers\Controller;
use App\Jobs\SendOrderStatus;
use App\Jobs\SendInvoice;
use App\Order;
use App\ProductReview;
use App\Products;
use App\Settings;
use App\ShippingSource;
use App\Slides;
use App\Wishlist;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Stripe\Stripe;

class WebsiteController extends Controller
{
    public function index()
    {
        $slides = Slides::first();
        $settings = Settings::first();
        $productsBest = Products::latest()->where('product_section', 'Best Selling')->take(10)->get();
        $Unavoidables = Products::latest()->where('product_section', 'Unavoidable')->take(10)->get();
        $categories = Category::latest()->get();
        $stores = ClickConcept::latest()->get();
        return view('website.pages.index', compact('categories', 'productsBest', 'slides', 'settings', 'stores', 'Unavoidables'));
    }

    public function stores()
    {
        $stores = ClickConcept::latest()->paginate(10);
        return view('website.pages.stores', compact('stores'));
    }

    public function singleStore($id)
    {
        $store = ClickConcept::find($id);
        if (!$store) {
            return back();
        }
        return view('website.pages.single_store', compact('store'));
    }

    public function discountedProducts()
    {
        $title = "Produits à prix réduit";
        $products = Products::latest()->where('product_section', 'Best Selling')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }

    public function ready()
    {
        $title = "Prêt à partir";
        $products = Products::latest()->where('product_section', 'Ready To Go')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }

    public function proProducts()
    {
        $title = "Produits professionnels";
        $products = Products::latest()->where('product_section', 'Click Pro')->paginate(15);
        return view('website.pages.pro-products-listing', compact('title', 'products'));
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

    public function flashSale()
    {
        $title = "Deal Products";
        $timeNow = Carbon::now();
        $products = Products::where('deal_upto', '>', $timeNow)->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }


    public function filterProducts($id)
    {
        $title = "Produits liés à la catégorie sélectionnée";
        $products = Products::latest()->where('category_id', $id)->where('product_section', 'General')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }
    public function subcategoryProducts($id)
    {
        $title = "Produits liés à la catégorie sélectionnée";
        $products = Products::latest()->where('subcategory_id', $id)->where('product_section', 'General')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }

    public function productSearch(Request $request)
    {
        $title = "Produits liés à la catégorie sélectionnée";
        $products = Products::latest()->where('category_id', $request->product_category)->where('title', 'like', '%' . $request->search . '%')->where('product_section', 'General')->paginate(15);
        return view('website.pages.product-listing', compact('title', 'products'));
    }

    public function singleProduct($slug, $id)
    {
        $product = Products::find($id);
        return view('website.pages.single-product', compact('product'));
    }

    public function addReview(Request $request)
    {
        $product = ProductReview::where('product_id', $request->product_id)->where('user_id', $request->user_id)->first();
        if ($product) {
            $notification = array(
                'messege' => 'Vous avez déjà ajouté un avis',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        } else {
            $review = new ProductReview();
            $review->product_id = $request->product_id;
            $review->user_id = $request->user_id;
            $review->rating = $request->score;
            $review->review = $request->review;
            $review->save();
            $notification = array(
                'messege' => 'Examen ajouté !',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
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

    public function wishlist()
    {
        $wishlist = Wishlist::where('user_id', Auth::user()->id)->get();
        return view('website.pages.wishlist', compact('wishlist'));
    }

    public function addtowishlist(Request $request)
    {
        $item = Wishlist::where('product_id', $request->id)->where('user_id', Auth::user()->id)->first();
        if ($item) {
            return response()->json(['error' => 'Already added'], 400);
        } else {
            $item = new Wishlist();
            $item->product_id = $request->id;
            $item->user_id = Auth::user()->id;
            $item->save();
        }
    }

    public function removewish($id)
    {
        $wish = Wishlist::where('user_id', Auth::user()->id && 'product_id', $id)->first();
        $wish->delete();
        $notification = array(
            'messege' => 'Produit supprimé avec succès !',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function addtocart(Request $request)
    {
        $cartitems = \Cart::getContent();
        foreach ($cartitems as $item) {
            if ($item->id == $request->product_id) {
                return response()->json(['error' => 'Already added'], 400);
            }
        }
        if ($request->image) {
            $folderPath = public_path('optimize-images/');
            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode(" image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $signatures = strtotime("now") . '-signature.' . $image_type;
            $signature_localpath = $folderPath . $signatures;
            file_put_contents($signature_localpath, $image_base64);
            $destinationPath = 'optimize-images/';
            $signature_img = $destinationPath . $signatures;
        }
        $product = Products::where('id', $request->product_id)->first();
        \Cart::add($product->id, $product->title, $request->price, $request->quantity, array(
                'type' => $product->product_section,
                'image' => $product->photo1,
                'optimize_image' => $signature_img ?? "",
                'color' => $request->color,
                'size' => $request->size,
            )
        );
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

    public function getCustomizeImage(Request $request)
    {
//        dd("abc");
        dd($request->all());
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
        $totalVolume = 0;
        foreach ($cartitems as $item) {
            $product = Products::find($item->id);
            $totalVolume += $product->volume * $item->quantity;
        }
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        $shipping_source = ShippingSource::where('deliver_to', Auth::user()->country)->get();
        $user = Auth::user();
//        dd($totalVolume);
        return view('website.pages.checkout', compact('cartitems', 'cartTotalQuantity', 'total', 'totalVolume', 'shipping_source', 'user'));
    }

    public function checkoutSubmit(Request $request)
    {
        $cartitems = \Cart::getContent();
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

    public function paymentSuccess($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return redirect()->back();
        }
        $order->status = 1;
        $order->invoice_number = rand(100000000, 900000000);
        $order->update();
        \Cart::clear();
        dispatch(new SendInvoice($order));
        return view('website.pages.payment_success', compact('order'));
    }

    public function aboutus()
    {
        $settings = Settings::first();
        return view('website.pages.aboutus', compact('settings'));
    }

    public function returnpolicy()
    {
        $settings = Settings::first();
        return view('website.pages.returnpolicy', compact('settings'));
    }

}
