<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\Product\CartResource;
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
        $products = Products::where('deal_upto', '>', $timeNow)->paginate(15);
        return response()->json(ProductResource::collection($products));
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

    public function cartItems($id)
    {
        $cartItems = MobileCart::where('user_id', $id)->get();
        return response()->json(CartResource::collection($cartItems));
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
}
