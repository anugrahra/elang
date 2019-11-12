<?php
require_once "view/templates/header.php";
require_once "init/init.php";

$user = new User();

if( isset($_POST['submit']) ) {
  $nama_pengguna = $_POST['nama_pengguna'];
  $kata_sandi = $_POST['kata_sandi'];
  $level = $_POST['level'];

  if($user->tambah_pengguna($nama_pengguna, $kata_sandi, $level)){
    header('location: daftar_pengguna.php');
  } else {
    echo "<script>alert('Ada masalah ketika menambah data barang!');</script>";
  }
}
?>

<div class="row justify-content-center mt-3 mb-3">
  <h1><b>TAMBAH PENGGUNA</b></h1>
</div>

<div class="row">
  <div class="col-md-6">
    <form method="post"  class="needs-validation" novalidate>
      <div class="form-group">
        <label for="nama_pengguna">Nama Pengguna</label>
        <input type="text" class="form-control" name="nama_pengguna" required>
        <div class="invalid-feedback">
          Nama pengguna harus diisi
        </div>
      </div>
      <div class="form-group">
        <label for="kata_sandi">Kata Sandi</label>
        <input type="password" class="form-control" name="kata_sandi" required>
        <div class="invalid-feedback">
          Kata sandi harus diisi
        </div>
      </div>
      <div class="form-group">
        <label for="level">Tingkat</label>
        <select class="form-control" name="level" required>
          <option value="2">2</option>
          <option value="1">1</option>
        </select>
        <div class="invalid-feedback">
          Tingkat harus diisi
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary" onclick="">Tambah Pengguna</button>
    </form>
  </div>
</div>

<?php require_once "view/templates/footer.php"; ?>