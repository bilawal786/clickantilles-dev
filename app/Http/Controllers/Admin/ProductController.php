<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\ClickConcept;
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
        $stores = ClickConcept::latest()->get();
        return view('admin.products.create', compact('categories', 'stores'));
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
        $product->volume = $request->volume;
        $product->video = $request->video;
        $product->product_section = $request->product_section;
        if ($request->product_section == "Click Pro"){
            $product->pro_category = $request->pro_category??"Click Selection";
        }
        if ($request->product_section == "Click Concept"){
            $product->click_concept = $request->click_concept;
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
        $stores = ClickConcept::latest()->get();
        $categories = Category::all();
        $product = Products::find($id);
        return  view('admin.products.edit', compact('product', 'categories', 'stores'));
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
        $product->volume = $request->volume;
        $product->video = $request->video;
        $product->product_section = $request->product_section;
        if ($request->product_section == "Click Pro"){
            $product->pro_category = $request->pro_category;
        }else{
            $product->pro_category = "";
        }
        if ($request->product_section == "Click Concept"){
            $product->click_concept = $request->click_concept;
        }else{
            $product->click_concept = null;
        }
        if($request->hasfile('photo1') ){
            $image6 = $request->file('photo1');
            $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'product-images/';
            $image6->move($destinationPath, $name6);
            $product->photo1 = 'product-images/' . $name6;
            $path6 = public_path('product-images/'.$name6);
            Image::make($path6)->resize(1000, 1000)->save($path6);
        }
        if ($request->hasfile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $image6 = $request->file('gallery');
                $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
                $destinationPath = 'product-images/';
                $image6->move($destinationPath, $name6);
                $product->gallery = 'product-images/' . $name6;
                $path6 = public_path('product-images/'.$name6);
                Image::make($path6)->resize(1000, 1000)->save($path6);
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
        $category = Products::find($id);
        $category->delete();
        $notification = array(
            'messege' => 'Sauvegarde terminate!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function fetchsubcategory(Request $request){
        $subcategories = SubCategory::where('category_id', '=', $request->id)->get();
        return response()->json($subcategories);
    }
}
