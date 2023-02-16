<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegister extends Controller
{
    public function register(){
        return view('users.register') ;
    }
}
