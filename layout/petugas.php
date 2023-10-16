<?php
include "inc/Connection.php";
include "app/Petugas.php";
$pts = new Petugas();
$data = $pts->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar Petugas</h4>
            <a href="/perpustakaan/index.php/petugas/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>USERNAME</td>
                    <td>PASSWORD</td>
                    <td>NAMA</td>
                    <td>LEVEL</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['username']; ?></td>
                        <td><?= $item['password']; ?></td>
                        <td><?= $item['nama']; ?></td>
                        <td><?= $item['level']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>