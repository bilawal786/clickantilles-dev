<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\Product\CartResource;
use App\Http\Resources\Product\ProductReviewResource;
use App\ProductReview;
use App\Wishlist;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\MobileCart;
use App\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function flashSale()
    {
        $timeNow = Carbon::now();
        $products = Products::where('product_section', 'Discounted Product')->where('deal_upto', '>', $timeNow)->paginate(15);
        return ProductResource::collection($products);
    }

    public function addtocart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'color' => 'required',
            'size' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => 'Remplir les champs obligatoires'], 400);
        }
        $existing = MobileCart::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->first();
        if ($existing) {
            return response()->json(['error' => 'Product Already Added'], 404);
        } else {
            $cartItem = new MobileCart();
            $cartItem->user_id = Auth::user()->id;
            $cartItem->product_id = $request->product_id;
            $cartItem->price = $request->price;
            $cartItem->quantity = $request->quantity;
            $cartItem->color = $request->color;
            $cartItem->size = $request->size;
            if ($cartItem->save()) {
                return response()->json(['success' => 'Ajouté au panier']);
            } else {
                return response()->json(['error' => 'Quelque chose ne va pas'], 400);
            }
        }
    }

    public function cartItems()
    {
        $cartItems = MobileCart::where('user_id', Auth::user()->id)->get();
        return response()->json([
            'total_price' => $cartItems->sum(function ($cartItem) {
                return $cartItem->price * $cartItem->quantity;
            }),
            'items' => CartResource::collection($cartItems)
        ]);
    }

    public function removeCartItem($id)
    {
        $item = MobileCart::find($id);
        if ($item->delete()) {
            return response()->json(['success' => 'Supprimé du panier']);
        } else {
            return response()->json(['error' => 'Quelque chose ne va pas'], 400);
        }
    }

    public function addRemoveWish($id)
    {
        $item = Wishlist::where('product_id', $id)->where('user_id', Auth::user()->id)->first();
        if ($item) {
            if ($item->delete()) {
                return response()->json(['success' => 'Supprimé de la liste de souhaits']);
            } else {
                return response()->json(['error' => 'Quelque chose ne va pas'], 400);
            }
        } else {
            $item = new Wishlist();
            $item->product_id = $id;
            $item->user_id = Auth::user()->id;
            if ($item->save()) {
                return response()->json(['success' => 'Ajouté à la liste de souhaits']);
            } else {
                return response()->json(['error' => 'Quelque chose ne va pas'], 400);
            }
        }
    }

    public function wishlist()
    {
        $wishItems = Wishlist::where('user_id', Auth::user()->id)->pluck('product_id');
        $products = Products::whereIn('id', $wishItems)->paginate(10);
        return ProductResource::collection($products);
    }

    public function addReview(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'rating' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $product = ProductReview::where('product_id', $id)->where('user_id', Auth::user()->id)->first();
        if ($product) {
            return response()->json(['error' => 'Review Already Added'], 400);
        } else {
            $review = new ProductReview();
            $review->product_id = $id;
            $review->user_id = Auth::user()->id;
            $review->rating = $request->rating;
            $review->review = $request->review;
            $review->save();
            return response()->json(['success' => 'Review Added'], 200);
        }
    }

    public function productReviews($id)
    {
        $reviews = ProductReview::where('product_id', $id)->get();
        return response()->json([
            'total_reviews' => $reviews->count() ?? '',
            'avg_rating' => $reviews->avg('rating') ?? '',
            '5_star' => $reviews->where('rating', 5)->count(),
            '4_star' => $reviews->where('rating', 4)->count(),
            '3_star' => $reviews->where('rating', 3)->count(),
            '2_star' => $reviews->where('rating', 2)->count(),
            '1_star' => $reviews->where('rating', 1)->count(),
            'reviews' => ProductReviewResource::collection($reviews)
        ]);
    }

    public function searchProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'search' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $search = $request->search;
        $products = Products::where('product_section', 'Discounted Product')
            ->where('title', 'LIKE', "%{$search}%")->paginate(10);
        return ProductResource::collection($products);
    }
    public function filterOptions()
    {
        $sizes = Products::whereNotNull('size')
            ->where('size', '<>', '')
            ->get()
            ->pluck('size')
            ->toArray();
        $separated_sizes = [];
        foreach ($sizes as $size) {
            $separated_sizes = array_merge($separated_sizes, explode(',', $size));
        }
        $unique_sizes = array_unique($separated_sizes);

        $colors = Products::whereNotNull('color')
            ->where('color', '<>', '')
            ->get()
            ->pluck('color')
            ->toArray();
        $separated_colors = [];
        foreach ($colors as $color) {
            $separated_colors = array_merge($separated_colors, explode(',', $color));
        }
        $unique_colors = array_unique($separated_colors);
        $result = [
            'sizes' => $unique_sizes,
            'colors' => $unique_colors
        ];
        return response()->json($result);
    }
    public function filterProduct(Request $request)
    {
        $color = $request->color;
        $size = $request->size;
        $max_price = $request->max_price;
        $min_price = $request->min_price ? $request->min_price : 0;
        $products = Products::where('product_section', 'Discounted Product')->where('color', 'LIKE', "%{$color}%")
            ->where('size','LIKE', "%{$size}%");
        if ($max_price) {
            $products = $products->whereBetween('price', [$min_price, $max_price]);
        }
        $products = $products->get();
        return ProductResource::collection($products);
    }

}
