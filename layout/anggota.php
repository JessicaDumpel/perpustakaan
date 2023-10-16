<?php
include "inc/Connection.php";
include "app/Anggota.php";
$agt = new Anggota();
$data = $agt->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar Anggota</h4>
            <a href="/perpustakaan/index.php/anggota/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>No</td>
                    <td>NAMA</td>
                    <td>JENIS KELAMIN</td>
                    <td>TELP/HP</td>
                    <td>ALAMAT</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['nama']; ?></td>
                        <td><?= $item['jenis_kelamin']; ?></td>
                        <td><?= $item['no_telp']; ?></td>
                        <td><?= $item['alamat']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>