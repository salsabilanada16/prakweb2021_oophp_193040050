<?php

// Untuk membuat konstanta harus huruf kapital untuk membedakan dengan yang lain
// Kalau menggunakan define tidak bisa disimpan di dalam class, kalau const bisa
// define('NAMA', 'Salsabila Nada Adzani');
// echo NAMA;      // Kalau konstanta tidak perlu menggunakan $ untuk memanggil, beda dengan variabel

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// ------------------------------------------------

// class Coba {
// const bisa disimpan di dalam class
//  const NAMA = 'Salsabila Nada Adzani';
// }

// echo Coba::NAMA;

// ------------------------------------------------

// echo __LINE__;    -> Akan menampilkan nomor baris di mana constant ini berada (24)
// echo __FILE__;    -> Akan menampilkan alamat dari file constant ini
// echo __DIR__;     -> Untuk menampilkan directory dari file yang bersangkutan
// echo __FUNCTION__;-> Untuk menentukan kita ada di function apa
// echo __CLASS__;   -> Untuk menentukan kita ada di class apa

// ------------------------------------------------

// function coba() {
//  return __FUNCTION__;    -> Menampilkan 'coba'
// }

// echo coba();

// ------------------------------------------------

class Coba
{
  public $kelas = __CLASS__; // Menampilkan 'Coba'
}

$obj = new Coba;
echo $obj->kelas;
