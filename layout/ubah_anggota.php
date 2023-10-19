<?php
include "inc/Connection.php";
include "app/Anggota.php";

$agt = new Anggota();
$item = $anggota->get_id($_GET['idanggota']);
?>
<div class="col-md-12">
    <div class="card">
        <div class="card header">
            Ubah Anggota
        </div>
        <div class="card-body">
            <form action="/perpustakaan/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="hidden" class="form-control" name="id" value="<?= $item['id'] ?>">
                    <input type="text" class="form-control" name="nama" value="<?= $item['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="">JENIS_KELAMIN</label>
                    <input type="text" class="form-control" name="jenis_kelamin" value="<?= $item['jenis_kelamin'] ?>">
                </div>
                <div class="form-group">
                    <label for="">NO_TELP</label>
                    <input type="text" class="form-control" name="no_telp" value="<?= $item['no_telp'] ?>">>
                </div>
                <div class="form-group">
                    <label for="">ALAMAT</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $item['alamat'] ?>">>
                </div>
                <div class="form-group">
                    <button type="submit" name="ubah_anggota" class="btn btn-primary btn-sm">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
