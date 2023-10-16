<?php
include "inc/Connection.php";
include "app/Peminjaman.php";
$pjm = new Peminjaman();
$data = $pjm->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar Peminjaman</h4>
            <a href="/perpustakaan/index.php/peminjaman/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>TANGGAL_PINJAM</td>
                    <td>TANGGAL_KEMBALI</td>
                    <td>PEMINJAM</td>
                    <td>BUKU</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['tgl_pinjam']; ?></td>
                        <td><?= $item['tgl_kembali']; ?></td>
                        <td><?= $item['nama']; ?></td>
                        <td><?= $item['judul']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>