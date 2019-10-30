<?php
require_once "view/templates/header.php";
require_once "init/init.php";
?>

<div class="row justify-content-center mt-3 mb-3">
  <h1><b>Stock Opname</b></h1>
</div>

<table class="table table-bordered table-hover text-center">
  <thead>
    <tr>
      <th scope="col" rowspan="2" class="align-middle">#</th>
      <th scope="col" rowspan="2" class="align-middle">Nama Barang</th>
      <th scope="col" rowspan="2" class="align-middle">Satuan</th>
      <th scope="col" colspan="4">Volume</th>
      <th scope="col" rowspan="2" class="align-middle">Keterangan</th>
    </tr>
    <tr>
      <th scope="col">Saldo Awal</th>
      <th scope="col">Masuk</th>
      <th scope="col">Keluar</th>
      <th scope="col">Saldo Akhir</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>namaBarang</td>
      <td>satuan</td>
      <td>saldoAwal</td>
      <td>masuk</td>
      <td>keluar</td>
      <td>saldoAkhir</td>
      <td>keterangan</td>
    </tr>
  </tbody>
</table>

<?php require_once "view/templates/footer.php"; ?>