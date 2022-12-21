<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <img src="admin_images/logo_anekajaya(2).png" width="50" height="50" alt="Logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="dashboard.php">Beranda</a>
                    <!--kembali ke beranda-->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Catatan Stok Barang
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="data-kategori.php">Data Kategori</a></li>
                        <li><a class="dropdown-item" href="data-produk.php">Data Produk</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data-penjualan.php">Catatan Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jumlah-konsumen.php">Jumlah Konsumen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="datasupplier.php">Data Supplier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php">Profil</a>
                </li>
            </ul>
            <a href="logout_admin.php" class="btn btn-primary">Logout</a>
        </div>
    </div>
</nav>