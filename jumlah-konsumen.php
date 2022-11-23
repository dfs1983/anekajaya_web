<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

?>
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
                        <a class="nav-link " aria-current="page" href="dashboard.php">Beranda</a>
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
                        <a class="nav-link active" href="jumlah-konsumen.php">Jumlah Konsumen</a>
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
            <?php
            $getjmlkonsumen = mysqli_query($conn, "select * from tb_konsumen");
            $countjmlkonsumen = mysqli_num_rows($getjmlkonsumen);
            ?>
			<h3>Jumlah Konsumen</h3>

            <h6>Jumlah Konsumen : <?=$countjmlkonsumen;?></h6>
			<div class="box">
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
                            <th>Id Konsumen</th>
							<th>Nama Konsumen</th>
							<th>Username</th>
							<th>Password</th>
							<th>No. Telepom</th>
							<th>Email</th>
							<th>Alamat</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                            $konsumen = mysqli_query($conn, "SELECT * FROM tb_konsumen");
                            if(mysqli_num_rows($konsumen) > 0){
							while($row = mysqli_fetch_array($konsumen)){
						?>
						<tr>
                            <td><?php echo $row['konsumen_id'] ?></td>
                            <td><?php echo $row['konsumen_name'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['password'] ?></td>
							<td><?php echo $row['konsumen_telp'] ?></td>
                            <td><?php echo $row['konsumen_email'] ?></td>
                            <td><?php echo $row['konsumen_address'] ?></td>
						</tr>
                        <?php }}else{ ?>
							<tr>
								<td colspan="7">Tidak ada data</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>