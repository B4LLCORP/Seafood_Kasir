<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Middleware\Adminmiddle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});

//dashboard
Route::get('admin/dashboard',[AdminController::class,'index'])->middleware(Adminmiddle::class);
Route::get('logout',[PelangganController::class,'logout']);

//CRUD Admin
Route::get('admin/registrasi',[AdminController::class,'viewregis']);
Route::post('cekadmin',[AdminController::class,'tambahregis']);
Route::get('hapusadmin/{id}',[AdminController::class,'hapusadmin']);
Route::get('editregis/{id}',[AdminController::class,'edita']);
Route::post('editregis/{id}',[AdminController::class,'editregis']);

//CRUD Produk
Route::get('admin/produk',[ProdukController::class,'viewproduk']);
Route::post('cekproduk',[ProdukController::class,'tambahproduk']);
Route::get('hapusadmin/{id}',[ProdukController::class,'hapusproduk']);
Route::get('editproduk/{id}',[ProdukController::class,'edital']);
Route::post('editproduk/{id}',[ProdukController::class,'editproduk']);

//CRUD Pelanggan
Route::get('admin/pelanggan',[PelangganController::class,'index']);
Route::post('cekdata',[PelangganController::class,'tambahpelanggan']);
Route::get('hapusadmin/{id}',[PelangganController::class,'hapuspelanggan']);
Route::get('editpelanggan/{id}',[PelangganController::class,'editall']);
Route::post('editpelanggan/{id}',[PelangganController::class,'editpelanggan']);

//login
Route::get('admin/login',[AdminController::class,'login']);
Route::post('ceklogin',[AdminController::class,'ceklogin']);