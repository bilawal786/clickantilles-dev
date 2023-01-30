<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use Image;


class UserController extends Controller
{
    public $successStatus = 200;


    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => 'Remplir les champs obligatoires'], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->fname;
        return response()->json(['success' => $success], $this->successStatus);
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json(new UserResource($user));
    }

    public function detailsAll()
    {
        return response()->json(UserResource::collection(User::all()));
    }

    public function userUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => 'Remplir les champs obligatoires'], 401);
        }
        $user = Auth::user();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->password = bcrypt($request->password);
        if ($user->save()) {
            return response()->json(['success' => 'Mise à jour du profil réussie']);
        } else {
            return response()->json(['error' => 'Quelque chose ne va pas'], 400);
        }
    }

    public function userPhotoUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => 'Aucun fichier sélectionné'], 401);
        }
        $user = Auth::user();
        if ($request->hasfile('photo')) {
            //code to remove old file
            if ($user->photo) {
                $file_old = $user->photo;
                if ($file_old != 'avatar.png') {
                    unlink($file_old);
                }
            }
            $newimage = $request->file('photo');
            $name = uniqid() . 'img' . '.' . $newimage->getClientOriginalExtension();
            $destinationPath = 'profile-Images/';
            $newimage->move($destinationPath, $name);
            $user->photo = 'profile-Images/' . $name;
            //Resize image
            $path = public_path('profile-Images/' . $name);
            $img = Image::make($path)->resize(250, 250)->save($path);
        }
        if ($user->save()) {
            return response()->json(['success' => 'Photo de profil mise à jour']);
        } else {
            return response()->json(['error' => 'Quelque chose ne va pas'], 400);
        }
    }
    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'oldpassword' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => 'Remplir les champs obligatoires'], 401);
        }
//        $user = Auth::user();

    }

}
