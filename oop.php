<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Semester : " . $this->semester . "<br><br>";
    }
}


$mhs1 = new Mahasiswa();
$mhs1->nim = "23001";
$mhs1->nama = "Surep";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 4;

echo "<h2>Data Mahasiswa 1 <br></h2>";
$mhs1->tampilkanData();


$mhs2 = new Mahasiswa();
$mhs2->nim = "23002";
$mhs2->nama = "Surap";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = 2;

echo "<h2>Data Mahasiswa 2 <br></h2>";
$mhs2->tampilkanData();
?>