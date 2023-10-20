<?php
include "inc/Connection.php";
include "app/Buku.php";

$bk = new Buku();
$item = $bk->get_id($_GET['id_buku']);
?>
<div class="col-md-12">
    <div class="card">
        <div class="card header">
            Ubah Buku
        </div>
        <div class="card-body">
            <form action="/perpustakaan/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">JUDUL</label>
                    <input type="hidden" class="form-control" name="id_buku" value="<?= $item['id_buku'] ?>">
                    <input type="text" class="form-control" name="judul" value="<?= $item['judul'] ?>">
                </div>
                <div class="form-group">
                    <label for="">PENGARANG</label>
                    <input type="text" class="form-control" name="pengarang" value="<?= $item['pengarang'] ?>">
                </div>
                <div class="form-group">
                    <label for="">KATEGORI</label>
                    <input type="text" class="form-control" name="kategori" value="<?= $item['kategori'] ?>">
                </div>
                <div class="form-group">
                    <label for="">PENERBIT</label>
                    <input type="text" class="form-control" name="penerbit" value="<?= $item['penerbit'] ?>">
                </div>
                <div class="form-group">
                    <label for="">TAHUN</label>
                    <input type="text" class="form-control" name="tahun" value="<?= $item['tahun'] ?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="ubah_buku" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>