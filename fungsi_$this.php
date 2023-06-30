<?php

class laptop
{
    public $pemilik = "budi";

    public function beli_laptop()
    {
        return "beli laptop baru $this->pemilik";
    }
}

$laptop_a = new laptop();
echo  $laptop_a->beli_laptop();

echo "<br>";

$laptop_a->pemilik = "bella";
echo $laptop_a->beli_laptop();

echo "<br>";

$laptop_b = new laptop();
echo $laptop_b->beli_laptop();
