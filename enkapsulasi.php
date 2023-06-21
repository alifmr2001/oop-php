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
