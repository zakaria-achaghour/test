<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('login');
    }

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



    /****
     * 
     * Show Profile 
     * Edite Profile 
     * 
     */

    public function settings(){
        
        return view('admin.settings',['user'=> Auth::user()]);
    }

    public function checkPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_password'];
        $check_password = Auth::user()->password;
        if(Hash::check($current_password,$check_password)){
            return "true";
            die;
        }else {
            return "false";
            die;
        }
    }

    public function profile_edit(Request $request){
    
        dd($request);

    }
    
}


