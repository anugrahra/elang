<?php
require_once "view/templates/header.php";
require_once "init/init.php";
?>

<div class="row justify-content-center mt-3 mb-3">
    <h1><b>Pemesanan Barang</b></h1>
</div>

<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="no_order">No Order</label>
      <input type="text" class="form-control" id="no_order" required>
      <div class="invalid-feedback">
        Nomor Order harus diisi
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="tanggal_pemesanan">Tanggal pemesanan</label>
      <input type="date" class="form-control" id="tanggal_pemesanan" required>
      <div class="invalid-feedback">
        Tanggal pemesanan harus diisi
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="pemesan_barang">Pemesan</label>
      <select class="custom-select" id="pemesan_barang" required>
        <option value="">Pilih pemesan</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="invalid-feedback">
        Pemesan barang harus diisi
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="bagian_pemesan">Bagian pemesan</label>
      <select class="custom-select" id="bagian_pemesan" required>
        <option value="">Pilih bagian</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="invalid-feedback">
        Bagian pemesan harus diisi
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nama_barang_dipesan">Nama barang</label>
      <input type="text" class="form-control" id="nama_barang_dipesan" required>
      <div class="invalid-feedback">
        Nama barang harus diisi
      </div>
    </div>
    <div class="form-group col-md-3">
      <label for="jumlah_dipesan">Jumlah dipesan</label>
      <input type="number" class="form-control" id="jumlah_dipesan" required>
      <div class="invalid-feedback">
        Jumlah barang dipesan harus diisi
      </div>
    </div>
    <div class="form-group col-md-3">
      <label for="satuan_barang_dipesan">Satuan</label>
      <input type="number" class="form-control" id="satuan_barang_dipesan" placeholder="contoh: kg, meter, inch" required>
      <div class="invalid-feedback">
        Satuan barang harus diisi
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan_pemesanan">Keterangan pemesanan</label>
    <input type="text" class="form-control" id="keterangan_pemesanan">
  </div>
  <button type="submit" class="btn btn-primary">Pesan barang</button>
  <a class="btn btn-danger" href="daftar_barang.php">Batal</a>
</form>

<?php require_once "view/templates/footer.php"; ?>