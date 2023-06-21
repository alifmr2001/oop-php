<?php
// Publik
class siswa
{
    public $nama;

    public function panggilNama()
    {
        return "nama siswa adalah";
    }
}

$siswa_sd = new siswa();
$siswa_sd->nama = "Budi";
echo $siswa_sd->nama;

// protected dan cara aksesnya
// protected property hanya dapat diakses di dalam kelas itu sendiri dan tidak dapat diakses jika diluar kelas
echo "<br>";

class mobil
{
    //property yang sudah di protected
    protected $brand  = "bella";

    //akses properti method
    public function pemilik_mobil()
    {
        return $this->brand;
    }

    protected function hidupkan_mobile()
    {
        return "hidupkan mobil bella";
    }

    public function paksa_hidup()
    {
        return $this->hidupkan_mobile();
    }
}

//Buat objek baru dari kelas mobil
$mobil_bella = new mobil();

echo $mobil_bella->pemilik_mobil();

echo "<br>" . $mobil_bella->paksa_hidup();


//akses menggunakan pewarisan

//Buat sebuah kelas hp
class hp
{
    protected $chipset = "chipset yang digunakan bionic 3.1 Hz";
}

//Turunan dari kelas hp
class realme extends hp
{
    public function tampilkan_chipset()
    {
        return $this->chipset;
    }
}

//Kelas baru dari kelas realme (instansiasi)
$hp_saya = new realme();
echo "<br>" . $hp_saya->tampilkan_chipset();


// METODE PRIVATE = Hanya kelas yang memiliki property itu sendir yang bisa mengakses kelas itu
class negara
{
    private $asia = "Indonesia";

    public function nama_negara()
    {
        return $this->asia;
    }
}

echo "<br>";

$negara_asia =  new negara();
echo $negara_asia->nama_negara();

//  !!!!! ERROR jika di akses menggunakann pewarisan kelas atau penurusan kelas

class country extends negara
{
    public function nama_negara()
    {
        // return $this->nama_negara; ERROR, Variable tidak dikenali
    }
}
