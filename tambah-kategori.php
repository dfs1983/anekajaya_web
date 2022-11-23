<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anekajaya</title>
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
                        <a class="nav-link " aria-current="page" href="dashboard.php">Beranda</a>
                        <!--kembali ke beranda-->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catatan Stok Barang
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="data-kategori.php">Data Kategori</a></li>
                            <li><a class="dropdown-item" href="data-produk.php">Data Produk</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catatan Penjualan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Catatan Penjualan Harian</a></li>
                            <li><a class="dropdown-item" href="#">Catatan Penjualan Bulanan</a></li>
                        </ul>
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
                <a href="keluar.php" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </nav>

	<div class="section">
		<div class="container">
			<h3>Tambah Data Kategori</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
					<input type="submit" name="submit" value="Submit" class="btnn">
				</form>
				<?php 
					if(isset($_POST['submit'])){

						$nama = ucwords($_POST['nama']);

						$insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (
											null,
											'".$nama."') ");
						if($insert){
							echo '<script>alert("Tambah data berhasil")</script>';
							echo '<script>window.location="data-kategori.php"</script>';
						}else{
							echo 'gagal '.mysqli_error($conn);
						}

					}
				?>
			</div>
		</div>
	</div>

	<footer>
		<div class="footer-container">
            <div class="left-col">
                <img src="images/logo_anekajaya.png" alt="" class="logo">
                <p class="rights-text">2022 Created By <b>Kelompok 9</b></p>
            </div>
        </div>
	</footer>
</body>
</html>