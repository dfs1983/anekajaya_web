<?php 
	session_start();
	include 'db.php';
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
        </div>
    </nav>

	<div class="section">
		<div class="container">
			<h3>Sign Up</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required>
                    <input type="text" name="username" placeholder="Username" class="input-control" required>
                    <input type="text" name="password" placeholder="Password" class="input-control" required>
                    <input type="text" name="hp" placeholder="No Hp" class="input-control" required>
                    <input type="text" name="email" placeholder="Email" class="input-control" required>
                    <input type="text" name="alamat" placeholder="Alamat" class="input-control" required>
					<input type="submit" name="submit" value="Sign Up" class="btnn">
				</form>
				<?php 
					if(isset($_POST['submit'])){

						$nama = ucwords($_POST['nama']);
                        $username = ucwords($_POST['username']);
                        $password = ucwords($_POST['password']);
                        $hp = ucwords($_POST['hp']);
                        $email = ucwords($_POST['email']);
                        $alamat = ucwords($_POST['alamat']);

						$insert = mysqli_query($conn, "INSERT INTO tb_konsumen VALUES (
											null,
											'".$nama."'),
                                            '".$username."'),
                                            '".$password."'),
                                            '".$hp."'),
                                            '".$email."'),
                                            '".$alamat."') ");
						if($insert){
							echo '<script>alert("Sign Up berhasil")</script>';
							echo '<script>window.location="signup.php"</script>';
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