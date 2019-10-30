<?php

// require_once "Classes/Database.php";
// require_once "Classes/Barang.php";
// require_once "Classes/Petugas.php";
// require_once "Classes/Transaksi.php";

spl_autoload_register(function($class) {
  require_once "Classes/" . $class . ".php";
});