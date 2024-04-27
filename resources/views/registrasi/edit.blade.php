<!-- Modal -->
<div class="modal fade" id="form-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLabel">Tambah Data Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action ="" method="POST">
                    @foreach ($data as $item)
                        
                    @endforeach
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama lengkap anda" value="{{$item->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan alamat dengan benar" value="{{$item->alamat}}">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Masukan nomer yang masih aktif" value="{{$item->telepon}}">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukan nomer yang masih aktif" value="{{$item->username}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukan nomer yang masih aktif" value="{{$item->password}}">
                    </div>
                    <div class="form-group">
                        <label for="">Akses</label>
                        <select class="form-select" aria-label="Default select example" id="akses" name="akses" value="{{$item->akses}}">
                            <option {{$item->akses=="admin"?"selected":""}}>admin</option>
                            <option {{$item->akses=="petugas"?"selected":""}}>Petugas</option>
                          </select>
                    </div>
                    <button type="submit" class="btn btn-outline-primary float-right">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>