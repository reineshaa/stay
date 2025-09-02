<?php

class ProductModel extends Connection
{
    // protect variable untuk kebutuhan insert data
    protected $nama;
    protected $kontak;
    protected $angkatan;
    protected $acara;
    protected $lokasi;
    protected $tanggal;
    protected $status;


    protected function findAll()
    {
        $sql = "SELECT * FROM peserta";
        $result = $this->connect()->query($sql); //call function dari default mysql
        if ($result->num_rows > 0 ) {
            while ($data = mysql_fetch_assoc($result)) {
                $participate[] = $data;
            }
            return $participate;
        }
    }

    protected function findOne($id)
    {
        $sql = "SELECT * FROM peserta WHERE id = " . $id;
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysql_fetch_assoc($result)) {
                $participate[] = $data;
            }
            return $participate;
        }
    }
}
?>