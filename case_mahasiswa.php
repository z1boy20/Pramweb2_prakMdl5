<?php
class Mahasiswa {
    
    private $nama;
    private $nim;
    private $prodi;
    private $nilai;

    public function __construct($nama, $nim, $prodi){
        $this->nama=$nama;
        $this->nim=$nim;
        $this->prodi=$prodi;
    }

    public function setNilai($nilai){
        if($nilai >= 0 && $nilai <= 100){
            $this->nilai=$nilai;
        } else {
            echo "Nilai harus berada antara 0 sampai 100.  <br>" ;
        }
    }

    public function getGrade($nilai){
        if($nilai >= 80){
            return "A";
        } else if($nilai >= 70){
            return "B";
        } else if($nilai >= 60){
            return "C";
        } else if($nilai >= 50){
            return "D";
        } else {
            return "E";
        }
    }

    public function getNama(){
        return $this->nama;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getProdi(){
        return $this->prodi;
    }

    public function getNilai(){
        return $this->nilai;
    }

}

$mhs1 = new Mahasiswa(
    "Muhamad Aziz Al Fauzi", 
    "202457201039", 
    "Sistem Informasi");
$mhs1->setNilai(95);
echo "NIM : ".$mhs1->getNim();
echo "<br>";
echo "Nama : ".$mhs1->getNama();
echo "<br>";
echo "Program Studi : ".$mhs1->getProdi();
echo "<br>";
echo "Nilai : ".$mhs1->getNilai();
echo "<br>";
echo "Grade : ".$mhs1->getGrade($mhs1->getNilai());
?>