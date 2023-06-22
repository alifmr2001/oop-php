<?php

class laptop
{
    public $pemilik;

    public function beli_laptop()
    {
        return "beli laptop baru aja ya biar lebih bagus";
    }
}

$laptop_a = new laptop();
echo $laptop_a->pemilik;
