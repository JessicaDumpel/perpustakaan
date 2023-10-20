<?php

class Buku
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }

    public function tampil(): array
    {
        $string = "SELECT * FROM buku";
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
            $string = "INSERT INTO buku (judul, pengarang, kategori, penerbit, tahun)
            value (:judul, :pengarang, :kategori, :penerbit, :tahun)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function get_id($id): array
    {
        $string = "SELECT * FROM buku WHERE id_buku='$id'";
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
        // print_r($data);
        try {
            $string = "UPDATE buku set judul=:judul, pengarang=:pengarang, kategori=:kategori, penerbit=:penerbit, tahun=:tahun WHERE id_buku=:id_buku";
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
            $string = "DELETE FROM buku WHERE id_buku='$id'";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute();
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
