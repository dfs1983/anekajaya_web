<?php
error_reporting(0);
include 'db.php';
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);
?>
<?php include "include/header.php" ?>

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
	<?php include "include/navbar.php" ?>

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
	<?php
	include "include/footer.php";
	include "include/banner.php";
	?>

	<!-- footer
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
	</div>-->
</body>

</html>