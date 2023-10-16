<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Petugas
        </div>
        <div class="card-body">
            <form action="/perpustakaan/app/Proses.php" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>

                <div class="form-group">
                    <label for="">Level</label>
                    <input type="text" class="form-control" name="level">
                </div>
                <div class="form-group">
                    <button type="submit" name="tambah_petugas" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "app/Petugas.php";
    $pts = new Petugas();
    $pts->tambah($_POST);
    header("Location: http://localhost/index.php/perpustakaan/petugas");
}
?>