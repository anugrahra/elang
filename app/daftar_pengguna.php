<?php
require_once "view/templates/header.php";
require_once "init/init.php";

$user = new User();
$pengguna = $user->tampilkan_pengguna();
$no = 1;
?>

<div class="row justify-content-center mt-3 mb-3">
  <h1><b>DAFTAR PENGGUNA</b></h1>
</div>

<div class="row mb-1">
  <div class="col-md-6">
    <a href="tambah_pengguna.php" class="btn btn-success">Tambah Pengguna</a>
  </div>
</div>

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pengguna</th>
      <th scope="col">Tingkat</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = mysqli_fetch_assoc($pengguna)): ?>
    <tr>
      <td><?=$no++;?></td>
      <td><?=$row['username'];?></td>
      <td><?=$row['level'];?></td>
    </tr>
  <?php endwhile; ?>
  </tbody>
</table>

<?php require_once "view/templates/footer.php"; ?>