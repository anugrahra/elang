<?php
require_once "view/templates/header.php";
require_once "init/init.php";
?>

<div class="row justify-content-center mt-3 mb-3">
  <h1><b>Laporan Pengeluaran</b></h1>
</div>

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">No. Surat Pengambilan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Pengambil</th>
      <th scope="col">Bagian</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>noSuratPengambilan</td>
      <td>tanggal</td>
      <td>pengambil</td>
      <td>bagian</td>
    </tr>
  </tbody>
</table>

<?php require_once "view/templates/footer.php"; ?>