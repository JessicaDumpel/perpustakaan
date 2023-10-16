<?php
include "inc/Connection.php";
include "app/Anggota.php";
include "app/Buku.php";
$buku = new Buku();
$anggota = new Anggota();
$dtBuku = $buku->tampil();
$dtAnggota = $anggota->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Peminjaman
        </div>
        <div class="card-body">
            <form action="/perpustakaan/app/Proses.php" method="post">
                <div class="form-group">
                    <label for="">Tgl_pinjam</label>
                    <input type="date" class="form-control" name="tgl_pinjam">
                </div>
                <div class="form-group">
                    <label for="">Tgl_kembali</label>
                    <input type="date" class="form-control" name="tgl_kembali">
                </div>
                <div class="form-group">
                    <label for="">Anggota</label>
                    <select class="form-control" name="id_anggota">
                        <option>Pilih Anggota</option>
                        <?php foreach ($dtAnggota as $key => $item) : ?>
                            <option value="<?= $item['id_anggota'] ?>"><?= $item['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Buku</label>
                    <select class="form-control" name="id_buku">
                        <option>Pilih buku</option>
                        <?php foreach ($dtBuku as $key => $item) : ?>
                            <option value="<?= $item['id_buku'] ?>"><?= $item['judul'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="tambah_peminjaman" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "app/Peminjaman.php";
    $pjm = new Peminjaman();
    $pjm->tambah($_POST);
    header("Location: http://localhost/index.php/perpustakaan/peminjaman");
}
?>