<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            if(Auth::attempt(['email' => $request->input('login'),'password'=>$request->input('password')])){
               return redirect()->route('dash');
               
            }
            else {
         
                return redirect()->route('login')->with(['error' => 'invalide Username or password!!']);
            }
        }
       

        return view('admin.login');
    }

    public function logout(){

        Session::flush();
        return redirect()->route('login')->with(['success' => 'logout succefuly']);
    }

    public function dash(){
        return view('admin.dashboard');
    }
}
