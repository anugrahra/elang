<?php
require_once "view/templates/header.php";
require_once "init/init.php";
?>

<div class="row justify-content-center mt-3 mb-3">
    <h1><b>Transaksi Pengeluaran</b></h1>
</div>

<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="no_surat_pengeluaran">No Surat Pengeluaran</label>
      <input type="text" class="form-control" id="no_surat_pengeluaran" required>
      <div class="invalid-feedback">
        Nomor Surat Pengeluaran harus diisi
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="tanggal_dikeluarkan">Tanggal dikeluarkan</label>
      <input type="date" class="form-control" id="tanggal_dikeluarkan" required>
      <div class="invalid-feedback">
        Tanggal pengeluaran harus diisi
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nama_barang">Nama Barang</label>
      <select class="custom-select" id="nama_barang" required>
        <option value="">Pilih barang</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="invalid-feedback">
        Pilih barang yang ingin dikeluarkan
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="jumlah_dikeluarkan">Jumlah dikeluarkan</label>
      <input type="number" class="form-control" id="jumlah_dikeluarkan" required>
      <div class="invalid-feedback">
        Jumlah barang dikeluarkan harus diisi
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="pengambil_barang">Pengambil</label>
      <select class="custom-select" id="pengambil_barang" required>
        <option value="">Pilih pengambil</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="invalid-feedback">
        Pengambil barang harus diisi
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="bagian_pengambil">Bagian pengambil</label>
      <select class="custom-select" id="bagian_pengambil" required>
        <option value="">Pilih pengambil</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="invalid-feedback">
        Bagian pengambil harus diisi
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan_pengeluaran">Keterangan pengeluaran</label>
    <input type="text" class="form-control" id="keterangan_pengeluaran">
  </div>
  <button type="submit" class="btn btn-primary">Ambil barang</button>
  <a class="btn btn-danger" href="daftar_barang.php">Batal</a>
</form>

<?php require_once "view/templates/footer.php"; ?>