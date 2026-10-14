<?php

class Kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;

    public function tampilkanData()
    {
        echo "Plat Nomor : " . $this->nomor . "<br>";
        echo "Merk       : " . $this->merk . "<br>";
        echo "Jenis      : " . $this->jenis . "<br>";
    }

    public function statusKendaraan($status)
    {
        echo "Status     : " . $status . "<br><br>";
    }
}


class Pelanggan
{
    public $id;
    public $nama;
    public $alamat;

    public function tampilkanData()
    {
        echo "ID Pelanggan : " . $this->id . "<br>";
        echo "Nama         : " . $this->nama . "<br>";
        echo "Alamat       : " . $this->alamat . "<br>";
    }

    public function sewaKendaraan($platNomor)
    {
        echo "Sewa Mobil   : " . $platNomor . "<br><br>";
    }
}


echo "=== DATA KENDARAAN ===<br>";
$kdr1 = new Kendaraan();
$kdr1->nomor = "B 1234 ABC";
$kdr1->merk = "Toyota Avanza";
$kdr1->jenis = "Minibus";
$kdr1->tampilkanData();
$kdr1->statusKendaraan("Tersedia");

$kdr2 = new Kendaraan();
$kdr2->nomor = "D 5678 XYZ";
$kdr2->merk = "Honda Civic";
$kdr2->jenis = "Sedan";
$kdr2->tampilkanData();
$kdr2->statusKendaraan("Disewa");


echo "=== DATA PELANGGAN ===<br>";
$pelanggan1 = new Pelanggan();
$pelanggan1->id = "P001";
$pelanggan1->nama = "Rian";
$pelanggan1->alamat = "Jakarta";
$pelanggan1->tampilkanData();
$pelanggan1->sewaKendaraan($kdr2->nomor);
?>