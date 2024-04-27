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
        return back();
    }

    public function viewregis(){
        $el = new admin;
        return view('registrasi.index',['data'=>$el->all()]);
    }

    //tambah regis kasir post
    public function tambahregis(Request $request){
        $el = new admin;
        $el->create([
            'IdAdmin'=>$request->input('IdAdmin'),
            'nama'=>$request->input('nama'),
            'alamat'=>$request->input('alamat'),
            'telepon'=>$request->input('telepon'),
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
            'akses'=>$request->input('akses'),
        ]);
        return redirect('admin/registrasi');
    }

    //Edit data admin
    public function edita($id){
        $e = admin::select('*')->where('IdAdmin',$id)->get();
            return view('registrasi.edit',['data'=>$e]);
        
    }
    public function editregis(Request $request ,$id){
        $e = admin::where('IdAdmin',$id)->update([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon,
            'username'=>$request->username,
            'password'=>$request->password,
            'akses'=>$request->akses     
        ]);
        return redirect('admin/registrasi')->with('pesan','data berhasil diedit');
    }

    //hapus data admin
    public function hapusadmin($id){
        $el = admin::where('IdAdmin',$id)->delete();
        return back();
    }
}
