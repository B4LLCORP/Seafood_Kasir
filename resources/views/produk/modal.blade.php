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
                <form action="{{url('cekproduk')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="NamaProduk">Nama Produk</label>
                        <input type="text" class="form-control" name="NamaProduk" id="NamaProduk" placeholder="Masukan nama produk">
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="text" class="form-control" name="Harga" id="Harga" placeholder="Masukan harga dengan benar">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukan stok dengan teliti">
                    </div>
                    <button type="submit" class="btn btn-outline-primary float-right">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>