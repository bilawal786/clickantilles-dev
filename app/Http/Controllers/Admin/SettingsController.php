<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Settings;
use App\Slides;
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
//            if($settings->logo){
//                $file_old = $settings->logo;
//                if($file_old != 'frontend/assets/images/logo.png'){
//                    unlink($file_old);}}

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
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function updatepages(Request $request){
        $settings = Settings::first();
        $settings->about = $request->about;
        $settings->terms = $request->terms;
        $settings->privacy = $request->privacy;
        $settings->help = $request->help;
        $settings->return = $request->return;
        $settings->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function slides(){
        $slides = Slides::first();
        return view('admin.settings.slides', compact('slides'));
    }
    public function slidesUpdate(Request $request){
        $slides = Slides::find(1);
        $slides->mainbgheading = $request->mainbgheading;
        $slides->mainbgdescription = $request->mainbgdescription;
        $slides->heading_1 = $request->heading_1;
        $slides->heading_2 = $request->heading_2;
        $slides->heading_3 = $request->heading_3;
        $slides->heading_4 = $request->heading_4;
        $slides->link_1 = $request->link_1;
        $slides->link_2 = $request->link_2;
        $slides->link_3 = $request->link_3;
        $slides->link_4 = $request->link_4;
        if($request->hasfile('mainbg') ){
            $image1 = $request->file('mainbg');
            $name1 = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image1->move($destinationPath, $name1);
            $slides->mainbg = 'slides/' . $name1;
            $path1 = public_path('slides/'.$name1);
            Image::make($path1)->resize(1920,650)->save($path1);
        }
        if($request->hasfile('slide1') ){
            $image2 = $request->file('slide1');
            $name2 = time() . 'img' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image2->move($destinationPath, $name2);
            $slides->slide1 = 'slides/' . $name2;
            $path2 = public_path('slides/'.$name2);
            Image::make($path2)->resize(1920,650)->save($path2);
        }
        if($request->hasfile('slide2') ){
            $image3 = $request->file('slide2');
            $name3 = time() . 'img' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image3->move($destinationPath, $name3);
            $slides->slide2 = 'slides/' . $name3;
            $path3 = public_path('slides/'.$name3);
            Image::make($path3)->resize(1920,650)->save($path3);
        }
        if($request->hasfile('slide3') ){
            $image4 = $request->file('slide3');
            $name4 = time() . 'img' . '.' . $image4->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image4->move($destinationPath, $name4);
            $slides->slide3 = 'slides/' . $name4;
            $path4 = public_path('slides/'.$name4);
            Image::make($path4)->resize(1920,650)->save($path4);
        }
        if($request->hasfile('slide4') ){
            $image5 = $request->file('slide4');
            $name5 = time() . 'img' . '.' . $image5->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image5->move($destinationPath, $name5);
            $slides->slide4 = 'slides/' . $name5;
            $path5 = public_path('slides/'.$name5);
            Image::make($path5)->resize(1920,650)->save($path5);
        }
        if($request->hasfile('slide5') ){
            $image6 = $request->file('slide5');
            $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image6->move($destinationPath, $name6);
            $slides->slide5 = 'slides/' . $name6;
            $path6 = public_path('slides/'.$name6);
            Image::make($path5)->resize(1920,650)->save($path6);
        }
        if($request->hasfile('image1') ){
            $image6 = $request->file('image1');
            $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image6->move($destinationPath, $name6);
            $slides->image1 = 'slides/' . $name6;
            $path6 = public_path('slides/'.$name6);
            Image::make($path6)->resize(610,546)->save($path6);
        }
        if($request->hasfile('image2') ){
            $image6 = $request->file('image2');
            $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image6->move($destinationPath, $name6);
            $slides->image2 = 'slides/' . $name6;
            $path6 = public_path('slides/'.$name6);
            Image::make($path6)->resize(610,546)->save($path6);
        }
        if($request->hasfile('image3') ){
            $image6 = $request->file('image3');
            $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image6->move($destinationPath, $name6);
            $slides->image3 = 'slides/' . $name6;
            $path6 = public_path('slides/'.$name6);
            Image::make($path6)->resize(610,546)->save($path6);
        }
        if($request->hasfile('image5') ){
            $image6 = $request->file('image5');
            $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image6->move($destinationPath, $name6);
            $slides->image5 = 'slides/' . $name6;
            $path6 = public_path('slides/'.$name6);
            Image::make($path6)->resize(610,546)->save($path6);
        }
        if($request->hasfile('image6') ){
            $image6 = $request->file('image6');
            $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image6->move($destinationPath, $name6);
            $slides->image6 = 'slides/' . $name6;
            $path6 = public_path('slides/'.$name6);
            Image::make($path6)->resize(834,690)->save($path6);
        }
        if($request->hasfile('image7') ){
            $image6 = $request->file('image7');
            $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image6->move($destinationPath, $name6);
            $slides->image7 = 'slides/' . $name6;
            $path6 = public_path('slides/'.$name6);
            Image::make($path6)->resize(834,690)->save($path6);
        }
        if($request->hasfile('image8') ){
            $image6 = $request->file('image8');
            $name6 = time() . 'img' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'slides/';
            $image6->move($destinationPath, $name6);
            $slides->image8 = 'slides/' . $name6;
            $path6 = public_path('slides/'.$name6);
            Image::make($path6)->resize(834,690)->save($path6);
        }
        $slides->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
