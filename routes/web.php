<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});

//dashboard
Route::get('admin/dashboard',[AdminController::class,'index']);
Route::get('logout',[PelangganController::class,'logout']);

//CRUD Produk
Route::get('admin/produk',[ProdukController::class,'viewproduk']);
Route::post('cekdata',[ProdukController::class,'tambahproduk']);
Route::get('hapusadmin/{id}',[ProdukController::class,'hapusproduk']);

//CRUD Pelanggan
Route::get('admin/pelanggan',[PelangganController::class,'index']);
Route::post('cekdata',[PelangganController::class,'tambahpelanggan']);
Route::get('hapusadmin/{id}',[PelangganController::class,'hapuspelanggan']);
Route::get('editpelanggan/{id}',[PelangganController::class,'editall']);
Route::post('editpelanggan/{id}',[PelangganController::class,'editpelanggan']);

//login
Route::get('admin/login',[AdminController::class,'login']);
Route::post('ceklogin',[AdminController::class,'ceklogin']);