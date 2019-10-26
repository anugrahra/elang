<?php

class Transaksi extends Barang {
  protected $nomorSurat,
            $petugas, // harusnya masuk class Petugas
            $bagian, // harusnya masuk class Petugas
            $tanggalTransaksi,
            $jumlahTransaksi,
            $keteranganTransaksi;
            // Barang::namaBarang
            // Barang::satuanBarang

public function __construct() {
  echo "class transaksi";
}

public function penerimaanBarang() {

}

public function pengeluaranBarang() {

}

public function pemesananBarang() {

}

public function detailPenerimaan() {

}

public function detailPengeluaran() {

}

public function detailPemesanan() {
  
}
}