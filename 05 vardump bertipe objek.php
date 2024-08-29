<?php
class Mobil {
    public $merk;
    public $model;
}

$mobil_baru = new Mobil();
$mobil_baru->merk = "Toyota";
$mobil_baru->model = "Corolla";

var_dump($mobil_baru);
?>

