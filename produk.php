<?php

// Jualan Produk
// Komik
// Game

class Produk
{
  // Ditulis (,) karena sama-sama memiliki visibility public
  public  $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;


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


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Nasashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
