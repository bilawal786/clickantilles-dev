<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function simpleusers(){
        $users = User::where('role', 1)->paginate(10);
        return view('admin.users.index',compact('users'));
    }

    public function prousers(){
        $users = User::where('role', 2)->paginate(10);
        return view('admin.users.index',compact('users'));
    }
}
