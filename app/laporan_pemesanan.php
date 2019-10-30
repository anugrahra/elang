<?php
require_once "view/templates/header.php";
require_once "init/init.php";
?>

<div class="row justify-content-center mt-3 mb-3">
  <h1><b>Laporan Pemesanan</b></h1>
</div>

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">No. Order</th>
      <th scope="col">Pemesan</th>
      <th scope="col">Bagian</th>
      <th scope="col">Tanggal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>noSuratJalan</td>
      <td>tanggal</td>
      <td>pemasok</td>
      <td>penerima</td>
    </tr>
  </tbody>
</table>

<?php require_once "view/templates/footer.php"; ?>