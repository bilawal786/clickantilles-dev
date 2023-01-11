<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;
use Image;

class SettingsController extends Controller
{
    public function index(){
        $settings = Settings::first();
        return view('admin.settings.generalSettings',compact('settings'));
    }

    public function pages(){
        $settings = Settings::first();
        return view('admin.settings.pages',compact('settings'));
    }

    public function update(Request $request){
        $settings = Settings::first();
        $settings->sitename = $request->sitename;
        $settings->address = $request->address;
        $settings->email = $request->email;
        $settings->phone1 = $request->phone1;
        $settings->phone2 = $request->phone2;
        $settings->facebook = $request->facebook;
        $settings->instagram = $request->instagram;
        $settings->twitter = $request->twitter;
        $settings->utube = $request->utube;
        $settings->footer = $request->footer;
        if($request->hasfile('logo') ){
            //code to remove old file
            if($settings->logo){
                $file_old = $settings->logo;
                if($file_old != 'frontend/assets/images/logo.png'){
                    unlink($file_old);}}

            $image1 = $request->file('logo');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $settings->logo = 'logo/' . $name;

            //Resize image
            $path = public_path('logo/'.$name);
            $img = Image::make($path)->resize(1180,342)->save($path);
        }
        $settings->save();
        return redirect('generalsettings');
    }

    public function updatepages(Request $request){
        $settings = Settings::first();
        $settings->about = $request->about;
        $settings->terms = $request->terms;
        $settings->privacy = $request->privacy;
        $settings->help = $request->help;
        $settings->return = $request->return;
        $settings->save();
        return redirect()->back();
    }
}
