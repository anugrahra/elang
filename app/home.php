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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title>Elang</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><b><i>E</i>LANG</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i> Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Daftar Pengguna</a>
                        <a class="dropdown-item" href="#">Daftar Unit</a>
                        <a class="dropdown-item" href="#">Daftar Pemasok</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-wrench"></i> Barang</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-exchange-alt"></i> Transaksi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Pemesanan</a>
                        <a class="dropdown-item" href="#">Transaksi Penerimaan</a>
                        <a class="dropdown-item" href="#">Transaksi Pengeluaran</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-file-alt"></i> Laporan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Stock Opname</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Laporan Pemesanan</a>
                        <a class="dropdown-item" href="#">Laporan Penerimaan</a>
                        <a class="dropdown-item" href="#">Laporan Pengeluaran</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">

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

    </div> <!-- akhir container -->

    <footer class="text-dark bg-light fixed-bottom">
    <div class="container">
      <div class="row pt-3">
        <div class="col text-center">
          <p>UPTD Air Minum Kota Cimahi &copy; 2019</p>
        </div>
      </div>
    </div>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>