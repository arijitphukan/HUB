<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Models\User;

class UserController extends Controller
{
    function usercreation(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'username'=>'required',
            'password'=>'required|min:8|max:12',
            'confirm_password'=>'required|same:password',
            'date_of_birth'=>'required'
        ]);
    }
    function userlogin(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
    }
}
