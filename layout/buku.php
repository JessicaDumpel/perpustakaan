<?php
include "inc/Connection.php";
include "app/Buku.php";
$bk = new Buku();
$data = $bk->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar Buku</h4>
            <a href="/perpustakaan/index.php/buku/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>JUDUL</td>
                    <td>PENGARANG</td>
                    <td>KATEGORI</td>
                    <td>PENERBIT</td>
                    <td>TAHUN</td>
                    <td>ACTION</td>

                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['judul']; ?></td>
                        <td><?= $item['pengarang']; ?></td>
                        <td><?= $item['kategori']; ?></td>
                        <td><?= $item['penerbit']; ?></td>
                        <td><?= $item['tahun']; ?></td>
                        <td>
                            <a href="/perpustakaan/index.php/buku/ubah?id_buku=<?= $item['id_buku'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/perpustakaan/app/proses.php?hapus=buku&id_buku=<?= $item['id_buku'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>