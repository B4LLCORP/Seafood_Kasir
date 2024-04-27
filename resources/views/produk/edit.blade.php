<!-- Modal -->
<div class="modal fade" id="form-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLabel">Tambah Data Pasok</h5>
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
                        <label for="NamaProduk">Nama Produk</label>
                        <input type="text" class="form-control" name="NamaProduk" id="NamaProduk" placeholder="Masukan nama pelanggan" value="{{$item->NamaProduk}}">
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="text" class="form-control" name="Harga" id="Harga" placeholder="Masukan alamat dengan benar" value="{{$item->Harga}}">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" name="stok" id="stok" placeholder="Masukan nomer yang masih aktif" value="{{$item->stok}}">
                    </div>
                    <button type="submit" class="btn btn-outline-primary float-right">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>