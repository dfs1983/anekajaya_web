<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aneka Jaya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images\icon_anekajaya.ico">
</head>

<body>
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
            <a class="nav-link" href="#">Lokasi</a>
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

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Cari Disini" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
      </div>
    </div>
  </nav>
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
  <h2 style="font-size: 20px; margin-left: 5px;">Kategori Produk</h2>
  <!--Konten barang-->
  <div class="row row-cols-1 row-cols-md-5 g-4">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h2 style="font-size: 20px; margin-left: 5px;">Kategori Brand</h2>
  
  <br>

  <footer>
    <div class="footer-container">
      <div class="left-col">
        <img src="images/logo_anekajaya.png" alt="" class="logo">
        <div class="social-media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <p class="rights-text">2022 Created By <b>Kelompok 9</b></p>
      </div>

      <div class="right-col">
        <h1>Our Newsletter</h1>
        <div class="border"></div>
        <p>Enter Your Email to get our news and updates.</p>
        <form action="" class="newsletter-form">
          <input type="text" class="txtb" placeholder="Enter Your Email">
          <input type="submit" class="btn" value="submit">
        </form>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>