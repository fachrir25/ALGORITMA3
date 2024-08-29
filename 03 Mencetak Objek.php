<?php
class Buah {
  public $nama;
  public $warna;

  public function __construct($nama, $warna){
    $this->nama = $nama;
    $this->warna = $warna;
  }
}

$apel = new Buah("Apel", "Merah");
$apel = new Buah("Apel", "Merah");
print_r($apel);
print "<p>";
print_r($apel);

print_r("<i><p><strong>By ; fachri rizki");