@extends('layout.app')

@section('title', ' - Pelanggan Seafood Bakaran')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Pelanggan</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-white">
                        <h4 class="text-primary">Data Pelanggan</h4>
                        <div class="card-header-form float-right">
                            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#form-tambah"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <table class="table table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->PelangganID}}</td>
                                    <td>{{$item->NamaPelanggan}}</td>
                                    <td>{{$item->Alamat}}</td>
                                    <td>{{$item->NomorTelepon}}</td>
                                    <td>
                                        <a href="{{url('editpelanggan/'.$item->PelangganID)}}" class="btn btn-success btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="{{url('hapusadmin/'.$item->PelangganID)}}" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('pelanggan.modal');
@include('pelanggan.edit');
@endsection