<?php
include "inc/Connection.php";
include "app/Petugas.php";

$pts = new Petugas();
$item = $pts->get_id($_GET['id']);
?>
<div class="col-md-12">
    <div class="card">
        <div class="card header">
            Ubah Petugas
        </div>
        <div class="card-body">
            <form action="/perpustakaan/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">USERNAME</label>
                    <input type="hidden" class="form-control" name="id" value="<?= $item['id'] ?>">
                    <input type="text" class="form-control" name="username" value="<?= $item['username'] ?>">
                </div>
                <div class="form-group">
                    <label for="">PASSWORD</label>
                    <input type="text" class="form-control" name="password" value="<?= $item['password'] ?>">
                </div>
                <div class="form-group">
                    <label for="">NAMA</label>
                    <input type="text" class="form-control" name="nama" value="<?= $item['nama'] ?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="ubah_petugas" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>