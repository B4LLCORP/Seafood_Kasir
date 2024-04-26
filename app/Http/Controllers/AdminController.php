<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function login(){
        return view('admin.login');
    }
    public function ceklogin(Request $request){
        $ol  = new admin;
        $ol = $ol->where('username',$request->input('username'))->where('password',$request->input('password'));
        
        if($ol->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>$request->input('password') 
            ]);
            return redirect('admin/dashboard');
        }

    }
}
