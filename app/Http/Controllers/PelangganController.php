<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    //Tampilan data Pelanggan
    public function index(){
        $el = new pelanggan;
        return view('pelanggan.index',['data'=>$el->all()]);
    }

    //Tambah data Pelanggan
    public function tambahpelanggan(Request $request){
        $el = new pelanggan;
        $el->create([
            'PelangganID'=>$request->input('PelangganID'),
            'NamaPelanggan'=>$request->input('NamaPelanggan'),
            'Alamat'=>$request->input('Alamat'),
            'NomorTelepon'=>$request->input('NomorTelepon'),
        ]);
        return redirect('admin/pelanggan');
    }

    //Edit data pelanggan
    public function editall($id){
        $e = pelanggan::select('*')->where('PelangganID',$id)->get();
            return view('pelanggan.edit',['data'=>$e]);
        
    }
    public function editpelanggan(Request $request ,$id){
        $e = pelanggan::where('PelangganID',$id)->update([
            'NamaPelanggan'=>$request->NamaPelanggan,
            'Alamat'=>$request->Alamat,
            'NomorTelepon'=>$request->NomorTelepon
            
        ]);
        return redirect('admin/pelanggan')->with('pesan','data berhasil diedit');
    }

    //Hapus data pelanggan
    public function hapuspelanggan($id){
        $el = pelanggan::where('PelangganID',$id)->delete();
        return back();
    }

    public function logout(){
        session()->flush();
        return  redirect('admin/login');
    }


}
