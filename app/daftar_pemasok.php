<?php
require_once "view/templates/header.php";
require_once "init/init.php";
?>

<div class="row justify-content-center mt-3 mb-3">
  <h1><b>DAFTAR PEMASOK</b></h1>
</div>

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode</th>
      <th scope="col">Pemasok</th>
      <th scope="col">Alamat</th>
      <th scope="col">Telp</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>kode</td>
      <td>pemasok</td>
      <td>alamat</td>
      <td>email</td>
    </tr>
  </tbody>
</table>

<?php require_once "view/templates/footer.php"; ?>