<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Products;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products();
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->user_id = Auth::user()->id;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->price = $request->price;
        $product->oldprice = $request->oldprice;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->material = $request->material;
        $product->color = $request->color;
        $product->stock = $request->stock;
        $product->unit = $request->unit;
        $product->video = $request->video;
        $product->product_section = $request->product_section;
        if ($request->product_section == "Click Pro"){
            $product->pro_category = $request->pro_category??"Click Selection";
        }
        if ($request->hasfile('photo1')) {
            $image1 = $request->file('photo1');
            $name1 = time() . 'photo1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'product-images';
            ini_set('memory_limit', '256M');
            $img = Image::make($image1);
            $img->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $name1);
            $product->photo1 = $destinationPath . '/' . $name1;
        }
        if ($request->hasfile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $name = time() . 'gallery' . '.' . $image->getClientOriginalName();
                $destinationPath = 'product-images';
                ini_set('memory_limit', '256M');
                $imgg = Image::make($image);
                $imgg->resize(1000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $name);
                $data9[] = $name;
                $product->gallery = json_encode($data9);
            }
        }
        $product->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Products::find($id);
        return  view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->price = $request->price;
        $product->oldprice = $request->oldprice;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->material = $request->material;
        $product->color = $request->color;
        $product->stock = $request->stock;
        $product->unit = $request->unit;
        $product->video = $request->video;
        $product->product_section = $request->product_section;
        if ($request->product_section == "Click Pro"){
            $product->pro_category = $request->pro_category??"Click Selection";
        }
        if ($request->hasfile('photo1')) {
            $image1 = $request->file('photo1');
            $name1 = time() . 'photo1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'product-images';
            ini_set('memory_limit', '256M');
            $img = Image::make($image1);
            $img->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $name1);
            $product->photo1 = $destinationPath . '/' . $name1;
        }
        if ($request->hasfile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $name = time() . 'gallery' . '.' . $image->getClientOriginalName();
                $destinationPath = 'product-images';
                ini_set('memory_limit', '256M');
                $imgg = Image::make($image);
                $imgg->resize(1000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $name);
                $data9[] = $name;
                $product->gallery = json_encode($data9);
            }
        }
        $product->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fetchsubcategory(Request $request){
        $subcategories = SubCategory::where('category_id', '=', $request->id)->get();
        return response()->json($subcategories);
    }
}
