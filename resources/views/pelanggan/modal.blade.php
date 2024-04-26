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
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="NamaPelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" name="NamaPelanggan" id="NamaPelanggan" placeholder="Masukan nama lengkap pelanggan" >
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Masukan alamat dengan benar" >
                    </div>
                    <div class="form-group">
                        <label for="NomorTelepon">Nomor Telepon</label>
                        <input type="text" class="form-control" name="NomorTelepon" id="NomorTelepon" placeholder="Masukan no telepon aktif" >
                    </div>
                    <button type="submit" class="btn btn-outline-primary float-right">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>