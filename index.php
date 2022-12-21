<?php include "db.php"; ?>

<?php include "include/header.php"; ?>

<body>
  <?php include "include/navbar.php"; ?>

  <!-- search -->
  <div class="search">
    <div class="container-fluid p-2">
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

  <!--Kategori-->
  <div class="container-fluid">
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
                  <img src="images/icon-kategori.png" width="50px" style="margin-bottom:5px;">
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

  <!--Produk-->
  <div class="section" id="katalog_produk">
    <div class="container">
      <h3>Katalog Produk</h3>
      <div class="box">
        <?php
        $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC");
        if (mysqli_num_rows($produk) > 0) {
          while ($p = mysqli_fetch_array($produk)) {
        ?>

            <div class="card col-4" style="width:18rem;">
              <img src="produk/<?php echo $p['product_image'] ?>" class="card-img-top" alt="<?php echo substr($p['product_name'], 0, 30) ?>" height="200px" width="50px">
              <div class="card-body">
                <h5 class="card-title" style="font-size: 18px;"><?php echo substr($p['product_name'], 0, 30) ?></h5>
                <p class="card-text">Rp.<?php echo number_format($p['product_price']) ?></p>
              </div>
              <div class="card-body text-end">
                <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>" class="btn btn-warning">Detail</a>
                <a href="keranjang.php" class="btn btn-warning" type="beli">Beli</a>
              </div>
            </div>

          <?php }
        } else { ?>
          <p>Produk tidak ada</p>
        <?php } ?>
      </div>
    </div>
  </div>
  </div>

  <?php include "include/footer.php" ?>
  <?php include "include/banner.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>