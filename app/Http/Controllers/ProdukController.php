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
        $el->create([
            'ProdukID'=>$request->input('ProdukID'),
            'NamaProduk'=>$request->input('NamaProduk'),
            'Harga'=>$request->input('Harga'),
            'stok'=>$request->input('stok'),
        ]);
        return redirect('admin/produk');
    }

    //edit produk

    

    //end edit produk

    //delete produk
    public function hapusproduk($id){
        $el = produk::where('ProdukID',$id)->delete();
        return back();
    }

}
