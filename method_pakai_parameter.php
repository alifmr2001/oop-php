<?php

class mobil
{
    public function jalankan_mobil($merk, $nama)
    {
        return "Hidupkana mobil merk $merk milik $nama";
    }
}

//Instansiasi / Buat Objek baru

$mobil_aisyah = new mobil();

echo $mobil_aisyah->jalankan_mobil("bmw", "Aisyah");
