<?php

class Barang {
  private $kodeBarang,
          $namaBarang,
          $stockBarang,
          $satuanBarang,
          $jenisBarang,
          
          $db;
  
  public function __construct() {
    $this->db = new Database();
  }
  
  public function tampilkanBarang() {
    $query = "SELECT * FROM dummy";
    $result = mysqli_query($this->db->connection, $query);
    return $result;
  }
  
  public function tambahBarang() {

  }

  public function hapusBarang() {

  }

  public function editBarang() {

  }

  public function cariBarang() {
    
  }
}