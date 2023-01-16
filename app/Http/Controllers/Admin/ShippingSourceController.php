<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ShippingSource;
use Illuminate\Http\Request;

class ShippingSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sources = ShippingSource::all();
        return view('admin.shipping_source.index',compact('sources'));
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
        $source = new ShippingSource();
        $source->name = $request->name;
        $source->deliver_from = $request->deliver_from;
        $source->deliver_to = $request->deliver_to;
        $source->source = $request->source;
        $source->volume = $request->volume;
        $source->time_required = $request->time_required;
        $source->save();
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
        $source = ShippingSource::find($id);
        $source->name = $request->name;
        $source->deliver_from = $request->deliver_from;
        $source->deliver_to = $request->deliver_to;
        $source->source = $request->source;
        $source->volume = $request->volume;
        $source->time_required = $request->time_required;
        $source->save();
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
        $source = ShippingSource::find($id);
        $source->delete();
        $notification = array(
            'messege' => 'Supprimé avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
