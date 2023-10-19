<?php

class Anggota
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }

    public function tampil(): array
    {
        $string = "SELECT * FROM anggota";
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
            $string = "INSERT INTO anggota (nama, jenis_kelamin, no_telp, alamat)
            value (:nama, :jenis_kelamin, :no_telp, :alamat)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function get_id($id): array
    {
        $string = "SELECT * FROM anggota WHERE id_anggota='$id'";
        $sql = $this->conn->conn->prepare($string);
        $sql->execute();
        $data = [];
        while ($row = $sql->fetch()) {
            $data[] = $row;
        }
        return $data[0];
    }

    function ubah($data)
    {
        try {
            $string = "UPDATE anggota set nama=:nama, jenis_kelamin=:jenis_kelamin, no_telp=:no_telp, alamat=:alamat WHERE id=:id";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function hapus($id)
    {
        try {
            $string = "DELETE FROM anggota WHERE id_anggota='$id'";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute();
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
