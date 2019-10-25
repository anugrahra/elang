<?php require_once "view/templates/header.php"; ?>

<div class="row justify-content-center mt-5">
    <h1>Selamat Datang, <b>User</b> :)</h1>
</div>

<div class="row justify-content-around text-center mt-5">    
    <div class="card" style="width: 25rem;">
        <h1 class="display-1"><i class="fas fa-shopping-cart"></i></h1>
        <div class="card-body">
            <h5 class="card-title">Pemesanan Barang</h5>
            <p class="card-text">Pesan alat dan barang yang anda butuhkan</p>
            <a href="#" class="btn btn-primary">Pesan</a>
        </div>
    </div>
    <div class="card" style="width: 25rem;">
        <h1 class="display-1"><i class="fas fa-search"></i></h1>
        <div class="card-body">
            <h5 class="card-title">Pencarian Barang</h5>
            <p class="card-text">Cari alat dan barang yang anda butuhkan</p>
            <a href="#" class="btn btn-primary">Cari</a>
        </div>
    </div>
</div>

<?php require_once "view/templates/footer.php"; ?>