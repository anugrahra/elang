<?php
require_once "view/templates/header.php";
require_once "init/init.php";
?>

<div class="row justify-content-center mt-3 mb-3">
  <h1><b>Kartu Stok</b></h1>
</div>

<div class="row justify-content-between">
  <div class="col-md-4">
    <table class="table table-borderless">
      <tr>
        <th>Nama Barang</th>
        <td>namaBarang</td>
      </tr>
      <tr>
        <th>Jenis Barang</th>
        <td>jenisBarang</td>
      </tr>
      <tr>
        <th>Satuan Barang</th>
        <td>satuanBarang</td>
      </tr>
    </table>
  </div>
  <div class="col-md-4">
    <table class="table table-borderless">
        <tr>
          <th>Kode Barang</th>
          <td style="border: 1px solid black;">kodeBarang</td>
        </tr>
      </table>
  </div>
</div>

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Masuk</th>
      <th scope="col">Keluar</th>
      <th scope="col">Sisa</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>tanggal</th>
      <td>keterangan</td>
      <td>masuk</td>
      <td>keluar</td>
      <td>sisa</td>
    </tr>
  </tbody>
</table>

<?php require_once "view/templates/footer.php"; ?>