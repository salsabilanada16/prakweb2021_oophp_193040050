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
    $harga,
    $jmlHalaman,
    $waktuMain;

  // Method ini akan otomatis dijalankan setiap menambahkan produk
  public function __construct(
    $judul = "judul",
    $penulis = "penulis",    // Pake __ karena construct merupakan bagian dari magic method atau method spesial yang dimiliki php
    $penerbit = "penerbit",
    $harga = 0,
    $jmlHalaman = 0,
    $waktuMain = 0
  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }


  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";     // Fungsi $this untuk mengambil isi dari property yang ada dalam class yang bersangkutan ketika dibuat instancenya
  }


  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}


class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->getLabel()} 
    (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";

    return $str;
  }
}


class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()} 
    (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";

    return $str;
  }
}


class CetakInfoProduk
{
  public function cetak($produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
