<?php

class Petugas
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }

    public function tampil(): array
    {
        $string = "SELECT * FROM petugas";
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
            $string = "INSERT INTO petugas (username, password, nama)
            value (:username, :password, :nama)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function get_id($id): array
    {
        $string = "SELECT * FROM petugas WHERE id='$id'";
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
            $string = "UPDATE petugas set username=:username, password=:password, nama=:nama WHERE id=:id";
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
            $string = "DELETE FROM petugas WHERE id='$id'";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute();
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
