<?php
require_once "view/templates/header.php";
require_once "init/init.php";

$db = new Database();
$barang = new Barang();
$petugas = new Petugas();
$transaksi = new Transaksi();

$daftarBarang = $barang->tampilkanBarang();

?>

<div class="row justify-content-center mt-3 mb-3">
    <h1><b>Daftar Barang</b></h1>
</div>

<table class="table table-bordered table-hover">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Nama</th>
        <th scope="col">Stok</th>
        <th scope="col">Satuan</th>
        <th scope="col">Jenis</th>
    </tr>
</thead>
<tbody>
    <?php while($dummy = mysqli_fetch_assoc($daftarBarang)): ?>
    <tr>
        <th scope="row">1</th>
        <td><?=$dummy['id'];?></td>
        <td><?=$dummy['value'];?></td>
        <td>stok</td>
        <td>satuan</td>
        <td>jenisBarang</td>
    </tr>
    <?php endwhile;?>
</tbody>
</table>

<?php require_once "view/templates/footer.php"; ?>