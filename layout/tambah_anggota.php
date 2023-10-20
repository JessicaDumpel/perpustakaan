<?php
include "inc/Connection.php";
include "app/Anggota.php";
$agt = new Anggota();
$data = $agt->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card header">
            Tambah Anggota
        </div>
        <div class="card-body">
            <form action="/perpustakaan/app/Proses.php" method="post">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="">JENIS_KELAMIN</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value='L'>Laki-laki</option>
                        <option value='P'>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">NO_TELP</label>
                    <input type="text" class="form-control" name="no_telp">
                </div>
                <div class="form-group">
                    <label for="">ALAMAT</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <button type="submit" name="tambah_anggota" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "app/Anggota.php";
    $agt = new Anggota();
    $agt->tambah($_POST);
    header("Location: http://localhost/index.php/perpustakaan/anggota");
}
?>