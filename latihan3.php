
<?php

class Mahasiswa {

    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

}

$mhs1 = new Mahasiswa("Andi");

echo "Nama: " . $mhs1->getNama();

?>
