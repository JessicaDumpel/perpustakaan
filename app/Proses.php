<?php
include "../inc/Connection.php";
if (isset($_POST['tambah_anggota'])) {
    include "Anggota.php";
    $agt = new Anggota();
    // Mapping data
    $data = [
        "nama" => $_POST['nama'],
        "jenis_kelamin" => $_POST['jenis_kelamin'],
        "no_telp" => $_POST['no_telp'],
        "alamat" => $_POST['alamat'],
    ];
    // Proses Tambah
    $agt->tambah($data);
    header("Location: http://localhost/perpustakaan/index.php/anggota");
} else if (isset($_POST['tambah_buku'])) {
    include "Buku.php";
    $bk = new Buku();
    // Mapping data
    $data = [
        "judul" => $_POST['judul'],
        "pengarang" => $_POST['pengarang'],
        "kategori" => $_POST['kategori'],
        "penerbit" => $_POST['penerbit'],
        "tahun" => $_POST['tahun'],
    ];
    // print_r($data);
    // Proses Tambah
    $cek = $bk->tambah($data);
    // if ($cek != true) {
    //     echo $cek;
    // } else
    //     header("Location: http://localhost/perpustakaan/index.php/buku");
} else if (isset($_POST['tambah_peminjaman'])) {
    include "Peminjaman.php";
    $pjm = new Peminjaman();
    // Mapping data
    $data = [
        "tgl_pinjam" => $_POST['tgl_pinjam'],
        "tgl_kembali" => $_POST['tgl_kembali'],
        "id_anggota" => $_POST['id_anggota'],
        "id_buku" => $_POST['id_buku']
    ];
    // Proses Tambah
    $pjm->tambah($data);
    header("Location: http://localhost/perpustakaan/index.php/peminjaman");
} else if (isset($_POST['tambah_petugas'])) {
    include "Petugas.php";
    $pts = new Petugas();
    // Mapping data
    $data = [
        "username" => $_POST['username'],
        "password" => $_POST['password'],
        "nama" => $_POST['nama']
    ];
    $pts->tambah($data);
    header("Location: http://localhost/perpustakaan/index.php/petugas");
} else if (isset($_POST['ubah_siswa'])) {
    // echo $_POST['nama'];
    include "Anggota.php";
    $agt = new Anggota();
    // Mapping data
    $data = [
        "nama" => $_POST['nama'],
        "jenis_kelamin" => $_POST['jenis_kelamin'],
        "no_telp" => $_POST['no_telp'],
        "alamat" => $_POST['alamat'],
        "id" => $_POST['id']
    ];
    // echo json_encode($data);
    $cek = $sw->ubah($data);
    // Proses Tambah
    if ($cek) {
        header("Location: http://localhost/perpustakaan/index.php/anggota");
    } else echo $cek;
} else if (isset($_GET['hapus']) && $_GET['hapus'] == 'anggota') {
    // echo "Hapus Anggota";
    include "Anggota.php";
    $agt = new Anggota();
    $agt->hapus($_GET['id_anggota']);
    header("Location: http://localhost/perpustakaan/index.php/anggota");
}
