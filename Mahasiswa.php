<?php

class Mahasiswa
{
    public $nama;
    public $nim;
    public $kelas;

    function __construct($nama, $nim, $kelas)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->kelas = $kelas;
    }

    function data()
    {
        return "Nama: $this->nama NIM: $this->nim Kelas: $this->kelas";
    }
}

class Nilai extends Mahasiswa {
    private $matakuliah;
    private $angka;

    public function __construct($nama, $nim, $kelas, $matakuliah, $angka) {
        parent::__construct($nama, $nim, $kelas);
        $this->matakuliah = $matakuliah;
        $this->angka = $angka;
    }

    public function grade() {
        if ($this->angka >= 85) {
            return 'A';
        } elseif ($this->angka >= 70) {
            return 'B';
        } elseif ($this->angka >= 60) {
            return 'C';
        } elseif ($this->angka >= 50) {
            return 'D';
        } else {
            return 'E';
        }
    }

    public function dataNilai() {
        return "Matakuliah: $this->matakuliah Angka: $this->angka <br/>
        Grade: " . $this->grade();
    }
}

class SKS extends Mahasiswa
{
    private $IPK;

    function __construct($nama, $nim, $kelas, $IPK)
    {
        parent::__construct($nama, $nim, $kelas);
        $this->IPK = $IPK;
    }

    function SKS()
    {
        if ($this->IPK >= 3.0) {
            return 24;
        } elseif ($this->IPK >= 2.5) {
            return 20;
        } else {
            return 16;
        }
    }
}

$mahasiswa1 = new Mahasiswa("Andra", "23.230.0037", "3P52");
echo $mahasiswa1->data() . "<br/>";
echo "<br/>";
$nilai1 = new Nilai("Andra", "23.230.0037", "3P52", "Matematika", 88);
echo $nilai1->data() . "<br/> " . $nilai1->dataNilai() . "<br/>";
echo "<br/>";
$sks1 = new SKS("Andra", "23.230.0037", "3P52", 3.2);
echo $sks1->data() . "<br/> SKS yang dapat diambil: " . $sks1->SKS() . "<br/>";

?>