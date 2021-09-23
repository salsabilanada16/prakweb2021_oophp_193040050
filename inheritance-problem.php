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
    $waktuMain,
    $tipe;

  // Method ini akan otomatis dijalankan setiap menambahkan produk
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)       // Pake __ karena construct merupakan bagian dari magic method atau method spesial yang dimiliki php
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";     // Fungsi $this untuk mengambil isi dari property yang ada dalam class yang bersangkutan ketika dibuat instancenya
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else if ($this->tipe == "Game") {
      $str .= " ~ {$this->waktuMain} Jam.";
    }

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


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
