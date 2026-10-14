
<?php

class Mahasiswa {

    private $nilai;

    public function setNilai($nilai) {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
        } else {
            echo "Nilai tidak valid!";
        }
    }

    public function getNilai() {
        return $this->nilai;
    }

}

$mhs1 = new Mahasiswa();

$mhs1->setNilai(85);

echo "Nilai: " . $mhs1->getNilai();

?>
