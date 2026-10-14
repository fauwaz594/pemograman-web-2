<?php
class Buku
{
    public $kode;
    public $judul;
    public $penulis;
    public $tahun;

    public function tampilkanData()
    {
        echo "Kode Buku : " . $this->kode . "<br>";
        echo "Judul     : " . $this->judul . "<br>";
        echo "Penulis   : " . $this->penulis . "<br>";
        echo "Tahun     : " . $this->tahun . "<br><br>";
    }
}

echo  "<h2> SISTEM DATA BUKU <br> </h2>";
$buku1 = new Buku();
$buku1->kode = "BK001";
$buku1->judul = "seto jos jis";
$buku1->penulis = "Surep";
$buku1->tahun = "2023";
$buku1->tampilkanData();



class MahasiswaNilai
{
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    public function tentukanGrade()
    {
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

    public function tampilkanData()
    {
        echo "NIM   : " . $this->nim . "<br>";
        echo "Nama  : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->tentukanGrade() . "<br><br>";
    }
}

echo "<h2> SISTEM DATA MAHASISWA & GRADE <br> </h2>";
$mhs = new MahasiswaNilai();
$mhs->nim = "23001";
$mhs->nama = "Surep";
$mhs->prodi = "Sistem Informasi";
$mhs->nilai = 85;
$mhs->tampilkanData();
?>