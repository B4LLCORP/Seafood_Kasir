@extends('layout.app')

@section('title', ' -admin')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Registrasi Admin</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-white">
                        <h4 class="text-primary">Data Admin</h4>
                        <div class="card-header-form float-right">
                            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#form-tambah"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <table class="table table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>akses</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->id_kasir}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->alamat}}</td>
                                        <td>{{$item->telepon}}</td>
                                        <td>{{$item->username}}</td>
                                        <td>{{$item->password}}</td>
                                        <td>{{$item->akses}}</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="{{url('hapusadmin/'.$item->IdAdmin)}}" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('regisadmin.modal');
@endsection