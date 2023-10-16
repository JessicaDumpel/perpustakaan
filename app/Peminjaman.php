<?php

class Peminjaman
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }

    public function tampil(): array
    {
        $string = "SELECT peminjaman.*, anggota.nama, buku.judul FROM peminjaman 
        LEFT JOIN anggota on anggota.id_anggota=peminjaman.id_anggota
        LEFT JOIN buku on buku.id_buku=peminjaman.id_buku";
        $sql = $this->conn->conn->prepare($string);
        $sql->execute();
        $data = [];
        while ($row = $sql->fetch()) {
            $data[] = $row;
        }
        return $data;
    }

    function tambah($data)
    {
        try {
            $string = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali, id_anggota, id_buku)
            value (:tgl_pinjam, :tgl_kembali, :id_anggota, :id_buku)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
