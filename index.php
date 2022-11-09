<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aneka Jaya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images\icon_anekajaya.ico">
  <script src="https://kit.fontawesome.com/7d288b9368.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--Navigasi Bar-->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <img src="images/logo_anekajaya(2).png" width="50" height="50" alt="Logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            <!--kembali ke beranda-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Tentang</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Semua Produk
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Bahan Konstruksi</a></li>
              <li><a class="dropdown-item" href="#">Dekorasi</a></li>
              <li><a class="dropdown-item" href="#">Peralatan Tangan</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <h4 style="margin-left: 15px; font-size: 15px; color:black;">Kategori</h4>
              <li><a class="dropdown-item" href="#">Laundry</a></li>
              <li><a class="dropdown-item" href="#">Penyimpanan</a></li>
              <li><a class="dropdown-item" href="#">Kamar Mandi</a></li>
              <li><a class="dropdown-item" href="#">Dapur</a></li>
              <li><a class="dropdown-item" href="#">Taman</a></li>
              <li><a class="dropdown-item" href="#">Otomotif</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ptlokasi">Lokasi</a>
          </li>
        </ul>
        <a class="navbar-brand" href="https://web.whatsapp.com/">
          <img src="images/icons8-whatsapp-96.png" width="25" height="25">
        </a>
        <a class="navbar-brand" href="login.php">
          <img src="images/icons8-account-96.png" width="24" height="24">
        </a>
        <a class="navbar-brand" href="#">
          <img src="images/icons8-shopping-basket-96.png" width="24" height="24">
        </a>
      </div>
    </div>
  </nav>
  <!-- search -->
  <div class="search">
    <div class="container-fluid p-2" style="background-color: rgb(216, 158, 26);">
      <form action="produk.php">
        <input type="text" name="search" placeholder="Cari Produk">
        <input type="submit" name="cari" value="Cari Produk">
      </form>
    </div>
  </div>

  <!--Slide Show-->
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="images/slide (1).png" class="d-block w-100" alt="Gambar 1">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="images/slide (2).png" class="d-block w-100" alt="Gambar 2">
      </div>
      <div class="carousel-item">
        <img src="images/slide (3).png" class="d-block w-100" alt="Gambar 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>

  <!--Konten barang-->
  <div class="container-fluid">
    <h2 style="font-size: 20px; margin-left: 5px;">Kategori Produk</h2>
    <div class="section">
      <div class="container">
        <h3>Kategori</h3>
        <div class="box">
          <?php
          $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
          if (mysqli_num_rows($kategori) > 0) {
            while ($k = mysqli_fetch_array($kategori)) {
          ?>
              <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
                <div class="col-5">
                  <img src="img/icon-kategori.png" width="50px" style="margin-bottom:5px;">
                  <p><?php echo $k['category_name'] ?></p>
                </div>
              </a>
            <?php }
          } else { ?>
            <p>Kategori tidak ada</p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <!--Kategori Brand-->
  <br>
  <div class="container-fluid">
    <h2 style="font-size: 20px; margin-left: 5px;">Kategori Brand</h2>
    <footer class="text-center text-white" style="background-color: #caced1;">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Images -->
        <section class="">
          <div class="row">
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                <img src="" class="w-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                <img src="" class="w-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                <img src="" class="w-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                <img src="" class="w-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                <img src="" class="w-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                <img src="" class="w-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- Section: Images -->
      </div>
    </footer>
  </div>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Dapatkan informasi terbaru melalui media sosial kami :</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 link-secondary">
          <i class="fa-brands fa-square-facebook"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Location  -->
    <section class="" id="ptlokasi">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-5 mx-auto mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1120328158636!2d112.72661141459535!3d-7.341314294702125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb884619284f%3A0x6998b9b720594b0a!2sMitra10%20Ahmad%20Yani%2C%20Surabaya!5e0!3m2!1sid!2sid!4v1667971658470!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!-- Grid column -->
          <div class="col-5 mx-auto mb-4">
            <h1>Our Newsletter</h1>
            <div class="border"></div>
            <p>Dapatkan informasi terbaru dengan daftar.</p>
            <form action="" class="newsletter-form">
              <input type="text" class="txtb" placeholder="Enter Your Email">
              <input type="submit" class="btn" value="Register">
            </form>
          </div>
        </div>
      </div>
      <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
    <div class="text-center p-2" style="background-color: rgb(216, 158, 26); color:whitesmoke;">
      Dibuat oleh <b>Kelompok 9 TI 2020 B</b>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>