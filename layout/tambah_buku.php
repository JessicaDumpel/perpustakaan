<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Buku
        </div>
        <div class="card-body">
            <form action="/perpustakaan/app/Proses.php" method="post">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label for="">Pengarang</label>
                    <input type="text" class="form-control" name="pengarang">
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control" name="kategori">
                </div>
                <div class="form-group">
                    <label for="">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit">
                </div>
                <div class="form-group">
                    <label for="">Tahun</label>
                    <input type="text" class="form-control" maxlength="4" name="tahun">
                </div>
                <div class="form-group">
                    <button type="submit" name="tambah_buku" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "app/Buku.php";
    $bk = new Buku();
    $bk->tambah($_POST);
    header("Location: http://localhost/index.php/perpustakaan/buku");
}
?>