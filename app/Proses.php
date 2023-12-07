<?php
include "../inc/Connection.php";

if (isset($_POST['login'])) {
    $conn = new Connection();
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $queryUser = "SELECT * FROM user where username = '$user'";
    $trxUser = $conn->conn->prepare($queryUser);
    $trxUser->execute();
    if ($trxUser->rowCount() > 0) {
        $data = $trxUser->fetchAll()[0];
        if (password_verify($pass, $data['password'])) {
            session_start();
            $_SESSION['uid'] = $data['id'];
            $_SESSION['nama'] = $data['akses'];
            $_SESSION['isLogin'] = true;
            header('Location: http://localhost/perpustakaan/index.php');
        } else {
            echo "Password yang anda masukkan tidak sesuai";
        }
    } else {
        echo "User tidak ditemukan";
    }
} else if (isset($_POST['tambah_anggota'])) {
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
    if ($cek != true) {
        echo $cek;
    } else
        header("Location: http://localhost/perpustakaan/index.php/buku");
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
} else if (isset($_POST['ubah_anggota']) == "anggota") {
    // echo $_POST['nama'];
    include "Anggota.php";
    $agt = new Anggota();
    // Mapping data
    $data = [
        "nama" => $_POST['nama'],
        "jenis_kelamin" => $_POST['jenis_kelamin'],
        "no_telp" => $_POST['no_telp'],
        "alamat" => $_POST['alamat'],
        "id_anggota" => $_POST['id_anggota'],

    ];
    // print_r($data);

    // Proses Tambah
    $agt->ubah($data);
    header("Location: http://localhost/perpustakaan/index.php/anggota");
} else if (isset($_GET['hapus']) && $_GET['hapus'] == 'anggota') {
    // echo "Hapus Anggota";
    include "Anggota.php";
    $agt = new Anggota();
    $agt->hapus($_GET['id_anggota']);
    header("Location: http://localhost/perpustakaan/index.php/anggota");
} else if (isset($_POST['ubah_buku']) == "buku") {
    // echo $_POST['nama'];
    include "Buku.php";
    $bk = new Buku();
    // Mapping data
    $data = [
        "judul" => $_POST['judul'],
        "pengarang" => $_POST['pengarang'],
        "kategori" => $_POST['kategori'],
        "penerbit" => $_POST['penerbit'],
        "tahun" => $_POST['tahun'],
        "id_buku" => $_POST['id_buku'],

    ];
    // print_r($data);

    // Proses Tambah
    $bk->ubah($data);
    header("Location: http://localhost/perpustakaan/index.php/buku");
} else if (isset($_GET['hapus']) && $_GET['hapus'] == 'buku') {
    // echo "Hapus Buku";
    include "Buku.php";
    $bk = new Buku();
    $bk->hapus($_GET['id_buku']);
    header("Location: http://localhost/perpustakaan/index.php/buku");
} else if (isset($_POST['ubah_peminjaman']) == "peminjaman") {
    // echo $_POST['nama'];
    include "Peminjaman.php";
    $pjm = new Peminjaman();
    // Mapping data
    $data = [
        "tgl_pinjam" => $_POST['tgl_pinjam'],
        "tgl_kembali" => $_POST['tgl_kembali'],
        "id_anggota" => $_POST['id_anggota'],
        "id_buku" => $_POST['id_buku'],
        "id_peminjaman" => $_POST['id_peminjaman'],

    ];
    // print_r($data);

    // Proses Tambah
    $pjm->ubah($data);
    header("Location: http://localhost/perpustakaan/index.php/peminjaman");
} else if (isset($_GET['hapus']) && $_GET['hapus'] == 'peminjaman') {
    // echo "Hapus Peminjaman";
    include "Peminjaman.php";
    $pjm = new Peminjaman();
    $pjm->hapus($_GET['id_peminjaman']);
    header("Location: http://localhost/perpustakaan/index.php/peminjaman");
} else if (isset($_POST['ubah_petugas']) == "petugas") {
    // echo $_POST['nama'];
    include "Petugas.php";
    $pts = new Petugas();
    // Mapping data
    $data = [
        "username" => $_POST['username'],
        "password" => $_POST['password'],
        "nama" => $_POST['nama'],
        "id" => $_POST['id'],

    ];
    // print_r($data);

    // Proses Tambah
    $pts->ubah($data);
    header("Location: http://localhost/perpustakaan/index.php/petugas");
} else if (isset($_GET['hapus']) && $_GET['hapus'] == 'petugas') {
    // echo "Hapus Petugas";
    include "Petugas.php";
    $pts = new Petugas();
    $pts->hapus($_GET['id']);
    header("Location: http://localhost/perpustakaan/index.php/petugas");
}
