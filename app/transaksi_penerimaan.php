<?php
require_once "view/templates/header.php";
require_once "init/init.php";
?>

<div class="row justify-content-center mt-3 mb-3">
    <h1><b>Transaksi Penerimaan</b></h1>
</div>

<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="no_surat_jalan">No Surat Jalan</label>
      <input type="text" class="form-control" id="no_surat_jalan" required>
      <div class="invalid-feedback">
        Nomor Surat Jalan harus diisi
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="pemasok">Pemasok</label>
      <select class="custom-select" id="pemasok" required>
        <option value="">Pilih pemasok</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="invalid-feedback">
        Pilih pemasok. Jika tidak ada, silahkan tambahkan data pemasok <a href="daftar_pemasok.php">di sini</a>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nama_barang">Nama barang</label>
      <select class="custom-select" id="nama_barang" required>
        <option value="">Pilih barang</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="invalid-feedback">
        Pilih barang. Jika tidak ada, silahkan tambahkan data barang <a href="daftar_barang.php">di sini</a>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="jumlah_diterima">Jumlah diterima</label>
      <input type="number" class="form-control" id="jumlah_diterima" required>
      <div class="invalid-feedback">
        Jumlah barang diterima harus diisi
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="tanggal_diterima">Tanggal diterima</label>
      <input type="date" class="form-control" id="tanggal_diterima" required>
      <div class="invalid-feedback">
        Tanggal diterima harus diisi
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="penerima_barang">Penerima</label>
      <select class="custom-select" id="penerima_barang" required>
        <option value="">Pilih penerima</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="invalid-feedback">
        Penerima harus diisi
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan_penerimaan">Keterangan penerimaan</label>
    <input type="text" class="form-control" id="keterangan_penerimaan">
  </div>
  <button type="submit" class="btn btn-primary">Terima barang</button>
  <a class="btn btn-danger" href="daftar_barang.php">Batal</a>
</form>

<?php require_once "view/templates/footer.php"; ?>