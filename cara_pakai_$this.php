<?php

class mobil
{
    public $pemilik;
    public $brand;

    public function hidupkan_mobil()
    {
        return "hidupkan mobil merk : $this->brand milik $this->pemilik";
    }
    public function matikan_mobil()
    {
        return "matikan mobil merk : $this->brand milik $this->pemilik";
    }

    public function restart_mobil()
    {
        $hidupkan = $this->hidupkan_mobil();
        $matikan  = $this->matikan_mobil();
    }
}

$bagus = new mobil();
$bagus->pemilik = "Bagus";
$bagus->brand   = "Aston Martin";

echo $bagus->hidupkan_mobil();
