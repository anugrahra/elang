<?php
require_once "view/templates/header.php";
require_once "init/init.php";
?>

<div class="row justify-content-center mt-3 mb-3">
  <h1><b>Laporan Penerimaan</b></h1>
</div>

<form action="">
  <div class="form-row justify-content-end">
    <div class="col-md-2 form-group">
      <label for="pilih_bulan" class="sr-only">Pilih Bulan</label>
      <select class="form-control" id="pilih_bulan" class="sr-only">
        <option value="">-- Pilih Bulan --</option>
        <option value="01">Januari</option>
        <option value="02">Februari</option>
        <option value="03">Maret</option>
        <option value="04">April</option>
        <option value="05">Mei</option>
        <option value="06">Juni</option>
        <option value="07">Juli</option>
        <option value="08">Agustus</option>
        <option value="09">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
      </select>
    </div>
    <div class="col-md-2 form-group">
      <label for="pilih_tahun" class="sr-only">Pilih Tahun</label>
      <select class="form-control" id="pilih_tahun" class="sr-only">
        <option value="">-- Pilih Tahun --</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </div>
</form>

<div class="row justify-content-center mb-2">
  <!-- nanti ganti pake variabel default ya -->
  <b>Tahun <?=date("Y");?></b>
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