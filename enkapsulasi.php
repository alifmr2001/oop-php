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
