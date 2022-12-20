<?php session_start();
include 'db.php'; ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aneka Jaya</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="images\icon_anekajaya.ico">
</head>

<body>
	<!--Navigasi Bar-->
	<?php include "include/navbar.php"; ?>

	<div class="section">
		<div class="container p-2">
			<h3 style="text-align: center;">Registrasi Akun Baru</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="konsumen_name" placeholder="Nama Lengkap" class="input-control" required>
					<input type="text" name="username" placeholder="Username" class="input-control" required>
					<input type="text" name="password" placeholder="Password" class="input-control" required>
					<input type="text" name="konsumen_telp" placeholder="No Hp" class="input-control" required>
					<input type="text" name="konsumen_email" placeholder="Email" class="input-control" required>
					<input type="text" name="konsumen_address" placeholder="Alamat" class="input-control" required>
					<input type="submit" name="submit" value="Registrasi" class="btnn">
				</form>
				<?php
				if (isset($_POST['submit'])) {

					$konsumen_name = ucwords($_POST['konsumen_name']);
					$username = ucwords($_POST['username']);
					$password = ucwords($_POST['password']);
					$konsumen_telp = ucwords($_POST['konsumen_telp']);
					$konsumen_email = ucwords($_POST['konsumen_email']);
					$address = ucwords($_POST['konsumen_address']);

					$insert = mysqli_query($conn, "INSERT INTO tb_konsumen (konsumen_id, konsumen_name, username, passowrd,
					konsumen_telp, konsumen_email, konsumen_address) VALUES (
											null,
											'" . $konsumen_name . "'),
                                            '" . $username . "'),
                                            '" . $password . "'),
                                            '" . $konsumen_telp . "'),
                                            '" . $konsumen_email . "'),
                                            '" . $konsumen_address . "'), ");
					if ($insert) {
						echo '<script>alert("Registrasi berhasil")</script>';
						echo '<script>window.location="index.php"</script>';
					} else {
						echo 'gagal ' . mysqli_error($conn);
					}
				}
				?>
			</div>
		</div>
	</div>

	<?php include "include/banner.php"; ?>
</body>

</html>