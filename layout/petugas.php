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
                    <td>ACTION</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['username']; ?></td>
                        <td><?= $item['password']; ?></td>
                        <td><?= $item['nama']; ?></td>
                        <td>
                            <a href="/perpustakaan/index.php/petugas/ubah?id=<?= $item['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/perpustakaan/app/proses.php?hapus=petugas&id=<?= $item['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>