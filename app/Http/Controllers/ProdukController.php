<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        return view('produk.index');
    }

    public function viewproduk(){
        $el = new produk;
        return view('produk.index',['data'=>$el->all()]);
    }
    //tambah produk post
    public function tambahproduk(Request $request){
        $el = new produk;
        if ($el->exists()) {        
        $el->create([
            'ProdukID'=>$request->input('ProdukID'),
            'NamaProduk'=>$request->input('NamaProduk'),
            'Harga'=>$request->input('Harga'),
            'stok'=>$request->input('stok'),
        ]);
    } else {
      return back();
    }
        return redirect('admin/produk');
    }

    //edit produk

    //Edit data pelanggan
    public function edital($id){
        $e = produk::select('*')->where('ProdukID',$id)->get();
            return view('produk.edit',['data'=>$e]);
        
    }
    public function editproduk(Request $request ,$id){
        $e = produk::where('ProdukID',$id)->update([
            'NamaProduk'=>$request->NamaProduk,
            'Harga'=>$request->Harga,
            'stok'=>$request->stok
            
        ]);
        return redirect('admin/produk')->with('pesan','data berhasil diedit');
    }

    //end edit produk

    //delete produk
    public function hapusproduk($id){
        $el = produk::where('ProdukID',$id)->delete();
        return back();
    }

}
