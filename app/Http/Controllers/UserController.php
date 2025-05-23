<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Login Controll
    public function UserLogin(){
        return view('auth.login');
    }

    //Regis Controll
    public function UserRegister(){
        return view('auth.register');
    }
    
}
