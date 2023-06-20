<?php

class handphone
{
    // membuat properti untuk kelas handphone
    var $pemilik;
    var $brand;
    var $ukuran_layar;

    // membuat method untuk kelas handphone
    function hidupkan_handphone()
    {
        return "hidupkan handphone";
    }
    function matikan_handphone()
    {
        return "hidupkan handphone";
    }
}

// Buat objek dari class handphone (instansiasi)
$handphone_alif = new handphone();

//set property
$handphone_alif->pemilik      = "alif";
$handphone_alif->brand        = "realple";
$handphone_alif->ukuran_layar = "4k";

// Tampilkan property
echo "pemilik handphone: " . $handphone_alif->pemilik;
echo "<br>";
echo $handphone_alif->brand;
echo "<br>";
echo $handphone_alif->ukuran_layar;
echo "<br>";

// Tampilkan method

echo $handphone_alif->hidupkan_handphone();
