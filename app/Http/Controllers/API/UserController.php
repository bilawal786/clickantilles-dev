<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Orders\OrderResource;
use App\Http\Resources\UserResource;
use App\Jobs\SendOtpJob;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use Image;
use Illuminate\Support\Facades\Hash;


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
            'password' => ['required', 'string', 'min:8'],
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->fname;
        $success['id'] = $user->id;
        return response()->json(['success' => $success], $this->successStatus);
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json(new UserResource($user));
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
            return response()->json(['error' => $validator->errors()], 400);
        }
        $user = Auth::user();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
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
            return response()->json(['error' => $validator->errors()], 400);
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
            'password' => ['required', 'string', 'min:8'],
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $user = Auth::user();
        if (Hash::check($request->oldpassword, $user->password)) {
            $user->password = Hash::make($request->password);
            if ($user->save()) {
                return response()->json(['success' => 'Password Updated Successfully']);
            } else {
                return response()->json(['error' => 'Something went wrong'], 400);
            }
        } else {
            return response()->json(['error' => 'Old Password not Matched'], 400);
        }
    }

    public function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->otp = rand(1000, 9999);
            if ($user->save()) {
                $email = $user->email;
                $otp = $user->otp;
                dispatch(new SendOtpJob($email, $otp));
                return response()->json(['success' => 'OTP Sent. Please Check your Email']);
            } else {
                return response()->json(['error' => 'Something went wrong. Try Again'], 400);
            }
        } else {
            return response()->json(['error' => 'There is no match for this email'], 404);
        }
    }

    public function confirmOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'otp' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($request->otp == $user->otp) {
                $user->otp = null;
                $user->save();
                return response()->json(['success' => 'Success. Enter New Password']);
            } else {
                return response()->json(['error' => 'OTP not Matched'], 404);
            }
        } else {
            return response()->json(['error' => 'Incorrect email'], 404);
        }
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => ['required', 'string', 'min:8'],
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            $success['token'] = $user->createToken('MyApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Something went wrong'], 400);
        }
    }
    public function userOrders()
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('status', 1)->get();
        return response()->json(OrderResource::collection($orders));
    }

}
