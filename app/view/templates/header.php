<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="elang">
<meta name="description" content="E-Form Keluar Masuk Barang">
<meta name="keywords" content="elang, gudang, sistem gudang, inventory">
<meta name="language" content="Bahasa Indonesia">
<meta name="author" content="Anugrah Ramadhan">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Personal CSS -->
<link rel="stylesheet" href="../public/css/style.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<title>Elang</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"><b><i>E</i>LANG</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php"><i class="fas fa-home"></i> Beranda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> namaUser
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="user_profil.php">Profil</a>
                    <a class="dropdown-item" href="daftar_pengguna.php">Daftar Pengguna</a>
                    <a class="dropdown-item" href="daftar_unit.php">Daftar Unit</a>
                    <a class="dropdown-item" href="#">Daftar Pemasok</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daftar_barang.php"><i class="fas fa-wrench"></i> Barang</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-exchange-alt"></i> Transaksi
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="transaksi_pemesanan.php">Pemesanan</a>
                    <a class="dropdown-item" href="transaksi_penerimaan.php">Transaksi Penerimaan</a>
                    <a class="dropdown-item" href="transaksi_pengeluaran.php">Transaksi Pengeluaran</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-file-alt"></i> Laporan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="stock_opname.php">Stock Opname</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="laporan_pemesanan.php">Laporan Pemesanan</a>
                    <a class="dropdown-item" href="laporan_penerimaan.php">Laporan Penerimaan</a>
                    <a class="dropdown-item" href="laporan_pengeluaran.php">Laporan Pengeluaran</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Keluar</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
