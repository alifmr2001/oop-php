<?php

class laptop
{
    public $pemilik;

    public function beli_laptop()
    {
        return "beli laptop";
    }
}

$laptop_a = new laptop();
echo $laptop_a->pemilik;
