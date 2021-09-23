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
    $harga;

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

class CetakInfoProduk
{
  public function cetak($produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()}, {$produk->harga}";
    return $str;
  }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
