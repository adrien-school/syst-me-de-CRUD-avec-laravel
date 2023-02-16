<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\CreateUsuer;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class UserRegister extends Controller
{
    public function register(){
        return view('users.register') ;
    }
    public function HandlerRegister(User $users ,CreateUsuer $request){
        $verify =$request ;
        if($verify){
            $users->name= $request->name ;
            $users->email =$request->email ;
            $users->password= Hash::make($request->password)  ;
            $users->save() ;
            return redirect()->route('home')->with('success' ,'votre compte a ete creer !' ) ;
        };


    }

    public function login(){
        return view('users.login');
    }

    public function HandlerLogin(Request $request,User $users){
        $verify =$request->validate([
            'email'=>['required','email'] ,
            'password'=>['required']
        ]) ;
        if($verify){
       if(Auth::attempt($verify)){
        $request->session()->regenerate() ;
        return redirect()->intended('home') ;
       }else{
        return redirect()->back()->with('success','identifiant incorrect') ;
       }
        }else{
            
        return redirect()->back()->with('success','identifiant incorrect') ;
        }
    }

    public function dasbord(){
        return view('users.dasbord') ;
    }
    public function logout(){
        Session::flush();
        Auth::logout() ;
        return redirect('login') ;
        
    }

    }

