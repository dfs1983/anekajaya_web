<?php
error_reporting(0);
include 'db.php';
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anekajaya</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/7d288b9368.js" crossorigin="anonymous"></script>
</head>

<body>
	<!-- header
	<header>
		<div class="container">
			<h1><a href="index.php">Anekajaya</a></h1>
			<ul>
				<li><a href="produk.php">Produk</a></li>
			</ul>
		</div>
	</header>-->
	
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
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- new product -->
	<div class="section">
		<div class="container">
			<h3>Produk</h3>
			<div class="box">
				<?php
				if ($_GET['search'] != '' || $_GET['kat'] != '') {
					$where = "AND product_name LIKE '%" . $_GET['search'] . "%' AND category_id LIKE '%" . $_GET['kat'] . "%' ";
				}

				$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 $where ORDER BY product_id DESC");
				if (mysqli_num_rows($produk) > 0) {
					while ($p = mysqli_fetch_array($produk)) {
				?>
						<a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
							<div class="col-4">
								<img src="produk/<?php echo $p['product_image'] ?>">
								<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
								<p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
							</div>
						</a>
					<?php }
				} else { ?>
					<p>Produk tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p><?php echo $a->admin_address ?></p>

			<h4>Email</h4>
			<p><?php echo $a->admin_email ?></p>

			<h4>No. Hp</h4>
			<p><?php echo $a->admin_telp ?></p>
			<small>Copyright &copy; 2022 - Anekajaya.</small>
		</div>
	</div>
</body>

</html>