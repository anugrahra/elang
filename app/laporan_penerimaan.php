<?php
require_once "view/templates/header.php";
require_once "init/init.php";
?>

<div class="row justify-content-center mt-3 mb-3">
  <h1><b>Laporan Penerimaan</b></h1>
</div>

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">No. Surat Jalan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Pemasok</th>
      <th scope="col">Penerima</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>noSuratJalan</td>
      <td>tanggal</td>
      <td>pemasok</td>
      <td>penerima</td>
      <td>keterangan</td>
    </tr>
  </tbody>
</table>

<?php require_once "view/templates/footer.php"; ?>