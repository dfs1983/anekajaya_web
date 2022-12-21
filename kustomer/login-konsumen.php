<?php include 'db.php'; ?>
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

<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btnn">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            session_start();
            include 'db.php';

            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $cek = mysqli_query($conn, "SELECT * FROM tb_konsumen WHERE username ='" . $user . "' AND password = '" . MD5($pass) . "'");
            if (mysqli_num_rows($cek) > 0) {
                $d = mysqli_fetch_object($cek);
                $_SESSION['status_login'] = true;
                $_SESSION['a_global'] = $k;
                $_SESSION['id'] = $k->konsumen_id;
                echo '<script>window.location="index.php"</script>';
            } else {
                echo '<script>alert("Username atau password anda salah")</script>';
            }
        }
        ?>
        <p>Belum punya akun? <a href="signup.php">Registrasi</a></p>
    </div>
</body>

</html>