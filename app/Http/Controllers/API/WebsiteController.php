<?php

namespace App\Http\Controllers\API;

use App\ClickConcept;
use App\Http\Controllers\Controller;
use App\Http\Resources\ClickConcept\StoresResource;
use App\Http\Resources\Product\ProductResource;
use App\Products;
use Illuminate\Http\Request;

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
}
