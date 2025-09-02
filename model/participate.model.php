<?php

include_once __DIR__ . "/../view/connection.php";

class ParticipateModel extends Connection
{
    // protect variable untuk kebutuhan insert data
    protected $nama;
    protected $kontak;
    protected $angkatan;
    protected $acara;
    protected $lokasi;
    protected $tanggal;
    protected $status;


    public function findAll() {
        $sql = "SELECT * FROM peserta";
        $result = $this->connect()->query($sql);

        $data = [];
        while ($row = $result->fetch_assoc()) { // ✅ mysqli
            $data[] = $row;
        }
        return $data;
    }

    public function findOne($id) {
        $sql = "SELECT * FROM peserta WHERE id = '$id'";
        $result = $this->connect()->query($sql);

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

}
?>