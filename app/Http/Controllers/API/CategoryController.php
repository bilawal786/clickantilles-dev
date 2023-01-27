<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Product\ProductResource;
use App\Products;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        return response()->json(CategoryResource::collection($categories));
    }

    public function categoryProducts($id)
    {
        $products = Products::latest()->where('product_section', 'Discounted Product')->where('category_id', $id)->paginate(15);
        return ProductResource::collection($products);
    }

    public function subCategoryProducts($id)
    {
        $products = Products::latest()->where('product_section', 'Discounted Product')->where('subcategory_id', $id)->paginate(15);
        return ProductResource::collection($products);
    }

}
