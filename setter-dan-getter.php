<?php

// Jualan Produk
// Komik
// Game

class Produk
{
  // Ditulis (,) karena sama-sama memiliki visibility public
  private $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

  // Method ini akan otomatis dijalankan setiap menambahkan produk
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)     // Pake __ karena construct merupakan 
  {                                                                                                           // bagian dari magic method atau method spesial yang dimiliki php
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // Method Setter dan Getter dari atribut di atas
  public function setJudul($judul)
  {
    $this->judul = $judul;
  }

  public function getJudul()
  {
    return $this->judul;
  }

  public function setPenulis($penulis)
  {
    $this->penulis = $penulis;
  }

  public function getPenulis()
  {
    return $this->penulis;
  }

  public function setPenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }

  public function getPenerbit()
  {
    return $this->penerbit;
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getDiskon()
  {
    return $this->diskon;
  }

  public function setHarga($harga)
  {
    $this->harga = $harga;
  }

  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }
  // ----------------------------------------------------------

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
  public $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";   // Dikasi concat (" . ... .") karena parent bukan variabel jd tidak bisa pake {}

    return $str;
  }
}


class Game extends Produk
{
  public $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain = $waktuMain;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";

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


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";


$produk1->setPenulis("Salsabila Nada Adzani");
echo $produk1->getJudul();
