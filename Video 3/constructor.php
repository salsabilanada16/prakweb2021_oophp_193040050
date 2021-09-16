<?php

// Jualan Produk
// Komik
// Game

class Produk
{
  // Ditulis (,) karena sama-sama memiliki visibility public
  public  $judul,
    $penulis,
    $penerbit,
    ;

  // Method ini akan otomatis dijalankan setiap menambahkan produk
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)       // Pake __ karena construct merupakan bagian dari magic method atau method spesial yang dimiliki php
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";     // Fungsi $this untuk mengambil isi dari property yang ada dalam class yang bersangkutan ketika dibuat instancenya
  }
}


// $produk1 = new Produk();
// $produk1->judul = "Naruto";     // judul yang tadinya "judul" ditimpa menjadi "Naruto"
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";    // Biarpun di atas belum ada property "tambahProperty", akan otomatis ditambahkan
// var_dump($produk2->judul);


$produk1 = new Produk("Naruto", "Nasashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);