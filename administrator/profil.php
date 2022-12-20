<?php
session_start();
include 'include_admin/db.php';
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="login.php"</script>';
}

$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '" . $_SESSION['id'] . "' ");
$d = mysqli_fetch_object($query);
?>
<?php include "include_admin/header.php" ?>

<body>
	<?php include "include_admin/navbar.php" ?>

	<div class="section">
		<div class="container">
			<h3 class="pt-5">Profil</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name ?>" required>
					<input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>" required>
					<input type="text" name="hp" placeholder="No Hp" class="input-control" value="<?php echo $d->admin_telp ?>" required>
					<input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email ?>" required>
					<input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_address ?>" required>
					<input type="submit" name="submit" value="Ubah Profil" class="btnn">
				</form>
				<?php
				if (isset($_POST['submit'])) {

					$nama 	= ucwords($_POST['nama']);
					$user 	= $_POST['user'];
					$hp 	= $_POST['hp'];
					$email 	= $_POST['email'];
					$alamat = ucwords($_POST['alamat']);

					$update = mysqli_query($conn, "UPDATE tb_admin SET 
										admin_name = '" . $nama . "',
										username = '" . $user . "',
										admin_telp = '" . $hp . "',
										admin_email = '" . $email . "',
										admin_address = '" . $alamat . "'
										WHERE admin_id = '" . $d->admin_id . "' ");
					if ($update) {
						echo '<script>alert("Ubah data berhasil")</script>';
						echo '<script>window.location="profil.php"</script>';
					} else {
						echo 'gagal ' . mysqli_error($conn);
					}
				}
				?>
			</div>

			<h3 class="pt-5">Ubah Password</h3>
			<div class="box pb-5">
				<form action="" method="POST">
					<input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
					<input type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required>
					<input type="submit" name="ubah_password" value="Ubah Password" class="btnn">
				</form>
				<?php
				if (isset($_POST['ubah_password'])) {

					$pass1 	= $_POST['pass1'];
					$pass2 	= $_POST['pass2'];

					if ($pass2 != $pass1) {
						echo '<script>alert("Konfirmasi Password Baru tidak sesuai")</script>';
					} else {

						$u_pass = mysqli_query($conn, "UPDATE tb_admin SET 
										password = '" . MD5($pass1) . "'
										WHERE admin_id = '" . $d->admin_id . "' ");
						if ($u_pass) {
							echo '<script>alert("Ubah data berhasil")</script>';
							echo '<script>window.location="profil.php"</script>';
						} else {
							echo 'gagal ' . mysqli_error($conn);
						}
					}
				}
				?>
			</div>
		</div>
	</div>
	<?php include "include_admin/banner.php" ?>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
	</script>
</body>

</html>