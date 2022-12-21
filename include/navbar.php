<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <img src="images/logo_anekajaya(2).png" width="50" height="50" alt="Logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php" style="color: whitesmoke;">Beranda</a>
                    <!--kembali ke beranda-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" style="color: whitesmoke;">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#katalog_produk" style="color: whitesmoke;">Katalog Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lokasi-toko.php" style="color: whitesmoke;">Lokasi</a>
                </li>
            </ul>
            <div class="currency" style="color: whitesmoke;">
                <?php
                if (!isset($_SESSION['konsumen_email'])) {
                    echo "Selamat Datang : Guest";
                } else {
                    echo "Selamat Datang : " . $_SESSION['konsumen_email'] . "";
                }
                ?>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a class="navbar-brand" href="https://web.whatsapp.com/">
                <img src="images/icons8-whatsapp-96.png" width="25" height="25">
            </a>
            <a class="navbar-brand" href="login.php">
                <img src="images/icons8-account-96.png" width="24" height="24">
            </a>
            <a class="navbar-brand" href="keranjang.php">
                <img src="images/icons8-shopping-basket-96.png" width="24" height="24">
            </a>
        </div>
    </div>
</nav>