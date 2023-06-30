<?php
// nama kelasnya adalah hewan
class hewan
{
    //buat property
    var $nama_hewan;

    //method untuk kelas hewan
    function gerakan_hewan()
    {
        return " adalah makhluk hidup yang bisa bergerak";
    }
}
// buat objek baru =
$hewan_darat = new hewan();
$hewan_air = new hewan();
$hewan_udara = new hewan();

// set propery =
$hewan_darat->nama_hewan = "kucing";

// tampilkan property:
$hewan_udara = new hewan();
$hewan_udara->nama_hewan = "burung";
echo $hewan_udara->nama_hewan;

echo "<br>";
//tampilkan property 
echo "#. " . $hewan_darat->nama_hewan . $hewan_darat->gerakan_hewan();

// atau bisa juga :
echo "<br>";
echo "ini adalah contoh objek lain yaitu :";
echo $hewan_air->nama_hewan = "ikan";

echo "ikan";
