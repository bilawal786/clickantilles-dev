<?php

namespace App\Http\Controllers\Admin;

use App\ClickConcept;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
class ClickConceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = ClickConcept::latest()->paginate(10);
        return view('admin.click_concept.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new ClickConcept();
        $store->name = $request->name;
        $store->description = $request->description;
        if($request->hasfile('photo') ){
            $image6 = $request->file('photo');
            $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'category-images/';
            $image6->move($destinationPath, $name6);
            $store->photo = 'category-images/' . $name6;
            $path6 = public_path('category-images/'.$name6);
            Image::make($path6)->resize(610 , 546)->save($path6);
        }
        $store->save();
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
        //
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
        $store = ClickConcept::find($id);
        $store->name = $request->name;
        $store->description = $request->description;
        if($request->hasfile('photo') ){
            $image6 = $request->file('photo');
            $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'category-images/';
            $image6->move($destinationPath, $name6);
            $store->photo = 'category-images/' . $name6;
            $path6 = public_path('category-images/'.$name6);
            Image::make($path6)->resize(610 , 546)->save($path6);
        }
        $store->save();
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
        $store = ClickConcept::find($id);
        $store->delete();
        $notification = array(
            'messege' => 'Sauvegarde terminate!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
